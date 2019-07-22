@extends('layouts.admin')

@section('content')


        <section class="content-header">
    <h1>
        Settings
    </h1>

    <ol class="breadcrumb">
        
                            <li class="breadcrumb-item"><a href="{{url('/admin7')}}">Dashboard</a></li>
            
        
                            <li class="breadcrumb-item active">Settings</li>
            
            </ol>
</section>    <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                                    </div>
                <div class="col-md-6 text-right" style="padding-bottom: 10px;">
                                    </div>
            </div>
                <div class="row">
           @foreach($users as $user)       
        <!-- /.col -->
        <div class="col-md-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class=" active ">
                        <a href="#">
                            </i> Update [{{$user->name}}] </a>
                    </li>
                    
                </ul>
                 @if(count($errors)>0)
                 @foreach($errors->all() as $error)
                 <div class="alert alert-danger">{{$error}}</div>
                  @endforeach
                  @endif
                  @if(session('response'))
                  <div class="alert alert-info">{{session('response')}}</div>
                     @endif
                  @if(session('reject'))
                  <div class="alert alert-danger">{{session('reject')}}</div>
                     @endif

                <div class="tab-content">
                    <div class="tab-pane  active " id="profile">
                        <div class="nav-tabs-custom">

                            <div class="tab-content">

                                <div class="tab-pane active">
                                <form method="POST" enctype="multipart/form-data"  action="{{url('/updateImageSettings1')}}">
                                  @csrf
                                    <input type="hidden" name="id" value="{{$user->id}}">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group   required-field "><label for="name">Image</label><input class="form-control " name="picture" type="file" required autofocus></div>

           
                                        </div>


                                    </div>
                                </div>
                                

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group  text-right"><button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Update [{{$user->name}}]</button>&nbsp;&nbsp;<a class="btn btn-warning" href="{{url('/settings')}}"><i class="fa fa-times"></i> Cancel</a></div>
                            </form>
                            </div>
                        </div>
                     @endforeach

                        </div>
                    </div>
                    
                </div>







                <!-- /.tab-pane -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
    </div>
    <!-- /.row -->
    <!-- /.row -->

        </section>



@endsection