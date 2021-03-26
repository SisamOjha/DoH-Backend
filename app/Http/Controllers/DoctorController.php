<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\DoctorImage;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('faculty.Doctor.index',compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors = Doctor::all();
        return view('faculty.Doctor.create',compact('doctors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required'
        ]);

        $doctor = new Doctor();
        $doctor->name = $request->name;
        if ($request->hasFile('image')){
            $file = $request->image;
            $newName = time() . $file->getClientOriginalName();
            $file->move('uploadedFiles', $newName);
            $doctor->image =  $newName;
        }

        $doctor->save();
        if($request->hasFile('images')){
            foreach($request->images  as $image){
                $doctorImage = new DoctorImage();
                $newName = time() . $image->getClientOriginalName();
                $image->move('images',$newName);
                $doctorImage->name = 'images/' . $newName;
                $doctorImage->doctor_id = $doctor->id;
                $doctorImage->save();
            }


        return redirect()->back()->with('success','Doctor successfully added.');
   }
}



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor =  Doctor::find($id);
        $doctorImage = DoctorImage::where('doctor_id',$id)->get();
        return view('faculty.doctor.edit',compact('doctors','doctorImage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required'
        ]);

        $doctor = Doctor::find($id);
        $doctor->name = $request->name;
        $doctor->update();

        if ($request->hasFile('image')) {
            $file = $request->image;
            $newName = time() . $file->getClientOriginalName();
            $file->move('uploadedFiles', $newName);
            $doctor->image =  $newName;
        }
        $doctor->update();
        // We need to save product first so that we can get product ID for Product Image Table

        if($request->hasFile('images')){
            foreach($request->images  as $image){
                $doctorImage = new DoctorImage();
                $newName = time() . $image->getClientOriginalName();
                $image->move('images',$newName);
                $doctorImage->name = 'images/' . $newName;
                $doctorImage->doctor_id = $doctor->id;
                $doctorImage->save();
            }
        }



        return redirect()->back()->with('success','Doctor details updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();
        return redirect('/doctors');
    }
}
