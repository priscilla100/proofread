@extends('master')

@section('content')

    <div class="row">

        {{--<div class="col-md-3 col-sm-4">--}}

            {{--<ul id="myTab" class="nav nav-pills nav-stacked">--}}
                {{--<li class="active">--}}
                    {{--<a href="#profile-tab" data-toggle="tab">--}}
                        {{--<i class="fa fa-user"></i>--}}
                        {{--&nbsp;&nbsp;Profile Settings--}}
                    {{--</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div>--}}

    <div class="col-md-9 col-sm-8">

        <div class="tab-content stacked-content">

            <div class="tab-pane fade in active" id="profile-tab">

                {{--<h2 class="">Edit Profile Settings</h2>--}}
                <h2>{{ $user->name }}'s Profile</h2>
                <p>Your profile Information can be edited here.</p>

                <hr />

                <br />
                <div class="col-md-10 col-md-offset-1">

                    {{--<img src="avatar/{{ $user->profile_picture }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">--}}
                <form enctype="multipart/form-data" action="/profile" method="POST" class="form-horizontal">

                    {{ csrf_field() }}

                    <div class="form-group">

                        <label class="col-md-3">Profile Picture</label>

                        <div class="col-md-7">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 180px; height: 180px;"><img src="avatar/{{ $user->profile_picture }}" alt="Profile Avatar" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 200px; line-height: 20px; "></div>
                                <div>
                                    <span class="btn btn-default btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name="profile_picture" /></span>
                                    <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div> <!-- /.col -->

                    </div> <!-- /.form-group -->


                    {{--<div class="form-group">--}}

                        {{--<label class="col-md-3">Update Profile Picture</label>--}}
                        {{--<div class="col-md-7">--}}

                            {{--<input type="file" name="profile_picture">--}}
                        {{--</div>--}}


                    {{--</div> <!-- /.form-group -->--}}

                    <div class="form-group">

                        <label class="col-md-3">Name</label>

                        <div class="col-md-7">
                            <input type="text" name="user-name" class="form-control" value="{{ $user->name }}"  />
                        </div> <!-- /.col -->

                    </div> <!-- /.form-group -->

                    <div class="form-group">

                        <label class="col-md-3">Email</label>

                        <div class="col-md-7">
                            <input type="email" name="email" value="{{ $user->email }}" class="form-control" />
                        </div> <!-- /.col -->

                    </div> <!-- /.form-group -->

                    <div class="form-group">

                        <label class="col-md-3">Phone Number</label>

                        <div class="col-md-7">
                            <input type="text" name="phone_number" value="{{ $user->phone_number }}" class="form-control" />
                        </div> <!-- /.col -->

                    </div> <!-- /.form-group -->

                    <div class="form-group">

                        <label class="col-md-3">Website</label>

                        <div class="col-md-7">
                            <input type="text" name="website" placeholder="wwww.example.com" class="form-control" value="{{ $user->website }}" />
                        </div> <!-- /.col -->
{{--value="{{ $user->website }}"--}}
                    </div> <!-- /.form-group -->

                    <div class="form-group">

                        <label class="col-md-3">Occupation</label>

                        <div class="col-md-7">
                            <input type="text" name="occupation" value="{{ $user->occupation }}" class="form-control" />
                        </div> <!-- /.col -->

                    </div> <!-- /.form-group -->

                    <div class="form-group">

                        <label class="col-md-3">Institution</label>

                        <div class="col-md-7">
                            <input type="text" name="institution" value="{{ $user->institution }}" class="form-control" />
                        </div> <!-- /.col -->

                    </div> <!-- /.form-group -->

                    {{--<div class="form-group">--}}

                        {{--<label class="col-md-3">Username</label>--}}

                        {{--<div class="col-md-7">--}}
                            {{--<textarea id="about-textarea" name="about-you" rows="6" class="form-control">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</textarea>--}}
                        {{--</div> <!-- /.col -->--}}

                    {{--</div> <!-- /.form-group -->--}}

                    <br />

                    <div class="form-group">

                        <div class="col-md-7 col-md-push-3">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                            &nbsp;
                            <button type="reset" class="btn btn-default">Cancel</button>
                        </div> <!-- /.col -->

                    </div> <!-- /.form-group -->

                </form>


            </div> <!-- /.tab-pane -->
        </div>
    </div>
    </div>


</div>

@endsection