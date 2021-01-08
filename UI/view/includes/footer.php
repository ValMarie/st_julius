<!-- Footers -->
<!-- footer signup -->
<footer class="page-footer font-small pt-4">
  <h5 class=' flex-center mb-3'>Sign up for our newsletter </h5>
  <!-- Footer Search -->
  <div class="container">

    <!--Grid row-->
    <div class="row">

      <!--Grid column-->
      <div class="col-md-6 ml-auto">

        <form class="input-group">
          <input type="text" class="form-control form-control-sm" id='email' placeholder="Your email" aria-label="Your email" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-sm btn-outline-white  my-0" type="button">Sign up</button>
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
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-5 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mb-2">Footer</h5>
        <p>Here you can use rows and columns to organize your footer content.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit amet numquam iure provident voluptate
          esse
          quasi, veritatis totam voluptas nostrum.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mb-2">Links</h5>

        <ul class="list-unstyled">
          <li>
              <a href="./index.php!">Home</a>
          </li>
          <li>
              <a href="./about.php!">About Us</a>
          </li>
          <li>
              <a href="#!">Community</a>
          </li>
          <li>
              <a href="./projects.php!">Projects</a>
          </li>
          <li>
              <a href="./Reg_form.php!">Membership</a>
          </li>
          <li>
              <a href="#!"> Services</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-5 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Contact details -->
        <h5 class="font-weight-bold text-uppercase mb-2 ">Contact</h5>

        <ul class="list-unstyled">
          <li>
              <i class="fas fa-home mr-3"></i> Orudu Junction, Opeilu Road, Agbado
          </li>
          <li>
              <i class="fas fa-mail mr-3"></i> P. O. Box 173, Ifo, Ogun State, Nigeria
          </li>
          <li>
              <i class="fas fa-envelope mr-3"></i> stjuliusagbado@gmail.com
          </li>
          <li>
              <i class="fas fa-phone mr-3"></i> + 234 706 155 7070
          </li>
          <li>
              <i class="fas fa-facebook mr-3"></i> St Julius Agbado
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
<div class="footer-copyright white-text text-center py-2">All rights reserved © 2020 Copyright:
  <a href="#"> St. Julius Catholic Church Agbado.</a>
</div>
<!-- Copyright -->

<!-- Footers-->

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.1/js/mdb.min.js"></script>
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
        } else {
          $('nav').css({
            backgroundColor: 'transparent',
            boxShadow:  "none"
          });
          $(".nav-link").css({
            color: '#fff'
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