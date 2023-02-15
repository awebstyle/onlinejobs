@extends('front.template.index')

@section('title')
    Advanced search
@endsection

@section('content')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="pageTitle">Advanced Search</h2>
                </div>
            </div>
        </div>
    </section> 

    <style type="text/css">
        #content {
            min-height: 500px; 
        }
        #content .panel {
            padding: 10px;
        }
        .panel-body label {
            font-size: 20px; 
        }
        .panel-body input {
            font-size: 15px;
        }
        .panel-body > .row {
            margin-bottom:10px;
        }
    </style>

    <form action={{ route('searchjob') }} method="POST"> 
        @csrf
        <section id="content">
            <div class="container content">
                <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <div class="panel">
                            <div class="panel-header"></div>
                            <div class="panel-body">
                            
                            <div class="row">
                                <div class="col-sm-12 search1">
                                <label class="col-sm-3">SEARCH:</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="" name="searchedjob" id="searchedjob" placeholder="Search For">
                                </div>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-sm-12 search1">
                                <label class="col-sm-3">COMPANY:</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="company" id="company">
                                    <option value="">All</option>
                                    @foreach($companies as $company)
                                        <option>{{ $company->name }}</option>		
                                    @endforeach
                                    </select>
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 search1">
                                <label class="col-sm-3">FUNCTION:</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="category" id="category">
                                        <option value="">All</option>
                                        @foreach($categories as $category)
                                            <option>{{ $category->category }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-sm-12 search1">
                                    <label class="col-sm-3"></label>
                                    <div class="col-sm-9">
                                            <input type="submit" name="submit" class="btn btn-success">
                                    </div>
                                </div>
                            </div>

                            </div>
                        </div> 
                    </div>
                <div class="col-sm-2"></div> 
            </div>
        </section>
    </form>  
@endsection