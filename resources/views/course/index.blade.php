@extends('layouts.default')

@section('content')
<div style="clear:both;">
    <div class="page-header">
        <h1>List all courses</h1>
    <div>
    <div>
        <a href="{{ url('/course/create') }}" >Add Course</a>
    </div>
<table class="table table-striped table-bordered table-condensed">
    <tr>
        <th>#</th>
        <th>Course NO.</th>
        <th>Name</th>
        <th>Description</th>
    </tr>
    @foreach($courses as $course)
        <tr>
            <td>{{$course['id']}}</td>
            <td>{{$course['course_no']}}</td>
            <td>{{$course['name']}}</td>
            <td>{{$course['description']}}</td>
        </tr>
    @endforeach
</table>
</div>
@stop
