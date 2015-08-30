<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index() {
      return view('pages.contact');
    }
    public function submit(Request $request) {
      $data = [
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'message' => $request->input('message')
      ];
      return view('pages.contact_submitted', $data);
    }
}
