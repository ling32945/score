@extends('layouts.default')

@section('content')
<div style="clear:both;">
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
            <td>{{$student['id']}}</td>
            <td>{{$student['SID']}}</td>
            <td>{{$student['name']}}</td>
            <td>{{$student['email']}}</td>
            <td>{{$student['mobile']}}</td>
            <td>{{$student['grade']}}</td>
            <td>{{$student['class']}}</td>
            <td>
                @if($student['status'])
                    Yes
                @else
                    NO
                @endif
            </td>
            <td></td>
        </tr>
    @endforeach
</table>
</div>
@stop
