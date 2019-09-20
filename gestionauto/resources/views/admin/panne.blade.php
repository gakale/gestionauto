@extends('layout.layout')
@section('content')
@section('grand-text','Tableau de Bord')
@section('grands','Tableau de Bord')
@section('petit-text','Voiture')

<div class="container-fluid">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Voiture</h3>
            <form action="" class="form-group">

                <input placeholder="Recherche" id="recherche" class="form-control" style="width: 20%;margin: 10px;" type="search">



            </form>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="float: right">Ajouter</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ajout Vehicule</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <form action="#" class="form-group" method="post">
                                    <div class="form-group col-md-4">
                                        <label for="recipient-name" class="col-form-label">Immatriculation</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="message-text" class="col-form-label">Kilometrage</label>
                                        <input class="form-control" id="message-text">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="recipient-name" class="col-form-label">Date</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="message-text" class="col-form-label">Puisance</label>
                                        <input class="form-control" id="message-text">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="recipient-name" class="col-form-label">Poids Vide</label>
                                        <input type="password" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="message-text" class="col-form-label">Nombre Place</label>
                                        <input class="form-control" id="message-text">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="message-text" class="col-form-label">Capacité de Bagage</label>
                                        <input class="form-control" id="message-text">
                                    </div>
                                      <div class="form-group col-md-4">
                                        <label for="message-text" class="col-form-label">Etat</label>
                                        <input class="form-control" id="message-text">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="message-text" class="col-form-label">Transmission</label>
                                        <select class="form-control" id="message-text">
                                            <option value="">Atomatique</option>
                                            <option value="">Manuelle</option>
                                        </select>
                                    </div>
                                    <hr>
                                    <div class="form-group col-md-6">
                                        <label for="message-text" class="col-form-label">Marque</label>
                                        <select type="" class="form-control" id="message-text">
                                            <option value="">Fiat</option>
                                            <option value="">Bmw</option>
                                            <option value="">Peugeot</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="message-text" class="col-form-label">Modele</label>
                                        <select type="file" class="form-control" id="message-text">
                                            <option value="">Fiat</option>
                                            <option value="">Bmw</option>
                                            <option value="">Peugeot</option>

                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="message-text" class="col-form-label">Categorie</label>
                                        <select type="file" class="form-control" id="message-text">
                                            <option value="">Cars</option>
                                            <option value="">Camion</option>

                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="message-text" class="col-form-label">Carburant</label>
                                        <select  class="form-control select2-selection__rendered" id="message-text">
                                            <option value="">Hybride</option>
                                            <option value="">Essence</option>

                                            <option value="">Électrique</option>
                                            <option value="">Diesel</option>

                                        </select>
                                    </div>





                                </form>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Ferme</button>
                            <button type="submit" class="btn btn-primary">Enregister</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--  nouveaux modal   --}}


        <!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table table-bordered  table-striped">
                <tbody>
                    <tr>
                        <th>Immatriculation</th>
                        <th>Modele</th>
                        <th>Date</th>
                        <th>Utilisation</th>
                        <th>Categorie</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>022 BP 01</td>
                        <td>BMW</td>
                        <td>2019 </td>
                        <td>Compabilité</td>
                        <td>Camion</td>
                        <td>

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
<script>
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
    })
</script>
@stop
