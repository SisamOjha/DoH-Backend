<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
//use App\Http\Controllers\Auth;
//use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('user_type', 1)->get();
        $admins = User::where('user_type', 0)->get();
        return view('faculty/profile/index', compact('users', 'admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {



        return view('faculty/profile/show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $profile = User::findOrFail($id);




        $request->validate([
            'name' =>  ['string', 'max:255', 'min:4'],
            //'current_password' => [new MatchOldPassword],
            'new_password' => ['string', 'min:8'],
            'new_confirm_password' => ['same:new_password'],


        ]);
        // if ($validator->fails()) {
        //     return response(['errors' => $validator->errors()], status: 422);
        // }

        if ($request->hasFile('profile_image')) {
            $data = $request->file('profile_image');
            $newName = time() . $data->getClientOriginalName();
            $data->move('profileImage', $newName);
            $profile->profile_image =  $newName;
        }

        if ($request->has('name')) {
            $profile->name = $request->name;
        }


        if ($request->has('newpassword')) {

            $profile->password = Hash::make($request->newpassword);
        }



        $profile->update();
        $request->session()->flash('alert-success', 'Details updated successfullly');










        return redirect()->back();
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
