@extends('front.template.index')

@section('title')
    Search by Title
@endsection

@section('content')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="pageTitle">Search by Job Title</h2>
                </div>
            </div>
        </div>
    </section> 

    <style type="text/css">
        #content {
            min-height: 500px; 
        }
        #custom-search-input{
            padding: 3px;
            border: solid 1px #E4E4E4;
            border-radius: 6px;
            background-color: #fff;
        }
        
        #custom-search-input input{
            border: 0;
            box-shadow: none;
        }
        
        #custom-search-input button{
            margin: 2px 0 0 0;
            background: none;
            box-shadow: none;
            border: 0;
            color: #666666;
            padding: 0 8px 0 10px;
            border-left: solid 1px #ccc;
        }
        
        #custom-search-input button:hover{
            border: 0;
            box-shadow: none;
            border-left: solid 1px #ccc;
        }
        
        #custom-search-input .glyphicon-search{
            font-size: 23px;
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
                                        <input class="form-control" type="" name="searchedjob" placeholder="Search For">
                                    </div>
                                </div>
                            </div>   
                            <div class="row">
                                <div class="col-sm-12 search1">
                                    <label class="col-sm-3">TITLE:</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="occuptitle" id="occuptitle">
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