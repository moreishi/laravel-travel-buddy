<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use App\User;

class ChangeUserPasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->isMethod('post')) {
            $currentPassword    = $request->currentPassword;
            $newPassword        = $request->newPassword;
            $repeatPassword     = $request->repeatPassword;

            $this->validate($request, [
                'currentPassword' => 'required',
                'newPassword' => 'required|same:repeatPassword',
                'repeatPassword' => 'required'
            ]);

            $user = Auth::user();

            if(Hash::check($currentPassword, $user->password)) {
                $user = User::find($user->id);
                $user->password = Hash::make($newPassword);
                $user->save();

                return redirect()->route('edit-password');
            } else {
                return redirect()->back()->withErrors(['currentPassword' => 'Invalid Current Password!']);
            }

        }

        return view('users.change_password');
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
        //
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
