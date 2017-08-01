
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
                  <p>Antiques, Contemporary Homeware & Just Great Stuff!</p>
                  <!-- <div class="btn btn-custom page-scroll" href="#about">Learn More</div> -->
                  <a class="page-scroll" href="#about"><div class="btn btn-primary"  style="background-color: #158429;padding:10px;">Learn More</div></a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="background-color: ; margin-top:-9em margin-bottom: 3em;">
                    <h1>About<br/>
                      <small>/əˈbout/</small>
                      <hr align="center" width="10%" style="border-top: 3px solid #158429;">
                    </br/></h1>
                </div>

            </div>

            <div class="row about-info" style="margin-top: 3%;">
              <div class="col-lg-4 col-md-4 col-xs-12">
                <img style="margin: 0 auto 19px; height: 9rem; width: 9rem;" src="{{asset('/images/home.svg')}}">
                <p>"Bernalese" is a retail concept in progress which builds upon the electic notion that many aspects of collecting and acquiring are melded together to create a home"</p></div>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <img style="margin: 0 auto 19px; height: 9rem; width: 9rem;" src="{{asset('/images/tools.svg')}}">
                <p>Our retail store is forthcoming in San Francisco - stay tuned - and we will make a limited assortment of specific items availble for purchase via eBay. Our initial on-line offering is a small collection of World Craft items sourced from Southeast Asia.</p></div>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <img style="margin: 0 auto 19px; height: 9rem; width: 9rem;" src="{{asset('/images/donation.svg')}}">
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div>
            </div>
        </div>
    </section>

    <!-- Ebay Section -->

    <section id="ebay" class="ebay-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-xs-12 text-align"><h2>Check Out Our Limited Items</h2></div>
          <a href="http://www.ebay.com/usr/bernalese_sf" target="_blank"><div class="btn btn-primary" style="background-color: #158429;padding:10px;">See More</div></a>
          </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="antiques" class="antiques-section">
        <div class="container">
          <div class="row">
          <div class="col-lg-12" style="background-color: ; margin-top:-9em margin-bottom: 3em;">
              <h1>Antiques<br/>
                <small>/anˈtēk/</small>
                <hr align="center" width="10%" style="border-top: 3px solid #158429;">
              </br/></h1>
              </div>
          </div>
        </div>
    </section>

    <!-- Contact Section -->


    <section id="contact" class="contact-section">
      <div class="container">

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
