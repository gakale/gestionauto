
@extends('../admins/layouts')
@section('content')
@section('grand-text','gestion des Carburants')
@section('grands','Tableau de Bord')
@section('petit-text','Carburant')
<div class="container-fluid">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Nouveau carburant</h3>

                <div class="box-tools">
                    <div class="btn-group pull-right" style="margin-right: 5px">
                        <a href="{{ route('carburant.index') }}" class="btn btn-sm btn-default" title="Liste"><i class="fa fa-list"></i><span class="hidden-xs">&nbsp;Liste</span></a>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('carburant.store') }}" method="POST" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data" pjax-container="">
                @csrf
                <div class="box-body">
                    <div class="fields-group">
                        <div class="form-group   is-empty">
                            <label for="nomstation" class="col-sm-2  control-label">Nom Station</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                    <input type="text" id="nomstation" name="nomstation" value="" class="form-control password" placeholder="Entrée Le nomstation">
                                </div>
                            </div>
                        </div>


                        <div class="form-group   is-empty">
                            <label for="designation" class="col-sm-2  control-label">Type de carburant</label>
                            <div class="col-sm-8">
                                <select class="form-control select2 @error('designation') is-invalid @enderror" style="width: 100%;" name="designation" data-value="" tabindex="-1" aria-hidden="true">
                                    <option value="Hybride">Hybride</option>
                                    <option checked value="Essence">Essence</option>
                                    <option value="Électrique">Électrique</option>
                                    <option value="Diesel">Diesel</option>
                                </select>
                                @error('designation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group   is-empty">
                            <label for="litrage" class="col-sm-2  control-label">Litrage</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>
                                    <input type="text" id="litrage" name="litrage" value="" class="form-control password @error('litrage') is-invalid @enderror" placeholder="Entrée litrage">
                                </div>
                                @error('litrage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group   is-empty">
                            <label for="montant" class="col-sm-2  control-label">Montant Total</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>
                                    <input type="text" id="montant" name="montant" value="" class="form-control password @error('montant') is-invalid @enderror" placeholder="Entrée Montant Total">
                                </div>
                                @error('montant')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>


                        <div class="form-group   is-empty">
                            <label for="quantite" class="col-sm-2  control-label">Quantité en litre</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>
                                    <input type="text" id="quantite" name="quantite" value="" class="form-control password @error('quantite') is-invalid @enderror" placeholder="Entrée Lieu de La course">
                                </div>
                                @error('quantite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group   is-empty">
                            <label for="date" class="col-sm-2  control-label">La date de recharge</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                    <input type="date" id="date" name="date" value="" class="form-control password @error('date') is-invalid @enderror" placeholder="Entrée Le Motif de la course">
                                </div>
                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group   is-empty">
                            <label for="avantrecharge" class="col-sm-2  control-label">Avant Recharge</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                    <input type="text" id="avantrecharge" name="avantrecharge" value="" class="form-control password @error('avantrecharge') is-invalid @enderror" placeholder="Entrée Heure de Départ">
                                </div>
                                @error('avantrecharge')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group   is-empty">
                            <label for="apresrecharge" class="col-sm-2  control-label">Apres Recharge</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                    <input type="text" id="apresrecharge" name="apresrecharge" value="" class="form-control password @error('apresrecharge') is-invalid @enderror" placeholder="Entrée Apres Recharge">
                                </div>
                                @error('apresrecharge')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group   is-empty">
                            <label for="recu" class="col-sm-2  control-label">Réçu de paiement</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-file fa-fw"></i></span>
                                    <input type="file" id="paiement" name="paiement" value="" class="form-control password @error('paiement') is-invalid @enderror" placeholder="Entrée Récu">
                                </div>
                                @error('paiement')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group   is-empty">
                            <label for="vehicule" class="col-sm-2  control-label">Selection le Véhicule</label>
                            <div class="col-sm-8">
                                <select class="form-control select2 @error('vehicule') is-invalid @enderror" style="width: 100%;" name="vehicule" data-value="" tabindex="-1" aria-hidden="true">
                                    <option value="01 BP 43 00">01 BP 43 00</option>
                                    <option value="05 BP 52 00">05 BP 52 00</option>
                                </select>
                                @error('vehicule')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
