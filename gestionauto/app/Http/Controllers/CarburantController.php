<?php

namespace App\Http\Controllers;

use App\Carburant;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CarburantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carburant = DB::table('carburants')->orderBy('created_at','DESC')->paginate(10);

        
        return view('admin\carburant', [

            'carburant'=> $carburant
        ]);
    }    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin\carburantcreate');
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


            'nomstation'=> ['required'],
            'designation'=> ['required'],
            'litrage'=> ['required'],
            'montant'=> ['required'],
            'quantite'=> ['required'],
            'date' => ['required','date'],
            'avantrecharge'=> ['required'],
            'apresrecharge'=> ['required'],
            'vehicule'=> ['required'],
            'paiement'=> ['required', 'image']

        ]);

        $paiement = request('paiement')->store('uploads','public');


        Carburant::create([
            'nomstation'=> $data['nomstation'],
            'designation'=> $data['designation'],
            'litrage'=> $data['litrage'],
            'montant'=> $data['montant'],
            'quantite'=> $data['quantite'],
            'date'=> $data['date'],
            'avantrecharge'=> $data['avantrecharge'],
            'apresrecharge'=> $data['apresrecharge'],
            'vehicule'=> $data['vehicule'],
            'paiement'=> $paiement,
        ]);


        return redirect()->route('carburant.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carburant  $carburant
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carburants = Carburant::where('id',$id)->first();

        return view('admin\carburantview',[

            'carburants'=> $carburants
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carburant  $carburant
     * @return \Illuminate\Http\Response
     */
    public function edit(Carburant $carburants)
    {
        return view('admin\carburantedit',compact('carburants'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carburant  $carburant
     * @return \Illuminate\Http\Response
     */
    public function update(Carburant $carburants)
    {
        $data = request()->validate([

            'nomstation'=> ['required'],
            'designation'=> ['required'],
            'litrage'=> ['required'],
            'montant'=> ['required'],
            'quantite'=> ['required'],
            'date' => ['required','date'],
            'avantrecharge'=> ['required'],
            'apresrecharge'=> ['required'],
            'vehicule'=> ['required'],
            'paiement'=> ['required', 'image']
        ]);
        
        $carburants->update($data);

        return redirect()->route('carburant.index', ['carburants'=> $carburants]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carburant  $carburant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carburants = Carburant::where('id',$id)->first();
        $carburants -> delete();
        return redirect()->route('carburant.index');
    }
}
