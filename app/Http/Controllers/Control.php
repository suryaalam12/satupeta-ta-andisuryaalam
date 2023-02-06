<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class Control extends Controller
{
    public function index()
    {
        return view ('post', [
            "title" => "Posting",
            "post" => post::all()
        ]);
    }

    public function show($slug)
    {
        
        return view('posts', [
        "title" => "Artikel",
        "post" => post::find($slug)
    ]);
    }
}

