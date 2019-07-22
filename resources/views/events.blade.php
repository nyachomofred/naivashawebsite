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
        

        <div class="row">
            
            @if($myevents->isEmpty())

           <div class="col-md-10 ml-auto mr-auto">
                <h2 class="title">Events</h2>


                            <div class="card-description text-center">

                              <h2>No events yet!</h2>
                              <p>We are yet to update our calendar of events for this year.</p>
                        </div>

            </div>

            @else
            @foreach($myevents as $event1)
            <div class="col-md-10 ml-auto mr-auto">
                <h2 class="title">Events</h2>
                <br>
                <div class="card card-plain card-blog">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="card-header card-header-image">
                                <a href="sections.html#pablito">
                                    <img class="img" src="resources/events/{{$event1->image}}" style="height: 230px;">
                                </a>
                            <div class="colored-shadow"></div></div>
                        </div>
                        <div class="col-md-7">
                            <h3 class="card-category text-info">
                                <i class="material-icons">trending_up</i>                       @if(!empty($event1->startDate))
                             <?php
                               $mystamp=strtotime($event1->startDate);
                              echo date('d-M-Y',$mystamp);  ?>
                             @else
                             Upcomming
                             @endif
                            </h3>
                            <h3 class="card-title">Discipline</h3>
                            <div class="card-description">
                                <?php 
                                $say=substr(strip_tags($event1->description),0,280);?> 
                                <?php echo strip_tags($say)?> ... &nbsp;&nbsp;
                              <form method="post" action="{{url('/viewEvent')}}" style="display: inline-block;">
                              @csrf
                              <input type="hidden" name="id" value="{{$event1->id}}">  
                              <button class="buttontext" type="submit">
                              Read More
                              </button>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach
            @endif

     <div class="col-md-6 mx-auto mt-4 mb-4">{!! $myevents->render() !!}</div>




        </div>
    </div>
</div>
@endforeach

@endsection