
@extends('../admins/layouts')
@section('content')
@section('grand-text','gestion des missions')
@section('grands','Tableau de Bord')
@section('petit-text','Mission')
<div class="container-fluid">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Nouvelle Panne</h3>

                <div class="box-tools">
                    <div class="btn-group pull-right" style="margin-right: 5px">
                        <a href="{{ route('maintenance.index') }}" class="btn btn-sm btn-default" title="Liste"><i class="fa fa-list"></i><span class="hidden-xs">&nbsp;Liste</span></a>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('maintenance.store') }}" method="POST" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data" pjax-container="">
                @csrf
                <div class="box-body">

                    <div class="fields-group">




                        <div class="form-group   is-empty">

                            <label for="imatriculation" class="col-sm-2  control-label">Vehicule Concerné</label>

                            <div class="col-sm-8">

                                <select class="form-control select2" style="width: 100%;" name="imatriculation" data-value="" tabindex="-1" aria-hidden="true">
                                    <option value="Fofana">Fofana</option>
                                    <option value="">gnakale</option>

                                </select>


                            </div>
                        </div>
                        <div class="form-group   is-empty">

                            <label for="action" class="col-sm-2  control-label">Action  Méné</label>

                            <div class="col-sm-8">

                                <select class="form-control select2" style="width: 100%;" name="action" data-value="" tabindex="-1" aria-hidden="true" multiple="multiple">
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
                                    <option value="">frein de service</option>
                                    <option value="">freins de stationnement</option>
                                    <option value="">course de la pédale de frein</option>
                                    <option value="">essuie-glaces (fonctionnement)</option>
                                    <option value="">lave-glace (fonctionnement)</option>
                                    <option value="">chauffage, dégivrage</option></option>
                                    <option value="">indicateur de vitesse et totalisateur</option>
                                    <option value="">éclairage du tableau de bord</option>
                                    <option value="">avertisseur sonore (klaxon)</option>
                                    <option value="">feux de jour</option>
                                    <option value="">phares de route</option>
                                    <option value="phares de croisement">phares de croisement</option>
                                    <option value="">feux de direction</option>
                                    <option value="">feux d’arrêt</option>
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


                            </div>
                        </div>

                        <div class="form-group   is-empty">

                            <label for="prixaction" class="col-sm-2  control-label">Prix de L action</label>

                            <div class="col-sm-8">


                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>

                                    <input type="text" id="prixaction" name="prixaction" value="" class="form-control password" placeholder="Entrée Montant de Départ">


                                </div>


                            </div>
                        </div>




                        <div class="form-group   is-empty">

                            <label for="garage" class="col-sm-2  control-label">Nom du Garage</label>

                            <div class="col-sm-8">

                                <select class="form-control select2" style="width: 100%;" name="garage" data-value="" tabindex="-1" aria-hidden="true">
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
                            <div class="form-group   is-empty">

                                <label for="date" class="col-sm-2  control-label">Date de Réparation</label>

                                <div class="col-sm-8">


                                    <div class="input-group">

                                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                        <input type="date" id="date" name="date" value="" class="form-control password_confirmation" placeholder="Entrée Date de Réparation">


                                    </div>


                                </div>
                            </div>

                        </div>

                        <div class="form-group   is-empty">

                            <label for="recupanne" class="col-sm-2  control-label">Reçu de Paiement</label>

                            <div class="col-sm-8">


                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                    <input type="file" id="recupanne" name="recupanne" value="" class="form-control etablissement" placeholder="Entré Reçu de Paiement">


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
