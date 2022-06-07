@extends('layouts.landing.app')

@section('title','Contact Us')

@section('content')
    <main>
<section class="hero with-pattern py-5 bg-light">
      <div class="container py-5 my-5">
        <div class="row">
          <div class="col-md-7 mx-auto text-center">
            <h1 class="text-uppercase">Contact shesha d</h1>
            <h3>We would love to hear from you</h3>
          </div>
        </div>
      </div>
    </section>
    <!-- CONTACT DETAILS SECTION    -->
    <section class="pulled-up-section">
      <div class="container text-center">
        <div class="card shadow with-pattern-full">
          <div class="card-body py-5 p-md-5 index-forward">
            <div class="row gy-4">
              <div class="col-md-4">
                <div class="icon-block icon-block-lg mx-auto mb-3">
                    <img src="{{asset('public/assets/landing/image/0878222293 (1).png')}}" alt="" class="img-fluid mb-4 mb-lg-0">  
                </div>
                <h3 class="h4">Phone</h3>
                <ul class="list-unstyled mb-0">
                  <li class="text-muted"><a class="reset-anchor" href="tel:+27878222293">+27 87 822 2293</a></li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="icon-block icon-block-lg mx-auto mb-3">
                  <img src="{{asset('public/assets/landing/image/0878222293 (2).png')}}" alt="" class="img-fluid mb-4 mb-lg-0">
                </div>
                <h3 class="h4">Email</h3>
                <ul class="list-unstyled mb-0">
                  <li class="text-muted"><a class="reset-anchor" href="mailto:admin@imsafrica.co">admin@imsafrica.co</a></li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="icon-block icon-block-lg mx-auto mb-3">
                  <img src="{{asset('public/assets/landing/image/0878222293 (3).png')}}" alt="" class="img-fluid mb-4 mb-lg-0">
                </div>
                <h3 class="h4">Location</h3>
                <ul class="list-unstyled mb-0 px-5">
                  <li class="text-muted">13 Gladys Mazibuko Road, Essenwood, Berea</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br>
    <div class="container text-center">
        <div class="card shadow with-pattern-full">
                  <iframe src="https://maps.google.com/maps?q=13+Gladys+Mazibuko+Rd,+Essenwood&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"></iframe>
        </div>
    </div>
    <style>
    .map-container{
    overflow:hidden;
    padding-bottom:56.25%;
    position:relative;
    height:400;
    }
    .map-container iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
    }
    </style>
<!--<footer class="bg-light pb-5">-->
<!--  <div class="container text-center">-->
<!--    <p class="font-italic text-muted mb-0">&copy; 2022 Shesha D. All Rights Reserved.</p>-->
<!--  </div>-->
<!--</footer>-->

    </main>
@endsection
