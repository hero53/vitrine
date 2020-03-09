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
        return view('public.service.Agriculture');
    }
    public function batiment()
    {
        //
        return view('public.service.Batiment');
    }
    public function commerce()
    {
        //
        return view('public.service.Commerce');
    }
    public function eau()
    {
        //
        return view('public.service.Eau');
    }
    public function exploitation()
    {
        //
        return view('public.service.Expoitation');
    }
    public function forage()
    {
        //
        return view('public.service.Forage');
    }
    public function formation()
    {
        //
        return view('public.service.Formation');
    }
    public function ingenierie()
    {
        //
        return view('public.service.Ingierie');
    }
    public function mine()
    {
        //
        return view('public.service.Mine');
    }




}
