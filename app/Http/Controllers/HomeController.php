<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Client;
use App\Models\Expertise;
use App\Models\ExpertiseAttribute;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        
        $blog = Blog::latest('created_at')->take(3)->get();
       
        return view('welcome', compact('blog'));
    }


  
}
