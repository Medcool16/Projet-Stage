@extends('master.Homepage')

@section('title')
    Home
@endsection

@section('content')
    <section>
        <div class="container">
           {{-- <div class="blockquote-wrapper position-absolute">
        <div class="blockquote">
          <h1 class="text-light">
            Experience the Thrill of the Road with Our Rentals
           </h1>
           <a href="#" class="btn btn-warning book position-absolute">Book Now</a>
          </div>
      </div>  --}}
      <div class="slide mt-4">
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
        </div>
    </section>
    <section>
      <div class="container sec2">
        <hr>
        <div class="title my-4">
          <h3 class="text-center">Services</h3>
        </div>
        <div class="row">

          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <div class="">
                    <img src="/images/services/customer.png" class="img-fluid">
                </div>
                <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            </div>

          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <div class="">
                    <img src="/images/services/roadside2.png" class="img-fluid">
                </div>
                <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            </div>

          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <div class="">
                    <img src="/images/services/booking.png" class="img-fluid">
                </div>
                <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            </div>

          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <div class="">
                    <img src="/images/services/inserunce.png" class="img-fluid">
                </div>
                <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            </div>


        </div>
      </div>
    </section>
@endsection

