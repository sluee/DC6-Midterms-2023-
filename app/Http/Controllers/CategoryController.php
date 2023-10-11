<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        return inertia('Category/index',[
            'categories' => Category::orderBy('id')->get(),

        ]);
    }

    public function create(){

    }
}
