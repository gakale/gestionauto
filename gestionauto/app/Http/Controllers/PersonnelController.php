<?php

namespace App\Http\Controllers;

use App\Personnel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $personnel = DB::table('personnels')->orderBy('created_at','DESC')->paginate(10);

        
        return view('admin\personnel', [

            'personnel'=> $personnel
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
            'prenom'=> ['required'],
            'email'=> ['required','email'],
            'fonction'=> ['required'],
            'telephone'=> ['required']
        ]);

        Personnel::create([

            'name'=> $data['name'],
            'prenom'=> $data['prenom'],
            'email'=> $data['email'],
            'fonction'=> $data['fonction'],
            'telephone'=>$data['telephone']

        ]);

        //session()->flash('message','Enregistré avec Succès !');
        return redirect()->route('personnel.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $personnels = Personnel::where('id',$id)->first();

        return view('admin\personnelview',[

            'personnels'=> $personnels
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function edit(Personnel $personnels)
    {
      
        return view('admin\personneledit',compact('personnels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function update(Personnel $personnels)
    {
        $data = request()->validate([

            'name'=> ['required'],
            'prenom'=> ['required'],
            'email'=> ['required','email'],
            'fonction'=> ['required'],
            'telephone'=> ['required'],
        ]);
        
        $personnels->update($data);

        return redirect()->route('personnel.index', ['personnels'=> $personnels]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personnel $personnel)
    {
        //
    }
}
