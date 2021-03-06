<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>后台管理系统 | FILM-CMS | Jesseyx</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap 3.3.6 -->
    {{--<link rel="stylesheet" href={{ cssAsset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}>--}}
    <!-- Font Awesome -->
    {{--<link rel="stylesheet" href={{ cssAsset('build/css/font-awesome.min.css') }}>--}}
    <!-- Ionicons -->
    {{--<link rel="stylesheet" href={{ cssAsset('build/css/ionicons.min.css') }}>--}}
    <!-- Theme style -->
    {{--<link rel="stylesheet" href={{ cssAsset('node_modules/admin-lte/dist/css/AdminLTE.min.css') }}>--}}
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    {{--<link rel="stylesheet" href={{ cssAsset('node_modules/admin-lte/dist/css/skins/skin-blue.min.css') }}>--}}
    <!-- Self style -->
    {{--<link rel="stylesheet" href={{ cssAsset('dist/css/main.css') }}>--}}

    <link rel="stylesheet" href={{ cssAsset('/css/vendor.css') }}>
    <link rel="stylesheet" href={{ cssAsset('/css/main.min.css') }}>

    @yield('header')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src={{ jsAsset('/js/ieShim.bundle.js') }}></script>
    <![endif]-->
</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>Film</b>CMS</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Film</b>CMS</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ imgAsset($_user->avatar) }}" class="user-image" alt="User Image">
                            <span class="hidden-xs">{{ $_user->name }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{ imgAsset($_user->avatar) }}" class="img-circle" alt="User Image">

                                <p>
                                    {{ $_user->name }} - Web Developer
                                    <small>创建时间 {{ $_user->created_at }}</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            {{--<li class="user-body">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-xs-4 text-center">--}}
                                        {{--<a href="#">Followers</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-xs-4 text-center">--}}
                                        {{--<a href="#">Sales</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-xs-4 text-center">--}}
                                        {{--<a href="#">Friends</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- /.row -->--}}
                            {{--</li>--}}
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="/user/profile" class="btn btn-default btn-flat">个人中心</a>
                                </div>
                                <div class="pull-right">
                                    <a href="/auth/logout" class="btn btn-default btn-flat">退出</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ imgAsset($_user->avatar) }}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{ $_user->name }}</p>
                    {{--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>--}}
                    <a href="/user/profile" style="display: inline-block; max-width: 140px; text-overflow: ellipsis; overflow: hidden;"><i class="fa fa-circle text-success"></i> 超级管理员</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="搜索...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul id="sidebarMenu" class="sidebar-menu">
                <!-- <li class="header">所有模块</li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                        <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                    </ul>
                </li>
                <li class="treeview active">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Layout Options</span>
                        <span class="label label-primary pull-right">4</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                        <li><a href="../layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                        <li class="active"><a href="../layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                        <li><a href="collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
                    </ul>
                </li>
                <li>
                    <a href="../widgets.html">
                        <i class="fa fa-th"></i> <span>Widgets</span>
                        <small class="label pull-right bg-green">new</small>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-pie-chart"></i>
                        <span>Charts</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                        <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                        <li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                        <li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>UI Elements</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="../UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
                        <li><a href="../UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
                        <li><a href="../UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
                        <li><a href="../UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
                        <li><a href="../UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
                        <li><a href="../UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>Forms</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="../forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                        <li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                        <li><a href="../forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-table"></i> <span>Tables</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="../tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                        <li><a href="../tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
                    </ul>
                </li>
                <li>
                    <a href="../calendar.html">
                        <i class="fa fa-calendar"></i> <span>Calendar</span>
                        <small class="label pull-right bg-red">3</small>
                    </a>
                </li>
                <li>
                    <a href="../mailbox/mailbox.html">
                        <i class="fa fa-envelope"></i> <span>Mailbox</span>
                        <small class="label pull-right bg-yellow">12</small>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-folder"></i> <span>Examples</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="../examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                        <li><a href="../examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                        <li><a href="../examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                        <li><a href="../examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                        <li><a href="../examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                        <li><a href="../examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                        <li><a href="../examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                        <li><a href="../examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                        <li><a href="../examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-share"></i> <span>Multilevel</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                        <li>
                            <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                                <li>
                                    <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                                    <ul class="treeview-menu">
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                    </ul>
                </li>
                <li><a href="../../documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
                <li class="header">LABELS</li>
                <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
                <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->
                @include('menu.index')
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        {{--<section class="content-header">--}}
            {{--<h1>--}}
                {{--Fixed Layout--}}
                {{--<small>Blank example to the fixed layout</small>--}}
            {{--</h1>--}}
            {{--<ol class="breadcrumb">--}}
                {{--<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>--}}
                {{--<li><a href="#">Layout</a></li>--}}
                {{--<li class="active">Fixed</li>--}}
            {{--</ol>--}}
        {{--</section>--}}

        <!-- Main content -->
        {{--<section class="content">--}}
            {{--<div class="callout callout-info">--}}
                {{--<h4>Tip!</h4>--}}

                {{--<p>Add the fixed class to the body tag to get this layout. The fixed layout is your best option if your sidebar--}}
                    {{--is bigger than your content because it prevents extra unwanted scrolling.</p>--}}
            {{--</div>--}}
            {{--<!-- Default box -->--}}
            {{--<div class="box">--}}
                {{--<div class="box-header with-border">--}}
                    {{--<h3 class="box-title">Title</h3>--}}

                    {{--<div class="box-tools pull-right">--}}
                        {{--<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">--}}
                            {{--<i class="fa fa-minus"></i></button>--}}
                        {{--<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">--}}
                            {{--<i class="fa fa-times"></i></button>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="box-body">--}}
                    {{--Start creating your amazing application!--}}
                {{--</div>--}}
                {{--<!-- /.box-body -->--}}
                {{--<div class="box-footer">--}}
                    {{--Footer--}}
                {{--</div>--}}
                {{--<!-- /.box-footer-->--}}
            {{--</div>--}}
            {{--<!-- /.box -->--}}

        {{--</section>--}}
        <!-- /.content -->

        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            Powered by Laravel, React, Admin-lte
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="https://github.com/Jesseyx" target="_blank">By Jesseyx</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
{{--<script src={{ jsAsset('node_modules/admin-lte/plugins/jQuery/jQuery-2.2.0.min.js') }}></script>--}}
<!-- Bootstrap 3.3.6 -->
{{--<script src={{ jsAsset('node_modules/bootstrap/dist/js/bootstrap.min.js') }}></script>--}}
<!-- SlimScroll -->
{{--<script src={{ jsAsset('node_modules/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js') }}></script>--}}
<!-- FastClick -->
{{--<script src={{ jsAsset('node_modules/admin-lte/plugins/fastclick/fastclick.js') }}></script>--}}
<!-- AdminLTE App -->
{{--<script src={{ jsAsset('node_modules/admin-lte/dist/js/app.min.js') }}></script>--}}
<!-- patchFix -->
{{--<script src={{ jsAsset('build/js/patchFix.js') }}></script>--}}
<script src={{ jsAsset('/js/vendor.js') }}></script>

@yield('footer')
</body>
</html>
