
@extends('../admins/layouts')
@section('content')
@section('grand-text','Gestion des Maintenances')
@section('grands','Tableau de Bord')
@section('petit-text','Maintenance')
<div class="col-md-12"><div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Editer</h3>
        <div class="box-tools">  
        </div>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form action="{{route('maintenance.update',['maintenances'=> $maintenances])}}" method="POST" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data" pjax-container="">
        @csrf
        @method('PATCH')
           
            <div class="form-group">
                <label class="col-sm-2  control-label"></label>
                <div class="col-sm-8">
                    <h3 class="text-center">-- Maintenance --</h3>
                </div>
            </div>


            <div class="form-group">
            </div>


            <div class="form-group">
                <label for="email" class="col-sm-2  control-label">Imatriculation</label>
                <div class="col-sm-8">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
                        <input type="text" id="email" name="imatriculation" value="{{$maintenances->imatriculation}}" class="form-control @error('imatriculation') is-invalid @enderror" placeholder="Entrez le numéro d'imatriculation du Véhicule">
                    </div>
                    @error('imatriculation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>



            <div class="form-group  ">
                <label for="login" class="col-sm-2  control-label">Type de panne</label>
                <div class="col-sm-8">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                        <input type="text" id="login" name="action" value="{{$maintenances->action}}" class="form-control etablissement @error('action') is-invalid @enderror" placeholder="Entrez Le type de panne">           
                    </div>
                    @error('action')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            <div class="form-group">
                <label for="password" class="col-sm-2  control-label">Prix de l'action</label>
                <div class="col-sm-8">                
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                        <input type="text" id="password" name="prixaction" value="{{$maintenances->prixaction}}" class="form-control  @error('prixaction') is-invalid @enderror" placeholder="Entrée Mot de passe">
                    </div>
                    @error('prixaction')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>  
            </div>


            <div class="form-group">   
            </div>


            <div class="form-group">
                <label for="role" class="col-sm-2  control-label">Garage de maintenance</label>
                <div class="col-sm-8">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                        <input type="text" id="password" name="garage" value="{{$maintenances->garage}}" class="form-control  @error('garage') is-invalid @enderror" placeholder="Entrée Mot de passe">
                    </div>
                    @error('garage')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            <div class="form-group">
                <label for="name" class="col-sm-2  control-label">Chauffeur conserné</label>
                <div class="col-sm-8">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                        <input type="text" id="name" name="panne_chauffeur" value="{{$maintenances->panne_chauffeur}}" class="form-control name" placeholder="Entrez le nom du chauffeur conserné">
                    </div>
                    @error('panne_chauffeur')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            <div class="form-group   is-empty">
                <label for="date" class="col-sm-2  control-label">Date</label>
                <div class="col-sm-8">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                        <input type="date" id="date" name="date" value="{{$maintenances->date}}" class="form-control matricule @error('date') is-invalid @enderror">
                    </div>
                    @error('date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>



    <div class="form-group  ">


    </div>

  
        <!-- /.box-body -->

    <div class="box-footer">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="btn-group pull-right">
                <button type="submit" class="btn btn-primary">Soumettre</button>
            </div>
            <div class="btn-group pull-left">
                <button type="reset" class="btn btn-warning">Réinitialiser</button>
            </div>
        </div>
    </div>

        
        <!-- /.box-footer -->
    </form>
</div>

</div>
@stop