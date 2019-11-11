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
                <a class="small-box-footer" href="{{route('vehicule.index')}}">Voire plus <i class="fa fa-arrow-circle-right"></i></a>
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
                <a class="small-box-footer" href="{{route('maintenance.index')}}">Voire plus <i class="fa fa-arrow-circle-right"></i></a>
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
            <div class="small-box bg-purple">
                <div class="inner">
                    <h3>10000<sup style="font-size: 20px"></sup></h3>

                    <p>Total Carburant</p>
                </div>
                <div class="icon">
                    <i class="fa fa-user"></i>
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
        <div class="col-md-8">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Graphe</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <canvas id="line-chart" width="800" height="450"></canvas>

                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>

        </div>
        <div class="col-md-4">
            <div class="info-box bg-red">
                <span class="info-box-icon"><i class="fa fa-money"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Cout Moyent par Véhicule</span>
                    <span class="info-box-number">5,200</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 50%"></div>
                    </div>
                    <span class="progress-description">
                        50% Increase in 30 Days
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <div class="info-box bg-blue">
                <span class="info-box-icon"><i class="fa fa-tachometer"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Cout par Kilometre</span>
                    <span class="info-box-number">5,200</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 50%"></div>
                    </div>
                    <span class="progress-description">
                        50% Increase in 30 Days
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <div class="info-box bg-green">
                <span class="info-box-icon"><i class="fa fa-clock-o"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Nombre D enregistrement</span>
                    <span class="info-box-number">5,200</span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 50%"></div>
                    </div>
                    <span class="progress-description">
                        50% Increase in 30 Days
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>


        </div>
    </div>


</div>







</div>

@include('layout.pieds-dash')

@stop

