@extends('layouts.admin')

@section('content')


        <section class="content-header">
    <h1>
        Profile
    </h1>

    <ol class="breadcrumb">
        
                            <li class="breadcrumb-item"><a href="{{url('/admin7')}}">Dashboard</a></li>
            
        
                            <li class="breadcrumb-item active">Profile</li>
            
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
        <!-- /.col -->
        <div class="col-md-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class=" active ">
                        <a href="#profile" data-toggle="tab">
                            <i class="fa fa-user-o"></i> Profile                        </a>
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
                            <ul class="nav nav-pills">

                                <li><a href="{{url('/profile')}}"><i
                                                class="fa fa-pencil"></i>  Edit Profile                                   
                                                  </a>
                                 </li>


                                <li><a href="{{url('/changePassword')}}"><i
                                                class="fa fa-lock"></i>  Change Password                                   
                                                  </a>
                                 </li>
                                <li class="active"><a href="{{url('/changeProfilePicture')}}"><i
                                                class="fa fa-user-circle"></i>  Change Profile Picture                                   
                                                  </a>
                                 </li>

                            </ul>
                            <div class="tab-content">

                                <div class="tab-pane active">
                                <form method="POST" enctype="multipart/form-data"  action="{{url('/changeProfilePicture1')}}">
                                  @csrf
                                  
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group   required-field "><label for="name">Image
                                           (Less than 2Mb)</label><input class="form-control " name="picture" type="file" required autofocus></div>

           
                                        </div>
                                        <div id="country-div" class="col-md-4">

                                            <div class="form-group required-field  "><label for="job_title">Title</label><input class="form-control " placeholder="Title" name="title" 
                                                type="text" 
                                                value="{{Auth::user()->title}}" readonly="readonly" required autofocus></div>

                                        </div>



                                        <div class="col-md-4">
                                            <div class="text-center">

                                             @if(!empty(Auth::user()->image))
                                                <img id="image_source"
                                                     class="profile-user-img img-responsive img-circle"
                                                     style="width: 200px"
                                                     src="{{Auth::user()->image}}"
                                                     alt="User profile picture">
                                                 @else

                                                 <img id="image_source"
                                                     class="profile-user-img img-responsive img-circle"
                                                     style="width: 200px"
                                                     src="{{url('resources/img/basic/admin.jpg')}}"
                                                     alt="User profile picture">                                           

                                            @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group  text-right"><button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Save Profile</button>&nbsp;&nbsp;<a class="btn btn-warning" href="{{url('/changePassword')}}"><i class="fa fa-times"></i> Cancel</a></div>
                            </form>
                            </div>
                        </div>


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