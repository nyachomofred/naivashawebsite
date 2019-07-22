@extends('layouts.admin')

@section('content')


  <section class="content-header">
    <h1>
        Update Settings
    </h1>

    <ol class="breadcrumb">
        
                            <li class="breadcrumb-item"><a href="{{url('/admin7')}}">Dashboard</a></li>
            
        
                            <li class="breadcrumb-item"><a href="#">Roles</a></li>
            
        
                            <li class="breadcrumb-item active">Update User Role</li>
            
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
        <div class="col-md-12">
            <!-- Default box -->
<div class="box ">
    <div class="box-header with-border hidden">
        <h3 class="box-title hidden"></h3>

        <div class="box-tools pull-right">
            
        </div>
    </div>
    <div class="box-body">
        <form method="post" action="{{url('/updateGeneralSettings1')}}">
            @csrf
            @foreach($users as $user)
                <div class="row">
                    <div class="col-md-6">
                        <input type="hidden" name="id" value="{{$user->id}}">
                        <div class="form-group   required-field "><label for="name">Name</label><input readonly class="form-control " placeholder="Name" 
                        value="{{$user->name}}" name="name" type="text" ></div>

                        <div class="form-group   required-field "><label for="name">Content</label><input class="form-control " placeholder="content" 
                        value="{{$user->data}}" name="content" type="text" ></div>



                        

                        <div class="form-group  text-right"><button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Update [{{$user->name}}]</button>&nbsp;&nbsp;<a class="btn btn-warning" href="{{url('/settings')}}" ><i class="fa fa-times"></i> Cancel</a></div>
                    </div>
                   
                </div>
                </form>
            @endforeach    
    </div>
    <!-- /.box-body -->
    <div class="box-footer hidden"></div>
    <!-- /.box-footer-->
</div>
<!-- /.box -->        </div>
    </div>
        </section>



@endsection