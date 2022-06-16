<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminHomeController extends Controller
{
    public function index(){
        return view('admin.home');
    }
}
