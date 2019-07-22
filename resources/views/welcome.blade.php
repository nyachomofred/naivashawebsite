@extends('layouts.app')
@section('content')

@include('includes.slider') 


<div class="main">
    <div class="container">
        <div class="profile-content">
            <div class="row">
                <div class="col-md-12 ml-auto mr-auto">
                    <div class="follow" style="position: absolute; top: -25px; right: 0;">

                     @include('includes.social') 
                    </div>
                </div>
            </div>
        </div>

        @foreach($pages as $page)  
        <div class="about-services features-2">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title">Mission Statement</h2>
                    <h5 class="description">{{$page->mission_statement}}</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="info info-horizontal">
                        <div class="icon icon-pink">
                            <i class="material-icons">build</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Motto</h4>
                            <p>{{$page->motto}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info info-horizontal">
                        <div class="icon icon-pink">
                            <i class="material-icons">mode_edit</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Vision</h4>
                            <p>{{$page->vission}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info info-horizontal">
                        <div class="icon icon-pink">
                            <i class="material-icons">mode_edit</i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Stem Vision</h4>
                            <p>{{$page->stem_vision}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="cd-section myAllignment" id="reams">
    <div class="team-4 section-image" style="background-image: url('resources/assets/img/kit/pro/bg7.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h5 class="description">
                        {{$page->bg_text}}
                    </h5>
                </div>
            </div>
    @endforeach        
            <div class="row">
                <div class="col-md-6">
                        @foreach($pricipal as $prince)
                    <div class="card card-profile">
                        <div class="card-header card-avatar">
                            <span>
                                <img class="img" src="resources/staff/{{$prince->image}}">
                            </span>
                        </div>

                        <div class="card-body">
                            <h4 class="card-title">{{$prince->name}}</h4>
                            <p class="card-description">{{$prince->title}}</p>
                            <div class="card-description">
                                <?php 
                                $say=substr(strip_tags($prince->comment),0,250);?> 
                                <?php echo strip_tags($say)?> ... &nbsp;&nbsp;
                                <a href="#pablo" data-toggle="modal" data-target="#Principal"> Read More </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @foreach($deputy as $dpy)
                <div class="col-md-6">
                    <div class="card card-profile">
                        <div class="card-header card-avatar">
                            <span>
                                <img class="img" src="resources/staff/{{$dpy->image}}">
                            </span>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">{{$dpy->name}}</h4>
                            <p class="card-description">{{$dpy->title}}</p>
                            <div class="card-description">
                                <?php 
                                $say1=substr(strip_tags($dpy->comment),0,250);?> 
                                <?php echo strip_tags($say1)?> ... &nbsp;&nbsp;
                                <a href="#pablo" data-toggle="modal" data-target="#deputyPrincipal"> Read More </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@foreach($pages as $page)
<div class="cd-section" id="testimonials">
    <div class="testimonials-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="carouselExampleIndicatorss" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card card-testimonial card-plain">
                                    <div class="card-avatar">
                                        <a href="javascript:void(0);#pablo">
                                            <img class="img" src="resources/assets/img/NaivashaLogo.png">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-description">
                                          {{$page->school_values}}
                                        </h5>
                                        <h4 class="card-title">Naivasha Girls</h4>
                                        <div class="footer">
                                            <i class="material-icons text-warning">star</i>
                                            <i class="material-icons text-warning">star</i>
                                            <i class="material-icons text-warning">star</i>
                                            <i class="material-icons text-warning">star</i>
                                            <i class="material-icons text-warning">star</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main main-raised mb-5">
    <div class="container">
        <div class="about-services features-2">
            <div class="row">
                <div class="col-md-10 ml-auto mr-auto text-center">
                    <h2 class="title">{{$page->general_statement}}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach




<!-- DEPUTY Principal modal-->
@foreach($deputy as $dpy)
<div class="modal fade" id="deputyPrincipal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-login" role="document">
        <div class="modal-content">
            <div class="card card-signup card-plain">
                <div class="modal-header">
                    <div class="card-header card-header-pink text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                        <h4 class="card-title" style="margin-top: 0;">{{$dpy->title}}</h4>
                    </div>
                </div>
                <div class="modal-body" style="padding: 0 25px;">
                    <div class="card-body" style="padding: 0;">
                     {!!$dpy->comment!!}
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-rose btn-link btn-wd btn-lg" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach










<!-- Principal-->
@foreach($pricipal as $prince)
<div class="modal fade" id="Principal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-login" role="document">
        <div class="modal-content">
            <div class="card card-signup card-plain">
                <div class="modal-header">
                    <div class="card-header card-header-pink text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                        <h4 class="card-title" style="margin-top: 0;">{{$prince->title}}</h4>
                    </div>
                </div>
                <div class="modal-body" style="padding: 0 25px;">
                    <div class="card-body" style="padding: 0;">
                    {!!$prince->comment!!}
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-rose btn-link btn-wd btn-lg" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection