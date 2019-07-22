
@if((Auth::user()->status==1)||(Auth::user()->status==2))

@else

<script type="text/javascript">    
window.location = "{{url('/newRedirect')}}";
</script>
@endif

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Naivasha Girls Secondary</title>
    <link rel="shortcut icon" href="http://localhost/naivasha/public/resources/settings/NaivashaLogo.png" type="image/png">

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
    <link media="all" type="text/css" rel="stylesheet" href="assets/bootstrap.min.css">
    <!-- Theme style -->
    <link media="all" type="text/css" rel="stylesheet" href="assets/AdminLTE.css">

    <link media="all" type="text/css" rel="stylesheet" href="assets/custom.css">
    <script src="tinymce/tinymce.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <style type="text/css">

.d-block{
  max-width: 170px;
  display: block;
  margin: 10px 0px;
   }
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
        <img src="resources/settings/Naivasha-Girls.fw_.png" class="" style="max-height: 30px;"/>
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
                        <img src="resources/settings/admin.jpg" class="user-image" alt="User Image">
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
                                <a href="{{ url('/profile') }}"
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
                <a href="{{url('/admin7')}}">
                    <i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            @if(Auth::user()->status==2)
            <li class="treeview ">
            <a href="#">
                <i class="fa fa-users fa-fw"></i> <span>Users</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li class="">
            <a href="{{url('/listUsers')}}" target="_self">
                <i class="fa fa-user-o fa-fw"></i> <span>Users</span>
            </a>
        </li>
                <li class="">
            <a href="{{url('/userRoles')}}" target="_self">
                <i class="fa fa-key fa-fw"></i> <span>Roles</span>
            </a>
        </li>
                </ul>
        </li>
          @endif

                <li class="treeview active menu-open">
            <a href="#">
                <i class="fa fa-desktop fa-fw"></i> <span>CMS</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li class="active">
            <a href="{{url('/pages')}}" target="_self">
                <i class="fa fa-files-o fa-fw"></i> <span>Pages</span>
            </a>
        </li>
         


         @if(Auth::user()->status==2)
         <li class="active">
            <a href="{{url('/messages')}}" target="_self">
                <i class="fa fa-question-circle-o fa-fw"></i> <span>Comments</span>
            </a>
        </li>
        @endif



        <li class="active">
            <a href="{{url('/adminEvents')}}" target="_self">
                <i class="fa fa-calendar"></i> <span>Events</span>
            </a>
           </li>


        <li class="active">
            <a href="{{url('/adminClubs')}}" target="_self">
                <i class="fa fa-users"></i> <span>Clubs & Societies</span>
            </a>
           </li>



        <li class="active">
            <a href="{{url('/adminTeams')}}" target="_self">
                <i class="fa fa-users"></i> <span>Teams</span>
            </a>
           </li>


        <li class="active">
            <a href="{{url('/adminGalary')}}" target="_self">
                <i class="fa fa-picture-o"></i> <span>Galary</span>
            </a>
           </li>


                   <li class="active">
            <a href="{{url('/partnerUniversies')}}" target="_self">
                <i class="fa fa-handshake-o"></i> <span>Partner Universities</span>
            </a>
           </li>



                </ul>
        </li>
         
         <li class="">
            <a href="{{url('/sliders')}}" target="_self">
                <i class="fa fa-clone fa-fw"></i> <span>Sliders</span>
            </a>
        </li>
            @if(Auth::user()->status==2)
           <li class="treeview ">
            <a href="#">
                <i class="fa fa-plug fa-fw"></i> <span>Administration</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li class="active">
            <a href="{{url('/menu')}}" target="_self">
                <i class="fa fa-bars fa-fw"></i> <span>Menu</span>
            </a>
        </li>
          <li class="active">
            <a href="{{url('/settings')}}" target="_self">
                <i class="fa fa-gears fa-fw"></i> <span>Settings</span>
            </a>
        </li>

          <li class="active">
            <a href="{{url('/resetPassword')}}" target="_self">
                <i class="fa fa-unlock"></i> <span>Reset Password</span>
            </a>
        </li>


        <li class="active">
            <a href="{{url('/ActivityLog')}}" target="_self">
                <i class="fa fa-history fa-fw"></i> <span>Activities</span>
            </a>
        </li>

          </ul>
        </li>
        @endif
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
    &copy;
    <script>
        document.write(new Date().getFullYear())
    </script>
    <a target="_blank" href="#"
                               title="naivasha">Naivasha Girls Secondary</a>.
                All Rights Reserved.
</footer>

</div>
<!-- ./wrapper -->




    <!-- jQuery 3 -->
<script src="scripts/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="scripts/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="scripts/adminlte.min.js"></script>
</body>






