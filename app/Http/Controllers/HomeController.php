<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;

class HomeController extends Controller
{
    public function redirect() {
        if(Auth::id()) {

            if(Auth::user()->usertype == '0'){

                $doctor = doctor::all();
                return view('user.home',compact('doctor'));

            } else {

                return view('admin.home');

            }
            
        } else {
            return redirect()->back();
        }
    }

    public function index(){
        // dd(Auth::user());
        if(Auth::id()){
            return redirect ('home');
        } else {
            $doctor = doctor::all();
            return view('user.home', compact('doctor'));
        }
        
    }

    public function appointment(Request $request){

        $data = new appointment;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->doctor=$request->doctor;
        $data->date=$request->date;
        $data->message=$request->message;
        $data->status= 'In progress';
        
        if(Auth::id()){
            $data->user_id=Auth::user()->id;
        } 

        $data->save();
        return redirect()->back();
    }

    public function myappointment(){

        if(Auth::id()){
           if(Auth::user->usertype==0){
            $userid = Auth::user()->id;
            $appoint = appointment::where('user_id', $userid)->get();
            return view('user.my_appointment', compact('appoint'));
            return view('user.my_appointment');
           } else{ 
            return redirect()->back();
           }
        } else {
            return redirect('/');
        }

    }

    public function cancel_appointment($id){

        $data = appointment::find($id);

        $data->delete();

        return redirect()->back();
    }
       
}
