
@extends('layout.layout')
@section('content')
@section('grand-text','gestion des fournisseurs')
@section('grands','Tableau de Bord')
@section('petit-text','Fournisseurs')


<div class="container-fluid">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Nos Fourniseurs</h3>
            <form action="" class="form-group">

                <input placeholder="Recherche" id="recherche" class="form-control" style="width: 20%;margin: 10px;" type="search">



            </form>
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif

            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default"  style="float: right">
                Nouveau Fourniseur
            </button>
        </div>
        {{--  nouveaux modal   --}}
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Nouveaux Fourniseur  </h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">

                                <form action="{{ route('fournisseur.store') }}" class="form-group" method="post">
                                    @csrf
                                    <div class="form-group col-md-6">
                                        <label for="recipient-name" class="col-form-label">Nom du Fourniseur</label>
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="recipient-name">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>



                                    <div class="form-group col-md-6">
                                        <label for="recipient-name" class="col-form-label">Localisation</label>
                                        <input name="localisation" type="text" class="form-control @error('localisation') is-invalid @enderror" id="recipient-name">

                                        @error('localisation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="message-text" class="col-form-label">Téléphone</label>
                                        <input type="text" name="telephone" class="form-control @error('telephone') is-invalid @enderror" id="message-text">
                                        @error('telephone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="message-text" class="col-form-label">Email</label>
                                        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="message-text">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="message-text" class="col-form-label">N° CNI</label>
                                        <input name="cni" type="text" class="form-control @error('cni') is-invalid @enderror" id="message-text">

                                        @error('cni')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="message-text" class="col-form-label">Depuis</label>
                                        <input  name="depuis" type="date" class="form-control @error('date') is-invalid @enderror" id="message-text">

                                        @error('depuis')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <hr>




                                </div>


                            </div>



                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary" value="Save changes">
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                </form>

                <!-- /.modal-dialog -->
            </div>

            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-bordered  table-striped">
                    <tbody>
                        <tr>
                            <th>Nom du Fourniseur</th>
                            <th>Téléphone</th>
                            <th>Numero de CNI</th>
                            <th>Email</th>
                            <th>Depuis</th>
                            <th>localisation</th>

                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>gnakale</td>
                            <td>022 0 5 0 5</td>
                            <td>C001 2025 </td>
                            <td>A1@gmailcom
                                <td>19/2019/2019</td>

                                <td>Abidjan plataux</td>
                                <td style="letter-spacing: 3px;text-align:center;">

                                    <a href="#" class="fa fa-eye">

                                    </a>
                                    <a href="#" class="fa fa-pencil">

                                    </a>
                                    <a href="#" class="red fa fa-trash">

                                    </a>
                                </td>

                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td> </td>
                                <td></td>
                                <td></td>
                                <td></td>

                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td> </td>
                                <td></td>
                                <td></td>
                                <td></td>

                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td> </td>
                                <td></td>
                                <td></td>
                                <td></td>

                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td> </td>
                                <td></td>
                                <td></td>
                                <td></td>

                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> </td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                        </tr>

                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>


    </div>




    @stop
