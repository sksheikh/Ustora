<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
        return view('front.home.home',[
            'products'=>Product::where('status',1)->get(),
        ]);
    }

    public function productDetails($id){
        return view('front.product.details',[
            'product'=>Product::find($id),
            'products'=>Product::where('status',1)->get(),
        ]);
    }
}
