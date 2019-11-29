
@extends('../admins/layouts')
@section('content')
@section('grand-text','Gestion des Opérateurs')
@section('grands','Tableau de Bord')
@section('petit-text','Opérateur')
<div class="col-md-12">
    <div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Editer</h3>

        <div class="box-tools">
            
        </div>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form action="{{route('personnel.update',['personnels'=> $personnels])}}" method="POST" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data" pjax-container="">
            @csrf
            @method('PATCH')
           

           

            <div class="form-group">


    
                </div>
                <div class="form-group">
                    <label class="col-sm-2  control-label"></label>
                    <div class="col-sm-8">
                        <hr><h3 class="text-center">-- Profile --</h3>
                    </div>
                </div>


 <div class="form-group">

    <label for="name" class="col-sm-2  control-label">Nom</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="name" name="name" value="{{$personnels->name}}" class="form-control name">

            
        </div>

        
    </div>
</div>
 <div class="form-group  ">

    <label for="prenom" class="col-sm-2  control-label">Prénoms</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="prenom" name="prenom" value="{{$personnels->prenom}}" class="form-control @error('prenom') is-invalid @enderror" placeholder="Entrée Prénoms">

            
        </div>

        @error('prenom')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
        @enderror
    </div>
</div>


<div class="form-group  ">

    <label for="prenom" class="col-sm-2  control-label">Email </label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="email" id="prenom" name="email" value="{{$personnels->email}}" class="form-control @error('prenom') is-invalid @enderror" placeholder="Entrée Prénoms">

            
        </div>

        @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
        @enderror
    </div>
</div>
   <div class="form-group">

</div>
   <div class="form-group">

    <label for="fonction" class="col-sm-2  control-label">Fonction</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="fonction" name="fonction" value="{{$personnels->fonction}}" class="form-control matricule" placeholder="Entrée Fonction">

            
        </div>

        
    </div>
</div>
    <div class="form-group  ">

    <label for="telephone" class="col-sm-2  control-label">Numero de telephone</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="telephone" name="telephone" value="{{$personnels->telephone}}" class="form-control phone" placeholder="Entrée Numero de telephone">

            
        </div>

        
    </div>
</div>

  
    <div class="form-group">


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