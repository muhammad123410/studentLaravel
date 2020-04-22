@extends('layouts.app')

@section('content')
    <div class="m-3">
        <h3 class="display-4">Subject Informations</h3>
    </div>
    @if(count($subjects)>0)
        @for($i=0;$i<$count;)
            <div class="row">
                
                @for($j=0;$j<3;$j++,$i++)
                    @if($i<$count)
                    <div class="col-lg-4">
                        <div class="card mb-4" style="width:20rem height:100rem">
                            <img src="/storage/pics/subjectpic.png" alt="" height="100rem">
                            <div class="card-body">
                            <h3 class="card-title"><a href="/subject/{{$subjects[$i]->id}}" class="text-dark" style='text-decoration:none'>{{$subjects[$i]->name}}</a></h3>
                            <p class="card-text">The Subject id is {{$subjects[$i]->id}}</p>
                            </div>
                        <div class="card-footer">This Student Got Admission at{{$subjects[$i]->created_at}}</div>
                        </div>
                </div>
                    @endif
                @endfor
            </div>
        @endfor    
        
    @else
        <p class="alert">No Subject</p>
    @endif

@endsection