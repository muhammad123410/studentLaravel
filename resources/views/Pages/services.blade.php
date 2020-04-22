@extends('layouts.app')

@section('content')
    <h1>The City School</h1>
    @if(count($service)>0)
        <ol class='list-group'>
            @foreach($service as $services)
                <li class="list-group-item">{{ $services }}</li>
            @endforeach
        </ol>
    @endif
    
@endsection