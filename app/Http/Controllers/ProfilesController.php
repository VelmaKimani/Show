<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProfilesController extends Controller
{

    public function __construct(){

        return $this->middleware('auth');
    }

    public function index($user)
    {
        $user = \App\User::findOrFail($user);

        if($user->profile == null)
        {
            return view('home');
        }

        // $profile = DB::select("SELECT profiles.*, users.name, users.email as user_email FROM profiles, users WHERE 
        // profiles.user_id = users.id AND profiles.user_id=:user",["user" => $user->id]);

        
        return view('profiles.index', [
            'user' => $user,
            // 'profile' => $profile,
        ]);
    }
}
