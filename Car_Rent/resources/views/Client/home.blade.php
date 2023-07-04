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
        <div class="title my-4 mb-5">
          <h3 class="text-center text-secondary text-uppercase">--------- &nbsp; OUR CAR RENTAL SERVICES &nbsp; ---------</h3>
        </div>
        <div class="row">

          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <div class="card-title">
                  <h5 class="text-center">Customer Support</h5>
                </div>
                <div class="service-logo d-flex justify-content-center d-flex justify-content-center">
                    <img src="/images/services/customer.png" class="img-fluid">
                </div>
                <p class="card-text text-center">We provide reliable customer support via phone, email, or live chat to assist with inquiries, modifications, or cancellations.</p>
              </div>
            </div>
            </div>

          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <div class="card-title">
                  <h5 class="text-center">Roadside insurance</h5>
                </div>
                <div class="service-logo d-flex justify-content-center">
                    <img src="/images/services/roadside.png" class="img-fluid">
                </div>
                <p class="card-text text-center">we provide 24/7 roadside assistance services, including vehicle breakdown support, tire change, fuel delivery, and lockout assistance.</p>
              </div>
            </div>
            </div>

          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <div class="card-title">
                  <h5 class="text-center">Online Booking</h5>
                </div>
                <div class="service-logo d-flex justify-content-center">
                    <img src="/images/services/booking.png" class="img-fluid">
                </div>
                <p class="card-text text-center">We allow customers to browse available vehicles, compare prices, and make reservations conveniently through the website</p>
              </div>
            </div>
            </div>

          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <div class="card-title">
                  <h5 class="text-center">Insurance Coverage</h5>
                </div>
                <div class="service-logo d-flex justify-content-center">
                    <img src="/images/services/insurance.png" class="img-fluid">
                </div>
                <p class="card-text text-center">We offer various insurance options to protect customers against accidents, damage, theft, or other unforeseen events.</p>
              </div>
            </div>
            </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container sec3">
        <hr>
        <div class="title my-4 mb-5">
          <h3 class="text-center text-secondary text-uppercase">--------- &nbsp; Special Offers and Discounts &nbsp; ---------</h3>
        </div>

        @foreach ($data as $i)
        <div class="row d-flex justify-content-center">
          <div class="col-md-6">
            <img src="{{ $i->image }}" class="rounded float-start">
          </div>
          <div class="col-md-6">
            @foreach ($mark as $k)
              @if ($i->id_marque === $k->id)
                  <h4>{{ $k->mark_name }}</h4>
              @endif
            @endforeach
          </div>
        </div>
        @endforeach


      </div>
    </section>

    <section class="sec4">

    </section>

    <footer class="sec5">
      <div class="footer">
        <h2 class="text-light text-center">Footer</h2>
      </div>
    </footer>
@endsection

