<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Visitor;
use App\Events\ProfileVisited;
use App\Events\EmailConfig;
use App\Configuration;

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
        return view('users.show',[
            'height' => $this->setHeight($user->height) ,
            'bodytype' => $this->setBody($user->bodytype) ,
            'eyes' => $this->setEyes($user->eyes) ,
            'hair' => $this->setHair($user->hair) ,
            'nationality' => $this->setNationality($user->nationality) ,
            'user' => $user]);

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

    public function editEmail(Request $request)
    {

        $configuration = Configuration::all();
        $email_a = (in_array($configuration[0]['value'],['YES'])) ? 'checked="checked"' : '';
        $email_b = (in_array($configuration[1]['value'],['YES'])) ? 'checked="checked' : '';

        $user = User::find(Auth::user()->id);
        if ($request->isMethod('post')) {
            event(new EmailConfig($user, $request));
            return redirect()->route('edit-profile-email');
        }        
        return view('users.email',[
            'configuration' => [
                'email_a' => $email_a,
                'email_b' => $email_b
            ],
            'user' => $user]);
    }

    public function profile()
    {
        $user = Auth::user();
        return view('users.profile',['user' => $user]);
    }

    private function setBody($value) {
        $bodytype = Config('bodytype');
        foreach($bodytype as $b) {
            if($value == $b['value'])
                return $b['name'];
        }
        return "";
    }
    private function setHair($value) {
        $hair = Config('hair');
        foreach($hair as $h) {
            if($value == $h['value'])
                return $h['name'];
        }
        return "";
    }
    private function setEyes($value) {
        $eyes = Config('eyes');
        foreach($eyes as $e) {
            if($value == $e['value'])
                return $e['name'];
        }
        return "";
    }
    private function setHeight($value) {
        $height = Config('height');
        foreach($height as $h) {
            if($value == $h['value'])
                return $h['name'];
        }
        return "";
    }

    private function setNationality($value) {
        $nationality = Config('nationality');
        foreach($nationality as $n) {
            if($value == $n['value'])
                return $n['name'];
        }
        return "";
    }

}
