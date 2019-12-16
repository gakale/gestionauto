
@extends('../admins/layouts')
@section('content')
@section('grand-text','gestion des courses')
@section('grands','Tableau de Bord')
@section('petit-text','course')
<div class="container-fluid">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Nouvelle Course</h3>

                <div class="box-tools">
                    <div class="btn-group pull-right" style="margin-right: 5px">
                        <a href="{{ route('chauffeur.index') }}" class="btn btn-sm btn-default" title="Liste"><i class="fa fa-list"></i><span class="hidden-xs">&nbsp;Liste</span></a>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{route('chauffeur.store')}}" method="POST" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data" pjax-container="">
                @csrf
                <div class="box-body">

                    <div class="fields-group">

                            <div class="form-group   is-empty">

                                    <label for="name" class="col-sm-2  control-label">Nom Chauffeur</label>

                                    <div class="col-sm-8">


                                        <div class="input-group">

                                            <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                            <input type="text" id="name" name="name"  class="form-control password" placeholder="Entrée Le Motif de la course">


                                        </div>


                                    </div>
                                </div>


                        <div class="form-group   is-empty">

                            <label for="prenom" class="col-sm-2  control-label">Prenom Chauffeur</label>

                            <div class="col-sm-8">


                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>

                                    <input type="text" id="prenom" name="prenom" class="form-control password" placeholder="Entrée Montant de Départ">


                                </div>


                            </div>
                        </div>

                        <div class="form-group   is-empty">

                                <label for="fonction" class="col-sm-2  control-label">Fonction</label>

                                <div class="col-sm-8">


                                    <div class="input-group">

                                        <span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>

                                        <input type="text" id="fonction" name="fonction"  class="form-control password" placeholder="Entrée Montant Resté">


                                    </div>


                                </div>
                            </div>


                            <div class="form-group   is-empty">

                                    <label for="adresse" class="col-sm-2  control-label">Adresse</label>

                                    <div class="col-sm-8">


                                        <div class="input-group">

                                            <span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>

                                            <input type="text" id="adresse" name="adresse"  class="form-control password" placeholder="Entrée Montant Total">


                                        </div>


                                    </div>
                                </div>


                                    <div class="form-group   is-empty">

                                        <label for="telephone" class="col-sm-2  control-label">Téléphone</label>

                                        <div class="col-sm-8">


                                            <div class="input-group">

                                                <span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>

                                                <input type="text" id="telephone" name="telephone" class="form-control password" placeholder="Entrée Lieu de La course">


                                            </div>


                                        </div>
                                    </div> 



                                        <div class="form-group   is-empty">

                                                <label for="email" class="col-sm-2  control-label">Votre email</label>

                                                <div class="col-sm-8">


                                                    <div class="input-group">

                                                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>

                                                        <input type="text" id="email" name="email"  class="form-control password" placeholder="Entrée votre mail">


                                                    </div>


                                                </div>
                                            </div>



                                            <div class="form-group   is-empty">

                                                    <label for="cni" class="col-sm-2  control-label">N° CNI</label>

                                                    <div class="col-sm-8">


                                                        <div class="input-group">

                                                            <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                                            <input type="text" id="cni" name="cni" value="" class="form-control password" placeholder="Entrée cni">


                                                        </div>


                                                    </div>
                                                </div>



                                                <div class="form-group   is-empty">

                                                        <label for="typepermis" class="col-sm-2  control-label">Type de permis</label>

                                                        <div class="col-sm-8">


                                                            <div class="input-group">

                                                                <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                                                <select id="typepermis" name="typepermis[]"  class="form-control password select2" placeholder="Entrée Heure de Départ" multiple="multiple">

                                                                            <option value="Permis A1">Permis A1</option>
                                                                            <option value="Permis A2">Permis A2</option>

                                                                            <option value="Permis A">Permis A</option>

                                                                            <option value="Permis B">Permis B</option>

                                                                </select>


                                                            </div>


                                                        </div>
                                                    </div>

                                                <div class="form-group   is-empty">

                                                    <label for="date" class="col-sm-2  control-label">La Date </label>

                                                    <div class="col-sm-8">


                                                        <div class="input-group">

                                                            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>

                                                            <input type="date" id="date" name="date" class="form-control password" placeholder="Entrée date">


                                                        </div>


                                                    </div>
                                                </div>



                            </div>

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
            </div>
        </div>
        @stop
