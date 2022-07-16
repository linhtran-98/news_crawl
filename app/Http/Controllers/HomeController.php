<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        // lấy thông tin của user hiện tại
        $user = Auth::user();
        // dd($user);

        // lấy id của user hiện tại
        $id = Auth::id();
        // return view('admin/home');
        return view('home');
    }
}
