<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        return inertia('Product/index',[
            'products' => Product::orderBy('id')->get(),

        ]);
    }
}
