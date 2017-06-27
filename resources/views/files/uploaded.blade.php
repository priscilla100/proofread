@extends('master')

@section('content')

    <h2>Uploaded Files are displayed Here</h2>
    @if(count($errors))
        <ul>
            @foreach($errors->all() as $error)

                <li>{{ $error }}</li>


            @endforeach

        </ul>
    @endif

    <table class="table table-hover">
        <thead>
        <tr>
            <th>File Name</th>
            <th>Name</th>

            <th></th>

        </tr>
        </thead>
        <tbody>
        @foreach($files as $file)
        <tr>
            <td>{{ $file->filename }}</td>
            <td>{{ $file->user()->first()->name }}</td>
            <td><a href="{{url('uploaded')}}/{{$file -> id}}"><button class="fa fa-download pull-right btn-secondary">   Download</button></a></td>

        </tr>
        @endforeach
        </tbody>
    </table>





    {{ $files->links() }}



@endsection