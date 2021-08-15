@extends('layouts.app')


@section('content')

     <!--About -->

     <div class="header-section">
        <h2 class="dark big">About</h2>

        <hr>
    </div>

     <div class="container-grid-2">
        <div>
            <img class="img-team" src="{{ URL('storage/1.png') }}" alt="picture">
        </div>
        <div>
            <h2>
                House Rental Management System
            </h2>

            <h3 class="orange-txt">
                Introduction
            </h3>

            <p>
                “House Rental Management System” is a web based application. This application stores the information of
                    tenants, rent information of every month. Admin and user both can use this application. Everyone can search,
                    store and get information by having a Unique ID. Each ID / Person / User / Admin will have their own profile
                    with sign in ID so that the information can be secured. Today we are living in the first world where everyone
                    uses a device. Everyone uses a software or application to store data and receive information. The world is
                    surrounded by software and applications.
            </p>
            
            <div class="btn-wrapper">
                <a href="feature">Features</a>
            </div>
        </div>
    </div>
   
@endsection