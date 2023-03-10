@extends('front.template.index')

@section('title')
    Profile
@endsection

@section('content')
    <!-- start content -->
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
                            <h3 class="box-title">Applied Jobs</h3> 
                            <!-- /.box-tools -->
                          </div>
                          <!-- /.box-header -->
                          <div class="box-body no-padding">
                            <div class="table-responsive mailbox-messages">
                              <table id="dash-table" class="table table-hover table-striped">
                                <thead> 
                                  <tr>
                                    <th>Job Title</th>
                                    <th>Company</th>
                                    <th>Status</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach($jobs as $job)
                                    <tr>
                                      <td class="mailbox-star">
                                        <a href=""><i class="fa fa-pencil-o text-yellow"></i>{{ $job->occuptitle }}</a>
                                      </td>
                                      <td class="mailbox-attachment">{{ $job->company }}</td>
                                      <td class="mailbox-attachment">{{ $job->status}} </td>
                                    </tr>   
                                  @endforeach   
                                </tbody>
                              </table>
                              <!-- /.table -->
                            </div>
                            <!-- /.mail-box-messages -->
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
              </div><!--/col-sm-9-->
            </div><!--/row-->
          </div>
        <!-- end content --> 
    
        <!-- Modal -->
          <div class="modal fade" id="myModal1" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal" type="button">??</button>
                  <h4 class="modal-title" id="myModalLabel">Choose Image.</h4>
                </div>

                <form action={{ route('uploadimage', $client->id) }} method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="modal-body">
                    <div class="form-group">
                      <div class="rows">
                        <div class="col-md-12">
                          <div class="rows">
                            <div class="col-md-8">
                                <input id="photo" name="image" type="file" required />
                            </div>
                            <div class="col-md-4"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal" type="button">Close</button> 
                    <button  class="btn btn-primary"
                      name="savephoto" type="submit">Upload Photo</button>
                  </div>

                </form>

              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div>
        <!-- /.modal -->
@endsection