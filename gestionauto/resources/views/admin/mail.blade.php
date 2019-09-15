@extends('layout.layout')
@section('content')
@section('grand-text','Tableau de Bord')
@section('grands','Tableau de Bord')
@section('petit-text','MailSend')
<link rel="stylesheet" href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

<div class="container-fluid">
                <!-- Content Header (Page header) -->


                <!-- Main content -->
                <section class="content">
                    <div class="row">

                    <!-- /.col -->
                    <div class="col-md-12">
                         <div class="box box-primary">
                            <div class="box-header with-border">
                            <h3 class="box-title">Nouveau Message</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="form-group">
                                <input class="form-control" placeholder="To:">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Subject:">
                            </div>
                            <div class="form-group">
                                <textarea id="compose-textarea" class="form-control" style="height: 300px">

                                </textarea>
                        </div>
                        <div class="form-group">
                            <div class="btn btn-default btn-file">
                                <i class="fa fa-paperclip"></i> Attachment
                                <input type="file" name="attachment">
                            </div>
                            <p class="help-block">Max. 32MB</p>
                        </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                          <div class="pull-right">
                            <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
                          </div>
                          <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
                        </div>
                        <!-- /.box-footer -->
                      </div>
                      <!-- /. box -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </section>
                <!-- /.content -->
              </div>
              <!-- /.content-wrapper -->

    <script>
            $(function () {
                //Add text editor
                $("#compose-textarea").wysihtml5();
            });
    </script>
    <script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

@stop
