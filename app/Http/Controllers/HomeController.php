<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
    public function index()
    {
        $auth = auth()->user();

        if($auth->hasRole('admin')){
        // $user = User::count();
        return view('admin.index') ;
        } else{
        // $data = Produk::all();
        // $data1 = Stok::all();
        return view('user.index');
        }
    }
}
