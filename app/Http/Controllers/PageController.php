<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

  public function getHome(){
    return redirect ('index');
  }

    public function getIndex(){
      return view ('index');
    }

    public function getUnos(){
      return view ('unos');
    }
}
