
@extends('../admins/layouts')
@section('content')
@section('grand-text','gestion des Vehicules')
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
            <form action="{{ route('vehicule.store') }}" method="POST" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data" pjax-container="">
                @csrf
                <div class="box-body">
                    <div class="fields-group">


                        <div class="form-group   is-empty">
                            <label for="imatriculation" class="col-sm-2  control-label">Imatriculation</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                    <input type="text" id="imatriculation" name="imatriculation" value="" class="form-control password @error('imatriculation') is-invalid @enderror" placeholder="Entrée L'imatriculation du vehicule">
                                </div>
                                @error('imatriculation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group   is-empty">
                            <label for="utilisation" class="col-sm-2  control-label">Marque</label>
                            <div class="col-sm-8">
                                <select class="form-control select2 @error('marque') is-invalid @enderror" style="width: 100%;" name="marque" data-value="" tabindex="-1" aria-hidden="true">
                                    <option value="Peugeot">Peugeot</option>
                                    <option value="Mercedes">Mercedes</option>
                                    <option value="Toyota">Toyota</option>
                                    <option value="Honda">Honda</option>
                                </select>
                                @error('marque')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group   is-empty">
                            <label for="utilisation" class="col-sm-2  control-label">Modèle</label>
                            <div class="col-sm-8">
                                <select class="form-control select2 @error('modele') is-invalid @enderror" style="width: 100%;" name="modele" data-value="" tabindex="-1" aria-hidden="true">
                                    <option value="Peugeot 406">Peugeot 406</option>
                                    <option value="Peugeot 307">peugeot 307</option>
                                    <option value="Peugeot 508">peugeot 508</option>
                                    <option value="Peugeot 2019">peugeot 2019</option>
                                </select>
                                @error('modele')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group   is-empty">
                            <label for="kilometrage" class="col-sm-2  control-label">Kilometrage</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>
                                    <input type="text" id="kilometrage" name="kilometrage" value="" class="form-control password @error('kilometrage') is-invalid @enderror" placeholder="Entrée kilometrage">
                                </div>
                                @error('kilometrage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group   is-empty">
                            <label for="montantreste" class="col-sm-2  control-label">La date</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                    <input type="date" id="date" name="date" value="" class="form-control password @error('date') is-invalid @enderror" placeholder="Entrée la date">
                                </div>
                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group   is-empty">
                            <label for="puissance" class="col-sm-2  control-label"> La Puissance</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                    <input type="text" id="puissance" name="puissance" value="" class="form-control password @error('puissance') is-invalid @enderror" placeholder="Entrée la puissance">
                                </div>
                                @error('puissance')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group   is-empty">
                            <label for="puissance" class="col-sm-2  control-label"> Catégorie</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                    <input type="text" id="etat" name="categorie" value="" class="form-control password @error('categorie') is-invalid @enderror" placeholder="Entrée la puissance">
                                </div>
                                @error('cartegorie')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group   is-empty">
                            <label for="puissance" class="col-sm-2  control-label"> Etat</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                    <input type="text" id="etat" name="etat" value="" class="form-control password @error('etat') is-invalid @enderror" placeholder="Entrée la puissance">
                                </div>
                                @error('etat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group   is-empty">
                            <label for="poids" class="col-sm-2  control-label">Poids Vide</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                    <input type="text" id="poids" name="poids" value="" class="form-control password @error('poids') is-invalid @enderror" placeholder="Entrée le poids vide">
                                </div>
                                @error('poids')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group   is-empty">
                            <label for="nbreplace" class="col-sm-2  control-label">Le Nombre de place</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                    <input type="text" id="nbreplace" name="nbreplace" value="" class="form-control password @error('nbreplace') is-invalid @enderror" placeholder="Entrée Le nombre de place">
                                </div>
                                @error('nbreplace')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                        </div>


                        <div class="form-group   is-empty">
                            <label for="capacite" class="col-sm-2  control-label">Capacité de Bagage</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                    <input type="text" id="heurdepart" name="capacite" value="" class="form-control password @error('capacite') is-invalid @enderror" placeholder="Entrée la Capacité de Bagage">
                                </div>
                                @error('capacite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group   is-empty">
                            <label for="Carburant" class="col-sm-2  control-label">Type de Carburant</label>
                            <div class="col-sm-8">
                                <select class="form-control select2 @error('carburant') is-invalid @enderror" style="width: 100%;" name="carburant" data-value="" tabindex="-1" aria-hidden="true">
                                    <option value="Hybride">Hybride</option>
                                    <option checked value="Essence">Essence</option>
                                    <option value="Électrique">Électrique</option>
                                    <option value="Diesel">Diesel</option>
                                </select>
                                @error('carburant')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                            <div class="form-group   is-empty">
                                <label for="utilisation" class="col-sm-2  control-label">Sélectionner le Service</label>
                                <div class="col-sm-8">
                                    <select class="form-control select2 @error('utilisation') is-invalid @enderror" style="width: 100%;" name="utilisation" data-value="" tabindex="-1" aria-hidden="true">
                                        <option value="Service">Service</option>
                                        <option value="Comptable">Comptable</option>
                                        <option value="technique">Technique</option>
                                        <option value="secretariat">Sécretariat</option>
                                    </select>
                                    @error('utilisation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group   is-empty">
                                <label for="carosserie" class="col-sm-2  control-label"> La Carosserie</label>
                                <div class="col-sm-8">
                                    <select class="form-control select2 @error('carosserie') is-invalid @enderror" style="width: 100%;" name="carosserie" data-value="" tabindex="-1" aria-hidden="true">
                                        <option value="Break">Break</option>
                                        <option value="Bicorps">Bicorps</option>
                                        <option value="Tricorps">Tricorps</option>
                                        <option value="Coupé">Coupé</option>
                                        <option value="Cabriolet">Cabriolet</option>
                                        <option value="Roadster">Roadster</option>
                                        <option value="Spider">Spider</option>
                                        <option value="Pick-up">Pick-up</option>
                                    </select>
                                    @error('carosserie')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
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
