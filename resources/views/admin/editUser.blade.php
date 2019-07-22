@extends('layouts.admin')

@section('content')


        <section class="content-header">
    <h1>
        Update Users
    </h1>

    <ol class="breadcrumb">
        
                            <li class="breadcrumb-item"><a href="{{url('/admin7')}}">Dashboard</a></li>
            
        
                            <li class="breadcrumb-item active">Users</li>
            
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
                        <a href="#" data-toggle="tab">
                            <i class="fa fa-users fa-fw"></i> Update Users  </a>
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
                  @if(session('success'))
                  <div class="alert alert-success">{{session('success')}}</div>
                     @endif

                <div class="tab-content">
                    <div class="tab-pane  active " id="profile">
                        <div class="nav-tabs-custom">
                            <div class="tab-content">

                                <div class="tab-pane active">
                                <form method="POST" action="{{url('/updateUser')}}">
                                  @csrf
                                  
                                  @foreach($users as $user)
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="hidden" name="id" value="{{$user->id}}">
                                            <div class="form-group   required-field "><label for="name">First Name</label><input class="form-control " placeholder="First Name" name="name" value="{{$user->name}}" type="text" required autofocus></div>

                                            <div class="form-group   required-field "><label for="email">Email</label><input class="form-control " placeholder="Email"  name="email" type="email" value="{{$user->email}}" required autofocus></div>

           
                                        </div>
                                        <div id="country-div" class="col-md-4">
                                            <div class="form-group   required-field "><label for="last_name">Last Name</label><input class="form-control " value="{{$user->lastName}}" placeholder="Last Name" 
                                             name="lastName"  type="text" required autofocus></div>
                                            <div class="form-group  required-field "><label for="phone_number">Cell Phone</label><input  class="form-control " placeholder="Cell Phone" name="phone" type="text" value="{{$user->phone}}" required autofocus></div>
                                            <div class="form-group required-field  "><label for="job_title">Title</label><input class="form-control " placeholder="Title" name="title" 
                                                type="text" 
                                                value="{{$user->title}}" readonly="readonly" required autofocus></div>
                                        </div>



                                        <div class="col-md-4">
                                            <div class="text-center">

                                             @if(!empty($user->image))
                                                <img id="image_source"
                                                     class="profile-user-img img-responsive img-circle"
                                                     style="width: 200px"
                                                     src="{{$user->image}}"
                                                     alt="User profile picture">
                                                 @else

                                                 <img id="image_source"
                                                     class="profile-user-img img-responsive img-circle"
                                                     style="width: 200px"
                                                     src="{{url('resources/settings/admin.jpg')}}"
                                                     alt="User profile picture">                                           

                                            @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group  text-right"><button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Update [{{$user->name}}]</button>&nbsp;&nbsp;<a class="btn btn-warning" href="{{url('/listUsers')}}"><i class="fa fa-times"></i> Cancel</a></div>
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