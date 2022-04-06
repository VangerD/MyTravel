<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nik' => 'required|max:16|min:9|unique:users',
            'nama_lengkap' => 'required|max:255|unique:users',
            'password' => 'required|max:9'
        ]);
        $validateData ['password'] = Hash::make($validateData['password']);
        User::create($validateData);
        // $request->session()->flash('success', 'Registrasi berhasil, Silahkan Login');
        return redirect('/')->width('success', 'Registrasi berhasil, Silahkan Login');
    }
}