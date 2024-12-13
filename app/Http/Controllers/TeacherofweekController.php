<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacherofweek;

class TeacherofweekController extends Controller
{
     public function addativityofweek(){
        
        return view('dashboard.admin.addativityofweek');
    }

    public function createactivities (Request $request){
        // dd($request->all());
        $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'role' => ['required',  'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'designation' => ['required', 'string', 'max:255'],
            'dayac' => ['nullable', 'string', 'max:255'],
            'monthsac' => ['nullable', 'string', 'max:255'],
            'yrsac' => ['nullable', 'string', 'max:255'],
            'messages' => ['required', 'string', 'max:255'],
            'images' => 'nullable|mimes:jpg,png,jpeg'
        ]);
        $add_teacheroweek = new Teacherofweek();
        if ($request->hasFile('images')){
            $file = $request['images'];
            $filename = 'SimonJonah-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $request->file('images')->storeAs('resourceimages', $filename);
        }else{
            $path = 'noimage.jpg';
        }
        $add_teacheroweek['images'] = $path;
        $add_teacheroweek->fname = $request->fname;
        $add_teacheroweek->lname = $request->lname;
        $add_teacheroweek->role = $request->role;
        $add_teacheroweek->designation = $request->designation;
        $add_teacheroweek->messages = $request->messages;
        $add_teacheroweek->dayac = $request->dayac;
        $add_teacheroweek->monthsac = $request->monthsac;
        $add_teacheroweek->yrsac = $request->yrsac;
        $add_teacheroweek->ref_no = substr(rand(0,time()),0, 9);

        $add_teacheroweek->save();

        return redirect()->back()->with('success', 'you have added successfully');

    }
    public function viewpupilsweek(){
        $view_puoftheweeks = Teacherofweek::latest()->get();
        return view('dashboard.admin.viewpupilsweek', compact('view_puoftheweeks'));
    }

    public function pupilofmonth(){
        $view_puoftheweeks = Teacherofweek::latest()->get();
        return view('dashboard.admin.pupilofmonth', compact('view_puoftheweeks'));
    }

    public function pupilofyear(){
        $view_puoftheweeks = Teacherofweek::latest()->get();
        return view('dashboard.admin.pupilofyear', compact('view_puoftheweeks'));
    }

    public function viewteacherweek(){
        $view_puoftheweeks = Teacherofweek::latest()->get();
        return view('dashboard.admin.viewteacherweek', compact('view_puoftheweeks'));
    }

    public function teacherofmonth(){
        $view_puoftheweeks = Teacherofweek::latest()->get();
        return view('dashboard.admin.teacherofmonth', compact('view_puoftheweeks'));
    }
    
    public function teacherofyear(){
        $view_puoftheweeks = Teacherofweek::latest()->get();
        return view('dashboard.admin.teacherofyear', compact('view_puoftheweeks'));
    }
    public function viewparentweek(){
        $view_puoftheweeks = Teacherofweek::latest()->get();
        return view('dashboard.admin.viewparentweek', compact('view_puoftheweeks'));
    }

    public function parentofmonth(){
        $view_puoftheweeks = Teacherofweek::latest()->get();
        return view('dashboard.admin.parentofmonth', compact('view_puoftheweeks'));
    }
    public function parentofyear(){
        $view_puoftheweeks = Teacherofweek::latest()->get();
        return view('dashboard.admin.parentofyear', compact('view_puoftheweeks'));
    }
    
    
    public function viewperformance($ref_no){
        $view_weeks = Teacherofweek::where('ref_no', $ref_no)->first();
        return view('dashboard.admin.viewperformance', compact('view_weeks'));
    }
    
    public function editperformance($ref_no){
        $view_puoftheweeks = Teacherofweek::where('ref_no', $ref_no)->first();
        return view('dashboard.admin.editperformance', compact('view_puoftheweeks'));
    }
    public function updatectivities(Request $request, $ref_no){
        $view_puoftheweeks = Teacherofweek::where('ref_no', $ref_no)->first();

        $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'role' => ['required',  'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'designation' => ['required', 'string', 'max:255'],
            'dayac' => ['nullable', 'string', 'max:255'],
            'monthsac' => ['nullable', 'string', 'max:255'],
            'yrsac' => ['nullable', 'string', 'max:255'],
            'messages' => ['required', 'string', 'max:255'],
            'images' => 'nullable|mimes:jpg,png,jpeg'
        ]);
      
        if ($request->hasFile('images')){

            $file = $request['images'];
            $filename = 'SimonJonah-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $request->file('images')->storeAs('resourceimages', $filename);
            $view_puoftheweeks->images = $path;

        }
        $view_puoftheweeks->fname = $request->fname;
        $view_puoftheweeks->lname = $request->lname;
        $view_puoftheweeks->role = $request->role;
        $view_puoftheweeks->designation = $request->designation;
        $view_puoftheweeks->messages = $request->messages;
        $view_puoftheweeks->dayac = $request->dayac;
        $view_puoftheweeks->monthsac = $request->monthsac;
        $view_puoftheweeks->yrsac = $request->yrsac;
        $view_puoftheweeks->update();

        return redirect()->back()->with('success', 'you have added successfully');

    }

    public function performanceapprove($ref_no){
        $approve_testimony = Teacherofweek::where('ref_no', $ref_no)->first();
        $approve_testimony->status = 'approved';
        $approve_testimony->save();
        return redirect()->back()->with('success', 'you have approved successfully');
    }
    public function performancesuspend($ref_no){
        $approve_testimony = Teacherofweek::where('ref_no', $ref_no)->first();
        $approve_testimony->status = 'suspend';
        $approve_testimony->save();
        return redirect()->back()->with('success', 'you have suspend successfully');
    }

    public function performancedelete($ref_no){
        $approve_testimony = Teacherofweek::where('ref_no', $ref_no)->delete();
       
        return redirect()->back()->with('success', 'you have deleted successfully');
    }
    
}
