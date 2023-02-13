@extends('front.template.index')

@section('title')
    Hiring Company
@endsection

@section('content')
<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle">Hiring In {{ $company->name }}</h2>
            </div>
        </div>
    </div>
</section>

<section id="content">
    <div class="container content">     
        <!-- Service Blocks -->    
        <table id="dash-table" class="table table-hover">
            <thead>
                <th>Job Title</th>
                <th>Company</th>
                <th>Location</th>
                <th>Date Posted</th>
            </thead>
            <tbody>
                @foreach($vacancies as $vacancy)
                    <tr>
                        <td><a href={{ route('vacancies.show', $vacancy->id)}}>{{$vacancy->occuptitle}}</a></td>
                        <td>{{$company->name}}</td>
                        <td>{{$company->address}}</td>
                        <td>{{$vacancy->created_at}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>   
    </div>
</section> 
@endsection