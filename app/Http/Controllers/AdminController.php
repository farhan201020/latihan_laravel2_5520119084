<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;

class AdminController extends Controller
{
    $this->middleware('auth');
}

public  function index(){
	$user = Auth::user();
	return view('home', compact('user'));
}
