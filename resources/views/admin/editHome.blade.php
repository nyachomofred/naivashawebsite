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
         <form method="post" action="{{url('/updateHome')}}">
          @csrf                          
                <div class="row">
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

                <br/>
                <div class="row">

                    <div class="col-md-6">
                    <div class="form-group">
                       <label for="mission_statement">Mission Statement</label><textarea class="form-control" id="mission_statement"  name="mission_statement" rows="5">{{$page->mission_statement}}

                        </textarea>
                    </div>
                    </div>


                    <div class="col-md-6">
                    <div class="form-group">
                       <label for="motto">Motto</label><textarea class="form-control" id="motto"  name="motto" rows="5">{{$page->motto}}

                        </textarea>
                    </div>
                    </div>


                    <div class="col-md-6">
                    <div class="form-group">
                       <label for="vission">Vision</label><textarea class="form-control" id="vission"  name="vission" rows="5">{{$page->vission}}

                        </textarea>
                    </div>
                    </div>


                    <div class="col-md-6">
                    <div class="form-group">
                       <label for="stem_vision">Stem Vision</label><textarea class="form-control" id="stem_vision"  name="stem_vision" rows="5">{{$page->stem_vision}}

                        </textarea>
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                       <label for="bg_text">Background Text</label><textarea class="form-control" id="bg_text"  name="bg_text" rows="5">{{$page->bg_text}}

                        </textarea>
                    </div>
                    </div>


                    <div class="col-md-6">
                    <div class="form-group">
                       <label for="school_values">Values</label><textarea class="form-control" id="school_values"  name="school_values" rows="5">{{$page->school_values}}

                        </textarea>
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                       <label for="general_statement">General Statement</label><textarea class="form-control" id="general_statement"  name="general_statement" rows="5">{{$page->motto}}

                        </textarea>
                    </div>
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
    <!-- /.box-body -->
    <div class="box-footer hidden"></div>
    <!-- /.box-footer-->
</div>
<!-- /.box -->        </div>
    </div>
        </section>
        <!-- /.content -->
@endforeach



@endsection