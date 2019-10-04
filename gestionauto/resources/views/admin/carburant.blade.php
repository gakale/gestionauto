
@extends('layout.layout')
@section('content')
@section('grand-text','gestion des carburant')
@section('grands','Tableau de Bord')
@section('petit-text','caburant')


<div class="container-fluid">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Nos Carburant</h3>
            <form action="" class="form-group">

                <input placeholder="Recherche" id="recherche" class="form-control" style="width: 20%;margin: 10px;" type="search">



            </form>

            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default"  style="float: right">
                Nouvelle operateur
            </button>
        </div>
        {{--  nouveaux modal   --}}
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h2 class="modal-title">Nouveaux Carburant  </h2>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <form action="{{ route('operateur.store') }}" class="form-group" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group col-md-6">
                                        <label for="recipient-name" class="col-form-label">Nom Station</label>
                                        <input type="text" name="nomstation" class="form-control @error('nomstation') is-invalid @enderror" id="recipient-name" value="{{ old('nomstation') }}">

                                        @error('nomstation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="message-text" class="col-form-label">Designation</label>
                                        <input  class="form-control @error('designation') is-invalid @enderror" value="{{ old('designation') }}" name="designation" id="message-text" >

                                        @error('designation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="recipient-name" class="col-form-label">Litrage</label>
                                        <input type="text" name="litrage" class="form-control @error('litrage') is-invalid @enderror" id="recipient-name" value="{{old('litrage')}}">

                                        @error('litrage')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="message-text" class="col-form-label">Montant</label>
                                        <input class="form-control @error('montant') is-invalid @enderror" id="recipient-name" value="{{ old('montant') }}"  id="message-text" name="email">

                                        @error('montant')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="recipient-name" class="col-form-label">Quantite</label>
                                        <input type="text" name="quantite" class="form-control @error('quantite') is-invalid @enderror"  id="recipient-name">
                                        @error('quantite')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label for="message-text" class="col-form-label">Date</label>
                                        <input class="form-control @error('date') is-invalid @enderror"  value="{{ old('date') }}" name="date" id="message-text">

                                        @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label for="message-text" class="col-form-label">Avant Recharge</label>
                                        <input class="form-control @error('avantrecharge') is-invalid @enderror"  value="{{ old('avantrecharge') }}"  name="avantrecharge" id="message-text">

                                        @error('avantrecharge')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label for="message-text" class="col-form-label">Apres Recharge</label>
                                        <input class="form-control @error('apresrecharge') is-invalid @enderror"  value="{{ old('apresrecharge') }}"  name="apresrecharge" id="message-text">

                                        @error('apresrecharge')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label for="message-text" class="col-form-label">Recu de paiement </label>
                                        <input type="file" class="form-control @error('paiement') is-invalid @enderror" name="paiement" id="message-text">

                                        @error('paiement')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label for="message-text" class="col-form-label">Choisir Un Vehicule</label>
                                        <select type="text" class="form-control @error('voiture') is-invalid @enderror" name="voiture" id="message-text">
                                            <option value="">Mercedece</option>

                                            <option value="">Permis B</option>
                                        </select>

                                        @error('voiture')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>



                            </div>


                        </div>



                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary">
                        </div>
                    </form>
                    </div>
                    <!-- /.modal-content -->
                </div>

                <!-- /.modal-dialog -->
            </div>

            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-bordered  table-striped">
                    <tbody>
                        <tr>
                            <th>Nom Operateur</th>
                            <th>Mail</th>
                            <th>Téléphone</th>
                            <th>Fonction</th>
                            <th>Rôle</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>fofana</td>
                            <td>BMW</td>
                            <td>05 02 74 06 </td>
                            <td>utilisateur</td>
                            <td>users</td>
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

                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>


    </div>



    @stop
