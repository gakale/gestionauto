
@extends('layout.layout')
@section('content')
@section('grand-text','gestion des Vehicule')
@section('grands','Tableau de Bord')
@section('petit-text','Nos Vehicule')


<div class="container-fluid">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Nos Vehicule</h3>
            <form action="" class="form-group">

                <input placeholder="Recherche" id="recherche" class="form-control" style="width: 20%;margin: 10px;" type="search">



            </form>

            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default"  style="float: right">
                Nouveau Vehicule
            </button>
        </div>
        {{--  nouveaux modal   --}}
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Nouveaux Vehicule  </h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <form action="{{ route('vehicule.store') }}" class="form-group" method="post">
                                    @csrf
                                    <div class="form-group col-md-4">
                                        <label for="recipient-name" class="col-form-label">Immatriculation</label>
                                        <input name="imatriculation" type="text" class="form-control @error('imatriculation') is-invalid @enderror" id="recipient-name">

                                        @error('imatriculation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="message-text" class="col-form-label">Kilometrage</label>
                                        <input name="kilometrage" class="form-control @error('kilometrage') is-invalid @enderror" id="message-text">

                                        @error('kilometrage')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="recipient-name" class="col-form-label">Date</label>
                                        <input name="date" type="text" class="form-control @error('date') is-invalid @enderror" id="recipient-name">
                                        
                                        @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="message-text" class="col-form-label">Puisance</label>
                                        <input type="text" name="puissance" class="form-control @error('puissance') is-invalid @enderror" id="message-text">

                                        
                                        @error('puissance')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="recipient-name" class="col-form-label">Poids Vide</label>
                                        <input type="text" name="poids" type="text" class="form-control" id="recipient-name">

                                        @error('poids')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="message-text" class="col-form-label">Nombre Place</label>
                                        <input name="nbreplace" class="form-control @error('nbreplace') is-invalid @enderror" id="message-text">

                                        @error('nbreplace')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="message-text" class="col-form-label">Capacité de Bagage</label>
                                        <input name="capacite" class="form-control @error('capacite') is-invalid @enderror" id="message-text">

                                        @error('capacite')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                      <div class="form-group col-md-4">
                                        <label for="message-text" class="col-form-label">Etat</label>
                                        <input name="etat" class="form-control @error('etat') is-invalid @enderror" id="message-text">

                                        @error('etat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="message-text" class="col-form-label">Transmission</label>
                                        <select name="transmission" class="form-control @error('transmission') is-invilad @enderror" id="message-text">
                                            <option value="">Atomatique</option>
                                            <option value="">Manuelle</option>
                                        </select>

                                        @error('transmission')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <hr>
                                    <div class="form-group col-md-6">
                                        <label for="message-text" class="col-form-label">Marque</label>
                                        <select name="marque" class="form-control @error('marque') is-invalid @enderror" id="message-text">
                                            <option value="">Fiat</option>
                                            <option value="">Bmw</option>
                                            <option value="">Peugeot</option>
                                        </select>

                                        
                                        @error('marque')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="message-text" class="col-form-label">Modele</label>
                                        <select name="modele" class="form-control @error('modele') is-invalid @enderror" id="message-text">
                                            <option checked value="">fiat</option>
                                            <option value="fiat">Bmw</option>
                                            <option value="">Peugeot</option>

                                        </select>
                                        @error('modele')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="message-text" class="col-form-label">Categorie</label>
                                        <select name="categorie" class="form-control @error('categorie') is-invalid @enderror" id="message-text">
                                            <option value="">Cars</option>
                                            <option value="">Camion</option>

                                        </select>

                                        @error('categorie')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="message-text" class="col-form-label">Carburant</label>
                                        <select name="carburant"  class="form-control select2 @error('carburant') is-invalid @enderror" id="message-text">
                                            <option value="">Hybride</option>
                                            <option value="">Essence</option>

                                            <option value="">Électrique</option>
                                            <option value="">Diesel</option>

                                        </select>

                                        @error('carburant')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="message-text" class="col-form-label">Utilisation</label>
                                        <select name="utilisation" class="form-control @error('utilisation') is-invalid @enderror" id="message-text">
                                                <option value="">Service</option>
                                                <option value="">Comptable</option>

                                        </select>

                                        
                                        @error('utilisation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="message-text" class="col-form-label">Carosserie</label>
                                        <select name="carosserie" class="form-control select2 @error('carosserie') is-invalid @enderror" id="message-text">
                                            <option value="">Break</option>
                                            <option value="">Bicorps</option>

                                            <option value="">Tricorps</option>

                                            <option value="">Coupé</option>
                                            <option value="">Cabriolet</option>

                                            <option value="">Roadster</option>
                                            <option value="">Spider</option>

                                            <option value="">	Pick-up</option>

                                        </select>

                                        @error('carosserie')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>



                                </div>


                            </div>



                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
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
                                <td> A1@gmailcom
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
