<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Event;
use App\Models\Market;
use App\Models\Result;
use App\Models\Student;
use App\Models\User;
use App\Models\Subject;
use App\Models\Testimony;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function create(Request $request){
        //create method
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string', 'min:8'],           
        ]);
        $registration = new Admin();
        $registration->name = $request->name;
        $registration->email = $request->email;
        $registration->password = \Hash::make($request->password);
        $registration->save();
 
        if ($registration) {
            return redirect()->route('admin.home')->with('success', 'you have successfully registered');
                
            }else{
                return redirect()->back()->with('error', 'you have fail to registered');
        }
    }

    

    public function check(Request $request){
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'exists:admins'],
            'password' => ['required', 'string', 'min:8']
        ], [
            'email.exist'=>'This email does not exist in the admins table'
        ]);
        $creds = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($creds)) {
            return redirect()->route('admin.home')->with('success', 'You have successfully login');
        }else{
            return redirect()->route('admin.login')->with('error', 'Failed to login');
        }
    }

    public function home(){
        $countstudent = User::where('role', null)->count();
        $countsubjects = Subject::count();
        $countsubjecthigh = Subject::where('section', 'Primary')->count();
        $countsubjectprim = Subject::where('section', 'Nursery')->count();
        $countteacher = User::where('assign', 'teacher')->count();
        $view_students = User::where('assign1', 'student')->latest()->take(10)->get();
        $view_results = Result::latest()->take(10)->get();
        $markets = Market::latest()->take(10)->get();
        
        $view_lecturers = User::where('assign', 'teacher')->latest()->take(8)->get();
        $countteacheruyo = User::where('section', 'Primary')
        ->where('assign', 'teacher')->where('role', 'approved')->count();
        $countteacherabuja = User::where('section', 'Nursery')->where('role', 'approved')
        ->where('assign', 'teacher')->count();
        $countstudenttsuspend = User::where('assign1', 'student')->where('status', 'suspend')->count();
        $countstudentapprove = User::where('assign1', 'student')->where('status', 'suspend')->count();
        $countstudentreject = User::where('assign1', 'student')->where('status', 'reject')->count();
        $countsqueries = User::where('role', 'approved')->where('assign', 'teacher')->where('section', 'Pre-Nursery')->count();
        $countsrepliedqueries = Subject::where('section', 'Pre-Nursery')->count();
        $countsevents = Event::where('status', 'reply')->count();
        $countstestimony = Testimony::where('status', 'reply')->count();
        $countsmarkets = Market::count();
        $view_parents = User::where('assign', 'parent')->take(10)->get();

        
        
        return view('dashboard.admin.home', compact('view_parents', 'markets', 'view_results', 'view_students', 'view_lecturers', 'countsmarkets', 'countstudent', 'countstestimony', 'countsevents', 'countsrepliedqueries','countsqueries', 'countstudentreject', 'countstudentapprove', 'countstudenttsuspend', 'countteacherabuja', 'countteacheruyo', 'countteacher', 'countsubjectprim', 'countsubjecthigh', 'countsubjects'));
    }

    public function profile() {

        return view('dashboard.admin.profile');
    }

    public function settingsupdate(Request $request, $id){
        $edit_profiles = Admin::find($id);
        $edit_profiles = Admin::where('id', $id)->first();
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'designation' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255'],

            'phone' => ['required', 'string'],
            'address' => ['required', 'string'],
            'studycenter' => ['required', 'string'],
            'images' => 'nullable|mimes:jpg,png,jpeg'
        ]);
       // dd($request->all());
        if ($request->hasFile('images')){

            $file = $request['images'];
            $filename = 'SimonJonah-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $request->file('images')->storeAs('resourceimages', $filename);

        }
        $edit_profiles['images'] = $path;
        $edit_profiles->name = $request->name;
        $edit_profiles->email = $request->email;
        $edit_profiles->address = $request->address;
        $edit_profiles->phone = $request->phone;
        $edit_profiles->studycenter = $request->studycenter;
        $edit_profiles->designation = $request->designation;


        $edit_profiles->update();

        return redirect()->back()->with('success', 'you have update successfully');

    }



    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
    
    
}
