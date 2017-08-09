
<!DOCTYPE html>

<html lang="en">
@include('partials._head')
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<body>


<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
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
                    <a class="page-scroll" href="{{ url('gallery')}}" style="color: white;font-size:1.7rem;">Gallery</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>


<div class="container" style="padding-top:150px;">
  <div class="row text-align">
    <div class="col-lg-12 col-md-12 col-xs-12 title " style="color:black;">
      <h1>Gallery</h1>
    </div>
  </div>

  <div class="row first">
    <div class="col-md-4 col-sm-4 col-lg-4" style="padding-top:15px;">
      <div class="first-img" data-toggle="modal" data-target="#myModal1" alt="" style="background-image: url(https://photos-5.dropbox.com/t/2/AAAvrRkvQxxtgDAFkV50j2Kc4Tfwcq_AK7HUBCmC_6YdTw/12/393123092/jpeg/32x32/1/_/1/2/pexels-photo-277322.jpeg/ENqWkJEDGJoPIAIoAg/SJQK3ct2tRfQ7IaGUtsvteY6rVtn2ZZnFDDPI6WFdc8?size=32x32&size_mode=5;"></div>
      <div class="modal fade" id="myModal1" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <img class="second-img" src="https://photos-5.dropbox.com/t/2/AAAvrRkvQxxtgDAFkV50j2Kc4Tfwcq_AK7HUBCmC_6YdTw/12/393123092/jpeg/32x32/1/_/1/2/pexels-photo-277322.jpeg/ENqWkJEDGJoPIAIoAg/SJQK3ct2tRfQ7IaGUtsvteY6rVtn2ZZnFDDPI6WFdc8?size=32x32&size_mode=5"
              alt="" />
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-4 col-lg-4" style="padding-top:15px;">
      <div class="first-img" data-toggle="modal" data-target="#myModal2" style="background-image: url(https://photos-2.dropbox.com/t/2/AADlNt3dk-6oGvfNX-iq-p6JuOq4T4I1Hg8llp9EtX3dyQ/12/393123092/jpeg/32x32/1/_/1/2/camera-old-antique-voigtlander.jpg/ENqWkJEDGJoPIAIoAg/FYpIO0S_A7kyPVNUnPR-nEnyZIEvsaei-JByjis7GyY?size=32x32&size_mode=5;"
        alt="" ></div>
      <div class="modal fade" id="myModal2" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <img class="second-img" src="https://photos-2.dropbox.com/t/2/AADlNt3dk-6oGvfNX-iq-p6JuOq4T4I1Hg8llp9EtX3dyQ/12/393123092/jpeg/32x32/1/_/1/2/camera-old-antique-voigtlander.jpg/ENqWkJEDGJoPIAIoAg/FYpIO0S_A7kyPVNUnPR-nEnyZIEvsaei-JByjis7GyY?size=32x32&size_mode=5"
              alt="" />
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-4 col-lg-4" style="padding-top:15px;">
      <div class="first-img" data-toggle="modal" data-target="#myModal3" style="background-image: url(https://photos-2.dropbox.com/t/2/AADlNt3dk-6oGvfNX-iq-p6JuOq4T4I1Hg8llp9EtX3dyQ/12/393123092/jpeg/32x32/1/_/1/2/camera-old-antique-voigtlander.jpg/ENqWkJEDGJoPIAIoAg/FYpIO0S_A7kyPVNUnPR-nEnyZIEvsaei-JByjis7GyY?size=32x32&size_mode=5;"
        alt="" ></div>
      <div class="modal fade" id="myModal3" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <img class="second-img" src="https://photos-2.dropbox.com/t/2/AADlNt3dk-6oGvfNX-iq-p6JuOq4T4I1Hg8llp9EtX3dyQ/12/393123092/jpeg/32x32/1/_/1/2/camera-old-antique-voigtlander.jpg/ENqWkJEDGJoPIAIoAg/FYpIO0S_A7kyPVNUnPR-nEnyZIEvsaei-JByjis7GyY?size=32x32&size_mode=5"
              alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row second">
    <div class="col-md-4 col-sm-4 col-lg-4" style="padding-top:15px;">
      <div class="first-img" data-toggle="modal" data-target="#myModal4" style="background-image: url(https://photos-5.dropbox.com/t/2/AADSVdgrF5kfCrySsLvIZugo6Cz34vhL0Y0AnTC0xmbqhg/12/393123092/jpeg/32x32/1/_/1/2/pexels-photo-416339.jpeg/ENqWkJEDGJoPIAIoAg/dQNWUd-tHobbSZTkbxA72gnGdPhVJpbT6xNa3I_GGMk?size=32x32&size_mode=5);"
        alt=""></div>
      <div class="modal fade" id="myModal4" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <img class="second-img" src="https://photos-5.dropbox.com/t/2/AADSVdgrF5kfCrySsLvIZugo6Cz34vhL0Y0AnTC0xmbqhg/12/393123092/jpeg/32x32/1/_/1/2/pexels-photo-416339.jpeg/ENqWkJEDGJoPIAIoAg/dQNWUd-tHobbSZTkbxA72gnGdPhVJpbT6xNa3I_GGMk?size=32x32&size_mode=5"
              alt="" />
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-4 col-lg-4" style="padding-top:15px;">
      <div class="first-img" data-toggle="modal" data-target="#myModal5" style="background-image: url(https://photos-2.dropbox.com/t/2/AADlNt3dk-6oGvfNX-iq-p6JuOq4T4I1Hg8llp9EtX3dyQ/12/393123092/jpeg/32x32/1/_/1/2/camera-old-antique-voigtlander.jpg/ENqWkJEDGJoPIAIoAg/FYpIO0S_A7kyPVNUnPR-nEnyZIEvsaei-JByjis7GyY?size=32x32&size_mode=5;"
        alt="" ></div>
      <div class="modal fade" id="myModal5" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <img class="second-img" src="https://photos-2.dropbox.com/t/2/AADlNt3dk-6oGvfNX-iq-p6JuOq4T4I1Hg8llp9EtX3dyQ/12/393123092/jpeg/32x32/1/_/1/2/camera-old-antique-voigtlander.jpg/ENqWkJEDGJoPIAIoAg/FYpIO0S_A7kyPVNUnPR-nEnyZIEvsaei-JByjis7GyY?size=32x32&size_mode=5"
              alt="" />
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-4 col-lg-4" style="padding-top:15px;">
      <div class="first-img" data-toggle="modal" data-target="#myModal6" style="background-image: url(https://photos-2.dropbox.com/t/2/AADlNt3dk-6oGvfNX-iq-p6JuOq4T4I1Hg8llp9EtX3dyQ/12/393123092/jpeg/32x32/1/_/1/2/camera-old-antique-voigtlander.jpg/ENqWkJEDGJoPIAIoAg/FYpIO0S_A7kyPVNUnPR-nEnyZIEvsaei-JByjis7GyY?size=32x32&size_mode=5;"
        alt="" ></div>
      <div class="modal fade" id="myModal6" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <img class="second-img" src="https://photos-2.dropbox.com/t/2/AADlNt3dk-6oGvfNX-iq-p6JuOq4T4I1Hg8llp9EtX3dyQ/12/393123092/jpeg/32x32/1/_/1/2/camera-old-antique-voigtlander.jpg/ENqWkJEDGJoPIAIoAg/FYpIO0S_A7kyPVNUnPR-nEnyZIEvsaei-JByjis7GyY?size=32x32&size_mode=5"
              alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row third">
    <div class="col-md-4 col-sm-4 col-lg-4" style="padding-top:15px;">
      <div class="first-img" data-toggle="modal" data-target="#myModal7" style="background-image: url(https://photos-2.dropbox.com/t/2/AADlNt3dk-6oGvfNX-iq-p6JuOq4T4I1Hg8llp9EtX3dyQ/12/393123092/jpeg/32x32/1/_/1/2/camera-old-antique-voigtlander.jpg/ENqWkJEDGJoPIAIoAg/FYpIO0S_A7kyPVNUnPR-nEnyZIEvsaei-JByjis7GyY?size=32x32&size_mode=5;"
        alt="" ></div>
      <div class="modal fade" id="myModal7" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <img class="second-img" src="https://photos-2.dropbox.com/t/2/AADlNt3dk-6oGvfNX-iq-p6JuOq4T4I1Hg8llp9EtX3dyQ/12/393123092/jpeg/32x32/1/_/1/2/camera-old-antique-voigtlander.jpg/ENqWkJEDGJoPIAIoAg/FYpIO0S_A7kyPVNUnPR-nEnyZIEvsaei-JByjis7GyY?size=32x32&size_mode=5"
              alt="" />
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-4 col-lg-4" style="padding-top:15px;">
      <div class="first-img" data-toggle="modal" data-target="#myModal8" style="background-image: url(https://photos-2.dropbox.com/t/2/AADlNt3dk-6oGvfNX-iq-p6JuOq4T4I1Hg8llp9EtX3dyQ/12/393123092/jpeg/32x32/1/_/1/2/camera-old-antique-voigtlander.jpg/ENqWkJEDGJoPIAIoAg/FYpIO0S_A7kyPVNUnPR-nEnyZIEvsaei-JByjis7GyY?size=32x32&size_mode=5;"
        alt="" ></div>
      <div class="modal fade" id="myModal8" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <img class="second-img" src="https://photos-2.dropbox.com/t/2/AADlNt3dk-6oGvfNX-iq-p6JuOq4T4I1Hg8llp9EtX3dyQ/12/393123092/jpeg/32x32/1/_/1/2/camera-old-antique-voigtlander.jpg/ENqWkJEDGJoPIAIoAg/FYpIO0S_A7kyPVNUnPR-nEnyZIEvsaei-JByjis7GyY?size=32x32&size_mode=5"
              alt="" />
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-4 col-lg-4" style="padding-top:15px;">
      <div class="first-img" data-toggle="modal" data-target="#myModal9" style="background-image: url(https://photos-2.dropbox.com/t/2/AADlNt3dk-6oGvfNX-iq-p6JuOq4T4I1Hg8llp9EtX3dyQ/12/393123092/jpeg/32x32/1/_/1/2/camera-old-antique-voigtlander.jpg/ENqWkJEDGJoPIAIoAg/FYpIO0S_A7kyPVNUnPR-nEnyZIEvsaei-JByjis7GyY?size=32x32&size_mode=5;"
        alt="" ></div>
      <div class="modal fade" id="myModal9" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <img class="second-img" src="https://photos-2.dropbox.com/t/2/AADlNt3dk-6oGvfNX-iq-p6JuOq4T4I1Hg8llp9EtX3dyQ/12/393123092/jpeg/32x32/1/_/1/2/camera-old-antique-voigtlander.jpg/ENqWkJEDGJoPIAIoAg/FYpIO0S_A7kyPVNUnPR-nEnyZIEvsaei-JByjis7GyY?size=32x32&size_mode=5"
              alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row fourth">
    <div class="col-md-4 col-sm-4 col-lg-4" style="padding-top:15px;">
      <div class="first-img" data-toggle="modal" data-target="#myModal10" style="background-image: url(https://photos-2.dropbox.com/t/2/AADlNt3dk-6oGvfNX-iq-p6JuOq4T4I1Hg8llp9EtX3dyQ/12/393123092/jpeg/32x32/1/_/1/2/camera-old-antique-voigtlander.jpg/ENqWkJEDGJoPIAIoAg/FYpIO0S_A7kyPVNUnPR-nEnyZIEvsaei-JByjis7GyY?size=32x32&size_mode=5;"
        alt="" ></div>
      <div class="modal fade" id="myModal10" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <img class="second-img" src="https://photos-2.dropbox.com/t/2/AADlNt3dk-6oGvfNX-iq-p6JuOq4T4I1Hg8llp9EtX3dyQ/12/393123092/jpeg/32x32/1/_/1/2/camera-old-antique-voigtlander.jpg/ENqWkJEDGJoPIAIoAg/FYpIO0S_A7kyPVNUnPR-nEnyZIEvsaei-JByjis7GyY?size=32x32&size_mode=5"
              alt="" />
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-4 col-lg-4" style="padding-top:15px;">
      <div class="first-img" data-toggle="modal" data-target="#myModal11" style="background-image: url(https://photos-2.dropbox.com/t/2/AADlNt3dk-6oGvfNX-iq-p6JuOq4T4I1Hg8llp9EtX3dyQ/12/393123092/jpeg/32x32/1/_/1/2/camera-old-antique-voigtlander.jpg/ENqWkJEDGJoPIAIoAg/FYpIO0S_A7kyPVNUnPR-nEnyZIEvsaei-JByjis7GyY?size=32x32&size_mode=5;"
        alt="" ></div>
      <div class="modal fade" id="myModal11" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <img class="second-img" src="https://photos-2.dropbox.com/t/2/AADlNt3dk-6oGvfNX-iq-p6JuOq4T4I1Hg8llp9EtX3dyQ/12/393123092/jpeg/32x32/1/_/1/2/camera-old-antique-voigtlander.jpg/ENqWkJEDGJoPIAIoAg/FYpIO0S_A7kyPVNUnPR-nEnyZIEvsaei-JByjis7GyY?size=32x32&size_mode=5"
              alt="" />
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-4 col-lg-4" style="padding-top:15px;">
      <div class="first-img" data-toggle="modal" data-target="#myModal12" style="background-image: url(https://photos-2.dropbox.com/t/2/AADlNt3dk-6oGvfNX-iq-p6JuOq4T4I1Hg8llp9EtX3dyQ/12/393123092/jpeg/32x32/1/_/1/2/camera-old-antique-voigtlander.jpg/ENqWkJEDGJoPIAIoAg/FYpIO0S_A7kyPVNUnPR-nEnyZIEvsaei-JByjis7GyY?size=32x32&size_mode=5;"
        alt="" ></div>
      <div class="modal fade" id="myModal12" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <img class="second-img" src="https://photos-2.dropbox.com/t/2/AADlNt3dk-6oGvfNX-iq-p6JuOq4T4I1Hg8llp9EtX3dyQ/12/393123092/jpeg/32x32/1/_/1/2/camera-old-antique-voigtlander.jpg/ENqWkJEDGJoPIAIoAg/FYpIO0S_A7kyPVNUnPR-nEnyZIEvsaei-JByjis7GyY?size=32x32&size_mode=5"
              alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

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
