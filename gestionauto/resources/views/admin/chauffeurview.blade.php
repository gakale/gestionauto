
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
                        <a href="{{route('chauffeur.edit',$chauffeurs->id)}}" class="btn btn-sm btn-primary" title="Editer">
                            <i class="fa fa-edit"></i><span class="hidden-xs"> Editer</span>
                        </a>
                    </div><div class="btn-group pull-right" style="margin-right: 5px">
                        <a href="{{route('chauffeur.index')}}" class="btn btn-sm btn-default" title="Liste">
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
                                        {{$chauffeurs->id}}&nbsp;
                                    </div>

                                    <!-- /.box-body -->
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="col-sm-2 control-label">Nom d utilisateur</label>
                            <div class="col-sm-8">
                                <div class="box box-solid box-default no-margin box-show">
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        {{$chauffeurs->name}} &nbsp;
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label class="col-sm-2 control-label">Prenom</label>
                            <div class="col-sm-8">
                                <div class="box box-solid box-default no-margin box-show">
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        {{$chauffeurs->prenom}}&nbsp;
                                    </div><!-- /.box-body -->
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="col-sm-2 control-label">fonction</label>
                            <div class="col-sm-8">
                                <div class="box box-solid box-default no-margin box-show">
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        {{$chauffeurs->prenom}}
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="col-sm-2 control-label">Adresse</label>
                            <div class="col-sm-8">
                                <div class="box box-solid box-default no-margin box-show">
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <span class="label label-primary">{{$chauffeurs->adresse}}</span>&nbsp
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="col-sm-2 control-label">Email </label>
                            <div class="col-sm-8">
                                <div class="box box-solid box-default no-margin box-show">
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        {{$chauffeurs->email}}&nbsp;
                                    </div><!-- /.box-body -->
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="col-sm-2 control-label">Cni </label>
                            <div class="col-sm-8">
                                <div class="box box-solid box-default no-margin box-show">
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        {{$chauffeurs->cni}}&nbsp;
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group ">
                        <label class="col-sm-2 control-label">Télephone</label>
                        <div class="col-sm-8">
                            <div class="box box-solid box-default no-margin box-show">
                                <!-- /.box-header -->
                                <div class="box-body">
                                    {{$chauffeurs->permis}}&nbsp;
                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                    </div>




                    <div class="form-group ">
                        <label class="col-sm-2 control-label">Photo cni</label>
                        <div class="col-sm-8">
                            <div class="box box-solid box-default no-margin box-show">
                                <!-- /.box-header -->
                                {{-- @foreach ($tables as $table)


                                    <div class="box-body">

                                        <span> {{$table}}</span>
                                        &nbsp;
                                    </div>
                                    <!-- /.box-body -->
                                @endforeach --}}
                            </div>
                        </div>
                    </div>


                    <div class="form-group ">
                        <label class="col-sm-2 control-label">Date ajout </label>
                        <div class="col-sm-8">
                            <div class="box box-solid box-default no-margin box-show">
                                <!-- /.box-header -->
                                <div class="box-body">
                                    {{$chauffeurs->date}}&nbsp;
                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                    </div>


                    <div class="form-group ">
                        <label class="col-sm-2 control-label">Date d ajout </label>
                        <div class="col-sm-8">
                            <div class="box box-solid box-default no-margin box-show">
                                <!-- /.box-header -->
                                <div class="box-body">
                                    {{$chauffeurs->created_at}}&nbsp;
                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                    </div>


                    <div class="form-group ">
                        <label class="col-sm-2 control-label">Crée</label>
                        <div class="col-sm-8">
                            <div class="box box-solid box-default no-margin box-show">
                                <!-- /.box-header -->
                                <div class="box-body">
                                    {{$chauffeurs->created_at}}&nbsp;
                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                    </div>


                    <div class="form-group ">
                        <label class="col-sm-2 control-label">Mis à jour à</label>
                        <div class="col-sm-8">
                            <div class="box box-solid box-default no-margin box-show">
                                <!-- /.box-header -->
                                <div class="box-body">
                                    {{$chauffeurs->updated_at}}&nbsp;
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
