@extends('layouts.masterlayout')
@section('content')
<div id="transportSlider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1000">
    <div class="carousel-inner carousel-main-div">
        <div class="carousel-item slider-main active">
            <img src="https://images.unsplash.com/photo-1695654394164-a79dea1c9ecf?q=80&w=1744&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="Transport">
            <div class="carousel-caption hero-title-text d-none d-md-block">
                <h5>TRANSPORT AND LOGISTICS</h5>
                <p>Quis hendrerit dolor magna eget est lorem. Amet facilisis magna etiam tempor orci.</p>
            </div>
        </div>
        <div class="carousel-item slider-main">
            <img src="https://images.unsplash.com/photo-1695653422853-3d8f373fb434?q=80&w=1674&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="Transport">
            <div class="carousel-caption hero-title-text d-none d-md-block">
                <h5>On Top of the World</h5>
                <p>Tellus integer feugiat scelerisque varius morbi enim nunc faucibus.</p>
            </div>
        </div>
        <div class="carousel-item slider-main">
            <img src="https://images.unsplash.com/photo-1695653421421-28f3816b424a?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="Transport">
            <div class="carousel-caption hero-title-text d-none d-md-block">
                <h5>Move your cargo across all modes</h5>
                <p>Tellus integer feugiat scelerisque varius morbi enim nunc faucibus.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev d-none" href="#transportSlider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next d-none" href="#transportSlider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


 

@endsection