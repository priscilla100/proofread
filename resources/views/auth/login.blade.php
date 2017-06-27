@extends('guest-master')

@section('content')


    <h3 class="account-body-title">Welcome back to Target Admin.</h3>

    <h5 class="account-body-subtitle">Please sign in to get access.</h5>

                    <form class="form account-form" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="placeholder-hidden form-control">Username</label>
                            <input type="email" class="form-control" name="email" id="login-username" placeholder="Enter Email" value="{{ old('email') }}" required autofocus tabindex="1">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="placeholder-hidden control-label">Password</label>
                            <input type="password" class="form-control" id="login-password" placeholder="Password" name="password" required tabindex="2">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                @endif

                        </div> <!-- /.form-group -->
                        <div class="form-group clearfix">
                            <div class="pull-left">
                                <label class="checkbox-inline">
                                    <input type="checkbox" class="" value="" tabindex="3" name="remember" {{ old('remember') ? 'checked' : '' }}>Remember me
                                </label>
                            </div>

                            <div class="pull-right">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Password?
                                </a>
                            </div>
                        </div> <!-- /.form-group -->

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block btn-lg" tabindex="4">
                                Signin &nbsp; <i class="fa fa-play-circle"></i>
                            </button>
                        </div> <!-- /.form-group -->

@endsection

                    </form>
    @section('account-footer')
    <div class="account-footer">
        <p>
            Don't have an account? &nbsp;
            <a href="/signup" class="">Create an Account!</a>
        </p>
    </div> <!-- /.account-footer -->

@endsection
