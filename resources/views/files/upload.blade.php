@extends('master')

@section('content')

    <h2>Upload Files Here</h2>

                    <form action="/handleUpload" method="post" enctype="multipart/form-data" class="form-group">
                        {{ csrf_field() }}
                        <input type="file" name="file" multiple class="">

                        <div>
                            <input type="submit" class="btn-primary" value="Upload File">

                        </div>
                    </form>

@endsection
