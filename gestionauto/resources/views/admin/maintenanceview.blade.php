@extends('../admins/layouts')
@section('content')
@section('grand-text','Gestion des Maintenances')
@section('grands','Tableau de Bord')
@section('petit-text','Maintenance')

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
                    <a href="{{route('maintenance.edit', $maintenances->id)}}" class="btn btn-sm btn-primary" title="Editer">
                        <i class="fa fa-edit"></i><span class="hidden-xs"> Editer</span>
                    </a>
                </div> 
                <div class="btn-group pull-right" style="margin-right: 5px">
                    <a href="{{route('maintenance.index')}}" class="btn btn-sm btn-default" title="Liste">
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
                                            <form action="{{route('maintenance.destroy',$maintenances->id)}}" class="form-group" method="post">
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
                                 {{$maintenances->id}}&nbsp;
                            </div>               
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>


                <div class="form-group ">
                    <label class="col-sm-2 control-label">Imatriculation</label>
                    <div class="col-sm-8">
                        <div class="box box-solid box-default no-margin box-show">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <span class="label label-primary">{{$maintenances->imatriculation}}</span>&nbsp;
                            </div>
                            <!-- /.box-body -->
                        </div>
                     </div>
                </div>


                <div class="form-group ">
                    <label class="col-sm-2 control-label">Type de panne </label>
                    <div class="col-sm-8">
                        <div class="box box-solid box-default no-margin box-show">
                            <!-- /.box-header -->
                            <div class="box-body">
                                {{$maintenances->action}}&nbsp;
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>


                <div class="form-group ">
                    <label class="col-sm-2 control-label">Prix de l'action </label>
                    <div class="col-sm-8">
                        <div class="box box-solid box-default no-margin box-show">
                            <!-- /.box-header -->
                            <div class="box-body">
                                {{$maintenances->prixaction}}
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>


                <div class="form-group ">
                    <label class="col-sm-2 control-label">Garage de maintenance</label>
                    <div class="col-sm-8">
                        <div class="box box-solid box-default no-margin box-show">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <span class="label label-primary">{{$maintenances->garage}}</span>&nbsp;
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>


                <div class="form-group ">
                    <label class="col-sm-2 control-label">Chauffeur conserné </label>
                    <div class="col-sm-8">
                        <div class="box box-solid box-default no-margin box-show">
                            <!-- /.box-header -->
                            <div class="box-body">
                                {{$maintenances->panne_chauffeur}}&nbsp;
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>


                <div class="form-group ">
                    <label class="col-sm-2 control-label">Date</label>
                    <div class="col-sm-8">
                        <div class="box box-solid box-default no-margin box-show">
                            <!-- /.box-header -->
                            <div class="box-body">
                                  {{$maintenances->date}}&nbsp;
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>


                <div class="form-group ">
                    <label class="col-sm-2 control-label">Date d'ajout </label>
                    <div class="col-sm-8">
                         <div class="box box-solid box-default no-margin box-show">
                            <!-- /.box-header -->
                            <div class="box-body">
                                  {{$maintenances->created_at}}&nbsp;
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
                                  {{$maintenances->updated_at}}&nbsp;
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
