@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' =>[ 'StudentsController@update',$s->id ],'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('Name', 'Name')}}
            {{Form::text('Name', $s->Name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        {{-- <div class="form-group">
                {{Form::label('subject',"Select Subject")}}
                <select name="subject" id="">
                        @foreach($Subject as $su)
                <option value="{{$su->id}}">{{$su->name}}</option>
                        @endforeach
                </select>
            </div>
        <div class="form-group">
                {{Form::label('Marks', 'Marks')}}
                {{Form::text('Marks', $s->Marks, ['class' => 'form-control', 'placeholder' => 'Marks'])}}
        </div> --}}
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection