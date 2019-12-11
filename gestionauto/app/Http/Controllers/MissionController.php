<?php

namespace App\Http\Controllers;

use App\Mission;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin\mission');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin\missioncreate');
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

            'name'=>['required'],
            'chauffeurs'=> ['required'],
            'montantdepart'=> ['required'],
            'montanttotal'=> ['required'],
            'missionlieu' => ['required'],
            'motif'=> ['required'],
            'date'=> ['date','required'],
            'lieuarrive'=> ['required'],
            'heurdepart'=> ['required'],
            'vehicule'=> ['required'],
            'carbuavantdepar'=> ['required'],
            'killoavantdepart'=> ['required'],


        ]);
        $name = serialize($data['name']);
        $chauffeur = serialize($data['chauffeur']);
        $vehicule = serialize($data['vehicule'])

        Mission::create([
            'name'=> $name,
            'chauffeurs'=> $chauffeur,
            'montantdepart'=>$data['montantdepart'],
            'montanttotal'=>$data['montanttotal'],
            'missionlieu'=> $data['missionlieu'],
            'motif'=> $data['motif'],
            'date'=> $data['date'],
            'lieuarrive'=>$data['lieuarrive'],
            'heurdepart'=> $data['heurdepart'],
            'vehicule'=>$vehicule,
            'carbuapresdepar'=>$data['carbuapresdepar'],
            'killoapresdepart'=>$data['killoapresdepart'],

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function show(Mission $mission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function edit(Mission $mission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mission $mission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mission $mission)
    {
        //
    }


    public function mencoure(){


        return view('admin\mencoure');

    }
}
