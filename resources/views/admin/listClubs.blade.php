@extends('layouts.admin')

@section('content')



        <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
        Events
    </h1>

    <ol class="breadcrumb">
        
                            <li class="breadcrumb-item"><a href="{{url('/admin7')}}">Dashboard</a></li>
            
        
                            <li class="breadcrumb-item active">CMS</li>
            
        
                            <li class="breadcrumb-item"><a href="#">Events</a></li>            
            </ol>


</section>    <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                                    </div>
                <div class="col-md-6 text-right" style="padding-bottom: 10px;">
                                <a class="btn btn-info" data-toggle="collapse" href="#PagesDataTable_filtersCollapse"><i class="fa fa-search"></i></a>
                                <a class="btn btn-success"  href="{{url('/createEvent')}}"><i class="fa fa-plus"></i> Add</a>
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

                 @if(count($errors)>0)
                 @foreach($errors->all() as $error)
                 <div class="alert alert-danger">{{$error}}</div>
                  @endforeach
                  @endif
                  @if(session('response'))
                  <div class="alert alert-info">{{session('response')}}</div>
                     @endif
                  @if(session('success'))
                  <div class="alert alert-info">{{session('success')}}</div>
                     @endif


                                <div class="table-responsive m-t-10" style="min-height: 350px;padding-bottom: 20px;">
                    <table  class="table table-hover table-striped table-condensed dataTableBuilder" id="PagesDataTable" style="width:75%;">
                      <thead>
                        <tr>
                          <th >Name</th>
                          <th >Created At</th>
                          <th >Updated At</th>
                          <th class="text-center">Action</th>
                        </tr>
                      </thead>


<tbody>
   @foreach ($users as $user) 
    <tr>
  
  <td>{{$user->name}}</td> 
  <td>{{$user->created_at}}</td>
  <td>{{$user->updated_at}}</td>
          
          <td style="padding-right: 40px;">
            <form method="post" action="{{url('/editClub')}}">
                 @csrf
            <input type="hidden" name="id" value="{{$user->id}}">
            <button class="buttontext"  style="padding: 2px 8px 0 8px;"  title="Edit" type="submit">
                <i class="fa fa-fw fa-edit" style="font-size: 1.2em;"></i></button>
             </form>   

        </td>
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