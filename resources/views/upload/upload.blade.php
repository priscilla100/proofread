
@extends('homepage')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <div class="col-lg-offset-4 col-lg-4">
                            <h1>Upload A File</h1>
                            <form action="/add" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="file" name="filefield" multiple>
                                <input type="submit">
                            </form>

                            <h1> Pictures list</h1>

                            <div class="row">

                                {{--<ul>--}}
                                    {{--@foreach($uploads as $upload)--}}
                                        {{--<li>{{$uplaod->doc_name}}</li>--}}
                                    {{--@endforeach--}}
                                {{--</ul>--}}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
