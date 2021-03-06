<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/dashboard');
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
        //
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


     public function carburant()
    {
      return view('admin/carburant');
    }

    public function voiture()


    {
        return view('admin/voiture');
    }

    public function garage()
    {
        return view('admin/garage');
    }


    public function document()
    {
        return view('admin/document');
    }

    public function mail()
    {
        return view('admin/mail');
    }


    public function panne()
    {
        return view('admin/panne');
    }


    public function stock()
    {
        return view('admin/stock');
    }


    public function documents()
    {
        return view('admin/documents');
    }


    public function maps()
    {
        return view('admin/maps');
    }




    public function course()
    {
        return view('admin/course');
    }


    public function mission()
    {
        return view('admin/mission');
    }
}
