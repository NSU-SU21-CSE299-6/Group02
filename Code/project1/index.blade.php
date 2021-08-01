
@extends('layouts.app')

    @section('content')
    <body>
        <div class="jumbotron text-center">
            <h1>{{$title}}</h1>
            <p>This is an Application where user can keep track on their house rents</p>
            <p><a class="btn btn-primary btn-lg" href="\login" role="button">Login</a> <a class="btn btn-success btn-lg" href="\register" role="button">Register</a></p>
        </div>    
    </body>    
    @endsection
      