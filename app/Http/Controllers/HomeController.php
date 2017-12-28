<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function user($id)
    {
      $user = User::findOrFail($id);
      return view('user', compact('user'));
    }

    public function edit($id)
    {
      $user = User::findOrFail($id);
      $user->telepon = $user->telepon;
      return view('user-edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
      $user = User::findOrFail($id);
      $user->update($request->all());

      $telepon = $user->telepon;
      $telepon->no_telepon = $request->input('no_telepon');
      $user->telepon()->save($telepon);

      return redirect('user/'.$user->id.'');
    }
}
