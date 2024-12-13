<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Market;

class MarketController extends Controller
{
  
    public function addmarkets (){

        return view('dashboard.admin.addmarkets');
    }

    public function createmarkets(Request $request){
        // dd($request->all());
        $request->validate([
            'title' => ['required', 'string', 'max:222'],
            'messages' => ['required', 'string', 'max:222'],
            'phone' => ['required', 'string', 'max:222'],
            'email' => ['required', 'string', 'max:222'],
            'address' => ['required', 'string', 'max:222'],
            'twitter' => ['nullable', 'string', 'max:222'],
            'linkedin' => ['nullable', 'string', 'max:222'],
            'whatsapp' => ['nullable', 'string', 'max:222'],
            'facebook' => ['nullable', 'string', 'max:222'],
            'instagram' => ['nullable', 'string', 'max:222'],
            'images1' => 'nullable|mimes:jpg,png,jpeg'
        ]);
        $add_market = new Market();
        if ($request->hasFile('images1')){
            $file = $request['images1'];
            $filename = 'SimonJonah-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $request->file('images1')->storeAs('resourceimages', $filename);
        }else{
            $path = 'noimage.jpg';
        }
        $add_market['images1'] = $path;
        $add_market->title = $request->title;
        $add_market->messages = $request->messages;
        $add_market->phone = $request->phone;
        $add_market->email = $request->email;
        $add_market->address = $request->address;
        $add_market->twitter = $request->twitter;
        $add_market->facebook = $request->facebook;
        $add_market->instagram = $request->instagram;
        $add_market->whatsapp = $request->whatsapp;
        $add_market->linkedin = $request->linkedin;
        $add_market->ref_no = substr(rand(0,time()),0, 9);
        $add_market->save();
        return redirect()->route('addimage1', ['ref_no' =>$add_market->ref_no]); 

        //return redirect()->back()->with('success', 'you have added successfully');

    }



    public function updatemarkets(Request $request, $ref_no){
        $edit_markets = Market::where('ref_no', $ref_no)->first();
        $request->validate([
            'title' => ['required', 'string', 'max:222'],
            'messages' => ['required', 'string', 'max:222'],
            'phone' => ['required', 'string', 'max:222'],
            'email' => ['required', 'string', 'max:222'],
            'address' => ['required', 'string', 'max:222'],
            'twitter' => ['nullable', 'string', 'max:222'],
            'linkedin' => ['nullable', 'string', 'max:222'],
            'whatsapp' => ['nullable', 'string', 'max:222'],
            'facebook' => ['nullable', 'string', 'max:222'],
            'instagram' => ['nullable', 'string', 'max:222'],
            'images1' => 'nullable|mimes:jpg,png,jpeg'
        ]);

        if ($request->hasFile('images1')){
            $file = $request['images1'];
            $filename = 'SimonJonah-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $request->file('images1')->storeAs('resourceimages', $filename);
            $edit_markets->images1 = $path;
       
        }else{
            $path = 'noimage.jpg';
        }
        // $edit_markets['images1'] = $path;
        $edit_markets->title = $request->title;
        $edit_markets->messages = $request->messages;
        $edit_markets->phone = $request->phone;
        $edit_markets->email = $request->email;
        $edit_markets->address = $request->address;
        $edit_markets->twitter = $request->twitter;
        $edit_markets->facebook = $request->facebook;
        $edit_markets->instagram = $request->instagram;
        $edit_markets->whatsapp = $request->whatsapp;
        $edit_markets->linkedin = $request->linkedin;
        $edit_markets->update();
        return redirect()->route('addimage1', ['ref_no' =>$edit_markets->ref_no]); 

        //return redirect()->back()->with('success', 'you have added successfully');

    }

    public function addimage1($ref_no){
        $add_market = Market::where('ref_no', $ref_no)->first();
        return view('dashboard.admin.addimage1', compact('add_market'));
    }

    public function addimage3($ref_no){
        $add_market = Market::where('ref_no', $ref_no)->first();
        return view('dashboard.admin.addimage3', compact('add_market'));
    }

    public function addimage4($ref_no){
        $add_market = Market::where('ref_no', $ref_no)->first();
        return view('dashboard.admin.addimage4', compact('add_market'));
    }
     
    
    public function createimage1(Request $request, $ref_no){
        $add_market = Market::where('ref_no', $ref_no)->first();
         $request->validate([
            'images2' => 'nullable|mimes:jpg,png,jpeg'
        ]);

        if ($request->hasFile('images2')){
            $file = $request['images2'];
            $filename = 'SimonJonah-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $request->file('images2')->storeAs('resourceimages', $filename);
            $add_market['images2'] = $path;
        
        }else{
            $path = 'noimage.jpg';
        }
        $add_market->update();
        return redirect()->route('addimage3', ['ref_no' =>$add_market->ref_no]); 

    }

    public function createimage3(Request $request, $ref_no){
        $add_market = Market::where('ref_no', $ref_no)->first();
         $request->validate([
            'images3' => 'nullable|mimes:jpg,png,jpeg'
        ]);

        if ($request->hasFile('images3')){
            $file = $request['images3'];
            $filename = 'SimonJonah-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $request->file('images3')->storeAs('resourceimages', $filename);
            $add_market['images3'] = $path;
        
        }else{
            $path = 'noimage.jpg';
        }
        $add_market->update();
        return redirect()->route('addimage4', ['ref_no' =>$add_market->ref_no]); 

    }


    public function createimage4 (Request $request, $ref_no){
        $add_market = Market::where('ref_no', $ref_no)->first();
         $request->validate([
            'images4' => 'nullable|mimes:jpg,png,jpeg'
        ]);

        if ($request->hasFile('images4')){
            $file = $request['images4'];
            $filename = 'SimonJonah-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $request->file('images4')->storeAs('resourceimages', $filename);
            $add_market['images4'] = $path;
        
        }else{
            $path = 'noimage.jpg';
        }
        $add_market->update();
        return redirect()->route('addimage5', ['ref_no' =>$add_market->ref_no]); 

    }
    public function addimage5($ref_no){
        $add_market = Market::where('ref_no', $ref_no)->first();
        return view('dashboard.admin.addimage5', compact('add_market'));
    }
    public function createimage5 (Request $request, $ref_no){
        $add_market = Market::where('ref_no', $ref_no)->first();
         $request->validate([
            'images5' => 'nullable|mimes:jpg,png,jpeg'
        ]);

        if ($request->hasFile('images5')){
            $file = $request['images5'];
            $filename = 'SimonJonah-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $request->file('images5')->storeAs('resourceimages', $filename);
            $add_market['images5'] = $path;
        
        }else{
            $path = 'noimage.jpg';
        }
        $add_market->update();
        return redirect()->route('addimage5', ['ref_no' =>$add_market->ref_no]); 

    }

    public function viewmarkets(){
        $view_markets = Market::latest()->get();
        return view('dashboard.admin.viewmarkets', compact('view_markets'));
    }

    public function viewsingmarket($ref_no){
        $view_markets = Market::where('ref_no', $ref_no)->first();
        return view('dashboard.admin.viewsingmarket', compact('view_markets'));
    }

    public function editmarket($ref_no){
        $edit_markets = Market::where('ref_no', $ref_no)->first();
        return view('dashboard.admin.editmarket', compact('edit_markets'));
    }
    public function marketapproved($ref_no){
        $approve_market = Market::where('ref_no', $ref_no)->first();
        $approve_market->status = 'approved';
        $approve_market->save();
        return redirect()->back()->with('success', 'you have approved successfully');
    }

    public function marketsuspend($ref_no){
        $approve_market = Market::where('ref_no', $ref_no)->first();
        $approve_market->status = 'suspend';
        $approve_market->save();
        return redirect()->back()->with('success', 'you have suspended successfully');
    }

    public function marketdelete($ref_no){
        $approve_market = Market::where('ref_no', $ref_no)->delete();
        return redirect()->back()->with('success', 'you have deleted successfully');
    }

    
    
}
