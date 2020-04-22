@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row justify-content-center">
                        <a href="/home" class="btn btn-primary">Dashboard</a> &nbsp;
                        <a href="/Students" class="btn btn-primary">Student </a> &nbsp;
                        <a href="/subject" class="btn btn-primary">Subjects </a> &nbsp;
                        <a href="/Students/create" class="btn btn-primary">Create Student </a> &nbsp;
                        <a href="/subject/create" class="btn btn-primary">Create Subject </a> &nbsp;
                        <a href="/teacher/create" class="btn btn-primary">Create teacher </a> &nbsp;
                    </div>
                    
                  
                </div>
            </div>
            <div class="card-footer">You are logged in!</div> 
        </div>
    </div>
</div>
@endsection
