@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard
                <li><a href="/home">Home</a></li>
                 <li><a href="/instructors">Instructors</a></li>
                 <li><a href="/instructor/{id}">Instructor</a></li>
                <li><a href="/locations">Locations</a></li>
                <li><a href="/sessions">sessions</a></li>
                <li><a href="/session/{id}">sessions</a></li>
                <li><a href="/session">add session</a></li>
                <li><a href="/users">Users</a></li>
                <li><a href="/user/{id}">user</a></li>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
