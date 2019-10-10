
@extends('layout.layout')
@section('content')
@section('grand-text','Tableau de Bord')
@section('grands','Tableau de Bord')
@section('petit-text','Voiture')


<div class="container-fluid">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Maintenance</h3>
            <form action="" class="form-group">

                <input placeholder="Recherche" id="recherche" class="form-control" style="width: 20%;margin: 10px;" type="search">


            </form>

                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default"  style="float: right">
                    Nouvelle Panne
                </button>
            </div>
            {{--  nouveaux modal   --}}
            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Nouelle Maintenance</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <form action="#" class="form-group" method="post">
                                        <div class="form-group col-md-6">
                                            <label for="message-text" class="col-form-label">Immatriculation</label>
                                            <select name="imatriculation" type="" class="form-control" id="message-text">
                                                <option value="">2341BP01</option>
                                                <option value="">36BP04</option>
                                                <option value="">0738BP05</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="message-text" class="col-form-label">Action Méné</label>
                                            <select name="action" class="form-control js-example-basic-multiple" id="message-text" multiple="multiple">
                                                <option value="are-brise"> pare-brise</option>
                                                <option value="">pare-soleil intérieur</option>
                                                <option value="">vitres latérales, lunette arrière</option>
                                                <option value="">rétroviseur intérieur</option>
                                                <option value=""> sièges et banquettes</option>
                                                <option value=""> ceinture de sécurité</option>
                                                <option value=""> coussins gonflables (état, témoin)</option>
                                                <option value=""> lampes témoins (fonctionnement)</option>
                                                <option value=""> moteur en marche</option>
                                                <option value="">volant (jeu)</option>
                                                <option value=""> démarrage au neutre</option>
                                                <option value="">commande d’accélérateur</option>
                                                <option value="">commande d’embrayage</option>
                                                <option value="">commande de freins</option>
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
                                                <option value="">phares de croisement</option>
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
                                        <div class="form-group col-md-6">
                                            <label for="recipient-name" class="col-form-label">Prix de L action </label>
                                            <input name="prixaction" type="text" class="form-control" id="recipient-name">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="recipient-name" class="col-form-label">Reçu de Paiement</label>
                                            <input name="recupanne" type="file" class="form-control" id="recipient-name">
                                        </div>


                                        <div class="form-group col-md-6">
                                            <label for="message-text" class="col-form-label">Nom du Garage</label>
                                            <select name="garage" type="text" class="form-control" id="message-text">
                                                <option value="">plateau</option>
                                                <option value="">Camion</option>

                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="message-text" class="col-form-label">Nom du Chauffeur</label>
                                            <select name="panne_chauffeur" type="text" class="form-control" id="message-text">
                                                <option value="">Cars</option>
                                                <option value="">Camion</option>

                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="message-text" class="col-form-label">Date de Réparation</label>
                                            <input type="date" class="form-control select2" id="message-text">

                                        </div>





                                    </form>
                                </div>


                        </div>



                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>

                <!-- /.modal-dialog -->
            </div>

            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-bordered  table-striped">
                    <tbody>
                        <tr>
                            <th>Immatriculation</th>
                            <th>Motif de Rep</th>
                            <th>Date Rep</th>
                            <th>Chauffeur</th>
                            <th>Montant Dépensé</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>022 BP 01</td>
                            <td>BMW</td>
                            <td>2019 </td>
                            <td>Compabilité</td>
                            <td>Camion</td>
                            <td>

                                <a href="#" class="fa fa-eye">

                                </a>
                                <a href="#" class="fa fa-pencil">

                                </a>
                                <a href="#" class="red fa fa-trash">

                                </a>
                            </td>

                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td> </td>
                            <td></td>
                            <td></td>
                            <td></td>


                        </tr>

                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>


    </div>




    @stop
