@extends('layouts.app')

@section('content')
    <h3>{{$subjects->name}}</h3>
         @if(count($subjects->teachers)>0)
                <table class='table table-striped'>
                    <thead>
                        <tr>
                            <td>Teachers</td>
                            <td></td>
                        </tr>
                    </thead>
                     @foreach($subjects->teachers as $teacher)
                        <tr><td>{{$teacher->name}}</td>
                        <td>
                            {!!Form::open(['action'=>'Student_Subject_TeacherController@store','method'=>'post'])!!}
                                <input type="hidden" name="s_id" value={{$subjects->id}}>
                                <input type="hidden" name="teacher_id" value={{$teacher->id}}>
                                <input type="hidden" name="student_id" value={{$id}}>
                            {{Form::submit('Register',['class'=>'btn btn-info'])}}
                            {!!Form::close()!!}    
                        </td>
                    </tr>
                    @endforeach
                    </table>
           @else
                <p class="alert alert-info">No Subjects</p>
         @endif
         <a href="/Students/{{$id}}" class="btn btn-primary">Go Back</a>
    
@endsection