@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="col-lg-offset-4 col-lg-4">
                        <h1>Upload A File</h1>
                        <form action="/store" enctype="multipart/form-data" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            {{--{{ csrf_field() }}--}}

                            <input type="file" name="image">
                            <br>

                            <input type="submit" value="Upload">
                        </form>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
