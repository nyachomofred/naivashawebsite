@extends('layouts.admin')

@section('content')



        <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>

    Messages <?php echo "($number)";  ?>
    </h1>

    <ol class="breadcrumb">
        
                            <li class="breadcrumb-item"><a href="{{url('/admin7')}}">Dashboard</a></li>
            
        
                            <li class="breadcrumb-item active">CMS</li>
            
        
                            <li class="breadcrumb-item"><a href="#">Users</a></li>            
            </ol>


</section>    <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                                    </div>
                <div class="col-md-6 text-right" style="padding-bottom: 10px;">
                                <a class="btn btn-info" data-toggle="collapse" href="#PagesDataTable_filtersCollapse"><i class="fa fa-search"></i></a>
                    </div>
            </div>
                <div class="row">
        <div class="col-md-12">
            <!-- Default box -->
<div class="box box-primary">
    <div class="box-header with-border hidden">
        <h3 class="box-title hidden"></h3>

        <div class="box-tools pull-right">
            
        </div>
    </div>
    <div class="box-body">
        <div id="PagesDataTable_filtersCollapse"
                         class="filtersCollapse collapse">
                        <br/>

                        <div class="filters" data-table="PagesDataTable" id="PagesDataTable_filters">
                        <form method="post" action="{{url('/searchMessage')}}">
                         @csrf

                            <div class="row" ><div class="col-md-3"><div class="form-group   "><input class="form-control filter" placeholder="Search" id="title" name="search" type="text"></div></div><div class="col-md-1 p-r-0"><button class="btn btn-primary filterBtn"  type="submit"><i class="fa fa-search"></i></button></div></div>
                         </form>
                        </div>
                    </div>


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


                                <div class="table-responsive m-t-10" style="min-height: 350px;padding-bottom: 20px;">
                    <table  class="table table-hover table-striped table-condensed dataTableBuilder" id="PagesDataTable" style="width:100%;"><thead><tr><th width="150px" >Name</th>
                        <th width="250px">Email</th><th >Message</th><th width="150px">Received At</th><th width="150px">Read</th></tr></thead>


<tbody>

 @foreach ($queries as $query)
 @if(empty($query->status))
<tr>
  <div>  
 <td class="unread name">{{$query->name}}</td> <td class="unread mailTitle">{{$query->email}}</td> <td class="unread mailMessage">{{$query->message}}</td>
 <td class="unread">{{$query->created_at}}</td><td class="unread">

                                             <form method="post" action="{{url('/ReadMessage')}}">
                                                 @csrf
                                              <input type="hidden" name="id" value="{{$query->id}}">
                                              <button class="buttonColor"  style="padding: 2px 8px 0 8px;"  title="Read" type="submit">
                                               <i class="fa fa-envelope-o" style="font-size: 1.2em;"></i></button>
                                               </form>  



</td>
 </div>   
</tr>
@else
<tr>
 <td class="read name">{{$query->name}}</td> <td class="read mailTitle">{{$query->email}}</td> <td class="read mailMessage">{{$query->message}}</td> <td class="read">{{$query->created_at}}</td>
 <td class="read">

                                             <form method="post" action="{{url('/ReadMessage')}}">
                                                 @csrf
                                              <input type="hidden" name="id" value="{{$query->id}}">
                                              <button class="buttonColor1"  style="padding: 2px 8px 0 8px;"  title="Read" type="submit">
                                               <i class="fa fa-envelope-open-o" style="font-size: 1.2em;"></i></button>
                                               </form>  


</td>   
</tr>
@endif
@endforeach





 
</tbody>

                    </table>
              <div style="padding-left:40%;">{!! $queries->render() !!}</div>
                </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer hidden"></div>
    <!-- /.box-footer-->
</div>
</div>
</div>
</section>


                    


@endsection