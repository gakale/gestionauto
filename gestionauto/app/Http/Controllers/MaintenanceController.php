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



         $data = request()->validate([

            'imatriculation' => ['required'],
            'prixaction' => ['required'],
            'action' => ['required'],
            'garage'=> ['required'],
            'panne_chauffeur' => ['required'],
            'date' => ['required','date'],

         ]);

         $table = serialize($data['action']);

        Maintenance::create([

            'imatriculation'=> $data['imatriculation'],
            'prixaction'=>$data['prixaction'],
            'action'=>$table,
            'garage'=>$data['garage'],
            'panne_chauffeur'=>$data['panne_chauffeur'],
            'date'=>$data['date']


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
        $table = $maintenances['action'];
        return view('admin\maintenanceview',[

            'maintenances'=> $maintenances,
            'table'=> $table
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function edit(Maintenance $maintenance)
    {

        $table = $maintenance['action'];

        return view('admin\maintenanceedit',compact('maintenance','table'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function update(Maintenance $maintenances)
    {
        $data = request()->validate([
            'imatriculation' => ['required'],
            'prixaction' => ['required'],
            'action' => ['required'],
            'garage'=> ['required'],
            'panne_chauffeur' => ['required'],
            'date' => ['required','date'],

        ]);
        $table = serialize($data['action']);


        $maintenances->update($data);

        return redirect()->route('maintenance.index', ['maintenances'=> $maintenances]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Maintenance  $maintenance
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $maintenances = Maintenance::where('id',$id)->first();
        $maintenances -> delete();
        return redirect()->route('maintenance.index');
    }
}
