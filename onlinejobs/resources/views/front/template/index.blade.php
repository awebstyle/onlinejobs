
@include('front.template.partials._head')
    <body>
        <div id="wrapper" class="home-page">

            <!-- start header -->
                @include('front.template.partials._header')           
            <!-- end header --> 

            <!-- start Modal -->
                @include('front.template.partials._modal')          
            <!-- end Modal -->   
       
            <!-- start content -->
                @yield('content')
            <!-- end content -->

            <!-- start footer -->
                @include('front.template.partials._footer')          
            <!-- end footer -->
            
        </div>
                
        @include('front.template.partials._scripts')
    </body>
</html>