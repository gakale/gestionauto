<?php

namespace App\Http\Controllers;

use App\Vehicule;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin\vehicule');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin\vehiculecreate');
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

            'imatriculation'=> ['required','min:3'],
            'kilometrage'=> ['required'],
            'date'=> ['required','date'],
            'puissance'=> ['required'],
            'poids'=> ['required'],
            'nbreplace'=> ['required'],
            'capacite'=> ['required'],
            'etat'=> ['required'],
            'transmission'=> ['required'],
            'marque'=> ['required'],
            'modele' => ['required'],
            'categorie'=> ['required'],
            'carburant'=> ['required'],
            'utilisation'=> ['required'],
            'carosserie' => ['required']



        ]);

        Vehicule::create([

            'imatriculation'=> $data['imatriculation'],
            'kilometrage'=> $data['kilometrage'],
            'date'=> $data['date'],
            'puisance'=> $data['puisance'],
            'poids'=> $data['poids'],
            'nbreplace'=> $data['nbreplace'],
            'capacite'=> $data['capacite'],
            'etat'=> $data['etat'],
            'transmission'=> $data['transmission'],
            'marque'=> $data['marque'],
            'modele'=> $data['modele'],
            'categorie'=> $data['categorie'],
            'carburant'=> $data['carburant'],
            'utilisation'=> $data['utilisation'],
            'carosserie'=> $data['carosserie']
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vehicule  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicule $vehicule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vehicule  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicule $vehicule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vehicule  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicule $vehicule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vehicule  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicule $vehicule)
    {
        //
    }
}
