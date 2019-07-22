@extends('layouts.app')
@section('content')
@foreach($pages as $page)

<div class="page-header header-filter header-small myAllignment" data-parallax="true" style=" background-image: url('resources/guidance/{{$page->bg_image}}'); ">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- <h1 class="title">Sciences</h1> -->
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
            <div class="col-md-10 ml-auto mr-auto">
                <h2 class="title">Guidance and Counceling</h2>
                <div class="card card-plain">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="card-title">{{$page->hod_name}}</h3>
                                    <div class="card-description">
                                     {!!$page->brief_desc!!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-header card-header-image">
                                <img class="img img-raised" src="resources/guidance/{{$page->hod_pic}}">
                            <div class="colored-shadow"></div></div>
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
            <div class="col-md-10 ml-auto mr-auto">
                <h4 class="title">More about the department</h4>
                <div class="card card-plain">
                    <div class="row">
                        <div class="col-md-12 card-description">
                       {!!$page->more_about_dep!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>















@endforeach

@endsection