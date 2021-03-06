<?php

namespace App\Http\Controllers;

use App\Fournisseur;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $fournisseur = DB::table('fournisseurs')->orderBy('created_at','DESC')->paginate(10);

        return view('admin\fournisseur', [

            'fournisseur'=> $fournisseur
        ]);
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

            'name'=> ['required','min:3'],
            'localisation'=> ['required'],
            'telephone'=> ['required'],
            'email'=> ['required','min:3'],
            'cni'=> ['required'],
            'date'=> ['required']
        ]);

        Fournisseur::create([

            'name'=> $data['name'],
            'localisation'=> $data['localisation'],
            'telephone'=> $data['telephone'],
            'email'=> $data['email'],
            'cni'=> $data['cni'],
            'date'=>$data['date']

        ]); 


      
        


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fournisseur  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function show(Fournisseur $fournisseur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fournisseur  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function edit(Fournisseur $fournisseur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fournisseur  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fournisseur $fournisseur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fournisseur  $fournisseur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fournisseur $fournisseur)
    {
        //
    }
}
