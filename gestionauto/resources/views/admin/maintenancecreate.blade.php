
@extends('../admins/layouts')
@section('content')
@section('grand-text','gestion des Maintenances')
@section('grands','Tableau de Bord')
@section('petit-text','Maintenance')
<div class="container-fluid">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Nouvelle Maintenance</h3>

                <div class="box-tools">
                    <div class="btn-group pull-right" style="margin-right: 5px">
                        <a href="{{ route('maintenance.index') }}" class="btn btn-sm btn-default" title="Liste"><i class="fa fa-list"></i><span class="hidden-xs">&nbsp;Liste</span></a>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{route('maintenance.store')}}" method="POST" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data" pjax-container="">
                @csrf
                <div class="box-body">

                    <div class="fields-group">

                        <div class="form-group   is-empty">
                            <label for="imatriculation" class="col-sm-2  control-label">Imatriculation</label>
                            <div class="col-sm-8">
                                <select class="form-control select2 @error('imatriculation') is-invalid @enderror" style="width: 100%;" name="imatriculation" data-value="" tabindex="-1" aria-hidden="true">
                                    <option value="123hk01">123hk01</option>
                                    <option value="123hj01">123hj01</option>
                                    <option value="124hk01">124hk01</option>
                                </select>
                                @error('imatriculation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group   is-empty">
                            <label for="prixaction" class="col-sm-2  control-label">Type de panne</label>
                            <div class="col-sm-8">
                                <select class="form-control select2 @error('action') is-invalid @enderror" style="width: 100%;" name="action" data-value="" tabindex="-1" aria-hidden="true">
                                    <option value="Sinistre">Sinistre</option>
                                    <option value="Visite">Visite</option>
                                    <option value="Entretien">Entretien</option>
                                </select>
                                @error('action')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group   is-empty">
                            <label for="prixaction" class="col-sm-2  control-label">Prix Action</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>
                                    <input type="text" id="prixaction" name="prixaction" class="form-control @error('prixaction') is-invalid @enderror" placeholder="Entrez le Prix de maintenance">
                                </div>
                                @error('prixaction')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group   is-empty">
                            <label for="fonction" class="col-sm-2  control-label">Garage de Maintenance</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>
                                    <input type="text" id="garage" name="garage"  class="form-control password @error('garage') is-invalid @enderror" placeholder="Le garage de Maintenance">
                                </div>
                                @error('garage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group   is-empty">
                            <label for="panne_chauffeur" class="col-sm-2  control-label">Chauffeur conserné</label>
                            <div class="col-sm-8">
                                <select class="form-control select2 @error('panne_chauffeur') is-invalid @enderror" style="width: 100%;" name="panne_chauffeur" data-value="" tabindex="-1" aria-hidden="true">
                                    <option value="Sinistre">Sehioum Oumar</option>
                                    <option value="Visite">Koné Hamed</option>
                                </select>
                                @error('panne_chauffeur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group   is-empty">
                            <label for="date" class="col-sm-2  control-label">Date</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                                    <input type="date" id="date" name="date" value="" class="form-control matricule @error('date') is-invalid @enderror">
                                </div>
                                @error('date')
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
