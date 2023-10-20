<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return inertia('Product/index',[
            'products' => Product::orderBy('id')->get(),
        ]);
    }

    public function create(){
        return inertia('Product/create' ,[

        ]);
    }

    public function edit(Product $product){
        return inertia('Product/edit',[

        ]);
    }
    public function destroy(Product $product){
        $product->delete();
        return redirect('/products')->with('message','Product successfully deleted');
    }
}
