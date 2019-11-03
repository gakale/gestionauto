<?php

namespace App\Http\Controllers;

use App\Carburant;
use Illuminate\Http\Request;

class CarburantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            return view('admin\carburant');
    }    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin\carburantcreate');
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


            'nomstation'=> ['required'],
            'designation'=> ['required'],
            'litrage'=> ['required'],
            'montant'=> ['required'],
            'quantite'=> ['required'],
            'date' => ['required','date'],
            'avantrecharge'=> ['required'],
            'apresrecharge'=> ['required'],
            'vehicule'=> ['required'],
            'paiement'=> ['required', 'image']

        ]);

        $paiement = request('paiement')->store('uploads','public');


        Carburant::create([
            'nomstation'=> $data['nomstation'],
            'description'=> $data['description'],
            'litrage'=> $data['litrage'],
            'montant'=> $data['montant'],
            'quantite'=> $data['quantite'],
            'date'=> $data['date'],
            'avantrecharge'=> $data['avantrecharge'],
            'apresrecharge'=> $data['apresrecharge'],
            'vehicule'=> $data['vehicule'],
            'paiement'=> $paiement,
        ]);




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carburant  $carburant
     * @return \Illuminate\Http\Response
     */
    public function show(Carburant $carburant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carburant  $carburant
     * @return \Illuminate\Http\Response
     */
    public function edit(Carburant $carburant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carburant  $carburant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carburant $carburant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carburant  $carburant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carburant $carburant)
    {
        //
    }
}
