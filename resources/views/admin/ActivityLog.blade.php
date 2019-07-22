@extends('layouts.admin')

@section('content')



        <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
        Activity Log
    </h1>

    <ol class="breadcrumb">
        
                            <li class="breadcrumb-item"><a href="{{url('/admin7')}}">Dashboard</a></li>
            
        
                            <li class="breadcrumb-item active">CMS</li>
            
        
                            <li class="breadcrumb-item"><a href="#">Activity Log</a></li>            
            </ol>


</section>    <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                                    </div>
                <div class="col-md-6 text-right" style="padding-bottom: 10px;">
                                <a class="btn btn-info" data-toggle="collapse" href="#PagesDataTable_filtersCollapse"><i class="fa fa-search"></i></a>
                 <a class="btn btn-info"  href="{{url('/clearActivityLog')}}" onclick="return confirm('Do you really want to clear activity log')" title="Clear" ><i class="fa fa-trash-o"></i></a>                           
                    </div>
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
                        <form method="post" action="{{url('/searchActivityLog')}}">
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
                    <table  class="table table-hover table-striped table-condensed dataTableBuilder" id="PagesDataTable" style="width:100%;"><thead><tr><th >Name</th><th >Email</th><th>Activity</th><th >Time</th></tr></thead>


<tbody>
   @foreach ($users as $user) 
    <tr>
        
        <td>{{$user->name}} </td> <td>{{$user->email}}</td>        <td>{{$user->activity}}</td>         <td>{{$user->created_at}}</td> 
    </tr>
 @endforeach
</tbody>

                    </table>
              <div style="padding-left:40%;">{!! $users->render() !!}</div>
                </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer hidden"></div>
    <!-- /.box-footer-->
</div>
</div>
</div>
</section>

@endsection