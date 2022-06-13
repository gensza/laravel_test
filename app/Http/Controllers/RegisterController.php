<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        $data['password'] = bcrypt($data['password']);

        User::create($data);

        Session::flash('success', 'registrasi Berhasil!');
        return redirect('/');
    }
}
