@extends('layouts.app')

@section('content')
         @if(count($subjects)>0)
                <table class='table table-striped bg-white'>
                    <thead>
                        <tr>
                            <td>Subject</td>
                            <td></td>
                        </tr>
                    </thead>
                     @foreach($subjects as $subject)
                        <tr><td>{{$subject->name}}</td>
                        <td>
                            {!!Form::open(['action'=>'Student_SubjectController@store','method'=>'post'])!!}
                                <input type="hidden" name="s_id" value={{$subject->id}}>
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