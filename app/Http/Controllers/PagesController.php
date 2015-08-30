<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home() {
      $data = [];
      return view('pages.home', $data);
    }

    public function about() {
      return view('pages.about');
    }

    public function contact() {
      return view('pages.contact');
    }

}
