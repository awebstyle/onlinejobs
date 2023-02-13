@extends('front.template.index')

@section('title')
    Message
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
        <style type="text/css">
        .mailbox-controls .btn {
            padding: 3px 8px;
            margin: 0px 2px;
        }
        </style>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
                <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Messages</h3>

                    <div class="box-tools pull-right" style="margin-bottom: 5px;">
                    <div class="has-feedback">
                        <input type="text" class="form-control input-sm" placeholder="Search Mail">
                        <span class="fa fa-search form-control-feedback" style="margin-top: -25px"></span>
                    </div>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="mailbox-controls">
                    <div class="btn-group">
                    </div>
                    </div>
                    <div class="table-responsive mailbox-messages">
                    <table class="table table-hover table-striped">
                        <tbody>
                        <tr><td><input type="checkbox"></td><td class="mailbox-name"><a href={{ route('readmessage', 1) }}>URC</a></td><td class="mailbox-subject">Thanks for your application. You will receive an at the end of this week for the interview.</td><td class="mailbox-date">2022-05-16 16:49:09</td></tr> 
                        </tbody>
                    </table>
                    <!-- /.table -->
                    </div>
                    <!-- /.mail-box-messages -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer no-padding">
                    <div class="mailbox-controls">
                    </button>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                    </div>
                    <!-- /.btn-group -->
                    <a href="" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></a>
                    <div class="pull-right">
                        1-50/200
                        <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                        </div>
                        <!-- /.btn-group -->
                    </div>
                    <!-- /.pull-right -->
                    </div>
                </div>
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

    </div><!--/col-sm-9-->
</div>
<!-- end content--> 

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
<!-- end modal -->
@endsection