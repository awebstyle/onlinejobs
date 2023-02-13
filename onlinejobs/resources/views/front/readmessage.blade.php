@extends('front.template.index')

@section('title')
    Message Content
@endsection

@section('content')
    <section id="inner-headline">
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
            <h2 class="pageTitle">Profile</h2>
        </div>
        </div>
    </div>
    </section>

    <div class="container" style="margin-top: 10px;min-height: 600px;">
        <div class="row">
        @include('front.template.partials._profilesidebar')

        <div class="col-sm-9">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper"> 
            <!-- Main content -->
            <section class="content">
            <div class="row"> 
                <!-- /.col -->
                <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                    <h3 class="box-title">Read Message</h3> 
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                    <div class="mailbox-read-info">
                        <h3>Accounting</h3>
                        <h5>From: URC                  <span class="mailbox-read-time pull-right">16 May. 2022 04:49 pm</span></h5>
                    </div>
                    <!-- /.mailbox-read-info -->
                    <div class="mailbox-controls with-border text-center">
                        <div class="btn-group">
                        </div>
                    </div>
                    <!-- /.mailbox-controls -->
                    <div class="mailbox-read-message">
                        <p>Hello Gisèle,</p>  
                        <p>Thanks for your application. You will receive a call for the interview by the end of this week.</p>
                        <p>Thanks,<br>URC</p>
                    </div>
                    <!-- /.mailbox-read-message -->
                    </div>
                    <!-- /.box-body -->
                    
                    <!-- /.box-footer -->
                    <div class="box-footer">
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
        </div> 

    </div><!--/row-->
    </div>

    <!-- end content -->

    <!-- Modal -->
    <div class="modal fade" id="myModal1" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

        <div class="modal-header">
            <button class="close" data-dismiss="modal" type=
            "button">×</button>
            <h4 class="modal-title" id="myModalLabel">Choose Image.</h4>
        </div>

        <form action="" enctype="multipart/form-data" method=
        "post">

            <div class="modal-body">
            <div class="form-group">
                <div class="rows">
                <div class="col-md-12">
                    <div class="rows">
                    <div class="col-md-8">
                        <input name="MAX_FILE_SIZE" type=
                        "hidden" value="1000000"> <input id=
                        "photo" name="photo" type=
                        "file">
                    </div>
                    <div class="col-md-4"></div>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <div class="modal-footer">
            <button class="btn btn-default" data-dismiss="modal" type=
            "button">Close</button> <button  class="btn btn-primary"
            name="savephoto" type="submit">Upload Photo</button>
            </div>

        </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    </div>
@endsection