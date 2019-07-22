@extends('layouts.admin')

@section('content')
@foreach($users as $user)

        <section class="content-header">
    <h1>
        Update [{{$user->title}}]
    </h1>

    <ol class="breadcrumb">
        
                            <li class="breadcrumb-item"><a href="{{url('/admin7')}}">Dashboard</a></li>
            
        
                            <li class="breadcrumb-item">Events</li>
            
            </ol>
</section>    <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                                    </div>
                <div class="col-md-6 text-right" style="padding-bottom: 10px;">
                                    </div>
            </div>
                <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
            <div class="nav-tabs-custom">
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




                <div class="tab-content">
                    <div class="tab-pane  active " id="profile">
                        <div class="nav-tabs-custom">
                            <div class="tab-content">

                                <div class="tab-pane active">
                                <form method="POST" enctype="multipart/form-data" action="{{url('/updateEvent')}}">
                                  @csrf
                                  <input type="hidden" name="id" value="{{$user->id}}">
                                    <div class="row">
                                        <div class="col-md-8">
                                        <div class="col-md-6">
                                            <div class="form-group   required-field "><label for="name">Event Title</label><input class="form-control " placeholder="Event Name" name="name"  type="text" value="{{$user->title}}" required autofocus></div>
                                            <div class="form-group   required-field "><label for="date">Start Date</label>
                                              <input name="startdate" type="date" class="form-control" placeholder="Start Date" required autofocus> 
                                            </div>
                                            <div class="form-group   required-field "><label for="date">Start Time</label>
                                              <input name="starttime" type="text" value="{{$user->starttime}}" class="form-control" placeholder="E.g. 8:00 AM" required autofocus> 
                                            </div>

           
                                        </div>
                                        <div id="country-div" class="col-md-6">
                                            <div class="form-group   required-field "><label for="location">Location</label><input class="form-control " value="{{$user->location}}" placeholder="Location"  
                                              name="location" type="text" required autofocus></div>


                                            <div class="form-group   required-field "><label for="date">End Date</label>
                                              <input name="enddate" type="date" class="form-control" placeholder="End Date" required autofocus> 
                                            </div>

                                            <div class="form-group   required-field "><label for="date">Ending At</label>
                                              <input name="endtime" type="text" value="{{$user->endtime}}" class="form-control" placeholder="E.g. 5:00 PM" required autofocus> 
                                            </div>

                                        </div>

                                            
                                            <div class="form-group required-field col-md-12 "><label for="descritpion">Description</label>
                                            <textarea class="form-group required-field my-editor" rows="10" name="description" required autofocus>
                                              {{$user->description}}
                                            </textarea>
                                            </div>
                                

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group  text-right"><button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Update [{{$user->title}}]</button>&nbsp;&nbsp;<a class="btn btn-warning" href="{{url('/adminEvents')}}"><i class="fa fa-times"></i> Cancel</a></div>
                            </form>
                            </div>
                        </div>
                        </div>


                    <div class="col-md-4">


                    <!--Image section-->
                    <div class="row">
                    @if(!empty($user->image))
                    <div class="col-md-6">
                          <img src="resources/events/{{$user->image}}" class="rounded mx-auto d-block"
                               height="150" alt="image">

                          <div class="col-md-12">
                            <form method="post" action="{{url('/deleteEventImage')}}">
                              @csrf
                              <input type="hidden" name="id" value="{{$user->id}}">
                            <button type="submit" onclick='return confirm("Do you really want to delete this image?")' class="btn btn-danger">
                               <i class="fa fa-trash" aria-hidden="true" style="font-size:20px"></i>
                            </button>
                          </form>
                          </div>
                    </div>
                    @else
                    <div class="col-md-6">
                          <img src="resources/events/default.png" class="rounded mx-auto d-block"
                               height="150" alt="image">

                          <div class="col-md-12">
                            <button type="submit" class="btn btn-success modalButton" data-toggle="modal" title="Update Image" data-target="#exampleModal">
                               <i class="fa fa-edit" aria-hidden="true" style="font-size:20px"></i>
                            </button>
                          </div>
                    </div>



                  <!-- MODAL SECTION    -->

                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" 
                       aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="exampleModalLabel">Update Image</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                         <form method="post" action="{{url('/upateEventImage')}}" class="form-horizontal" enctype="multipart/form-data">
                          @csrf
                          <input type="hidden" name="id" value="{{$user->id}}">
                          
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


                    @endif



                 @foreach($pictures as $picture)
                    <div class="col-md-6">
                          <img src="resources/events/{{$picture->image}}" class="rounded mx-auto d-block"
                               height="150" alt="image">

                          <div class="col-md-12">
                            <form method="post" action="{{url('/deleteEventImage1')}}">
                              @csrf
                              <input type="hidden" name="eventId" value="{{$user->id}}">
                              <input type="hidden" name="pictureId" value="{{$picture->id}}">              
                            <button type="submit" onclick='return confirm("Do you really want to delete this image?")' class="btn btn-danger">
                               <i class="fa fa-trash" aria-hidden="true" style="font-size:20px"></i>
                            </button>
                          </form>
                          </div>
                    </div>
                    @endforeach




</div>






<div class="col-md-12" style="margin-top: 20px;">
<a data-toggle="modal" title="Update Image" data-target="#addImage" 
   class="btn btn-sm btn-success item-button"
   title="Add Image">
    <i class="fa  fa-plus"></i> Add Image
</a>
</div>


                  <!-- MODAL SECTION    -->

                  <div class="modal fade" id="addImage" tabindex="-1" role="dialog" 
                       aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="exampleModalLabel">Add Image</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                         <form method="post" action="{{url('/addEventImage')}}" class="form-horizontal" enctype="multipart/form-data">
                          @csrf   
                          <input type="hidden" name="id" value="{{$user->id}}">                       
                          <div class="form-group"> 
                          <label for="picture" style="margin-left: 10px;">Image</label>       
                          <input type="file" id="picture" class="form-control" name="picture" required autofocus>
                          </div>
                         
                         <div class="form-group text-right" style="margin-right: 10px;">
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
</div>
</div>
</div>
</section>


<script>
  var editor_config = {
    path_absolute : "",
    selector: "textarea.my-editor",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>
@endforeach
@endsection
