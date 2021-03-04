<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Picture;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome(){
        $new_products = Product::latest()->limit(3)->get();
        return view('welcome', compact('new_products'));
    }

    public function gurmano_products(){
        $gurmano_products = Product::where('producer','Gurmano')->get();
        return view('gurmano_products', compact('gurmano_products'));
    }

    public function gurmano_sour(){
        $gurmano_products = Product::where('producer','Gurmano')->where('group','sour')->get();
        return view('gurmano_products', compact('gurmano_products'));
    }

    public function gurmano_roasted(){
        $gurmano_products = Product::where('producer','Gurmano')->where('group','roasted')->get();
        return view('gurmano_products', compact('gurmano_products'));
    }

    public function gurmano_cheese(){
        $gurmano_products = Product::where('producer','Gurmano')->where('group','cheese')->get();
        return view('gurmano_products', compact('gurmano_products'));
    }

}
