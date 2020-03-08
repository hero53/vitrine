<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('public.service.index');
    }
    public function agriculture()
    {
        //
        return view('public.service.Agriculture&Agro-industrie');
    }
    public function batiments()
    {
        //
        return view('public.service.Batiments');
    }




}
