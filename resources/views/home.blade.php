@extends('layouts.app')
@section('content')
@include('include.navbar')
  <header id="welcome">
    <div class="container">

    </div>
  </header>

  <section id="aboutus">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="section-heading">
            <h1 class="text-center">About Us</h1>
            <div class="heading-border"></div>
            <p class="lead">KarpaAdventure is a company that aims to make adventure convenient for you while allowing you to experience the full experience of a wilderness adventure! We are a Malaysian-Indonesian based Company that aims to bring your trekking adventures to the next level. Not only do we have all the hidden gems covered, we’re teaming up with locals to give you a full local experience as well. Experience what it’s like living in the village of Lombok, eating local food cooked to you by locals, exploring waterfalls, mountain peaks and islands with a local guide showing you around. We aim to give you an adventure like you’ve never experienced before!</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <img src="/image/lombok_bg_1.jpg" class="img-fluid" alt="porter">
        </div>
        <div class="col">
          <img src="/image/lombok_bg_2.jpg" class="img-fluid" alt="porter">
        </div>
      </div>
    </div>
  </section>

  <section id="parallax1" class="parallax">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="parallax-text">
            <h2>“And into the forest i go to lose my mind and find my soul”</h2>
            <p class="lead">- John Muir -</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="ourpackage">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="section-heading">
            <h1 class="text-center">Our Package</h1>
            <div class="heading-border"></div>
            <p class="lead">If you are a traveler, family, or a group of friends who wants an active and/or adventurous vacation, this package is just for you. KarpaAdventure offers you a hiking/trekking/relaxation trip you won’t forget! Witness breathtaking mountain peaks, majestic waterfalls and exotic islands that will you just don’t want to miss! You don’t have to be young in years. You just need to be healthy, young at heart and energetic to take part. Furthermore, not only does our experience guides plan and take you around, they are excellent cooks as well! Need to worry, KarpaAdventure got you covered!</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="card-deck">
          <div class="card w-100 border-secondary">
            <img class="card-img-top" src="/image/card1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">5 Days 4 Nights</h5>
            </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Day 1: Arrival Lombok – Transfers to Hotel</li>
                <li class="list-group-item">Day 2: Senaru Village - Sembalun Village (1.150.m) – Sembalun Crater Rim(2.639.m)</li>
                <li class="list-group-item">Day 3: Sembalun Crater Rim(2.639m) – Summit/Top 3.726m – Segara Anak Lake and Hotsprings (2008m)</li>
                <li class="list-group-item">Day 4: Segara Anak Lake and Hot springs (2008m) - Senaru Crater Rim(2.641m)</li>
                <li class="list-group-item">Day 5: Senaru Crater Rim(2.641m) – Senaru Village (601m) - Airport</li>
              </ul>
          </div>
          <div class="card w-100 border-secondary">
            <img class="card-img-top" src="/image/card2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-text">7 Days 6 Nights</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Day 1: Arrival Lombok – Transfers to Hotel</li>
                <li class="list-group-item">Day 2: Senaru Village - Sembalun Village (1.150.m) – Sembalun Crater Rim(2.639.m)</li>
                <li class="list-group-item">Day 3: Sembalun Crater Rim(2.639m) – Summit/Top 3.726m – Segara Anak Lake and Hotsprings (2008m)</li>
                <li class="list-group-item">Day 4: Segara Anak Lake and Hot springs (2008m) - Senaru Crater Rim(2.641m)</li>
                <li class="list-group-item">Day 5: Senaru Crater Rim(2.641m) – Senaru Village (601m)</li>
                <li class="list-group-item">Day 6: Hotel – Jetty - Gili Trawangan Island</li>
                <li class="list-group-item">Day 7: Jetty - Airport</li>
              </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contactus">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="section-heading">
            <h1 class="text-center">Contact Us</h1>
            <div class="heading-border"></div>
            <p class="lead">Ready to begin your adventure? Fill out form below and we will be get in touch with you within 24 hours! </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          {!! Form::open(['url' => 'message']) !!}
          <form class="needs-validation" novalidate>
            <div class="form-group">
              {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter Your Name', 'required'])}}
            </div>
            <div class="form-group">
              {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter Your Email', 'required'])}}
            </div>
            <div class="form-group">
              {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter Your Message', 'required'])}}
            </div>
            <div>
              {{Form::submit('Submit', ['class' => 'btn btn-primary btn-block'])}}
            </div>
          </form>
          {!! Form::close() !!}
        </div>
    </div>
  </section>
@endsection
