@extends('layouts.admin')

@section('content')



        <!-- Content Header (Page header) -->
    <section class="content-header">
    <br/> 
    <h1>
        Create[Languages Slider]
    </h1>

    <ol class="breadcrumb">
        
                            <li class="breadcrumb-item"><a href="{{url('/admin7')}}">Dashboard</a></li>
            
        
                            <li class="breadcrumb-item active">CMS</li>
            
        
                            <li class="breadcrumb-item"><a href="{{url('/pages')}}">Pages</a></li>
            
        
            
            </ol>
</section>  

        <section class="content">
            <div class="row">
                <div class="col-md-6">
                                    </div>
                <div class="col-md-6 text-right" style="padding-bottom: 10px;">
                                    </div>
            </div>
                
    <div class="row">
        <div class="col-md-12">
            <!-- Default box -->
<div class="box ">
    <div class="box-header with-border hidden">
        <h3 class="box-title hidden"></h3>

        <div class="box-tools pull-right">
            
        </div>
    </div>
    <div class="box-body">
              <form method="POST" enctype="multipart/form-data" action="{{url('createLaguagessliderSlider1')}}"> 
                @csrf

                 @if(count($errors)>0)
                 @foreach($errors->all() as $error)
                 <div class="alert alert-danger">{{$error}}</div>
                  @endforeach
                  @endif
                  @if(session('response'))
                  <div class="alert alert-success">{{session('response')}}</div>
                     @endif

                     @if(session('reject'))
                     <div class="alert alert-warning">{{session('reject')}}</div>
                        @endif                

                <div class="row">
                    <div class="col-md-12">
                    <div class="row">
                     <div class="col-md-6">
                     <div class="form-group   "><label for="content">Image</label>
                      <div class="upload-file-area" ><span class=""><i class="fa fa-folder-open-o"></i> Browse
                            <input id="picture" type="file"  class="form-control{{ $errors->has('picture') ? ' is-invalid' : '' }}" name="picture"  required autofocus>

                            @if ($errors->has('picture'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('picture') }}</strong>
                            </span>
                            @endif


                        </div>
                        </div>
                        </div>
                        </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                    <div class="col-md-6">
                        <br/>
                        <div class="form-group"><button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Create [Languages Slider]</button>&nbsp;&nbsp;<a class="btn btn-warning" href="{{url('/sliders')}}"><i class="fa fa-times"></i> Cancel</a></div>
                    </div>
                </div>    
                </div>
                </form>
    </div>
</div>
<!-- /.box -->        </div>
    </div>
        </section>

@endsection