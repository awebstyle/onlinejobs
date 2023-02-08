@extends('admin.template.index')

@section('title')
    Company
@endsection

@section('content')
<div class="content-wrapper">

    <section class="content-header">
        <h1>
        Company        <!-- <small>it all starts here</small> -->
        </h1>
        <ol class="breadcrumb">
        <li><a href="admin "><i class="fa fa-dashboard"></i> Home</a></li><li class=>Company</li>      </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                                                <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">List of Companies  <a href={{ route('addcompany') }} class="btn btn-primary btn-xs  ">  <i class="fa fa-plus-circle fw-fa"></i> Add Company</a>  </h1>
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                        <form action="" Method="POST">  	
                            <div class="table-responsive">					
                                <table id="dash-table" class="table table-striped table-bordered table-hover"  style="font-size:12px" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <!-- <th>No.</th> -->
                                            <th>Name</th> 
                                            <th>Address</th> 
                                            <th>Contact No.</th> 
                                            <th width="10%" align="center">Action</th>
                                        </tr>	
                                    </thead> 
                                    <tbody>
                                                                                    <tr>
                                                <td>Copreros</td>
                                                <td>Mabinay&#039;s</td>
                                                <td>035656</td>
                                                <td align="center">
                                                    <a title="Edit" href="/admin/editcompany/1" class="btn btn-primary btn-xs  ">  <span class="fa fa-edit fw-fa"></a>
                                                    <a title="Delete" href="/admin/deletecompany/1" class="btn btn-danger btn-xs  ">  <span class="fa  fa-trash-o fw-fa "></a>
                                                </td>
                                            </tr> 
                                                                                    <tr>
                                                <td>URC</td>
                                                <td>Bry Camugao</td>
                                                <td>023654</td>
                                                <td align="center">
                                                    <a title="Edit" href="/admin/editcompany/3" class="btn btn-primary btn-xs  ">  <span class="fa fa-edit fw-fa"></a>
                                                    <a title="Delete" href="/admin/deletecompany/3" class="btn btn-danger btn-xs  ">  <span class="fa  fa-trash-o fw-fa "></a>
                                                </td>
                                            </tr> 
                                                                                    <tr>
                                                <td>Quest</td>
                                                <td>Kabankalan City</td>
                                                <td>23165</td>
                                                <td align="center">
                                                    <a title="Edit" href="/admin/editcompany/4" class="btn btn-primary btn-xs  ">  <span class="fa fa-edit fw-fa"></a>
                                                    <a title="Delete" href="/admin/deletecompany/4" class="btn btn-danger btn-xs  ">  <span class="fa  fa-trash-o fw-fa "></a>
                                                </td>
                                            </tr> 
                                                                                    <tr>
                                                <td>Palacios Company</td>
                                                <td>Kabankalan City</td>
                                                <td>0625656899</td>
                                                <td align="center">
                                                    <a title="Edit" href="/admin/editcompany/5" class="btn btn-primary btn-xs  ">  <span class="fa fa-edit fw-fa"></a>
                                                    <a title="Delete" href="/admin/deletecompany/5" class="btn btn-danger btn-xs  ">  <span class="fa  fa-trash-o fw-fa "></a>
                                                </td>
                                            </tr> 
                                                                                    <tr>
                                                <td>IT Company</td>
                                                <td>Kabankalan City</td>
                                                <td>04564123</td>
                                                <td align="center">
                                                    <a title="Edit" href="/admin/editcompany/6" class="btn btn-primary btn-xs  ">  <span class="fa fa-edit fw-fa"></a>
                                                    <a title="Delete" href="/admin/deletecompany/6" class="btn btn-danger btn-xs  ">  <span class="fa  fa-trash-o fw-fa "></a>
                                                </td>
                                            </tr> 
                                                                               				  
                                    </tbody>
                                </table>
                            </div>
                            <div class="btn-group">
                            </div>
                        </form>
                        <div class="table-responsive">	  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection