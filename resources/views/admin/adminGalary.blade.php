@extends('layouts.admin')

@section('content')

@foreach($users as $user)

        <!-- Content Header (Page header) -->
    <section class="content-header">
    <br/> 
    <h1>
        Gallary
    </h1>

    <ol class="breadcrumb">
        
                            <li class="breadcrumb-item"><a href="{{url('/admin7')}}">Dashboard</a></li>
            
        
                            <li class="breadcrumb-item active">CMS</li>
            
        
                            <li class="breadcrumb-item"><a href="{{url('/pages')}}">Pages</a></li>
            
        
            
            </ol>
</section>  

 <section class="content">                
    <div class="row">
        <div class="col-md-12">
            <!-- Default box -->
<div class="box ">
    <div class="box-body">
    <div class="row">
    <div class="col-md-12">
    <h3 class="box-title">Background Image</h3>

          <img src="resources/galary/{{$user->bg_image}}" class="rounded mx-auto d-block"
               height="150" alt="image">

          <div class="col-md-12">
            
          <div class="col-md-6">
            <button type="button" class="btn btn-success modalButton" data-toggle="modal" title="Update Image" data-target="#disp_image">
               <i class="fa fa-edit" aria-hidden="true" style="font-size:20px"></i>
            </button>
          </div>

          <div class="col-md-6">
            <button type="button" class="btn btn-success modalButton" data-toggle="modal" title="Add Image" data-target="#disp_image1">
               <i class="fa fa-plus" aria-hidden="true" style="font-size:20px"></i> Add Image
            </button>
          </div>

          </div>




                  <!--BACKGROUND IMAGE MODAL SECTION    -->

                  <div class="modal fade" id="disp_image" tabindex="-1" role="dialog" 
                       aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="exampleModalLabel">Update Bacground image</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                         <form method="post" action="{{url('/updateGalBackImage')}}" class="form-horizontal" enctype="multipart/form-data">
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





                  <!--ADD IMAGE MODAL SECTION    -->

                  <div class="modal fade" id="disp_image1" tabindex="-1" role="dialog" 
                       aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="exampleModalLabel">Add image</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                         <form method="post" action="{{url('/addGalaryImage')}}" class="form-horizontal" enctype="multipart/form-data">
                          @csrf


                          <div class="form-group col-md-12"> 
                          <label for="desc" style="margin-left: 10px;">Descritpion</label>       
                          <input type="text" id="desc" class="form-control" name="text" required autofocus>
                          </div>

                          <div class="form-group col-md-12"> 
                          <label for="picture" style="margin-left: 10px;">Image</label>       
                          <input type="file" id="picture" class="form-control" name="picture" required autofocus>
                          </div>
                         
                         <div class="form-group text-right">
                           <button class="btn btn-success" name="updateImage" type="submit">
                           <i class="fa fa-plus" aria-hidden="true" style="font-size: 20px;"></i> Add Image
                         </button> 
                        </div>
                         </form>
                        </div>
                      </div>
                    </div>
                  </div>












    </div>  
    <hr/>
    <br/>
    <br/>


@foreach($images as $image)
<div class="col-md-4">
  <br>
  <p class="box-title">{{$image->text}}</p>  

 <img src="resources/galary/{{$image->image}}" class="rounded mx-auto d-block"
               height="150" alt="image">

  <form method="post" action="{{url('/deleteGalaryImage')}}" style="display: inline-block;">
    @csrf
  <input type="hidden" name="id" value="{{$image->id}}"> 
  <button type="submit" class="btn btn-danger" onclick="return confirm('Do you really want to delete this image');">
     <i class="fa fa-trash" aria-hidden="true" style="font-size:20px"></i>
  </button>

  </form>

<br>
</div>
@endforeach

<br>
<br>
<div class="col-md-12" style="padding-left:40%;">{!! $images->render() !!}</div>
<br>
<br>

</div>
</div>
</div>
</div>

</div>
</section>

@endforeach
@endsection