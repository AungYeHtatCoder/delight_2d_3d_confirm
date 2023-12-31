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
    public function index() {
    if (auth()->user()->hasRole('Admin')) {
        return view('admin.dashboard');
    } else {
        $userId = auth()->id(); // Get logged in user's ID
        $playedMorningTwoDigits = User::getUserMorningTwoDigits($userId);
        $playedEveningTwoDigits = User::getUserEveningTwoDigits($userId);
        return view('user_profile', [
            'morningDigits' => $playedMorningTwoDigits,
            'eveningDigits' => $playedEveningTwoDigits,
        ]);
    }
}

}