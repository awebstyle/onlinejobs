@extends('front.template.profileindex')

@section('title')
    Job Applied
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
                            <form action="" method="POST">

                                <div class="col-sm-12 content-header">
                                    View Details
                                </div>
                                
                                <div class="col-sm-12 content-body" >  
                                    <h3>Accounting</h3>
                                    <input type="hidden" name="JOBREGID" value="3">
                                
                                    <div class="col-sm-6">
                                        <ul>
                                            <li><i class="fp-ht-bed"></i>Required No. of Employee's : 1</li>
                                            <li><i class="fp-ht-food"></i>Salary : 15,000.00</li>
                                            <li><i class="fa fa-sun-"></i>Duration of Employment : may 20</li>
                                        </ul>
                                    </div> 
                                    <div class="col-sm-6">
                                        <ul> 
                                            <li><i class="fp-ht-tv"></i>Prefered Sex : Female</li>
                                            <li><i class="fp-ht-computer"></i>Sector of Vacancy : yes</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-12">
                                        <p>Job Description : </p>   
                                        <p style="margin-left: 15px;">We are looking for bachelor of science in Acountancy</p>
                                    </div>
                                    <div class="col-sm-12"> 
                                        <p>Qualification/Work Experience : </p>
                                        <p style="margin-left: 15px;">Two years Experience</p>
                                    </div>
                                    <div class="col-sm-12"> 
                                        <p>Employeer : </p>
                                        <p style="margin-left: 15px;">URC</p> 
                                        <p style="margin-left: 15px;">@ Bry Camugao</p>
                                    </div>
                                </div>
                            
                                <div class="col-sm-12 content-footer">
                                    <p>
                                        <i class="fa fa-paperclip"></i>  
                                        Attachment Files
                                    </p>
                                    <div class="col-sm-12 slider">
                                        <h3>Download Resume <a href="">Here</a></h3>
                                    </div>  
                                    <div class="col-sm-12">
                                        <p>Feedback</p>
                                        <p>Thanks for your application. You will receive an at the end of this week for the interview.</p>
                                    </div>
                                    <div class="col-sm-12  submitbutton "> 
                                        <a href="" class="btn btn-primary fa fa-arrow-left">Back</a>
                                    </div> 
                                </div>

                            </form>      
                        </div>
                    <!-- /.row -->
                    </section>
                    <!-- /.content -->
                </div>
            
            </div><!--/col-sm-9-->
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

                <form action="" method=
                "post">
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="rows">
                                <div class="col-md-12">
                                    <div class="rows">
                                        <div class="col-md-8">
                                            <input id=
                                            "photo" name="photo" type=
                                            "file" />
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
<!-- /.modal -->
@endsection