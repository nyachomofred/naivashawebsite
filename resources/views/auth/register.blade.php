@extends('layouts.user')

@section('content')


            <h4 class="login-box-msg">Register a new account</h4>
           <br/>

    <form method="POST" action="{{ route('register') }}" >
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group has-feedback ">
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="First Name" />

                     @if ($errors->has('name'))
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                      @endif
                                    </div>
            </div>
            <div class="col-md-6">
                <div class="form-group has-feedback ">
                    <input  id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Email" />
                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif

                                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group has-feedback ">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password" />

                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                                    </div>
            </div>
            <div class="col-md-6">
                <div class="form-group has-feedback ">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Retype Password" />

                                    </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-md-offset-3 offset-md-3 my-3">
                <button type="submit"
                        class="btn bg-olive btn-block">Register</button>
            </div>
        </div>
    </form>
    <br/>
    <div class="row">
        <div class="col-md-6 col-md-offset-3 offset-md-3 my-3 text-center">
            <a class="" href="{{ route('login') }}">Already have an account</a><br/><br/>
        </div>
    </div>
    </div>
    <!-- /.login-box-body -->
</div>






@endsection