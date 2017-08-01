
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" >
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="{{ url('/')}}" style="color: white;font-size:2.8rem;">/bərnallēs/</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a class="page-scroll" href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#about" style="color: white;font-size:1.7rem;">About</a>
                </li>
                <li>
                    <a class="page-scroll" href="#antiques" style="color: white;font-size:1.7rem;">Antiques</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact" style="color: white;font-size:1.7rem;">Contact</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{ url('gallery')}}" style="color: white;font-size:1.7rem;">Gallery</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
