
@extends('../admins/layouts')
@section('content')
@section('grand-text','gestion des Stock')
@section('grands','Tableau de Bord')
@section('petit-text','Stock')


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
                <a href="{{ route('stock.index') }}" class="btn btn-sm btn-primary grid-refresh" title="Rafraîchir"><i class="fa fa-refresh"></i><span class="hidden-xs"> Actualisé</span></a> <div class="btn-group" style="margin-right: 10px" data-toggle="buttons">
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
                        <th> </th>
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
                    <h2 class="modal-title">Nouveaux stocks  </h2>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form action="{{ route('stock.store') }}" class="form-group" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-md-6">
                                <label for="recipient-name" class="col-form-label">Nom Produit</label>
                                <input type="text" name="nameprod" class="form-control @error('nameprod') is-invalid @enderror" id="recipient-name" value="{{ old('name') }}">

                                @error('nameprod')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="message-text" class="col-form-label">Désignation </label>
                                <input  class="form-control @error('designation') is-invalid @enderror" value="{{ old('designation') }}" name="designation" id="message-text" >

                                @error('designation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="recipient-name" class="col-form-label">Stock</label>
                                <input type="text" name="stock" class="form-control @error('stock') is-invalid @enderror" id="recipient-name" value="{{old('stock')}}">

                                @error('stock')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="message-text" class="col-form-label">Entre le Prix</label>
                                <input class="form-control @error('prix') is-invalid @enderror" id="recipient-name" value="{{ old('prix') }}"  id="message-text" name="email">

                                @error('prix')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="recipient-name" class="col-form-label">Date</label>
                                <input type="date" name="date" class="form-control @error('date') is-invalid @enderror"  id="recipient-name">
                                @error('date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="form-group col-md-6">
                                <label for="message-text" class="col-form-label">Quantité Entrée</label>
                                <input class="form-control @error('quantentre') is-invalid @enderror"  value="{{ old('quantentre') }}" name="quantentre" id="message-text">

                                @error('quantentre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="form-group col-md-6">
                                <label for="message-text" class="col-form-label">Quantité Sortie</label>
                                <input class="form-control @error('quantsortie') is-invalid @enderror"  value="{{ old('quantsortie') }}"  name="quantsortie" id="message-text">

                                @error('quantsortie')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="form-group col-md-6">
                                <label for="message-text" class="col-form-label">Stock FINAL</label>
                                <input type="text" class="form-control @error('stockfinal') is-invalid @enderror" name="stockfinal" id="message-text">

                                @error('stockfinal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="form-group col-md-6">
                                <label for="message-text" class="col-form-label">Recu de paiement</label>
                                <input type="file" class="form-control @error('recupaiement') is-invalid @enderror" name="recupaiement" id="message-text">

                                @error('recupaiement')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>



                        </div>


                    </div>



                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary">
                    </div>



                </div>
                <!-- /.modal-dialog -->
            </div>
        </form>
    </div>
    @stop
