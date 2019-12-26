
@extends('../admins/layouts')
@section('content')
@section('grand-text','gestion des Assurances')
@section('grands','Tableau de Bord')
@section('petit-text','Assurance')


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
                <a href="{{ route('assurance.index') }}" class="btn btn-sm btn-primary grid-refresh" title="Rafraîchir"><i class="fa fa-refresh"></i><span class="hidden-xs">Actualisé</span></a> <div class="btn-group" style="margin-right: 10px" data-toggle="buttons">
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
                        <th>Date d'abonnement</th>
                        <th>Date d'expiration</th>
                        <th>Date de rappel</th>
                        <th>Maison d'assurance</th>
                        <th>Voiture a assurée</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($assurance as $assurances)

                        <tr>
                            <td>{{$assurances->date}}</td>
                            <td>{{$assurances->expiration}}</td>
                            <td>{{$assurances->rappele}}</td>
                            <td>{{$assurances->maison}}</td>
                            <td>{{$assurances->assur_voit}}</td>
                            <td>
                                <a type="button" class="btn btn-xs" href="{{route('assurance.show',$assurances->id)}}" title="Voir détails">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a type="button" class="btn btn-xs" href="{{route('assurance.edit',$assurances->id)}}" title="Modifier">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a type="button" class="btn btn-xs" data-toggle="modal" data-target="#modal-delete" title="Supprimer">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
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



<!-- Confirmation de la Suppression des données -->

                    <div class="modal fade" id="modal-delete">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h2 class="modal-title"  style="text-align: center;">Attention !</h2>
                                </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <form action="{{route('assurance.destroy',$assurances->id)}}" class="form-group" method="post">
                                                {{@csrf_field()}}

                                                <div class="form-group col-md-12">
                                                    <h3 class="" style="text-align: center;">Voulez vous vraiment supprimer ces données ?</h3>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success pull-left" data-dismiss="modal">Non, Rétour</button>
                                            <button type="submit" class="btn btn-danger">Oui, Supprimer</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                            </form>
                            <!-- /.modal-dialog -->
                        </div>




<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h2 class="modal-title">Nouvelle Assurance  </h2>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form action="{{ route('assurance.store') }}" class="form-group" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group col-md-6">
                                <label for="recipient-name" class="col-form-label">Date d'abonnement </label>
                                <input type="date" name="date" class="form-control @error('date') is-invalid @enderror" id="recipient-name">
                                @error('date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="form-group col-md-6">
                                <label for="message-text" class="col-form-label">Date d'expiration</label>
                                <input type="date" class="form-control @error('expiration') is-invalid @enderror" name="expiration" id="message-text">
                                @error('expiration')
                                <span class="invalid-feedback">
                                    <strong>$message</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="form-group col-md-6">
                                <label for="message-text" class="col-form-label">Date de rappel</label>
                                <input type="date" class="form-control @error('rappele') is-invalid @enderror" name="rappele" id="message-text">
                                @error('rappele')
                                <span class="invalid-feedback">
                                    <strong>$message</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="form-group col-md-6">
                                <label for="message-text" class="col-form-label">Maison d'Assurance</label>
                                <input type="text" class="form-control @error('maison') is-invalid @enderror" name="maison" id="message-text">
                                @error('maison')
                                <span class="invalid-feedback">
                                    <strong>$message</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="form-group col-md-12">
                                <label for="message-text" class="col-form-label">La voiture</label>
                                <select class="form-control select2 @error('assur_voit') is-invalid @enderror" style="width: 100%" name="assur_voit" data-value="" tabindex="-1" aria-hidden="true">
                                    <option value="123hk01">123hk01</option>
                                    <option value="123hj01">123hj01</option>
                                    <option value="124hk01">124hk01</option>
                                </select>
                                @error('assur_voit')
                                <span class="invalid-feedback">
                                    <strong>$message</strong>
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
