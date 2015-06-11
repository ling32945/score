@extends('layouts.default')

@section('content')

<div style="clear:both;">

{{-- HTML::ul($errors->all()) --}}

{{ Form::open(array('url' => 'course')) }}

    <div class="form-group">
        {{ Form::label('course_no', 'Course NO.') }}
        {{ Form::text('course_no', Input::old('course_no'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('name', 'Course Name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('description', 'Descrition') }}
        {{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Create the Course!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
</div>
@stop
