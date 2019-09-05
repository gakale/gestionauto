                    @extends('layout.layout')


                    @section('content')
                        @section('grand-text','Tableau de Bord')
                        @section('grands','Tableau de Bord')
                        @section('petit-text','Tableau de Bord')

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-green">
                                    <div class="inner">
                                        <h3>150</h3>

                                        <p>Nombre de Voiture</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-car"></i>
                                    </div>
                                    <a class="small-box-footer" href="#">Voire plus <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-blue">
                                    <div class="inner">
                                        <h3>53<sup style="font-size: 20px"></sup></h3>

                                        <p>Total Réparation</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-gears"></i>
                                    </div>
                                    <a class="small-box-footer" href="#">Voire plus <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-red">
                                    <div class="inner">
                                        <h3>44</h3>

                                        <p>Distance Parcourue</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-road"></i>
                                    </div>
                                    <a class="small-box-footer" href="#">Voire plus <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-olive">
                                    <div class="inner">
                                        <h3>65</h3>

                                        <p>Nombre Accidents</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-ios-people-outline"></i>
                                    </div>
                                    <a class="small-box-footer" href="#">Voire plus <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->

                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-blue">
                                        <div class="inner">
                                            <h3>150</h3>

                                            <p>Vehicule Retouché</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-bag"></i>
                                        </div>
                                        <a class="small-box-footer" href="#">Voire plus <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-success">
                                        <div class="inner">
                                            <h3>53<sup style="font-size: 20px">%</sup></h3>

                                            <p>Total Utilisateurs</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-users"></i>
                                        </div>
                                        <a class="small-box-footer" href="users">Voire plus <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-orange">
                                        <div class="inner">
                                            <h3>44</h3>

                                            <p>Total Conducteur </p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-person-add"></i>
                                        </div>
                                        <a class="small-box-footer" href="#">Voire plus <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-danger">
                                        <div class="inner">
                                            <h3>65</h3>

                                            <p>Voiture Sationne</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-pie-graph"></i>
                                        </div>
                                        <a class="small-box-footer" href="#">Voire plus <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                            </div>
                        </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-sm-12 col-xs-12">
                                        <div class="box box-warning">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">Statistique</h3>

                                            <div class="box-tools pull-right">
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                            </button>
                                            </div>
                                            <!-- /.box-tools -->
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            <canvas id="bar-chart-grouped" width="800" height="450"></canvas>

                                        </div>
                                        <!-- /.box-body -->
                                        </div>
                                        <!-- /.box -->
                                    </div>




                                            <!-- /.info-box -->
                                    </div>





                                </div>


                            </div>







                            </div>




                    @stop
