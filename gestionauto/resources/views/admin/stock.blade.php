@extends('layout.layout')
@section('content')
@section('grand-text','Stock')
@section('grands','Tableau de Bord')
@section('petit-text','Stock')

<div class="container-fluid ">
    <div class="box ">
        <div class="box-header">
            <h3 class="box-title">Gestion Stock</h3>
            <form action="" class="form-group">
                <input placeholder="Recherche" id="recherche" class="form-control" style="width: 20%;margin: 10px;" type="search">

            </form>
            <button type="button" class="btn btn-primary my-1" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="float: right">Ajouter</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Nouveau Chauffeur</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <form action="#" class="form-group" method="post">
                                    <div class="form-group col-md-6">
                                        <label for="recipient-name" class="col-form-label">Nom Produit</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="message-text" class="col-form-label">Designation</label>
                                        <input class="form-control" id="message-text">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="recipient-name" class="col-form-label">Stock</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="message-text" class="col-form-label">Prix</label>
                                        <input class="form-control" id="message-text">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="recipient-name" class="col-form-label">Date</label>
                                        <input type="password" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="message-text" class="col-form-label">Quantité Entrée</label>
                                        <input class="form-control" id="message-text">
                                    </div>  <div class="form-group col-md-6">
                                        <label for="message-text" class="col-form-label">Quantité Sortie</label>
                                        <input class="form-control" id="message-text">
                                    </div>
                                      <div class="form-group col-md-6">
                                        <label for="message-text" class="col-form-label">Stock FINAL </label>
                                        <input class="form-control" id="message-text">
                                    </div>
                                    <hr>
                                    <div class="form-group col-md-6">
                                        <label for="message-text" class="col-form-label">Reçu de paiement </label>
                                        <input type="file" class="form-control" id="message-text">
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
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table table-bordered  table-striped">
                <tbody>
                <tr>
                    <th>Nom Produit</th>
                    <th>Designation</th>
                    <th>Stock</th>
                    <th>Quantite Entrée</th>
                    <th>Quantite Sortie</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>qklsdksd</td>
                    <td>qlqsdkk</td>
                    <td>qkldskls </td>
                    <td>sdkqlmlqs</td>
                    <td>qsdkmlkqsd</td>
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
