<?php

namespace App\Http\Controllers;

use App\Livewire\Test;
use Illuminate\Http\Request;
use Livewire\Livewire;

class BaseController extends Controller
{
    public function __construct()
    {
        //
    }

    public function home()
    {
        // return view('home', [Test::class]);
        return view('home');
    }

    public function about_us()
    {
        return view('about-us');
    }

    public function contact_us()
    {
        return view('contact-us');
    }

    public function teachers()
    {
        return view('teachers');
    }

    public function verify_certificate()
    {
        return view('verify-certificate');
    }

    public function course()
    {
        return view('course');
    }

    public function courses()
    {
        return view('courses');
    }
}
