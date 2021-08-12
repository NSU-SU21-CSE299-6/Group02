@extends('layouts.app')


@section('content')


<!-- Section of skills -->
<div class="section-why-us">
    <div>
        <i class="fas fa-code-branch icon-why-us"></i>            
        <h2>
            Quality Control
        </h2>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        </p>
    </div>

    <div class="middle">
        <h2>
            <img src="img/icon-box.jpg" alt="">
        </h2>
    </div>

    <div>
        <i class="far fa-keyboard icon-why-us"></i>   
        <h2>
            Optional Maintenance
        </h2>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        </p>
    </div>
    
    <div>
        <i class="fab fa-google icon-why-us"></i>            
        <h2>
            Search Engine Friendly
        </h2>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        </p>
    </div>
    
    <div>
        <i class="fas fa-globe icon-why-us"></i>            
        <h2>
            Web Master Tools
        </h2>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        </p>
    </div>
</div>

<!-- 4 grid layout skills on homepage -->
    <!-- Every div is a grid item -->
    <div class="container-grid-4">
        <div>
            <img src="{{ URL('storage/icon-box.jgp') }}" alt="picture">
            <h2>
                Web Design
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur!
            </p>
        </div>

        <div>
            <img src="{{ URL('storage/icon-box.jgp') }}" alt="picture">
            <h2>
                Web Development
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur!
            </p>
        </div>

        <div>
            <img src="{{ URL('storage/icon-box.jgp') }}" alt="picture">
            <h2>
                Product Design
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur!
            </p>
        </div>

        <div>
            <img src="{{ URL('storage/icon-box.jgp') }}" alt="picture">
            <h2>
                Creative Thinker
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur!
            </p>
        </div>
    </div>

    <div class="header-section">
        <h2 class="dark big">Team</h2>
        
        <hr>
    </div>


@endsection