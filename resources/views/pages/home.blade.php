
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
                  <h1>Bernalese<sup style=" width:.3em;vertical-align: top; position: relative; top: 1.4em; font-size: 2.5rem; background-color:;">&trade;</sup></h1>
                  <h4>...do you speak it?</h4>
                  <!-- <p>Character For Your Home</p> -->
                  <p>Antiques, Contemporary Homeware & Just Great Stuff</p>
                  <!-- <div class="btn btn-custom page-scroll" href="#about">Learn More</div> -->
                  <a class="page-scroll" href="#about"><div class="btn btn-primary"  style="background-color: #16511f;padding-top:1.2em; padding-bottom:1.2em; padding-right:3em;padding-left:3em; width: auto; border-radius:25px;margin-top:2em; font-size:18px;">Learn More</div></a>

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
                      <small>\əˈbout\</small>
                      <hr align="center" width="10%" style="border-top: 3px solid #158429;">
                    </br/></h1>
                </div>

            </div>

            <div class="row about-info" style="margin-top: 3%;">
              <div class="col-lg-4 col-md-4 col-xs-12">
                <img class="about-icon" src="{{asset('/images/home.svg')}}">
                <h3>More Than A House</h3>
                <p>"Bernalese" is a retail concept in progress which builds upon the eclectic notion that many aspects of collecting and acquiring are melded together to create a home.</p></div>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <img class="about-icon" src="{{asset('/images/tools.svg')}}">
                <h3>In Development</h3>
                <p>Our flag ship retail store is forthcoming in San Francisco, California - stay tuned! A vast array of antique and contemporary items will be available exclusively in-store for purchase.</p></div>
              <div class="col-lg-4 col-md-4 col-xs-12">
                <img class="about-icon" src="{{asset('/images/cart.svg')}}">
                <h3>To Hold You Over</h3>
                <p>A curated assortment of vintage and world-craft items is available for purchase via <a href="http://www.ebay.com/usr/bernalese_sf" target="_blank">eBay</a>. A limited on-line offering at this website will be coming soon.</p></div>
            </div>
        </div>
    </section>

    <!-- Ebay Section -->

    <!-- <section id="ebay" class="ebay-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-xs-12 text-align"><h2>Check Out Our Initial Online Offering</h2></div>
          <a href="http://www.ebay.com/usr/bernalese_sf" target="_blank"><div class="btn btn-primary" style="background-color: #16511f;padding:10px;">See More</div></a>
          </div>
        </div>
    </section> -->

    <!-- Services Section -->
    <section id="antiques" class="antiques-section">
        <div class="container">
          <div class="row">
          <div class="col-lg-12" style="margin-bottom: 3em;">
              <h1>Antiques<br/>
                <small>\anˈtēks\</small>
                <hr align="center" width="10%" style="border-top: 3px solid #158429;">
              </br/></h1>
              </div>
          </div>
          <div class="row" style="margin-bottom: 4em;">
            <div class="col-lg-6 col-md-6">
              <p>Antique...of or belonging to the past.  Vintage, collectible, the ultimate recyclable.  Whether it is the cookie jar that rested on your grandmother's kitchen counter; the mid-century coffee table; or the Victorian candlestick; these items are what make a house a home.  They speak of personality, history and aesthetic, combining to give your home that special character.</p>
            </div>
            <div class="col-lg-6 col-md-6" style="margin-top: 1em;">
              <img style="border-radius: 30px" class="second-img" src="/images/a1.png" alt="" />
          </div>
        </div>
      </div>
    </section>




    <!-- Contact Section -->
    <section id="homeware" class="homeware-section">
        <div class="container">
          <div class="row">
          <div class="col-lg-12" style="margin-top:-5em;">
              <h1>Homeware<br/>
                <small>\ˈhəʊmwɛə\</small>
                <hr align="center" width="10%" style="border-top: 3px solid #158429;">
              </br/></h1>
              </div>
          </div>
          <div class="row">
            <div class="col-lg-12" style="margin-top: -1.5em; margin-bottom: 1.5em;">
              <p>Not just a houseware with utility, but an item that supports its function with style, simplicity of purpose, and a bit of craft & creativity.  A "homeware".  Maybe it is locally produced or coming from afar, but it carries a special quality that contributes to making your house your home.  These items fold gently into the fabric and character of our daily lives.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="panel panel-default">
                <div class="panel-body">
                  <img class="homeware_img" src="/images/front.jpeg" />
                  <div class="overlays">
                    <h2>Sed ut perspiciatis</h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="panel panel-default">
                <div class="panel-body">
                  <img class="homeware_img" src="/images/h2.png" />
                  <div class="overlays">
                    <h2>Ut enim ad</h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="panel panel-default">
                <div class="panel-body">
                  <img class="homeware_img" src="/images/h3.png" />
                  <div class="overlays">
                    <h2>At vero eos</h2>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <img class="homeware_img" src="/images/h4.png" />
                <div class="overlays">
                  <h2>Lorum Ipsum dolor</h2>
                </div>

              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <img class="homeware_img" src="/images/h5_resized.jpg" />
                <div class="overlays">
                  <h2>Lorum Ipsum</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <img class="homeware_img" src="/images/h6.jpg" />
                <div class="overlays">
                  <h2>Lorum Ipsum</h2>
                </div>
              </div>
            </div>
          </div>
      </div>
      </div>
    </section>

    <section id="greatStuff" class="greatStuff-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 text-center">
            <a href="{{ url('gallery')}}" target="_blank"><div class="btn btn-primary" style="background-color: #16511f;padding:2em; width: 10em; border-radius:25px;margin-top:2em; margin-bottom:2em;font-size:18px;">Great Stuff</div></a>
          </div>
        </div>
      </div>
    </section>

@include('partials._footer')


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>

</html>



<!-- <section id="homeware" class="homeware-section">
    <div class="container">
      <div class="row">
      <div class="col-lg-12" style="margin-top:-5em; margin-bottom: ;">
          <h1>Homeware<br/>
            <small>\ˈhəʊmwɛə\</small>
            <hr align="center" width="10%" style="border-top: 3px solid #158429;">
          </br/></h1>
          </div>
      </div>
      <div class="row" style="margin-bottom: 4em;">
        <div class="col-lg-6 col-md-6">
          <img style="border-radius: 30px" class="second-img" src="https://photos-5.dropbox.com/t/2/AAAvrRkvQxxtgDAFkV50j2Kc4Tfwcq_AK7HUBCmC_6YdTw/12/393123092/jpeg/32x32/1/_/1/2/pexels-photo-277322.jpeg/ENqWkJEDGJoPIAIoAg/SJQK3ct2tRfQ7IaGUtsvteY6rVtn2ZZnFDDPI6WFdc8?size=32x32&size_mode=5"
            alt="" />
        </div>
        <div class="col-lg-6 col-md-6">
          <h1>Lorum Ipsum</h1>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <a href="{{ url('gallery')}}" target="_blank"><div class="btn btn-primary" style="background-color: #16511f;padding:2em; width: 30%; border-radius:25px;margin-top:2em;">Great Stuff</div></a>
            </div>
          </div>
      </div>

    </div>

  </div>
</section> -->
