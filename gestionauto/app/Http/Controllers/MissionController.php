<?php

namespace App\Http\Controllers;

use App\Mission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mission = DB::table('missions')->orderBy('created_at','DESC')->paginate(10);

        return view('admin\mission', compact('mission'));
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
        $data = request();

        // ->validate([
        //
        //     'name'=>['required'],
        //     'chauffeurs'=> ['required'],
        //     'montantdepart'=> ['required'],
        //     'missionlieu' => ['required'],
        //     'motif'=> ['required'],
        //     'date'=> ['date','required'],
        //     'lieudepart'=> ['required'],
        //     'lieuarrive'=> ['required'],
        //     'heurdepart'=> ['date','required'],
        //     'vehicule'=> ['required'],
        //     'carbuavantdepar'=> ['required'],
        //     'killoavantdepart'=> ['required'],
        //
        //
        // ]);
        $name = serialize($data['name']);
        $chauffeur = serialize($data['chauffeurs']);
        $vehicule = serialize($data['vehicule']);

        Mission::create([
            'name'=> $name,
            'chauffeurs'=> $chauffeur,
            'montantdepart'=>$data['montantdepart'],
            'missionlieu'=> $data['missionlieu'],
            'motif'=> $data['motif'],
            'date'=> $data['date'],
            'lieudepart'=> $data['lieudepart'],
            'lieuarrive'=>$data['lieuarrive'],
            'heurdepart'=> $data['heurdepart'],
            'vehicule'=>$vehicule,
            'carbuavantdepar'=>$data['carbuavantdepar'],
            'killoavantdepart'=>$data['killoavantdepart'],

        ]);
          return redirect()->route('mission.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

   $mission = Mission::where('id',$id)->first();
   $tables =unserialize($mission['name']);
   $chauffeurs =unserialize($mission['chauffeurs']);
   $vehicule =unserialize($mission['vehicule']);

   return view('admin\missionview',[

       'mission'=> $mission,
       'tables'=> $tables,
       'chauffeurs'=> $chauffeurs,
       'vehicule'=> $vehicule
   ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function edit(Mission $mission)
    {
      return view('admin\missionedit',compact('mission'));

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

      $data = request();

     // ->validate([
     //
     //     'name'=>['required'],
     //     'chauffeurs'=> ['required'],
     //     'montantdepart'=> ['required'],
     //     'missionlieu' => ['required'],
     //     'motif'=> ['required'],
     //     'date'=> ['date','required'],
     //     'lieudepart'=> ['required'],
     //     'lieuarrive'=> ['required'],
     //     'heurdepart'=> ['date','required'],
     //     'vehicule'=> ['required'],
     //     'carbuavantdepar'=> ['required'],
     //     'killoavantdepart'=> ['required'],
     //
     //
     // ]);
     $name = serialize($data['name']);
     $chauffeur = serialize($data['chauffeurs']);
     $vehicule = serialize($data['vehicule']);

     Mission::update([
         'name'=> $name,
         'chauffeurs'=> $chauffeur,
         'montantdepart'=>$data['montantdepart'],
         'missionlieu'=> $data['missionlieu'],
         'motif'=> $data['motif'],
         'date'=> $data['date'],
         'lieudepart'=> $data['lieudepart'],
         'lieuarrive'=>$data['lieuarrive'],
         'heurdepart'=> $data['heurdepart'],
         'vehicule'=>$vehicule,
         'carbuavantdepar'=>$data['carbuavantdepar'],
         'killoavantdepart'=>$data['killoavantdepart'],

    ]);
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mission $missions)
    {
        Mission::destroy($missions->id);

        redirect('/dashboard');
    }


    public function mencoure(){


        return view('admin\mencoure');

    }
}
