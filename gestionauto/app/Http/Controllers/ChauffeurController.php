<?php

namespace App\Http\Controllers;

use App\Chauffeur;
use Illuminate\Http\Request;

class ChauffeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin\chauffeur");
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

            'name' => ['required','min:3'],
            'prenom' => ['required','min:3'],
            'fonction' => ['required'],
            'adresse' => ['required'],
            'telephone'=> ['required'],
            'email'=> ['email','required'],
            'cni'=> ['required','image'],
            'permis' => ['required'],
            'typepermis'=> ['required'],
            'date'=> ['date'],



        ]);


        $cniPath = request('cni')->store('uploads','public');

        Chauffeur::create([
        'name'=> $data['name'],
        'prenom'=> $data['prenom'],
        'fonction'=> $data['fonction'],
        'adresse'=> $data['adresse'],
        'telephone'=> $data['telephone'],
        'email'=>$data['email'],
        'cni'=> $cniPath,
        'permis'=>$data['permis'],
        'typepermis'=>$data['typepermis'],
        'date'=>$data['data'],


        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chauffeur  $chauffeur
     * @return \Illuminate\Http\Response
     */
    public function show(Chauffeur $chauffeur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chauffeur  $chauffeur
     * @return \Illuminate\Http\Response
     */
    public function edit(Chauffeur $chauffeur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chauffeur  $chauffeur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chauffeur $chauffeur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chauffeur  $chauffeur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chauffeur $chauffeur)
    {
        //
    }
}
