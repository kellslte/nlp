<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        //pull data from db
        

        //init data array
        $data = [
            'posts' => '',
            'featured' => '',
            'tags' => '',
            'popularPosts' => '',
        ];

        return view('pages.index')->withData($data);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
