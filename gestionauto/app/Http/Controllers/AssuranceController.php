<?php

namespace App\Http\Controllers;

use App\Assurance;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AssuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assurance = DB::table('assurances')->orderBy('created_at','DESC')->paginate(10);

        
        return view('admin\assurance', [

            'assurance'=> $assurance
        ]);
        return view('admin\assurance');
        
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

            'date'=> ['required'],
            'expiration'=> ['required'],
            'rappele'=> ['required'],
            'maison'=> ['required'],
            'assur_voit'=> ['required']
        ]);

        Assurance::create([

            'date'=> $data['date'],
            'expiration'=> $data['expiration'],
            'rappele'=> $data['rappele'],
            'maison'=> $data['maison'],
            'assur_voit'=>$data['assur_voit']

        ]);
        return redirect()->route('assurance.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Assurance  $assurance
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $assurances = Assurance::where('id',$id)->first();

        return view('admin\assuranceview',[

            'assurances'=> $assurances
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Assurance  $assurance
     * @return \Illuminate\Http\Response
     */
    public function edit(Assurance $assurances)
    {
        return view('admin\assuranceedit',compact('assurances'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Assurance  $assurance
     * @return \Illuminate\Http\Response
     */
    public function update(Assurance $assurances)
    {
        $data = request()->validate([

            'date'=> ['required'],
            'expiration'=> ['required'],
            'rappele'=> ['required'],
            'maison'=> ['required'],
            'assur_voit'=> ['required']
        ]);
        
        $assurances->update($data);

        return redirect()->route('assurance.index', ['assurances'=> $assurances]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Assurance  $assurance
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $assurances = Assurance::where('id',$id)->first();
        $assurances -> delete();
        return redirect()->route('assurance.index');
    }
}
