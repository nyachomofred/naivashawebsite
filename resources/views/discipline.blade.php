@extends('layouts.app')
@section('content')

@foreach($pages as $page)
<div class="page-header header-filter header-small myAllignment" data-parallax="true" style=" background-image: url('resources/discipline/{{$page->bg_image}}'); ">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- <h1 class="title">Discipline & School Tradition</h1> -->
            </div>
        </div>
    </div>
</div>

<div class="main main-raised">
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
        

        <div class="row">
            <div class="col-md-10 ml-auto mr-auto">
                <h2 class="title">Discipline & School Tradition</h2>
                <br>
                <div class="card card-plain card-blog">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="card-header card-header-image">
                                <a href="sections.html#pablito">
                                    <img class="img" src="resources/discipline/{{$page->disp_image}}">
                                </a>
                            <div class="colored-shadow"></div></div>
                        </div>
                        <div class="col-md-7">
                            <h6 class="card-category text-info">
                                <i class="material-icons">trending_up</i> Trending
                            </h6>
                            <h3 class="card-title">Discipline</h3>
                            <div class="card-description">
                                <?php 
                                $say=substr(strip_tags($page->discipline),0,280);?> 
                                <?php echo strip_tags($say)?> ... &nbsp;&nbsp;

                            <a href="#pablo" data-toggle="modal" data-target="#Discipline"> <b>Read More</b> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-plain card-blog">
                    <div class="row">
                        <div class="col-md-7">
                            <h6 class="card-category text-danger">
                                <i class="material-icons">trending_up</i> Trending
                            </h6>
                            <h3 class="card-title">
                                Tradition of the school
                            </h3>
                            <div class="card-description">
                                <?php 
                                $say1=substr(strip_tags($page->tradition),0,280);?> 
                                <?php echo strip_tags($say1)?> ... &nbsp;&nbsp;
                                <a href="#pablo" data-toggle="modal" data-target="#Tradition"> <b>Read More</b> </a>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="card-header card-header-image">
                                <img class="img img-raised" src="resources/discipline/{{$page->tradition_image}}">
                            <div class="colored-shadow"></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <h2 class="title text-center" style="margin-bottom: 0px;">OUR CORE VALUES:</h2>
        <br>
        <div class="row">
            <div class="col-md-5 ml-auto">
                <div class="info info-horizontal" style="padding: 20px 0 0px;">
                    <div class="icon icon-info">
                        <i class="material-icons">format_paint</i>
                    </div>
                    <div class="description">
                        <h4 class="info-title">Transparency</h4>
                        <div class="description">
                            {!!$page->transparency!!}
                        </div>
                    </div>
                </div>
                <div class="info info-horizontal" style="padding: 20px 0 0px;">
                    <div class="icon icon-primary">
                        <i class="material-icons">code</i>
                    </div>
                    <div class="description">
                        <h4 class="info-title">Accuracy</h4>
                        <p class="description">
                            {!!$page->accuracy!!}
                        </p>
                    </div>
                </div>
                <div class="info info-horizontal" style="padding: 20px 0 0px;">
                    <div class="icon icon-danger">
                        <i class="material-icons">dashboard</i>
                    </div>
                    <div class="description">
                        <h4 class="info-title">Our ability</h4>
                        <p class="description">
                            {!!$page->ability!!}
                        </p>
                    </div>
                </div>
                <div class="info info-horizontal" style="padding: 20px 0 0px;">
                    <div class="icon icon-danger">
                        <i class="material-icons">dashboard</i>
                    </div>
                    <div class="description">
                        <h4 class="info-title">Togetherness</h4>
                        <p class="description">
                            {!!$page->togetherness!!}

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 mr-auto">
                <div class="info info-horizontal" style="padding: 20px 0 0px;">
                    <div class="icon icon-rose">
                        <i class="material-icons">timeline</i>
                    </div>
                    <div class="description">
                        <h4 class="info-title">Obedience</h4>
                        <p class="description">
                            {!!$page->obedience!!}
                        </p>
                    </div>
                </div>
                <div class="info info-horizontal" style="padding: 20px 0 0px;">
                    <div class="icon icon-success">
                        <i class="material-icons">code</i>
                    </div>
                    <div class="description">
                        <h4 class="info-title">Fairness</h4>
                        <p class="description">
                            {!!$page->fairness!!}
                        </p>
                    </div>
                </div>
                <div class="info info-horizontal" style="padding: 20px 0 0px;">
                    <div class="icon icon-info">
                        <i class="material-icons">group</i>
                    </div>
                    <div class="description">
                        <h4 class="info-title">Patriotism</h4>
                        <p class="description">
                            {!!$page->patriotism!!}
                        </p>
                    </div>
                </div>
                <div class="info info-horizontal" style="padding: 20px 0 0px;">
                    <div class="icon icon-info">
                        <i class="material-icons">group</i>
                    </div>
                    <div class="description">
                        <h4 class="info-title">Courtesy</h4>
                        <p class="description">
                            {!!$page->courtesy!!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Discipline modal-->

<div class="modal fade" id="Discipline" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-login" role="document">
        <div class="modal-content">
            <div class="card card-signup card-plain">
                <div class="modal-header">
                    <div class="card-header card-header-pink text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                        <h4 class="card-title" style="margin-top: 0;">Discipline</h4>
                    </div>
                </div>
                <div class="modal-body" style="padding: 0 25px;">
                    <div class="card-body" style="padding: 0;">
                   {!!$page->discipline!!}
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-rose btn-link btn-wd btn-lg" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End modal-->


<!-- Tradition modal-->
<div class="modal fade" id="Tradition" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-login" role="document">
        <div class="modal-content">
            <div class="card card-signup card-plain">
                <div class="modal-header">
                    <div class="card-header card-header-pink text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                        <h4 class="card-title" style="margin-top: 0;">Tradition of the school</h4>
                    </div>
                </div>
                <div class="modal-body" style="padding: 0 25px;">
                    <div class="card-body" style="padding: 0;">
                    {!!$page->tradition!!}
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