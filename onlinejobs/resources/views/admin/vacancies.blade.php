@extends('admin.template.index')

@section('title')
    Vacancies
@endsection

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
          Vacancy        <!-- <small>it all starts here</small> -->
        </h1>
        <ol class="breadcrumb">
          <li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li><li class=>Vacancy</li>      </ol>
    </section>

    @if(Session::has('status'))
      <div class="alert alert-success">
        {{ Session::get('status') }}
      </div>
    @endif

    <section class="content">

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
                            <div class="row">
                <div class="col-lg-12">
                  <h1 class="page-header">List of Vacancies  <a href={{ route('vacancies.create') }} class="btn btn-primary btn-xs  ">  <i class="fa fa-plus-circle fw-fa"></i> Add Job Vacancy</a>  </h1>
                </div>
              <!-- /.col-lg-12 -->
              </div>

                <form action="controller.php?action=delete" Method="POST">  	
                  <div class="table-responsive">					
                    <table id="dash-table" class="table table-striped table-bordered table-hover"  style="font-size:12px" cellspacing="0">
                    
                      <thead>
                        <tr>

                          <!-- <th>No.</th> -->
                          <th>Company Name</th> 
                          <th>Occupation Title</th> 
                          <th>Require no. of Employees</th> 
                          <th>Salaries</th> 
                          <th>Duration of Employment</th> 
                          <th>Qualification/Work experience</th> 
                          <th>Job Description</th> 
                          <th>Prefered Sex</th> 
                          <th>Sector of Vacancy</th> 
                          
                          <th width="10%">Action</th>
                        </tr>	
                      </thead> 
                      <tbody>
                        @foreach($vacancies as $vacancy)
                          <tr>
                            <td>{{ $vacancy->companyname }}</td>
                            <td>{{ $vacancy->occuptitle }}</td>
                            <td>{{ $vacancy->numofemp }}</td>
                            <td>{{ $vacancy->salary }}</td>
                            <td>{{ $vacancy->duration }}</td>
                            <td>{{ $vacancy->experience }}</td>
                            <td>{{ $vacancy->description }}</td>
                            <td>{{ $vacancy->prefsex }}</td>
                            <td>{{ $vacancy->sector }}</td>
                            <td style="display: flex; justify-content: space-around;">
                              <a title="Edit" href={{ route('vacancies.edit', $vacancy->id) }} class="btn btn-primary btn-xs  ">  <span class="fa fa-edit fw-fa"></a>
                             <form method="POST" action={{ route('vacancies.destroy', $vacancy->id) }}>
                                  @csrf
                                  @method('delete')
                                  <button type="sumbit" class="btn btn-danger btn-xs"><span class="fa fa-trash-o fw-fa"></span></button>
                              </form> 
                            </td>
                          </tr>
                        @endforeach                  
                      </tbody>
                    </table>
                  <div class="btn-group">
              <!--  <a href="index.php?view=add" class="btn btn-default">New</a> -->
                        </div>
            
            
                </form>

              <div class="table-responsive">	  
              </div>
            </div>
          </div>
        </div>
    </section>
  </div>
@endsection