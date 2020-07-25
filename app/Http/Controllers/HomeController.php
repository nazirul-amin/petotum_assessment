<?php

namespace App\Http\Controllers;

use App\Phrase;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /* public function __construct()
    {
        $this->middleware('auth');
    } */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $data['phrases'] = Phrase::get();
        return view('main', $data);
    }
    
    public function changeStyle(request $request)
    {
        Phrase::updateOrCreate(
            ['id'=>$request->id],
            ['style'=>$request->data]
        );
    }

    public function changeColor(request $request)
    {
        Phrase::updateOrCreate(
            ['id'=>$request->id],
            ['color'=>$request->data]
        );
    }
}
