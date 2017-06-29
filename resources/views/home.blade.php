@extends('master')

@section('content')
<div class="container">
    {{--<div class="row">--}}
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                {{--<div class="panel-heading">Dashboard</div>--}}

                <div class="panel-body">
                    <h2 class="text-center">Upload Files Here</h2>
                    {{--@if(count($errors))--}}
                        {{--<ul>--}}
                            {{--@foreach($errors->all() as $error)--}}

                                {{--<li>{{ $error }}</li>--}}

                            {{--@endforeach--}}

                        {{--</ul>--}}
                    {{--@endif--}}

                    {{--<ul class="container">--}}
                        {{--@foreach($files as $file)--}}
                            {{--<li class="list-group-item">{{ $file->filename }}<button class="fa fa-download pull-right">   Download</button></li>--}}
                        {{--@endforeach--}}

                    {{--</ul>--}}


                    <form action="/handleUpload" method="post" enctype="multipart/form-data" class="form-group text-center">
                        {{ csrf_field() }}
                        <input type="file" name="file" multiple class="">

                        <div>
                            <input type="submit" class="btn-primary" value="Upload File">


                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>

@endsection

