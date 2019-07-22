@extends('layouts.admin')

@section('content')


@foreach($pages as $page)
        <section class="content-header">
    <h1>
        Update [{{$page->name}}]
    </h1>

    <ol class="breadcrumb">
        
                            <li class="breadcrumb-item"><a href="{{url('/admin7')}}">Dashboard</a></li>
            
        
                            <li class="breadcrumb-item active">CMS</li>
            
        
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            
        
                            <li class="breadcrumb-item active">Update [{{$page->name}}]</li>
            
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
        <div class="col-md-12">
            <!-- Default box -->
<div class="box ">
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
         <form method="post" action="{{url('/updateAcademics')}}">
          @csrf                          
                <div class="row">
                    <div class="col-md-12">
                    <div class="col-md-4">
                        <input type="hidden" name="id" value="{{$page->id}}">
                        <div class="form-group   required-field "><label for="title">Title</label><input class="form-control " readonly="readonly" id="title" name="name" type="text" 
                          value="{{$page->name}}"></div>
                    </div>
                    @foreach($keys as $key)
                    <div class="col-md-4">
                        <div class="form-group   required-field "><label for="slug">Key</label><input class="form-control " placeholder="Slug" id="slug" name="key" type="text" readonly="readonly" value="{{$key->key}}"></div>
                    </div>
                    @endforeach
                </div>
                </div>

                <br/>
                <div class="row">
                    <div class="col-md-9">

                  
                  <div class="col-md-12">
                      
                    <div class="form-group">
                        <label for="content">Page Content</label>
                        <textarea class="form-control my-editor" rows="10" placeholder="content" id="content" name="content" cols="50">{{$page->content}}
                        </textarea>
                    </div>

                  </div>

                <br/>

                <div class="row">
                    <div class="col-md-6 col-md-offset-6">
                        <div class="form-group  text-right"><button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Update [{{$page->name}}]</button>&nbsp;&nbsp;<a class="btn btn-warning" href="{{url('/pages')}}"><i class="fa fa-times"></i> Cancel</a></div>
                    </div>
                </div>
                </form>
                <hr/>



                  </div>
                  <div class="col-md-3">
                      
                    <!--Background image-->
                    <div class="col-md-12">
                        <h4>Background Image</h4>
                          <img src="resources/academics/{{$page->bg_image}}" class="rounded mx-auto d-block"
                               height="150" alt="image">

                          <div class="col-md-12">
                            <button type="button" class="btn btn-success modalButton" data-toggle="modal" title="Update Image" data-target="#bg_image">
                               <i class="fa fa-edit" aria-hidden="true" style="font-size:20px"></i>
                            </button>
                          </div>
                    </div>



                  <!--BACKGROUND IMAGE MODAL SECTION    -->

                  <div class="modal fade" id="bg_image" tabindex="-1" role="dialog" 
                       aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="exampleModalLabel">Update Background Image</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                         <form method="post" action="{{url('/updateAcademicBackgroundImage')}}" class="form-horizontal" enctype="multipart/form-data">
                          @csrf
                          <input type="hidden" name="page_id" value="{{$page->id}}">
                          
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









                     
                    <!--Subjects image-->
                    <div class="col-md-12 mt-2">
                        <h4>Subjects Image</h4>
                          <img src="resources/academics/{{$page->image}}" class="rounded mx-auto d-block"
                               height="150" alt="image">

                          <div class="col-md-12">
                            <button type="button" class="btn btn-success modalButton" data-toggle="modal" title="Update Image" data-target="#disp_image">
                               <i class="fa fa-edit" aria-hidden="true" style="font-size:20px"></i>
                            </button>
                          </div>
                    </div>



                  <!--ANTHEM IMAGE MODAL SECTION    -->

                  <div class="modal fade" id="disp_image" tabindex="-1" role="dialog" 
                       aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="exampleModalLabel">Update Subjects Image</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                         <form method="post" action="{{url('/updateSubjectsImage')}}" class="form-horizontal" enctype="multipart/form-data">
                          @csrf
                          <input type="hidden" name="page_id" value="{{$page->id}}">
                          
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
    <!-- /.box-body -->
    <div class="box-footer hidden"></div>
    <!-- /.box-footer-->
</div>
<!-- /.box -->        </div>
    </div>
        </section>
        <!-- /.content -->
@endforeach

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