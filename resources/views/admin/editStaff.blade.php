@extends('layouts.admin')

@section('content')
    @foreach($users as $user)

        <section class="content-header">
    <h1>
          Update [{{$user->name}}]
    </h1>

    <ol class="breadcrumb">
        
                            <li class="breadcrumb-item"><a href="{{url('/admin7')}}">Dashboard</a></li>
            
        
                            <li class="breadcrumb-item active">Update Staff</li>
            
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
                  <div class="alert alert-info">{{session('success')}}</div>
                     @endif

<div class="tab-content">
<div class="tab-pane  active " id="profile">
<div class="nav-tabs-custom">

<div class="tab-content">

  <div class="tab-pane active">    
      <div class="row">
          <div class="col-md-8">



       <div class="tab-pane active">
        <form method="POST" enctype="multipart/form-data" action="{{url('/updateStaff')}}">
          @csrf
            <div class="row">

                    <input type="hidden" name="id" value="{{$user->id}}">
                    <div class="col-md-6">
                    <div class="form-group   required-field "><label for="name">Name</label><input class="form-control " placeholder="Staff Name" name="name"type="text" value="{{$user->name}}"required autofocus></div>
                    </div>
                    
                    <div class="col-md-6">
                    <div class="form-group   required-field "><label for="title">Title</label><input class="form-control " placeholder="Title" name="title"  
                        type="text" value="{{$user->title}}" required autofocus></div>
                    </div>    


                <div class="col-md-12">
                    <div class="form-group required-field"><label for="descritpion">Description</label>
                    <textarea class="form-group required-field my-editor" rows="10" id="content" name="comment" required autofocus>{{$user->comment}}
                    </textarea>
                    </div>
                </div>
            </div>
        </div>
        




    <div class="col-md-12">
        <div class="form-group  text-right"><button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Update [{{$user->name}}] </button>&nbsp;&nbsp;<a class="btn btn-warning" href="{{url('/staffSettings')}}"><i class="fa fa-times"></i> Cancel</a></div>
    </form>
    </div>





           
</div>

                                     

<div class="col-md-4">
    <div class="text-center">

     @if(!empty($user->image))
        <img id="image_source"
             class="profile-user-img img-responsive img-circle"
             style="width: 200px"
             src="resources/staff/{{$user->image}}"
             alt="User profile picture">

      <div class="col-md-12 text-center">
      <br/>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-edit"></i> Update Image
      </button>
      </div>

         @else

         <img id="image_source"
             class="profile-user-img img-responsive img-circle"
             style="width: 200px"
             src="{{url('resources/settings/admin.jpg')}}"
             alt="User profile picture">                                           

    @endif

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





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method="POST" enctype="multipart/form-data" action="{{url('/updateStaffImage')}}">
          @csrf
      <input type="hidden" name="id" value="{{$user->id}}">
      <div class="form-group   required-field "><label for="name">Image (Less than 2Mb)</label>
         <input class="form-control " name="picture" type="file" required autofocus>
      </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-times"></i>Close</button>
        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Update</button>
      </div>
      </form>
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