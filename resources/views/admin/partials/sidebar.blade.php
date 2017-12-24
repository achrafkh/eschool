<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">
            <li style="padding: 10px 0 0;">
                <a href="{{ url('/admin/dashboard') }}" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
            </li>
            <li>
                <a href="{{ url('/admin/categories') }}" class="waves-effect"><i class="fa fa-list-ol fa-fw" aria-hidden="true"></i><span class="hide-menu">Categories</span></a>
            </li>
            <li>
                <a href="{{ url('/admin/courses') }}" class="waves-effect"><i class="fa fa-film fa-fw" aria-hidden="true"></i><span class="hide-menu">Courses</span></a>
            </li>
            <li>
                <a href="{{ url('/admin/users') }}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Users</span></a>
            </li>
        </ul>
    </div>
</div>