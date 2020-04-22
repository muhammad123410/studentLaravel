@extends('layouts.app')

@section('content')

{!!Form::open(['action'=>['SubjectsController@update',$s->id],'method'=>'post'])!!}
    <div class='form-group'>
        {{Form::label('name',"Subject Name")}}
        {{Form::text('name',$s->name,['class'=>'form-control'])}}
    </div>
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {{Form::hidden('_method','PUT')}}

{!!Form::close()!!}

@endsection