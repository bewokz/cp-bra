<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Properties;


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

    public function rolesauth()
    {
        $role = Auth::user()->role;

        if ($role == 'operator') {
            return view('controls.operator.accounts');
        }
        if ($role == 'admin') {
            $title = 'Detail Properties';
            $properties = Properties::all();
            return View('controls.admins.index-properties')
                ->with('title', $title)
                ->with(compact('properties'));
        }
    }

    public function accounts()
    {
        $title = 'Home';
        $properties = Properties::all();
        return View('index')
            ->with('title', $title)
            ->with(compact('properties'));
    }
}
