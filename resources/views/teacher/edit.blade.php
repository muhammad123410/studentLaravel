@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' =>[ 'TeachersController@update',$s->id ],'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('Name', 'Name')}}
            {{Form::text('Name', $s->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        {{-- <div class="form-group">
            {{Form::label('Subject', 'Subject')}}
            {{Form::text('Subject', $s->subject, ['class' => 'form-control', 'placeholder' => 'Subject'])}}
        </div> --}}
       
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection