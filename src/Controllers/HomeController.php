<?php

namespace Project\Planet\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 *
 */

class HomeController extends Controller
{
  public function index(Request $request){
    return view('project.planet.index');
  }
}
