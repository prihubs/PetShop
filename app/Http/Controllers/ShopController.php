<?php

namespace App\Http\Controllers;
use App\Models\ShopData;

use Illuminate\Http\Request;

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
    
    public function eprofile () {
        return view('eprofile', [
            'title' => 'Edit Public Profile',
            'Data' => $this->dataShops()
        ]);
    }
};
