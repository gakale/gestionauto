
@extends('../admins/layouts')
@section('content')
@section('grand-text','gestion des missions')
@section('grands','Tableau de Bord')
@section('petit-text','Mission')
<div class="container-fluid">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Nouvelle Mission</h3>

                <div class="box-tools">
                    <div class="btn-group pull-right" style="margin-right: 5px">
                        <a href="{{ route('mission.index') }}" class="btn btn-sm btn-default" title="Liste"><i class="fa fa-list"></i><span class="hidden-xs">&nbsp;Liste</span></a>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{route('mission.store')}}" method="post" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data" pjax-container="">
                @csrf
                <div class="box-body">

                    <div class="fields-group">


                        <div class="form-group   is-empty">

                            <label for="chauffeurs" class="col-sm-2  control-label">Charge de Mission</label>

                            <div class="col-sm-8">

                                <select class="form-control select2" style="width: 100%;" name="name[]" data-value="" tabindex="-1" aria-hidden="true"multiple="multiple">

                                    <option value="" disabled>Choose your option</option>
                                    <option value="Fofana">Fofana</option>
                                    <option value="gnakale">gnakale</option>


                                </select>


                            </div>
                        </div>
                        <div class="form-group   is-empty">

                                <label for="chauffeurs" class="col-sm-2  control-label">Chauffeur Concerné</label>

                                <div class="col-sm-8">

                                    <select class="form-control select2" style="width: 100%;" name="chauffeurs[]" data-value="" tabindex="-1" aria-hidden="true" multiple="multiple">
                                        <option value="Fofana">Fofana</option>
                                        <option value="gnakale">gnakale</option>

                                    </select>


                                </div>
                            </div>

                        <div class="form-group   is-empty">

                            <label for="montantdepart" class="col-sm-2  control-label">Montant pour Départ</label>

                            <div class="col-sm-8">


                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                    <input type="text" id="montantdepart" name="montantdepart" value="" class="form-control password" placeholder="Entrée Montant de Départ">


                                </div>


                            </div>
                        </div>


                        <div class="form-group   is-empty">

                            <label for="missionlieu" class="col-sm-2  control-label">Lieu de La mission</label>

                            <div class="col-sm-8">


                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                    <input type="text" id="missionlieu" name="missionlieu" value="" class="form-control etablissement" placeholder="Lieu de La mission">


                                </div>


                            </div>
                        </div>
                        <div class="form-group   is-empty">

                            <label for="motif" class="col-sm-2  control-label">Le Motif Mission</label>

                            <div class="col-sm-8">


                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                    <input type="text" id="motif" name="motif" value="" class="form-control birth_date" placeholder="Entrée le motif de la mission">


                                </div>


                            </div>
                        </div>


                        <div class="form-group   is-empty">
                            <label for="date" class="col-sm-2  control-label">Date de la Mission</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                    <input type="date" id="date" name="date" value="" class="form-control matricule">
                                </div>
                            </div>
                        </div>


                        <div class="form-group   is-empty">
                            <label for="lieudepart" class="col-sm-2  control-label">Lieu de Départ</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                    <input type="text" id="lieudepart" name="lieudepart" value="" class="form-control phone" placeholder="Entrée le lieu de Départ">
                                </div>
                            </div>
                        </div>

                        
                        <div class="form-group   is-empty">

                                <label for="lieuarrive" class="col-sm-2  control-label">Lieu d Arrivé</label>

                                <div class="col-sm-8">


                                    <div class="input-group">

                                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                        <input type="text" id="lieuarrive" name="lieuarrive" value="" class="form-control phone" placeholder="Entrée Lieu d arrivé">


                                    </div>


                                </div>
                            </div>


                            <div class="form-group   is-empty">

                                    <label for="heurdepart" class="col-sm-2  control-label">Heure de Départ</label>

                                    <div class="col-sm-8">


                                        <div class="input-group">

                                            <span class="input-group-addon"><i class="fa fa-clock-o fa-fw"></i></span>

                                            <input type="date" id="heurdepart" name="heurdepart" value="" class="form-control phone" placeholder="Entrée Heure de Départ">


                                        </div>


                                    </div>
                                </div>



                                <div class="form-group   is-empty">

                                        <label for="vehicule" class="col-sm-2  control-label">Selection la Voiture</label>

                                        <div class="col-sm-8">

                                            <select class="form-control select2" style="width: 100%;" name="vehicule[]" data-value="" tabindex="-1" aria-hidden="true" multiple="multiple">
                                                <option value="Fofana">Fofana</option>
                                                <option value="gnakale">gnakale</option>

                                            </select>


                                        </div>
                                    </div>
                                    <div class="form-group   is-empty">

                                            <label for="carbuavantdepar" class="col-sm-2  control-label">Caburant Avant Depart</label>

                                            <div class="col-sm-8">


                                                <div class="input-group">

                                                    <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                                    <input type="text" id="carbuavantdepar" name="carbuavantdepar" value="" class="form-control phone" placeholder="Entrée Caburant Avant Depart">


                                                </div>


                                            </div>
                                        </div>





                                            <div class="form-group   is-empty">

                                                    <label for="killoavantdepart" class="col-sm-2  control-label">Kilometrage Avant Depart</label>

                                                    <div class="col-sm-8">


                                                        <div class="input-group">

                                                            <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                                            <input type="text" id="killoavantdepart" name="killoavantdepart" value="" class="form-control phone" placeholder="Entrée Kilometrage Avant Depart">


                                                        </div>


                                                    </div>
                                                </div>



                                                    <div class="form-group   is-empty">

                                                            <label for="avance" class="col-sm-2  control-label">Niveau de la Mission</label>

                                                            <div class="col-sm-8">

                                                                <select class="form-control select2" style="width: 100%;" name="avance" data-value="" tabindex="-1" aria-hidden="true">
                                                                    <option value="debut">Debut</option>
                                                                    <option value="fin">Fin</option>

                                                                </select>


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
@stop
