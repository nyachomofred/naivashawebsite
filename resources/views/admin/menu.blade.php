@extends('layouts.admin')

@section('content')

        <section class="content-header">
    <h1>
        Menu
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
                        <div class="btn-group pull-right">
        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"
                aria-expanded="false"><i class="fa fa-fw fa-pencil"></i> Edit Menu
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
                            <li>
                    <!--<a href="{{url('/deleteMainMenu')}}">-->
                    <a href="#">
                        <i class="fa fa-fw fa-trash"></i> Main
                    </a>
                </li>

                            <li>
                    <!--<a href="{{url('/deleteSubMenu')}}">-->
                    <a href="#">
                        <i class="fa fa-fw fa-trash"></i> Sub
                    </a>
                </li>


                    </ul>
    </div>                   

         <div class="btn-group pull-right">
             &nbsp;<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"
                aria-expanded="false"><i class="fa fa-fw fa-plus"></i> Create Menu
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
                            <li>
                    <!--<a href="{{url('/createMainMenu')}}">-->
                    <a href="#">                        
                        <i class="fa fa-fw fa-plus"></i> Main
                    </a>
                </li>
                            <li>
                    <!--<a href="{{url('/createDropDownMenu')}}">-->
                    <a href="#">
                        <i class="fa fa-fw fa-plus"></i> Drop Down
                    </a>
                </li>
                            <li>
                    <!--<a href="{{url('/createSubMenu')}}">-->

                    <a href="#">
                        <i class="fa fa-fw fa-plus"></i> Create Sub
                    </a>
                </li>


                    </ul>
    </div>
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
                        
                        <li class="nav-item active">
                            <a href="{{url('/menu')}}" class="active nav-link">Main Menu
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('/subMenu')}}" class="active nav-link">Sub Menu
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
                                    <th>Key</th>
                                    <th>Type</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody class="settings-table-body">




                            @foreach($menus as $menu)
                            @if($menu->type=="menu")
                                 <tr>
                                        <td>{{$menu->name}}</td>
                                        <td>{{$menu->key}}</td>
                                        <td>{{$menu->type}}</td>
                                        <td>

                                  <form method="post" action="{{url('/editMenu')}}">
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