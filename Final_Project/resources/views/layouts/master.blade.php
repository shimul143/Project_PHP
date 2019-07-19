<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cv Bank -@yield('title')</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
          type="text/css">
    <link href="/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/minified/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/minified/core.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/minified/components.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/minified/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="/assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="/assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="/assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="/assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script type="text/javascript" src="/assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script type="text/javascript" src="/assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script type="text/javascript" src="/assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script type="text/javascript"
            src="/assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script type="text/javascript" src="assets/js/plugins/ui/moment/moment.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/pickers/daterangepicker.js"></script>

    <script type="text/javascript" src="/assets/js/core/app.js"></script>
    <script type="text/javascript" src="/assets/js/pages/dashboard.js"></script>
    <!-- /theme JS files -->

</head>

<body>
<!-- Main navbar -->
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.html"><img src="/assets/images/logo_light.png" alt=""></a>
        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">

            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="/assets/images/placeholder.jpg" alt="">
							<span>Username</span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
                    <li><a href="/admin/newuser"><i class="icon-user-plus"></i> Add User</a></li>
                    <li class="divider"></li>
                    <li><a href=""><i class="icon-switch2"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->

<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">



        <!-- Main sidebar -->
        <div class="sidebar sidebar-main">
            <div class="sidebar-content">

                <!-- User menu -->
                <div class="sidebar-user">
                    <div class="category-content">
                        <div class="media">
                            <a href="/" class="media-left"><img src="/assets/images/placeholder.jpg"
                                                                class="img-circle img-sm" alt=""></a>

                            <div class="media-body">
										<span class="media-heading text-semibold">Username</span>

                                <div class="text-size-mini text-muted">
                                    <i class="icon-pin text-size-small"></i> &nbsp;Dhaka,Bangladesh
                                </div>
                            </div>

                            <div class="media-right media-middle"></div>
                        </div>
                    </div>
                </div>
                <!-- /user menu -->

                <!-- Main navigation -->
                <div class="sidebar-category sidebar-category-visible">
                    <div class="category-content no-padding">
                        <ul class="navigation navigation-main navigation-accordion">

                            <li><a href="/Admin"><i class="icon-home4"></i>
                                    <span>Dashboard</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-user-plus"></i> <span>Settings</span></a>
                                <ul>
                                   <li class="@yield('settingsactive')"><a href="/settings">Profile Settings</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-stack2"></i> <span>About</span></a>
                                <ul>
                                    <li class="@yield('aboutactive')"><a href="/about">My About</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-stack"></i> <span>Hobbies</span></a>
                                <ul>
                                    <li class="@yield('addhobbieactive')"><a href="/hobbies/addnew">Add New Hobbies</a></li>
                                    <li class="@yield('hobbieactive')"><a href="/hobbies">My Hobbies</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-spinner10 spinner"></i> <span>Facts</span></a>
                                <ul>
                                    <li class="@yield('factsaddactive')"><a href="/facts/addnew">Add New Facts</a></li>
                                    <li class="@yield('factsactive')"><a href="/facts">My Facts</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-select2"></i> <span>Skills</span></a>
                                <ul>
                                    <li class="@yield('skilladdactive')"><a href="/skills/addnew">Add New Skill</a></li>
                                    <li class="@yield('skillactive')"><a href="/skills">My Skills</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-select2"></i> <span>Education</span></a>
                                <ul>
                                    <li class="@yield('eduaddactive')"><a href="/education/addnew">Add New </a></li>
                                    <li class="@yield('eduactive')"><a href="/education">Academic Qualification</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-sphere"></i> <span>Experiences</span></a>
                                <ul>
                                    <li><a href="">View Experiences</a></li>
                                    <li><a href="">Add New</a></li>
                                    <li><a href="">Update Experience</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-spinner3 spinner"></i> <span>Awards</span></a>
                                <ul>
                                    <li><a href="">View Awards</a></li>
                                    <li><a href="">Add New</a></li>
                                    <li><a href="">Update Award</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-tree5"></i> <span>Blogs</span></a>
                                <ul>
                                    <li><a href="">View Blogs</a></li>
                                    <li><a href="">Add New</a></li>
                                    <li><a href="">Update Blog</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-alignment-unalign"></i> <span>Servies</span></a>
                                <ul>
                                    <li><a href="">View Servies</a></li>
                                    <li><a href="">Add New</a></li>
                                    <li><a href="">Update Services</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-task"></i> <span>Teachings</span></a>
                                <ul>
                                    <li><a href="">View Teachings</a></li>
                                    <li><a href="">Add New</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-user-plus"></i> <span>Portfolios</span></a>
                                <ul>
                                    <li><a href="">View Portfolios</a></li>
                                    <li><a href="">Add Portfolio</a></li>
                                    <li><a href="">Update Portfolio</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <!-- Main content -->
        <div class="content-wrapper">

            @yield('content')

        </div>
        <!-- /main content -->


        <!-- Footer -->
        <div class="navbar navbar-default navbar-sm navbar-fixed-bottom">
            <ul class="nav navbar-nav no-border visible-xs-block">
                <li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second"><i class="icon-circle-up2"></i></a></li>
            </ul>

            <div class="navbar-collapse collapse" id="navbar-second">
                <div class="navbar-text">
                    &copy; 2017. <a href="#">Bitm</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Project Group 1</a>
                </div>

                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Help center</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /footer -->

</body>
</html>