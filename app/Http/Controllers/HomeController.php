<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function viewPerfil(){
      $user = Auth::user();
    //  $publications = $user->publications;
      return view('perfil', compact('user'));
    }


    public function viewFaq()
    {
      return view('faq');
    }

// agregue viernes 22 jul
    public function viewFriends(){
      $user = Auth::user();
      $friends = $user->friends;
      return view('friends', compact('friends'));
    }
}
