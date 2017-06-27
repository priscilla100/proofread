@extends('master')

@section('content')

    <h2>Upload Files are displayed Here</h2>
    @if(count($errors))
        <ul>
            @foreach($errors->all() as $error)

                <li>{{ $error }}</li>


            @endforeach

        </ul>
    @endif

    <ul class="list-group">
        @foreach($files as $file)
            <li class="list-group-item"><a href="{{url('uploaded')}}/{{$file -> id}}">{{ $file->filename }}
                <button class="fa fa-download pull-right btn-primary">   Download</button></a></li>
        @endforeach

    </ul>

@endsection