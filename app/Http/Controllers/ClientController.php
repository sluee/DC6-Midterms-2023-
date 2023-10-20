<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        return inertia('Client/index',[
            'clients' => Client::orderBy('id')->get(),
        ]);
    }


    public function create(){
        return inertia('Client/create');
    }

    public function store(Request $request){
        $fields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'credit_limit' => 'required'
        ]);

        Client::create($fields);

        return redirect('/clients')->with('message' ,'Client successfully added');
    }

    public function edit(Client $client){
        return inertia('Client/edit', [
            'client' => $client
        ]);
    }

    public function show(Client $client)
    {
        $client->load('sales');
        // Calculate the total amount for each sale
        $client->sales->each(function ($sale) {
            $totalAmount = $sale->soldItems->sum('amount');
            $sale->total = number_format($totalAmount, 2);
        });

        return inertia('Client/show', [
            'client' => $client,
        ]);
    }

    public function destroy(Client $client){
        $client->delete();

        return redirect('/clients')->with('message', 'Client Successfully deleted');
    }

}
