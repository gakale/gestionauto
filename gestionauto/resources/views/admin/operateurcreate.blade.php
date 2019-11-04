
@extends('../admins/layouts')
@section('content')
@section('grand-text','gestion des Operation Create')
@section('grands','Tableau de Bord')
@section('petit-text','Operateur Create')
<div class="container-fluid">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Nouvelle Operateur</h3>

                <div class="box-tools">
                    <div class="btn-group pull-right" style="margin-right: 5px">
                        <a href="{{ route('user.index') }}" class="btn btn-sm btn-default" title="Liste"><i class="fa fa-list"></i><span class="hidden-xs">&nbsp;Liste</span></a>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('user.store') }}" method="POST" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data" pjax-container="">
                @csrf
                <div class="box-body">

                    <div class="fields-group">




                        <div class="form-group   is-empty">

                            <label for="name" class="col-sm-2  control-label">Nom de l Operateur</label>

                            <div class="col-sm-8">

                                <input class="form-control " style="width: 100%;" name="name" data-value="" tabindex="-1" aria-hidden="true" placeholder="Entrée Nom">

                            </div>
                        </div>


                          <div class="form-group   is-empty">

                            <label for="prenom" class="col-sm-2  control-label">Prenom d Operateur</label>

                            <div class="col-sm-8">

                                <input class="form-control " style="width: 100%;" name="prenom" data-value="" tabindex="-1" aria-hidden="true" placeholder="Entrée Prenom">
                                   


                            </div>
                        </div>


                        <div class="form-group   is-empty">

                            <label for="login" class="col-sm-2  control-label"> Login</label>

                            <div class="col-sm-8">
                                    <div class="input-group">
                                     <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                <input class="form-control" style="width: 100%;" name="login" data-value="" tabindex="-1" aria-hidden="true" placeholder="Entrée login">
                                </div>
                            </div>
                        </div>
                      

                        <div class="form-group   is-empty">

                            <label for="email" class="col-sm-2  control-label">Entrée Email</label>

                            <div class="col-sm-8">


                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>

                                    <input type="text" id="email" name="email" value="" class="form-control password" placeholder="Entrée Montant de Départ">


                                </div>


                            </div>
                        </div>


                        <div class="form-group   is-empty">

                            <label for="password" class="col-sm-2  control-label">Entrée password</label>

                            <div class="col-sm-8">


                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>

                                    <input type="password" id="password" name="password" value="" class="form-control password" placeholder="Entrée Montant de Départ">


                                </div>


                            </div>
                        </div>


                          <div class="form-group   is-empty">

                            <label for="fonction" class="col-sm-2  control-label">Entrée fonction</label>

                            <div class="col-sm-8">


                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>

                                    <input type="text" id="fonction" name="fonction" value="" class="form-control password" placeholder="Entrée Fonction">


                                </div>


                            </div>
                        </div>


                         <div class="form-group   is-empty">

                            <label for="telephone" class="col-sm-2  control-label">Entrée Téléphone</label>

                            <div class="col-sm-8">


                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>

                                    <input type="text" id="telephone" name="telephone" value="" class="form-control password" placeholder="Entrée  Téléphone">


                                </div>


                            </div>
                        </div>


                        
                         <div class="form-group   is-empty">

                            <label for="cni" class="col-sm-2  control-label">Entrée CNI</label>

                            <div class="col-sm-8">


                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>

                                    <input type="file" id="cni" name="cni" value="" class="form-control password" placeholder="Entrée Montant de Départ">


                                </div>


                            </div>
                        </div>


                         <div class="form-group   is-empty">

                            <label for="date" class="col-sm-2  control-label">Entrée date</label>

                            <div class="col-sm-8">


                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>

                                    <input type="date" id="date" name="date" value="" class="form-control password" placeholder="Entrée Montant de Départ">


                                </div>


                            </div>
                        </div>

                           

                        </div>

                        <div class="form-group   is-empty">

                            <label for="role" class="col-sm-2  control-label">Role </label>

                            <div class="col-sm-8">


                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                <select  name="role" class="form-control select2" id="recipient-name">
                                    <option value="Administrateur">Administrateur</option>
                                    <option value="Utilisateur">Utilisatateur</option>
                                </select>

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
