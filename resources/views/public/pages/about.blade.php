@extends('layouts.defaults')
@section('content')
    <div class="intro-section site-blocks-cover innerpage" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row align-items-center text-center border">
          <div class="col-lg-12 mt-5" data-aos="fade-up">
            <h1>About Us</h1>
            <p class="text-white text-center">
              <a href="index.html">Home</a>
              <span class="mx-2">/</span>
              <span>About</span>
            </p>
          </div>
        </div>
      </div>
    </div>



    <div class="site-section pb-0">
      <div class="block-2 pb-0 mb-0">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
              <img src="{{asset('img/public/about_1.jpg')}}" alt="Image " class="img-fluid img-overlap">
            </div>
            <div class="col-lg-5 ml-auto">
              <h3 class="section-subtitle">Why Choose Us</h3>
              <h2 class="section-title mb-4">More than <strong>50 year experience</strong> in industry</h2>
              <p>Reprehenderit, odio laboriosam? Blanditiis quae ullam quasi illum minima nostrum perspiciatis error consequatur sit nulla.</p>

              <div class="row my-5">
                <div class="col-lg-12 d-flex align-items-center mb-4">
                  <span class="line-height-0 flaticon-oil-platform display-4 mr-4 text-primary"></span>
                  <div>
                    <h4 class="m-0 h5 text-white">Expert in Builings</h4>
                    <p class="text-white">Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
                <div class="col-lg-12 d-flex align-items-center mb-4">
                  <span class="line-height-0 flaticon-compass display-4 mr-4 text-primary"></span>
                  <div>
                    <h4 class="m-0 h5 text-white">Modern Design</h4>
                    <p class="text-white">Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
                <div class="col-lg-12 d-flex align-items-center">
                  <span class="line-height-0 flaticon-planning display-4 mr-4 text-primary"></span>
                  <div>
                    <h4 class="m-0 h5 text-white">Leading In Floor Planning</h4>
                    <p class="text-white">Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>



              </div>


            </div>
          </div>
        </div>
      </div>
    </div>





    <div class="site-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 mb-5 text-center">
              <h3 class="section-subtitle">Our Team</h3>
              <h2 class="section-title text-black mb-4">We have a <strong>Good and Expert Team</strong></h2>
            </div>
          </div>
  
          <div class="row">
            <div class="col-lg-3 col-md-6 mb-lg-0">
              <div class="person">
                <figure>
                  <img src="{{asset('img/public/person_1.jpg')}}" alt="Image" class="img-fluid">
                  <div class="social">
                    <a href="#"><span class="icon-facebook"></span></a>
                    <a href="#"><span class="icon-twitter"></span></a>
                    <a href="#"><span class="icon-linkedin"></span></a>
                  </div>
                </figure>
                <div class="person-contents">
                  <h3>Craig Daniel</h3>
                  <span class="position">Engineer</span>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 mb-lg-0">
              <div class="person">
                <figure>
                  <img src="{{asset('img/public/person_2.jpg')}}" alt="Image" class="img-fluid">
                  <div class="social">
                    <a href="#"><span class="icon-facebook"></span></a>
                    <a href="#"><span class="icon-twitter"></span></a>
                    <a href="#"><span class="icon-linkedin"></span></a>
                  </div>
                </figure>
                <div class="person-contents">
                  <h3>Peter Silk</h3>
                  <span class="position">Engineer</span>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 mb-lg-0">
              <div class="person">
                <figure>
                  <img src="{{asset('img/public/person_3.jpg')}}" alt="Image" class="img-fluid">
                  <div class="social">
                    <a href="#"><span class="icon-facebook"></span></a>
                    <a href="#"><span class="icon-twitter"></span></a>
                    <a href="#"><span class="icon-linkedin"></span></a>
                  </div>
                </figure>
                <div class="person-contents">
                  <h3>Evan Brook</h3>
                  <span class="position">Engineer</span>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 mb-lg-0">
              <div class="person">
                <figure>
                  <img src="{{asset('img/public/person_4.jpg')}}" alt="Image" class="img-fluid">
                  <div class="social">
                    <a href="#"><span class="icon-facebook"></span></a>
                    <a href="#"><span class="icon-twitter"></span></a>
                    <a href="#"><span class="icon-linkedin"></span></a>
                  </div>
                </figure>
                <div class="person-contents">
                  <h3>Kyle Lucas</h3>
                  <span class="position">Engineer</span>
                </div>
              </div>
            </div>
  
          </div>
        </div>
      </div>


@endsection