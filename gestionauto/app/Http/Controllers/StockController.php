<?php

namespace App\Http\Controllers;

use App\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin\stock');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([

            'nameprod' => ['required'],
            'designation' => ['required'],
            'stock' => ['required'],
            'prix' => ['required'],
            'date' => ['required','date'],
            'quantentre' => ['required'],
            'quantsortie' => ['required'],
            'stockfinal' => ['required'],
            'recupaiement' => ['required']

        ]);

        $recupaiement = request('recupaiement')->store('uploads','public');

        Stock::create([

            'nameprod'=> $data['nameprod'],

            'designation'=> $data['designation'],

            'stock'=> $data['stock'],
            'prix' => $data['prix'],
            'date'=> $data['date'],
            'quantentre'=> $data['quantentre'],
            'quantsortie'=> $data['quantsortie'],
            'stockfinal'=> $data['stockfinal'],
            'recupaiement'=> $recupaiement, 

        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock $stock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock $stock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock)
    {
        //
    }
}
