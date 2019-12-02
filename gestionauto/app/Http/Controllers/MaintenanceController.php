<?php

namespace App\Http\Controllers;

use App\Maintenance;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin\maintenance');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin\maintenancecreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    // $table = request( ['action']);
    

        $data = request()->validate([

            'imatriculation' => ['required'],
            'prixaction' => ['required'],
            'garage'=> ['required'],
            'panne_chauffeur' => ['required'],
            'date' => ['required'],
            // 'recupanne'=> ['required',  'image']

        ]);



        // $cniPath = request('recupanne')->store('uploads','public');




        Maintenance::create([
            'imatriculation'=> $data['imatriculation'],

            // 'action' => $data['action'],

            'prixaction'=> $data['prixaction'],
            // 'recupanne'=>$cniPath,

            'garage'=>$data['garage'],
            'panne_chauffeur'=> $data['panne_chauffeur'],
            'date'=> ['date'],
        ]);



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function show(Maintenance $maintenance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function edit(Maintenance $maintenance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Maintenance $maintenance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maintenance $maintenance)
    {
        //
    }
}
