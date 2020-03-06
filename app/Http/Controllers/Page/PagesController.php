<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function index(){
        return view('public.pages.index');
    }
    public function about(){
        return view('public.pages.about');
    }
}
