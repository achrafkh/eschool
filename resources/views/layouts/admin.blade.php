<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="https://wrappixel.com/demos/free-admin-templates/pixel-admin-lite/plugins/images/favicon.png">
        <title>Dashboard - Managment</title>
        <!-- Bootstrap Core CSS -->
        <link href="/admin/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Menu CSS -->
        <link href="/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
        <!-- Animation CSS -->
        <link href="/admin/css/animate.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="/admin/css/style.css" rel="stylesheet">
        <!-- color CSS you can use different color css from css/colors folder -->
        <!-- We have chosen the skin-blue (blue.css) for this starter
        page. However, you can choose any other skin from folder css / colors .
        -->
        <link href="/admin/css/colors/blue-dark.css" id="theme" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
        .custab{
        border: 1px solid #ccc;
        padding: 5px;
        margin: 5% 0;
        box-shadow: 3px 3px 2px #ccc;
        transition: 0.5s;
        }
        .custab:hover{
        box-shadow: 3px 3px 0px transparent;
        transition: 0.5s;
        }
        </style>
    </head>
    <body>
        <!-- Preloader -->
        <div class="preloader">
            <div class="cssload-speeding-wheel"></div>
        </div>
        <div id="wrapper">
            <!-- Navigation -->
            @include('admin.partials.nav')
            <!-- Left navbar-header -->
            @include('admin.partials.sidebar')
            <!-- Left navbar-header end -->
            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Copyright & shit </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/admin/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="/admin/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="/admin/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="/admin/js/custom.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
    $('table').DataTable( {
        responsive: true
    } );
    </script>
    @yield('js')
</body>
</html>