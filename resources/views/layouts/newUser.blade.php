@if((Auth::user()->status==1)||(Auth::user()->status==2))
<script type="text/javascript">    
window.location = "{{url('/admin7')}}";
</script>
@else

@endif

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Loreto High School Limuru</title>
    <link rel="shortcut icon" href="http://localhost/naivasha/public/resources/settings/NaivashaLogo.png" type="image/png">

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
    <link media="all" type="text/css" rel="stylesheet" href="assets/bootstrap.min.css">
    <!-- Theme style -->
    <link media="all" type="text/css" rel="stylesheet" href="assets/AdminLTE.css">

    <link media="all" type="text/css" rel="stylesheet" href="assets/custom.css">
    <link href="mail/css/style.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <style type="text/css">

.buttontext{
background:none!important;
 border:none;
 padding:0!important;
 cursor:pointer;
}

.unread{
    background-color: #C8BBBE;
    font-weight: bold;
}

.read{
    background-color: #EBDDE2;
}

.name{
white-space: nowrap;
overflow: hidden;
text-overflow: ellipsis;
max-width: 100px;
}


.mailTitle{
white-space: nowrap;
overflow: hidden;
text-overflow: ellipsis;
max-width: 140px;
}

.mailMessage{
white-space: nowrap;
overflow: hidden;
text-overflow: ellipsis;
max-width: 250px;
}




.buttonColor{
    background-color: #C8BBBE;
    padding: 0;
border: none;
}


.buttonColor1{
    background-color: #EBDDE2;
    padding: 0;
border: none;
}

    </style>
</head>
<body class="skin-purple-light sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">


<!-- contains the header -->
<header class="main-header">
    <!-- Logo -->
    <a href="{{url('/')}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>C</b>o</span>
        <!-- logo for regular state and mobile devices -->
        <img src="resources/settings/admin.jpg" class="" style="max-height: 30px;"/>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                                                
                                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                     @if(!empty(Auth::user()->image))
                        <img src="{{Auth::user()->image}}" class="user-image" alt="User Image">
                       @else
                        <img src="{{url('resources/settings/admin.jpg')}}" class="user-image" alt="User Image">
                       @endif

                        <span class="hidden-xs">{{Auth::user()->name}}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                     @if(!empty(Auth::user()->image))
                            <img src="{{Auth::user()->image}}" class="img-circle"
                                 alt="User Image">
                       @else
                            <img src="{{url('resources/settings/admin.jpg')}}" class="img-circle"
                                 alt="User Image">
                       @endif
                            <p>
                                {{Auth::user()->name}}
                            </p>
                            <p>
                                {{Auth::user()->email}}
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#"
                                   class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ url('/logout') }}" 
                                   class="btn btn-default btn-flat">
                                    Logout </a>
                            </div>
                        </li>
                    </ul>
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
                     @if(!empty(Auth::user()->image))
                            <img src="{{Auth::user()->image}}" class="img-circle"
                                 alt="User Image">
                       @else
                            <img src="{{url('resources/settings/admin.jpg')}}" class="img-circle"
                                 alt="User Image">
                       @endif
            </div>
            <div class="pull-left info">
                <p><a href="#" title="Profile">{{Auth::user()->name}}</a></p>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="">
                <a href="{{url('/welcomeMessage')}}">
                    <i class="fa fa-envelope"></i> Message (1)</a>
            </li>

            </ul>
    </section>
    <!-- /.sidebar -->
</aside>
<!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


    <main class="py-4">
      @yield('content')
    </main>












    </div>
    <footer class="main-footer text-center">
    © 2019 <a target="_blank" href="#"
                               title="Loreto">Loreto High School Limuru</a>.
                All Rights Reserved.
</footer>

</div>




    <!-- jQuery 3 -->
<script src="scripts/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="scripts/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="scripts/adminlte.min.js"></script>
</body>
