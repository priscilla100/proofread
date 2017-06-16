@extends('master')

@section('content')

<h1>Hello World</h1>


    <div class="title m-b-md">
        High-Quality English Proofreading & Editing Services for All Academic & Scientific Papers
    </div>

    <div class="">
        <p>Due to the specific HTML and CSS used to justify buttons
        <p>(namely display: table-cell), the borders between them are doubled.
        <p>In regular button groups, margin-left: -1px is used
        <p>to stack the borders instead of removing them. However, margin doesn't work
        <p>with display: table-cell. As a result, depending on your customizations
        <p>to Bootstrap, you may wish to remove or re-color the borders.</p>
    </div>

<hr>
<form action="{{ URL::to('upload') }}" method="post" enctype="multipart/form-data" >
    <div class="title m-b-md">
        Upload File Here
    </div>

    {{ csrf_field() }}
    <input type="file" name="file" id="file" >
    <input type="submit" value="Upload Document" name="submit">
</form>



@stop

@section('footer')


@stop