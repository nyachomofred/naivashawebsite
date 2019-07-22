@extends('layouts.app')
@section('content')
@foreach($pages as $page)
<div class="page-header header-filter header-small myAllignment" data-parallax="true" style=" background-image: url('resources/cocurriculor/{{$page->bg_image}}'); ">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- <h1 class="title">Discipline & School Tradition</h1> -->
            </div>
        </div>
    </div>
</div>



<div class="section">
    <div class="container">
        <h2 class="title text-center" style="margin-bottom: 0px;">CURRICULAR ACTIVITIES:</h2>
        <div class="description text-center">
        {!!$page->brief_desc!!}
        </div>
        <br>
        <div class="row">
            
        @foreach($teams as $team)
            <div class="col-md-3 mx-auto">
                <div class="card card-blog">
                    <div class="card-header card-header-image">
                        
                    <img src="resources/cocurriculor/{{$team->image}}" alt="">
                        
                    <div class="colored-shadow"></div></div>
                    <div class="card-body">
                        <h6 class="card-category text-warning">{{$team->category}}</h6>
                        <h4 class="card-title">
                            {{$team->title}}
                        </h4>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>

<div class="main main-raised mb-5">
    <div class="container">
        <div class="about-services features-2">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title text-center">CLUBS</h2>
                </div>
                <br/>
                <div class="col-md-3">
                    <div class="card card-pricing card-raised bg-success">
                        <div class="card-body">
                            <ul>
                            @foreach ($clubs as $club)
                            @if($club->name=="sectionA")
                             <?php    $myData=array($club->content);?>
                            @foreach ($myData as $key)
                             <li><i class="material-icons text-success">check</i>{{$key}}</li>   
                              @endforeach
                              @endif
                              @endforeach
                            </ul>  


                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-pricing card-raised bg-warning">
                        <div class="card-body">
                            <ul>
                            @foreach ($clubs as $club)
                            @if($club->name=="sectionB")
                             <?php    $myData1=array($club->content);?>
                            @foreach ($myData1 as $key1)
                             <li><i class="material-icons text-success">check</i>{{$key1}}</li>   
                              @endforeach
                              @endif
                              @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-pricing card-raised bg-info">
                        <div class="card-body">
                            <ul>
                            @foreach ($clubs as $club)
                            @if($club->name=="sectionC")
                             <?php    $myData2=array($club->content);?>
                            @foreach ($myData2 as $key2)
                             <li><i class="material-icons text-success">check</i>{{$key2}}</li>   
                              @endforeach
                              @endif
                              @endforeach
                            </ul>  
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-pricing card-raised bg-danger">
                        <div class="card-body">
                            <ul>
                            @foreach ($clubs as $club)
                            @if($club->name=="sectionD")
                             <?php    $myData3=array($club->content);?>
                            @foreach ($myData3 as $key3)
                             <li><i class="material-icons text-success">check</i>{{$key3}}</li>   
                              @endforeach
                              @endif
                              @endforeach
                            </ul>  
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <h2 class="title text-center">SOCIETIES</h2>
                </div>
                <div class="col-md-3 mr-auto ml-auto">
                    <div class="card card-pricing card-raised bg-danger">
                        <div class="card-body">
                            <ul>
                            @foreach ($clubs as $club)
                            @if($club->name=="societies")
                             <?php    $myData4=array($club->content);?>
                            @foreach ($myData4 as $key4)
                             <li><i class="material-icons text-success">check</i>{{$key4}}</li>   
                              @endforeach
                              @endif
                              @endforeach
                            </ul>  
                        </div>
                    </div>
                </div>

                <div class="col-md-12 description">
               {!!$page->more_about_dep!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection
