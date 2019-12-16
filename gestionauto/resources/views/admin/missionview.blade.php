
@extends('../admins/layouts')
@section('content')
    @section('grand-text','Gestion des Opérateurs')
    @section('grands','Tableau de Bord')
    @section('petit-text','Opérateur')

    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Détail</h3>

                <div class="box-tools">
                    <div class="btn-group pull-right" style="margin-right: 5px">
                        <a href="javascript:void(0);" class="btn btn-sm btn-danger 5dcbe63be40ce-delete" title="Supprimer">
                            <i class="fa fa-trash"></i><span class="hidden-xs">  Supprimer</span>
                        </a>
                    </div><div class="btn-group pull-right" style="margin-right: 5px">
                        <a href="{{route('mission.edit',$mission->id)}}" class="btn btn-sm btn-primary" title="Editer">
                            <i class="fa fa-edit"></i><span class="hidden-xs"> Editer</span>
                        </a>
                    </div><div class="btn-group pull-right" style="margin-right: 5px">
                        <a href="{{route('mission.index')}}" class="btn btn-sm btn-default" title="Liste">
                            <i class="fa fa-list"></i><span class="hidden-xs"> Liste</span>
                        </a>
                    </div>

                </div>
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
                                        {{$mission->id}}&nbsp;
                                    </div>

                                    <!-- /.box-body -->
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="col-sm-2 control-label">Nom Personnel</label>
                            <div class="col-sm-8">
                                <div class="box box-solid box-default no-margin box-show">
                                    <!-- /.box-header -->

                                        @foreach ($tables as $table)


                                            <div class="box-body">

                                                <span> {{$table}}</span>
                                                &nbsp;
                                            </div>
                                            <!-- /.box-body -->
                                        @endforeach

                                    <!-- /.box-body -->
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label class="col-sm-2 control-label">Liste des chauffeurs</label>
                            <div class="col-sm-8">
                                <div class="box box-solid box-default no-margin box-show">
                                    <!-- /.box-header -->
                                    @foreach ($chauffeurs as $chauffeur)


                                        <div class="box-body">

                                            <span> {{$chauffeur}}</span>
                                            &nbsp;
                                        </div>
                                        <!-- /.box-body -->
                                    @endforeach
                                    <!-- /.box-body -->
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="col-sm-2 control-label">Montant de départ</label>
                            <div class="col-sm-8">
                                <div class="box box-solid box-default no-margin box-show">
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        {{$mission->montantdepart}}
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="col-sm-2 control-label">Lieu de la Mission</label>
                            <div class="col-sm-8">
                                <div class="box box-solid box-default no-margin box-show">
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <span class="label label-primary">{{$mission->missionlieu}}</span>&nbsp
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="col-sm-2 control-label">Le motif  </label>
                            <div class="col-sm-8">
                                <div class="box box-solid box-default no-margin box-show">
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        {{$mission->motif}}&nbsp;
                                    </div><!-- /.box-body -->
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="col-sm-2 control-label">la date </label>
                            <div class="col-sm-8">
                                <div class="box box-solid box-default no-margin box-show">
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        {{$mission->date}}&nbsp;
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group ">
                        <label class="col-sm-2 control-label">Lieu Départ</label>
                        <div class="col-sm-8">
                            <div class="box box-solid box-default no-margin box-show">
                                <!-- /.box-header -->
                                <div class="box-body">
                                    {{$mission->lieudepart}}&nbsp;
                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                    </div>




                    <div class="form-group ">
                        <label class="col-sm-2 control-label">Lieu Arrivé</label>
                        <div class="col-sm-8">
                            <div class="box box-solid box-default no-margin box-show">
                                <!-- /.box-header -->



                                    <div class="box-body">

                                        <span> {{$mission->lieuarrive}}</span>
                                        &nbsp;
                                    </div>
                                    <!-- /.box-body -->

                            </div>
                        </div>
                    </div>


                    <div class="form-group ">
                        <label class="col-sm-2 control-label">Heur de  depart </label>
                        <div class="col-sm-8">
                            <div class="box box-solid box-default no-margin box-show">
                                <!-- /.box-header -->
                                <div class="box-body">
                                    {{$mission->heurdepart}}&nbsp;
                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                    </div>


                    <div class="form-group ">
                        <label class="col-sm-2 control-label">liste des Vehicules </label>
                        <div class="col-sm-8">
                            <div class="box box-solid box-default no-margin box-show">
                                <!-- /.box-header -->
                                @foreach ($vehicule as $vehicules)


                                    <div class="box-body">

                                        <span> {{$vehicules}}</span>
                                        &nbsp;
                                    </div>
                                    <!-- /.box-body -->
                                @endforeach
                                <!-- /.box-body -->
                            </div>
                        </div>
                    </div>


                    <div class="form-group ">
                        <label class="col-sm-2 control-label">Caburant Avant depart</label>
                        <div class="col-sm-8">
                            <div class="box box-solid box-default no-margin box-show">
                                <!-- /.box-header -->
                                <div class="box-body">
                                    {{$mission->carbuavantdepar}}&nbsp;
                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                    </div>


                    <div class="form-group ">
                        <label class="col-sm-2 control-label">Kilometrage avant depart </label>
                        <div class="col-sm-8">
                            <div class="box box-solid box-default no-margin box-show">
                                <!-- /.box-header -->
                                <div class="box-body">
                                    {{$mission->killoavantdepart}}&nbsp;
                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                    </div>



                    <div class="form-group ">
                        <label class="col-sm-2 control-label">A crée </label>
                        <div class="col-sm-8">
                            <div class="box box-solid box-default no-margin box-show">
                                <!-- /.box-header -->
                                <div class="box-body">
                                    {{$mission->created_at}}&nbsp;
                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                    </div>


                    <div class="form-group ">
                        <label class="col-sm-2 control-label">Mis à ajour </label>
                        <div class="col-sm-8">
                            <div class="box box-solid box-default no-margin box-show">
                                <!-- /.box-header -->
                                <div class="box-body">
                                    {{$mission->updated_at}}&nbsp;
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

@stop
