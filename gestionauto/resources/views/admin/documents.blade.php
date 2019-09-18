@extends('layout.layout')
@section('content')
@section('grand-text','Document')
@section('grands','Tableau de Bord')
@section('petit-text','Document')

<div class="container-fluid">
<div class="row">
    <a href="">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-black"><i class="fa fa-folder"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number">41,410</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
    </a>
    <!-- /.col -->
<a href="">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-black"><i class="fa fa-folder"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Likes</span>
            <span class="info-box-number">41,410</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
</a>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix visible-sm-block">

    </div>
    <a href="#" class="text-decoration-none">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-black"><i class="fa fa-folder"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Sales</span>
                <span class="info-box-number">760</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
    </a>

    <!-- /.col -->
    <a href="#" class="text-decoration-none">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-black"><i class="fa fa-file"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Facture Garage</span>
                <span class="info-box-number">date: 10/19/2019</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
      </div>
    </a>

@stop
