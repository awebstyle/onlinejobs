 <div style="min-height: 30px;"></div>

 <div class="navbar navbar-default navbar-static-top" > 
    <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href={{ route('home') }}>Website Name</a>
            </div>

            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav">
                    <li class="{{ request()->is('home') ? 'active' : '' }}"><a href={{ route('home') }}>Home</a></li> 
                    <li class="dropdown {{ request()->is('advancedsearch') ? 'active' : '' }}">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Job Search <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class=""><a href={{ route('advancedsearch') }}>Advanced Search</a></li>
                            <li><a href={{ route('jobbycompany') }}>Job By Company</a></li>
                            <li><a href={{ route('jobbyfunction') }}>Job By Function</a></li>
                        </ul>
                    </li> 
                    <li class="dropdown {{ request()->is('jobbycategory') ? 'active' : '' }}">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Popular Jobs <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        @foreach($categories as $category)
                            <li><a href={{ route('jobbycategory', $category->category) }}>{{ $category->category }}</a></li>
                        @endforeach
                        
                    </ul>
                    </li> 
                    <li class="{{ request()->is('company') ? 'active' : '' }}"><a href={{ route('company') }}>Company</a></li>
                    <li class="{{ request()->is('hiring') ? 'active' : '' }}"><a href={{ route('hiring') }}>Hiring Now</a></li>
                    <li class="{{ request()->is('about') ? 'active' : '' }}"><a href={{ route('about') }}>About Us</a></li>
                    <li class="{{ request()->is('contactus') ? 'active' : '' }}"><a href={{ route('contactus') }}>Contact</a></li>
                </ul>
            </div>
        </div>
    </div>