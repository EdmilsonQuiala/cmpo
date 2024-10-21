<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function porductDetails() {
        return \view('frontend.product.product-details');
    }
    public function allProducts() {
        return \view('frontend.product.all-products');
    }
    public function checkout(){
        return \view('frontend.product.checkout');
    }
}
