
@extends('../admins/layouts')
@section('content')
@section('grand-text','Gestion des Assurances')
@section('grands','Tableau de Bord')
@section('petit-text','Assurance')
<div class="col-md-12"><div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Editer</h3>
        <div class="box-tools">  
        </div>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form action="{{ route('assurance.update',['assurances'=> $assurances]) }}" method="POST" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data" pjax-container="">
        @csrf
        @method('PATCH')
           
            <div class="form-group">
                <label class="col-sm-2  control-label"></label>
                <div class="col-sm-8">
                    <h3 class="text-center">-- Assurance --</h3>
                </div>
            </div>


            <div class="form-group">
            </div>


            <div class="form-group">
                <label for="email" class="col-sm-2  control-label">Date d'abonnement</label>
                <div class="col-sm-8">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
                        <input type="date" id="email" name="date" value="{{$assurances->date}}" class="form-control @error('date') is-invalid @enderror" placeholder="Entrez la date d'abonnement">
                    </div>
                    @error('date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>



            <div class="form-group  ">
                <label for="login" class="col-sm-2  control-label">Date d'expiration</label>
                <div class="col-sm-8">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                        <input type="date" id="login" name="expiration" value="{{$assurances->expiration}}" class="form-control etablissement @error('expiration') is-invalid @enderror" placeholder="Entrez Le type de panne">           
                    </div>
                    @error('expiration')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            <div class="form-group">
                <label for="password" class="col-sm-2  control-label">Date de rappel</label>
                <div class="col-sm-8">                
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                        <input type="date" id="password" name="rappele" value="{{$assurances->rappele}}" class="form-control  @error('rappele') is-invalid @enderror" placeholder="Entrée Mot de passe">
                    </div>
                    @error('rappele')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>  
            </div>


            <div class="form-group">   
            </div>


            <div class="form-group">
                <label for="role" class="col-sm-2  control-label">Maison d'assurance</label>
                <div class="col-sm-8">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                        <input type="text" id="password" name="maison" value="{{$assurances->maison}}" class="form-control  @error('maison') is-invalid @enderror" placeholder="Entrée Mot de passe">
                    </div>
                    @error('maison')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            <div class="form-group">
                <label for="name" class="col-sm-2  control-label">Chauffeur conserné</label>
                <div class="col-sm-8">
                    <select class="form-control select2 @error('assur_voit') is-invalid @enderror" style="width: 100%" name="assur_voit" value="{{$assurances->assur_voit}}" tabindex="-1" aria-hidden="true">
                        <option value="123hk01">123hk01</option>
                        <option value="123hj01">123hj01</option>
                        <option value="124hk01">124hk01</option>
                    </select>
                    @error('assur_voit')
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