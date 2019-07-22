@extends('layouts.admin')

@section('content')


  <section class="content-header">
    <h1>
        Societies
    </h1>

    <ol class="breadcrumb">
        
                            <li class="breadcrumb-item"><a href="{{url('/admin7')}}">Dashboard</a></li>
            
        
                            <li class="breadcrumb-item"><a href="#">Roles</a></li>
            
        
                            <li class="breadcrumb-item active">clubs</li>
            
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
        <form method="post" action="{{url('/createClubs')}}">
            @csrf
                <div class="row">
                    <div class="col-md-6">
                        <input type="hidden" name="id" value="5">
                        <div class="form-group   required-field "><label for="name">Name</label><input class="form-control " placeholder="Name" name="name" type="text" required></div>


                        <div class="form-group  text-right"><button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Create</button>&nbsp;&nbsp;<a class="btn btn-warning" href="{{url('/adminClubs')}}" ><i class="fa fa-times"></i> Cancel</a></div>
                    </div>
                   
                </div>
                </form>  
    </div>
    <!-- /.box-body -->
    <div class="box-footer hidden"></div>
    <!-- /.box-footer-->
</div>
<!-- /.box -->        </div>
    </div>
        </section>



@endsection