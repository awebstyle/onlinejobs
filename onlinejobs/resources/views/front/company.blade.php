@extends('front.template.index')

@section('title')
    Company
@endsection

@section('content')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="pageTitle">Company</h2>
                </div>
            </div>
        </div>
    </section>

    <section id="content">
        <div class="container content">     
            <!-- Service Blcoks -->  
            <div class="row">
                    <div class="col-sm-4 info-blocks">
                        <i class="icon-info-blocks fa fa-building-o"></i>
                        <div class="info-blocks-in">
                            {{-- <h3><a href={{ route('/jobbycompany', [$company->id]) }}>Copreros</a></h3> --}}
                            <h3><a href={{ route('hiringcompany', 1) }}>Copreros</a></h3>
                            <!-- <p>weqwe</p> -->
                            <p>Address :Mabinay&#039;s</p>
                            <p>Contact No. :03565</p>
                        </div>
                    </div>
            </div> 
        </div>
    </section> 
@endsection