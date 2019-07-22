@extends('layouts.admin')

@section('content')



        <!-- Content Header (Page header) -->
    <br/>    
    <section class="content-header">
    <h1>
        Clubs[Section C]
    </h1>

    <ol class="breadcrumb">
        
                            <li class="breadcrumb-item"><a href="{{url('/admin7')}}">Dashboard</a></li>
            
        
                            <li class="breadcrumb-item active">CMS</li>
            
        
                            <li class="breadcrumb-item"><a href="{{url('/pages')}}">Pages</a></li>            
            </ol>


</section>    <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                                    </div>
              <form method="POST" action="{{url('/createSectionC')}}">
              @csrf               
                <div class="col-md-6 text-right" style="padding-bottom: 10px;">
                                <button class="btn btn-success" type="submit"><i class="fa fa-plus"></i> Create</button>
                    </div>
               </form>     
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


<div class="table-responsive m-t-10" style="min-height: 400px;padding-bottom: 20px;">
<table  class="table table-hover table-striped table-condensed dataTableBuilder" id="PagesDataTable" style="width:60%;">
  <thead>
    <tr>
      <th>#</th>
      <th >Name</th>
      <th style="text-align: right;padding-right: 30px;">Action</th>
    </tr>
  </thead>


<tbody>
<?php $cnt=1; ?> 
   @foreach ($users as $user) 
    <tr>
        <td>{{$cnt++}}</td>
        <td>{{$user->content}}</td>       
         <td>
                        
              <div class="item-actions" style="padding-right: 40px;">
                  <div class="btn-group pull-right">
                  <button type="button" class="btn btn-sm btn-default dropdown-toggle" style="padding: 2px 8px 0 8px;"
                           data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v" style="font-size: 1.2em;"></i>
                  </button>
                   <ul class="dropdown-menu" role="menu">

                   <form method="post" action="{{url('/editClubs')}}">
                   @csrf   
                   <input type="hidden" name="id" value="{{$user->id}}" />
                   <li>
                   <button class="buttontext" type="submit">&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-edit"></i> Edit</button>
                   </form>
                  </li>

                   <form method="post" action="{{url('/deleteClubs')}}">
                   @csrf   
                   <input type="hidden" name="id" value="{{$user->id}}" />
                   <li>
                   <button onclick="return confirm('Do you really want to delete this Club')" class="buttontext" type="submit">&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-trash"></i>  Delete</button>
                   </form>
                  </li>




              </ul>
                </div>
              </div>  
        </td>
    </tr>
 @endforeach
</tbody>

                    </table>
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