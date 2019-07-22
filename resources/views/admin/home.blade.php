@extends('layouts.admin')

@section('content')


        <section class="content-header">
    <h1>
        Dashboard
    </h1>

    <ol class="breadcrumb">
        
                            <li class="breadcrumb-item active">Dashboard</li>
            
            </ol>
</section>    <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                                    </div>
                <div class="col-md-6 text-right" style="padding-bottom: 10px;">
                                    </div>
            </div>




  
    <!-- Default box -->
<div class="box no-block-ui">
    <div class="box-header with-border hidden">
        <h3 class="box-title hidden"></h3>

        <div class="box-tools pull-right">
            
        </div>
    </div>
    <div class="box-body">
<div class="row p-10">
    
        <div class="col-md-3 col-sm-6 col-xs-6">

          <div class="info-box  bg-aqua">
            <span class="info-box-icon "><i class="fa fa-files-o fa-fw"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pages</span>
              <span class="info-box-number">{{$infomation[0]}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="info-box  bg-green">
            <span class="info-box-icon "><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Registered Users</span>
              <span class="info-box-number">{{$infomation[1]}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-6">

          <div class="info-box  bg-yellow">
            <span class="info-box-icon "><i class="fa fa-user-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Active Users</span>
              <span class="info-box-number">{{$infomation[3]}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-6">

          <div class="info-box bg-blue">

            <span class="info-box-icon "><i class="fa fa-calendar"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Events</span>
              <span class="info-box-number">{{$infomation[2]}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

</div>



  <section class="content">
            <div class="row">
                <div class="col-md-6">
                                    </div>
            @if(Auth::user()->status==2)                  
                <div class="col-md-6 text-right" style="padding-bottom: 10px;">
                                <a class="btn btn-info" data-toggle="collapse" href="#PagesDataTable_filtersCollapse"><i class="fa fa-search"></i></a>
                    </div>
             @endif       
            </div>
                <div class="row">
        <div class="col-md-12">
            <!-- Default box -->
<div class="box box-primary">
    <div class="box-header with-border hidden">
        <h3 class="box-title hidden"></h3>

        <div class="box-tools pull-right">
            
        </div>
    </div>
    <div class="box-body">
        <div id="PagesDataTable_filtersCollapse"
                         class="filtersCollapse collapse">
                        <br/>

                        <div class="filters" data-table="PagesDataTable" id="PagesDataTable_filters">
                        <form method="post" action="{{url('/searchUser')}}">
                         @csrf

                            <div class="row" ><div class="col-md-3"><div class="form-group   "><input class="form-control filter" placeholder="Search" id="title" name="search" type="text"></div></div><div class="col-md-1 p-r-0"><button class="btn btn-primary filterBtn"  type="submit"><i class="fa fa-search"></i></button></div></div>
                         </form>
                        </div>
                    </div>


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


                                <div class="table-responsive m-t-10" style="min-height: 350px;padding-bottom: 20px;">
                    <table  class="table table-hover table-striped table-condensed dataTableBuilder" id="PagesDataTable" style="width:100%;"><thead><tr><th >Name</th><th >Email</th>
                      <th >Title</th><th >Status</th></tr></thead>

<tbody>
   @foreach ($users as $user) 
    <tr>
        
        <td>{{$user->name}}</td>          <td>{{$user->email}}</td>        <td>{{$user->title}}</td> <td> @if($user->log==1)
         <span style="color: #FF0000;"> logged in </span>
       @else 
          <span style="color: #008000;">    Logged out </span>
      @endif </td>  
    </tr>
 @endforeach
</tbody>

                    </table>
              <div style="padding-left:40%;">{!! $users->render() !!}</div>
                </div>
    </div>
</div>
</div>
</div>
</section>


@endsection