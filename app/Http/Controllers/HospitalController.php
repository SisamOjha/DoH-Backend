<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Models\HospitalImage;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospitals = Hospital::all();
        return view('faculty.Hospital.index',compact('hospitals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hospitals = Hospital::all();
        return view('faculty.hospital.create',compact('hospitals'));
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

        $hospital = new Hospital();
        $hospital->name = $request->name;
        if ($request->hasFile('image')) {
            $file = $request->image;
            $newName = time() . $file->getClientOriginalName();
            $file->move('uploadedFiles', $newName);
            $hospital->image =  $newName;
        }

        $hospital->save();
        if($request->hasFile('images')){
            foreach($request->images  as $image){
                $hospitalImage = new HospitalImage();
                $newName = time() . $image->getClientOriginalName();
                $image->move('images',$newName);
                $hospitalImage->name = 'images/' . $newName;
                $hospitalImage->hospital_id = $hospital->id;
                $hospitalImage->save();
            }
        }

        return redirect()->back()->with('success','Hospital successfully added.');
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
        $hospital =  Hospital::find($id);
        $hospitalImage = HospitalImage::where('hospital_id',$id)->get();
        return view('faculty.hospital.edit',compact('hospitals','hospitalImage'));
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

        $hospital = Hospital::find($id);
        $hospital->name = $request->name;
        if ($request->hasFile('image')) {
            $file = $request->image;
            $newName = time() . $file->getClientOriginalName();
            $file->move('uploadedFiles', $newName);
            $hospital->image =  $newName;
        }
        $hospital->update();
        // We need to save product first so that we can get product ID for Product Image Table

        if($request->hasFile('images')){
            foreach($request->images  as $image){
                $hospitalImage = new HospitalImage();
                $newName = time() . $image->getClientOriginalName();
                $image->move('images',$newName);
                $hospitalImage->name = 'images/' . $newName;
                $hospitalImage->hospital_id = $hospital->id;
                $hospitalImage->save();
            }
        }



        return redirect()->back()->with('success','Hospital details updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
