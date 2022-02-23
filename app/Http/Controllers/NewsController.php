<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($params = null){
        if ($params != null){
            return redirect("https://www.educastudio.com/news/" . $params);
        } else {
            return redirect("https://www.educastudio.com/news");
        } 
    }
}
