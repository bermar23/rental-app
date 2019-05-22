<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    /**
     * Show the application privacy policy
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('privacy.index');
    }
}
