<div class="col-sm-3"><!--left col-->
    <div class="panel panel-default">            
        <div class="panel-body"> 
        <div  id="image-container">
            <img title="profile image"  data-target="#myModal1"  data-toggle="modal"  src={{ asset("plugins/home-plugins/img/team1.jpg") }} style="border-radius : 50% "> 
        </div>
        </div>

        <ul class="list-group">
        <li class="list-group-item text-muted">Profile</li>
        <li class="list-group-item text-right"><span class="pull-left"><strong>Real Name</strong></span> 
        Gisèle Bastin 
        </li>
        </ul> 

        <div class="box box-solid">  
        <div class="box-body no-padding">
            <ul class="nav nav-pills nav-stacked"> 
            <li class="active"><a href={{ route('appliedjob') }}><i class="fa fa-list"></i> Applied Jobs
                </a></li>
                <li class=""><a href="#"><i class="fa fa-user"></i> Accounts </a></li>
            <li class=""><a href={{ route('profilemessage') }}><i class="fa fa-envelope-o"></i> Messages
                <span class="label label-success pull-right">1</span></a></li> 
            </ul>
        </div>
        <!-- /.box-body -->
        </div>

    <!-- /.box -->
    </div>
    
    </div> 