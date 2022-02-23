<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function cat1(){
        return redirect("https://www.educastudio.com/category/marbel-edu-games");
    }
    public function cat2(){
        return redirect("https://www.educastudio.com/category/marbel-and-friends-kids-games");
    }
    public function cat3(){
        return redirect("https://www.educastudio.com/category/riri-story-books");
    }
    public function cat4(){
        return redirect("https://www.educastudio.com/category/kolak-kids-songs");
    }
}
