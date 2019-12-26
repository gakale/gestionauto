@extends('../admins/layouts')
@section('content')
@section('grand-text','Gestion des Fournisseurs')
@section('grands','Tableau de Bord')
@section('petit-text','Fournisseur')

<div class="col-md-12">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Détail</h3>
            <div class="box-tools">

                <div class="btn-group pull-right" style="margin-right: 5px">
                    <a href="javascript:void(0);" class="btn btn-sm btn-danger 5dcbe63be40ce-delete" title="Supprimer">
                        <i class="fa fa-trash"></i><span class="hidden-xs">  Supprimer</span>
                    </a>
                </div>

                <div class="btn-group pull-right" style="margin-right: 5px">
                    <a href="{{route('user.edit',$user->id)}}" class="btn btn-sm btn-primary" title="Editer">
                        <i class="fa fa-edit"></i><span class="hidden-xs"> Editer</span>
                    </a>
                </div>

                <div class="btn-group pull-right" style="margin-right: 5px">
                    <a href="{{route('user.index')}}" class="btn btn-sm btn-default" title="Liste">
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
                                    {{$fournisseurs->id}}&nbsp;
                                </div>

                                <!-- /.box-body -->
                            </div>
                        </div>
                    </div>


                    <div class="form-group ">
                        <label class="col-sm-2 control-label">Nom du Fournisseur</label>
                        <div class="col-sm-8">
                            <div class="box box-solid box-default no-margin box-show">
                                <!-- /.box-header -->
                                <div class="box-body">
                                    {{$fournisseurs->name}} &nbsp;
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
                                    {{$fournisseurs->localisation}}&nbsp;
                                </div><!-- /.box-body -->
                            </div>
                        </div>
                    </div>


                    <div class="form-group ">
                        <label class="col-sm-2 control-label">Téléphone</label>
                        <div class="col-sm-8">
                            <div class="box box-solid box-default no-margin box-show">
                            <!-- /.box-header -->
                                <div class="box-body">
                                    {{$fournisseurs->telephone}}
                                 </div>
                            <!-- /.box-body -->
                            </div>
                        </div>
                    </div>


                    <div class="form-group ">
                        <label class="col-sm-2 control-label">E-mail</label>
                        <div class="col-sm-8">
                            <div class="box box-solid box-default no-margin box-show">
                            <!-- /.box-header -->
                                <div class="box-body">
                                    <span class="label label-primary">{{$fournisseurs->email}}</span>&nbsp
                                </div>
                            <!-- /.box-body -->
                            </div>
                        </div>
                    </div>


                    <div class="form-group ">
                        <label class="col-sm-2 control-label">Carte d'identité CNI </label>
                        <div class="col-sm-8">
                            <div class="box box-solid box-default no-margin box-show">
                                <!-- /.box-header -->
                                <div class="box-body">
                                      {{$fournisseurs->cni}}&nbsp;
                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                    </div>


                    <div class="form-group ">
                        <label class="col-sm-2 control-label">Fourniseur depuis</label>
                        <div class="col-sm-8">
                            <div class="box box-solid box-default no-margin box-show">
                                <!-- /.box-header -->
                                <div class="box-body">
                                    {{$fournisseurs->depuis}}&nbsp;
                                </div>
                                    <!-- /.box-body -->
                            </div>
                        </div>
                    </div>
                </div>


                <div class="form-group ">
                    <label class="col-sm-2 control-label">Date d'ajout</label>
                    <div class="col-sm-8">
                        <div class="box box-solid box-default no-margin box-show">
                            <!-- /.box-header -->
                            <div class="box-body">
                                {{$fournisseurs->created_at}}&nbsp;
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
                                {{$fournisseurs->updated_at}}&nbsp;
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