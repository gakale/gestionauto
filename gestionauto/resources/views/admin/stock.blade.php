
@extends('layout.layout')
@section('content')
@section('grand-text','gestion des Stocks')
@section('grands','Tableau de Bord')
@section('petit-text','Stocks')


<div class="container-fluid">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Nos Stocks</h3>
            <form action="" class="form-group">

                <input placeholder="Recherche" id="recherche" class="form-control" style="width: 20%;margin: 10px;" type="search">



            </form>

                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default"  style="float: right">
                    Nouveaux Stocks
                </button>
            </div>
            {{--  nouveaux modal   --}}
            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                                <h2 class="modal-title">Nouveaux Operateur  </h2>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <form action="#" class="form-group" method="post">
                                        <div class="form-group col-md-6">
                                            <label for="recipient-name" class="col-form-label">Nom Produit</label>
                                            <input type="text" name="nameprod" class="form-control @error('nameprod') is-invalid @enderror" id="recipient-name">

                                            @error('nameprod')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="message-text" class="col-form-label">Designation</label>
                                            <input class="form-control @error('designation') is-invalid @enderror" name="designation" id="message-text">

                                            @error('designation')
                                                <span class="invalid-feedback">
                                                    <strong>$message</strong>

                                                </span>
                                            @enderror

                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="message-text" class="col-form-label">Stock</label>
                                            <input type="text" class="form-control @error('Stock') is-invalid @enderror" name="stock" id="message-text">

                                            @error('Stock')
                                            <span class="invalid-feedback">
                                                <strong>$message</strong>
                                            </span>
                                            @enderror

                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="message-text" class="col-form-label">Prix</label>
                                            <input type="text" class="form-control @error('Prix') is-invalid @enderror" name="prix" id="message-text">

                                            @error('prix')
                                            <span class="invalid-feedback">
                                                <strong>$message</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="message-text" class="col-form-label">Date</label>
                                            <input type="text" class="form-control @error('date') is-invalid @enderror" name="date" id="message-text">

                                            @error('date')
                                            <span class="invalid-feedback">
                                                <strong>$message</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="message-text" class="col-form-label">Quantité Entrée</label>
                                            <input type="text" class="form-control @error('quantentre') is-invalid @enderror" name="quantentre" id="message-text">

                                            @error('quantentre')
                                            <span class="invalid-feedback">
                                                <strong>$message</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="message-text" class="col-form-label">Quantité Sortie</label>
                                            <input type="text" class="form-control @error('quantsortie') is-invalid @enderror" name="quantsortie" id="message-text">

                                            @error('quantsortie')
                                            <span class="invalid-feedback">
                                                <strong>$message</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="message-text" class="col-form-label">Stock FINAL</label>
                                            <input type="text" class="form-control @error('stockfinal') is-invalid @enderror" name="stockfinal" id="message-text">

                                            @error('stockfinal')
                                            <span class="invalid-feedback">
                                                <strong>$message</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="message-text" class="col-form-label">Reçu de paiement </label>
                                            <input type="file" class="form-control @error('recupaiement') is-invalid @enderror" name="recupaiement" id="message-text">
                                            @error('recupaiement')

                                                <span class="invalid-feedback">
                                                    <strong>$message</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </form>
                                </div>


                        </div>



                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
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


<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()
    )}
</script>

@stop
