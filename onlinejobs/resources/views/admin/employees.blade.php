@extends('admin.template.index')

@section('title')
    Employees
@endsection

@section('content')
<div class="content-wrapper">

    <section class="content-header">
        <h1>Employees</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                <i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li class=>Employees</li>      
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                                                <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">List of Employee's  <a href={{ route('employees.create') }} class="btn btn-primary btn-xs  ">  <i class="fa fa-plus-circle fw-fa"></i> Add New Employee</a>  </h1>
                            </div>
                                <!-- /.col-lg-12 -->
                        </div>

                        <form class="wow fadeInDownaction" action="" Method="">
                            <table id="dash-table" class="table table-striped  table-hover table-responsive" style="font-size:12px" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="5%">EmployeeNo</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Sex</th>
                                        <th>Age</th>
                                        <th>ContactNo</th>
                                        <!-- <th>Department</th> -->
                                        <th>Position</th>
                                        <!-- <th>Work Status</th> -->
                                        <th width="14%" >Action</th> 
                                    </tr>	
                                </thead> 

                                <tbody>
                                    @foreach($employees as $employee)
                                        <tr>
                                            <td>{{ $employee->empid }}</td>
                                            <td>{{ $employee->firstname }}</td>
                                            <td>{{ $employee->lastname }}</td>
                                            <td>{{ $employee->gender }}</td>
                                            <td>{{ $employee->birthday }}</td>
                                            <td>0973566626</td>
                                            <td>Developer</td>
                                            <td style="display: flex; justify-content: space-around;">    
                                                <a title="Edit" href={{ route('employees.edit', $employee->id)}}  class="btn btn-info btn-xs  ">
                                                <span class="fa fa-edit fw-fa"></span></a> 
                                                <form method="POST" action={{ route('employees.destroy', $employee->id) }}>
                                                    @csrf
                                                    @method('delete')
                                                    <button type="sumbit" class="btn btn-danger btn-xs"><span class="fa fa-trash-o fw-fa"></span></button>
                                                </form> 
                                            </td>
                                        </tr> 
                                    @endforeach		
                                </tbody>
                            </table>    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection