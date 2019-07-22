@extends('layouts.app')
@section('content')
@foreach($pages as $page)
<div class="page-header header-filter header-small myAllignment" data-parallax="true" style=" background-image: url('resources/anthem/{{$page->bg_image}}'); ">
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
            <div class="col-md-10 ml-auto mr-auto">
                <h2 class="title">School Anthem</h2>
                <div class="card card-plain card-blog">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="card-title">1</h3>
                                    <p class="card-description">
                                  {!!$page->verse1!!}
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <h3 class="card-title">Chorus:</h3>
                                    <p class="card-description">
                                     {!!$page->chorus!!}
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <h3 class="card-title">2</h3>
                                    <p class="card-description">
                               {!!$page->verse2!!}
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <h3 class="card-title">3</h3>
                                    <p class="card-description">
                                   {!!$page->verse3!!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="card-header card-header-image">
                                <img class="img img-raised" src="resources/anthem/{!!$page->image1!!}">
                            <div class="colored-shadow"></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endforeach

@endsection