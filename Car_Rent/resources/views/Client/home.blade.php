@extends('master.Homepage')

@section('title')
    Home
@endsection

@section('content')
    <section>
      {{-- <div class="blockquote-wrapper position-absolute">
        <div class="blockquote">
          <h1 class="text-light">
            Experience the Thrill of the Road with Our Rentals
           </h1>
           <a href="#" class="btn btn-warning book position-absolute">Book Now</a>
          </div>
      </div>  --}}
      <div class="slide">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="1800">
              <img src="images/1.jpg" class="d-block w-100 h-50">
            </div>
            <div class="carousel-item" data-bs-interval="1800">
              <img src="images/3.jpg" class="d-block w-100 h-50">
            </div>
            <div class="carousel-item" data-bs-interval="">
              <img src="images/bg.jpg" class="d-block w-100 h-50">
            </div>
          </div>
        </div>
      </div>
    </div>

    </section>
    <section class="h-100">
      <h1>New Section here</h1>
    </section>
@endsection

