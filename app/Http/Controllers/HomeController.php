<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front.index');
    }

    public function whoWeAre()
    {
        return view('front.who-we-are');
    }

    public function contactUs ()
    {
        return view('front.contact-us');
    }

    
    public function newsUpdates()
    {
        $Blogs = \App\Models\Blog::orderBy('created_at', 'desc')->paginate(6);
        return view('front.newsUpdates', compact('Blogs'));
    }

    public function newsUpdate($slung)
    {
        $Blog = \App\Models\Blog::where('slung', $slung)->first();
        return view('front.newsUpdate', compact('Blog'));
    }

     public function service($slung)
    {
        $Service = \App\Models\Service::where('slung', $slung)->first();
        return view('front.service', compact('Service'));
    }
    
    // portfolio
    public function portfolio()
    {
        $Projects = \App\Models\Project::orderBy('created_at', 'desc')->paginate(6);
        return view('front.portfolio', compact('Projects'));
    }
}
