@extends('layouts.admin')

@section('content')


        <section class="content-header">
    <h1>
        Create Event
    </h1>

    <ol class="breadcrumb">
        
                            <li class="breadcrumb-item"><a href="{{url('/admin7')}}">Dashboard</a></li>
            
        
                            <li class="breadcrumb-item active">Create Event</li>
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
                                <form method="POST" enctype="multipart/form-data" action="{{url('/createNewEvent')}}">
                                  @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group   required-field "><label for="name">Event Title</label><input class="form-control " placeholder="Event Name" name="name"  type="text" required autofocus></div>
                                            <div class="form-group   required-field "><label for="date">Start Date</label>
                                              <input name="startdate" type="date" class="form-control" placeholder="Start Date" required autofocus> 
                                            </div>
                                            <div class="form-group   required-field "><label for="date">Start Time</label>
                                              <input name="starttime" type="text" class="form-control" placeholder="E.g. 8:00 AM" required autofocus> 
                                            </div>

           
                                        </div>
                                        <div id="country-div" class="col-md-4">
                                            <div class="form-group   required-field "><label for="location">Location</label><input class="form-control " placeholder="Location"  
                                              name="location" type="text" required autofocus></div>


                                            <div class="form-group   required-field "><label for="date">End Date</label>
                                              <input name="enddate" type="date" class="form-control" placeholder="End Date" required autofocus> 
                                            </div>

                                            <div class="form-group   required-field "><label for="date">Ending At</label>
                                              <input name="endtime" type="text" class="form-control" placeholder="E.g. 5:00 PM" required autofocus> 
                                            </div>
                                            <div class="form-group   required-field "><label for="date">Image</label>
                                              <input name="picture" type="file" class="form-control" required autofocus> 
                                            </div>


                                        </div>

                                            
                                            <div class="form-group required-field col-md-8 "><label for="descritpion">Description</label>
                                            <textarea class="form-group required-field my-editor" rows="10" name="description" required autofocus>
                                            </textarea>
                                            </div>



                                    </div>
                                </div>
                                

                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group  text-right"><button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Create Event</button>&nbsp;&nbsp;<a class="btn btn-warning" href="{{url('/adminEvents')}}"><i class="fa fa-times"></i> Cancel</a></div>
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>
                    
                </div>







                <!-- /.tab-pane -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
    </div>
    <!-- /.row -->
    <!-- /.row -->

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

@endsection
