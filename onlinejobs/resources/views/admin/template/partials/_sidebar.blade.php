<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu"> 
            <li  class="{{ request()->is('adminhome') ? 'active' : '' }}" >
                <a href={{ route('adminhome') }}>
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>  
                </a> 
            </li> 
            <li class="{{ request()->is('companies.index') || request()->is('addcompany') ? 'active' : ''}}" >
                <a href={{ route('companies.index')}}>
                    <i class="fa fa-building"></i> <span>Company</span> 
                </a>
            </li>
            <li class="{{ request()->is('vacancies.index') || request()->is('addvacancy') ? 'active' : ''}}" >
                <a href={{ route('vacancies.index') }}>
                    <i class="fa fa-suitcase"></i> <span>Vacancy</span> 
                </a>
            </li>
            <li class="{{ request()->is('employees.index') || request()->is('addemployee') ? 'active' : ''}}" >
                <a href={{ route('employees.index') }}>
                    <i class="fa fa-users"></i> <span>Employee</span> 
                </a>
            </li> 
            <li class="{{ request()->is('applicants.index') ? 'active' : ''}}" > 
                <a href={{ route('applicants.index') }}>
                    <i class="fa fa-users"></i>
                    <span>Applicants</span> 
                    <span class="label label-primary pull-right">0</span>
                </a>
            </li> 
            <li class="{{ request()->is('categories.index') || request()->is('addcategory') ? 'active' : '' }}" > 
                <a href={{ route('categories.index') }}>
                    <i class="fa fa-list"></i> <span>Category</span>  
                </a>
            </li>      
            <li class="{{ request()->is('adminusers') || request()->is('adduser') ? 'active' : ''}}">
                <a href={{ route('adminusers') }}>
                    <i class="fa fa-user"></i> <span>Manage Users</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>