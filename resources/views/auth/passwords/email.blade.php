@extends('master')

@section('content')
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Reset Password</div>--}}
                {{--<div class="panel-body">--}}
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
<h3 class="account-body-title">Password Reset</h3>

<h5 class="account-body-subtitle">We'll email you instructions on how to reset your password.</h5>

                    <form class="form account-form" role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="placeholder-hidden">E-Mail Address</label>

                            <input id="email" type="email" class="form-control" placeholder="E-mail Address" name="email" value="{{ old('email') }}" required autofocus tabindex="1">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif

                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-secondary btn-block btn-lg" tabindex="2">
                                Reset Password &nbsp; <i class="fa fa-refresh"></i>
                            </button>
                        </div> <!-- /.form-group -->

                        <div class="form-group">
                            <a href="/login"><i class="fa fa-angle-double-left"></i> &nbsp;Back to Login</a>
                        </div> <!-- /.form-group -->


                    </form>

@endsection
