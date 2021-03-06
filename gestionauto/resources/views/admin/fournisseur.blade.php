
@extends('../admins/layouts')
@section('content')
@section('grand-text','Gestion des Fournisseurs')
@section('grands','Tableau de Bord')
@section('petit-text','Fournisseur')


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
                <a href="{{ route('fournisseur.index') }}" class="btn btn-sm btn-primary grid-refresh" title="Rafraîchir"><i class="fa fa-refresh"></i><span class="hidden-xs"> Actualisé</span></a> <div class="btn-group" style="margin-right: 10px" data-toggle="buttons">
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
                        <th>Nom</th>
                        <th>Localisation</th>
                        <th>E-mail</th>
                        <th>Téléphone</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                @foreach($fournisseur as $fournisseurs)

                    <tr>
                        <td>{{$fournisseurs->name}}</td>
                        <td>{{$fournisseurs->localisation}}</td>
                        <td>{{$fournisseurs->email}}</td>
                        <td>{{$fournisseurs->telephone}}</td>
                        <td>
                            <a href="#">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{url('facture/'.$fournisseurs->id)}}" >
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a href="/" >
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>

                    </tr>
                    @endforeach
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
                    <h2 class="modal-title">Nouveau Fournisseur</h2>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form action="{{ route('fournisseur.store') }}" class="form-group" method="POST">
                            @csrf
                            <div class="form-group col-md-6">
                                <label for="recipient-name" class="col-form-label">Nom du Fournisseur</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="recipient-name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                            <div class="form-group col-md-6">
                                <label for="recipient-name" class="col-form-label">Localisation</label>
                                <input name="localisation" type="text" class="form-control @error('localisation') is-invalid @enderror" id="recipient-name">

                                @error('localisation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group col-md-6">
                                <label for="message-text" class="col-form-label">Téléphone</label>
                                <input type="text" name="telephone" class="form-control @error('telephone') is-invalid @enderror" id="message-text">
                                @error('telephone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="message-text" class="col-form-label">E-mail</label>
                                <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="message-text">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="message-text" class="col-form-label">N° CNI</label>
                                <input name="cni" type="text" class="form-control @error('cni') is-invalid @enderror" id="message-text">

                                @error('cni')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="message-text" class="col-form-label">Dépuis</label>
                                <input  name="depuis" type="date" class="form-control @error('depuis') is-invalid @enderror" id="message-text">

                                @error('depuis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <hr>




                        </div>


                    </div>



                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Save changes">
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
        </form>


        <!-- /.modal-dialog -->
    </div>

    @stop
