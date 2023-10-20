<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index(){
        $sales = Sales::with('client')->get();
        return inertia('Sales/index',[
            'sales' =>$sales
        ]);
    }

    public function create(){
        return inertia('Sales/create');
    }
}
