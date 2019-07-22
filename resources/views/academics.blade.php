@extends('layouts.app')
@section('content')
@foreach($pages as $page)
<div class="page-header header-filter header-small myAllignment" data-parallax="true" style=" background-image: url('resources/academics/{{$page->bg_image}}'); ">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- <h1 class="title">Discipline & School Tradition</h1> -->
            </div>
        </div>
    </div>
</div>

<div class="main main-raised mb-5">
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
                <h2 class="title">Academics</h2>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            {!!$page->content!!}

                            <div class="card card-blog card-plain">
                                <div class="card-header card-header-image">
                                    <a href="index.html#pablo">
                                        <img class="img" src="resources/academics/{{$page->image}}">
                                    </a>
                                    <div class="colored-shadow"></div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>



@endforeach

@endsection