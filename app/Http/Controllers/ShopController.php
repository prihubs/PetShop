<?php

namespace App\Http\Controllers;
use App\Models\ShopData;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ShopController extends Controller
{
    public function dataShops(){
        $data = ShopData::all();
        return $data;
    }
    public function home() {
        return view('home', [
            'title' => 'Home',
            'Data' => $this->dataShops()
        ]);
    }

    public function about(){
        return view('about', [
            'title' => 'About',
            'Data' => $this->dataShops()
        ]);
    }

    public function services() {
        return view('services', [
            'title' => 'Services',
            'Data' => $this->dataShops()
        ]);
    }

    public function product() {
        return view('product', [
            'title' => 'Product',
            'Data' => $this->dataShops()
        ]);
    }

    public function team() {
        return view('team', [
            'title' => 'Team',
            'Data' => $this->dataShops()
        ]);
    }

    public function blog() {
        return view('blog', [
            'title' => 'Blog',
            'Data' => $this->dataShops()
        ]);
    }

    public function blog_details() {
        return view('blog-details', [
            'title' => 'Details',
            'Data' => $this->dataShops()
        ]);
    }

    public function contact() {
        return view('contact', [
            'title' => 'Contact',
            'Data' => $this->dataShops()
        ]);
    }

    public function profile() {
        return view('profile', [
            'title' => 'Profile',
            'Data' => $this->dataShops()
        ]);
    }

    public function create () {
        return view('eprofile', [
            'title' => 'Edit Public Profile',
            'Data' => $this->dataShops()
        ]);
    }

    public function store (Request $request) {

        //validate
        $res = $request->validate([
            'sn' => ['required'],
            'site_phone' => ['required'],
            'site_phone2' => ['required'],
            'site_email' => ['required', 'email'],
            'site_description' => ['required'],
            'site_address' => ['required'],
            'id' => ['required', 'numeric']
        ]);

        //Get File
        $logo = $request['site_logo'];

        if($logo !== null){

            $file = $request['site_logo'];

            //Get File Ext & Size
            $setSize = '2048';
            $setExt = ['png','jpg'];
            $setMime = ['image/png','image/jpg'];
            $mime = $file->getMimeType();
            $ext = explode('/', strtolower($mime));

            $file_ext = end($ext);
            $file_size = $file->getSize()/'1024';


            if($file_size > $setSize){
                throw ValidationException::withMessages([
                    'email' => 'Uploaded a logo less than 2MB'
                ]);
            }

            if(!in_array($file_ext, $setExt)){
                throw ValidationException::withMessages([
                    'email' => 'image type not supported, Upload png or jpg'
                ]);
            }
            if(!in_array($mime, $setMime)){
                throw ValidationException::withMessages([
                    'email' => 'Unsupported Format, Upload image'
                ]);
            }


        }

        // dd($file_size, $file_ext);

        // find ID
        $data = ShopData::findOrFail($res['id']);

        //verify
        if(!$data){
            throw ValidationException::withMessages([
                'email' => 'Profile Doesnt exist in'
            ]);
        }

        if($logo !== null){
            //set logo name
            $fnn = 'img/'.$res['sn'].time().random_int(100, 1000).'.'.$file_ext;

            //move file to storage
            $file->move(resource_path('/img'), $fnn);
            $res['site_logo'] = $fnn;
        }

        // dd($res);

        //update database
        $data->update($res);
        // dd($data, $res['id']);

        return redirect('/profile');
    }
};
