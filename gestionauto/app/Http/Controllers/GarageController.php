<?php

namespace App\Http\Controllers;

use App\Garage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GarageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $garage = DB::table('garages')->orderBy('created_at','DESC')->paginate(10);

        
        return view('admin\garage', [

            'garage'=> $garage
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

            'name'=> ['required'],
            'localisation'=> ['required'],
            'nommaitre'=> ['required'],
            'contactmaitre'=> ['required'],
            'depuis'=> ['required'],
            'numero'=> ['required'],
            'email'=> ['required','email']
        ]);

        Garage::create([

            'name'=> $data['name'],
            'localisation'=> $data['localisation'],
            'nommaitre'=> $data['nommaitre'],
            'contactmaitre'=> $data['contactmaitre'],
            'depuis'=>$data['depuis'],
            'numero'=>$data['numero'],
            'email'=>$data['email'],

        ]);
        return redirect()->route('garage.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Garage  $garage
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $garages = Garage::where('id',$id)->first();

        return view('admin\garageview',[

            'garages'=> $garages
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Garage  $garage
     * @return \Illuminate\Http\Response
     */
    public function edit(Garage $garages)
    {
        return view('admin\garageedit',compact('garages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Garage  $garage
     * @return \Illuminate\Http\Response
     */
    public function update(Garage $garages)
    {
        $data = request()->validate([

            'name'=> ['required'],
            'localisation'=> ['required'],
            'nommaitre'=> ['required'],
            'contactmaitre'=> ['required'],
            'depuis'=> ['required'],
            'numero'=> ['required'],
            'email'=> ['required','email']
        ]);
        
        $garages->update($data);

        return redirect()->route('garage.index', ['garages'=> $garages]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Garage  $garage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Garage $garage)
    {
        //
    }
}
