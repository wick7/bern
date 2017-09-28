
<!DOCTYPE html>

<html lang="en">
@include('partials._head')
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<body>


<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button> -->
            <a class="navbar-brand page-scroll" href="{{ url('/')}}" style="color: white;font-size:2.8rem;">\bərnallēz\</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <!-- <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="hidden">
                    <a class="page-scroll" href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="{{ url('gallery')}}" style="color: white;font-size:1.7rem;">Just Great Stuff</a>
                </li>
            </ul>
        </div> -->
    </div>
</nav>


<div class="container" style="padding-top:100px;">
  <div class="row text-align">
    <div class="col-lg-12 col-md-12 col-xs-12 title text-center" style="color:black;">
      <h2>Attribution</h2>
      <hr align="center" width="45%" style="border-top: 3px solid #158429;">
    </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center" style="margin: 2em;">
        <h3>Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></h3>
      </div>
    </div>
    <div class="row text-align">
      <div class="col-lg-12 col-md-12 col-xs-12 title text-center" style="color:black;">
        <hr align="center" width="45%" style="border-top: 3px solid #158429;">
      </div>
      </div>
    {{-- <div class="row">
      <div class="col-md-12 text-center">
        <h3>Template Created By <a href="http://davidmiller.io/" target"_blank">David Miller</a></h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <h3>At <a href="http://davidmiller.io/" target"_blank">Blackrock Digital</a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <h3>Found At <a href="https://startbootstrap.com/" target"_blank">Start Bootstrap</a></h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <h3>Awesome Templates!</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center" style="margin: 2em;">
      </div>
    </div> --}}
  </div>


    @include('partials._footerAdmin')


</body>



<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Scrolling Nav JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<script src="js/scrolling-nav.js"></script>

</div>
</div>



</html>
