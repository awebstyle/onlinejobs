@include('admin.template.partials._head')


<body class="hold-transition skin-blue fixed sidebar-mini">

    <div class="wrapper">

        <!-- start header -->
        @include('admin.template.partials._header')
        <!-- end header -->

        <!-- start modal -->
        @include('admin.template.partials._modal')
        <!-- end modal -->

        <!-- left sidebar -->
        @include('admin.template.partials._sidebar')
        <!-- end sidebar -->            

        <!-- start content -->
        @yield('content')
        <!-- end content -->

        <!-- start footer -->
        @include('admin.template.partials._footer')
        <!-- end footer -->

    </div>
        
    @include('admin.template.partials._scripts')           
</body>

</html>
