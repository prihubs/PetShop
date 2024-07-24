<?php

namespace App\Http\Controllers;

use App\Models\ShopData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class uLogController extends Controller
{
    public function create(){
        $data = ShopData::all();
        return view('auth.getAccount', [
            'title' => 'Login',
            'Data' => $data
        ]);
    }

    public function store(){
        $results = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(!Auth::attempt($results)){
            throw ValidationException::withMessages([
                'email' => 'Incorrect Credentials, Contact site admin'
            ]);
        }

        request()->session()->regenerate(); 
        return redirect('/');

    }
}
