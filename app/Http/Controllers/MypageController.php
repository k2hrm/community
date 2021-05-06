<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class MypageController extends Controller
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
        if (Auth::check()) {
            $user = Auth::user();
            return view('mypage', compact('user'));
        }
    }

    public function getUser($id)
    {
        $profile = new User();
        $profile = Auth::user()->find($id);
        return view('mypage', ['profile' => $profile, 'id' => $id]);
    }
}
