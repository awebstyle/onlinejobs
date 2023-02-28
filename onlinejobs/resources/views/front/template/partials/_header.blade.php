<header>
    <div class="topbar navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">      
                    <p class="pull-left hidden-xs">
                        <i class="fa fa-phone"></i>Tel No. (+001) 123-456-789
                    </p>
                        @if(Session::has('client'))
                            
                            <p class="pull-right login">
                                <a title="View Notification(s)" href=""> <i class="fa fa-bell-o"></i> <span class="label label-success">2</span></a> | 
                                        
                                <a title="View Message(s)" href=""> <i class="fa fa-envelope-o"></i> <span class="label label-success">1</span></a> | 
                                        
                                <a title="View Profile" href={{ route('profile', Session::get('client')->id)}}> <i class="fa fa-user"></i> Howdy, {{ Session::get('client')->firstname }}</a> | 
                                        
                                <a href={{ route('signout') }}>  <i class="fa fa-sign-out"> </i>Logout</a> 
                                        
                            </p>
                        @else
                            <p   class="pull-right login">
                                <a data-target="#myModal" data-toggle="modal" href=""> <i class="fa fa-lock"></i> Login </a>
                            </p> 
                        @endif

                </div>
            </div>
        </div>
    </div> 

    @include('front.template.partials._navbar')
</header> 