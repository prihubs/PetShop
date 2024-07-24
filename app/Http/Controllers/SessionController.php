<?php

namespace App\Http\Controllers;
use App\Models\ShopData;
use App\Models\User;
use App\Models\AccessKey;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create(){
        $data = ShopData::all();
        return view('auth.setAccount', [
            'title' => 'Create Account',
            'Data' =>  $data
        ]);
    }

    public function store(){

        $results = request()->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(6), 'confirmed'],
            'accesskey' => ['required'],
        ]);

        $key = $results['accesskey'];

        // dd($key);

        $mkey = AccessKey::findd($key);
        if(!$mkey){
            throw ValidationException::withMessages([
               'accesskey' => 'Error: could not validate your key '.$key.' Contact Site Admin'
            ]);
        }

        $user = User::create($results);
        Auth::login($user);

        return redirect('profile');
    
    }

    public function destroy(){
        Auth::logout();
        return redirect('/');
    }


}
