@extends('layouts.app')

@section('content')
    <h1>Create Student</h1>
    {!! Form::open(['action' => 'StudentsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('Name', 'Name')}}
            {{Form::text('Name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        {{-- <div class="form-group">
            {{Form::label('subject',"Select Subject")}}
            <select name="subject" id="">
                    @foreach($Subject as $su)
            <option value="{{$su->id}}">{{$su->name}}</option>
                    @endforeach
            </select>
        </div> --}}
        {{-- <div class="form-group">
                {{Form::label('Marks', 'Marks')}}
                {{Form::text('Marks', '', ['class' => 'form-control', 'placeholder' => 'Marks'])}}
        </div> --}}
        
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection