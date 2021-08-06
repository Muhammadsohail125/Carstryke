
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://netteria.net/myscript/jquery/html5videopopup/css/videopopup.css">
    <link href="assets/css/style.css" rel="stylesheet" >
    <link href="assets/slick-slider/slick/slick-theme.css" rel="stylesheet">
    <link href="assets/slick-slider/slick/slick.css" rel="stylesheet">
    @stack('custom_styles')
    <title>Car Stryke</title>
  </head>
  <body>
    <!-- HEADER -->
    @include('layouts.backend.components.header')
    <!-- HEADER -->
    <!-- Main Content -->
    <main class="main-content">
      <!-- Banner -->
        @yield('content')
        <!-- partners -->
      </main>
      <!-- Main Content -->

      <!-- footer -->
      <footer class="lastsec">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <div class="footer1">
                <img src="assets/images/foot logo.png">
                <p>here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                <ul>
                  <li><i class="fa fa-facebook" aria-hidden="true"></i></li>
                  <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
                  <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
                  <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
                </ul>
                <form class="example" action="action_page.php">
                  <input type="text" placeholder="Enter Email Address" name="search">
                  <button type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                </form>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="footer2">
                <h3>Usefull Links</h3>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Products</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Success Stories</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="footer2">
                <h3>Usefull Links</h3>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Products</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Success Stories</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="footer2">
                <h3>Usefull Links</h3>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Products</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Success Stories</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div class="copy">
                  <p>© 2021.Carstryke All Right Reserved</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="privacy">
                  <p>Privacy & Policy</p>
                  <p>Terms Of Service</p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </footer>

      <!-- footer -->

      <!-- Scripts -->
      @stack('custom_scripts')
      <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://netteria.net/myscript/jquery/html5videopopup/js/videopopup.js"></script>
      <script src="assets/slick-slider/slick/slick.min.js"></script>
      <script src="assets/js/custom.js"></script>
      <!-- Scripts -->
    </body>
  </html>
