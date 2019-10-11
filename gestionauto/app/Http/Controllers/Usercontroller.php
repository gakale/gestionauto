<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin\operateur');
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
        $date = Carbon::Now();

        $data = request()->validate([

         'name' => ['required', 'min:3'],
         'prenom'=> ['required','min:3'],
         'login'=> ['required','min:6'],
         'email' => ['required', 'email'],
         'password' => ['required' ,],
         'fonction' => ['required'],
         'telephone' => ['required'],
         'cni' => ['required', 'image'],
         'date' => ['required','date'],
         'role' => ['required']
         ]);

         $cniPath = request('cni')->store('uploads','public');


         $officialDate = Carbon::now();


            operateur::create([
             'name' => $data['name'],
             'prenom'=> $data['prenom'],
             'login'=> $data['login'],
             'email' => $data['email'],
             'password' => bcrypt($data['password']),
             'fonction'=> $data['fonction'],
             'telephone' => $data['telephone'],
             'cni' => $cniPath,
             'date'=> $data['date'],
             'role' => $data['role'],

             'at_year'=> $officialDate


         ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
