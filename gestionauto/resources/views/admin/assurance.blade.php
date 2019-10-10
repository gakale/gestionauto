
@extends('layout.layout')
@section('content')
@section('grand-text','gestion des Assurances')
@section('grands','Tableau de Bord')
@section('petit-text','Assurance')


<div class="container-fluid">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Nos Assurances</h3>
            <form action="" class="form-group">

                <input placeholder="Recherche" id="recherche" class="form-control" style="width: 20%;margin: 10px;" type="search">



            </form>

                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default"  style="float: right">
                    Nouveaux Assurance
                </button>
            </div>
            {{--  nouveaux modal   --}}
            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                                <h2 class="modal-title">Nouveaux Assurance  </h2>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <form action="#" class="form-group" method="post">
                                        <div class="form-group col-md-6">
                                            <label for="recipient-name" class="col-form-label">Date D abonnement </label>
                                            <input type="date" name="date" class="form-control @error('date') is-invalid @enderror" id="recipient-name">

                                            @error('date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="message-text" class="col-form-label">Expiration</label>
                                            <input type="date" class="form-control @error('expiration') is-invalid @enderror" name="expiration" id="message-text">

                                            @error('expiration')
                                            <span class="invalid-feedback">
                                                <strong>$message</strong>

                                            </span>
                                            @enderror

                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="message-text" class="col-form-label">Date de Rappelle</label>
                                            <input type="date" class="form-control @error('rappele') is-invalid @enderror" name="rappele" id="message-text">

                                            @error('rappele')
                                            <span class="invalid-feedback">
                                                <strong>$message</strong>
                                            </span>
                                            @enderror

                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="message-text" class="col-form-label">Maison D assurance</label>
                                            <input type="text" class="form-control @error('maison') is-invalid @enderror" name="maison" id="message-text">

                                            @error('maison')
                                            <span class="invalid-feedback">
                                                <strong>$message</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="message-text" class="col-form-label">La voiture</label>
                                            <select  class="form-control @error('maison') is-invalid @enderror" name="maison" id="message-text">
                                                <option value="">BMW 407</option>
                                                <option value="">MECEDECS 705</option>

                                            </select>

                                            @error('maison')
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
