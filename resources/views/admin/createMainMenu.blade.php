@extends('layouts.admin')

@section('content')



        <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
        Create Main Menu
    </h1>

    <ol class="breadcrumb">
        
                            <li class="breadcrumb-item"><a href="{{url('/admin7')}}">Dashboard</a></li>
            
        
                            <li class="breadcrumb-item active">CMS</li>
            
        
                            <li class="breadcrumb-item"><a href="{{url('/pages')}}">Pages</a></li>            
            </ol>


</section>    <!-- Main content -->
        <section class="content">
                <div class="row">
        <div class="col-md-12">
            <!-- Default box -->
<div class="box box-primary">
    <div class="box-header with-border hidden">
        <h3 class="box-title hidden"></h3>

        <div class="box-tools pull-right">
            
        </div>
    </div>
    <div class="box-body" style="min-height: 350px;">

                 @if(count($errors)>0)
                 @foreach($errors->all() as $error)
                 <div class="alert alert-danger">{{$error}}</div>
                  @endforeach
                  @endif
                  @if(session('response'))
                  <div class="alert alert-info">{{session('response')}}</div>
                     @endif
                  @if(session('success'))
                  <div class="alert alert-success">{{session('success')}}</div>
                     @endif


            <form method="POST" action="{{url('/createMainMenu1')}}">
              @csrf
            
            <div class="form-group required-field col-sm-6"><label for="name">Name</label>
            <input class="form-control "   name="name" type="text"  required autofocus />
            </div>

            <div class="form-group required-field col-sm-6"><label for="name">Key</label>
            <input class="form-control "  name="key" type="text"  required autofocus />
            </div>


            <div class="form-group required-field col-sm-6"><label for="name">URL (page key)</label>
            <input class="form-control " name="url"  type="text"  required autofocus />
            </div>

            <div class="form-group required-field col-sm-6"><label for="name">Type</label>
            <input class="form-control "  name="type" type="text" value="menu" required autofocus readonly="readonly" />
            </div>

              
            <div class="form-group  text-right" style="padding-top: 50px;"><button class="btn btn-success" type="submit"><i class="fa fa-fw fa-save"></i> Create [Main Menu]</button>&nbsp;&nbsp;<a class="btn btn-warning" href="{{url('/menu')}}"><i class="fa fa-times"></i> Cancel</a></div>

            </form>







    </div>
</div>
</div>
</div>
</section>

@endsection