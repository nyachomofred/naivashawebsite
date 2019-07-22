@extends('layouts.app')
@section('content')
@foreach($pages as $page)

<div class="myAllignment">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.4887703851537!2d36.43961621425436!3d-0.7364184994627596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182922b201a8d505%3A0x4b0f735800db1ede!2sNaivasha+Girls+Secondary+School!5e0!3m2!1sen!2ske!4v1561195667822!5m2!1sen!2ske" width="100%" height="380" frameborder="0" style="border:0;" allowfullscreen></iframe>

</div>

<div class="main main-raised">
    <div class="container">
        <div class="profile-content">
            <div class="row">
                <div class="col-md-12 ml-auto mr-auto">
                    <div class="follow" style="position: absolute; top: -25px; right: 0;">
                     @include('includes.social') 
                    </div>
                </div>
            </div>
        </div>
        

        <div class="contact-content mb-5">
            <div class="container" style="max-width: 970px;">
                <h2 class="title">Send us a message</h2>
                <div class="row">
                    <div class="col-md-6">
                       @if(session('response'))
                         <div class="alert alert-success text-center">
                             {{session('response')}}
                         </div>
                         @else
                        <div class="description">We value your feedback. Get in touch with us using the below contacts or filling the form:
                        </div>
                        @endif

                        <form id="contact-form" action="{{url('/sendMessage')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="bmd-label-floating">Your name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmails" class="bmd-label-floating">Email address</label>
                                <input type="email" class="form-control" name="email">
                                <span class="bmd-help">We'll never share your email with anyone else.</span>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="bmd-label-floating">Phone</label>
                                <input type="text" class="form-control" name="phone">
                            </div>
                            <div class="form-group label-floating">
                                <label class="form-control-label bmd-label-floating" for="message"> Your message</label>
                                <textarea class="form-control" rows="6" name="message"></textarea>
                            </div>
                            <div class="submit text-center">
                                <input type="submit" class="btn btn-primary btn-raised btn-round" value="Contact Us">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <div class="info info-horizontal">
                            <div class="icon icon-primary">
                                <i class="material-icons">pin_drop</i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Find us at the office</h4>
                                <p> Naivasha
                                </p>
                            </div>
                        </div>
                        <div class="info info-horizontal">
                            <div class="icon icon-primary">
                                <i class="material-icons">phone</i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Give us a ring</h4>
                                <p> Office
                                    @foreach($users as $user)
                                    @if($user->key=="phone")   
                                            <br>{{$user->data}}
                                    @endif
                                    @endforeach 
                                    <br> Mon - Fri, 8:00-22:00
                                </p>
                            </div>
                        </div>
                        <div class="info info-horizontal">
                            <div class="icon icon-primary">
                                <i class="material-icons">business_center</i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Legal Information</h4>
                                <p> Naivasha Girls Secondary School.
                                    @foreach($users as $user)
                                    @if($user->key=="email")   
                                    <br> Email &#xB7; {{$user->data}}
                                    @endif
                                    @endforeach 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main main-raised mt-5 mb-5 pb-5">
    <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
            <h2 class="title">Our Partner Universities</h2>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            @foreach($partners as $partner)
            <div class="col-md-4 mr-auto ml-auto">
                <div class="card card-raised card-background" style="background-image: url('resources/partners/{{$partner->image}}');">
                    <div class="card-body">
                        <h3 class="card-title">{{$partner->name}}</h3>
                        <p class="card-description">{{$partner->descritpion}}</p>
                        <p class="card-description">Phone:{{$partner->phone}}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>


@endforeach
@endsection