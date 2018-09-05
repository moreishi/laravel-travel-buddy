<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Visitor;
use App\Events\ProfileVisited;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('id','!=',Auth::user()->id);
        $count = $users->count();
        $users = $users->get();
        return view('users.index',['users' => $users,'count' => $count]);
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
        if(empty($id)) return redirect(route('home'));

        event(new ProfileVisited(Auth::user(),$id));

        $user = User::find($id);
        return view('users.show',['user' => $user]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id = NULL)
    {   
        if(empty($id)) return redirect()->route('home');
        $user = User::find($id);
        $nationality = Config('nationality');
        $heights = Config('height');
        $bodytype = Config('bodytype');
        $eyes = Config('eyes');
        $hair = Config('hair');

        return view('users.edit',[
            'heights' => $heights,
            'user' => $user,
            'bodytype' => $bodytype,
            'eyes' => $eyes,
            'hair' => $hair,
            'nationality' => $nationality
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       $user = Auth::user();

       $user->name = $request->name;
       $user->location = $request->location;
       $user->nationality = $request->nationality;
       $user->height = $request->height;
       $user->bodytype = $request->bodytype;
       $user->eyes = $request->eyes;
       $user->hair = $request->hair;
       $user->about = $request->about;
       $user->birthdate = $request->birthdate;

       $notification = 'NO';

       if(in_array($request->notification,['on','checked',true])) $notification = 'YES';

       $user->notification = $notification;

       $user->save();

       return back();

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

    public function profile()
    {
        $user = Auth::user();
        return view('users.profile',['user' => $user]);
    }
}
