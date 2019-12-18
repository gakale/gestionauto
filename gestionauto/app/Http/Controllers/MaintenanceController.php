<?php

namespace App\Http\Controllers;

use App\Maintenance;
use Illuminate\Support\Facades\DB;
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
        $maintenance = DB::table('maintenances')->orderBy('created_at','DESC')->paginate(10);

        
        return view('admin\maintenance', [

            'maintenance'=> $maintenance
        ]);

        
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
     $table = request( ['action']);


         $data = request()->validate([
        
            'imatriculation' => ['required'],
            'prixaction' => ['required'],
            'action' => ['required'],
            'garage'=> ['required'],
            'panne_chauffeur' => ['required'],
            'date' => ['required','date'],

         ]);




        Maintenance::create([

            'imatriculation'=> $data['imatriculation'],
            'prixaction' => $data['prixaction'],
            'action'=> $data['action'],
            'garage'=>$data['garage'],
            'panne_chauffeur'=> $data['panne_chauffeur'],
            'date'=> ['date'],
        ]);

        return redirect()->route('maintenance.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $maintenances = Maintenance::where('id',$id)->first();

        return view('admin\maintenanceview',[

            'maintenances'=> $maintenances
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function edit(Maintenance $maintenances)
    {
        return view('admin\maintenanceedit',compact('maintenances'));
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
