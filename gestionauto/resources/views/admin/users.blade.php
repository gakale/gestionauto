@extends('layout.layout')
@section('content')
@section('grand-text','Tableau de Bord')
@section('grands','Tableau de Bord')
@section('petit-text','Utilisateur')

<div class="container-fluid ">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Utilisateurs</h3>
            <form action="" class="form-group">
                <input placeholder="Recherche" id="recherche" class="form-control" style="width: 20%;margin: 10px;" type="search">

            </form>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="float: right">Ajouter</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Nouveau Utilisateur</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <form action="#" class="form-group" method="post">
                                    <div class="form-group col-md-6">
                                        <label for="recipient-name" class="col-form-label">Nom</label>
                                        <input type="text" name="name" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="message-text" class="col-form-label">Prenom</label>
                                        <input class="form-control" name="prenom" id="message-text">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="recipient-name" class="col-form-label">Login</label>
                                        <input type="text" name="login" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="message-text" class="col-form-label">Email</label>
                                        <input class="form-control" name="email" id="message-text">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="recipient-name" class="col-form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="message-text" class="col-form-label">Fonction</label>
                                        <input class="form-control" name="fonction" id="message-text">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="recipient-name" class="col-form-label">Role</label>
                                        <select type="text" name="role" class="form-control select2 select2-hidden-accessible" id="recipient-name">
                                            <option value="Administrateur">Administrateur</option>
                                            <option value="utilisateur">Utilisatateur</option>
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
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table table-bordered  table-striped">
                <tbody>
                <tr>
                    <th>Nom</th>
                    <th>Login</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>

                    </td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>

                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>

                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>

                    </td>
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
