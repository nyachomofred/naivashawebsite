<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- <link href="/assets/plugins/animate.less/animate.min.css" rel="stylesheet" type="text/css" /> -->
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    @foreach($users as $user)
    @if($user->key=="fav-icon") 
    <link rel="icon" type="image/x-icon" href="http://localhost/naivasha/public/resources/settings/{{$user->data}}"/>
    @endif
    @endforeach

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>Naivasha Girls Secondary School &#45; Diligence and Discipline for Excellence</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta property="og:locale" content="en_GB" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Naivasha Girls Secondary | Diligence and Discipline for Excellence | Naivasha Girls" />
<meta property="og:description" content="Naivasha Girls is a Center of Excellence in Girl Child Education" />
<meta property="og:url" content="http://www.naivashagirls.sc.ke/" />
<meta property="og:site_name" content="Naivasha Girls Secondary" />
<meta property="og:image:width" content="222" />
<meta property="og:image:height" content="192" />


<!-- Favicons -->
<!-- Extra details for Live View on GitHub Pages -->
<!--  Social tags      -->
<meta name="keywords" content="Naivasha Girls Secondary">
<meta name="description" content="Naivasha Girls is a Center of Excellence in Girl Child Education">
<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="Naivasha Girls Secondary | Invest In Thyself | Naivasha Girls">
<meta itemprop="description" content="Naivasha Girls is a Center of Excellence in Girl Child Education">
<meta property="og:description" content="Naivasha Girls is a Center of Excellence in Girl Child Education" />
<meta property="og:site_name" content="Naivasha Girls Secondary" />
<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700%7CRoboto+Slab:400,700%7CMaterial+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
<link rel="stylesheet" href="resources/assets/css/material-kit.min-v=2.0.2.css">
<!-- Documentation extras -->
<!-- CSS Just for demo purpose, don't include it in your project -->
<link href="resources/assets/assets-for-demo/demo.css" rel="stylesheet" />
<link href="resources/assets/assets-for-demo/vertical-nav.css" rel="stylesheet" />
<link href="resources/assets/sweetalert/dist/sweetalert2.min.css" rel="stylesheet" />


<link href="resources/assets/css/prettyPhoto.css" rel="stylesheet" />
<link href="resources/assets/css/all.css" rel="stylesheet" />
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="resources/assets/engine1/style.css" />
<!-- <script type="text/javascript" src="/assets/engine1/jquery.js"></script> -->
<!-- End WOWSlider.com HEAD section -->
<!-- iframe removal -->

<link href="resources/assets/css/lightgallery.css" rel="stylesheet">
<link href="resources/assets/css/video-js.css" rel="stylesheet">


<script type="text/javascript">
    if (document.readyState === 'complete') {
        if (window.location != window.parent.location) {
            const elements = document.getElementsByClassName("iframe-extern");
            while (elemnts.lenght > 0) elements[0].remove();
            // $(".iframe-extern").remove();
        }
    };
</script>
<style>
    .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
        padding: 5px 8px;
    }
    .demo-gallery > ul {
        margin-bottom: 0;
    }
    .demo-gallery > ul > li {
        float: left;
        margin-bottom: 15px;
        margin-right: 20px;
        width: 200px;
    }
    .demo-gallery > ul > li a {
        border: 3px solid #FFF;
        border-radius: 3px;
        display: block;
        overflow: hidden;
        position: relative;
        float: left;
    }
    .demo-gallery > ul > li a > img {
        -webkit-transition: -webkit-transform 0.15s ease 0s;
        -moz-transition: -moz-transform 0.15s ease 0s;
        -o-transition: -o-transform 0.15s ease 0s;
        transition: transform 0.15s ease 0s;
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
        height: 100%;
        width: 100%;
    }
    .demo-gallery > ul > li a:hover > img {
        -webkit-transform: scale3d(1.1, 1.1, 1.1);
        transform: scale3d(1.1, 1.1, 1.1);
    }
    .demo-gallery > ul > li a:hover .demo-gallery-poster > img {
        opacity: 1;
    }
    .demo-gallery > ul > li a .demo-gallery-poster {
        background-color: rgba(0, 0, 0, 0.1);
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        -webkit-transition: background-color 0.15s ease 0s;
        -o-transition: background-color 0.15s ease 0s;
        transition: background-color 0.15s ease 0s;
    }
    .demo-gallery > ul > li a .demo-gallery-poster > img {
        left: 50%;
        margin-left: -10px;
        margin-top: -10px;
        opacity: 0;
        position: absolute;
        top: 50%;
        -webkit-transition: opacity 0.3s ease 0s;
        -o-transition: opacity 0.3s ease 0s;
        transition: opacity 0.3s ease 0s;
    }
    .demo-gallery > ul > li a:hover .demo-gallery-poster {
        background-color: rgba(0, 0, 0, 0.5);
    }
    .demo-gallery .justified-gallery > a > img {
        -webkit-transition: -webkit-transform 0.15s ease 0s;
        -moz-transition: -moz-transform 0.15s ease 0s;
        -o-transition: -o-transform 0.15s ease 0s;
        transition: transform 0.15s ease 0s;
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1);
        height: 100%;
        width: 100%;
    }
    .demo-gallery .justified-gallery > a:hover > img {
        -webkit-transform: scale3d(1.1, 1.1, 1.1);
        transform: scale3d(1.1, 1.1, 1.1);
    }
    .demo-gallery .justified-gallery > a:hover .demo-gallery-poster > img {
        opacity: 1;
    }
    .demo-gallery .justified-gallery > a .demo-gallery-poster {
        background-color: rgba(0, 0, 0, 0.1);
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        -webkit-transition: background-color 0.15s ease 0s;
        -o-transition: background-color 0.15s ease 0s;
        transition: background-color 0.15s ease 0s;
    }
    .demo-gallery .justified-gallery > a .demo-gallery-poster > img {
        left: 50%;
        margin-left: -10px;
        margin-top: -10px;
        opacity: 0;
        position: absolute;
        top: 50%;
        -webkit-transition: opacity 0.3s ease 0s;
        -o-transition: opacity 0.3s ease 0s;
        transition: opacity 0.3s ease 0s;
    }
    .demo-gallery .justified-gallery > a:hover .demo-gallery-poster {
        background-color: rgba(0, 0, 0, 0.5);
    }
    .demo-gallery .video .demo-gallery-poster img {
        height: 48px;
        margin-left: -24px;
        margin-top: -24px;
        opacity: 0.8;
        width: 48px;
    }
    .demo-gallery.dark > ul > li a {
        border: 3px solid #04070a;
    }
    .home .demo-gallery {
        padding-bottom: 80px;
    }
    .point{
        cursor: pointer;
    }
    .myAllignment{
        margin-right: -15px;
        margin-left: -15px;
    }
    .buttontext{
     background:none!important;
     border:none;
     padding:0!important;
     cursor:pointer;
     color: #0285da;
    }
}
</style>
<!-- <link href="assets/plugins/fullcalendar/dist/fullcalendar.css" rel="stylesheet" /> -->
<!-- <link href="assets/plugins/select2/select2.css" rel="stylesheet" type="text/css" /> -->


  </head>
  <body>

   @include('includes.header')


   <div class="container-fluid">

        @yield('content')
    @include('includes.footer')




   </div>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
<!-- <script src="/assets/js/jquery.min.js"></script> -->
<script src="resources/assets/js/core/jquery.min.js"></script>
<script src="resources/assets/js/core/popper.min.js"></script>
<script src="resources/assets/js/bootstrap-material-design.min.js"></script>
<!--  Google Maps Plugin  -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin  -->
<script src="resources/assets/js/plugins/moment.min.js"></script>
<!--    Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="resources/assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
<!--    Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="resources/assets/js/plugins/nouislider.min.js"></script>
<!--    Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="resources/assets/js/plugins/bootstrap-selectpicker.js"></script>
<!--    Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
<script src="resources/assets/js/plugins/bootstrap-tagsinput.js"></script>
<!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="resources/assets/js/plugins/jasny-bootstrap.min.js"></script>
<!--    Plugin for Small Gallery in Product Page -->
<script src="resources/assets/js/plugins/jquery.flexisel.js"></script>
<!-- Plugins for presentation and navigation  -->
<script src="resources/assets/assets-for-demo/js/modernizr.js"></script>
<script src="resources/assets/assets-for-demo/js/vertical-nav.js"></script>
<!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
<script src="resources/assets/js/material-kit.min-v=2.0.2.js"></script>
<!-- Fixed Sidebar Nav - js With initialisations For Demo Purpose, Don't Include it in your project -->
<script src="resources/assets/assets-for-demo/js/material-kit-demo.js"></script>
<!-- Sharrre libray -->
<script src="resources/assets/assets-for-demo/js/jquery.sharrre.js"></script>
<script src="resources/assets/sweetalert/dist/sweetalert2.min.js"></script>


<script src="resources/assets/js/jquery.prettyPhoto.js"></script>
<script src="resources/assets/js/main.js"></script>

<script type="text/javascript" src="resources/assets/engine1/wowslider.js"></script>
<script type="text/javascript" src="resources/assets/engine1/script.js"></script>


<script src="resources/assets/js/video.js"></script>
<script>
    $().ready(function() {
        $('#lightgallery').lightGallery();
        $('#video-gallery, #video-gallery1').lightGallery({
            videojs: true
        }); 
        // the body of this function is in assets/material-kit.js
        materialKitDemo.initContactUsMap();
    });
</script>


<script src="resources/assets/js/picturefill.min.js"></script>
<script src="resources/assets/js/lightgallery-all.min.js"></script>
<script src="resources/assets/js/jquery.mousewheel.min.js"></script>

  </body>
</html>