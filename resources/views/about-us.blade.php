@extends('layouts.landing.app')

@section('title','About Us')

@section('content')
    <main>
        <nav class="navbar navbar-expand-lg navbar-light bg-light py-3">
  
</nav>
<section class="bg-light text-black has-quote">
      <div class="container py-5 z-index-20">
        <div class="row text-center">
          <div class="col-lg-7 mx-auto">
            <h2 class="mb-4">"Food delivery services in your township. It's never been easier. Download now and start enjoying your favorite local dishes."</h2>
            <p class="h6 text-uppercase mb-0">Shesha D </p>
          </div>
        </div>
      </div>
    </section>
    
    
    
    
    
<div class="bg-white py-5">
  <div class="container py-5">
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
        <h1 class="display-4">About Shesha D</h1>
        <p class="font-italic text-muted mb-4">Shesha D is a food delivery app that allows users to order their favorite foods and have them delivered to them. Shesha D uses a secure and efficient delivery and payment system to ensure a smooth experience for our users.</p>
        <p class="font-italic text-muted mb-4">Shesha D comprises 3 different applications, the restaurant app, the delivery man app, and the customer's app. Our users can join as customers and enjoy delivery services or join as one of our delivery drivers where you can deliver for your local restaurants. You can also join as a restaurant where we offer you our delivery services for customers who order from your restaurant.</p>
      </div>
      <div class="col-lg-6 d-none d-lg-block"><img src="{{asset('public/assets/landing/image/Untitled design (27).png')}}" alt="" class="img-fluid"></div>
    </div>
  </div>
</div>

<div class="bg-light py-5">
  <div class="container py-5">
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">Join us as a Delivery man</h2>
        <p class="font-italic text-muted mb-4">Click join us now and select delivery man registration where you can send through your application and start the process of becoming one of our many trusted delivery men.</p>
        <p class="font-italic text-muted mb-4">Please note that to become a delivery man you must have your own scooter.</p>
      </div>
      <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="{{asset('public/assets/landing/image/My project (92).png')}}" alt="" class="img-fluid mb-4 mb-lg-0"></div>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-5 px-5 mx-auto"><img src="{{asset('public/assets/landing/image/Untitled design (24).png')}}" alt="" class="img-fluid mb-4 mb-lg-0"></div>
      <div class="col-lg-6">
        <h2 class="font-weight-light">Join us a restaurant</h2>
        <p class="font-italic text-muted mb-4">Click join us now and select restaurant registration where you can send through your application and start the process of becoming one of our restaurants and start delivering your cuisines to your locals. When you become one of our restaurants you have access to our delivery services. All you have to do is accept orders, process them and make them ready for handover and we will take care of the rest..</p>
      </div>
    </div>
  </div>
</div>

<div class="bg-white py-5">
  <div class="container py-5">
    <div class="row mb-4">
      <div class="col-lg-5">
        <h2 class="display-4 font-weight-light">Our team</h2>
        <p class="font-italic text-muted">Get to know your Shesha D team.</p>
      </div>
    </div>

    <div class="row text-center">
      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-4.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Hlengiwe Mbhele</h5><span class="small text-uppercase text-muted">Developer/ Admin</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->

      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-3.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Sihle Mkhwanazi</h5><span class="small text-uppercase text-muted">Developer/Admin</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->

      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-2.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Craig Williams</h5><span class="small text-uppercase text-muted">Founder/Senior Developerr</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->

      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-1.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Dan McBride</h5><span class="small text-uppercase text-muted">Founder</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->
       <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-1.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Paddy Moon</h5><span class="small text-uppercase text-muted">Founder</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->
        <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-3.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Siyanda Khanyile</h5><span class="small text-uppercase text-muted">Developer/Admin</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->
         <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-2.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Sphesihle Sosibo</h5><span class="small text-uppercase text-muted">Founder/Senior Developerr</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->
      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-3.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Odwa Mthembu</h5><span class="small text-uppercase text-muted">Developer/Admin</span>
          <ul class="social mb-0 list-inline mt-3">
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- End-->

    </div>
  </div>
</div>
 <section class="py-5 bg-light text-black with-pattern-full">
      <div class="container py-5">
        <div class="row gy-4">
          <div class="col-lg-4">
            <div class="d-flex align-items-center">
              <div class="icon-block icon-block-lg bg-white shadow flex-shrink-0">
               
              </div>
              <div class="ms-3">
                <h5>Generate ideas</h5>
                <p class="text-sm mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="d-flex align-items-center">
              <div class="icon-block icon-block-lg bg-white shadow flex-shrink-0">
               
              </div>
              <div class="ms-3">
                <h5>Collect contents</h5>
                <p class="text-sm mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="d-flex align-items-center">
              <div class="icon-block icon-block-lg bg-white shadow flex-shrink-0">
                
              </div>
              <div class="ms-3">
                <h5>Create project</h5>
                <p class="text-sm mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<footer class="bg-white pb-5">
  <div class="container text-center">
    <p class="font-italic text-muted mb-0">&copy; 2022 Shesha D. All Rights Reserved.</p>
  </div>
</footer>

    </main>
@endsection
