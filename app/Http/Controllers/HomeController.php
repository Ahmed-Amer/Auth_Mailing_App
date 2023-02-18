<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //add middleware verified to enable email verification
        $this->middleware(['auth' , 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    
    /**
     * Show the admin only dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function private()
    {
        if(Gate::allows('admin-only' , auth()->user())){
            return view('private');
        }else{
            return abort(403);
        }
    }
}
