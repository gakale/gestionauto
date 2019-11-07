
@extends('../admins/layouts')
@section('content')
@section('grand-text','gestion des Personnel')
@section('grands','Tableau de Bord')
@section('petit-text','Personnel')


<div class="container-fluid">
    <div class="box">

        <div class="box-header with-border">
            <div class="pull-right">

                <div class="btn-group pull-right" style="margin-right: 10px">


                </div>

                <div class="btn-group pull-right" style="margin-right: 10px">
                    <a type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal-default" title="Nouveau">
                        <i class="fa fa-save"></i><span class="hidden-xs">&nbsp;&nbsp;Nouveau</span>
                    </a>
                </div>

            </div>
            <span>
                <a href="{{ route('personnel.index') }}" class="btn btn-sm btn-primary grid-refresh" title="Rafraîchir"><i class="fa fa-refresh"></i><span class="hidden-xs"> Actualisé</span></a> <div class="btn-group" style="margin-right: 10px" data-toggle="buttons">
                    <label class="btn btn-sm btn-dropbox 5daed26c39e34-filter-btn " title="Filtre">
                        <input type="checkbox"><i class="fa fa-filter"></i><span class="hidden-xs">&nbsp;&nbsp;Filtre</span>
                    </label>

                </div>
            </span>
        </div>



        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>1</th>
                        <th>Imatriculation</th>
                        <th>Modèle</th>
                        <th>Utilisation</th>
                        <th>Date</th>
                        <th>Etat</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                <tr>
                 <td>salue</td>

                  <td>salue</td>

                  <td>salue</td>
                  <td>salue</td>
                  <td>salue</td>

                  <td>salue</td>
                  <td>salue</td>
                  <td>
                  <a href="#" class="fa fa-eye">

                                </a>
                                <a href="#" class="fa fa-pencil">

                                </a>
                                <a href="#" class="red fa fa-trash"></td>
                                
                 
                </tr>

                 <tr>
                
                </tr>
                   
                </tbody>
            </table>

        </div>



        <div class="box-footer clearfix">
            <b></b> à <b></b> de <b>0</b> lignes<ul class="pagination pagination-sm no-margin pull-right">
                <!-- Previous Page Link -->
                <li class="page-item disabled"><span class="page-link">«</span></li>

                <!-- Pagination Elements -->
                <!-- "Three Dots" Separator -->

                <!-- Array Of Links -->
                <li class="page-item active"><span class="page-link">1</span></li>

                <!-- Next Page Link -->
                <li class="page-item disabled"><span class="page-link">»</span></li>
            </ul>

            <label class="control-label pull-right" style="margin-right: 10px; font-weight: 100;">

                <small>Affiche</small>&nbsp;
                <select class="input-sm grid-per-pager" name="per-page">
                    <option value="http://197.159.206.237/admin/jo/certifications?per_page=10">10</option>
                    <option value="http://197.159.206.237/admin/jo/certifications?per_page=20" selected="">20</option>
                    <option value="http://197.159.206.237/admin/jo/certifications?per_page=30">30</option>
                    <option value="http://197.159.206.237/admin/jo/certifications?per_page=50">50</option>
                    <option value="http://197.159.206.237/admin/jo/certifications?per_page=100">100</option>
                </select>
                &nbsp;<small>lignes</small>
            </label>

        </div>
        <!-- /.box-body -->
    </div>
</div>


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

    @stop
