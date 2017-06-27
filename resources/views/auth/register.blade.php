@extends('guest-master')

@section('content')
    <h3 class="account-body-title">Get Started with a Free Account.</h3>

    <h5 class="account-body-subtitle">Sign up in 30 seconds. No credit card required.</h5>

                    <form class="form account-form" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}


                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="placeholder-hidden">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus tabindex="1">

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif

                        </div> <!-- /.form-group -->



                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="placeholder-hidden">E-Mail Address</label>

                                <input id="email" type="email" class="form-control" placeholder="E-mail Address" name="email" value="{{ old('email') }}" required autofocus tabindex="2">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                            <label for="phone_number" class="placeholder-hidden">Phone Number</label>

                                <input id="phone_number" type="text" class="form-control" placeholder="Phone Number" name="phone_number" value="{{ old('phone_number') }}" required autofocus tabindex="3">

                                @if ($errors->has('phone_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-group{{ $errors->has('occupation') ? ' has-error' : '' }}">
                            <label for="occupation" class="placeholder-hidden">Occupation</label>

                                <input id="occupation" type="text" class="form-control" placeholder="Occupation" name="occupation" value="{{ old('occupation') }}" required autofocus tabindex="4">

                                @if ($errors->has('occupation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('occupation') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-group{{ $errors->has('institution') ? ' has-error' : '' }}">
                            <label for="institution" class="placeholder-hidden">Institution</label>

                                <input id="institution" type="text" class="form-control" placeholder="Institution" name="institution" value="{{ old('institution') }}" required autofocus tabindex="5">

                                @if ($errors->has('institution'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('institution') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="placeholder-hidden">Password</label>

                                <input id="password" type="password" class="form-control" placeholder="Password" name="password" required autofocus tabindex="6">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="placeholder-hidden">Confirm Password</label>

                                <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autofocus tabindex="7">

                        </div>


                        <div class="form-group">
                            <label class="checkbox-inline">
                                <input type="checkbox" class="" value="" tabindex="5"> I agree to the <a href="javascript:;" target="_blank">Terms of Service</a> &amp; <a href="javascript:;" target="_blank">Privacy Policy</a>
                            </label>
                        </div> <!-- /.form-group -->

                        <div class="form-group">
                            <button type="submit" class="btn btn-secondary btn-block btn-lg" tabindex="8">
                                Create My Account &nbsp; <i class="fa fa-play-circle"></i>
                            </button>
                        </div> <!-- /.form-group -->

                    </form>


@endsection



@section('account-footer')

    <div class="account-footer">
        <p>
            Already have an account? &nbsp;
            <a href="/login" class="">Login to your Account!</a>
        </p>
    </div> <!-- /.account-footer -->
@endsection