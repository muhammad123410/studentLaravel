@extends('layouts.app')

@section('content')
<h3 class="display-4 mb-6">Teacher Informations</h3>
    @if(count($teachers)>0)
        @for($i=0;$i<$count;)
            <div class="row">
                
                @for($j=0;$j<3;$j++,$i++)
                    @if($i<$count)
                    <div class="col-lg-4">
                        <div class="card mb-4" style="width:20rem">
                            <img src="/storage/pics/teacherpic.png" alt="" height="100rem">
                            <div class="card-body">
                            <h3 class="card-title"><a href="/teacher/{{$teachers[$i]->id}}" class="text-dark" style='text-decoration:none'>{{$teachers[$i]->name}}</a></h3>
                            <p class="card-text">The Subject id is {{$teachers[$i]->id}}</p>
                            </div>
                        <div class="card-footer">This Student Got Admission at{{$teachers[$i]->created_at}}</div>
                        </div>
                </div>
                    @endif
                @endfor
            </div>
        @endfor    
        
    @else
        <p class="alert">No Teacher</p>
    @endif

@endsection