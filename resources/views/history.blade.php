@extends('layouts.app')
@section('content')
@foreach($pages as $page)
<div class="page-header header-filter header-small" data-parallax="true" style=" background-image: url('resources/history/{{$page->bg_image}}'); ">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="title">History</h1>
                {!!$page->bg_text!!}
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
        <div class="about-services features-2">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title">Our History</h2>
                    <div class="description">
                        
                    {!!$page->brief_intro!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="title text-center">
        {!!$page->intro_text!!}
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="card card-blog">
                    <div class="card-header card-header-image">
                        <a href="#pablo">
                            <img class="img img-raised" src="resources/history/{{$page->school_pic}}">
                        </a>     
                    <div class="colored-shadow" style="background-image: url(resources/history/{{$page->school_pic}}); opacity: 1;"></div><div class="colored-shadow"></div></div>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#pablo">The school</a>
                        </h4>
                        <div class="card-description">
                       {!!$page->school!!}

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-blog">
                    <div class="card-header card-header-image">
                        <a href="#pablo">
                            <img class="img img-raised" src="resources/history/{{$page->history_pic}}">
                        </a>
                    <div class="colored-shadow" style="background-image: url(resources/history/{{$page->history_pic}}); opacity: 1;"></div><div class="colored-shadow"></div></div>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#pablo">History</a>
                        </h4>
                        <div class="card-description">
                       {!!$page->history!!}

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
                <div class="col-md-12 ml-auto mr-auto text-center">
                       {!!$page->performance!!}
                </div>
            </div>
        </div>
    </div>
</div>


@endforeach

@endsection