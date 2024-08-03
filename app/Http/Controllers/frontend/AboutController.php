<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    public function aboutUs(){
        return view('frontend.about');
    }
    public function aboutUsDetails(){
        return view('aboutDetails');
    }
    public function testimonial(){
        return view('frontend.testimonial');
    }
    public function notFound(){
        return view('frontend.notFound');
    }
}
