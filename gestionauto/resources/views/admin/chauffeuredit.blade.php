
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
    <form action="{{route('chauffeurs.update',['chauffeurs'=> $chauffeurs])}}" method="POST" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data" pjax-container="">
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

      <label for="email" class="col-sm-2  control-label">Name</label>

     <div class="col-sm-8">


        <div class="input-group">

            <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>

            <input type="email" id="name" name="name" value="{{$chauffeur->name}}" class="form-control @error('email') is-invalid @enderror" placeholder="Entrée Email">

        </div>

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
        @enderror

    </div>

</div>



//

 <div class="form-group">

      <label for="email" class="col-sm-2  control-label">Prenom </label>

     <div class="col-sm-8">


        <div class="input-group">

            <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>

            <input type="prenom" id="prenom" name="prenom" value="{{$chauffeur->prenom}}" class="form-control @error('email') is-invalid @enderror" placeholder="Entrée prenom">

        </div>

        @error('prenom')
        <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
        @enderror

    </div>

</div>

//
 <div class="form-group">

      <label for="fonction" class="col-sm-2  control-label">Fonction</label>

     <div class="col-sm-8">


        <div class="input-group">

            <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>

            <input type="fonction" id="fonction" name="fonction" value="{{$chauffeur->fonction}}" class="form-control @error('email') is-invalid @enderror" placeholder="Entrée Email">

        </div>

        @error('fonction')
        <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
        </span>
        @enderror

    </div>

</div>


<div class="form-group  ">

    <label for="adresse" class="col-sm-2  control-label">Adresse </label>

    <div class="col-sm-8">


        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

            <input type="text" id="adresse" name="adresse" value="{{$chauffeur->adresse}}" class="form-control etablissement @error('adresse') is-invalid @enderror" placeholder="Entrée Etablissement">


        </div>
         @error('adresse')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
        @enderror

    </div>
</div>
<div class="form-group">

    <label for="email" class="col-sm-2  control-label">Email</label>

            <div class="col-sm-8">


                <div class="input-group">

                            <span class="input-group-addon"><i class="fa fa-eye-slash fa-fw"></i></span>

                             <input type="email" id="email" name="email" value="{{$chauffeur->email}}" class="form-control password @error('email') is-invalid @enderror" placeholder="Entrée Mot de passe">

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

    <label for="cni" class="col-sm-2  control-label">Cni</label>

    <div class="col-sm-8">


        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

            <input type="text" id="cni" name="cni" value="{{$chauffeur->cni}}" class="form-control name" placeholder="Entrée cni">


        </div>


    </div>
</div>
 <div class="form-group  ">

    <label for="permis" class="col-sm-2  control-label">Permis</label>

    <div class="col-sm-8">


        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

            <select  id="permis" name="permis" value="{{$chauffeur->permis}}" class="form-control @error('permis') is-invalid @enderror" placeholder="Entrée permis">

                <option>type</option>
                 <option>Numero</option>

            </select>


        </div>

        @error('permis')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
        @enderror
    </div>
</div>

   <div class="form-group">

</div>
   <div class="form-group">

    <label for="date" class="col-sm-2  control-label">date</label>

    <div class="col-sm-8">


        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

            <input type="date" id="date" name="date" value="{{$chauffeur->date}}" class="form-control date" placeholder="Entrée Fonction">


        </div>


    </div>
</div>
    <div class="form-group  ">

    <label for="telephone" class="col-sm-2  control-label">Numero de telephone</label>

    <div class="col-sm-8">


        <div class="input-group">

                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

            <input type="text" id="telephone" name="created_at" value="{{$chauffeur->created_at}}" class="form-control phone" placeholder="Entrée Numero de telephone">


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
