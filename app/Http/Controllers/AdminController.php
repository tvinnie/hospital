<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

class AdminController extends Controller
{
    public function addDoctor(){
        return view('admin.add_Doctor');
    }

    public function uploadDoctorData(Request $request){

        $doctor = new doctor;

        $image = $request->file;
        $imagename = time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage', $imagename);
        $doctor->image=$imagename;

        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->room=$request->room;
        $doctor->speciality=$request->speciality;
        
        // saving data to the db
        $doctor->save();

        return redirect()->back()->with('message','Doctor added Successfully!');

    }

    public function show_appointment(){
        
        $data = appointment::all();

        return view('admin.showappointment', compact('data'));
    }

    public function approved_appointment($id){


        $data = appointment::find($id);
        $data ->status = 'Approved';
        $data-> save();

        return redirect()->back();
    }

    public function canceled($id){

        $data = appointment::find($id);
        $data->status = 'Canceled';
        $data->save();

        return redirect()->back();
    }

    public function showDoctor(){

        $data = doctor::all();
        return view('admin.showDoctor', compact('data'));
    }

    public function deleteDoctor($id){
        
        $data = doctor::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function updateDoctor($id){

        $data = doctor::find($id);
    
        return view('admin.update_doctor', compact('data'));
     

    }

    public function editDoctor(Request $request, $id){

        $data = doctor::find($id);

        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;
        

    }
}
