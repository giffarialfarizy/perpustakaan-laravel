<?php

namespace App\Http\Controllers;

class PublicController extends Controller
{
  public function viewHome()
  {
      return view('index');
  }
}
