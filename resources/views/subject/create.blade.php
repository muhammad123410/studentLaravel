@extends('layouts.app')

@section('content')

{!!Form::open(['action'=>'SubjectsController@store','method'=>'post'])!!}
    <div class='form-group'>
        {{Form::label('name',"Subject Name")}}
        {{Form::text('name','',['class'=>'form-control'])}}
    </div>
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}

{!!Form::close()!!}

@endsection