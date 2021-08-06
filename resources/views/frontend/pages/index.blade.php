@extends('layouts.backend.master')

@section('content')
<section class="banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 m-auto">
          <div class="content">
            <h2 class="hd">What is Lorem Ipsum</h2>
            <h2 class="sec-heading">Where does it come from</h2>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered</p>
            <form action="">
              <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-3 p-0">
                  <div class="form-group">
                    <input type="text" class="form-control bor-rad" placeholder="Car Make Or Model">
                  </div>
                </div>
                <div class="col-lg-2 p-0">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>All States</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="col-lg-2 p-0">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Price Range</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="col-lg-2 p-0">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Radius Mile</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="col-lg-1 p-0">
                  <button><i class="fas fa-search"></i></button>
                </div>
                <div class="col-lg-1"></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Banner -->
  <!-- New Vehicle Slider -->
  <section class="new-vehicle">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div id="new_vehicle">
            <div class="item">
              <div class="box">
                <h2 class="hd">I MANAGE NEW VEHICLES</h2>
                <p>There are many variations of passages of Lorem Ipsum</p>
                <a href="#" class="btn btn-business">Learn More</a>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <h2 class="hd">I MANAGE NEW VEHICLES</h2>
                <p>There are many variations of passages of Lorem Ipsum</p>
                <a href="#" class="btn btn-business">Learn More</a>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <h2 class="hd">I MANAGE NEW VEHICLES</h2>
                <p>There are many variations of passages of Lorem Ipsum</p>
                <a href="#" class="btn btn-business">Learn More</a>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <h2 class="hd">I MANAGE NEW VEHICLES</h2>
                <p>There are many variations of passages of Lorem Ipsum</p>
                <a href="#" class="btn btn-business">Learn More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- New Vehicle Slider -->
  <!-- full -->
  <section class="full">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="left">
            <h2 class="hd">Where does it <span>come</span> from</h2>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
            <form class="example" action="action_page.php">
              <input type="text" placeholder="Type Something" name="search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </div>


        <div class="col-lg-6">
          <div class="right">
            <h2 class="hd">Where does it <span>come</span> from</h2>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
            <a href="#" class="btn btn-business">Get An Offer</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- full -->
  <!-- About -->
  @component('frontend.components.aboutComponent')

  @endcomponent
  <!-- About -->

  <!-- wrong -->
  <section class="wrong">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="smile">
            <h3 class="hd">What is Lorem Ipsum</h3>
            <h2 class="sec-heading">Where does it come from</h2>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.words which don't look even slightly believable.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-7">
          <div class="firstimg">
            <img src="assets/images/Group 933.png" class="img-fluid" alt="">
          </div>
        </div>
        <div class="col-lg-5">
          <div class="wrong-right">

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- wrong -->
  <!-- video-section -->
  <section class="video-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h3 class="hd">What is Lorem Ipsum</h3>
          <h2 class="sec-heading">Where does it come from</h2>
          <p class="sec-para">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-7">
          <button id="playme" onclick="revealVideo('video','youtube')">
            <span class="img-box1"><img src="assets/images/video1.png" class="img-fluid" alt="">
              <img src="assets/images/Group 84.png" class="img-fluid play-icon" alt="">
            </span>


          </button>
          <div id="video" class="lightbox" onclick="hideVideo('video','youtube')">
            <div class="lightbox-container">
              <div class="lightbox-content">
                <button onclick="hideVideo('video','youtube')" class="lightbox-close">
                Close | ✕
                </button>
                <div class="video-container">
                  <iframe id="youtube" width="960" height="540" src="https://www.youtube.com/embed/WsptdUFthWI?showinfo=0" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <button id="playme" onclick="revealVideo('video','youtube')">
            <span class="img-box2"><img src="assets/images/video2.png" class="img-fluid" alt="">
              <img src="assets/images/Group 84.png" class="img-fluid play-icon" alt="">
            </span>

          </button>
          <div id="video" class="lightbox" onclick="hideVideo('video','youtube')">
            <div class="lightbox-container">
              <div class="lightbox-content">
                <button onclick="hideVideo('video','youtube')" class="lightbox-close">
                Close | ✕
                </button>
                <div class="video-container">
                  <iframe id="youtube" width="960" height="540" src="https://www.youtube.com/embed/WsptdUFthWI?showinfo=0" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
          <button id="playme" onclick="revealVideo('video','youtube')">
            <span class="img-box2"><img src="assets/images/video3.png" class="img-fluid" alt="">
              <img src="assets/images/Group 84.png" class="img-fluid play-icon" alt="">
            </span>


          </button>
          <div id="video" class="lightbox" onclick="hideVideo('video','youtube')">
            <div class="lightbox-container">
              <div class="lightbox-content">
                <button onclick="hideVideo('video','youtube')" class="lightbox-close">
                Close | ✕
                </button>
                <div class="video-container">
                  <iframe id="youtube" width="960" height="540" src="https://www.youtube.com/embed/WsptdUFthWI?showinfo=0" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 text-center mt-5">
          <a href="#" class="btn btn-business">Share Your Story</a>
        </div>
      </div>

    </div>

  </section>
  <!-- video-section -->

  <!-- imgtext -->
  <section class="imgtext">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 one">
          <div class="dollar ">
            <div class="d-flex align-items-center">
              <div class="flex-shrink-0">
                <img src="assets/images/car.png" class="img-fluid" alt="...">
              </div>
              <div class="flex-grow-1 ms-3">
                <h2>Lorem Epsum</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
              </div>
            </div>
          </div>
          <div class="dollar">
            <div class="d-flex align-items-center">
              <div class="flex-shrink-0">
                <img src="assets/images/driving-license.png" class="img-fluid" alt="...">
              </div>
              <div class="flex-grow-1 ms-3">
                <h2>Lorem Epsum</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
              </div>
            </div>
          </div>
          <div class="dollar">
            <div class="d-flex align-items-center">
              <div class="flex-shrink-0">
                <img src="assets/images/profit.png" class="img-fluid" alt="...">
              </div>
              <div class="flex-grow-1 ms-3">
                <h2>Lorem Epsum</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
              </div>
            </div>
          </div>

        </div>
        <div class="col-lg-6 two">
          <div class="dollar">
            <div class="d-flex align-items-center">
              <div class="flex-shrink-0">
                <img src="assets/images/learning.png" class="img-fluid" alt="...">
              </div>
              <div class="flex-grow-1 ms-3">
                <h2>Lorem Epsum</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
              </div>
            </div>
          </div>
          <div class="dollar">
            <div class="d-flex align-items-center">
              <div class="flex-shrink-0">
                <img src="assets/images/sales.png" class="img-fluid" alt="...">
              </div>
              <div class="flex-grow-1 ms-3">
                <h2>Lorem Epsum</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
              </div>
            </div>
          </div>
          <div class="dollar">
            <div class="d-flex align-items-center">
              <div class="flex-shrink-0">
                <img src="assets/images/steering-wheel.png" class="img-fluid" alt="...">
              </div>
              <div class="flex-grow-1 ms-3">
                <h2>Lorem Epsum</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </section>
  <!-- imgtext -->
  <!-- happy cilents -->
  <section class="cilents">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="happy ">
            <h2 class="sec-heading">happy cients</h2>
            <p>© 2021.Kingspetstore All Right Reserved© 2021.Kingspetstore All Right Reserved© 2021.Kingspetstore All Right Reserved</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="img-box"><img src="assets/images/man.png" class="img-fluid" alt=""></div>
        </div>
        <div class="col-lg-6">
          <div class="henry">
            <h2 >Henry Black</h2>
            <h5>Lorem Epsum</h5>
            <img src="assets/images/star.png" class="img-fluid" alt="">
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- happy cilents -->
  <!-- links -->
  <section class="links">
        <div class="container">
            <div class="row">
            <div class="col-lg-12">
            <h2 class="sec-heading">Browse by popular makes and model</h2>
            </div>
            <div class="col-lg-3">
            <div class="first">
                <h4 class="ulcontent">BROWSE BY POPULAR MAKES & MODELS</h4>
                <ul class="four">
                <li class="carname">Jeep Wrangler</li>
                <li class="carname">Tesla Model3</li>
                <li class="carname">Ford Mustang</li>
                <li class="carname">Dodge Charger</li>
                <li class="carname">Toyota 4Runner</li>
                <li class="carname">Dodge Challenger</li>
                <li class="carname">Ford Explorer</li>
                <li class="carname">Honda Civic Type R</li>
                <li class="carname">Chevrolet Camaro</li>
                <a class="butnmore" href="#">VIEW MORE</a>
                </ul>
            </div>
            </div>
            <div class="col-lg-3">
            <div class="first">
                <h4 class="ulcontent">BROWSE BY MAKES</h4>
                <ul class="four">
                <li class="carname">Used AcuraUsed Alfa</li>
                <li class="carname">RomeoUsed AudiUsed</li>
                <li class="carname">BMWUsed BuickUsed </li>
                <li class="carname">CadillacUsed ChevroletUsed </li>
                <li class="carname">ChryslerUsed Dodge</li>
                <a class="butnmore" href="#">VIEW MORE</a>
                </ul>
            </div>
            </div>
            <div class="col-lg-3">
            <div class="first">
                <h4 class="ulcontent">BROWSE BY STYLES</h4>
                <ul class="four">
                <li class="carname">Used SedansUsed SUVsUsed </li>
                <li class="carname">WagonsUsed CoupesUsed</li>
                <li class="carname">ConvertiblesUsed</li>
                <li class="carname">HatchbacksUsed TrucksUsed</li>
                <li class="carname">MiniVans</li>
                <a class="butnmore" href="#">VIEW MORE</a>
                </ul>
            </div>
            </div>
            <div class="col-lg-3">
            <div class="first">
                <h4 class="ulcontent">BROWSE BY LOCATIONS</h4>
                <ul class="four">
                <li class="carname">Used Cars In Atlanta GAUsed</li>
                <li class="carname">Cars In Austin TXUsed Cars In</li>
                <li class="carname">Baltimore MDUsed Cars In </li>
                <li class="carname">Boston MAUsed Cars In </li>
                <li class="carname">Brooklyn NYUsed Cars In </li>
                <li class="carname">Charlotte NCUsed Cars In Chicago</li>
                <a class="butnmore" href="#">VIEW MORE</a>
                </ul>
            </div>
            </div>
        </div>
        </div>
    </section>
    <!-- links -->
    <!-- partners -->
@component('frontend.components.partnerComponent')

@endcomponent
    <!-- partners -->
@endsection
