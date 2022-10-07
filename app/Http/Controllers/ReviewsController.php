<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewsController   extends Controller
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
        return 'listado reviews';
        // return view('');
    }
}
