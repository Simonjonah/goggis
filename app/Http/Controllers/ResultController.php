<?php

namespace App\Http\Controllers;

use App\Models\Academicsession;
use App\Models\Classname;
use App\Models\Moto;
use App\Models\Motor;
use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\Pin;
use App\Models\Position;
use App\Models\User;
use App\Models\Psycomotor;
use App\Models\Result2ndTerm;
use App\Models\Result3rdTerm;
use PDF;
use DB;
use Illuminate\Support\Facades\Auth;
class ResultController extends Controller
{
   
    public function createresults(Request $request){
        if (Auth::guard('web')->user()->section == 'Pre-Nursery' && Auth::guard('web')->user()->classname == 'Lower pre-Nursery') {
            $data = [];
            $subjectnames = $request->input('subjectname');
            
            $user_ids = $request->input('user_id');
            $sections = $request->input('section');
          
            $teacher_ids = $request->input('teacher_id');
            $academic_sessions = $request->input('academic_session');
            $regnumbers = $request->input('regnumber');
            $terms = $request->input('term');
            $images_s = $request->input('images');
            $classnames = $request->input('classname');
            
            $categories = $request->input('category');
            $fnames = $request->input('fname');
            $middlenames = $request->input('middlename');
            $surnames = $request->input('surname');
            $genders = $request->input('gender');
            $comments = $request->input('comment');
            // $test_1s = $request->input('test_1');
            // $examss = $request->input('exams');

            
            for ($i = 0; $i < count($subjectnames); $i++) {
                $data[] = [
    
                    'subjectname' => $subjectnames[$i],
                    'comment' => $comments[$i],
                    // 'test_1' => $test_1s[$i],
                    // 'test_2' => $test_2s[$i],
                    // 'test_3' => $test_3s[$i],
                    // 'exams' => $examss[$i],
                    'user_id' => $user_ids[$i],
                    'section' => $sections[$i],
                    'academic_session' =>$academic_sessions[$i],
                    'images' =>$images_s[$i],
                    'regnumber' =>$regnumbers[$i],
                    'teacher_id' =>$teacher_ids[$i],
                    'term' => $terms[$i],
                    'classname' => $classnames[$i],
                    
                    'category' => $categories[$i],
                    'fname' => $fnames[$i],
                    'section' => $sections[$i],
                    'surname' => $surnames[$i],
                    'middlename' => $middlenames[$i],
                    'gender' => $genders[$i],
    
                ];
            }  
        }elseif (Auth::guard('web')->user()->section == 'Pre-Nursery' && Auth::guard('web')->user()->classname == 'Upper pre-Nursery') {
            $data = [];
            $subjectnames = $request->input('subjectname');
            
            $user_ids = $request->input('user_id');
            $sections = $request->input('section');
          
            $teacher_ids = $request->input('teacher_id');
            $academic_sessions = $request->input('academic_session');
            $regnumbers = $request->input('regnumber');
            $terms = $request->input('term');
            $images_s = $request->input('images');
            $classnames = $request->input('classname');
            
            $categories = $request->input('category');
            $fnames = $request->input('fname');
            $middlenames = $request->input('middlename');
            $surnames = $request->input('surname');
            $genders = $request->input('gender');
            $comments = $request->input('comment');
            $test_1s = $request->input('test_1');
            $examss = $request->input('exams');

            
            for ($i = 0; $i < count($subjectnames); $i++) {
                $data[] = [
    
                    'subjectname' => $subjectnames[$i],
                    'comment' => $comments[$i],
                    'test_1' => $test_1s[$i],
                    // 'test_2' => $test_2s[$i],
                    // 'test_3' => $test_3s[$i],
                    'exams' => $examss[$i],
                    'user_id' => $user_ids[$i],
                    'section' => $sections[$i],
                    'academic_session' =>$academic_sessions[$i],
                    'images' =>$images_s[$i],
                    'regnumber' =>$regnumbers[$i],
                    'teacher_id' =>$teacher_ids[$i],
                    'term' => $terms[$i],
                    'classname' => $classnames[$i],
                    
                    'category' => $categories[$i],
                    'fname' => $fnames[$i],
                    'section' => $sections[$i],
                    'surname' => $surnames[$i],
                    'middlename' => $middlenames[$i],
                    'gender' => $genders[$i],
    
                ];
            }
        
        }elseif (Auth::guard('web')->user()->section == 'Nursery') {
            # code...
            $data = [];
            $subjectnames = $request->input('subjectname');
            $test_1s = $request->input('test_1');
            // $test_2s = $request->input('test_2');
            // $comments = $request->input('comment');
            $examss = $request->input('exams');
            $user_ids = $request->input('user_id');
            $sections = $request->input('section');
          
            $teacher_ids = $request->input('teacher_id');
            $academic_sessions = $request->input('academic_session');
            $regnumbers = $request->input('regnumber');
            $terms = $request->input('term');
            $images_s = $request->input('images');
            $classnames = $request->input('classname');
            // 
            $categories = $request->input('category');
            $fnames = $request->input('fname');
            $middlenames = $request->input('middlename');
            $surnames = $request->input('surname');
            $genders = $request->input('gender');
            // $comments = $request->input('comment');

            
            for ($i = 0; $i < count($subjectnames); $i++) {
                $data[] = [
    
                    'subjectname' => $subjectnames[$i],
                    // 'comment' => $comments[$i],
                    'test_1' => $test_1s[$i],
                    // 'test_2' => $test_2s[$i],
                    // 'test_3' => $test_3s[$i],
                    'exams' => $examss[$i],
                    'user_id' => $user_ids[$i],
                    'section' => $sections[$i],
                    'academic_session' =>$academic_sessions[$i],
                    'images' =>$images_s[$i],
                    'regnumber' =>$regnumbers[$i],
                    'teacher_id' =>$teacher_ids[$i],
                    'term' => $terms[$i],
                    'classname' => $classnames[$i],
                    // 
                    'category' => $categories[$i],
                    'fname' => $fnames[$i],
                    'surname' => $surnames[$i],
                    'middlename' => $middlenames[$i],
                    'gender' => $genders[$i],
    
                ];
            }
        }elseif (Auth::guard('web')->user()->section == 'Primary') {
           
           $data = [];
           $subjectnames = $request->input('subjectname');
           $test_1s = $request->input('test_1');
        //    $test_2s = $request->input('test_2');
           // $test_3s = $request->input('test_3');
           $examss = $request->input('exams');
           $user_ids = $request->input('user_id');
           $sections = $request->input('section');
         
           $teacher_ids = $request->input('teacher_id');
           $academic_sessions = $request->input('academic_session');
           $regnumbers = $request->input('regnumber');
           $terms = $request->input('term');
           $images_s = $request->input('images');
           $classnames = $request->input('classname');
           
           $categories = $request->input('category');
           $fnames = $request->input('fname');
           $middlenames = $request->input('middlename');
           $surnames = $request->input('surname');
           $genders = $request->input('gender');
           $tnames = $request->input('tname');
           $tsurnames = $request->input('tsurname');
           // $comments = $request->input('comment');

           
           for ($i = 0; $i < count($subjectnames); $i++) {
               $data[] = [
   
                   'subjectname' => $subjectnames[$i],
                   // 'comment' => $comments[$i],
                   'test_1' => $test_1s[$i],
                //    'test_2' => $test_2s[$i],
                   // 'test_3' => $test_3s[$i],
                   'exams' => $examss[$i],
                   'user_id' => $user_ids[$i],
                   'section' => $sections[$i],
                   'academic_session' =>$academic_sessions[$i],
                   'images' =>$images_s[$i],
                   'regnumber' =>$regnumbers[$i],
                   'teacher_id' =>$teacher_ids[$i],
                   'term' => $terms[$i],
                   'classname' => $classnames[$i],
                   
                   'category' => $categories[$i],
                   'fname' => $fnames[$i],
                   'surname' => $surnames[$i],
                   'middlename' => $middlenames[$i],
                   'gender' => $genders[$i],
                   'tname' => $tnames[$i],
                   'tsurname' => $tsurnames[$i],
   
               ];
           } 

        }
            
   
            Result::insert($data);
 
       return redirect()->back()->with('success', 'you have added successfully');
    }






    public function createresultsbyadmin(Request $request){
        // dd($request->section == 'Pre-Nursery');
        if ($sections = $request->input('section')) {
            $data = [];
            $test_1s = $request->input('test_1');
            
            $examss = $request->input('exams');
            $subjectnames = $request->input('subjectname');
            $user_ids = $request->input('user_id');
            $sections = $request->input('section');
            $academic_sessions = $request->input('academic_session');
            $regnumbers = $request->input('regnumber');
            $terms = $request->input('term');
            $images_s = $request->input('images');
            $classnames = $request->input('classname');
            
            $categories = $request->input('category');
            $fnames = $request->input('fname');
            $middlenames = $request->input('middlename');
            $surnames = $request->input('surname');
            $genders = $request->input('gender');
            $comments = $request->input('comment');

            
            for ($i = 0; $i < count($subjectnames); $i++) {
                $data[] = [
    
                    'subjectname' => $subjectnames[$i],
                    'comment' => $comments[$i],
                    'user_id' => $test_1s[$i],
                    'test_1' => $examss[$i],
                    'exams' => $user_ids[$i],
                    'section' => $sections[$i],
                    'academic_session' =>$academic_sessions[$i],
                    'images' =>$images_s[$i],
                    'regnumber' =>$regnumbers[$i],
                    
                    'term' => $terms[$i],
                    'classname' => $classnames[$i],
                    'category' => $categories[$i],
                    'fname' => $fnames[$i],
                    'section' => $sections[$i],
                    'surname' => $surnames[$i],
                    'middlename' => $middlenames[$i],
                    'gender' => $genders[$i],
    
                ];
            }  
        }elseif ($request->section == 'Nursery') {
            $data = [];
            $subjectnames = $request->input('subjectname');
            $test_1s = $request->input('test_1');
            
            $examss = $request->input('exams');
            $user_ids = $request->input('user_id');
            $sections = $request->input('section');
          
            
            $academic_sessions = $request->input('academic_session');
            $regnumbers = $request->input('regnumber');
            $terms = $request->input('term');
            $images_s = $request->input('images');
            $classnames = $request->input('classname');
            // 
            $categories = $request->input('category');
            $fnames = $request->input('fname');
            $middlenames = $request->input('middlename');
            $surnames = $request->input('surname');
            $genders = $request->input('gender');
            // $comments = $request->input('comment');

            
            for ($i = 0; $i < count($subjectnames); $i++) {
                $data[] = [
    
                    'subjectname' => $subjectnames[$i],
                    'test_1' => $test_1s[$i],
                 
                    'exams' => $examss[$i],
                    'user_id' => $user_ids[$i],
                    'section' => $sections[$i],
                    'academic_session' =>$academic_sessions[$i],
                    'images' =>$images_s[$i],
                    'regnumber' =>$regnumbers[$i],
                    'term' => $terms[$i],
                    'classname' => $classnames[$i],
                    // 
                    'category' => $categories[$i],
                    'fname' => $fnames[$i],
                    'surname' => $surnames[$i],
                    'middlename' => $middlenames[$i],
                    'gender' => $genders[$i],
    
                ];
            }
        }elseif ($request->section == 'Primary') {
           
           $data = [];
           $subjectnames = $request->input('subjectname');
           $test_1s = $request->input('test_1');
      
           $examss = $request->input('exams');
           $user_ids = $request->input('user_id');
           $sections = $request->input('section');
         
           $academic_sessions = $request->input('academic_session');
           $regnumbers = $request->input('regnumber');
           $terms = $request->input('term');
           $images_s = $request->input('images');
           $classnames = $request->input('classname');
           
           $categories = $request->input('category');
           $fnames = $request->input('fname');
           $middlenames = $request->input('middlename');
           $surnames = $request->input('surname');
           $genders = $request->input('gender');
           $tnames = $request->input('tname');
           $tsurnames = $request->input('tsurname');
           // $comments = $request->input('comment');

           
           for ($i = 0; $i < count($subjectnames); $i++) {
               $data[] = [
                   'subjectname' => $subjectnames[$i],
                   'test_1' => $test_1s[$i],
                   'exams' => $examss[$i],
                   'user_id' => $user_ids[$i],
                   'section' => $sections[$i],
                   'academic_session' =>$academic_sessions[$i],
                   'images' =>$images_s[$i],
                   'regnumber' =>$regnumbers[$i],
                  
                   'term' => $terms[$i],
                   'classname' => $classnames[$i],
                   
                   'category' => $categories[$i],
                   'fname' => $fnames[$i],
                   'surname' => $surnames[$i],
                   'middlename' => $middlenames[$i],
                   'gender' => $genders[$i],
                   'tname' => $tnames[$i],
                   'tsurname' => $tsurnames[$i],
   
               ];
           } 

        }
            
   
            Result::insert($data);
 
       return redirect()->back()->with('success', 'you have added successfully');
    }





    //MIDTERM RESULT SUBMISSION

    public function createmidtermresults(Request $request){
        // dd($request->all());
        if (Auth::guard('web')->user()->section == 'Early Years Foundation Stage (EYFS)') {
            $data = [];
            $subjectnames = $request->input('subjectname');
            $types = $request->input('type');
           
            $user_ids = $request->input('user_id');
            $sections = $request->input('section');
          
            $teacher_ids = $request->input('teacher_id');
            $academic_sessions = $request->input('academic_session');
            $regnumbers = $request->input('regnumber');
            $terms = $request->input('term');
            $images_s = $request->input('images');
            $classnames = $request->input('classname');
            
            $categories = $request->input('category');
            $fnames = $request->input('fname');
            $middlenames = $request->input('middlename');
            $surnames = $request->input('surname');
            $genders = $request->input('gender');
            $comments = $request->input('comment');

            
            for ($i = 0; $i < count($subjectnames); $i++) {
                $data[] = [
    
                    'subjectname' => $subjectnames[$i],
                    'comment' => $comments[$i],
                    'type' => $types[$i],
                    // 'test_2' => $test_2s[$i],
                    // 'test_3' => $test_3s[$i],
                    // 'exams' => $examss[$i],
                    'user_id' => $user_ids[$i],
                    'section' => $sections[$i],
                    'academic_session' =>$academic_sessions[$i],
                    'images' =>$images_s[$i],
                    'regnumber' =>$regnumbers[$i],
                    'teacher_id' =>$teacher_ids[$i],
                    'term' => $terms[$i],
                    'classname' => $classnames[$i],
                    
                    'category' => $categories[$i],
                    'fname' => $fnames[$i],
                    'surname' => $surnames[$i],
                    'middlename' => $middlenames[$i],
                    'gender' => $genders[$i],
    
                ];
            }  
        }elseif (Auth::guard('web')->user()->section == 'Primary') {
            # code...
            $data = [];
            $subjectnames = $request->input('subjectname');
            $exps = $request->input('exp');
            $apps = $request->input('app');
            $pras = $request->input('pra');
            $types = $request->input('type');

            $comments = $request->input('comment');
            $user_ids = $request->input('user_id');
            $sections = $request->input('section');
          
            $teacher_ids = $request->input('teacher_id');
            $academic_sessions = $request->input('academic_session');
            $regnumbers = $request->input('regnumber');
            $terms = $request->input('term');
            $images_s = $request->input('images');
            $classnames = $request->input('classname');
            
            $categories = $request->input('category');
            $fnames = $request->input('fname');
            $middlenames = $request->input('middlename');
            $surnames = $request->input('surname');
            $genders = $request->input('gender');
            // $comments = $request->input('comment');

            
            for ($i = 0; $i < count($subjectnames); $i++) {
                $data[] = [
    
                    'subjectname' => $subjectnames[$i],
                    'comment' => $comments[$i],
                    'exp' => $exps[$i],
                    'app' => $apps[$i],
                    'pra' => $pras[$i],
                    'type' => $types[$i],
                    'user_id' => $user_ids[$i],
                    'section' => $sections[$i],
                    'academic_session' =>$academic_sessions[$i],
                    'images' =>$images_s[$i],
                    'regnumber' =>$regnumbers[$i],
                    'teacher_id' =>$teacher_ids[$i],
                    'term' => $terms[$i],
                    'classname' => $classnames[$i],
                    
                    'category' => $categories[$i],
                    'fname' => $fnames[$i],
                    'surname' => $surnames[$i],
                    'middlename' => $middlenames[$i],
                    'gender' => $genders[$i],
    
                ];
            }
        }elseif (Auth::guard('web')->user()->section == 'High School') {
           
           $data = [];
           $subjectnames = $request->input('subjectname');
           $test_1s = $request->input('test_1');
           $test_2s = $request->input('test_2');
           $types = $request->input('type');
           $user_ids = $request->input('user_id');
           $sections = $request->input('section');
           $teacher_ids = $request->input('teacher_id');
           $academic_sessions = $request->input('academic_session');
           $regnumbers = $request->input('regnumber');
           $terms = $request->input('term');
           $images_s = $request->input('images');
           $classnames = $request->input('classname');
           
           $categories = $request->input('category');
           $fnames = $request->input('fname');
           $middlenames = $request->input('middlename');
           $surnames = $request->input('surname');
           $genders = $request->input('gender');
           $tnames = $request->input('tname');
           $tsurnames = $request->input('tsurname');

           
           for ($i = 0; $i < count($subjectnames); $i++) {
               $data[] = [
   
                   'subjectname' => $subjectnames[$i],
                   // 'comment' => $comments[$i],
                   'test_1' => $test_1s[$i],
                   'test_2' => $test_2s[$i],
                  
                   'type' => $types[$i],
                   'user_id' => $user_ids[$i],
                   'section' => $sections[$i],
                   'academic_session' =>$academic_sessions[$i],
                   'images' =>$images_s[$i],
                   'regnumber' =>$regnumbers[$i],
                   'teacher_id' =>$teacher_ids[$i],
                   'term' => $terms[$i],
                   'classname' => $classnames[$i],
                   
                   'category' => $categories[$i],
                   'fname' => $fnames[$i],
                   'surname' => $surnames[$i],
                   'middlename' => $middlenames[$i],
                   'gender' => $genders[$i],
                   'tname' => $tnames[$i],
                   'tsurname' => $tsurnames[$i],
   
               ];
           } 

        }
            
   
            Result::insert($data);
 
       return redirect()->back()->with('success', 'you have added successfully');
    }

    public function pioneertermresults(){
        $view_myresults = Result::where('teacher_id', auth::guard('web')->id())
         ->where('term', 'First Term')->where('status', null)
         ->Orwhere('status', 'approved')
        ->get();
        $view_classes = Classname::all();
        $view_sessions = Academicsession::all();
        return view('dashboard.pioneertermresults', compact('view_sessions', 'view_classes', 'view_myresults'));
    }

    public function pioneermidtermresults(){
        $view_midtermmyresults = Result::where('teacher_id', auth::guard('web')->id())
         ->where('term', 'First Term')->where('status', null)
         ->where('type', 'Midterm')
        ->get();
        $view_classes = Classname::all();
        $view_sessions = Academicsession::all();
        return view('dashboard.pioneermidtermresults', compact('view_sessions', 'view_classes', 'view_midtermmyresults'));
    }

    public function pioneertermresultsapproved(){
        $view_myresults = Result::where('teacher_id', auth::guard('web')->id())
         ->where('term', 'First Term')->where('status', 'disabled')
         ->where('type', null)

        ->get();
        $view_classes = Classname::all();
        $view_sessions = Academicsession::all();

        return view('dashboard.pioneertermresultsapproved', compact('view_sessions', 'view_classes', 'view_myresults'));
    }

    public function pioneermidtermresultsapproved(){
        $view_midtermmyresults = Result::where('teacher_id', auth::guard('web')->id())
         ->where('term', 'First Term')->where('status', 'approved')
         ->where('type', 'Midterm')

        ->get();
        $view_classes = Classname::all();
        $view_sessions = Academicsession::all();

        return view('dashboard.pioneermidtermresultsapproved', compact('view_sessions', 'view_classes', 'view_midtermmyresults'));
    }

    
    
    public function teacherviewresults($user_id){
        $view_myresult_results = Result::where('user_id', $user_id)
        ->where('term', 'First Term')
        ->get();

        $view_results = Result::where('user_id', $user_id)->first();
           
        return view('dashboard.teacherviewresults', compact('view_results', 'view_myresult_results'));
    }

    public function teacherviewresults2nd($user_id){
        $view_myresult_results = Result::where('user_id', $user_id)
        ->where('term', 'Second Term')
        ->get();

        $view_results = Result::where('user_id', $user_id)->first();
           
        return view('dashboard.teacherviewresults', compact('view_results', 'view_myresult_results'));
    }
    public function pensulatermresults(){
        $view_myresults = Result::where('teacher_id', auth::guard('web')->id())
         ->where('term', 'Second Term')
         ->where('status', null)
        ->get();
        $view_classes = Classname::all();
        return view('dashboard.pensulatermresults', compact('view_classes', 'view_myresults'));
    }

    
    public function penultimatetermresults(){
        $view_myresults = Result::where('teacher_id', auth::guard('web')->id())
         ->where('term', 'Second Term')
         ->where('status', null)
         ->Orwhere('status', 'approved')
        ->get();
        $view_classes = Classname::all();
        $view_sessions = Academicsession::all();
        return view('dashboard.penultimatetermresults', compact('view_sessions', 'view_classes', 'view_myresults'));
    }

    public function penmiftermresults(){
        $view_midtermmyresults = Result::where('teacher_id', auth::guard('web')->id())
         ->where('term', 'Second Term')
         ->where('status', null)
         ->where('type', 'Midterm')
        ->get();
        $view_classes = Classname::all();
        $view_sessions = Academicsession::all();
        return view('dashboard.penmiftermresults', compact('view_sessions', 'view_classes', 'view_midtermmyresults'));
    }

    
    public function penmidteresultsapproved(){
        $view_midtermmyresults = Result::where('teacher_id', auth::guard('web')->id())
         ->where('term', 'Second Term')
         ->where('status', 'approved')
         ->where('type', 'Midterm')

        ->get();
        $view_classes = Classname::all();
        $view_sessions = Academicsession::all();

        return view('dashboard.penmidteresultsapproved', compact('view_sessions', 'view_classes', 'view_midtermmyresults'));
    }
    

    public function penultimatetermresultsapproved(){
        $view_myresults = Result::where('teacher_id', auth::guard('web')->id())
         ->where('term', 'Second Term')
         ->where('status', 'disabled')
         ->where('type', null)

        ->get();
        $view_classes = Classname::all();
        $view_sessions = Academicsession::all();

        return view('dashboard.penultimatetermresultsapproved', compact('view_sessions', 'view_classes', 'view_myresults'));
    }
    

    public function teacherviewresults3rd($user_id){
        $view_myresult_results = Result::where('user_id', $user_id)
        ->where('term', 'Third Term')
        ->get();
        $view_results = Result::where('user_id', $user_id)->first();
           
        return view('dashboard.teacherviewresults3rd', compact('view_results', 'view_myresult_results'));
    }

    public function addpsychomotor($id){
        $add_psychomotor = Result::find($id);
        return view('dashboard.addpsychomotor', compact('add_psychomotor'));
    }

    public function addpsychomotoradmin($id){
        $addpsychomotoradmin = Result::find($id);
        return view('dashboard.admin.addpsychomotoradmin', compact('addpsychomotoradmin'));
    }

    
    public function premiumtermresults(){
        $view_myresults = Result::where('teacher_id', auth::guard('web')->id())
         ->where('term', 'Third Term')
         ->where('status', null)
         ->Orwhere('status', 'approved')
        ->get();
        $view_classes = Classname::all();
        $view_sessions = Academicsession::all();
        return view('dashboard.premiumtermresults', compact('view_classes', 'view_sessions', 'view_myresults'));
    }


    public function premiumidtermresults(){
        $view_midtermmyresults = Result::where('teacher_id', auth::guard('web')->id())
         ->where('term', 'Third Term')
         ->where('status', null)
         ->where('type', 'Midterm')
        ->get();
        $view_classes = Classname::all();
        $view_sessions = Academicsession::all();
        return view('dashboard.premiumidtermresults', compact('view_classes', 'view_sessions', 'view_midtermmyresults'));
    }

    
    
    public function premidtermresultapproved(){
        $view_midtermmyresults = Result::where('teacher_id', auth::guard('web')->id())
         ->where('term', 'Third Term')
         ->where('status', 'approved')
         ->where('type', 'Midterm')

        ->get();
        $view_classes = Classname::all();
        $view_sessions = Academicsession::all();
        return view('dashboard.premidtermresultapproved', compact('view_sessions', 'view_classes', 'view_midtermmyresults'));
    }
    

    public function tpremiumprimarytermresults(){
        $view_myresults = Result::where('teacher_id', auth::guard('web')->id())
         ->where('term', 'Third Term')
         ->where('status', 'disabled')
         

        ->get();
        $view_classes = Classname::all();
        $view_sessions = Academicsession::all();
        return view('dashboard.tpremiumprimarytermresults', compact('view_sessions', 'view_classes', 'view_myresults'));
    }
    


    
    
   
    public function checkresult(){
       $the_results = Academicsession::all();
       $check_results = User::where('user_id', auth::guard('web')->id())
        ->get();

        $view_classes = Classname::all();
     
        return view('dashboard.checkresult', compact('view_classes', 'check_results', 'the_results'));
    }

    public function checkmidtermresult(){
        $the_results = Academicsession::all();
        $check_results = User::where('user_id', auth::guard('web')->id())
         ->get();
 
         $view_classes = Classname::all();
      
         return view('dashboard.checkmidtermresult', compact('view_classes', 'check_results', 'the_results'));
     }

    
    

    public function yourresult(Request $request){
        $request->validate([
            'pins' => ['required', 'string'],
            'regnumber' => ['required', 'string'],
            'academic_session' => ['required', 'string'],
            'term' => ['required', 'string'],

        ], [
            'pins.exist'=>'This email does not exist in the admins table'
        ]);
        if($getyour_results = Result::where('regnumber', $request->regnumber)->where('term', $request->term)
        ->where('pins', $request->pins)
        ->exists()) {
        $getyour_results = Result::where('user_id', auth::guard('web')->id()
        )->where('academic_session', $request->academic_session)->get();
        }else{
            return redirect()->back()->with('fail', 'There is no results for you!');
        }
       // $view_results = Result::where('user_id', $user_id)->first();
       $getyours = Result::where('user_id', auth::guard('web')->id()
       )->where('term', $request->term)->get();
       
        // $pdf = PDF::loadView('dashboard.pdf', compact('getyours','getyour_results'));

        // return $pdf->download('school_report.pdf');
    return view('dashboard.yourresult', compact('getyours','getyour_results'));
      
    }

    public function printresult(Request $request, $user_id){
        $print_results = Result::where('user_id', $user_id)
        ->where('term', 'First Term')->get();
        return view('dashboard.printresult', compact('print_results'));
    }


    public function generatllePDF(Request $request)
    {

        $request->validate([
            'regnumber' => ['required', 'string',],
            'academic_session' => ['required', 'string',],
            'term' => ['required', 'string'],
            'section' => ['required', 'string'],
            'classname' => ['required', 'string'],

        ], [
            'regnumber.exist'=>'This email does not exist in the admins table'
        ]);

    //    dd($request->all());

        if($getyour_results = Result::where('regnumber', $request->regnumber)
        ->where('academic_session', $request->academic_session)
       ->where('term', $request->term)
        ->where('section', $request->section)
        ->where('classname', $request->classname)

        ->exists()) {
        $getyour_results = Result::where('regnumber', $request->regnumber)
        // ->where('regnumber', $request->regnumber)
       ->where('classname', $request->classname)
       ->where('term', $request->term)
        ->where('section', $request->section)
        ->where('academic_session', $request->academic_session)->orderBy('category')->get();


        $results_forcats = Result::where('regnumber', $request->regnumber)
        // ->where('regnumber', $request->regnumber)
       ->where('classname', $request->classname)
       ->where('term', $request->term)
        ->where('section', $request->section)
        ->where('academic_session', $request->academic_session)->orderBy('category')->get();

        $results_forcats = Result::where('regnumber', $request->regnumber)
        ->where('classname', $request->classname)
        ->where('term', $request->term)
         ->where('section', $request->section)
        ->where('category', 'MATHEMATICAL SKILL')
         ->where('academic_session', $request->academic_session)->get();
 
 
         $results_totalforliteracyonavgs = Result::where('classname', $request->classname)
         ->where('term', $request->term)
          ->where('section', $request->section)
         ->where('category', 'LITERACY')
          ->where('academic_session', $request->academic_session)->get();
 
 
 
         $results_fornums = Result::where('regnumber', $request->regnumber)
         ->where('classname', $request->classname)
         ->where('term', $request->term)
          ->where('section', $request->section)
         ->where('category', 'LANGUAGE SKILL')
          ->where('academic_session', $request->academic_session)->get();
 
 
 
          $totalclassavgfornumercys = Result::where('classname', $request->classname)
          ->where('term', $request->term)
           ->where('section', $request->section)
          ->where('category', 'NUMERACY')
           ->where('academic_session', $request->academic_session)->get();
 
 
          $results_fornones = Result::where('regnumber', $request->regnumber)
          ->where('classname', $request->classname)
          ->where('term', $request->term)
           ->where('section', $request->section)
          ->where('category', 'NURSERY RHYMES')
           ->where('academic_session', $request->academic_session)->get();
 
 
           $totalresults_noneonavges = Result::where('classname', $request->classname)
          ->where('term', $request->term)
           ->where('section', $request->section)
          ->where('category', 'None')
           ->where('academic_session', $request->academic_session)->get();
 
 
           $results_forccas = Result::where('regnumber', $request->regnumber)
           ->where('classname', $request->classname)
           ->where('term', $request->term)
            ->where('section', $request->section)
           ->where('category', 'FRENCH')
            ->where('academic_session', $request->academic_session)->get();
 
 
 
            $results_classaverageforccas = Result::where('classname', $request->classname)
           ->where('term', $request->term)
            ->where('section', $request->section)
           ->where('category', 'FRENCH')
            ->where('academic_session', $request->academic_session)->get();
            $collection = collect($getyour_results);
    
            $filteredData = $collection->where('regnumber', $request->regnumber);
             $sum0 = $filteredData->sum('test_1');
             $sum1 = $filteredData->sum('test_2');
             $sum2 = $filteredData->sum('test_3');
             $sum3 = $filteredData->sum('exams');
             $sum = $sum0 + $sum1 + $sum2 + $sum3;
             // if ($request->term == null && $request->academic_session == null && $request->classname == null) {
                 Position::firstOrCreate([
                     'regnumber' => $request->regnumber,
                     'term' => $request->term,
                     // 'school_id' => $getyour_results->school_id,
                     'classname' => $request->classname,
                     'academic_session' => $request->academic_session,
                     'total_score' => $sum,
                 ]);
           
             
             $studentpositions = Position::orderBy('total_score', 'DESC')->where('term', $request->term)
             ->where('academic_session', $request->academic_session)
             ->where('classname', $request->classname)->get();
             
             $studentpos = Position::orderBy('total_score', 'Asc')->where('term', $request->term)
             ->where('academic_session', $request->academic_session)
             ->where('classname', $request->classname)
             ->where('total_score', $sum)->get();
     
             $rank = 1;
             foreach ($studentpositions as $student) {
                 $student->update(['rank' => $rank] = ['rank' => $rank]);
                 $rank++;
             }
           
             $rankedStudents = Position::orderBy('rank')->where('term', $request->term)
             ->where('academic_session', $request->academic_session)
             ->where('classname', $request->classname)->where('regnumber', $request->regnumber)->first();
     

        }else{
            return redirect()->back()->with('fail', 'There is no results for you!');
        }
        $getyours = Result::where('user_id', auth::guard('web')->id()
        )->where('term', $request->term)->get();
        
        // $total_subject = Result::where('user_id', auth::guard('web')->id()
        // )->where('classname', $request->classname)
        // ->where('term', $request->term)->where('type', null)->count();

        $view_results = Motor::where('academic_session', $request->academic_session)
        ->where('regnumber', $request->regnumber)
        ->where('classname', $request->classname)
        ->where('section', $request->section)
        // ->where('pins', $request->pins)
        ->where('term', $request->term)->first();

        $firstterm_results = Result::where('academic_session', $request->academic_session)
        ->where('regnumber', $request->regnumber)
        ->where('classname', $request->classname)
        ->where('section', $request->section)
        
        ->where('term', 'First Term')->orderBy('category')->get();


        $secondterm_results = Result::where('academic_session', $request->academic_session)
        ->where('regnumber', $request->regnumber)
        ->where('classname', $request->classname)
        ->where('section', $request->section)
        
        ->where('term', 'Second Term')->orderBy('category')->get();

        $totalstudentInClass = User::where('academic_session', $request->academic_session)
        // ->where('regnumber', $request->regnumber)
        ->where('classname', $request->classname)
        ->where('section', $request->section)
        ->where('status', 'admitted')
        ->where('assign1', 'student')->count();

       
        if ($request->section == 'Primary') {
            return view('dashboard.highschoolresultpdfs', compact('studentpositions', 'rankedStudents', 'totalstudentInClass', 'view_results', 'getyour_results'));
        }elseif($request->section == 'Nursery')
        
            return view('dashboard.ftermprimaryresultspdf', compact('studentpositions', 'rankedStudents', 'results_classaverageforccas', 'totalresults_noneonavges', 'totalclassavgfornumercys', 'results_totalforliteracyonavgs', 'results_forccas', 'results_fornones', 'results_fornums', 'results_forcats', 'totalstudentInClass', 'view_results', 'getyour_results'));
           
           
        elseif($request->section == 'Pre-Nursery' && $request->classname === 'Lower pre-Nursery'){
            return view('dashboard.preschoolresults', compact('studentpositions', 'rankedStudents', 'totalstudentInClass', 'secondterm_results','firstterm_results', 'view_results', 'getyour_results'));

        
        }elseif($request->section == 'Pre-Nursery' && $request->classname === 'Upper pre-Nursery'){
            return view('dashboard.ftermprimaryresultspdf', compact('studentpositions', 'rankedStudents', 'results_classaverageforccas', 'totalresults_noneonavges', 'totalclassavgfornumercys', 'results_totalforliteracyonavgs', 'results_forccas', 'results_fornones', 'results_fornums', 'results_forcats', 'totalstudentInClass', 'view_results', 'getyour_results'));

        }
    
        return redirect()->back()->with('error', 'No page found!');
    }
    

    public function allresult(){
        $view_myresults = Result::where('type', null)->latest()->get();
        $sessions = Academicsession::all();
        $view_classes = Classname::all();
        $view_pupils = User::where('assign1', 'student')->get();
        return view('dashboard.admin.allresult', compact('view_pupils', 'view_classes', 'sessions', 'view_myresults'));
    }

    public function checkresultbyheads(Request $request){
        $request->validate([
            'regnumber' => ['required', 'string'],
            'academic_session' => ['required', 'string'],
            'term' => ['required', 'string'],
            'classname' => ['required', 'string'],
            'section' => ['required', 'string'],

        ], [
            'regnumber.exist'=>'This email does not exist in the admins table'
        ]);
        //   dd($request->all());

       if($getyour_results = Result::where('regnumber', $request->regnumber)
       ->where('academic_session', $request->academic_session)
      ->where('term', $request->term)
       ->where('section', $request->section)
       ->where('classname', $request->classname)

       ->exists()) {
       $getyour_results = Result::where('regnumber', $request->regnumber)
      ->where('classname', $request->classname)
      ->where('term', $request->term)
       ->where('section', $request->section)
       ->where('academic_session', $request->academic_session)->orderBy('category')->get();

       $results_forcats = Result::where('regnumber', $request->regnumber)
       ->where('classname', $request->classname)
       ->where('term', $request->term)
        ->where('section', $request->section)
       ->where('category', 'MATHEMATICAL SKILL')
        ->where('academic_session', $request->academic_session)->get();


        $results_totalforliteracyonavgs = Result::where('classname', $request->classname)
        ->where('term', $request->term)
         ->where('section', $request->section)
        ->where('category', 'LITERACY')
         ->where('academic_session', $request->academic_session)->get();


         
        $results_fornums = Result::where('regnumber', $request->regnumber)
        ->where('classname', $request->classname)
        ->where('term', $request->term)
         ->where('section', $request->section)
        ->where('category', 'LANGUAGE SKILL')
         ->where('academic_session', $request->academic_session)->get();



         $totalclassavgfornumercys = Result::where('classname', $request->classname)
         ->where('term', $request->term)
          ->where('section', $request->section)
         ->where('category', 'NUMERACY')
          ->where('academic_session', $request->academic_session)->get();


         $results_fornones = Result::where('regnumber', $request->regnumber)
         ->where('classname', $request->classname)
         ->where('term', $request->term)
          ->where('section', $request->section)
         ->where('category', 'NURSERY RHYMES')
          ->where('academic_session', $request->academic_session)->get();


          $totalresults_noneonavges = Result::where('classname', $request->classname)
         ->where('term', $request->term)
          ->where('section', $request->section)
         ->where('category', 'None')
          ->where('academic_session', $request->academic_session)->get();


          $results_forccas = Result::where('regnumber', $request->regnumber)
          ->where('classname', $request->classname)
          ->where('term', $request->term)
           ->where('section', $request->section)
          ->where('category', 'FRENCH')
           ->where('academic_session', $request->academic_session)->get();



           $results_classaverageforccas = Result::where('classname', $request->classname)
          ->where('term', $request->term)
           ->where('section', $request->section)
          ->where('category', 'CCA')
           ->where('academic_session', $request->academic_session)->get();




       }else{
           return redirect()->back()->with('fail', 'There is no results for you!');
       }
       $getyours = Result::where('user_id', auth::guard('web')->id()
       )->where('term', $request->term)->get();
      
       $view_results = Motor::where('academic_session', $request->academic_session)
       ->where('regnumber', $request->regnumber)
       ->where('classname', $request->classname)
       ->where('section', $request->section)
       // ->where('pins', $request->pins)
       ->where('term', $request->term)->first();

       $firstterm_results = Result::where('academic_session', $request->academic_session)
       ->where('regnumber', $request->regnumber)
       ->where('classname', $request->classname)
       ->where('section', $request->section)
       
       ->where('term', 'First Term')->orderBy('category')->get();

    
       $secondterm_results = Result::where('academic_session', $request->academic_session)
       ->where('regnumber', $request->regnumber)
       ->where('classname', $request->classname)
       ->where('section', $request->section)
       ->where('term', 'Second Term')->orderBy('category')->get();

       $totalstudentInClass = User::where('academic_session', $request->academic_session)
    //    ->where('regnumber', $request->regnumber)
       ->where('classname', $request->classname)
       ->where('section', $request->section)
       ->where('status', 'admitted')
       ->where('assign1', 'student')->count();

       $collection = collect($getyour_results);
    
           $filteredData = $collection->where('regnumber', $request->regnumber);
            $sum0 = $filteredData->sum('test_1');
            $sum1 = $filteredData->sum('test_2');
            $sum2 = $filteredData->sum('test_3');
            $sum3 = $filteredData->sum('exams');
            $sum = $sum0 + $sum1 + $sum2 + $sum3;
            // if ($request->term == null && $request->academic_session == null && $request->classname == null) {
                Position::firstOrCreate([
                    'regnumber' => $request->regnumber,
                    'term' => $request->term,
                    // 'school_id' => $getyour_results->school_id,
                    'classname' => $request->classname,
                    'academic_session' => $request->academic_session,
                    'total_score' => $sum,
                ]);
          
            
            $studentpositions = Position::orderBy('total_score', 'DESC')->where('term', $request->term)
            ->where('academic_session', $request->academic_session)
            ->where('classname', $request->classname)->get();
            
            $studentpos = Position::orderBy('total_score', 'Asc')->where('term', $request->term)
            ->where('academic_session', $request->academic_session)
            ->where('classname', $request->classname)
            ->where('total_score', $sum)->get();
    
            $rank = 1;
            foreach ($studentpositions as $student) {
                $student->update(['rank' => $rank] = ['rank' => $rank]);
                $rank++;
            }
          
            $rankedStudents = Position::orderBy('rank')->where('term', $request->term)
            ->where('academic_session', $request->academic_session)
            ->where('classname', $request->classname)->where('regnumber', $request->regnumber)->first();
    
            
       if ($request->section == 'Primary') {
           return view('dashboard.highschoolresultpdfheads', compact('rankedStudents', 'totalstudentInClass', 'view_results', 'getyour_results'));
       }elseif($request->section == 'Nursery')
       
           return view('dashboard.ftermprimaryresultspdfheads', compact('rankedStudents', 'results_classaverageforccas', 'totalresults_noneonavges', 'totalclassavgfornumercys', 'results_totalforliteracyonavgs', 'results_forccas', 'results_fornones', 'results_fornums', 'results_forcats', 'totalstudentInClass', 'view_results', 'getyour_results'));
           
          
       
       elseif($request->section == 'Pre-Nursery' && $request->classname === 'Lower pre-Nursery'){
        
        return view('dashboard.preschoolresultsheads', compact('rankedStudents', 'totalstudentInClass', 'secondterm_results','firstterm_results', 'view_results', 'getyour_results'));


       }elseif($request->section == 'Pre-Nursery' && $request->classname === 'Upper pre-Nursery'){
        
        return view('dashboard.ftermprimaryresultspdfheads', compact('rankedStudents', 'results_classaverageforccas', 'totalresults_noneonavges', 'totalclassavgfornumercys', 'results_totalforliteracyonavgs', 'results_forccas', 'results_fornones', 'results_fornums', 'results_forcats', 'totalstudentInClass', 'view_results', 'getyour_results'));
        
       }
   
       return redirect()->back()->with('error', 'No page found!');
   }

   
public function removeresultbyteacher($id){
    $edit_result = Result::where('id', $id)->delete();
    return redirect('web/home');
}

public function removedresultadmin($id){
    $edit_result = Result::where('id', $id)->delete();
    return redirect('admin/home');
}


    public function editresult($id){
        $edit_result = Result::find($id);
    
        return view('dashboard.editresult', compact('edit_result'));

    }

    public function editresultadmin($id){
        $edit_resultadmin = Result::find($id);
    
        return view('dashboard.admin.editresultadmin', compact('edit_resultadmin'));

    }
    public function updateresultad(Request $request, $id){
        $edit_resultadmin = Result::find($id);

        $request->validate([
            'test_1' => ['nullable', 'string'],
            'test_2' => ['nullable', 'string'],
            'comment' => ['nullable', 'string'],
            'exams' => ['nullable', 'string'],
        ]);
        // dd($request->all());
        $edit_resultadmin->test_1 = $request->test_1;
        $edit_resultadmin->test_2 = $request->test_2;
        $edit_resultadmin->comment = $request->comment;
        $edit_resultadmin->exams = $request->exams;
        $edit_resultadmin->update();
        return redirect()->back()->with('success', 'You have edited Result successfully');

    }


    

    public function updateresults(Request $request, $id){
        $add_comment = Result::find($id);

        $request->validate([
            'test_1' => ['nullable', 'string'],
            'test_2' => ['nullable', 'string'],
            'comment' => ['nullable', 'string'],
            'exams' => ['nullable', 'string'],
        ]);
        $add_comment->test_1 = $request->test_1;
        $add_comment->test_2 = $request->test_2;
        $add_comment->comment = $request->comment;
        $add_comment->exams = $request->exams;
        $add_comment->update();
        return redirect()->back()->with('success', 'You have edited this Result');

    }


    public function addcomment($id){
        $add_comment = Result::find($id);
    
        return view('dashboard.addcomment', compact('add_comment'));

    }


    public function addcommentadmin($id){
        $add_comment = Result::find($id);
    
        return view('dashboard.admin.addcommentadmin', compact('add_comment'));

    }

    public function addcomments(Request $request, $id){
        $add_comment = Result::find($id);

        $request->validate([
            'teacher_comment' => ['required', 'string'],
        ]);
        $add_comment->teacher_comment = $request->teacher_comment;
        $add_comment->update();
        return redirect()->back()->with('success', 'You have added comment to this Result');

    }

    public function addcommentsbyadmin(Request $request, $id){
        $add_comment = Result::find($id);

        $request->validate([
            'headteacher_comment' => ['required', 'string'],
        ]);
        $add_comment->headteacher_comment = $request->headteacher_comment;
        $add_comment->update();
        return redirect()->back()->with('success', 'You have added comment to this Result');

    }
    
    public function approvedresulthead($id){
        $approve_result = Result::find($id);
        $approve_result->status = 'approved';
        $approve_result->save();
        return redirect()->back()->with('success', 'you have approved successfully');
    
    }

    public function approvedresultsad($id){
        $approve_result = Result::find($id);
        $approve_result->status = 'approved';
        $approve_result->save();
        return redirect()->back()->with('success', 'you have approved successfully');
    
    }

    public function disabled($id){
        $approve_result = Result::find($id);
        $approve_result->status = 'disabled';
        $approve_result->save();
        return redirect()->back()->with('success', 'you have disabled the result successfully');
    
    }
    

    public function deletreslt($id){
        $approve_result = Result::where('id', $id)->delete();
        return redirect()->back()->with('success', 'you have deleted successfully');
    
    }

    public function deletresult($id){
        $approve_result = Result::where('id', $id)->delete();
        return redirect()->back()->with('success', 'you have deleted successfully');
    
    }

    
    
    public function viewresultsteacher($classnames){
        $view_myresults = Result::where('classname', $classnames)->latest()
         ->where('status', 'approved')
        ->get();
        $view_classes = Classname::all();
        $view_sessions = Academicsession::all();
        return view('dashboard.viewresultsteacher', compact('view_sessions', 'view_classes', 'view_myresults'));
    }


    public function viewresultsteacherunapprove($classnames){
        $view_myresults = Result::where('classname', $classnames)->latest()
         ->where('term', 'First Term')->where('status', null)
        ->get();
        $view_classes = Classname::all();
        $view_sessions = Academicsession::all();
        return view('dashboard.viewresultsteacherunapprove', compact('view_sessions', 'view_classes', 'view_myresults'));
    }



    public function midtermbreakcheckmidtermresultbyheads(Request $request){
        $request->validate([
            'regnumber' => ['required', 'string'],
            'academic_session' => ['required', 'string'],
            'term' => ['required', 'string'],
            'classname' => ['required', 'string'],
            'section' => ['required', 'string'],

        ], [
            'regnumber.exist'=>'This email does not exist in the admins table'
        ]);
       //    dd($request->all());

       if($getyour_results = Result::where('regnumber', $request->regnumber)
       ->where('academic_session', $request->academic_session)
      ->where('term', $request->term)
       ->where('section', $request->section)
       ->where('classname', $request->classname)
    //    ->where('type', 'Midterm')

       ->exists()) {
       $getyour_results = Result::where('regnumber', $request->regnumber)
      ->where('classname', $request->classname)
      ->where('term', $request->term)
       ->where('section', $request->section)
       ->where('type', 'Midterm')

       ->where('academic_session', $request->academic_session)->orderBy('category')->get();

       $results_forcats = Result::where('regnumber', $request->regnumber)
       ->where('classname', $request->classname)
       ->where('term', $request->term)
        ->where('section', $request->section)
       ->where('category', 'LITERACY')
       ->where('type', 'Midterm')

        ->where('academic_session', $request->academic_session)->get();


        $results_totalforliteracyonavgs = Result::where('classname', $request->classname)
        ->where('term', $request->term)
         ->where('section', $request->section)
        ->where('category', 'LITERACY')
       ->where('type', 'Midterm')

         ->where('academic_session', $request->academic_session)->get();



        $results_fornums = Result::where('regnumber', $request->regnumber)
        ->where('classname', $request->classname)
        ->where('term', $request->term)
         ->where('section', $request->section)
        ->where('category', 'NUMERACY')
       ->where('type', 'Midterm')

         ->where('academic_session', $request->academic_session)->get();



         $totalclassavgfornumercys = Result::where('classname', $request->classname)
         ->where('term', $request->term)
          ->where('section', $request->section)
         ->where('category', 'NUMERACY')
       ->where('type', 'Midterm')

          ->where('academic_session', $request->academic_session)->get();


         $results_fornones = Result::where('regnumber', $request->regnumber)
         ->where('classname', $request->classname)
         ->where('term', $request->term)
          ->where('section', $request->section)
         ->where('category', 'None')
       ->where('type', 'Midterm')

          ->where('academic_session', $request->academic_session)->get();


          $totalresults_noneonavges = Result::where('classname', $request->classname)
         ->where('term', $request->term)
          ->where('section', $request->section)
         ->where('category', 'None')
       ->where('type', 'Midterm')

          ->where('academic_session', $request->academic_session)->get();


          $results_forccas = Result::where('regnumber', $request->regnumber)
          ->where('classname', $request->classname)
          ->where('term', $request->term)
           ->where('section', $request->section)
          ->where('category', 'CCA')
       ->where('type', 'Midterm')

           ->where('academic_session', $request->academic_session)->get();



           $results_classaverageforccas = Result::where('classname', $request->classname)
          ->where('term', $request->term)
           ->where('section', $request->section)
          ->where('category', 'CCA')
       ->where('type', 'Midterm')

           ->where('academic_session', $request->academic_session)->get();

       }else{
           return redirect()->back()->with('fail', 'There is no results for you!');
       }
       $getyours = Result::where('user_id', auth::guard('web')->id()
       )->where('term', $request->term)->get();
      
       $view_results = Moto::where('academic_session', $request->academic_session)
       ->where('regnumber', $request->regnumber)
       ->where('classname', $request->classname)
       ->where('section', $request->section)
    //    ->where('type', 'Midterm')
       ->where('term', $request->term)->first();

       $firstterm_results = Result::where('academic_session', $request->academic_session)
       ->where('regnumber', $request->regnumber)
       ->where('classname', $request->classname)
       ->where('section', $request->section)
       ->where('type', 'Midterm')
       
       ->where('term', 'First Term')->orderBy('category')->get();

    
       $secondterm_results = Result::where('academic_session', $request->academic_session)
       ->where('regnumber', $request->regnumber)
       ->where('classname', $request->classname)
       ->where('section', $request->section)
       ->where('type', 'Midterm')

       ->where('term', 'Second Term')->orderBy('category')->get();

       $totalstudentInClass = User::where('academic_session', $request->academic_session)
    //    ->where('regnumber', $request->regnumber)
       ->where('classname', $request->classname)
       ->where('section', $request->section)
       ->where('status', 'admitted')
       ->where('assign1', 'student')->count();

      
       if ($request->section == 'High School') {
           return view('dashboard.highschoolmidtermresultpdfheads', compact('view_results', 'getyour_results'));
       }elseif($request->section == 'Primary' && $request->term == 'First Term')
       
           return view('dashboard.primaryresultmidtermheads', compact('results_classaverageforccas', 'totalresults_noneonavges', 'totalclassavgfornumercys', 'results_totalforliteracyonavgs', 'results_forccas', 'results_fornones', 'results_fornums', 'results_forcats', 'totalstudentInClass', 'view_results', 'getyour_results'));
           
           elseif($request->section == 'Primary' && $request->term == 'Second Term')
       
           return view('dashboard.primaryresultmidtermheads', compact('firstterm_results', 'results_classaverageforccas', 'totalresults_noneonavges', 'totalclassavgfornumercys', 'results_totalforliteracyonavgs', 'results_forccas', 'results_fornones', 'results_fornums', 'results_forcats', 'totalstudentInClass', 'view_results', 'getyour_results'));
          
           elseif($request->section == 'Primary' && $request->term == 'Third Term')
       
           return view('dashboard.primaryresultmidtermheads', compact('secondterm_results', 'firstterm_results', 'results_classaverageforccas', 'totalresults_noneonavges', 'totalclassavgfornumercys', 'results_totalforliteracyonavgs', 'results_forccas', 'results_fornones', 'results_fornums', 'results_forcats', 'totalstudentInClass', 'view_results', 'getyour_results'));
       
       elseif($request->section == 'Early Years Foundation Stage (EYFS)'){
        
        return view('dashboard.preschoolmidresultsheads', compact('totalstudentInClass', 'secondterm_results','firstterm_results', 'view_results', 'getyour_results'));

        //    $pdf = PDF::loadView('dashboard.pdf', compact('firstterm_results', 'view_results', 'getyour_results'));

       }
   
       return redirect()->back()->with('error', 'No page found!');
   }


   public function addmidtermcomment($id){
    $add_psychomotor = Result::find($id);
    return view('dashboard.addmidtermcomment', compact('add_psychomotor'));
   }




   public function generatmidtermresult(Request $request){
    $request->validate([
        'regnumber' => ['required', 'string'],
        'academic_session' => ['required', 'string'],
        'term' => ['required', 'string'],
        'classname' => ['required', 'string'],
        'section' => ['required', 'string'],

    ], [
        'regnumber.exist'=>'This email does not exist in the admins table'
    ]);
   //    dd($request->all());

   if($getyour_results = Result::where('regnumber', $request->regnumber)
   ->where('academic_session', $request->academic_session)
  ->where('term', $request->term)
   ->where('section', $request->section)
   ->where('classname', $request->classname)

   ->exists()) {
   $getyour_results = Result::where('regnumber', $request->regnumber)
  ->where('classname', $request->classname)
  ->where('term', $request->term)
   ->where('section', $request->section)
   ->where('academic_session', $request->academic_session)->orderBy('category')->get();

   $results_forcats = Result::where('regnumber', $request->regnumber)
   ->where('classname', $request->classname)
   ->where('term', $request->term)
    ->where('section', $request->section)
   ->where('category', 'LITERACY')
    ->where('academic_session', $request->academic_session)->get();


    $results_totalforliteracyonavgs = Result::where('classname', $request->classname)
    ->where('term', $request->term)
     ->where('section', $request->section)
    ->where('category', 'LITERACY')
     ->where('academic_session', $request->academic_session)->get();



    $results_fornums = Result::where('regnumber', $request->regnumber)
    ->where('classname', $request->classname)
    ->where('term', $request->term)
     ->where('section', $request->section)
    ->where('category', 'NUMERACY')
     ->where('academic_session', $request->academic_session)->get();



     $totalclassavgfornumercys = Result::where('classname', $request->classname)
     ->where('term', $request->term)
      ->where('section', $request->section)
     ->where('category', 'NUMERACY')
      ->where('academic_session', $request->academic_session)->get();


     $results_fornones = Result::where('regnumber', $request->regnumber)
     ->where('classname', $request->classname)
     ->where('term', $request->term)
      ->where('section', $request->section)
     ->where('category', 'None')
      ->where('academic_session', $request->academic_session)->get();


      $totalresults_noneonavges = Result::where('classname', $request->classname)
     ->where('term', $request->term)
      ->where('section', $request->section)
     ->where('category', 'None')
      ->where('academic_session', $request->academic_session)->get();


      $results_forccas = Result::where('regnumber', $request->regnumber)
      ->where('classname', $request->classname)
      ->where('term', $request->term)
       ->where('section', $request->section)
      ->where('category', 'CCA')
       ->where('academic_session', $request->academic_session)->get();



       $results_classaverageforccas = Result::where('classname', $request->classname)
      ->where('term', $request->term)
       ->where('section', $request->section)
      ->where('category', 'CCA')
       ->where('academic_session', $request->academic_session)->get();

   }else{
       return redirect()->back()->with('fail', 'There is no results for you!');
   }
   $getyours = Result::where('user_id', auth::guard('web')->id()
   )->where('term', $request->term)->get();
  
   $view_results = Moto::where('academic_session', $request->academic_session)
   ->where('regnumber', $request->regnumber)
   ->where('classname', $request->classname)
   ->where('section', $request->section)
   ->where('type', 'Midterm')
   ->where('term', $request->term)->first();

   $firstterm_results = Result::where('academic_session', $request->academic_session)
   ->where('regnumber', $request->regnumber)
   ->where('classname', $request->classname)
   ->where('section', $request->section)
   
   ->where('term', 'First Term')->orderBy('category')->get();


   $secondterm_results = Result::where('academic_session', $request->academic_session)
   ->where('regnumber', $request->regnumber)
   ->where('classname', $request->classname)
   ->where('section', $request->section)
   ->where('term', 'Second Term')->orderBy('category')->get();

   $totalstudentInClass = User::where('academic_session', $request->academic_session)
//    ->where('regnumber', $request->regnumber)
   ->where('classname', $request->classname)
   ->where('section', $request->section)
   ->where('status', 'admitted')
   ->where('assign1', 'student')->count();

  
   if ($request->section == 'High School') {
       return view('dashboard.highschoolmidtermresultpdf', compact('view_results', 'getyour_results'));
   }elseif($request->section == 'Primary' && $request->term == 'First Term')
   
       return view('dashboard.primaryresultmidtermpdf', compact('results_classaverageforccas', 'totalresults_noneonavges', 'totalclassavgfornumercys', 'results_totalforliteracyonavgs', 'results_forccas', 'results_fornones', 'results_fornums', 'results_forcats', 'totalstudentInClass', 'view_results', 'getyour_results'));
       
       elseif($request->section == 'Primary' && $request->term == 'Second Term')
   
       return view('dashboard.primaryresultmidtermpdf', compact('firstterm_results', 'results_classaverageforccas', 'totalresults_noneonavges', 'totalclassavgfornumercys', 'results_totalforliteracyonavgs', 'results_forccas', 'results_fornones', 'results_fornums', 'results_forcats', 'totalstudentInClass', 'view_results', 'getyour_results'));
      
       elseif($request->section == 'Primary' && $request->term == 'Third Term')
   
       return view('dashboard.primaryresultmidtermpdf', compact('secondterm_results', 'firstterm_results', 'results_classaverageforccas', 'totalresults_noneonavges', 'totalclassavgfornumercys', 'results_totalforliteracyonavgs', 'results_forccas', 'results_fornones', 'results_fornums', 'results_forcats', 'totalstudentInClass', 'view_results', 'getyour_results'));
   
   elseif($request->section == 'Early Years Foundation Stage (EYFS)'){
    
    return view('dashboard.preschoolmidresultspdf', compact('totalstudentInClass', 'secondterm_results','firstterm_results', 'view_results', 'getyour_results'));

    //    $pdf = PDF::loadView('dashboard.pdf', compact('firstterm_results', 'view_results', 'getyour_results'));

   }

   return redirect()->back()->with('error', 'No page found!');
}

 







public function searchforstudent(Request $request)
    {
        $request->validate([
            'centername' => ['required', 'string',],
            'academic_session' => ['required', 'string',],
            'term' => ['required', 'string'],
            'section' => ['required', 'string'],
            'classname' => ['required', 'string'],

        ], [
            'classname.exist'=>'This email does not exist in the admins table'
        ]);

    //    dd($request->all());

        if($getyour_results = Result::where('classname', $request->classname)
        ->where('academic_session', $request->academic_session)
       ->where('term', $request->term)
        ->where('section', $request->section)
        ->where('centername', $request->centername)
        ->where('type', null)

        ->exists()) {
        $getyour_results = Result::where('classname', $request->classname)
       ->where('centername', $request->centername)
       ->where('term', $request->term)
        ->where('section', $request->section)
        ->where('type', null)

        ->where('academic_session', $request->academic_session)->orderBy('category')->get();
        }else{
            return redirect()->back()->with('fail', 'There is no results for you!');
        }
       
        return view('dashboard.admin.studentfound', compact('getyour_results'));
     
    }




    public function searchforstudentmidterm(Request $request)
    {
        
    //    dd($request->all());
        $request->validate([
            'centername' => ['required', 'string',],
            'academic_session' => ['required', 'string',],
            'term' => ['required', 'string'],
            'section' => ['required', 'string'],
            'classname' => ['required', 'string'],

        ], [
            'classname.exist'=>'This email does not exist in the admins table'
        ]);

    //    dd($request->all());

        if($getyour_results = Result::where('classname', $request->classname)
        ->where('academic_session', $request->academic_session)
       ->where('term', $request->term)
        ->where('section', $request->section)
        ->where('centername', $request->centername)
        ->where('type', 'Midterm')

        ->exists()) {
        $getyour_results = Result::where('classname', $request->classname)
       ->where('centername', $request->centername)
       ->where('type', 'Midterm')

       ->where('term', $request->term)
        ->where('section', $request->section)
        ->where('academic_session', $request->academic_session)->orderBy('category')->get();
        }else{
            return redirect()->back()->with('fail', 'There is no results for you!');
        }
       
        return view('dashboard.admin.studentfoundmidterm', compact('getyour_results'));
     
    }




    public function searchforstudentresult(Request $request){

        $request->validate([
            'regnumber' => ['required', 'string'],
            'academic_session' => ['required', 'string'],
            'term' => ['required', 'string'],
            'classname' => ['required', 'string'],
            'section' => ['required', 'string'],

        ], [
            'regnumber.exist'=>'This email does not exist in the admins table'
        ]);
       //    dd($request->all());

       if($getyour_results = Result::where('regnumber', $request->regnumber)
       ->where('academic_session', $request->academic_session)
      ->where('term', $request->term)
       ->where('section', $request->section)
       ->where('classname', $request->classname)

       ->exists()) {
       $getyour_results = Result::where('regnumber', $request->regnumber)
      ->where('classname', $request->classname)
      ->where('term', $request->term)
       ->where('section', $request->section)
       ->where('type', null)
       ->where('academic_session', $request->academic_session)->orderBy('category')->get();

       $results_forcats = Result::where('regnumber', $request->regnumber)
       ->where('classname', $request->classname)
       ->where('term', $request->term)
        ->where('section', $request->section)
       ->where('category', 'MATHEMATICAL SKILL')
       ->where('type', null)

        ->where('academic_session', $request->academic_session)->get();


        $results_totalforliteracyonavgs = Result::where('classname', $request->classname)
        ->where('term', $request->term)
         ->where('section', $request->section)
        ->where('category', 'LITERACY')
       ->where('type', null)

         ->where('academic_session', $request->academic_session)->get();



        $results_fornums = Result::where('regnumber', $request->regnumber)
        ->where('classname', $request->classname)
        ->where('term', $request->term)
         ->where('section', $request->section)
        ->where('category', 'LANGUAGE SKILL')
       ->where('type', null)

         ->where('academic_session', $request->academic_session)->get();



         $totalclassavgfornumercys = Result::where('classname', $request->classname)
         ->where('term', $request->term)
          ->where('section', $request->section)
         ->where('category', 'NUMERACY')
       ->where('type', null)

          ->where('academic_session', $request->academic_session)->get();


         $results_fornones = Result::where('regnumber', $request->regnumber)
         ->where('classname', $request->classname)
         ->where('term', $request->term)
          ->where('section', $request->section)
         ->where('category', 'NURSERY RHYMES')
       ->where('type', null)

          ->where('academic_session', $request->academic_session)->get();


          $totalresults_noneonavges = Result::where('classname', $request->classname)
         ->where('term', $request->term)
          ->where('section', $request->section)
         ->where('category', 'None')
       ->where('type', null)

          ->where('academic_session', $request->academic_session)->get();


          $results_forccas = Result::where('regnumber', $request->regnumber)
          ->where('classname', $request->classname)
          ->where('term', $request->term)
           ->where('section', $request->section)
          ->where('category', 'FRENCH')
       ->where('type', null)

           ->where('academic_session', $request->academic_session)->get();



           $results_classaverageforccas = Result::where('classname', $request->classname)
          ->where('term', $request->term)
           ->where('section', $request->section)
          ->where('category', 'CCA')
       ->where('type', null)

           ->where('academic_session', $request->academic_session)->get();

       }else{
           return redirect()->back()->with('fail', 'There is no results for you!');
       }
   
      
       $view_results = Motor::where('academic_session', $request->academic_session)
       ->where('regnumber', $request->regnumber)
       ->where('classname', $request->classname)
       ->where('section', $request->section)
       ->where('type', null)
    //    ->where('centername', $request->centername)
       ->where('term', $request->term)->first();

       $firstterm_results = Result::where('academic_session', $request->academic_session)
       ->where('regnumber', $request->regnumber)
       ->where('classname', $request->classname)
       ->where('section', $request->section)
       ->where('type', null)
       ->where('term', 'First Term')->orderBy('category')->get();

    
       $secondterm_results = Result::where('academic_session', $request->academic_session)
       ->where('regnumber', $request->regnumber)
       ->where('classname', $request->classname)
       ->where('section', $request->section)
       ->where('type', null)
       ->where('term', 'Second Term')->orderBy('category')->get();

       $totalstudentInClass = User::where('academic_session', $request->academic_session)
       ->where('classname', $request->classname)
       ->where('section', $request->section)
       ->where('status', 'admitted')
       ->where('assign1', 'student')->count();

       $collection = collect($getyour_results);
    
       $filteredData = $collection->where('regnumber', $request->regnumber);
        $sum0 = $filteredData->sum('test_1');
        $sum1 = $filteredData->sum('test_2');
        $sum2 = $filteredData->sum('test_3');
        $sum3 = $filteredData->sum('exams');
        $sum = $sum0 + $sum1 + $sum2 + $sum3;
        // if ($request->term == null && $request->academic_session == null && $request->classname == null) {
            Position::firstOrCreate([
                'regnumber' => $request->regnumber,
                'term' => $request->term,
                // 'school_id' => $getyour_results->school_id,
                'classname' => $request->classname,
                'academic_session' => $request->academic_session,
                'total_score' => $sum,
            ]);
      
        
        $studentpositions = Position::orderBy('total_score', 'DESC')->where('term', $request->term)
        ->where('academic_session', $request->academic_session)
        ->where('classname', $request->classname)->get();
        
        $studentpos = Position::orderBy('total_score', 'Asc')->where('term', $request->term)
        ->where('academic_session', $request->academic_session)
        ->where('classname', $request->classname)
        ->where('total_score', $sum)->get();

        $rank = 1;
        foreach ($studentpositions as $student) {
            $student->update(['rank' => $rank] = ['rank' => $rank]);
            $rank++;
        }
      
        $rankedStudents = Position::orderBy('rank')->where('term', $request->term)
        ->where('academic_session', $request->academic_session)
        ->where('classname', $request->classname)->where('regnumber', $request->regnumber)->first();

      
       if ($request->section == 'Primary') {
           return view('dashboard.admin.highschoolresultadheads', compact('rankedStudents', 'studentpositions', 'totalstudentInClass', 'view_results', 'getyour_results'));
       }elseif($request->section == 'Nursery')
       
           return view('dashboard.admin.ftermprimaryresultspdfadsheads', compact('rankedStudents', 'studentpositions', 'results_classaverageforccas', 'totalresults_noneonavges', 'totalclassavgfornumercys', 'results_totalforliteracyonavgs', 'results_forccas', 'results_fornones', 'results_fornums', 'results_forcats', 'totalstudentInClass', 'view_results', 'getyour_results'));
           
       elseif($request->section == 'Pre-Nursery' && $request->classname === 'Lower pre-Nursery'){
        
        return view('dashboard.admin.preschoolresultsadheads', compact('rankedStudents', 'studentpositions','totalstudentInClass', 'secondterm_results','firstterm_results', 'view_results', 'getyour_results'));


       }elseif($request->section == 'Pre-Nursery' && $request->classname === 'Upper pre-Nursery'){

        return view('dashboard.admin.ftermprimaryresultspdfadsheads', compact('rankedStudents', 'studentpositions', 'results_classaverageforccas', 'totalresults_noneonavges', 'totalclassavgfornumercys', 'results_totalforliteracyonavgs', 'results_forccas', 'results_fornones', 'results_fornums', 'results_forcats', 'totalstudentInClass', 'view_results', 'getyour_results'));

       }
   
       return redirect()->back()->with('error', 'No page found!');
   }











   public function searchforstudentresultmidterm(Request $request){

    $request->validate([
        'regnumber' => ['required', 'string'],
        'academic_session' => ['required', 'string'],
        'term' => ['required', 'string'],
        'classname' => ['required', 'string'],
        'section' => ['required', 'string'],
        'centername' => ['required', 'string'],

    ], [
        'regnumber.exist'=>'This email does not exist in the admins table'
    ]);
   //    dd($request->all());

   if($getyour_results = Result::where('regnumber', $request->regnumber)
   ->where('academic_session', $request->academic_session)
  ->where('term', $request->term)
   ->where('section', $request->section)
   ->where('classname', $request->classname)
   ->where('centername', $request->centername)

   ->exists()) {
   $getyour_results = Result::where('regnumber', $request->regnumber)
  ->where('classname', $request->classname)
  ->where('term', $request->term)
   ->where('section', $request->section)
//    ->where('type', 'Midterm')
   ->where('centername', $request->centername)
   ->where('academic_session', $request->academic_session)->orderBy('category')->get();

   $results_forcats = Result::where('regnumber', $request->regnumber)
   ->where('classname', $request->classname)
   ->where('term', $request->term)
    ->where('section', $request->section)
   ->where('category', 'LITERACY')
   ->where('type', 'Midterm')

    ->where('academic_session', $request->academic_session)->get();


    $results_totalforliteracyonavgs = Result::where('classname', $request->classname)
    ->where('term', $request->term)
     ->where('section', $request->section)
    ->where('category', 'LITERACY')
   ->where('type', 'Midterm')

     ->where('academic_session', $request->academic_session)->get();



    $results_fornums = Result::where('regnumber', $request->regnumber)
    ->where('classname', $request->classname)
    ->where('term', $request->term)
     ->where('section', $request->section)
    ->where('category', 'NUMERACY')
   ->where('type', 'Midterm')

     ->where('academic_session', $request->academic_session)->get();



     $totalclassavgfornumercys = Result::where('classname', $request->classname)
     ->where('term', $request->term)
      ->where('section', $request->section)
     ->where('category', 'NUMERACY')
   ->where('type', 'Midterm')

      ->where('academic_session', $request->academic_session)->get();


     $results_fornones = Result::where('regnumber', $request->regnumber)
     ->where('classname', $request->classname)
     ->where('term', $request->term)
      ->where('section', $request->section)
     ->where('category', 'None')
   ->where('type', 'Midterm')

      ->where('academic_session', $request->academic_session)->get();


      $totalresults_noneonavges = Result::where('classname', $request->classname)
     ->where('term', $request->term)
      ->where('section', $request->section)
     ->where('category', 'None')
   ->where('type', 'Midterm')

      ->where('academic_session', $request->academic_session)->get();


      $results_forccas = Result::where('regnumber', $request->regnumber)
      ->where('classname', $request->classname)
      ->where('term', $request->term)
       ->where('section', $request->section)
      ->where('category', 'CCA')
   ->where('type', 'Midterm')

       ->where('academic_session', $request->academic_session)->get();



       $results_classaverageforccas = Result::where('classname', $request->classname)
      ->where('term', $request->term)
       ->where('section', $request->section)
      ->where('category', 'CCA')
   ->where('type', 'Midterm')

       ->where('academic_session', $request->academic_session)->get();

   }else{
       return redirect()->back()->with('fail', 'There is no results for you!');
   }
//    $getyours = Result::where('user_id', auth::guard('web')->id()
//    )->where('term', $request->term)->get();
  
   $view_results = Moto::where('academic_session', $request->academic_session)
   ->where('regnumber', $request->regnumber)
   ->where('classname', $request->classname)
   ->where('section', $request->section)
//    ->where('centername', $request->centername)
   ->where('type', 'Midterm')

   ->where('term', $request->term)->first();

   $firstterm_results = Result::where('academic_session', $request->academic_session)
   ->where('regnumber', $request->regnumber)
   ->where('classname', $request->classname)
   ->where('section', $request->section)
   ->where('centername', $request->centername)
   ->where('type', 'Midterm')
   
   ->where('term', 'First Term')->orderBy('category')->get();


   $secondterm_results = Result::where('academic_session', $request->academic_session)
   ->where('regnumber', $request->regnumber)
   ->where('classname', $request->classname)
   ->where('section', $request->section)
   ->where('centername', $request->centername)
   ->where('type', 'Midterm')
   ->where('term', 'Second Term')->orderBy('category')->get();

   $totalstudentInClass = User::where('academic_session', $request->academic_session)
   ->where('centername', $request->centername)
   ->where('classname', $request->classname)
   ->where('section', $request->section)
   ->where('status', 'admitted')
   ->where('assign1', 'student')->count();

  
   if ($request->section == 'High School') {
       return view('dashboard.admin.highschoolresultadmidtermheads', compact('view_results', 'getyour_results'));
   }elseif($request->section == 'Primary' && $request->term == 'First Term')
   
       return view('dashboard.admin.ftermprimaryresultspdfadsmidheads', compact('results_classaverageforccas', 'totalresults_noneonavges', 'totalclassavgfornumercys', 'results_totalforliteracyonavgs', 'results_forccas', 'results_fornones', 'results_fornums', 'results_forcats', 'totalstudentInClass', 'view_results', 'getyour_results'));
       
       elseif($request->section == 'Primary' && $request->term == 'Second Term')
   
       return view('dashboard.admin.ftermprimaryresultspdfadsmidheads', compact('results_classaverageforccas', 'totalresults_noneonavges', 'totalclassavgfornumercys', 'results_totalforliteracyonavgs', 'results_forccas', 'results_fornones', 'results_fornums', 'results_forcats', 'totalstudentInClass', 'view_results', 'getyour_results'));
      
       elseif($request->section == 'Primary' && $request->term == 'Third Term')
   
       return view('dashboard.admin.ftermprimaryresultspdfadsmidheads', compact('results_classaverageforccas', 'totalresults_noneonavges', 'totalclassavgfornumercys', 'results_totalforliteracyonavgs', 'results_forccas', 'results_fornones', 'results_fornums', 'results_forcats', 'totalstudentInClass', 'view_results', 'getyour_results'));
   
   elseif($request->section == 'Early Years Foundation Stage (EYFS)'){
    
    return view('dashboard.admin.preschoolresultsadmidtermheads', compact('totalstudentInClass', 'secondterm_results','firstterm_results', 'view_results', 'getyour_results'));

    //    $pdf = PDF::loadView('dashboard.pdf', compact('firstterm_results', 'view_results', 'getyour_results'));

   }

   return redirect()->back()->with('error', 'No page found!');
}





public function editresultmidtermadmin($id){
    $edit_resultadmin = Result::find($id);

    return view('dashboard.admin.editresultmidtermadmin', compact('edit_resultadmin'));

}
 public function updatemidtermresultad(Request $request, $id){
    $edit_resultadmin = Result::find($id);

    $request->validate([
        'exp' => ['nullable', 'string'],
        'app' => ['nullable', 'string'],
        'comment' => ['nullable', 'string'],
        'pra' => ['nullable', 'string'],
    ]);
    // dd($request->all());
    
    $edit_resultadmin->exp = $request->exp;
    $edit_resultadmin->app = $request->app;
    $edit_resultadmin->pra = $request->pra;
    $edit_resultadmin->comment = $request->comment;

    // dd($request->all());
    $edit_resultadmin->update();

   return redirect()->back()->with('success', 'You have successsfully updated the reports');

 }






 public function searchforresultesmidterm(Request $request){
    $request->validate([
        'regnumber' => ['required', 'string'],
        'academic_session' => ['required', 'string'],
        'term' => ['required', 'string'],
        'classname' => ['required', 'string'],
        'section' => ['required', 'string'],

    ], [
        'regnumber.exist'=>'This email does not exist in the admins table'
    ]);
   //    dd($request->all());

   if($getyour_results = Result::where('regnumber', $request->regnumber)
   ->where('academic_session', $request->academic_session)
  ->where('term', $request->term)
   ->where('section', $request->section)
   ->where('classname', $request->classname)
//    ->where('type', 'Midterm')

   ->exists()) {
   $getyour_results = Result::where('regnumber', $request->regnumber)
  ->where('classname', $request->classname)
  ->where('term', $request->term)
   ->where('section', $request->section)
   ->where('type', 'Midterm')

   ->where('academic_session', $request->academic_session)->orderBy('category')->get();

   $results_forcats = Result::where('regnumber', $request->regnumber)
   ->where('classname', $request->classname)
   ->where('term', $request->term)
    ->where('section', $request->section)
   ->where('category', 'LITERACY')
   ->where('type', 'Midterm')

    ->where('academic_session', $request->academic_session)->get();


    $results_totalforliteracyonavgs = Result::where('classname', $request->classname)
    ->where('term', $request->term)
     ->where('section', $request->section)
    ->where('category', 'LITERACY')
   ->where('type', 'Midterm')

     ->where('academic_session', $request->academic_session)->get();



    $results_fornums = Result::where('regnumber', $request->regnumber)
    ->where('classname', $request->classname)
    ->where('term', $request->term)
     ->where('section', $request->section)
    ->where('category', 'NUMERACY')
   ->where('type', 'Midterm')

     ->where('academic_session', $request->academic_session)->get();



     $totalclassavgfornumercys = Result::where('classname', $request->classname)
     ->where('term', $request->term)
      ->where('section', $request->section)
     ->where('category', 'NUMERACY')
   ->where('type', 'Midterm')

      ->where('academic_session', $request->academic_session)->get();


     $results_fornones = Result::where('regnumber', $request->regnumber)
     ->where('classname', $request->classname)
     ->where('term', $request->term)
      ->where('section', $request->section)
     ->where('category', 'None')
   ->where('type', 'Midterm')

      ->where('academic_session', $request->academic_session)->get();


      $totalresults_noneonavges = Result::where('classname', $request->classname)
     ->where('term', $request->term)
      ->where('section', $request->section)
     ->where('category', 'None')
   ->where('type', 'Midterm')

      ->where('academic_session', $request->academic_session)->get();


      $results_forccas = Result::where('regnumber', $request->regnumber)
      ->where('classname', $request->classname)
      ->where('term', $request->term)
       ->where('section', $request->section)
      ->where('category', 'CCA')
   ->where('type', 'Midterm')

       ->where('academic_session', $request->academic_session)->get();



       $results_classaverageforccas = Result::where('classname', $request->classname)
      ->where('term', $request->term)
       ->where('section', $request->section)
      ->where('category', 'CCA')
   ->where('type', 'Midterm')

       ->where('academic_session', $request->academic_session)->get();

   }else{
       return redirect()->back()->with('fail', 'There is no results for you!');
   }
   $getyours = Result::where('user_id', auth::guard('web')->id()
   )->where('term', $request->term)->get();
  
   $view_results = Moto::where('academic_session', $request->academic_session)
   ->where('regnumber', $request->regnumber)
   ->where('classname', $request->classname)
   ->where('section', $request->section)
//    ->where('type', 'Midterm')
   ->where('term', $request->term)->first();

   $firstterm_results = Result::where('academic_session', $request->academic_session)
   ->where('regnumber', $request->regnumber)
   ->where('classname', $request->classname)
   ->where('section', $request->section)
   ->where('type', 'Midterm')
   
   ->where('term', 'First Term')->orderBy('category')->get();


   $secondterm_results = Result::where('academic_session', $request->academic_session)
   ->where('regnumber', $request->regnumber)
   ->where('classname', $request->classname)
   ->where('section', $request->section)
   ->where('type', 'Midterm')

   ->where('term', 'Second Term')->orderBy('category')->get();

   $totalstudentInClass = User::where('academic_session', $request->academic_session)
//    ->where('regnumber', $request->regnumber)
   ->where('classname', $request->classname)
   ->where('section', $request->section)
   ->where('status', 'admitted')
   ->where('assign1', 'student')->count();



   $collection = collect($getyour_results);

       $filteredData = $collection->where('regnumber', $request->regnumber);
        $sum0 = $filteredData->sum('test_1');
        $sum1 = $filteredData->sum('test_2');
        $sum2 = $filteredData->sum('test_3');
        $sum3 = $filteredData->sum('exams');
        $sum = $sum0 + $sum1 + $sum2 + $sum3;
        // if ($request->term == null && $request->academic_session == null && $request->classname == null) {
            Position::create([
                'regnumber' => $request->regnumber,
                'term' => $request->term,
                'pins' => $request->pins,
                'classname' => $request->classname,
                'academic_session' => $request->academic_session,
                'total_score' => $sum,
            ]);
      
        
        $studentpositions = Position::orderBy('total_score', 'DESC')->where('term', $request->term)
        ->where('academic_session', $request->academic_session)
        ->where('classname', $request->classname)->get();
        
        // $studentpos = Position::orderBy('total_score', 'Asc')->where('term', $request->term)
        // ->where('academic_session', $request->academic_session)
        // ->where('classname', $request->classname)
        // ->where('total_score', $sum)->get();

        $rank = 1;
        foreach ($studentpositions as $student) {
            $student->update(['rank' => $rank] = ['rank' => $rank]);
            $rank++;
        }
        // foreach ($dataToUpdate as $data) {
        //     // Find the student by ID
        //     $student = Student::find($data['id']);
        
        //     // Update the total score  imfisftm_update1
        //     $student->update(['total_score' => $data['total_score']]);
        // }
        $rankedStudents = Position::orderBy('rank')->where('term', $request->term)
        ->where('academic_session', $request->academic_session)
        ->where('classname', $request->classname)->where('regnumber', $request->regnumber)->first();

  
   if ($request->section == 'High School') {
       return view('dashboard.admin.highschoolmidtermresultpdfheadsadmin', compact('view_results', 'getyour_results'));
   }elseif($request->section == 'Primary' && $request->term == 'First Term')
   
       return view('dashboard.admin.primaryresultmidtermheadsadmin', compact('results_classaverageforccas', 'totalresults_noneonavges', 'totalclassavgfornumercys', 'results_totalforliteracyonavgs', 'results_forccas', 'results_fornones', 'results_fornums', 'results_forcats', 'totalstudentInClass', 'view_results', 'getyour_results'));
       
       elseif($request->section == 'Primary' && $request->term == 'Second Term')
   
       return view('dashboard.admin.primaryresultmidtermheadsadmin', compact('firstterm_results', 'results_classaverageforccas', 'totalresults_noneonavges', 'totalclassavgfornumercys', 'results_totalforliteracyonavgs', 'results_forccas', 'results_fornones', 'results_fornums', 'results_forcats', 'totalstudentInClass', 'view_results', 'getyour_results'));
      
       elseif($request->section == 'Primary' && $request->term == 'Third Term')
   
       return view('dashboard.admin.primaryresultmidtermheadsadmin', compact('secondterm_results', 'firstterm_results', 'results_classaverageforccas', 'totalresults_noneonavges', 'totalclassavgfornumercys', 'results_totalforliteracyonavgs', 'results_forccas', 'results_fornones', 'results_fornums', 'results_forcats', 'totalstudentInClass', 'view_results', 'getyour_results'));
   
   elseif($request->section == 'Early Years Foundation Stage (EYFS)'){
    
    return view('dashboard.admin.preschoolmidresultsheadsadmin', compact('totalstudentInClass', 'secondterm_results','firstterm_results', 'view_results', 'getyour_results'));

    //    $pdf = PDF::loadView('dashboard.pdf', compact('firstterm_results', 'view_results', 'getyour_results'));

   }

   return redirect()->back()->with('error', 'No page found!');
}




}
    



