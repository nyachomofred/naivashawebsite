@extends('layouts.admin')

@section('content')

@foreach($users as $user)

        <!-- Content Header (Page header) -->
    <section class="content-header">
    <br/> 
    <h1>
        Update[{{$user->name}}]
    </h1>

    <ol class="breadcrumb">
        
                            <li class="breadcrumb-item"><a href="{{url('/admin7')}}">Dashboard</a></li>
            
        
                            <li class="breadcrumb-item active">CMS</li>
            
        
                            <li class="breadcrumb-item"><a href="{{url('/pages')}}">Pages</a></li>
            
        
            
            </ol>
</section>  

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
              <form method="POST" enctype="multipart/form-data" action="{{url('/updatePartner')}}"> 
                @csrf

                 @if(count($errors)>0)
                 @foreach($errors->all() as $error)
                 <div class="alert alert-danger">{{$error}}</div>
                  @endforeach
                  @endif
                  @if(session('response'))
                  <div class="alert alert-success">{{session('response')}}</div>
                     @endif

                     @if(session('reject'))
                     <div class="alert alert-warning">{{session('reject')}}</div>
                        @endif                

                <div class="row">
                    <div class="col-md-12">
                    <div class="row">
                     <div class="col-md-6">
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{$user->phone}}" required>
                    </div>
                    <div class="form-group">
                      <label for="descritpion ">Description</label>
                      <textarea class="form-control" name="descritpion">{{$user->descritpion}}</textarea>
                    </div>

                
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-12 text-right">
                            <br/>
                            <div class="form-group"><button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Update [{{$user->name}}]</button>&nbsp;&nbsp;<a class="btn btn-warning" href="{{url('/adminTeams')}}"><i class="fa fa-times"></i> Cancel</a></div>
                        </div>
                    </div>    
                    </div>
                </form>


                    </div>
                    <div class="col-md-6">




                    <!--Subjects image-->
                    <div class="col-md-12 mt-2 text-center">
                        <h4>Partner Image</h4>
                          <img src="resources/partners/{{$user->image}}" class="rounded mx-auto d-block"
                               height="150" alt="image">

                          <div class="col-md-12">
                            <button type="button" class="btn btn-success modalButton" data-toggle="modal" title="Update Image" data-target="#disp_image">
                               <i class="fa fa-edit" aria-hidden="true" style="font-size:20px"></i>
                            </button>
                          </div>
                    </div>



                  <!--TEAM IMAGE MODAL SECTION    -->

                  <div class="modal fade" id="disp_image" tabindex="-1" role="dialog" 
                       aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="exampleModalLabel">Team Image</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                         <form method="post" action="{{url('/updatePartnerImage')}}" class="form-horizontal" enctype="multipart/form-data">
                          @csrf
                          <input type="hidden" name="page_id" value="{{$user->id}}">
                          
                          <div class="form-group"> 
                          <label for="picture" style="margin-left: 10px;">Image</label>       
                          <input type="file" id="picture" class="form-control" name="picture" required autofocus>
                          </div>
                         
                         <div class="form-group text-right">
                           <button class="btn btn-success" name="updateImage" type="submit">
                           <i class="fa fa-floppy-o" aria-hidden="true" style="font-size: 20px;"></i> Update Image
                         </button> 
                        </div>
                         </form>
                        </div>
                      </div>
                    </div>
                  </div>




                        
                    </div>

                    </div>
                </div>

    </div>
</div>
<!-- /.box -->        </div>
    </div>
        </section>

@endforeach
@endsection