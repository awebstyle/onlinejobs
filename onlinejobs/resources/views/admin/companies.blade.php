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
                                <h1 class="page-header">List of Companies  <a href={{ route('companies.create') }} class="btn btn-primary btn-xs  ">  <i class="fa fa-plus-circle fw-fa"></i> Add Company</a>  </h1>
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
                                            <th syle="width=10%;">Action</th>
                                        </tr>	
                                    </thead> 
                                    <tbody>
                                       
                                        @foreach($companies as $company)
                                            <tr>
                                                <td>{{ $company->name }}</td>
                                                <td>{{ $company->address }}</td>
                                                <td>{{ $company->contact }}</td>
                                                <td style="display: flex; justify-content: space-around;">
                                                    <a title="Edit" href={{ route('companies.edit', $company->id)}} class="btn btn-primary btn-xs  ">  <span class="fa fa-edit fw-fa"></a>
                                                    <form action="{{route('companies.destroy', $company->id)}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" id="delete" class="btn btn-danger" value=""><i class="fa fa-trash"></i></button>
                                                    </form>
                                                    
                                                </td>
                                            </tr> 
                                        @endforeach                                          
                                                                               				  
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