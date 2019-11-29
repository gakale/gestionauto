
@extends('../admins/layouts')
@section('content')
@section('grand-text','Gestion des Opérateurs')
@section('grands','Tableau de Bord')
@section('petit-text','Opérateur')
<div class="col-md-12"><div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Editer</h3>

        <div class="box-tools">
            
        </div>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form action="{{route('user.update',['user'=> $user])}}" method="POST" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data" pjax-container="">
            @csrf
            @method('PATCH')
           

            <div class="form-group">
                <label class="col-sm-2  control-label"></label>
                <div class="col-sm-8">
                    <h3 class="text-center">-- Accès --</h3>
                </div>
            </div>
            <div class="form-group">


            </div>
    <div class="form-group">

      <label for="email" class="col-sm-2  control-label">Email</label>

     <div class="col-sm-8">

        
        <div class="input-group">

            <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
            
            <input type="email" id="email" name="email" value="{{$user->email}}" class="form-control @error('email') is-invalid @enderror" placeholder="Entrée Email">

        </div>

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
        @enderror
        
    </div>

</div>

<div class="form-group  ">

    <label for="login" class="col-sm-2  control-label">login</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="login" name="login" value="{{$user->login}}" class="form-control etablissement @error('login') is-invalid @enderror" placeholder="Entrée Etablissement">

            
        </div>
         @error('login')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
        @enderror
        
    </div>
</div>
<div class="form-group">

    <label for="password" class="col-sm-2  control-label">Mot de passe</label>

            <div class="col-sm-8">

                
                <div class="input-group">

                            <span class="input-group-addon"><i class="fa fa-eye-slash fa-fw"></i></span>
                    
                             <input type="password" id="password" name="password" value="{{$user->password}}" class="form-control password @error('password') is-invalid @enderror" placeholder="Entrée Mot de passe">

                </div>

             @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
             </div>  
</div>

 <div class="form-group">


    
</div>
  <div class="form-group">
    <label class="col-sm-2  control-label"></label>
    <div class="col-sm-8">
        <hr><h3 class="text-center">-- Profile --</h3>
    </div>
</div>
 <div class="form-group">

    <label for="role" class="col-sm-2  control-label">Rôle</label>

    <div class="col-sm-8">

        
        <select class="form-control roles select2" style="width: 100%;" name="role" data-placeholder="Entrée Type Membre" data-value="12" tabindex="-1" aria-hidden="true">
                            <option value="Utilisateur">Utilisateur</option>
                            <option value="Administrateur">Administrateur</option>
                            
         </select>

      
    </div>
</div>

 <div class="form-group">

    <label for="name" class="col-sm-2  control-label">Nom</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="name" name="name" value="{{$user->name}}" class="form-control name" placeholder="Entrée Nom">

            
        </div>

        
    </div>
</div>
 <div class="form-group  ">

    <label for="prenom" class="col-sm-2  control-label">Prénoms</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="prenom" name="prenom" value="{{$user->prenom}}" class="form-control @error('prenom') is-invalid @enderror" placeholder="Entrée Prénoms">

            
        </div>

        @error('prenom')
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
            
            <input type="text" id="fonction" name="fonction" value="{{$user->fonction}}" class="form-control matricule" placeholder="Entrée Fonction">

            
        </div>

        
    </div>
</div>
    <div class="form-group  ">

    <label for="telephone" class="col-sm-2  control-label">Numero de telephone</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="text" id="telephone" name="telephone" value="{{$user->telephone}}" class="form-control phone" placeholder="Entrée Numero de telephone">

            
        </div>

        
    </div>
</div>

   <div class="form-group  ">

    <label for="date" class="col-sm-2  control-label">date ajout</label>

    <div class="col-sm-8">

        
        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
            
            <input type="date" id="date" name="date" value="{{$user->date}}" class="form-control date" placeholder="Entrée date">

            
        </div>

        
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