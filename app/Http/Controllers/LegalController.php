<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalController   extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'Info nosotros';
        // return view('');
    }
}
