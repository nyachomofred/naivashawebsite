<footer class="footer footer-black footer-big myAllignment">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-md-4">
                    @foreach($users as $user)
                    @if($user->key=="footer-image") 
                    <img src="resources/settings/{{$user->data}}" width="300" class="img rounded" alt="">
                    @endif
                    @endforeach 
                    <div class="social-feed">
                        <div class="feed-line">
                            <p></p>
                        </div>
                        <div class="feed-line">
                    @foreach($users as $user)
                    @if($user->key=="postal")   
                            <p>{{$user->data}}</p>
                    @endif
                    @endforeach 
                        </div>
                        <div class="feed-line">
                    @foreach($users as $user)
                    @if($user->key=="location")
                            <p>{{$user->data}}</p>
                    @endif
                    @endforeach
                        </div>
                        <div class="feed-line">
                            <p>Kenya</p>
                        </div>
                    </div>
                </div>
                @if($events>0)
                <div class="col-md-4">
                <h5>Upcoming Events</h5>
                <a href="{{url('/events')}}">View Events</a>
                </div>           

                @else
                <div class="col-md-4">
                    <h5>Upcoming Events</h5>
                    <p>No events yet!</p>
                    <p>We are yet to update our calendar of events for this year.</p>
                    <p>Check again later or contact us on
                    @foreach($users as $user)
                    @if($user->key=="phone")  
                     '{{$user->data}}'
                    @endif
                    @endforeach
                   </p>
                </div>
               @endif

                <div class="col-md-4">
                    <h5>Opening Hours</h5>
                    <h5>Mon - Fri: <small>8am - 5pm</small></h5>
                    <h5>Sat - Sun: <small>Closed</small></h5>
                    <h5>Public Holidays: <small>Closed</small></h5>
                </div>
            </div>
        </div>
        <hr>
    </div>
</footer>



<footer class="footer ">
    <div class="container">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="{{url('/')}}">
                        Naivasha Girls
                    </a>
                </li>
                <li>
                    <a href="{{url('/contact')}}">
                        Contact Us
                    </a>
                </li>
                <li>
                    <a href="{{url('/galary')}}">
                        Gallery
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright pull-right">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>, made by
            <a href="https://www.zalegoinstitute.ac.ke" target="_blank">Zalego</a>.
        </div>
    </div>
</footer>