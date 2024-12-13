<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\Models\Academicsession;
use App\Models\User;
use App\Models\Classname;
use App\Models\Payment;
use App\Models\Query;
use App\Models\Studycenter;
use App\Models\Subject;
use App\Models\Teacherassign;
use App\Models\Result;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Unique;

class UserController extends Controller
{
    // use SendsPasswordResetEmails;

    public function createadmission (Request $request){
       
        $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string'],
            'slug' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'unique:users'],
            'middlename' => ['required', 'string'],
            'monthofentry' => ['required', 'string'],
            
            'placeofbirth' => ['required', 'string'],
            'gender' => ['required', 'string'],
            'section' => ['required', 'string'],
            'dob' => ['required', 'string'],
            'classname' => ['required', 'string'],
            'state' => ['required', 'string'],
            'religion' => ['required', 'string'],
            'term' => ['required', 'string'],
            'password' => ['required', 'string'],
            'academic_session' => ['required', 'string'],
            
            'images' => 'nullable|mimes:jpg,png,jpeg'
        ]);
        if ($request->hasFile('images')) {
            // Store the new images
            $path = $request->file('images')->store('resourceimages');
    
            // Update the image path in the post
        }else{
    
            $path = 'noimage.jpg';
        }
        $add_adimission = new User();

        $add_adimission['images'] = $path;
        $add_adimission->surname = $request->surname;
        // $add_adimission->centername = $request->centername;
        $add_adimission->slug = $request->slug;
        $add_adimission->fname = $request->fname;
        $add_adimission->middlename = $request->middlename;
        $add_adimission->email = $request->email;
        $add_adimission->phone = $request->phone;
        $add_adimission->dob = $request->dob;
        $add_adimission->placeofbirth = $request->placeofbirth;
        $add_adimission->monthofentry = $request->monthofentry;
        $add_adimission->gender = $request->gender;
        $add_adimission->section = $request->section;
        $add_adimission->religion = $request->religion;
        $add_adimission->state = $request->state;
        $add_adimission->term = $request->term;
        $add_adimission->classname = $request->classname;
        $add_adimission->academic_session = $request->academic_session;
        // $add_adimission->assign = 'student';
        $add_adimission->assign1 = 'student';
        $add_adimission->password = \Hash::make($request->password);
        $add_adimission->ref_no1 = substr(rand(0,time()),0, 9);

        $add_adimission->save();
        return redirect()->route('secondregistration', ['ref_no' =>$add_adimission->ref_no]); 

    }

    public function addparent(){

        return view('dashboard.admin.addparent');
    }

    public function addparentshead(){
        
        return view('dashboard.addparentshead');
    }

    public function secondregistration($ref_no){
        $addsec_registration = User::where('ref_no', $ref_no)->first();
        return view('pages.secondregistration', compact('addsec_registration'));
    }
    public function thirdregistration($ref_no){
        $addthird_registration = User::where('ref_no', $ref_no)->first();
        return view('pages.thirdregistration', compact('addthird_registration'));
    }

    


    public function addsecondadmmin(Request $request, $ref_no){
        $addsec_admission = User::where('ref_no', $ref_no)->first();

        $request->validate([
            'fathersurname' => ['required', 'string'],
            'fathername' => ['required', 'string'],
            'fathermiddlename' => ['required', 'string'],
            'title' => ['required', 'string'],
            'fatherphone' => ['nullable', 'string'],
            'nationality' => ['required', 'string'],
            'fatheremployer' => ['required', 'string'],
            'fatheremail' => ['nullable', 'string'],
            'fatheraddress' => ['required', 'string'],
            'mothersurname' => ['required', 'string'],
            'mothername' => ['required', 'string'],
            'mothermiddlename' => ['required', 'string'],
            'mothertitle' => ['required', 'string'],
            'motherphone' => ['nullable', 'string'],
            'mothernationality' => ['required', 'string'],
            'motheremployer' => ['required', 'string'],
            'motheremail' => ['nullable', 'string'],
            'motheraddress' => ['required', 'string'],

            
        ]);
      

        $addsec_admission->fathersurname = $request->fathersurname;
        $addsec_admission->fathername = $request->fathername;
        $addsec_admission->fathermiddlename = $request->fathermiddlename;
        $addsec_admission->title = $request->title;
        $addsec_admission->fatherphone = $request->fatherphone;
        $addsec_admission->nationality = $request->nationality;
        $addsec_admission->fatheremployer = $request->fatheremployer;
        $addsec_admission->fatheremail = $request->fatheremail;
        $addsec_admission->fatheraddress = $request->fatheraddress;
        $addsec_admission->mothersurname = $request->mothersurname;
        $addsec_admission->mothername = $request->mothername;
        $addsec_admission->mothermiddlename = $request->mothermiddlename;
        $addsec_admission->mothertitle = $request->mothertitle;
        $addsec_admission->motherphone = $request->motherphone;
        $addsec_admission->mothernationality = $request->mothernationality;
        $addsec_admission->motheremployer = $request->motheremployer;
        $addsec_admission->motheremail = $request->motheremail;
        $addsec_admission->motheraddress = $request->motheraddress;
        $addsec_admission->assign = 'parent';
        $addsec_admission->update();

        return redirect()->route('thirdregistration', ['ref_no' =>$addsec_admission->ref_no]); 

    }


    public function updateaddthirdondadmmin(Request $request, $ref_no){
        $addthid_admission = User::where('ref_no', $ref_no)->first();
        $request->validate([
            'lastschool' => ['required', 'string'],
            'landmark' => ['required', 'string'],
            'relationship' => ['required', 'string'],
            'brixtonsiblings' => ['required', 'string'],
            'schooladdress' => ['required', 'string'],
            'aboutus' => ['required', 'string'],
            'birthcert' => 'nullable|mimes:jpg,png,jpeg',
          
            
        ]);
        if ($request->hasFile('birthcert')){

            $file = $request['birthcert'];
            $filename = 'SimonJonah-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $request->file('birthcert')->storeAs('resourceimages', $filename);
        }
        $addthid_admission['birthcert'] = $path;
        $addthid_admission->lastschool = $request->lastschool;
        $addthid_admission->aboutus = $request->aboutus;
        $addthid_admission->schooladdress = $request->schooladdress;
        $addthid_admission->brixtonsiblings = $request->brixtonsiblings;
        $addthid_admission->landmark = $request->landmark;
        $addthid_admission->lastschool = $request->lastschool;
        $addthid_admission->relationship = $request->relationship;
        
        
        $addthid_admission->update();

        return redirect()->route('medicalreports', ['ref_no' =>$addthid_admission->ref_no]); 

    }

  
    public function medicalreports($ref_no){
        $addthid_admission = User::where('ref_no', $ref_no)->first();
        return view('pages.medicalreports', compact('addthid_admission'));
    }
    
    public function addmedicalsdadmmin(Request $request, $ref_no){
        $addthid_admission = User::where('ref_no', $ref_no)->first();
        $request->validate([
            'genotype1' => ['nullable', 'string'],
            'genotype2' => ['nullable', 'string'],
            'asthmatic1' => ['nullable', 'string'],
            'asthmatic2' => ['nullable', 'string'],
            'symtoms1' => ['nullable', 'string'],
            'symtoms2' => ['nullable', 'string'],
            'symtoms3' => ['nullable', 'string'],
            'symtoms4' => ['nullable', 'string'],
            'medicalcondition1' => ['nullable', 'string'],
            'medicalcondition2' => ['nullable', 'string'],
            'diagnose1' => ['nullable', 'string'],
            'diagnose2' => ['nullable', 'string'],
            'diagnose3' => ['nullable', 'string'],
            'schoolclinic1' => ['nullable', 'string'],
            'schoolclinic2' => ['nullable', 'string'],
            'smallpox1' => ['nullable', 'string'],
            'smallpox2' => ['nullable', 'string'],
            'chickenpox1' => ['nullable', 'string'],
            'chickenpox2' => ['nullable', 'string'],
            'polio1' => ['nullable', 'string'],
            'polio2' => ['nullable', 'string'],
            'tetanus1' => ['nullable', 'string'],
            'tetanus2' => ['nullable', 'string'],
            'tuber1' => ['nullable', 'string'],
            'tuber1' => ['nullable', 'string'],
            'tuber2' => ['nullable', 'string'],
            'mumps1' => ['nullable', 'string'],
            'mumps2' => ['nullable', 'string'],
            'rebelia1' => ['nullable', 'string'],
            'rebelia2' => ['nullable', 'string'],
            'hepatitis1' => ['nullable', 'string'],
            'hepatitis2' => ['nullable', 'string'],
            'meningitis1' => ['nullable', 'string'],
            'meningitis2' => ['nullable', 'string'],
            'whoopingcough1' => ['nullable', 'string'],
            'whoopingcough2' => ['nullable', 'string'],
            'Diphtheria1' => ['nullable', 'string'],
            'Diphtheria2' => ['nullable', 'string'],
            'doctorname' => ['nullable', 'string'],
            'doctoraddress' => ['nullable', 'string'],
            'doctorphone' => ['nullable', 'string'],
            'immune' => 'nullable|mimes:jpg,png,jpeg',
        ]);
        // Check if a new image has been uploaded
    if ($request->hasFile('immune')) {
        // Store the new immune
        $path = $request->file('immune')->store('resourceimages');

        // Update the image path in the post
        $addthid_admission->immune = $path;
    }else{

        $path = 'noimage.jpg';
    }

        // if ($request->hasFile('immune')){

        //     $file = $request['immune'];
        //     $filename = 'SimonJonah-' . time() . '.' . $file->getClientOriginalExtension();
        //     $path = $request->file('immune')->storeAs('resourceimages', $filename);
        // }else{

        //     $path = 'noimage.jpg';
        // }
        // $addthid_admission['immune'] = $path;
        $addthid_admission->genotype1 = $request->genotype1;
        $addthid_admission->genotype2 = $request->genotype2;
        $addthid_admission->asthmatic1 = $request->asthmatic1;
        $addthid_admission->asthmatic2 = $request->asthmatic2;
        $addthid_admission->symtoms1 = $request->symtoms1;
        $addthid_admission->symtoms2 = $request->symtoms2;
        $addthid_admission->symtoms3 = $request->symtoms3;
        $addthid_admission->symtoms4 = $request->symtoms4;

        $addthid_admission->medicalcondition1 = $request->medicalcondition1;
        $addthid_admission->medicalcondition2 = $request->medicalcondition2;
        $addthid_admission->diagnose1 = $request->diagnose1;
        $addthid_admission->diagnose2 = $request->diagnose2;
        $addthid_admission->diagnose3 = $request->diagnose3;

        $addthid_admission->schoolclinic1 = $request->schoolclinic1;
        $addthid_admission->schoolclinic2 = $request->schoolclinic2;
        $addthid_admission->smallpox1 = $request->smallpox1;
        $addthid_admission->smallpox2 = $request->smallpox2;
        $addthid_admission->chickenpox1 = $request->chickenpox1;
        $addthid_admission->chickenpox2 = $request->chickenpox2;

        $addthid_admission->polio1 = $request->polio1;
        $addthid_admission->polio2 = $request->polio2;
        $addthid_admission->tetanus1 = $request->tetanus1;
        $addthid_admission->tetanus2 = $request->tetanus2;

        $addthid_admission->tuber1 = $request->tuber1;
        $addthid_admission->tuber2 = $request->tuber2;
        $addthid_admission->mumps1 = $request->mumps1;
        $addthid_admission->mumps2 = $request->mumps2;

        $addthid_admission->rebelia1 = $request->rebelia1;
        $addthid_admission->rebelia2 = $request->rebelia2;

        $addthid_admission->hepatitis1 = $request->hepatitis1;
        $addthid_admission->hepatitis2 = $request->hepatitis2;

        $addthid_admission->meningitis1 = $request->meningitis1;
        $addthid_admission->meningitis2 = $request->meningitis2;
        $addthid_admission->whoopingcough1 = $request->whoopingcough1;
        $addthid_admission->whoopingcough2 = $request->whoopingcough2;
        
        $addthid_admission->diphtheria1 = $request->diphtheria1;
        $addthid_admission->diphtheria2 = $request->diphtheria2;

        $addthid_admission->doctorname = $request->doctorname;
        $addthid_admission->doctoraddress = $request->doctoraddress;
        $addthid_admission->doctorphone = $request->doctorphone;
        
        $addthid_admission->update();


        return redirect()->back()->with('success', 'You have added medical reports');
        // return redirect()->route('printadmissionform', ['ref_no' =>$addthid_admission->ref_no]); 
    }

    public function printadmissionform($ref_no){
        $print_admissionform = User::where('ref_no', $ref_no)->first();
        return view('pages.printadmissionform', compact('print_admissionform'));
    }

   public function adminprogress(){
        $admin_progress = User::where('assign1', 'student')->latest()->get();
    return view('dashboard.admin.adminprogress', compact('admin_progress'));
   }

   public function viewstudents($ref_no1){
    $view_students = User::where('ref_no1', $ref_no1)->first();
    return view('dashboard.admin.viewstudents', compact('view_students'));
    }
    public function editstudent($ref_no1){
        $edit_students = User::where('ref_no1', $ref_no1)->first();
        $add_class = Classname::all();
        $view_sessions = Academicsession::all();
        return view('dashboard.admin.editstudent', compact('view_sessions', 'add_class', 'edit_students'));
    }

    public function updateadmission(Request $request, $ref_no1){
        $edit_students = User::where('ref_no1', $ref_no1)->first();
       
        $request->validate([

            'fname' => ['nullable', 'string', 'max:255'],
            'surname' => ['nullable', 'string'],
            'user_id' => ['nullable', 'string'],
            'middlename' => ['nullable', 'string'],
            'monthofentry' => ['nullable', 'string'],
            
            'placeofbirth' => ['nullable', 'string'],
            'state' => ['nullable', 'string'],
            'att' => ['nullable', 'string'],
            'attendedtime' => ['nullable', 'string'],
            'medreports1' => ['nullable', 'string'],
            'livingwith' => ['nullable', 'string'],
            'handicap' => ['nullable', 'string'],
            'sighted' => ['nullable', 'string'],
            'gender' => ['nullable', 'string'],
            'section' => ['nullable', 'string'],
            'dob' => ['nullable', 'string'],
            'classname' => ['nullable', 'string'],
            'state' => ['nullable', 'string'],
            'religion' => ['nullable', 'string'],
            'term' => ['nullable', 'string'],
            'ref_no' => ['nullable', 'string'],
            'academic_session' => ['nullable', 'string'],
            'images' => 'nullable|mimes:jpg,png,jpeg',

            'hearing1' => ['nullable', 'string'],
            'speech' => ['nullable', 'string'],
            'ortho1' => ['nullable', 'string'],
            'mentally' => ['nullable', 'string'],
            'quiet' => ['nullable', 'string'],
            'quiet1' => ['nullable', 'string'],

            'gifted' => ['nullable', 'string'],
            'started_school' => ['nullable', 'string'],
            'school_name' => ['nullable', 'string'],
            'class_attended' => ['nullable', 'string'],
            'transfer_cert' => ['nullable', 'string'],
            'tobeattended' => ['nullable', 'string'],
            'attended' => ['nullable', 'string'],
            'cistern' => ['nullable', 'string'],
            'game' => ['nullable', 'string'],
            'toys' => ['nullable', 'string'],
            'playwith' => ['nullable', 'string'],
            'spent' => ['nullable', 'string'],
            'playful1' => ['nullable', 'string'],
            'playwith1' => ['nullable', 'string'],
            'playwith' => ['nullable', 'string'],
            'playwith2' => ['nullable', 'string'],
            'playwith3' => ['nullable', 'string'],
            'playwith4' => ['nullable', 'string'],
            'playwith5' => ['nullable', 'string'],
            'livingwith1' => ['nullable', 'string'],
            'lga' => ['nullable', 'string'],
            'birthcert' => 'nullable|mimes:jpg,png,jpeg,pdf',
            'payment_evid' => 'nullable|mimes:jpg,png,jpeg,pdf',
            'report_card' => 'nullable|mimes:jpg,png,jpeg,pdf',
            
        ]);

        if ($request->hasFile('birthcert')) {
            $pathcert = $request->file('birthcert')->store('resourceimages');
            $edit_students['birthcert'] = $pathcert;

            }else{
            $pathcert = 'noimage.jpg';
        }

       if ($request->hasFile('images')) {
            // Store the new images
            $path = $request->file('images')->store('resourceimages');
            $edit_students['images'] = $path;
            }else{

            $path = 'noimage.jpg';
        }

        if ($request->hasFile('payment_evid')) {
            $pathpayment = $request->file('payment_evid')->store('resourceimages');
            
            $edit_students['payment_evid'] = $pathpayment;
            }else{
            $pathpayment = 'noimage.jpg';
        }

        if ($request->hasFile('report_card')) {
            $pathreport = $request->file('report_card')->store('resourceimages');
            
            $edit_students['report_card'] = $pathreport;
            }else{
            $pathreport = 'noimage.jpg';
           
        }

     
        // $edit_students['images'] = $path;
        // $edit_students['birthcert'] = $pathcert;
        // $edit_students['payment_evid'] = $pathpayment;
        // $edit_students['report_card'] = $pathreport;
        
        $edit_students->surname = $request->surname;
      
        $edit_students->fname = $request->fname;
       
        $edit_students->middlename = $request->middlename;
        $edit_students->ref_no = $request->ref_no;
        $edit_students->dob = $request->dob;
        $edit_students->placeofbirth = $request->placeofbirth;
        $edit_students->monthofentry = $request->monthofentry;
        $edit_students->gender = $request->gender;
        $edit_students->section = $request->section;
        $edit_students->religion = $request->religion;
        $edit_students->state = $request->state;
        $edit_students->term = $request->term;
        $edit_students->classname = $request->classname;
        $edit_students->academic_session = $request->academic_session;
        $edit_students->att = $request->att;
        $edit_students->attendedtime = $request->attendedtime;
        $edit_students->medreports1 = $request->medreports1;
        $edit_students->livingwith = $request->livingwith;
        $edit_students->handicap = $request->handicap;

        $edit_students->sighted = $request->sighted;
        $edit_students->speech = $request->speech;
        $edit_students->hearing1 = $request->hearing1;
        $edit_students->ortho1 = $request->ortho1;
        $edit_students->mentally = $request->mentally;
        $edit_students->quiet1 = $request->quiet1;
        $edit_students->gifted = $request->gifted;
        $edit_students->started_school = $request->started_school;

        $edit_students->school_name = $request->school_name;
        $edit_students->class_attended = $request->class_attended;
        $edit_students->transfer_cert = $request->transfer_cert;
        $edit_students->tobeattended = $request->tobeattended;
        $edit_students->attended = $request->attended;
        $edit_students->cistern = $request->cistern;

        $edit_students->game = $request->game;
        $edit_students->toys = $request->toys;
        $edit_students->playwith = $request->playwith;
        $edit_students->spent = $request->spent;
        $edit_students->playful1 = $request->playful1;
        $edit_students->livingwith1 = $request->livingwith1;
        $edit_students->lga = $request->lga;
        
        $edit_students->save();

        return redirect()->back()->with('success', 'You have added the child to the parent successfully');
        // return redirect()->route('medicalreports', ['ref_no' =>$add_child->ref_no]); 

    }

    public function rejectstudent($ref_no1){
        $reject_student = User::where('ref_no1', $ref_no1)->first();
        $reject_student->status = 'reject';
        $reject_student->save();
        return redirect()->back()->with('success', 'you have rejected successfully');
    }

    public function rejectstudent1($ref_no1){
        $reject_student = User::where('ref_no1', $ref_no1)->first();
        $reject_student->status = 'reject';
        $reject_student->save();
        return redirect()->back()->with('success', 'you have rejected successfully');
    }
    public function rejectedstudent(){
        $reject_students = User::where('status', 'reject')->where('assign1', 'student')->where('assign1', 'student')->get();
        return view('dashboard.admin.rejectedstudent', compact('reject_students'));
    }
    public function suspendstudent($ref_no1){
        $suspend_student = User::where('ref_no1', $ref_no1)->first();
        $suspend_student->status = 'suspend';
        $suspend_student->save();
        return redirect()->back()->with('success', 'you have approved successfully');
    }

    public function rejectsparent($ref_no){
        $suspend_student = User::where('ref_no', $ref_no)->first();
        $suspend_student->status = 'reject';
        $suspend_student->save();
        return redirect()->back()->with('success', 'you have approved successfully');
    }

    

    public function suspendstudent1($ref_no1){
        $suspend_student = User::where('ref_no1', $ref_no1)->first();
        $suspend_student->status = 'suspend';
        $suspend_student->save();
        return redirect()->back()->with('success', 'you have approved successfully');
    }
    public function suspendstudents(){
        $suspend_students = User::where('status', 'suspend')->get();
        return view('dashboard.admin.suspendstudents', compact('suspend_students'));
    }

    public function studentsaddmit($ref_no){
        $admit_student = User::where('ref_no', $ref_no)->first();
        $admit_student->status = 'admitted';
        $admit_student->save();
        return redirect()->back()->with('success', 'you have approved successfully');
    }

    public function addmitparent($ref_no){
        $admit_student = User::where('ref_no', $ref_no)->first();
        $admit_student->status = 'admitted';
        $admit_student->save();
        return redirect()->back()->with('success', 'you have approved successfully');
    }
    public function suspendparent($ref_no){
        $admit_student = User::where('ref_no', $ref_no)->first();
        $admit_student->status = 'suspend';
        $admit_student->save();
        return redirect()->back()->with('success', 'you have approved successfully');
    }
    
    

    public function studentsaddmit1($ref_no1){
        $admit_student = User::where('ref_no1', $ref_no1)->first();
        $admit_student->status = 'admitted';
        $admit_student->save();
        return redirect()->back()->with('success', 'you have approved successfully');
    }

    public function studentsaddmit1ew($ref_no1){
        $admit_student = User::where('ref_no1', $ref_no1)->first();
        $admit_student->status = 'admitted';
        $admit_student->save();
        return redirect()->back()->with('success', 'you have approved successfully');
    }


    public function viewstudentsbyparent($ref_no1){
        $view_student = User::where('ref_no1', $ref_no1)->first();
        
        return view('dashboard.viewstudentsbyparent', compact('view_student'));
    }

    public function editstudentbyparent($ref_no1){
        $edit_student = User::where('ref_no1', $ref_no1)->first();
        $add_class = Classname::all();
        $view_sessions = Academicsession::all();
        return view('dashboard.editstudentbyparent', compact('view_sessions', 'add_class', 'edit_student'));
    }


    public function teacherdelete($ref_no){
        $edit_student = User::where('ref_no', $ref_no)->delete();
        return redirect()->back()->with('success', 'You have successfully deleted the teacher');
    }

    

    

    public function studentsaddmits($ref_no1){
        $admit_student = User::where('ref_no1', $ref_no1)->first();
        $admit_student->status = 'admitted';
        $admit_student->save();
        return redirect()->back()->with('success', 'you have approved successfully');
    }

    public function studentsaddmitew($ref_no1){
        $admit_student = User::where('ref_no1', $ref_no1)->first();
        $admit_student->status = 'admitted';
        $admit_student->save();
        return redirect()->back()->with('success', 'you have approved successfully');
    }

    

    
    public function admittedstudents(){
        $admit_students = User::where('status', 'admitted')->where('assign1', 'student')->orderby('created_at', 'DESC')->get();
        return view('dashboard.admin.admittedstudents', compact('admit_students'));
    }

    public function addregno($id){
        $student_regno = User::where('id', $id)->first();
        return view('dashboard.admin.addregno', compact('student_regno'));
    }

    public function addingregno(Request $request, $id){
        $student_regno = User::where('id', $id)->first();
        $request->validate([
            'regnumber' => ['required', 'string', 'unique:users', 'max:255'],
        ]);
       
        $student_regno->regnumber = $request->regnumber;
        $student_regno->update();
        if ($student_regno) {
            return redirect()->back()->with('success', 'you have successfully registered');
                
            }else{
                return redirect()->back()->with('error', 'you have fail to registered');
        }
    }
    public function studentpdf($ref_no1){
        $print_students = User::where('ref_no1', $ref_no1)->first();
        return view('dashboard.admin.studentpdf', compact('print_students'));
    }

    public function medicalspdf($ref_no1){
        $printmedi_students = User::where('ref_no1', $ref_no1)->first();
        return view('dashboard.admin.medicalspdf', compact('printmedi_students'));
    }
    public function allstudents(){
        $all_students = User::where('assign1', 'student')->get();
        return view('dashboard.admin.allstudents', compact('all_students'));
    }
    public function allstudentpdf(){
        $printall_students = User::latest()->get();
        return view('dashboard.admin.allstudentpdf', compact('printall_students'));
    }

    public function allcrechepdf(){
        $printallcreche_students = User::where('section', 'Creche')->latest()->get();
        return view('dashboard.admin.allcrechepdf', compact('printallcreche_students'));
    }

    public function allnurserypdf(){
        $printallnursery_students = User::where('section', 'Nursery')->latest()->get();
        return view('dashboard.admin.allnurserypdf', compact('printallnursery_students'));
    }
    public function allprimarypdf(){
        $printallPrimary_students = User::where('section', 'Primary')->latest()->get();
        return view('dashboard.admin.allprimarypdf', compact('printallPrimary_students'));
    }

    public function allhighschpdf(){
        $printallhigh_students = User::where('section', 'High School')->latest()->get();
        return view('dashboard.admin.allhighschpdf', compact('printallhigh_students'));
    }

   

    public function alluyocrechepdf(){
        $printalluyo_creches = User::where('centername', 'Uyo')
        ->where('section', 'Creche')->latest()->get();
        return view('dashboard.admin.alluyocrechepdf', compact('printalluyo_creches'));
    }

    public function alluyopreperatorypdf(){
        $printalluyo_preparatories = User::where('section', 'Preparatory')
        ->where('centername', 'Uyo')
        ->latest()->get();
        return view('dashboard.admin.alluyopreperatorypdf', compact('printalluyo_preparatories'));
    }

    public function allpreschoolpdf(){
        $printalluyo_preschools = User::where('centername', 'Uyo')
        ->where('section', 'Early Years Foundation Stage (EYFS)')->latest()->get();
        return view('dashboard.admin.allpreschoolpdf', compact('printalluyo_preschools'));
    }
    public function alluyonurserypdf(){
        $printalluyo_nurserys = User::where('centername', 'Uyo')
        ->where('section', 'Nursery')->latest()->get();
        return view('dashboard.admin.alluyonurserypdf', compact('printalluyo_nurserys'));
    }
    public function alluyoprimarypdf(){
        $printalluyo_primaries = User::where('centername', 'Uyo')
        ->where('section', 'Primary')->latest()->get();
        return view('dashboard.admin.alluyoprimarypdf', compact('printalluyo_primaries'));
    }

    public function alluyohighschpdf(){
        $printalluyo_highschools = User::where('centername', 'Uyo')
        ->where('section', 'High School')->latest()->get();
        return view('dashboard.admin.alluyohighschpdf', compact('printalluyo_highschools'));
    }

    public function alluyocentpdf(){
        $printall_uyocenters = User::where('centername', 'Uyo')->latest()->get();
        return view('dashboard.admin.alluyocentpdf', compact('printall_uyocenters'));
    }
    public function allabujapdf(){
        $printall_abujacenters = User::where('centername', 'Abuja')->latest()->get();
        return view('dashboard.admin.allabujapdf', compact('printall_abujacenters'));
    }
    
    public function viewpreparatory(){
        $display_uyopreparatorys = User::where('centername', 'Uyo')
        ->where('section', 'Preparatory')
        ->latest()->get();
        return view('dashboard.admin.viewpreparatory', compact('display_uyopreparatorys'));
    }
    public function viewpreschool(){
        $display_uyopreschools = User::where('centername', 'Uyo')
        ->where('section', 'Early Years Foundation Stage (EYFS)')
        ->latest()->get();
        return view('dashboard.admin.viewpreschool', compact('display_uyopreschools'));
    }
    public function viewnursery(){
        $display_uyonurserys = User::where('centername', 'Uyo')
        ->where('section', 'Nursery')
        ->latest()->get();
        return view('dashboard.admin.viewnursery', compact('display_uyonurserys'));
    }

    public function viewprimary(){
        $display_uyoprimarys = User::where('centername', 'Uyo')
        ->where('section', 'Primary')
        ->where('assign1', 'student')
        ->latest()->get();
        return view('dashboard.admin.viewprimary', compact('display_uyoprimarys'));
    }
    public function viewhighschool(){
        $display_uyohighschools = User::where('centername', 'Uyo')
        ->where('section', 'High School')
        ->latest()->get();
        return view('dashboard.admin.viewhighschool', compact('display_uyohighschools'));
    }

    

    public function allabujacrechepdf(){
        $display_abujacrechs = User::where('centername', 'Abuja')
        ->where('section', 'Creche')
        ->latest()->get();
        return view('dashboard.admin.allabujacrechepdf', compact('display_abujacrechs'));
    }

    public function allabujapreperatorypdf(){
        $print_allabujapreparatorys = User::where('centername', 'Abuja')
        ->where('section', 'Preparatory')
        ->latest()->get();
        return view('dashboard.admin.allabujapreperatorypdf', compact('print_allabujapreparatorys'));
    }
    
    public function allabujapreschoolpdf(){
        $print_allabjpreschools = User::where('centername', 'Abuja')
        ->where('section', 'Early Years Foundation Stage (EYFS)')
        ->latest()->get();
        return view('dashboard.admin.allabujapreschoolpdf', compact('print_allabjpreschools'));
    }

    public function allabujanurserypdf(){
        $print_allabjnurserys = User::where('centername', 'Abuja')
        ->where('section', 'Nursery')
        ->latest()->get();
        return view('dashboard.admin.allabujanurserypdf', compact('print_allabjnurserys'));
    }

    public function allabujaprimarypdf(){
        $print_allabjprimarys = User::where('centername', 'Abuja')
        ->where('section', 'Primary')
        ->latest()->get();
        return view('dashboard.admin.allabujaprimarypdf', compact('print_allabjprimarys'));
    }
    public function allabujahighschpdf(){
        $print_allabjhighschools = User::where('centername', 'Abuja')
        ->where('section', 'Primary')
        ->latest()->get();
        return view('dashboard.admin.allabujahighschpdf', compact('print_allabjhighschools'));
    }

    public function viewabujapreparatory(){
        $view_abjpreparatorys = User::where('centername', 'Abuja')
        ->where('section', 'Preparatory')
        ->latest()->get();
        return view('dashboard.admin.viewabujapreparatory', compact('view_abjpreparatorys'));
    }

    public function abujapreschool(){
        $view_abjpreschools = User::where('centername', 'Abuja')
        ->where('section', 'Preparatory')
        ->latest()->get();
        return view('dashboard.admin.abujapreschool', compact('view_abjpreschools'));
    }
    public function viewabujanursery(){
        $view_abjnurserys = User::where('centername', 'Abuja')
        ->where('section', 'Nursery')
        ->latest()->get();
        return view('dashboard.admin.viewabujanursery', compact('view_abjnurserys'));
    }

    public function viewabujaprimary(){
        $view_abjprimarys = User::where('centername', 'Abuja')
        ->where('section', 'Nursery')
        ->latest()->get();
        return view('dashboard.admin.viewabujaprimary', compact('view_abjprimarys'));
    }

    
    public function viewabjhighschool(){
        $view_abjhighschools = User::where('centername', 'Abuja')
        ->where('section', 'High School')
        ->latest()->get();
        return view('dashboard.admin.viewabjhighschool', compact('view_abjhighschools'));
    }
    
    public function checkfirst (Request $request){
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'exists:users'],
            'password' => ['required', 'string', 'min:4']
        ], [
            'email.exist'=>'This email does not exist in the admins table'
        ]);
        $creds = $request->only('email', 'password');
        if (Auth::guard('web')->attempt($creds)) {
            return redirect()->route('web.home')->with('success', 'You have successfully login');
        }else{
            return redirect()->route('login')->with('error', 'Failed to login');
        }

    }

    public function home(){

        $countyourresults = Result::where('teacher_id', auth::guard('web')->id())->count();
       
        // $countreplyqueries = Query::where('user_id', auth::guard('web')->id())
        // ->where('status', 'reply')
        // ->count();
        $countmysubjects = Subject::where('section', auth::guard('web')->user()->section)->count();
        // $countmyquestions = Question::where('user_id', auth::guard('web')->id())->count();
        
        
        $view_childrens = User::where('user_id', auth::guard('web')->id())->get();
        return view('dashboard/home', compact('view_childrens', 'countmysubjects', 'countyourresults'));
    }

    public function profile($ref_no){
        $view_profile = User::where('ref_no', $ref_no)->first();
        $view_classes = Classname::all();
        // $view_centernames = Studycenter::all();
        return view('dashboard.profile', compact('view_classes', 'view_profile'));
    }

    public function admisionletter(){

        return view('dashboard.admisionletter');
    }

    public function registerteacher(){
       $dsplay_classes = Classname::all();
        return view('dashboard.registerteacher', compact('dsplay_classes'));
    }

    public function createteacher (Request $request){
       
        $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string'],
            'middlename' => ['required', 'string'],
            
            'classname' => ['required', 'string'],
            'password' => ['required', 'string'],
            'gender' => ['required', 'string'],
            
            'section' => ['required', 'string'],
            'term' => ['required', 'string'],
            
            'images' => 'required|mimes:jpg,png,jpeg'
        ]);
        // dd($request->all());

        if ($request->hasFile('images')){

            $file = $request['images'];
            $filename = 'SimonJonah-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $request->file('images')->storeAs('resourceimages', $filename);

        }

        $addteachers = new User();
        $addteachers['images'] = $path;
        $addteachers->surname = $request->surname;
        // $addteachers->centername = $request->centername;
        $addteachers->fname = $request->fname;
        $addteachers->middlename = $request->middlename;
        $addteachers->email = $request->email;
        $addteachers->phone = $request->phone;
        $addteachers->section = $request->section;
        $addteachers->gender = $request->gender;
        $addteachers->assign = 'teacher';
        $addteachers->role = 'teacher';
        $addteachers->status = 'teacher';
        $addteachers->term = $request->term;
        $addteachers->classname = $request->classname;
        $addteachers->password = \Hash::make($request->password);
        $addteachers->ref_no = substr(rand(0,time()),0, 9);
        $addteachers->save();
        if ($addteachers) {
            return redirect()->route('web.home')->with('success', 'you have successfully registered');
                
            }else{
                return redirect()->back()->with('error', 'you have fail to registered');
        }
    }
   
    public function printclasses(Request $request){
        $request->validate([
            'classname' => ['required', 'string'],
            
        ]);
        if($getyour_classes = user::where('classname', $request->classname)
        // ->where('centername', $request->centername)
        ->exists()) {
            $getyour_classes = User::orderby('created_at', 'DESC')
            // ->where('centername', $request->centername)
            ->where('classname', $request->classname)
            ->where('assign1', 'student')
       
            ->get(); 
            }else{
                return redirect()->back()->with('fail', 'There is no students in these class!');
            }
            return view('dashboard.admin.printregclass', compact('getyour_classes'));

        }


        public function pioneerterm(){
            $view_terms = User::where('term', 'First Term')
            ->where('assign1', 'student')
            ->latest()->get();
          
            return view('dashboard.pioneerterm', compact('view_terms'));
        }

        public function penultimateterm(){
            $view_terms = User::where('term', 'Second Term')->where('assign1', 'student')
            ->latest()->get();
            return view('dashboard.penultimateterm', compact('view_terms'));
        }

        public function assignedteacher($centername){
            $assign_teachers = User::where('centername', $centername)->first();
            $view_teachers = User::where('centername', $centername)
            ->where('role', 'teacher')->get();

            $view_classes = Classname::all();

            return view('dashboard.admin.assignedteacher', compact('view_classes', 'view_teachers', 'assign_teachers'));
        }

        public function assignteachertoclass (Request $request, $ref_no){
            $add_assignteacher = User::where('ref_no', $ref_no)->first();
            $request->validate([
               
                'classname' => ['required', 'string', 'max:255'],
                'term' => ['required', 'string', 'max:255'],
                
            ]);
            $add_assignteacher->classname = $request->classname;
            $add_assignteacher->term = $request->term;
            $add_assignteacher->update();
    
            return redirect()->back()->with('success', 'you have added successfully');
    
        }
         
        public function assignedstudent($id){
            $assign_student = User::find($id);
            $view_classes = Classname::all();
            return view('dashboard.assignedstudent', compact('view_classes', 'assign_student'));
        }
        
        public function premiumterm(){
            $view_terms = User::where('term', 'Third Term')->latest()->get();
          
            return view('dashboard.premiumterm', compact('view_terms'));
        }

        public function assignstudentclass(Request $request, $id){
        $assign_student = User::find($id);
        $request->validate([
            'classname' => ['required', 'string', 'max:255'],
            'term' => ['required', 'string', 'max:255'],
        ]);

        // dd($request->all());
        
        $assign_student->classname = $request->classname;
        $assign_student->term = $request->term;
 
        $assign_student->update();

        return redirect()->back()->with('success', 'you have added successfully');
    }

    public function viewteachers(){
        $view_teachers = User::where('status', 'teacher')->get();
        return view('dashboard.admin.viewteachers', compact('view_teachers'));
    }

    public function viewsingleteacher($ref_no){
        $view_singteachers = User::where('ref_no', $ref_no)->first();
        return view('dashboard.admin.viewsingleteacher', compact('view_singteachers'));
    }

    public function editteacher($ref_no){
        $edit_singteachers = User::where('ref_no', $ref_no)->first();
        $view_classnames = Classname::all();
        
        return view('dashboard.admin.editteacher', compact('view_classnames', 'edit_singteachers'));
    }
    

    public function teacherupdated(Request $request, $ref_no){
        $edit_singteachers = User::where('ref_no', $ref_no)->first();
       
        $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string'],
            'middlename' => ['required', 'string'],
            'classname' => ['required', 'string'],
            'gender' => ['required', 'string'],
            'fatheraddress' => ['nullable', 'string'],
            'section' => ['required', 'string'],
            'term' => ['required', 'string'],
            
            'images' => 'nullable|mimes:jpg,png,jpeg'
        ]);

        if ($request->hasFile('images')) {
            // Store the new images
            $path = $request->file('images')->store('resourceimages');
    
            // Update the image path in the post
            $edit_singteachers->images = $path;
        }else{
    
            $path = 'noimage.jpg';
        }
        

        // $edit_singteachers['images'] = $path;
        $edit_singteachers->surname = $request->surname;
        // $edit_singteachers->centername = $request->centername;
        $edit_singteachers->fname = $request->fname;
        $edit_singteachers->middlename = $request->middlename;
        $edit_singteachers->phone = $request->phone;
        $edit_singteachers->section = $request->section;
        $edit_singteachers->gender = $request->gender;
        $edit_singteachers->fatheraddress = $request->fatheraddress;
       
        $edit_singteachers->term = $request->term;
        $edit_singteachers->classname = $request->classname;
       
        $edit_singteachers->update();
        if ($edit_singteachers) {
            return redirect()->back()->with('success', 'you have successfully updated');
                
            }else{
                return redirect()->back()->with('error', 'you have fail to registered');
        }
    }

    public function teacherapprove($ref_no){
        $approved_teacher = User::where('ref_no', $ref_no)->first();
        $approved_teacher->role = 'approved';
        $approved_teacher->save();
        return redirect()->back()->with('success', 'you have approved successfully');
    }

    public function teachersuspend($ref_no){
        $approved_teacher = User::where('ref_no', $ref_no)->first();
        $approved_teacher->role = 'suspend';
        $approved_teacher->save();
        return redirect()->back()->with('success', 'you have suspend successfully');
    }

    public function teachersacked($ref_no){
        $approved_teacher = User::where('ref_no', $ref_no)->first();
        $approved_teacher->role = 'sacked';
        $approved_teacher->save();
        return redirect()->back()->with('success', 'you have sacked successfully');
    }
    
    public function teacherquery($ref_no){
        $query_singteachers = User::where('ref_no', $ref_no)->first();

        return view('dashboard.admin.teacherquery', compact('query_singteachers'));
    }
    public function teachersprint(){
        $print_teachers = User::where('status', 'teacher')->get();

        return view('dashboard.admin.teachersprint', compact('print_teachers'));
    }

    public function approveteachers(){
        $approves_teachers = User::where('role', 'approved')->get();
        return view('dashboard.admin.approveteachers', compact('approves_teachers'));
    }
    public function suspendedteachers(){
        $suspend_teachers = User::where('role', 'suspend')->get();
        return view('dashboard.admin.suspendedteachers', compact('suspend_teachers'));
    }
    public function sackedteachers(){
        $sacked_teachers = User::where('role', 'sacked')->get();
        return view('dashboard.admin.sackedteachers', compact('sacked_teachers'));
    }

    public function queriedteachers(){
        $queried_teachers = User::where('role', 'sacked')->get();
        return view('dashboard.admin.queriedteachers', compact('queried_teachers'));
    }

    public function allteachers(){
        $all_teachers = User::where('status', 'teacher')->get();
        return view('dashboard.admin.allteachers', compact('all_teachers'));
    }
    
    public function uyoteachers(){
        $view_uyoteachers = User::where('status', 'teacher')
        ->where('centername', 'Uyo')->get();
        return view('dashboard.admin.uyoteachers', compact('view_uyoteachers'));
    }
    public function abujateachers(){
        $view_abujateachers = User::where('status', 'teacher')
        ->where('centername', 'Abuja')->get();
        return view('dashboard.admin.abujateachers', compact('view_abujateachers'));
    }
    public function studentsubjects($ref_no1){
        $view_studentsubject = User::where('ref_no1', $ref_no1)->first();
        $view_teachersubjects = Subject::all();
        
        return view('dashboard.admin.studentsubjects', compact('view_studentsubject', 'view_teachersubjects'));
    }


    public function addresultss($id){
        $view_studentsubject = User::find($id);
        $view_teachersubjects = Subject::all();
        // $view_teachersubjects = Teacherassign::where('user_id', auth::guard('web')->id())
        // ->get();
        return view('dashboard.addresultss', compact('view_studentsubject', 'view_teachersubjects'));
    }

    public function addmidtermresults($id){
        $view_studentsubject = User::find($id);
        $view_teachersubjects = Subject::all();
        
        return view('dashboard.addmidtermresults', compact('view_studentsubject', 'view_teachersubjects'));
    }

    

    public function changeclasses ($ref_no){
        $assign_classestoTeacher = User::where('ref_no', $ref_no)->first();
        $view_centernames = Studycenter::all();
        $classnames = Classname::all();
        return view('dashboard.admin.changeclasses', compact('classnames', 'view_centernames', 'assign_classestoTeacher'));
    }
    
    public function changgeteacherclass (Request $request, $id){
        $change_classestoTeacher = User::find($id);
        $request->validate([
            'classname' => ['required', 'string', 'max:255'],
            'centername' => ['required', 'string', 'max:255'],
            'term' => ['required', 'string'],
            'section' => ['required', 'string'],
        ]);
      
        $change_classestoTeacher->classname = $request->classname;
        // $change_classestoTeacher->centername = $request->centername;
        $change_classestoTeacher->term = $request->term;
        $change_classestoTeacher->section = $request->section;
        $change_classestoTeacher->update();
        if ($change_classestoTeacher) {
            return redirect()->back()->with('success', 'you have added successfully');
            
        }else{
            return redirect()->back()->with('fail', 'you have not added successfully');
        }

    }
   
    public function addrole($id){
        $view_teachers = User::find($id);
        $view_centers = Studycenter::all();
        return view('dashboard.admin.addrole', compact('view_centers', 'view_teachers'));
    }

    public function viewroles(){
        $view_roles = User::where('status', 'teacher')->where('role', 'approved')->get();
        return view('dashboard.admin.viewroles', compact('view_roles'));
    }


    public function createrol (Request $request, $id){
        $add_roles = User::find($id);
        $request->validate([
            'promotion' => ['required', 'string', 'max:255'],
            'centername' => ['required', 'string', 'max:255'],
            'fname' => ['required', 'string', 'max:255'],
            'section' => ['required', 'string', 'max:255'],
        ]);
      
        // $add_roles->centername = $request->centername;
        $add_roles->fname = $request->fname;
        $add_roles->promotion = $request->promotion;
        $add_roles->section = $request->section;
        $add_roles->update();
       
 
        if ($add_roles) {
            return redirect()->back()->with('success', 'you have successfully registered');
                
            }else{
                return redirect()->back()->with('error', 'you have fail to registered');
        }
    }


    public function promotions(){
        $view_classess = Classname::all();
        $view_classstudents = User::where('role', null)->latest()->latest()->get();
        return view('dashboard.promotions', compact('view_classess', 'view_classstudents'));
    }


    public function crecheheads(){
        $view_classess = Classname::all();
        $view_crecheclassstudents = User::where('section', 'Creche')->latest()->get();
        return view('dashboard.crecheheads', compact('view_classess', 'view_crecheclassstudents'));
    }

    
    public function crechpupils(){
        $view_classess = Classname::all();
        $view_crecheclassstudents = User::where('section', 'Creche')->latest()->get();
        return view('dashboard.crechpupils', compact('view_classess', 'view_crecheclassstudents'));
    }
    
    public function nurseryschoolheads(){
        $view_classess = Classname::all();
        $view_nurseryclassstudents = User::where('section', 'Nursery')->latest()->get();
        return view('dashboard.nurseryschoolheads', compact('view_classess', 'view_nurseryclassstudents'));
    }

    public function nurseryschoolpupils(){
        $view_classess = Classname::all();
        $view_nurseryclassstudents = User::where('section', 'Nursery')->latest()->get();
        return view('dashboard.nurseryschoolpupils', compact('view_classess', 'view_nurseryclassstudents'));
    }
    
    public function preschoolheads(){
        $view_classess = Classname::all();
        $view_preschoolstudents = User::where('section', 'Early Years Foundation Stage (EYFS)')->get();
        return view('dashboard.preschoolheads', compact('view_classess', 'view_preschoolstudents'));
    }

    public function preschoolpupils(){
        $view_classess = Classname::all();
        $view_preschoolstudents = User::where('section', 'Early Years Foundation Stage (EYFS)')->latest()->get();
        return view('dashboard.preschoolpupils', compact('view_classess', 'view_preschoolstudents'));
    }

    
    public function primaryheads(){
        $view_classess = Classname::all();
        $view_primarystudents = User::where('section', 'Primary')->latest()->get();
        return view('dashboard.primaryheads', compact('view_classess', 'view_primarystudents'));
    }

    public function viewteachersheads($classname){
        // $view_classess = Classname::all();
        $view_teacherbyheads = User::where('classname', $classname)
        ->latest()->get();
        return view('dashboard.viewteachersheads', compact('view_teacherbyheads'));
    }

    public function viewryourteachers(){
        // $view_classess = Classname::all();
        $view_teacherbyheads = User::where('section', 'High School')
        ->latest()->get();
        return view('dashboard.viewryourteachers', compact('view_teacherbyheads'));
    }

    
    public function primarypupils(){
        $view_classess = Classname::all();
        $view_primarystudents = User::where('section', 'Primary')->latest()->get();
        return view('dashboard.primarypupils', compact('view_classess', 'view_primarystudents'));
    }
    
    public function highschools(){
        $view_classess = Classname::all();
        $view_highstudents = User::where('section', 'High School')->where('assign1', 'student')
        ->latest()->get();
        return view('dashboard.highschools', compact('view_classess', 'view_highstudents'));
    }

    public function highschoolstudents(){
        $view_classess = Classname::all();
        $view_highstudents = User::where('section', 'High School')
        ->where('assign1', 'student')
        ->latest()->get();
        return view('dashboard.highschoolstudents', compact('view_classess', 'view_highstudents'));
    }

    public function preparatorypupils(){
        $view_classess = Classname::all();
        $view_nurseryclassstudents = User::where('section', 'Preparatory')->latest()->get();
        return view('dashboard.preparatorypupils', compact('view_classess', 'view_nurseryclassstudents'));
    }

    public function preparatoryheads(){
        $view_classess = Classname::all();
        $view_nurseryclassstudents = User::where('section', 'Preparatory')->latest()->get();
        return view('dashboard.preparatoryheads', compact('view_classess', 'view_nurseryclassstudents'));
    }
    
    
    public function createsection(){
        $view_classess = Classname::all();
        $view_crechsectionstudents = User::where('section', 'Creche')->latest()->get();
        return view('dashboard.createsection', compact('view_classess', 'view_crechsectionstudents'));
    }
    public function preschoolsection(){
        $view_classess = Classname::all();
        $view_preschstudents = User::where('section', 'Early Years Foundation Stage (EYFS)')->latest()->get();
        return view('dashboard.preschoolsection', compact('view_classess', 'view_preschstudents'));
    }
    public function primarysection(){
        $view_classess = Classname::all();
        $view_primarystudents = User::where('section', 'Primary')->get();
        return view('dashboard.primarysection', compact('view_classess', 'view_primarystudents'));
    }

    public function nurserysection(){
        $view_classess = Classname::all();
        $view_nuserystudents = User::where('section', 'Nursery')->latest()->get();
        return view('dashboard.nurserysection', compact('view_classess', 'view_nuserystudents'));
    }
    public function highschoolsection(){
        $view_classess = Classname::all();
        $view_highstudents = User::where('section', 'High School')->latest()->get();
        return view('dashboard.highschoolsection', compact('view_classess', 'view_highstudents'));
    }
    
    public function studentpayment($classname){
        $view_paymentss = User::where('classname', $classname)->first();
        $view_payments = Payment::where('classname', $classname)->latest()->get();
        return view('dashboard.studentpayment', compact('view_paymentss', 'view_payments'));
    }
    
    
    
    public function updatebiodata(Request $request, $ref_no){
        $edit_bio = User::where('ref_no', $ref_no)->first();
        // dd($request->all());

        $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'section' => ['required', 'string', 'max:255'],
            'middlename' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'fatheraddress' => ['required', 'string', 'max:255'],
            'term' => ['required', 'string', 'max:255'],
            'classname' => ['required', 'string', 'max:255'],
            'images' => 'nullable|mimes:jpg,png,jpeg,jfif',
        ]);
        // dd($request->all());
        if ($request->hasFile('images')) {
            // Store the new images
            $path = $request->file('images')->store('resourceimages');
    
            // Update the image path in the post
            $edit_bio->images = $path;
        }else{
    
            $path = 'noimage.jpg';
        }
        $edit_bio->fatheraddress = $request->fatheraddress;
        $edit_bio->classname = $request->classname;
        $edit_bio->middlename = $request->middlename;
        $edit_bio->surname = $request->surname;
        $edit_bio->phone = $request->phone;
        $edit_bio->fname = $request->fname;
        $edit_bio->term = $request->term;
        $edit_bio->section = $request->section;
        // $edit_bio->centername = $request->centername;
        $edit_bio->update();
        if ($edit_bio) {
            return redirect()->back()->with('success', 'you have successfully registered');
                
            }else{
                return redirect()->back()->with('error', 'you have fail to registered');
        }
    }


    public function createparent(Request $request){
        $request->validate([
            'section' => ['required', 'string'],
            'fathersurname' => ['required', 'string'],
            'fathername' => ['required', 'string'],
            'fathermiddlename' => ['required', 'string'],
            'maritalstatus' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'unique:users'],
            'nationality' => ['required', 'string'],
            'fatheremployer' => ['required', 'string'],
            'fatheraddress' => ['required', 'string'],
            'mothersurname' => ['required', 'string'],
            'mothername' => ['required', 'string'],
            'mothermiddlename' => ['required', 'string'],
            'mothertongue' => ['required', 'string'],
            'motherphone' => ['nullable', 'string'],
            'femergeno' => ['required', 'string'],
            'semergeno' => ['required', 'string'],
            'motheremployer' => ['required', 'string'],
            'motheremail' => ['nullable', 'string', 'unique:users'],
            'motheraddress' => ['required', 'string'],
            'whobring' => ['required', 'string'],
            'religion' => ['required', 'string'],
            // 'password' => ['required', 'string'],

        ]);

        // dd($request->all());
      
        $add_parent = new user();
        $add_parent->fathersurname = $request->fathersurname;
        $add_parent->fathername = $request->fathername;
        $add_parent->fathermiddlename = $request->fathermiddlename;
        $add_parent->maritalstatus = $request->maritalstatus;
        $add_parent->phone = $request->phone;
        $add_parent->nationality = $request->nationality;
        $add_parent->fatheremployer = $request->fatheremployer;
        $add_parent->email = $request->email;
        $add_parent->fatheraddress = $request->fatheraddress;
        $add_parent->mothersurname = $request->mothersurname;
        $add_parent->mothername = $request->mothername;
        $add_parent->mothermiddlename = $request->mothermiddlename;
        $add_parent->femergeno = $request->femergeno;
        $add_parent->semergeno = $request->semergeno;
        $add_parent->motherphone = $request->motherphone;
        $add_parent->mothernationality = $request->mothernationality;
        $add_parent->motheremployer = $request->motheremployer;
        $add_parent->motheremail = $request->motheremail;
        $add_parent->motheraddress = $request->motheraddress;
        $add_parent->mothertongue = $request->mothertongue;
        $add_parent->religion = $request->religion;
        $add_parent->whobring = $request->whobring;
        $add_parent->section = $request->section;
        $add_parent->assign = 'parent';
        $add_parent->password = \Hash::make($request->phone);
        $add_parent->ref_no = substr(rand(0,time()),0, 9);
        $add_parent->save();

        return redirect()->back()->with('success', 'You have added a parent sucessfully');
        // return redirect()->route('thirdregistration', ['ref_no' =>$addsec_admission->ref_no]); 

    }


    
    public function updateparent(Request $request, $ref_no){
        $edit_parent = User::where('ref_no', $ref_no)->first();
        $request->validate([
            'section' => ['required', 'string'],
            'fathersurname' => ['required', 'string'],
            'fathername' => ['required', 'string'],
            'fathermiddlename' => ['required', 'string'],
            'maritalstatus' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string'],
            'nationality' => ['required', 'string'],
            'fatheremployer' => ['required', 'string'],
            'fatheraddress' => ['required', 'string'],
            'mothersurname' => ['required', 'string'],
            'mothername' => ['required', 'string'],
            'mothermiddlename' => ['required', 'string'],
            'mothertongue' => ['required', 'string'],
            'motherphone' => ['nullable', 'string'],
            'femergeno' => ['required', 'string'],
            'semergeno' => ['required', 'string'],
            'motheremployer' => ['required', 'string'],
            'motheremail' => ['nullable', 'string'],
            'motheraddress' => ['required', 'string'],
            'whobring' => ['required', 'string'],
            'religion' => ['required', 'string'],
            // 'password' => ['required', 'string'],

        ]);

        // dd($request->all());
      
        $edit_parent->fathersurname = $request->fathersurname;
        $edit_parent->fathername = $request->fathername;
        $edit_parent->fathermiddlename = $request->fathermiddlename;
        $edit_parent->maritalstatus = $request->maritalstatus;
        $edit_parent->phone = $request->phone;
        $edit_parent->nationality = $request->nationality;
        $edit_parent->fatheremployer = $request->fatheremployer;
        $edit_parent->email = $request->email;
        $edit_parent->fatheraddress = $request->fatheraddress;
        $edit_parent->mothersurname = $request->mothersurname;
        $edit_parent->mothername = $request->mothername;
        $edit_parent->mothermiddlename = $request->mothermiddlename;
        $edit_parent->femergeno = $request->femergeno;
        $edit_parent->semergeno = $request->semergeno;
        $edit_parent->motherphone = $request->motherphone;
        $edit_parent->mothernationality = $request->mothernationality;
        $edit_parent->motheremployer = $request->motheremployer;
        $edit_parent->motheremail = $request->motheremail;
        $edit_parent->motheraddress = $request->motheraddress;
        $edit_parent->mothertongue = $request->mothertongue;
        $edit_parent->religion = $request->religion;
        $edit_parent->whobring = $request->whobring;
        $edit_parent->section = $request->section;
        $edit_parent->update();

        return redirect()->back()->with('success', 'You have added a parent sucessfully');
        // return redirect()->route('thirdregistration', ['ref_no' =>$addsec_admission->ref_no]); 

    }

    

    public function viewsingleparent($ref_no){
        $viewsingle_parent = User::where('ref_no', $ref_no)->first();
        return view('dashboard.admin.viewsingleparent', compact('viewsingle_parent'));
    }

    // public function editparent($ref_no){
    //     $edit_parent = User::where('ref_no', $ref_no)->first();
    //     return view('dashboard.admin.editparent', compact('edit_parent'));
    // }
    
    public function createparenthead(Request $request){

        $request->validate([
            'section' => ['required', 'string'],
            'fathersurname' => ['required', 'string'],
            'fathername' => ['required', 'string'],
            'fathermiddlename' => ['required', 'string'],
            'maritalstatus' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'unique:users'],
            'nationality' => ['required', 'string'],
            'fatheremployer' => ['required', 'string'],
            'fatheraddress' => ['required', 'string'],
            'mothersurname' => ['required', 'string'],
            'mothername' => ['required', 'string'],
            'mothermiddlename' => ['required', 'string'],
            'mothertongue' => ['required', 'string'],
            'motherphone' => ['nullable', 'string'],
            'femergeno' => ['required', 'string'],
            'semergeno' => ['required', 'string'],
            'motheremployer' => ['required', 'string'],
            'motheremail' => ['nullable', 'string', 'unique:users'],
            'motheraddress' => ['required', 'string'],
            'whobring' => ['required', 'string'],
            'religion' => ['required', 'string'],
            // 'password' => ['required', 'string'],

        ]);

        // dd($request->all());
      
        $add_parent = new user();
        $add_parent->fathersurname = $request->fathersurname;
        $add_parent->fathername = $request->fathername;
        $add_parent->fathermiddlename = $request->fathermiddlename;
        $add_parent->maritalstatus = $request->maritalstatus;
        $add_parent->phone = $request->phone;
        $add_parent->nationality = $request->nationality;
        $add_parent->fatheremployer = $request->fatheremployer;
        $add_parent->email = $request->email;
        $add_parent->fatheraddress = $request->fatheraddress;
        $add_parent->mothersurname = $request->mothersurname;
        $add_parent->mothername = $request->mothername;
        $add_parent->mothermiddlename = $request->mothermiddlename;
        $add_parent->femergeno = $request->femergeno;
        $add_parent->semergeno = $request->semergeno;
        $add_parent->motherphone = $request->motherphone;
        $add_parent->mothernationality = $request->mothernationality;
        $add_parent->motheremployer = $request->motheremployer;
        $add_parent->motheremail = $request->motheremail;
        $add_parent->motheraddress = $request->motheraddress;
        $add_parent->mothertongue = $request->mothertongue;
        $add_parent->religion = $request->religion;
        $add_parent->whobring = $request->whobring;
        $add_parent->section = $request->section;
        $add_parent->assign = 'parent';
        $add_parent->password = \Hash::make($request->phone);
        $add_parent->ref_no = substr(rand(0,time()),0, 9);
        $add_parent->save();

        return redirect()->back()->with('success', 'You have added a parent sucessfully');
        // return redirect()->route('thirdregistration', ['ref_no' =>$addsec_admission->ref_no]); 

    }

    public function addchild($ref_no){
        $add_child = User::where('ref_no', $ref_no)->first();
        $view_sessions = Academicsession::all();
        $add_class = Classname::all();
        
        return view('dashboard.admin.addchild', compact('add_class', 'add_child', 'view_sessions'));
    }



    public function createadmissionadmin (Request $request){
        $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string'],
            'user_id' => ['required', 'string'],
            'middlename' => ['required', 'string'],
            'monthofentry' => ['required', 'string'],
            
            'placeofbirth' => ['required', 'string'],
            'gender' => ['required', 'string'],
            'section' => ['required', 'string'],
            'dob' => ['required', 'string'],
            'classname' => ['required', 'string'],
            'state' => ['required', 'string'],
            'religion' => ['required', 'string'],
            'term' => ['required', 'string'],
            'ref_no' => ['required', 'string'],
            'academic_session' => ['required', 'string'],
            
            'images' => 'nullable|mimes:jpg,png,jpeg'
        ]);

        // dd($request->all());
        if ($request->hasFile('images')) {
            // Store the new images
            $path = $request->file('images')->store('resourceimages');
    
            // Update the image path in the post
        }else{
    
            $path = 'noimage.jpg';
        }
        $add_child = new User();
        $add_child['images'] = $path;
        $add_child->surname = $request->surname;
        // $add_child->centername = $request->centername;
        $add_child->user_id = $request->user_id;
        $add_child->fname = $request->fname;
        $add_child->middlename = $request->middlename;
        $add_child->ref_no = $request->ref_no;
        $add_child->dob = $request->dob;
        $add_child->placeofbirth = $request->placeofbirth;
        $add_child->monthofentry = $request->monthofentry;
        $add_child->gender = $request->gender;
        $add_child->section = $request->section;
        $add_child->religion = $request->religion;
        $add_child->state = $request->state;
        $add_child->term = $request->term;
        $add_child->classname = $request->classname;
        $add_child->academic_session = $request->academic_session;
        $add_child->assign1 = 'student';
        $add_child->ref_no1 = substr(rand(0,time()),0, 9);

        $add_child->save();
        return redirect()->route('medicalreports', ['ref_no' =>$add_child->ref_no]); 

    }

    public function viewchildren ($ref_no){
        $parent = User::where('ref_no', $ref_no)->first();
        $view_childrens = User::where('ref_no', $ref_no)->where('assign1', 'student')->get();
        return view('dashboard.admin.viewchildren', compact('parent', 'view_childrens'));
    }

    public function updatestudent(Request $request, $ref_no1){
        $edit_student = User::where('ref_no1', $ref_no1)->first();
       
        $request->validate([

            'fname' => ['nullable', 'string', 'max:255'],
            'surname' => ['nullable', 'string'],
            'user_id' => ['nullable', 'string'],
            'middlename' => ['nullable', 'string'],
            'monthofentry' => ['nullable', 'string'],
            
            'placeofbirth' => ['nullable', 'string'],
            'state' => ['nullable', 'string'],
            'att' => ['nullable', 'string'],
            'attendedtime' => ['nullable', 'string'],
            'medreports1' => ['nullable', 'string'],
            'livingwith' => ['nullable', 'string'],
            'handicap' => ['nullable', 'string'],
            'sighted' => ['nullable', 'string'],
            'gender' => ['nullable', 'string'],
            'section' => ['nullable', 'string'],
            'dob' => ['nullable', 'string'],
            'classname' => ['nullable', 'string'],
            'state' => ['nullable', 'string'],
            'religion' => ['nullable', 'string'],
            'term' => ['nullable', 'string'],
            'ref_no' => ['nullable', 'string'],
            'academic_session' => ['nullable', 'string'],
            'images' => 'nullable|mimes:jpg,png,jpeg',

            'hearing1' => ['nullable', 'string'],
            'speech' => ['nullable', 'string'],
            'ortho1' => ['nullable', 'string'],
            'mentally' => ['nullable', 'string'],
            'quiet' => ['nullable', 'string'],
            'quiet1' => ['nullable', 'string'],

            'gifted' => ['nullable', 'string'],
            'started_school' => ['nullable', 'string'],
            'school_name' => ['nullable', 'string'],
            'class_attended' => ['nullable', 'string'],
            'transfer_cert' => ['nullable', 'string'],
            'tobeattended' => ['nullable', 'string'],
            'attended' => ['nullable', 'string'],
            'cistern' => ['nullable', 'string'],
            'game' => ['nullable', 'string'],
            'toys' => ['nullable', 'string'],
            'playwith' => ['nullable', 'string'],
            'spent' => ['nullable', 'string'],
            'playful1' => ['nullable', 'string'],
            'playwith1' => ['nullable', 'string'],
            'playwith' => ['nullable', 'string'],
            'playwith2' => ['nullable', 'string'],
            'playwith3' => ['nullable', 'string'],
            'playwith4' => ['nullable', 'string'],
            'playwith5' => ['nullable', 'string'],
            'livingwith1' => ['nullable', 'string'],
            'lga' => ['nullable', 'string'],
            'birthcert' => 'nullable|mimes:jpg,png,jpeg',
            'payment_evid' => 'nullable|mimes:jpg,png,jpeg',
            'report_card' => 'nullable|mimes:jpg,png,jpeg',
            
        ]);

        if ($request->hasFile('birthcert')) {
            $pathcert = $request->file('birthcert')->store('resourceimages');
            $add_child['birthcert'] = $pathcert;

            }else{
            $pathcert = 'noimage.jpg';
        }

       if ($request->hasFile('images')) {
            // Store the new images
            $path = $request->file('images')->store('resourceimages');

            $add_child['images'] = $path;
            }else{

            $path = 'noimage.jpg';
        }

        if ($request->hasFile('payment_evid')) {
            $pathpayment = $request->file('payment_evid')->store('resourceimages');
            $add_child['payment_evid'] = $pathpayment;

            }else{
            $pathpayment = 'noimage.jpg';
        }

        if ($request->hasFile('report_card')) {
            $pathreport = $request->file('report_card')->store('resourceimages');
            $add_child['report_card'] = $pathreport;

            }else{
            $pathreport = 'noimage.jpg';
        }

        // $add_child['images'] = $path;
        // $add_child['birthcert'] = $pathcert;
        
        $edit_student->surname = $request->surname;
        // $edit_student->user_id = $edit_student->user_id;
        $edit_student->fname = $request->fname;
        $edit_student->middlename = $request->middlename;
        $edit_student->ref_no = $request->ref_no;
        $edit_student->dob = $request->dob;
        $edit_student->placeofbirth = $request->placeofbirth;
        $edit_student->monthofentry = $request->monthofentry;
        $edit_student->gender = $request->gender;
        $edit_student->section = $request->section;
        $edit_student->religion = $request->religion;
        $edit_student->state = $request->state;
        $edit_student->term = $request->term;
        $edit_student->classname = $request->classname;
        $edit_student->academic_session = $request->academic_session;
       
        $edit_student->att = $request->att;
        $edit_student->attendedtime = $request->attendedtime;
        $edit_student->medreports1 = $request->medreports1;
        $edit_student->livingwith = $request->livingwith;
        $edit_student->handicap = $request->handicap;

        $edit_student->sighted = $request->sighted;
        $edit_student->speech = $request->speech;
        $edit_student->hearing1 = $request->hearing1;
        $edit_student->ortho1 = $request->ortho1;
        $edit_student->mentally = $request->mentally;
        $edit_student->quiet1 = $request->quiet1;
        $edit_student->gifted = $request->gifted;
        $edit_student->started_school = $request->started_school;

        $edit_student->school_name = $request->school_name;
        $edit_student->class_attended = $request->class_attended;
        $edit_student->transfer_cert = $request->transfer_cert;
        $edit_student->tobeattended = $request->tobeattended;
        $edit_student->attended = $request->attended;
        $edit_student->cistern = $request->cistern;

        $edit_student->game = $request->game;
        $edit_student->toys = $request->toys;
        $edit_student->playwith = $request->playwith;
        $edit_student->spent = $request->spent;
        $edit_student->playful1 = $request->playful1;
        $edit_student->livingwith1 = $request->livingwith1;
        $edit_student->lga = $request->lga;
        $edit_student->update();

        return redirect()->back()->with('success', 'You have added the child to the parent successfully');

    }



    public function registeryourchild($ref_no){
        $addyour_child = User::where('ref_no', $ref_no)->first();
        $add_class = Classname::all();
        $view_sessions = Academicsession::all();
        return view('dashboard.registeryourchild', compact('view_sessions', 'add_class', 'addyour_child'));
    }


    public function createadminbyparents (Request $request){
    //    dd($request->all());

        $request->validate([

            'fname' => ['nullable', 'string', 'max:255'],
            'surname' => ['nullable', 'string'],
            'user_id' => ['nullable', 'string'],
            'middlename' => ['nullable', 'string'],
            'monthofentry' => ['nullable', 'string'],
            
            'placeofbirth' => ['nullable', 'string'],
            'state' => ['nullable', 'string'],
            'att' => ['nullable', 'string'],
            'attendedtime' => ['nullable', 'string'],
            'medreports1' => ['nullable', 'string'],
            'livingwith' => ['nullable', 'string'],
            'handicap' => ['nullable', 'string'],
            'sighted' => ['nullable', 'string'],
            'gender' => ['nullable', 'string'],
            'section' => ['nullable', 'string'],
            'dob' => ['nullable', 'string'],
            'classname' => ['nullable', 'string'],
            'state' => ['nullable', 'string'],
            'religion' => ['nullable', 'string'],
            'term' => ['nullable', 'string'],
            'ref_no' => ['nullable', 'string'],
            'academic_session' => ['nullable', 'string'],
            'images' => 'nullable|mimes:jpg,png,jpeg',

            'hearing1' => ['nullable', 'string'],
            'speech' => ['nullable', 'string'],
            'ortho1' => ['nullable', 'string'],
            'mentally' => ['nullable', 'string'],
            'quiet' => ['nullable', 'string'],
            'quiet1' => ['nullable', 'string'],

            'gifted' => ['nullable', 'string'],
            'started_school' => ['nullable', 'string'],
            'school_name' => ['nullable', 'string'],
            'class_attended' => ['nullable', 'string'],
            'transfer_cert' => ['nullable', 'string'],
            'tobeattended' => ['nullable', 'string'],
            'attended' => ['nullable', 'string'],
            'cistern' => ['nullable', 'string'],
            'game' => ['nullable', 'string'],
            'toys' => ['nullable', 'string'],
            'playwith' => ['nullable', 'string'],
            'spent' => ['nullable', 'string'],
            'playful1' => ['nullable', 'string'],
            'playwith1' => ['nullable', 'string'],
            'playwith' => ['nullable', 'string'],
            'playwith2' => ['nullable', 'string'],
            'playwith3' => ['nullable', 'string'],
            'playwith4' => ['nullable', 'string'],
            'playwith5' => ['nullable', 'string'],
            
            'birthcert' => 'nullable|mimes:jpg,png,jpeg',
            'payment_evid' => 'nullable|mimes:jpg,png,jpeg',
            'report_card' => 'nullable|mimes:jpg,png,jpeg',
            
        ]);

        if ($request->hasFile('birthcert')) {
            $pathcert = $request->file('birthcert')->store('resourceimages');
            }else{
            $pathcert = 'noimage.jpg';
        }

       if ($request->hasFile('images')) {
            // Store the new images
            $path = $request->file('images')->store('resourceimages');

            }else{

            $path = 'noimage.jpg';
        }

        if ($request->hasFile('payment_evid')) {
            $pathpayment = $request->file('payment_evid')->store('resourceimages');
            }else{
            $pathpayment = 'noimage.jpg';
        }

        if ($request->hasFile('report_card')) {
            $pathreport = $request->file('report_card')->store('resourceimages');
            }else{
            $pathreport = 'noimage.jpg';
        }

        $add_child = new User();
        $add_child['images'] = $path;
        $add_child['birthcert'] = $pathcert;
        $add_child['payment_evid'] = $pathpayment;
        $add_child['report_card'] = $pathreport;
        
        $add_child->surname = $request->surname;
        $add_child->user_id = $request->user_id;
        $add_child->fname = $request->fname;
        $add_child->middlename = $request->middlename;
        $add_child->ref_no = $request->ref_no;
        $add_child->dob = $request->dob;
        $add_child->placeofbirth = $request->placeofbirth;
        $add_child->monthofentry = $request->monthofentry;
        $add_child->gender = $request->gender;
        $add_child->section = $request->section;
        $add_child->religion = $request->religion;
        $add_child->state = $request->state;
        $add_child->status = 'admitted';
        $add_child->term = $request->term;
        $add_child->classname = $request->classname;
        $add_child->academic_session = $request->academic_session;
        $add_child->assign1 = 'student';
        $add_child->ref_no1 = substr(rand(0,time()),0, 9);
        $add_child->att = $request->att;
        $add_child->attendedtime = $request->attendedtime;
        $add_child->medreports1 = $request->medreports1;
        $add_child->livingwith = $request->livingwith;
        $add_child->handicap = $request->handicap;
        $add_child->sighted = $request->sighted;
        $add_child->speech = $request->speech;
        $add_child->hearing1 = $request->hearing1;
        $add_child->ortho1 = $request->ortho1;
        $add_child->mentally = $request->mentally;
        $add_child->quiet1 = $request->quiet1;
        $add_child->gifted = $request->gifted;
        $add_child->started_school = $request->started_school;

        $add_child->school_name = $request->school_name;
        $add_child->class_attended = $request->class_attended;
        $add_child->transfer_cert = $request->transfer_cert;
        $add_child->tobeattended = $request->tobeattended;
        $add_child->attended = $request->attended;
        $add_child->cistern = $request->cistern;
        $add_child->livingwith1 = $request->livingwith1;
        $add_child->lga = $request->lga;
        $add_child->game = $request->game;
        $add_child->toys = $request->toys;
        $add_child->playwith = $request->playwith;
        $add_child->spent = $request->spent;
        $add_child->playful1 = $request->playful1;
        $add_child->save();

        return redirect()->back()->with('success', 'You have added the child to the parent successfully');
        // return redirect()->route('medicalreports', ['ref_no' =>$add_child->ref_no]); 

    }




    public function createstudentbyparent (Request $request){
        $request->validate([

            'fname' => ['nullable', 'string', 'max:255'],
            'surname' => ['nullable', 'string'],
            'user_id' => ['nullable', 'string'],
            'middlename' => ['nullable', 'string'],
            'monthofentry' => ['nullable', 'string'],
            
            'placeofbirth' => ['nullable', 'string'],
            'state' => ['nullable', 'string'],
            'att' => ['nullable', 'string'],
            'attendedtime' => ['nullable', 'string'],
            'medreports1' => ['nullable', 'string'],
            'livingwith' => ['nullable', 'string'],
            'handicap' => ['nullable', 'string'],
            'sighted' => ['nullable', 'string'],
            'gender' => ['nullable', 'string'],
            'section' => ['nullable', 'string'],
            'dob' => ['nullable', 'string'],
            'classname' => ['nullable', 'string'],
            'state' => ['nullable', 'string'],
            'religion' => ['nullable', 'string'],
            'term' => ['nullable', 'string'],
            'ref_no' => ['nullable', 'string'],
            'academic_session' => ['nullable', 'string'],
            'images' => 'nullable|mimes:jpg,png,jpeg',

            'hearing1' => ['nullable', 'string'],
            'speech' => ['nullable', 'string'],
            'ortho1' => ['nullable', 'string'],
            'mentally' => ['nullable', 'string'],
            'quiet' => ['nullable', 'string'],
            'quiet1' => ['nullable', 'string'],

            'gifted' => ['nullable', 'string'],
            'started_school' => ['nullable', 'string'],
            'school_name' => ['nullable', 'string'],
            'class_attended' => ['nullable', 'string'],
            'transfer_cert' => ['nullable', 'string'],
            'tobeattended' => ['nullable', 'string'],
            'attended' => ['nullable', 'string'],
            'cistern' => ['nullable', 'string'],
            'game' => ['nullable', 'string'],
            'toys' => ['nullable', 'string'],
            'playwith' => ['nullable', 'string'],
            'spent' => ['nullable', 'string'],
            'playful1' => ['nullable', 'string'],
            'playwith1' => ['nullable', 'string'],
            'playwith' => ['nullable', 'string'],
            'playwith2' => ['nullable', 'string'],
            'playwith3' => ['nullable', 'string'],
            'playwith4' => ['nullable', 'string'],
            'playwith5' => ['nullable', 'string'],
            'livingwith1' => ['nullable', 'string'],
            'lga' => ['nullable', 'string'],
            'birthcert' => 'nullable|mimes:jpg,png,jpeg',
            'payment_evid' => 'nullable|mimes:jpg,png,jpeg',
            'report_card' => 'nullable|mimes:jpg,png,jpeg',
            
        ]);

        if ($request->hasFile('birthcert')) {
            $pathcert = $request->file('birthcert')->store('resourceimages');
            }else{
            $pathcert = 'noimage.jpg';
        }

       if ($request->hasFile('images')) {
            // Store the new images
            $path = $request->file('images')->store('resourceimages');

            }else{

            $path = 'noimage.jpg';
        }

        if ($request->hasFile('payment_evid')) {
            $pathpayment = $request->file('payment_evid')->store('resourceimages');
            }else{
            $pathpayment = 'noimage.jpg';
        }

        if ($request->hasFile('report_card')) {
            $pathreport = $request->file('report_card')->store('resourceimages');
            }else{
            $pathreport = 'noimage.jpg';
        }

        $add_child = new User();
        $add_child['images'] = $path;
        $add_child['birthcert'] = $pathcert;
        $add_child['payment_evid'] = $pathpayment;
        $add_child['report_card'] = $pathreport;
        
        $add_child->surname = $request->surname;
        $add_child->user_id = $request->user_id;
        $add_child->fname = $request->fname;
        $add_child->middlename = $request->middlename;
        $add_child->ref_no = $request->ref_no;
        $add_child->dob = $request->dob;
        $add_child->placeofbirth = $request->placeofbirth;
        $add_child->monthofentry = $request->monthofentry;
        $add_child->gender = $request->gender;
        $add_child->section = $request->section;
        $add_child->religion = $request->religion;
        $add_child->state = $request->state;
        $add_child->status = 'admitted';
        $add_child->term = $request->term;
        $add_child->classname = $request->classname;
        $add_child->academic_session = $request->academic_session;
        $add_child->assign1 = 'student';
        $add_child->ref_no1 = substr(rand(0,time()),0, 9);
        $add_child->att = $request->att;
        $add_child->attendedtime = $request->attendedtime;
        $add_child->medreports1 = $request->medreports1;
        $add_child->livingwith = $request->livingwith;
        $add_child->handicap = $request->handicap;

        $add_child->sighted = $request->sighted;
        $add_child->speech = $request->speech;
        $add_child->hearing1 = $request->hearing1;
        $add_child->ortho1 = $request->ortho1;
        $add_child->mentally = $request->mentally;
        $add_child->quiet1 = $request->quiet1;
        $add_child->gifted = $request->gifted;
        $add_child->started_school = $request->started_school;

        $add_child->school_name = $request->school_name;
        $add_child->class_attended = $request->class_attended;
        $add_child->transfer_cert = $request->transfer_cert;
        $add_child->tobeattended = $request->tobeattended;
        $add_child->attended = $request->attended;
        $add_child->cistern = $request->cistern;

        $add_child->game = $request->game;
        $add_child->toys = $request->toys;
        $add_child->playwith = $request->playwith;
        $add_child->spent = $request->spent;
        $add_child->playful1 = $request->playful1;
        $add_child->livingwith1 = $request->livingwith1;
        $add_child->lga = $request->lga;
        
        $add_child->save();

        return redirect()->back()->with('success', 'You have added the child to the parent successfully');
        // return redirect()->route('medicalreports', ['ref_no' =>$add_child->ref_no]); 

    }


    


    public function mychild(){
        $view_mychilds = User::where('user_id', auth::guard('web')->id())
        ->get();
        return view('dashboard.mychild', compact('view_mychilds'));
    }

    public function paymentsbyparents(){
        // $the_results = Academicsession::all();
        $make_payments = User::where('user_id', auth::guard('web')->id())
         ->get();
 
         return view('dashboard.paymentsbyparents', compact('make_payments'));
     }

     public function viewchildrenbyhead($ref_no){
        $parent = User::where('ref_no', $ref_no)->first();
        $viewchildrens = User::where('ref_no', $ref_no)->where('assign1', 'student')->get();

         return view('dashboard.viewchildrenbyhead', compact('parent', 'viewchildrens'));
     }

     public function addregnumber1($ref_no1){
        $add_regs = User::where('ref_no1', $ref_no1)->first();
         return view('dashboard.addregnumber1', compact('add_regs'));
     }
     
     
     public function viewsingparent($ref_no){
        $view_parent = User::where('ref_no', $ref_no)->first();
        $addcenters = Studycenter::all();
      
        return view('dashboard.viewsingparent', compact('view_parent', 'addcenters'));
     }

     public function editparent($ref_no){
        $edit_parent = User::where('ref_no', $ref_no)->first();
        
      
        return view('dashboard.admin.editparent', compact('edit_parent'));
     }

     
     
    
    public function deletestudent1($ref_no1){
       $delete = User::where('ref_no1', $ref_no1)->delete();
       return redirect()->back()->with('success', 'You have added deleted student');

    }
    public function viewparentshead(){
        $view_parents = User::where('assign', 'parent')->get();
        return view('dashboard.viewparentshead', compact('view_parents'));
    }
    public function viewparents(){
       
        $view_parents = User::where('assign', 'parent')->get();
        return view('dashboard.admin.viewparents', compact('view_parents'));
        
    }
    public function updatecreateparenthead(Request $request, $ref_no){
        $edit_parent = User::where('ref_no', $ref_no)->first();

        $request->validate([
            'section' => ['required', 'string'],

            'fathersurname' => ['required', 'string'],
            'fathername' => ['required', 'string'],
            'fathermiddlename' => ['required', 'string'],
            'title' => ['required', 'string'],
           
            'nationality' => ['required', 'string'],
            'fatheremployer' => ['required', 'string'],
            'fatheraddress' => ['required', 'string'],
            'mothersurname' => ['required', 'string'],
            'mothername' => ['required', 'string'],
            'mothermiddlename' => ['required', 'string'],
            'mothertitle' => ['required', 'string'],
            'motherphone' => ['nullable', 'string'],
            'mothernationality' => ['required', 'string'],
            'motheremployer' => ['required', 'string'],
            'motheremail' => ['nullable', 'string'],
            'motheraddress' => ['required', 'string'],

            
        ]);
      
        $edit_parent->fathersurname = $request->fathersurname;
        $edit_parent->fathername = $request->fathername;
        $edit_parent->fathermiddlename = $request->fathermiddlename;
        $edit_parent->title = $request->title;
        // $edit_parent->phone = $request->phone;
        $edit_parent->nationality = $request->nationality;
        $edit_parent->fatheremployer = $request->fatheremployer;
        // $edit_parent->email = $request->email;
        $edit_parent->fatheraddress = $request->fatheraddress;
        $edit_parent->mothersurname = $request->mothersurname;
        $edit_parent->mothername = $request->mothername;
        $edit_parent->mothermiddlename = $request->mothermiddlename;
        $edit_parent->mothertitle = $request->mothertitle;
        $edit_parent->motherphone = $request->motherphone;
        $edit_parent->mothernationality = $request->mothernationality;
        $edit_parent->motheremployer = $request->motheremployer;
        $edit_parent->motheremail = $request->motheremail;
        $edit_parent->motheraddress = $request->motheraddress;
        // $edit_parent->centername = $request->centername;
        $edit_parent->section = $request->section;
        
        $edit_parent->update();
        return redirect()->back()->with('success', 'You have added a parent sucessfully');
        // return redirect()->route('thirdregistration', ['ref_no' =>$addsec_admission->ref_no]); 

    }


    public function updtateregnumber (Request $request, $id){
        $student_regno = User::where('id', $id)->first();
        $request->validate([
            'regnumber' => ['required', 'unique:users', 'string', 'max:255'],
        ]);
       
        $student_regno->regnumber = $request->regnumber;
        $student_regno->update();
        if ($student_regno) {
            return redirect()->back()->with('success', 'you have successfully registered');
                
            }else{
                return redirect()->back()->with('error', 'you have fail to registered');
        }
    }
    


     // Show form to request password reset link
     public function showLinkRequestForm()
     {
         return view('auth.passwords.email');
     } 


      // Send password reset link to the user's email
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = User::sendResetLink(
            $request->only('email')
        );

        return $status === User::RESET_LINK_SENT
                    ? back()->with(['status' => __($status)])
                    : back()->withErrors(['email' => __($status)]);
    }

    // Show form to reset password using the token
    public function showResetForm($token)
    {
        return view('auth.passwords.reset', ['token' => $token]);
    }

    // Handle the password reset process
    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $status = User::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => bcrypt($password),
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));
            }
        );

        return $status === User::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withErrors(['email' => [__($status)]]);
    }
     

     /**
     * Resend password reset link.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function resendPasswordResetLink(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'No user found with this email address.']);
        }

        $user->sendPasswordResetLink();

        return back()->with('status', 'Password reset link has been sent to your email.');
    }

    public function logout(){
        Auth::guard('web')->logout();
        return redirect('login');
    }


    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    

    
    
    
    
     

    
    
     
    
    
    
    
    
   
    
    
}
