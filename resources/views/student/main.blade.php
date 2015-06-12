@extends('layouts.default')

@section('content')
<div style="clear:both;">
    <div class="page-header">
        <h1>Student Scores</h1>
    <div>
<table class="table table-striped table-bordered table-condensed">
    <tr>
        <th>#</th>
        <th>Student NO.</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Grade</th>
        <th>Class</th>
        <th>Active</th>
        <th>Total Score</th>
    </tr>
    @foreach($students as $student)
        <tr>
            <td>{{$student->ID}}</td>
            <td>{{$student->SID}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->mobile}}</td>
            <td>{{$student->grade}}</td>
            <td>{{$student->class}}</td>
            <td>
                @if($student->status)
                    Yes
                @else
                    NO
                @endif
            </td>
            <td>{{$student->total_score}}</td>
        </tr>
    @endforeach
</table>
</div>
@stop
