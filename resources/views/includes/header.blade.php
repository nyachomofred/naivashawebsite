@foreach($pages as $page)
@if($page->name=="contact")
<nav class="navbar fixed-top navbar-expand-lg bg-dark" color-on-scroll="100" id="sectionsNav">
@else 
<nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
@endif
@endforeach
    <div class="container">
        <div class="navbar-translate">

    @foreach($users as $user)
    @if($user->key=="logo")  
    <a href="{{url('/')}}"><img src="http://localhost/naivasha/public/resources/settings/{{$user->data}}" width="50"></a>
    @endif
    @endforeach


            <a class="navbar-brand" href="{{url('/')}}">Naivasha Girls Secondary</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">

              @foreach($users as $user)
              @if(($user->type=="menu")&&(empty($user->key1)))  
                <li class="dropdown nav-item">
                    <a href='{{url("$user->data")}}' class="nav-link">{{$user->name}}</a>
                </li>
              @elseif(($user->type=="menu")&&($user->key1=="1"))  


            <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    {{$user->name}}
                </a>
                <div class="dropdown-menu dropdown-with-icons">
              <?php $value=$user->key ?>   
              @foreach($users as $user)
              @if(($user->type=="sub")&&($user->subtarget==$value))
                <a href='{{url("$user->data")}}' class="dropdown-item">
                    <i class="material-icons">layers</i>
                     {{$user->name}}
                </a>         
              @endif  
              @endforeach 
            </div>
            </li>
              @endif
              @endforeach  
            </ul>
        </div>
    </div>
</nav>