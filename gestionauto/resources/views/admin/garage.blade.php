
@extends('layout.layout')
@section('content')
@section('grand-text','gestion des garages')
@section('grands','Tableau de Bord')
@section('petit-text','Garage')


<div class="container-fluid">
    
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Nos Garages</h3>
            <form action="" class="form-group">
                
                <input placeholder="Recherche" id="recherche" class="form-control" style="width: 20%;margin: 10px;" type="search">
                
                
                
            </form>
            
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default"  style="float: right">
                    Nouveaux Garage        
                </button>
            </div>
            {{--  nouveaux modal   --}}
            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Nouveau Garage  </h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <form action="#" class="form-group" method="post">
                                        <div class="form-group col-md-6">
                                            <label for="message-text" class="col-form-label">Nom du garage</label>
                                            <input name="name" type="text" class="form-control" id="message-text">
                                                
                                            
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="message-text" class="col-form-label">Localisation</label>
                                            <input name="localisation"  class="form-control " id="message-text" name="states[]" multiple="multiple">
                                             
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="recipient-name" class="col-form-label">Depuis </label>
                                            <input name="depuis" type="text" class="form-control" id="recipient-name">
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="recipient-name" class="col-form-label">Numero du garage</label>
                                            <input name="numero" type="text" class="form-control" id="recipient-name">
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group col-md-6">
                                            <label for="message-text" class="col-form-label">Mail du garage</label>
                                            <input type="mail" class="form-control" id="message-text">
                                                
                                                
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
                            <th>Nom du garage</th>
                            <th>localisation</th>
                            <th>Depuis</th>
                            <th>Numero garage</th>
                            <th>Mail garage</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>022 BP 01</td>
                            <td>BMW</td>
                            <td>2019 </td>
                            <td>Compabilité</td>
                            <td>Camion</td>
                            <td style="letter-spacing: 3px;text-align:center;">
                                
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
    