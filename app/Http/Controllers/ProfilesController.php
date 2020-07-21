<?php

namespace App\Http\Controllers;

class ProfilesController extends Controller
{

    public function __construct()
    {

        return $this->middleware('auth');
    }

    public function index($user)
    {
        $user = \App\User::findOrFail($user);

        // dd($user->profile);
        if ($user->profile == null) {
            return view('home');
        }

        // $profile = DB::select("SELECT profiles.*, users.name, users.email as user_email FROM profiles, users WHERE
        // profiles.user_id = users.id AND profiles.user_id=:user",["user" => $user->id]);

        return view('profiles.index', [
            'user' => $user,
            // 'profile' => $profile,
        ]);
    }
    public function test()
    {
        return view('profiles.test');
    }

}
