<div id="carouselExampleIndicators" class="carousel slide myAllignment" data-ride="carousel">
    <?php $data[]=$sliders[0];?>
    @foreach($data as $data1)
    <?php $active=$data1->id; ?>
    @endforeach
    <ol class="carousel-indicators">
        <?php $key=-1; ?>
        @foreach($sliders as $slider)
        @if ($slider->id== $active)
        <li data-target="#carouselExampleIndicators" data-slide-to="{{++$key}}" class="active"></li>
        @else
        <li data-target="#carouselExampleIndicators" data-slide-to="{{++$key}}"></li>
        @endif
        @endforeach
    </ol>
    <div class="carousel-inner">

        @foreach($sliders as $slider)
        @if ($slider->id== $active)    
        <div class="carousel-item active">
            <div class="page-header header-filter" style="background-image: url('http://localhost/naivasha/public/resources/sliders/{{$slider->url}}');">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto text-center">
                            <h2 class="title">{{$slider->title}}</h2>
                            <h4>{{$slider->content}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @else
        <div class="carousel-item">
            <div class="page-header header-filter" style="background-image: url('http://localhost/naivasha/public/resources/sliders/{{$slider->url}}');">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto text-center">
                            <h2 class="title">{{$slider->title}}</h2>
                            <h4>{{$slider->content}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      @endif  
      @endforeach
    </div>
</div>