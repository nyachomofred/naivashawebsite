@extends('layouts.app')
@section('content')
@foreach($pages as $page)

<div class="page-header header-filter header-small myAllignment" data-parallax="true" style=" background-image: url('resources/events/{{$page->bg_image}}'); ">
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

                                    @foreach($events1 as $event)
                                    <li>
                                        <img src="resources/events/{{$event->image}}" alt="{{$event->title}}" title="{{$event->title}}" id="wows1_0"/>
                                    </li>
                                     @if(empty($images))
                                    <li>
                                        <img src="resources/events/{{$event->image}}" alt="{{$event->title}}" title="{{$event->title}}" id="wows1_0"/>
                                    </li>
                                     @else 
                                        @foreach($images as $image)
                                    <li>
                                        <img src="resources/events/{{$image->image}}" alt="{{$event->title}}" title="{{$event->title}}" id="wows1_0"/>
                                    </li>
                                        @endforeach
                                     @endif

                                    @endforeach
                                </ul>
                            </div>
                            <div class="ws_bullets">
                                <div>

                                    @foreach($events1 as $event)
                                    <a href="#" title="{{$event->title}}" title="{{$event->title}}"><span>1</span></a>
                                     @if(empty($images))
                                    <a href="#" title="{{$event->title}}" title="{{$event->title}}"><span>1</span></a>
                                     @else 
                                    @foreach($images as $image)
                                    <a href="#" title="{{$event->title}}" title="{{$event->title}}"><span>1</span></a>
                                        @endforeach
                                     @endif

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
    <div class="container pb-5">

  <div class="row">

  @foreach($events1 as $event)   
   <div class="col-md-9">
   <h3>{{$event->title}}</h3>
   <p>About The Event</p>
    {!!$event->description!!}
   </div>




   <div class="col-md-3">
    <h5 class="text-center mt-5 mb-3"><strong>Date and Time</strong></h5>
   <div class="col-md-12 text-center">
   @if(empty($event->startDate)||($event->startDate==$event->endDate))
   <p class="col-md-12">
    @if(!empty($event->startDate))
         <?php
           $mystamp=strtotime($event->startDate);
          echo date('l, F d, Y' ,$mystamp);  ?>
         @else
    @endif 
   </p>
   <p class="col-md-12 mt-n3">{{$event->starttime}} - {{$event->endtime}}</p>
   @else

   <p class="col-md-12">
    @if(!empty($event->startDate))
         <?php
           $mystamp=strtotime($event->startDate);
          echo date('l, F d, Y' ,$mystamp);  ?>
         @else
    @endif 
   </p>
      <p class="col-md-12 mt-n3">
    @if(!empty($event->endDate))
         <?php
           $mystamp=strtotime($event->endDate);
          echo date('l, F d, Y' ,$mystamp);  ?>
         @else
    @endif 
   </p>
   <p class="col-md-12 mt-n3">{{$event->starttime}} - {{$event->endtime}}</p>

   @endif
   </div>



   <h5 class="text-center mt-5 mb-3"><strong>Location</strong></h5>
   <div class="col-md-12 text-center">
   {{$event->location}}
   </div>



   </div>

  @endforeach
  </div>



    </div>
</div>


@endforeach
@endsection