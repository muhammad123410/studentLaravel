@extends('layouts.app')

@section('content')
         @if(count($subjects)>0)
                <table class='table table-striped'>
                    <thead>
                        <tr>
                            <td>Subject</td>
                            <td></td>
                        </tr>
                    </thead>
                     @foreach($subjects as $subject)
                        <tr><td>{{$subject->name}}</td>
                        <td>
                            {!!Form::open(['action'=>'Subject_TeacherController@store','method'=>'post'])!!}
                                <input type="hidden" name="s_id" value={{$subject->id}}>
                                <input type="hidden" name="teacher_id" value={{$id}}>
                            {{Form::submit('Register',['class'=>'btn btn-info'])}}
                            {!!Form::close()!!}    
                        </td>
                    </tr>
                    @endforeach
                    </table>
           @else
                <p class="alert alert-info">No Subjects</p>
         @endif
         <a href="/teacher/{{$id}}" class="btn btn-primary float-right">Go Back</a>
    
@endsection