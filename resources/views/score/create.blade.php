@extends('layouts.default')

@section('content')

<div style="clear:both;">
    <div class="page-header">
        <h1>Score Input</h1>
    <div>

{!! Html::ul($errors->all()) !!}
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

{!! Form::open(array('url' => 'score')) !!}

    <div class="form-group">
        {!! Form::label('SID', 'Student NO.') !!}
        {!! Form::text('SID', Input::old('SID'), array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('name', 'Course Name') !!}
        {!! Form::select('course_no', $courses, Input::old('course_no'), array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('score', 'Score') !!}
        {!! Form::text('score', Input::old('score'), array('class' => 'form-control')) !!}
    </div>

    {!! Form::submit('Input Score!', array('class' => 'btn btn-primary')) !!}

{!! Form::close() !!}
</div>
@stop
