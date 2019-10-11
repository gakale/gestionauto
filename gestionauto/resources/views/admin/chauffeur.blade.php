
@extends('layout.layout')
@section('content')
@section('grand-text','gestion des garages')
@section('grands','Tableau de Bord')
@section('petit-text','Chauffeurs')


<div class="container-fluid">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Nos Chauffeurs</h3>
            <form action="" class="form-group">

                <input placeholder="Recherche" id="recherche" class="form-control" style="width: 20%;margin: 10px;" type="search">



            </form>

            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default"  style="float: right">
                Nouveau chauffeur
            </button>
        </div>
        {{--  nouveaux modal   --}}
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Nouveaux chauffeur  </h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <form action="{{ route('chauffeur.store') }}" class="form-group" method="post">
                                    @csrf
                                        <div class="form-group col-md-6">
                                            <label for="recipient-name" class="col-form-label">Nom du chauffeur</label>
                                            <input type="text" name="name" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="message-text" class="col-form-label">Prenom</label>
                                            <input name="prenom" class="form-control" id="message-text">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="recipient-name" class="col-form-label">Fonction</label>
                                            <input name="fonction" type="text" class="form-control" id="recipient-name">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="recipient-name" class="col-form-label">Adresse</label>
                                            <input name="adresse" type="password" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="message-text" class="col-form-label">Téléphone</label>
                                            <input name="telephone" class="form-control" id="message-text">
                                        </div>
                                          <div class="form-group col-md-6">
                                            <label for="message-text" class="col-form-label">Email</label>
                                            <input name="email" type="email" class="form-control" id="message-text">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="message-text" class="col-form-label">N° CNI</label>
                                            <input  name="cni" type="text" class="form-control" id="message-text">
                                        </div>
                                        <hr>
                                        <div class="form-group col-md-6">
                                            <label for="message-text" class="col-form-label">Photo Permis</label>
                                            <input name="permis" type="file" class="form-control" id="message-text">
                                        </div>
                                          <div class="form-group col-md-6">
                                            <label for="message-text" class="col-form-label">Categorie de permis </label>
                                            <select name="typepermis" class="form-control" id="message-text">
                                                <option value="">Permis A1</option>
                                                <option value="">Permis A2</option>

                                                <option value="">Permis A</option>

                                                <option value="">Permis B</option>

                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="message-text" class="col-form-label">Date Permis</label>
                                            <input  type="date" class="form-control" id="message-text">
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
                                <th>Nom du chauffeur</th>
                                <th>Téléphone</th>
                                <th>Numero de CNI</th>
                                <th>Categorie De Permis</th>
                                <th>Date Permis</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>gnakale</td>
                                <td>022 0 5 0 5</td>
                                <td>C001 2025 </td>
                                <td>A1</td>
                                <td>19/2019/2019</td>
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
