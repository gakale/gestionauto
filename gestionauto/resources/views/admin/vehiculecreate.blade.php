
@extends('../admins/layouts')
@section('content')
@section('grand-text','gestion des Vehicule')
@section('grands','Tableau de Bord')
@section('petit-text','Vehicule')
<div class="container-fluid">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Nouveau Vehicule</h3>

                <div class="box-tools">
                    <div class="btn-group pull-right" style="margin-right: 5px">
                        <a href="{{ route('vehicule.index') }}" class="btn btn-sm btn-default" title="Liste"><i class="fa fa-list"></i><span class="hidden-xs">&nbsp;Liste</span></a>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('vehicule.store') }}" method="post" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data" pjax-container="">

                <div class="box-body">

                    <div class="fields-group">

                        <div class="form-group   is-empty">

                            <label for="imatriculation" class="col-sm-2  control-label">Imatriculation</label>

                            <div class="col-sm-8">


                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                    <input type="text" id="imatriculation" name="imatriculation" value="" class="form-control password" placeholder="Entrée L'imatriculation du vehicule">


                                </div>


                            </div>
                        </div>


                        <div class="form-group   is-empty">

                            <label for="kilometrage" class="col-sm-2  control-label">Kilometrage</label>

                            <div class="col-sm-8">


                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>

                                    <input type="text" id="kilometrage" name="kilometrage" value="" class="form-control password" placeholder="Entrée kilometrage">


                                </div>


                            </div>
                        </div>

                        <div class="form-group   is-empty">

                            <label for="montantreste" class="col-sm-2  control-label">La date</label>

                            <div class="col-sm-8">


                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>

                                    <input type="date" id="date" name="date" value="" class="form-control password" placeholder="Entrée la date">


                                </div>


                            </div>
                        </div>


                        <div class="form-group   is-empty">

                            <label for="puissance" class="col-sm-2  control-label"> La Puissance</label>

                            <div class="col-sm-8">


                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                    <input type="text" id="puissance" name="montanttotal" value="" class="form-control password" placeholder="Entrée la puissance">


                                </div>


                            </div>
                        </div>


                        <div class="form-group   is-empty">

                            <label for="poids" class="col-sm-2  control-label">Poids Vide</label>

                            <div class="col-sm-8">


                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                    <input type="text" id="poids" name="poids" value="" class="form-control password" placeholder="Entrée le poids vide">


                                </div>


                            </div>
                        </div>



                        <div class="form-group   is-empty">

                            <label for="nbreplace" class="col-sm-2  control-label">Le Nombre de place</label>

                            <div class="col-sm-8">


                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>

                                    <input type="text" id="nbreplace" name="nbreplace" value="" class="form-control password" placeholder="Entrée Le nombre de place">


                                </div>


                            </div>
                        </div>



                        <div class="form-group   is-empty">

                            <label for="capacite" class="col-sm-2  control-label">Capacité de Bagage</label>

                            <div class="col-sm-8">


                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>

                                    <input type="text" id="heurdepart" name="capacite" value="" class="form-control password" placeholder="Entrée la Capacité de Bagage">


                                </div>


                            </div>
                        </div>
                        <div class="form-group   is-empty">

                            <label for="Carburant" class="col-sm-2  control-label">Modèle Carburant</label>

                            <div class="col-sm-8">

                                <select class="form-control select2" style="width: 100%;" name="Carburant" data-value="" tabindex="-1" aria-hidden="true">
                                    <option value="Hybride">Hybride</option>
                                    <option checked value="Essence">Essence</option>

                                    <option value="Électrique">Électrique</option>
                                    <option value="Diesel">Diesel</option>

                                </select>
                                </div>
                            </div>

                            <div class="form-group   is-empty">

                                <label for="utilisation" class="col-sm-2  control-label">Selectionné le Service</label>

                                <div class="col-sm-8">

                                    <select class="form-control select2" style="width: 100%;" name="utilisation" data-value="" tabindex="-1" aria-hidden="true">
                                        <option value="Service">Service</option>
                                        <option value="Comptable">Comptable</option>
                                        <option value="technique">Technique</option>
                                        <option value="secretariat">Sécretariat</option>
                                    </select>

                                </div>
                            </div>


                            <div class="form-group   is-empty">

                                <label for="carosserie" class="col-sm-2  control-label">Selection la Carosserie</label>

                                <div class="col-sm-8">

                                    <select class="form-control select2" style="width: 100%;" name="carosserie" data-value="" tabindex="-1" aria-hidden="true">
                                        <option value="Break">Break</option>
                                        <option value="Bicorps">Bicorps</option>

                                        <option value="Tricorps">Tricorps</option>

                                        <option value="Coupé">Coupé</option>
                                        <option value="Cabriolet">Cabriolet</option>

                                        <option value="Roadster">Roadster</option>
                                        <option value="Spider">Spider</option>

                                        <option value="Pick-up">Pick-up</option>
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
