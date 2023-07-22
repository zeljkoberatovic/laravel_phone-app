<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


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
        return view('home');
    }
    public function addDeposit()
    {
        return view('home.addDeposit');
    }

    public function updateDeposit(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            "deposit"=>"required|max:4"
        ],
        [
            "deposit.max"=>"Can't add more then 9999 e at once"
        ]);
        $user->deposit = $user->deposit + $request->deposit;
        $user->save();

        return redirect(route('home'));
    }

    public function showAdForm()
    {
        return view('home.showAdForm');

    }
}
