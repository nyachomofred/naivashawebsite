@extends('layouts.admin')

@section('content')

        <section class="content-header">
     <br/>       
    <h1>
        Delete Sub Menu
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
                        
                        <li class="nav-item">
                            <a href="{{url('/deleteMainMenu')}}" class="active nav-link">Delete Main Menu
                            </a>
                        </li>

                        <li class="nav-item active">
                            <a href="{{url('/deleteSubMenu')}}" class="active nav-link">Delete Sub Menu
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





                                            <div class="tab-pane active" id="main">
                            <table class="table color-table info-table table table-hover table-striped table-condensed">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Key</th>
                                    <th>Sub To:</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody class="settings-table-body">




                            @foreach($menus as $menu)
                            @if($menu->type=="sub")
                                 <tr>
                                        <td>{{$menu->name}}</td>
                                        <td>{{$menu->key}}</td>
                                        <td>{{$menu->subtarget}}</td>
                                        <td>


                                  <form method="post" action="{{url('/deleteSubMenu1')}}">
                                       @csrf
                                  <input type="hidden" name="id" value="{{$menu->id}}">
                                  <button class="buttontext" onclick='return confirm("Do you really want to delete this menu")'  style="padding: 2px 8px 0 8px;"  title="Edit" type="submit">
                                      <i class="fa fa-fw fa-trash" style="font-size: 1.2em;"></i></button>
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