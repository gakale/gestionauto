
@extends('layout.layout')
@section('content')
@section('grand-text','gestion des Personnel')
@section('grands','Tableau de Bord')
@section('petit-text','Personnel')


<div class="container-fluid">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Nos Personnel</h3>
            <form action="" class="form-group">

                <input placeholder="Recherche" id="recherche" class="form-control" style="width: 20%;margin: 10px;" type="search">



            </form>

                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default"  style="float: right">
                    Nouveaux Personnel
                </button>
            </div>
            {{--  nouveaux modal   --}}
            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                                <h2 class="modal-title">Nouveaux Personnel  </h2>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <form action="{{ route('personnel.store') }}" class="form-group" method="post">
                                        @csrf
                                        <div class="form-group col-md-6">
                                            <label for="recipient-name" class="col-form-label">Nom</label>
                                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="recipient-name">

                                            @error('name')
                                                <span class="invalid-feedback alert alert-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="message-text" class="col-form-label">Prenom</label>
                                            <input class="form-control @error('prenom') is-invalid @enderror" name="prenom" id="message-text">

                                            @error('prenom')
                                            <span class="invalid-feedback">
                                                <strong>$message</strong>

                                            </span>
                                            @enderror

                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="message-text" class="col-form-label">Email</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="message-text">

                                            @error('email')
                                            <span class="invalid-feedback">
                                                <strong>$message</strong>
                                            </span>
                                            @enderror

                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="message-text" class="col-form-label">Fonction</label>
                                            <input type="text" class="form-control @error('fonction') is-invalid @enderror" name="fonction" id="message-text">

                                            @error('fonction')
                                            <span class="invalid-feedback">
                                                <strong>$message</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="message-text" class="col-form-label">Téléphone</label>
                                            <input type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" id="message-text">
                                            @error('telephone')

                                                <span class="invalid-feedback">
                                                    <strong>$message</strong>
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
