<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></a>
    <div class="top-left-part"><a class="logo" href="index.html"><b><img src="/plugins/images/pixeladmin-logo.png" alt="home" /></b><span class="hidden-xs"><img src="/plugins/images/pixeladmin-text.png" alt="home" /></span></a></div>
   
    <ul class="nav navbar-top-links navbar-right pull-right">
        <li>
            <a class="profile-pic" href="{{url('/admin/dashboard')}}"><b class="hidden-xs">{{ auth()->user()->name }}</b> </a>
        </li>
    </ul>
</div>
<!-- /.navbar-header -->
<!-- /.navbar-top-links -->
<!-- /.navbar-static-side -->
</nav>