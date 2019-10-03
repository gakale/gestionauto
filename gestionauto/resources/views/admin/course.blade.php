
@extends('layout.layout')
@section('content')
@section('grand-text','gestion des missions')
@section('grands','Tableau de Bord')
@section('petit-text','Operateur')


<div class="container-fluid">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Nos cours</h3>
            <form action="" class="form-group">

                <input placeholder="Recherche" id="recherche" class="form-control" style="width: 20%;margin: 10px;" type="search">



            </form>

            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default"  style="float: right">
                Nouvelle Mission
            </button>
        </div>
        {{--  nouveaux modal   --}}
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h2 class="modal-title">Nouvelle coure  </h2>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <form action="#" class="form-group" method="post">


                                    <div class="form-group col-md-4">
                                        <label for="recipient-name" class="col-form-label">Le Chauffeur</label>
                                        <select type="text" name="chauffeur" class="form-control" id="recipient-name">
                                            <option value="">Fofona</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="recipient-name" class="col-form-label">Montant pour Départ</label>
                                        <input type="text" name="montantpodepart" class="form-control" >
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="recipient-name" class="col-form-label">Montant Resté</label>
                                        <input type="text" name="montantreste" class="form-control" >
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="recipient-name" class="col-form-label">Montant Total</label>
                                        <input type="text" name="montanttotal" class="form-control" >
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="message-text" class="col-form-label">Lieu de La course</label>
                                        <input class="form-control" name="lieucourse" id="message-text">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="recipient-name" class="col-form-label">Le Motif</label>
                                        <input type="password" name="motifcourse" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="message-text" class="col-form-label">Date</label>
                                        <input type="date" class="form-control" name="date" id="message-text">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="message-text" class="col-form-label">Heure de Départ</label>
                                        <input type="date" class="form-control" name="heurdepart" id="message-text">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="recipient-name" class="col-form-label">Heur de Retour</label>
                                        <input type="date" name="heurretour" class="form-control" >
                                    </div>




                                    <div class="form-group col-md-4">
                                        <label for="message-text" class="col-form-label">Vehicule </label>
                                        <select class="form-control" name="vehicule" id="message-text">
                                            <option value="bmw">0120 012 </option>
                                        </select>
                                    </div>
                                     <hr>



                                     <div class="form-group col-md-4">
                                        <label for="recipient-name" class="col-form-label">Caburant Avant Depart</label>
                                        <input type="text" name="cabutavdepart" class="form-control">

                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="recipient-name" class="col-form-label">Caburant Après Depart</label>
                                        <input type="text" name="cabutapdepart" class="form-control">

                                    </div>


                                    <div class="form-group col-md-4">
                                        <label for="recipient-name" class="col-form-label">Kilometrage Avant Depart</label>
                                        <input type="text" name="kiloavdepart" class="form-control">

                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="recipient-name" class="col-form-label">Kilometrage Après Depart</label>
                                        <input type="text" name="kiloapdepart" class="form-control">

                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="recipient-name" class="col-form-label">Fin de la course</label>
                                        <select type="checkbox" name="niveau" class="form-control">
                                                    <option value="debut">Debut</option>
                                                    <option value="fin">Fin</option>

                                        </select>


                                    </div>
                                </form>
                            </div>


                        </div>



                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
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
                            <th>Nom Chauffeur</th>
                            <th>Motif</th>
                            <th>Lieu</th>
                            <th>Coût Total</th>
                            <th>Voiture</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>fofana</td>
                            <td>Depot de facture la bni</td>
                            <td>plateau</td>
                            <td>200000 CFA</td>
                            <td>BMW</td>

                            <td style="letter-spacing:0.2em;text-align:center;">

                                <a href="#" class="fa fa-eye">

                                </a>
                                <a href="#" class="fa fa-pencil">

                                </a>
                                <a href="#" class="red fa fa-trash">

                                </a>
                                <a href="#" class="red fa fa-print">

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
                            <td> </td>
                            <td></td>
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

                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>


    </div>




 @stop