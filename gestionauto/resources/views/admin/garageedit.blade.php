
@extends('../admins/layouts')
@section('content')
@section('grand-text','Gestion des Garages')
@section('grands','Tableau de Bord')
@section('petit-text','Garage')
<div class="col-md-12"><div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Editer</h3>
        <div class="box-tools">  
        </div>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form action="{{ route('garage.update',['garages'=> $garages]) }}" method="POST" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data" pjax-container="">
        @csrf
        @method('PATCH')
           
            <div class="form-group">
                <label class="col-sm-2  control-label"></label>
                <div class="col-sm-8">
                    <h3 class="text-center">-- Garage --</h3>
                </div>
            </div>


            <div class="form-group">
            </div>


            <div class="form-group">
                <label for="email" class="col-sm-2  control-label">Nom du garage</label>
                <div class="col-sm-8">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
                        <input type="text" id="email" name="name" value="{{$garages->name}}" class="form-control @error('name') is-invalid @enderror" placeholder="Entrez le nom du garage">
                    </div>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>



            <div class="form-group  ">
                <label for="login" class="col-sm-2  control-label">Localisation</label>
                <div class="col-sm-8">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                        <input type="text" id="login" name="localisation" value="{{$garages->localisation}}" class="form-control etablissement @error('localisation') is-invalid @enderror" placeholder="Entrez la localisation du garage">           
                    </div>
                    @error('localisation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            <div class="form-group">
                <label for="password" class="col-sm-2  control-label">Nom maître entretien</label>
                <div class="col-sm-8">                
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                        <input type="text" id="password" name="nommaitre" value="{{$garages->nommaitre}}" class="form-control  @error('nommaitre') is-invalid @enderror" placeholder="Entrée le nom du maitre entretien">
                    </div>
                    @error('nommaitre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>  
            </div>


            <div class="form-group">   
            </div>


            <div class="form-group">
                <label for="role" class="col-sm-2  control-label">Contact maître entretien</label>
                <div class="col-sm-8">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                        <input type="text" id="password" name="contactmaitre" value="{{$garages->contactmaitre}}" class="form-control  @error('contactmaitre') is-invalid @enderror" placeholder="Entrée le contact du maître entretien">
                    </div>
                    @error('contactmaitre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            <div class="form-group">
                <label for="name" class="col-sm-2  control-label">Dépuis</label>
                <div class="col-sm-8">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                        <input type="date" id="password" name="depuis" value="{{$garages->depuis}}" class="form-control  @error('depuis') is-invalid @enderror" placeholder="Entrée la date de partenariat">
                    </div>
                    @error('depuis')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            <div class="form-group">
                <label for="name" class="col-sm-2  control-label">Contact du garage</label>
                <div class="col-sm-8">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                        <input type="text" id="password" name="numero" value="{{$garages->numero}}" class="form-control  @error('numero') is-invalid @enderror" placeholder="Entrée le contact du garage">
                    </div>
                    @error('numero')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            <div class="form-group">
                <label for="name" class="col-sm-2  control-label">E-mail du garage</label>
                <div class="col-sm-8">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                        <input type="email" id="password" name="email" value="{{$garages->email}}" class="form-control  @error('email') is-invalid @enderror" placeholder="Entrée le e-mail du garage">
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
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