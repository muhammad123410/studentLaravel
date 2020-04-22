@extends('layouts.app')

@section('content')
    <h1>Create Teacher</h1>
    {!! Form::open(['action' => 'TeachersController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('Name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        
            {{-- <div class="form-group">
                    {{Form::label('subject',"Select Subject")}}
                    <select name="subject" id="">
                            @foreach($Subject as $su)
                    <option value="{{$su->name}}">{{$su->name}}</option>
                            @endforeach
                    </select>
                </div> --}}
         {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection