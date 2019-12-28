
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
                                <select class="form-control select2 @error('action') is-invalid @enderror" style="width: 100%;" name="action" data-value="" tabindex="-1" aria-hidden="true" multiple="multiple">
                                    <option value="pare-brise"> pare-brise</option>
                                   <option value="pare-soleil intérieur">pare-soleil intérieur</option>
                                   <option value="vitres latérales, lunette arrière">vitres latérales, lunette arrière</option>
                                   <option value="rétroviseur intérieur">rétroviseur intérieur</option>
                                   <option value="sièges et banquettes"> sièges et banquettes</option>
                                   <option value="ceinture de sécurité"> ceinture de sécurité</option>
                                   <option value="coussins gonflables (état, témoin)"> coussins gonflables (état, témoin)</option>
                                   <option value="lampes témoins (fonctionnement)"> lampes témoins (fonctionnement)</option>
                                   <option value="moteur en marche"> moteur en marche</option>
                                   <option value="volant (jeu)">volant (jeu)</option>
                                   <option value="démarrage au neutre"> démarrage au neutre</option>
                                   <option value="commande d’accélérateur">commande d’accélérateur</option>
                                   <option value="commande d’embrayage">commande d’embrayage</option>
                                   <option value="commande de freins">commande de freins</option>
                                   <option value="frein de service">frein de service</option>
                                   <option value="freins de stationnement">freins de stationnement</option>
                                   <option value="course de la pédale de frein">course de la pédale de frein</option>
                                   <option value="essuie-glaces (fonctionnement)">essuie-glaces (fonctionnement)</option>
                                   <option value="lave-glace (fonctionnement)">lave-glace (fonctionnement)</option>
                                   <option value="chauffage, dégivrage">chauffage, dégivrage</option></option>
                                   <option value="indicateur de vitesse et totalisateur">indicateur de vitesse et totalisateur</option>
                                   <option value="éclairage du tableau de bord">éclairage du tableau de bord</option>
                                   <option value="avertisseur sonore (klaxon)">avertisseur sonore (klaxon)</option>
                                   <option value="feux de jour">feux de jour</option>
                                   <option value="phares de route">phares de route</option>
                                   <option value="phares de croisement">phares de croisement</option>
                                   <option value="feux de direction">feux de direction</option>
                                   <option value="feux d’arrêt">feux d’arrêt</option>
                                   <option value="">feux de position</option>
                                   <option value="">feux de plaque</option>
                                   <option value="">feux de détresse</option>
                                   <option value="">feux de recul</option>
                                   <option value="">tous les réflecteurs</option>


                                   <option value="">portières</option>
                                   <option value=""> rétroviseurs extérieurs</option>
                                   <option value="">essuie-glaces (balais)</option>
                                   <option value="">ailes, carrosserie</option>
                                   <option value="">capot, crochet de sécurité</option>
                                   <option value=""> pare-soleil extérieur</option>
                                   <option value="">pneus</option>
                                   <option value=""> roues, valves</option>
                                   <option value=""> boulons, écrous, pièces de fixation</option>
                                   <option value="">roulement de roue</option>
                                   <option value="">portillon, bouchon</option>
                                   <option value="">vignette valide (carburant gazeux)</option>
                                   <option value=""> dispositif d’attelage</option>
                                   <option value=""> sellette d’attelage</option>
                                   <option value="">mécanisme de verrouillage</option>
                                   <option value=""> fiche (freins de remorque)</option>
                                   <option value=""> fiche (éclairage de remorque)</option>
                                   <option value=""> câbles, chaînes, crochet</option>
                                   <option value=""> barres d’attellage</option>
                                   <option value="">espace de chargement</option>
                                   <option value=""> plateforme</option>
                                   <option value="">panneaux</option>
                                   <option value=""> fixations</option>
                                   <option value="">ridelles</option>
                                   <option value=""> suspension et freins</option>
                                   <option value=""> amortisseurs</option>
                                   <option value="">ancrages</option>
                                   <option value=""> lames maîtresses</option>
                                   <option value=""> pièces de fixation</option>
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
