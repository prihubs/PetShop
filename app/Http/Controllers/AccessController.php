<?php

namespace App\Http\Controllers;

use App\Models\AccessKey;
use Illuminate\Http\Request;
use App\Models\ShopData;
use Illuminate\Validation\ValidationException;

class AccessController extends Controller
{
    public function accControl(){
        return view('key.accesskey',[
            'title' => 'My Access Keys',
            'Data' => ShopData::all(),
            'Gatee' => AccessKey::all(),
        ]);
    }

    public function destroyKey($id){
        if(!$res = AccessKey::find($id)){
            return abort(404);
        }
        $res->delete();

        return redirect('/mykey');
    }

    public function generate(){
        if(!$res = AccessKey::factory(10)->create()){
            return redirect('/mykey');
        }
        return redirect('/mykey');
    }
}
