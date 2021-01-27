<!-- Footers -->
<!-- footer signup -->
    
<hr class="clearfix my-5 w-100"> 
<footer class="page-footer font-small pt-4">

  
  <!-- Footer Search -->
  <div class="container">

    <!--Grid row-->
    <div class="row">

      <!--Grid column-->
      <div class="col-md-6 mx-auto">
      <h5 > Sign up for our Newsletter </h5>
        <form class="input-group ">
          <input type="text" class="form-control form-control-sm" id='email' placeholder="Your email" aria-label="Your email" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-sm btn-outline-white  py-2 mx-2" type="button">Sign up</button>
          </div>
        </form>

      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->

  </div>
  <!-- Footer search -->

</footer>
<!-- footer signup -->

<!-- Footer Links -->

<footer class="page-footer font-small pt-4">
  <div class="container text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 mr-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase ">Mission</h5>
        <p class="text-white"> Our Mission is to build a Christian family of faith, 
          hope and love; and to become a light of the world and salt of the earth 
          through imitation of Christ, becoming instrument of peace and imitating 
          our patron Saint St. Julius.</p>
        
      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mb-2">Links</h5>

        <ul class="list-unstyled">
          <li>
              <a class="link" href="./index.php!">Home</a>
          </li>
          <li>
              <a class="link" href="./about.php!">About Us</a>
          </li>
          <li>
              <a class="link" href="#!">Community</a>
          </li>
          <li>
              <a class="link" href="./projects.php!">Projects</a>
          </li>
          <li>
              <a class="link" href="./Reg_form.php!">Membership</a>
          </li>
          <li>
              <a class="link" href="#!"> Services</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Contact details -->
        <h5 class="font-weight-bold text-uppercase mb-2 ">Contact</h5>

        <ul class="list-unstyled text-white">
          <li>
              <i class="fas fa-map-marker-alt mx-2"></i> Orudu Junction, Opeilu Road, Agbado
          </li>
          <li>
              <i class="fas fa-envelope mx-2"></i> P. O. Box 173, Ifo, Ogun State, Nigeria
          </li>
          <li>
              <i class="fas fa-at mx-2"></i> stjuliusagbado@gmail.com
          </li>
          <li>
              <i class="fas fa-phone mx-2"></i> + 234 706 155 7070
          </li>
          <li>
          <i class="fab fa-facebook mx-2"></i> St Julius Catholic Church, Agbado
          </li>
        </ul>
      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">
    </div>
    <!-- Grid row -->

  </div>
  </div>
</Footer>

<!-- Copyright -->
<footer class="footer-copyright font-small py-2">
  <div class="text-white text-center">All rights reserved © 2020 Copyright:
    <a class="link" href="#"> St. Julius Catholic Church Agbado.</a>
  </div>
</footer>
<!-- Copyright -->


<!-- <a href="#!"> -->
    <!-- <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)"> -->
      <!-- <div class="d-flex justify-content-center align-items-center h-100">
        <p class="text-white mb-0">Can you see me?</p>
      </div> -->
    <!-- </div> -->
    <!-- </a> -->


<!-- Footers-->



<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script  type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>

<script>
  $(document).ready(function() {
    $(".nav-link").css({
       color: '#fff'
     });
   

    var scroll_start = 0;
    var startchange = $('#startchange');
    var offset = startchange.offset();
    if (startchange.length) {
      $(document).scroll(function() {
        scroll_start = $(this).scrollTop();
        
        if (scroll_start > offset.top) {
          $("nav").css({
            backgroundColor: '#fff',
          });
          $("nav").addClass('navbar')
          $(".nav-link").css({
            color: '#dd9d48'
          });
          $(".brand-name").css ({
            float: "left"
          });
        } else {
          $('nav').css({
            backgroundColor: 'transparent',
            boxShadow:  "none"
          });
          $(".nav-link").css({
            color: '#fff'
          });
          $(".brand-name").css ({
            float: "none"
          });

          if (document.URL.endsWith("index.php")) {
            $(".nav-link").css({
              color: '#fff'
            });
          } else {
            $(".nav-link").css({
              color: '#dd9d48'
            });
          }

        }
      });
    }
  });
</script>

</body>

</html>