<!DOCTYPE html>
<html lang="en">
@include('partials._head')
<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    @include('partials._nav')

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 title">
                  <h1>Bernalise</h1>
                  <h4>...do you speak it?</h4>
                  <p></p>
                  <p>We're all about Antiques and Charities</p>
                  <a class="btn btn-success page-scroll" href="#about">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="background-color: ; margin-top:-5em margin-bottom: 3em;">
                    <h1>About<br/>
                      <small>/əˈbout/</small>
                      <hr align="center" width="10%" style="border-top: 1px solid green;">
                    </br/></h1>
                </div>

            </div>

            <div class="row">
              <div class="col-lg-4 col-md-4 col-xs-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
              <div class="col-lg-4 col-md-4 col-xs-4">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
              <div class="col-lg-4 col-md-4 col-xs-4">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="antiques" class="antiques-section">
        <div class="container">
          <div class="row">
          <div class="col-lg-12" style="background-color: ; margin-top:-5em margin-bottom: 3em;">
              <h1>Antiques<br/>
                <small>/əˈbout/</small>
                <hr align="center" width="10%" style="border-top: 1px solid green;">
              </br/></h1>
              </div>
          </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
      <div class="container">

  <div id="main_area">
      <!-- Slider -->
      <div class="row">
          <div class="col-sm-6" id="slider-thumbs">
              <!-- Bottom switcher of slider -->
              <ul class="hide-bullets">
                  <li class="col-sm-3">
                      <a class="thumbnail" id="carousel-selector-0">
                          <img src="http://placehold.it/150x150&text=zero">
                      </a>
                  </li>

                  <li class="col-sm-3">
                      <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/150x150&text=1"></a>
                  </li>

                  <li class="col-sm-3">
                      <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/150x150&text=2"></a>
                  </li>

                  <li class="col-sm-3">
                      <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/150x150&text=3"></a>
                  </li>

                  <li class="col-sm-3">
                      <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/150x150&text=4"></a>
                  </li>

                  <li class="col-sm-3">
                      <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/150x150&text=5"></a>
                  </li>
                  <li class="col-sm-3">
                      <a class="thumbnail" id="carousel-selector-6"><img src="http://placehold.it/150x150&text=6"></a>
                  </li>

                  <li class="col-sm-3">
                      <a class="thumbnail" id="carousel-selector-7"><img src="http://placehold.it/150x150&text=7"></a>
                  </li>

                  <li class="col-sm-3">
                      <a class="thumbnail" id="carousel-selector-8"><img src="http://placehold.it/150x150&text=8"></a>
                  </li>

                  <li class="col-sm-3">
                      <a class="thumbnail" id="carousel-selector-9"><img src="http://placehold.it/150x150&text=9"></a>
                  </li>
                  <li class="col-sm-3">
                      <a class="thumbnail" id="carousel-selector-10"><img src="http://placehold.it/150x150&text=10"></a>
                  </li>

                  <li class="col-sm-3">
                      <a class="thumbnail" id="carousel-selector-11"><img src="http://placehold.it/150x150&text=11"></a>
                  </li>

                  <li class="col-sm-3">
                      <a class="thumbnail" id="carousel-selector-12"><img src="http://placehold.it/150x150&text=12"></a>
                  </li>

                  <li class="col-sm-3">
                      <a class="thumbnail" id="carousel-selector-13"><img src="http://placehold.it/150x150&text=13"></a>
                  </li>
                  <li class="col-sm-3">
                      <a class="thumbnail" id="carousel-selector-14"><img src="http://placehold.it/150x150&text=14"></a>
                  </li>

                  <li class="col-sm-3">
                      <a class="thumbnail" id="carousel-selector-15"><img src="http://placehold.it/150x150&text=15"></a>
                  </li>
              </ul>
          </div>
          <div class="col-sm-6">
              <div class="col-xs-12" id="slider">
                  <!-- Top part of the slider -->
                  <div class="row">
                      <div class="col-sm-12" id="carousel-bounding-box">
                          <div class="carousel slide" id="myCarousel">
                              <!-- Carousel items -->
                              <div class="carousel-inner">
                                  <div class="active item" data-slide-number="0">
                                      <img src="http://placehold.it/470x480&text=zero"></div>

                                  <div class="item" data-slide-number="1">
                                      <img src="http://placehold.it/470x480&text=1"></div>

                                  <div class="item" data-slide-number="2">
                                      <img src="http://placehold.it/470x480&text=2"></div>

                                  <div class="item" data-slide-number="3">
                                      <img src="http://placehold.it/470x480&text=3"></div>

                                  <div class="item" data-slide-number="4">
                                      <img src="http://placehold.it/470x480&text=4"></div>

                                  <div class="item" data-slide-number="5">
                                      <img src="http://placehold.it/470x480&text=5"></div>

                                  <div class="item" data-slide-number="6">
                                      <img src="http://placehold.it/470x480&text=6"></div>

                                  <div class="item" data-slide-number="7">
                                      <img src="http://placehold.it/470x480&text=7"></div>

                                  <div class="item" data-slide-number="8">
                                      <img src="http://placehold.it/470x480&text=8"></div>

                                  <div class="item" data-slide-number="9">
                                      <img src="http://placehold.it/470x480&text=9"></div>

                                  <div class="item" data-slide-number="10">
                                      <img src="http://placehold.it/470x480&text=10"></div>

                                  <div class="item" data-slide-number="11">
                                      <img src="http://placehold.it/470x480&text=11"></div>

                                  <div class="item" data-slide-number="12">
                                      <img src="http://placehold.it/470x480&text=12"></div>

                                  <div class="item" data-slide-number="13">
                                      <img src="http://placehold.it/470x480&text=13"></div>

                                  <div class="item" data-slide-number="14">
                                      <img src="http://placehold.it/470x480&text=14"></div>

                                  <div class="item" data-slide-number="15">
                                      <img src="http://placehold.it/470x480&text=15"></div>
                              </div>
                              <!-- Carousel nav -->
                              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                  <span class="glyphicon glyphicon-chevron-left"></span>
                              </a>
                              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                  <span class="glyphicon glyphicon-chevron-right"></span>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!--/Slider-->
      </div>

  </div>
</div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>

</html>
