<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
    return redirect ("https://www.educastudio.com/about-us");
}
}