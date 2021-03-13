<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    
    public function index()
    {
        return view('site.category.index');
    }

    
    public function show($slug)
    {
        //return view('greetings', ['name' => 'Victoria'])
        return view('site.category.show', ['slug' => $slug]);
        // return $slug;
    }

    
}
