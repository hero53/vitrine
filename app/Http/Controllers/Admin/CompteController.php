<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompteController extends Controller
{
    //
    public function connexion(){
        return view('admin.compte.connexion');
    }
}
