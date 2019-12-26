
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
    <a href="{{route('personnel.edit',$personnels->id)}}" class="btn btn-sm btn-primary" title="Editer">
        <i class="fa fa-edit"></i><span class="hidden-xs"> Editer</span>
    </a>
</div><div class="btn-group pull-right" style="margin-right: 5px">
    <a href="{{route('personnel.index')}}" class="btn btn-sm btn-default" title="Liste">
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
                 {{$personnels->id}}&nbsp;
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
                      {{$personnels->name}} &nbsp;
            </div>
                            <!-- /.box-body -->
        </div>
     </div>
</div>
                                    <div class="form-group ">
    <label class="col-sm-2 control-label">Prenom </label>
    <div class="col-sm-8">
                <div class="box box-solid box-default no-margin box-show">
            <!-- /.box-header -->
            <div class="box-body">
                                    {{$personnels->prenom}}&nbsp;
                            </div><!-- /.box-body -->
        </div>
            </div>
</div>
                                    <div class="form-group ">
    <label class="col-sm-2 control-label">Email </label>
    <div class="col-sm-8">
                <div class="box box-solid box-default no-margin box-show">
            <!-- /.box-header -->
            <div class="box-body">
                                    {{$personnels->email}}
    </div>
    <!-- /.box-body -->
        </div>
         </div>
</div>
                                    <div class="form-group ">
    <label class="col-sm-2 control-label">Focntion</label>
    <div class="col-sm-8">
                <div class="box box-solid box-default no-margin box-show">
            <!-- /.box-header -->
            <div class="box-body">
                             <span class="label label-primary">{{$personnels->fonction}}</span>&nbsp
             </div>
                            <!-- /.box-body -->
        </div>
            </div>
</div>
                                    <div class="form-group ">
    <label class="col-sm-2 control-label">Télephone </label>
    <div class="col-sm-8">
                <div class="box box-solid box-default no-margin box-show">
            <!-- /.box-header -->
            <div class="box-body">
                                      {{$personnels->telephone}}&nbsp;
                            </div><!-- /.box-body -->
        </div>
            </div>
</div>
 <div class="form-group ">
    <label class="col-sm-2 control-label">Fonction</label>
    <div class="col-sm-8">
         <div class="box box-solid box-default no-margin box-show">
            <!-- /.box-header -->
            <div class="box-body">
                  {{$personnels->fonction}}&nbsp;
             </div>
                <!-- /.box-body -->
        </div>
    </div>
</div>
 </div>





<div class="form-group ">
    <label class="col-sm-2 control-label">Date d'ajout </label>
    <div class="col-sm-8">
         <div class="box box-solid box-default no-margin box-show">
            <!-- /.box-header -->
            <div class="box-body">
                  {{$personnels->created_at}}&nbsp;
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
                  {{$personnels->updated_at}}&nbsp;
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


