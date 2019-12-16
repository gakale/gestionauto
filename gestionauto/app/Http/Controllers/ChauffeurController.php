<?php

namespace App\Http\Controllers;

use App\Chauffeur;
use Illuminate\Support\Facades\DB;
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

        $chauffeur = DB::table('chauffeurs')->orderBy('created_at','DESC')->paginate(10);


        return view('admin\chauffeur',compact('chauffeur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin\chauffeurcreate');
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

            'name' => ['min:3'],
            'prenom' => ['min:3'],
            'fonction' => ['required'],
            'adresse' => ['required'],
            'telephone'=> ['required'],
            'email'=> ['email','required'],
            'cni'=> ['required'],
            'typepermis'=> ['required'],
            'date'=> ['date'],
        ]);

        
        $table = serialize($data['typepermis']);

        Chauffeur::create([
        'name'=> $data['name'],
        'prenom'=> $data['prenom'],
        'fonction'=> $data['fonction'],
        'adresse'=> $data['adresse'],
        'telephone'=> ['required'],
        'email'=>$data['email'],
        'cni'=> $data['cni'],
        'typepermis'=>$table,
        'date'=>$data['date'],


        ]);

        return redirect()->route('chauffeur.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chauffeur  $chauffeur
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chauffeurs = Chauffeur::where('id',$id)->first();
        $tables =unserialize($chauffeurs['typepermis']);
        return view('admin\chauffeurview',[
            'tables'=> $tables,
            'chauffeurs'=> $chauffeurs
        ]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chauffeur  $chauffeur
     * @return \Illuminate\Http\Response
     */
    public function edit(Chauffeur $chauffeurs)
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
    public function update(Request $request, Chauffeur $chauffeurs)
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
