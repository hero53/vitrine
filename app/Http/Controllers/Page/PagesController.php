<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Model\Article;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function index(){
        $articles=Article::paginate(3);

        return view('public.index',compact('articles'));
    }
    public function about(){
        return view('public.pages.about');
    }
    public function team(){
        return view('public.team.index');
    }
    public function team1(){
        return view('public.team.member1');
    }
    public function team2(){
        return view('public.team.member2');
    }
    public function team3(){
        return view('public.team.member3');
    }
    public function team4(){
        return view('public.team.member4');
    }
}
