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
                        
                        <li class="nav-item active">
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
                        <li class="nav-item">
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
                  <div class="alert alert-info">{{session('success')}}</div>
                     @endif





                                            <div class="tab-pane active" id="main">
                            <table class="table color-table info-table table table-hover table-striped table-condensed">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Data</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody class="settings-table-body">




                            @foreach($menus as $menu)
                            @if(($menu->key=="postal")||($menu->key=="phone")||($menu->key=="email1")||($menu->key=="email"))
                                 <tr>
                                        <td>{{$menu->name}}</td>
                                        <td>{{$menu->data}}</td>
                                        <td>{{$menu->updated_at}}</td>
                                        <td>
                                             <form method="post" action="{{url('/updateGeneralSettings')}}">
                                                 @csrf
                                              <input type="hidden" name="id" value="{{$menu->id}}">
                                              <button class="buttontext"  style="padding: 2px 8px 0 8px;"  title="Edit" type="submit">
                                               <i class="fa fa-fw fa-edit" style="font-size: 1.2em;"></i></button>
                                               </form>  
                                        </td>
                                    </tr>

                            @endif
                            @endforeach


                                </tbody>
                            </table>
                        </div>








                                        



      </div>
    </div>
</div>
</div>
</div>
</section>



@endsection