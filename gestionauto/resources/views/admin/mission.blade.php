
@extends('../admins/layouts')
@section('content')
@section('grand-text','gestion des missions')
@section('grands','Tableau de Bord')
@section('petit-text','Mission')


<div class="container-fluid">
    <div class="box">

        <div class="box-header with-border">
            <div class="pull-right">

                <div class="btn-group pull-right" style="margin-right: 10px">
                    <a class="btn btn-sm btn-twitter" title="Exporter"><i class="fa fa-download"></i><span class="hidden-xs"> Exporter</span></a>
                    <button type="button" class="btn btn-sm btn-twitter dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/admin/jo/certifications?_export_=all" target="_blank">Tous</a></li>
                        <li><a href="/admin/jo/certifications?_export_=page%3A1" target="_blank">La page actuelle</a></li>
                        <li><a href="/admin/jo/certifications?_export_=selected%3A__rows__" target="_blank" class="export-selected">Les lignes sélectionnées</a></li>
                    </ul>
                </div>

                <div class="btn-group pull-right" style="margin-right: 10px">
                    <a href="{{ route('mission.create') }}" class="btn btn-sm btn-success" title="Nouveau">
                        <i class="fa fa-save"></i><span class="hidden-xs">&nbsp;&nbsp;Nouveau</span>
                    </a>
                </div>

            </div>
            <span>
                <a href="{{ route('mission.index') }}" class="btn btn-sm btn-primary grid-refresh" title="Rafraîchir"><i class="fa fa-refresh"></i><span class="hidden-xs"> Rafraîchir</span></a> <div class="btn-group" style="margin-right: 10px" data-toggle="buttons">
                    <label class="btn btn-sm btn-dropbox 5daed26c39e34-filter-btn " title="Filtre">
                        <input type="checkbox"><i class="fa fa-filter"></i><span class="hidden-xs">&nbsp;&nbsp;Filtre</span>
                    </label>

                </div>
            </span>
        </div>

        <div class="box-header with-border hide" id="filter-box">
            <form action="http://197.159.206.237/admin/jo/certifications" class="form-horizontal" pjax-container="" method="get">

                <div class="row">
                    <div class="col-md-12">
                        <div class="box-body">
                            <div class="fields-group">
                                <div class="form-group is-empty">
                                    <label class="col-sm-2 control-label"> Nom</label>
                                    <div class="col-sm-8">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-addon">
                                                <i class="fa fa-pencil"></i>
                                            </div>

                                            <input type="text" class="form-control name" placeholder="Nom" name="name" value="">
                                        </div>    </div>
                                    </div>
                                    <div class="form-group is-empty">
                                        <label class="col-sm-2 control-label"> Matricule</label>
                                        <div class="col-sm-8">
                                            <div class="input-group input-group-sm">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-pencil"></i>
                                                </div>

                                                <input type="text" class="form-control matricule" placeholder="Matricule" name="matricule" value="">
                                            </div>    </div>
                                        </div>
                                        <div class="form-group is-empty">
                                            <label class="col-sm-2 control-label"> Type</label>
                                            <div class="col-sm-8">
                                                <div class="input-group input-group-sm">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-pencil"></i>
                                                    </div>

                                                    <input type="text" class="form-control roles_id" placeholder="Type" name="roles[id]" value="">
                                                </div>    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-8">
                                            <div class="btn-group pull-left">
                                                <button class="btn btn-info submit btn-sm"><i class="fa fa-search"></i>&nbsp;&nbsp;Chercher</button>
                                            </div>
                                            <div class="btn-group pull-left " style="margin-left: 10px;">
                                                <a href="http://197.159.206.237/admin/jo/certifications" class="btn btn-default btn-sm"><i class="fa fa-undo"></i>&nbsp;&nbsp;Réinitialiser</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>id </th>
                                    <th>Nom de projet</th>
                                    <th>Le Chauffeur</th>
                                    <th>Montant</th>
                                    <th>Lieu Mission</th>
                                    <th>Le motif </th>


                                </tr>
                            </thead>

                            <tbody>
                              @foreach($mission as $missions)

                                                 <tr>
                                                     <td>{{$missions->id}}</td>
                                                     <td>{{$missions->name}}</td>
                                                     <td>{{$missions->chauffeurs}}</td>
                                                     <td>{{$missions->montantdepart}}</td>
                                                     <td>{{$missions->missionlieu}}</td>
                                                     <td>{{$missions->motif}}</td>
                                                     <td>
                                                     <a href="{{route('mission.show',$missions->id)}}">
                                                             <i class="fa fa-eye"></i>
                                                         </a>
                                                         <a href="{{route('mission.edit', $missions->id)}}">
                                                             <i class="fa fa-pencil"></i>
                                                         </a>


                                                         <a type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-default" title="Nouveau" >
                                                             <i class="fa fa-trash"></i>
                                                         </a>
                                                         </td>
                                                 </tr>

                                                 </tr>
                                             @endforeach

                            </tbody>
                        </table>

                    </div>
                    <div class="modal fade" id="modal-default">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>être vous sure ! </h3>
                                    </div>

                                    <div class="modal-footer">
                                        <a  class="btn btn-default pull-left" data-dismiss="modal">Annulation</button>
                                          <form action="{{route('mission.destroy',$missions)}}" method="post">
                                              @crsf
                                              @method('DELETE')

                                        <a type="button" class="btn btn-primary">Supprimer</a>
                                          </form>
                                    </div>

                            <!-- /.modal-dialog -->
                        </div>
                        </div>
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




            @stop
