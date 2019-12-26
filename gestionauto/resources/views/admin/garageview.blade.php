@extends('../admins/layouts')
@section('content')
@section('grand-text','Gestion des Garages')
@section('grands','Tableau de Bord')
@section('petit-text','Garage')

<div class="col-md-12">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Détail</h3>
            <div class="box-tools">
                <div class="btn-group pull-right" style="margin-right: 5px">
                    <a data-toggle="modal" data-target="#modal-delete" class="btn btn-sm btn-danger" title="Supprimer">
                        <i class="fa fa-trash"></i><span class="hidden-xs">  Supprimer</span>
                    </a>
                </div>
                <div class="btn-group pull-right" style="margin-right: 5px">
                    <a href="{{route('garage.edit', $garages->id)}}" class="btn btn-sm btn-primary" title="Editer">
                        <i class="fa fa-edit"></i><span class="hidden-xs"> Editer</span>
                    </a>
                </div> 
                <div class="btn-group pull-right" style="margin-right: 5px">
                    <a href="{{route('garage.index')}}" class="btn btn-sm btn-default" title="Liste">
                        <i class="fa fa-list"></i><span class="hidden-xs"> Liste</span>
                    </a>
                </div>
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
                                            <form action="{{route('garage.destroy',$garages->id)}}" class="form-group" method="post">
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


        
   
    <!-- /.box-header -->
    <!-- form start -->
    <div class="form-horizontal">
        <div class="box-body">
            <div class="fields-group">

                <div class="form-group ">
                    <label class="col-sm-2 control-label">ID</label>
                    <div class="col-sm-8">
                        <div class="box box-solid box-default no-margin box-show">
                            <!-- /.box-header -->
                            <div class="box-body">
                                 {{$garages->id}}&nbsp;
                            </div>               
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>


                <div class="form-group ">
                    <label class="col-sm-2 control-label">Nom du garage</label>
                    <div class="col-sm-8">
                        <div class="box box-solid box-default no-margin box-show">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <span class="label label-primary">{{$garages->name}}</span>&nbsp;
                            </div>
                            <!-- /.box-body -->
                        </div>
                     </div>
                </div>


                <div class="form-group ">
                    <label class="col-sm-2 control-label">Localisation</label>
                    <div class="col-sm-8">
                        <div class="box box-solid box-default no-margin box-show">
                            <!-- /.box-header -->
                            <div class="box-body">
                                {{$garages->localisation}}&nbsp;
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>


                <div class="form-group ">
                    <label class="col-sm-2 control-label">Nom maître entretien</label>
                    <div class="col-sm-8">
                        <div class="box box-solid box-default no-margin box-show">
                            <!-- /.box-header -->
                            <div class="box-body">
                                {{$garages->nommaitre}}
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>


                <div class="form-group ">
                    <label class="col-sm-2 control-label">Contact maître entretien</label>
                    <div class="col-sm-8">
                        <div class="box box-solid box-default no-margin box-show">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <span class="label label-primary">{{$garages->contactmaitre}}</span>&nbsp;
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>


                <div class="form-group ">
                    <label class="col-sm-2 control-label">Dépuis</label>
                    <div class="col-sm-8">
                        <div class="box box-solid box-default no-margin box-show">
                            <!-- /.box-header -->
                            <div class="box-body">
                                {{$garages->depuis}}&nbsp;
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>


                <div class="form-group ">
                    <label class="col-sm-2 control-label">Contact du garage</label>
                    <div class="col-sm-8">
                        <div class="box box-solid box-default no-margin box-show">
                            <!-- /.box-header -->
                            <div class="box-body">
                                  {{$garages->numero}}&nbsp;
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>


                <div class="form-group ">
                    <label class="col-sm-2 control-label">E-mail du garage</label>
                    <div class="col-sm-8">
                        <div class="box box-solid box-default no-margin box-show">
                            <!-- /.box-header -->
                            <div class="box-body">
                                  {{$garages->email}}&nbsp;
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>


                <div class="form-group ">
                    <label class="col-sm-2 control-label">Date d'ajout</label>
                    <div class="col-sm-8">
                        <div class="box box-solid box-default no-margin box-show">
                            <!-- /.box-header -->
                            <div class="box-body">
                                {{$garages->created_at}}&nbsp;
                            </div>
                                <!-- /.box-body -->
                        </div>
                    </div>
                </div>


                <div class="form-group ">
                    <label class="col-sm-2 control-label">Dernière Mise à Jour</label>
                    <div class="col-sm-8">
                         <div class="box box-solid box-default no-margin box-show">
                            <!-- /.box-header -->
                            <div class="box-body">
                                  {{$garages->updated_at}}&nbsp;
                             </div>
                                <!-- /.box-body -->
                        </div>
                    </div>
                </div>

            </div>
        <!-- /.box-body -->
        </div>
    </div>
</div>
</div>


@stop    
