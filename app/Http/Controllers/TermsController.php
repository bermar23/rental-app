<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsController extends Controller
{
    /**
     * Show the application terms and conditions
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('terms.index');
    }
}
