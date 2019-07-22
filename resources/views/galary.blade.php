@extends('layouts.app')
@section('content')
@foreach($pages as $page)

<div class="page-header header-filter header-small myAllignment" data-parallax="true" style=" background-image: url('resources/galary/{{$page->bg_image}}'); ">
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
        

        <div class="row mb-5">
            <div class="col-md-12 ml-auto mr-auto">
                <h2 class="title">Photos</h2>
                <div class="card card-plain">
                    <div class="row">
                        
                        <div id="wowslider-container1">
                            <div class="ws_images">
                                <ul>
                                    @foreach($images as $image)
                                    <li><img src="resources/galary/{{$image->image}}" alt="{{$image->text}}" title="{{$image->text}}" id="wows1_0"/></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="ws_bullets">
                                <div>
                                    @foreach($images as $image)
                                    <a href="#" title="{{$image->text}}" title="{{$image->text}}"><span>1</span></a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="ws_script" style="position:absolute;left:-99%">
                                <!-- <a href="http://wowslider.net">html slideshow</a> by WOWSlider.com v8.8m -->
                            </div>
                            <div class="ws_shadow"></div>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main main-raised mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2 class="title">Videos</h2>

                <!-- Hidden video div -->
                @foreach($videos as $video)
                <div style="display:none;" id="{{$video->id}}">
                    <video class="lg-video-object lg-html5 video-js vjs-default-skin" controls preload="none">
                        <source src="resources/videos/{{$video->video_url}}" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
                </div>
                @endforeach

                <div class="row">
                @foreach($videos as $video)
                    <div class="col-md-3 mr-auto ml-auto">
                        <div class="card card-profile card-plain">
                            <div class="card-header card-avatar" id="video-gallery">
                                <img class="img point" src="resources/galary/{{$video->image}}" data-poster="video-poster1.jpg" data-sub-html="{{$video->title}}" data-html="#{{$video->id}}">
                            </div>
                            <div class="card-body ">
                                <h4 class="card-title">{{$video->title}}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


@endforeach
@endsection