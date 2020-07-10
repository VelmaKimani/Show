<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct(){

        return $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
        
    }

    public function store(){
            $data = request()->validate([
                'title' => 'required',
                'description' => 'required',
                'price' => 'required',
                'image' => ['required', 'image'],
            ]);

            $imagePath = request('image')->store('uploads', 'public');

            auth()->user()->posts()->create([
                'title' => 'title',
                'description' => 'description',
                'price' =>'price',
                'image' => 'imagePath',
            ]);
            
            return redirect('/profile/' . auth()->user()->id);
    }

    public function show() {
        return view('posts.show');

    }
}
