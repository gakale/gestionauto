
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
                        <a href="{{ route('course.index') }}" class="btn btn-sm btn-default" title="Liste"><i class="fa fa-list"></i><span class="hidden-xs">&nbsp;Liste</span></a>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="" method="post" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data" pjax-container="">

                <div class="box-body">

                    <div class="fields-group">

                            <div class="form-group   is-empty">

                                    <label for="motifcourse" class="col-sm-2  control-label">Le Motif de la Course</label>

                                    <div class="col-sm-8">


                                        <div class="input-group">

                                            <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                            <input type="text" id="motifcourse" name="motifcourse" value="" class="form-control password" placeholder="Entrée Le Motif de la course">


                                        </div>


                                    </div>
                                </div>


                        <div class="form-group   is-empty">

                            <label for="montantpodepart" class="col-sm-2  control-label">Montant pour Départ</label>

                            <div class="col-sm-8">


                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>

                                    <input type="text" id="montantpodepart" name="montantpodepart" value="" class="form-control password" placeholder="Entrée Montant de Départ">


                                </div>


                            </div>
                        </div>

                        <div class="form-group   is-empty">

                                <label for="montantreste" class="col-sm-2  control-label">Montant Resté</label>

                                <div class="col-sm-8">


                                    <div class="input-group">

                                        <span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>

                                        <input type="text" id="montantreste" name="montantreste" value="" class="form-control password" placeholder="Entrée Montant Resté">


                                    </div>


                                </div>
                            </div>


                            <div class="form-group   is-empty">

                                    <label for="montanttotal" class="col-sm-2  control-label">Montant Total</label>

                                    <div class="col-sm-8">


                                        <div class="input-group">

                                            <span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>

                                            <input type="text" id="montanttotal" name="montanttotal" value="" class="form-control password" placeholder="Entrée Montant Total">


                                        </div>


                                    </div>
                                </div>


                                <div class="form-group   is-empty">

                                        <label for="lieucourse" class="col-sm-2  control-label">Lieu de La course</label>

                                        <div class="col-sm-8">


                                            <div class="input-group">

                                                <span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>

                                                <input type="text" id="lieucourse" name="lieucourse" value="" class="form-control password" placeholder="Entrée Lieu de La course">


                                            </div>


                                        </div>
                                    </div>



                                        <div class="form-group   is-empty">

                                                <label for="date" class="col-sm-2  control-label">La date de la Course</label>

                                                <div class="col-sm-8">


                                                    <div class="input-group">

                                                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>

                                                        <input type="date" id="date" name="date" value="" class="form-control password" placeholder="Entrée Le Motif de la course">


                                                    </div>


                                                </div>
                                            </div>



                                            <div class="form-group   is-empty">

                                                    <label for="heurdepart" class="col-sm-2  control-label">Heure de Départ</label>

                                                    <div class="col-sm-8">


                                                        <div class="input-group">

                                                            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>

                                                            <input type="heurdepart" id="heurdepart" name="heurdepart" value="" class="form-control password" placeholder="Entrée Heure de Départ">


                                                        </div>


                                                    </div>
                                                </div>



                                                <div class="form-group   is-empty">

                                                        <label for="heurretour" class="col-sm-2  control-label">Heur de Retour</label>

                                                        <div class="col-sm-8">


                                                            <div class="input-group">

                                                                <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>

                                                                <input type="date" id="heurretour" name="heurretour" value="" class="form-control password" placeholder="Entrée Heure de Départ">


                                                            </div>


                                                        </div>
                                                    </div>



                            <div class="form-group   is-empty">

                                <label for="cabuavantdepart" class="col-sm-2  control-label">Caburant Avant Depart</label>

                                <div class="col-sm-8">


                                    <div class="input-group">

                                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                        <input type="text" id="cabuavantdepart" name="cabuavantdepart" value="" class="form-control password_confirmation" placeholder="Entrée Caburant Avant Depart">


                                    </div>


                                </div>
                            </div>

                            <div class="form-group   is-empty">

                                    <label for="cabuapresdepart" class="col-sm-2  control-label">Caburant Après Depart</label>

                                    <div class="col-sm-8">


                                        <div class="input-group">

                                            <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                            <input type="text" id="cabuapresdepart" name="cabuapresdepart" value="" class="form-control password_confirmation" placeholder="Entrée Caburant Avant Depart">


                                        </div>


                                    </div>
                                </div>



                            <div class="form-group   is-empty">

                                    <label for="kiloavantdepart" class="col-sm-2  control-label">Kilometrage Avant Depart</label>

                                    <div class="col-sm-8">


                                        <div class="input-group">

                                            <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                            <input type="text" id="kiloavantdepart" name="kiloavantdepart" value="" class="form-control password_confirmation" placeholder="Entrée Caburant Avant Depart">


                                        </div>


                                    </div>
                                </div>


                                <div class="form-group   is-empty">

                                        <label for="kiloapresdepart" class="col-sm-2  control-label">Kilometrage Après Depart</label>

                                        <div class="col-sm-8">


                                            <div class="input-group">

                                                <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                                <input type="text" id="kiloapresdepart" name="kiloapresdepart" value="" class="form-control password_confirmation" placeholder="Entrée Caburant Avant Depart">


                                            </div>


                                        </div>
                                    </div>

                                    <div class="form-group   is-empty">

                                            <label for="vehicule" class="col-sm-2  control-label">Selection le Vehicule</label>

                                            <div class="col-sm-8">

                                                <select class="form-control select2" style="width: 100%;" name="vehicule" data-value="" tabindex="-1" aria-hidden="true">
                                                    <option value="">Fofana</option>
                                                    <option value="">gnakale</option>

                                                </select>


                                            </div>
                                        </div>
                                            <div class="form-group   is-empty">

                                                <label for="panne_chauffeur" class="col-sm-2  control-label">Selectionne le Chauffeur</label>

                                                <div class="col-sm-8">

                                                    <select class="form-control select2" style="width: 100%;" name="panne_chauffeur" data-value="" tabindex="-1" aria-hidden="true">
                                                        <option value="">Fofana</option>
                                                        <option value="">gnakale</option>

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
