@extends('admin.template.index')

@section('title')
    Categories
@endsection

@section('content')
    <div class="content-wrapper">

    <section class="content-header">
        <h1>Category</h1>
        <ol class="breadcrumb">
        <li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li><li class=>Category</li>      </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">List of Categories  <a href={{ route('categories.create') }} class="btn btn-primary btn-xs  ">  <i class="fa fa-plus-circle fw-fa"></i> Add Category</a>  </h1>
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>

                        <form action="" Method="POST">
                            <div class="table-responsive">

                                <table id="dash-table" class="table table-striped table-bordered table-hover" style="font-size:12px" cellspacing="0">
                                
                                    <thead>
                                        <tr>
                                            <th> Category</th> 
                                            <th width="10%">Action</th>
                                        </tr>	
                                    </thead>
                                     
                                    <tbody>
                                        @foreach($categories as $category)
                                            <tr>
                                                <td>{{ $category->category }}</td>
                                                <td style="display: flex; justify-content: space-around;">
                                                    <a title="Edit" href={{ route('categories.edit', $category->id)}} class="btn btn-primary btn-xs  "> <span class="fa fa-edit fw-fa"></a>
                                                     <form action="{{route('categories.destroy', $category->id)}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" id="delete" class="btn btn-danger" value=""><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <div class="btn-group">
                                </div>

                            </div>
                        </form>

                        <div class="table-responsive"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection