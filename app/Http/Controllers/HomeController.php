<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $data['metaTitle'] = 'Welcome';
        return view('index', $data);
    }
}
