@extends('layouts.app')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-01.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>uwu</span>-Hostel</h2>
                <p class="animate__animated animate__fadeInUp">We provide hostel facilities to our Uva Wellassa University students. Our hostels aimed at providing budget-oriented, sociable accommodation for students. Students tend to get an independent atmosphere and learn to take decisions of their own.</p>
                <div>
                  <a href="/login" class="btn-menu animate__animated animate__fadeInUp scrollto">Login</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/slide-02.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Study Hall</h2>
                <p class="animate__animated animate__fadeInUp">We assign a study hall for students to learn independently or receive academic help from their colleague. Students are able to learn in this environment that supports their academic demands, enables them to remain focused, and helps them to feel more confident by using any time to study or finish their work.</p>
                <div>
                  <a href="/login" class="btn-menu animate__animated animate__fadeInUp scrollto">Login</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container">

        <div class="section-title">
          <h2><span>About</span> Us</h2>
          <p>We provide hostels that are directly managed and controlled by the university and typically only admit Uva Wellassa University students.</p>
        </div>

      </div>
    </section><!-- End About Section -->

        <!-- ======= Hostels Section ======= -->
        <section id="hostels" class="hostels">
          <div class="container">
    
            <div class="section-title">
              <h2>Check our <span>Hostels</span></h2>
              <p>Our Hostel Details</p>
            </div>
    
            <div class="row">
              <div class="col-lg-3">
                <ul class="nav nav-tabs flex-column">
                  <li class="nav-item">
                    <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">1st Year Students</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab-2">3rd Year Students</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab-3">4th Year Students</a>
                  </li>
                  
                </ul>
              </div>
              <div class="col-lg-9 mt-4 mt-lg-0">
                <div class="tab-content">
                  <div class="tab-pane active show" id="tab-1">
                    <div class="row">
                      <div class="col-lg-6 details order-1 order-lg-1">
                        <hr>
                        <h3>Male Hostel</h3>
                        <p class="fst-italic"><b>In-Hostels:</b></p>
                        <p>
                         <ui>
                           <li>Silver-Tips</li>
                           <li>Coral-Beauty</li>
                         </ui>
                        </p>
                        <p class="fst-italic"><b>Out-Hostels:</b></p>
                        <p>
                          <ui>
                            <li>Nukkles</li>
                            <li>Udavela</li>
                          </ui>
                        </p>
                      </div>
                      <div class="col-lg-6 details order-2 order-lg-1">
                        <hr>
                        <h3>Female Hostel</h3>
                        <p class="fst-italic"><b>In-Hostels:</b></p>
                        <p>
                          <ui>
                            <li>Blue-Shaphaire</li>
                            <li>Catelia</li>
                          </ui>                        
                        </p>
                        <p class="fst-italic"><b>Out-Hostels:</b></p>
                        <p>
                          <ui>
                            <li>Galaxy-A</li>
                            <li>Kadalla</li>
                          </ui>              
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="tab-2">
                    <div class="row">
                      <div class="col-lg-6 details order-1 order-lg-1">
                        <hr>
                        <h3>Male Hostel</h3>
                        <p class="fst-italic"><b>Out-Hostels:</b></p>
                        <p>
                          <ui>
                            <li>Gaga-Addara</li>
                            <li>Nukkles-B</li>
                          </ui>                         </p>
                      </div>
                      <div class="col-lg-6 details order-2 order-lg-1">
                        <hr>
                        <h3>Female Hostel</h3>
                        <p class="fst-italic"><b>Out-Hostels:</b></p>
                        <p>
                          <ui>
                            <li>Hindahoda-E</li>
                            <li>Hindahoda-C</li>
                            <li>Hanthana-D</li>
                            <li>Bandraoura-B</li>
                            <li>Jayagama-C</li>
                            <li>Walawwa-C</li>

                          </ui>                         </p>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="tab-3">
                    <div class="row">
                      <div class="col-lg-6 details order-1 order-lg-1">
                        <hr>
                        <h3>Male Hostel</h3>
                        <p class="fst-italic"><b>Out-Hostels:</b></p>
                        <p>
                          <ui>
                            <li>Gaga-Addara</li>
                            <li>Nukkles-B</li>
                          </ui>                            </p>
                      </div>
                      <div class="col-lg-6 details order-2 order-lg-1">
                        <hr>
                        <h3>Female Hostel</h3>
                        <p class="fst-italic"><b>Out-Hostels:</b></p>
                        <p>
                          <ui>
                            <li>Galaxy-B</li>
                            <li>Kadalla</li>
                          </ui>                          </p>
                      </div>
                    </div>
                  </div>
                  

                </div>
              </div>
            </div>
    
          </div>
        </section><!-- End Specials Section -->
        
        <!-- ======= Login Section ======= -->
        <section id="login" class="login mt-5">
          <div class="container">

            <div class="section-title">
              <h2><span>Login</span> to our system</h2>
              <p>Welcome To UWU-Hostel.<br> You can access to our system by login to this page...</p>
            </div>

            <form action="/login" method="POST" enctype="multipart/form-data" role="form" class="php-email-form3">
                @csrf
                <div class="col-lg-12 col-md-12 form-group">
                  <input type="email" name="email" class="form-control" id="email" placeholder="Your Email  (Ex: abc@gmail.com)" data-rule="email" data-msg="Please enter valid email" required>
                  <div class="validate"></div>
                </div>
                <div class="col-lg-12 col-md-12 form-group mt-3 mt-md-2">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Your Password" data-rule="" data-msg="Please enter valid passwords">
                  <div class="validate"></div>
                </div>

                @if (isset ($message))
                <div class="mt-3 error-message"> 
                    <span class="text-danger  text-center">{{$message}}</span>
                </div>
            @endif

            @if (isset ($success))
                <div class="mt-3 sent-message"> 
                    <span class="text-success text-center">{{$success}}</span>
                </div>
            @endif
                <div class="text-center mt-3">
                    <!--button type="submit">Login</button-->
                    <input type="submit" value="Log In" name="login" class="btn btn-block btn-primary">

                </div>
            </form>

          </div>
        </section><!-- End Login Section -->

  </main>
  