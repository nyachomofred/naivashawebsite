@extends('layouts.admin')

@section('content')

        <section class="content-header">
    <h1>
        Settings
    </h1>

    <ol class="breadcrumb">
        
                            <li class="breadcrumb-item"><a href="{{url('/admin7')}}">Dashboard</a></li>
            
        
                            <li class="breadcrumb-item active">Menu</li>
            
            </ol>
</section>    <!-- Main content -->
        <section class="content">

                      <div class="row">
                <div class="col-md-6">
                                    </div>
                <div class="col-md-6 text-right" style="padding-bottom: 10px;">
                                <a class="btn btn-info" data-toggle="collapse" href="#PagesDataTable_filtersCollapse"><i class="fa fa-search"></i></a>
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
        <ul id="tabs" class="nav nav-tabs">
                        
                        <li class="nav-item">
                            <a href="{{url('/settings')}}" class="active nav-link">Basic
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('/socialSettings')}}" class="active nav-link">Social
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('/imagesSettings')}}" class="active nav-link">Images
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="{{url('/staffSettings')}}" class="active nav-link">Staff
                            </a>
                        </li>
                                    </ul>
                <div class="tab-content">
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



        <div id="PagesDataTable_filtersCollapse"
                         class="filtersCollapse collapse">
                        <br/>

                        <div class="filters" data-table="PagesDataTable" id="PagesDataTable_filters">
                        <form method="post" action="{{url('/seachStaff')}}">
                         @csrf

                            <div class="row" ><div class="col-md-3"><div class="form-group   "><input class="form-control filter" placeholder="Staff Name" id="title" name="search" type="text"></div></div><div class="col-md-1 p-r-0"><button class="btn btn-primary filterBtn"  type="submit"><i class="fa fa-search"></i></button></div></div>
                         </form>
                        </div>
                    </div>


                              <div class="table-responsive m-t-10" style="min-height: 400px;padding-bottom: 20px;">
                  <table  class="table table-hover table-striped table-condensed dataTableBuilder" id="PagesDataTable" style="width:100%;"><thead><tr><th >Name</th><th >Title</th><th >Updated at</th><th  width="80px">Action</th></tr></thead>


<tbody>
 @foreach ($users as $user) 
  <tr>
      
      <td>{{$user->name}}</td>        <td>{{$user->title}}</td>       <td>{{$user->updated_at}}</td>        <td>
                      
          <form method="post" action="{{url('/editStaff')}}">
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
    </div>
</div>
</div>
</div>
</section>



@endsection