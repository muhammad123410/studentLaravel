@extends('layouts.app')

@section('content')
        <h3 class="display-4 mb-6">Student Informations</h3>
    @if(count($student)>0)
        @for($i=0;$i<$count;)
            <div class="row">
                @for($j=0;$j<3;$j++,$i++)
                    @if($i<$count)
                    <div class="col-lg-4">
                        <div class="card mb-4" style="width:20rem height:100rem">
                            <img src="/storage/pics/studentpic.png" alt="" height="100rem">
                            <div class="card-body">
                            <h3 class="card-title"><a href="/Students/{{$student[$i]->id}}" class="text-dark" style='text-decoration:none'>{{$student[$i]->Name}}</a></h3>
                            <p class="card-text">The Student id is {{$student[$i]->id}}</p>
                            </div>
                        <div class="card-footer">This Student Got Admission at{{$student[$i]->created_at}}</div>
                        </div>
                </div>
                    @endif
                @endfor
            </div>
        @endfor    
        
    @else
        <p class="alert">No Students</p>
    @endif

@endsection



{{-- <div class="card mb-4" style="width:18rem">
    <img src="/storage/pics/studentpic.png" height="100rem" alt="" srcset="" class="card-img-header">
    <div class="card-body ">
        <h3 class="card-title"><a href="/Students/{{$student[$i]->id}}" class="text-dark" style='text-decoration:none'>{{$student[$i]->name}}</a> </h3>
    <p class="card-text">This Teacher id is {{$student[$i]->id}}</p>
    </div>
    
   
    {{-- <div>
        This Student is studying {{$s->subject->name} }
    </div> --}}
    {{-- <div class="card-footer">This Student got admission at {{$student[$i]->created_at}}</div>
    
</div> --}}