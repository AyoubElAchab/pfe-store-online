<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @yield('css')
    <link rel="stylesheet" href="{{asset('css/styleclient.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css')}}">
    <script src="https://kit.fontawesome.com/cce4337ed9.js" crossorigin="anonymous"></script>

</head>
<body> 

    <!-- Header -->
      <header>
        <!-- Top Header -->
        <div class="top-header">
          <div class="container">
            <ul class="header-links pull-left">
              <li><a href=""><i class="fa fa-phone"></i> +212-614-120-144</a></li>
              <li><a href=""><i class="fa fa-envelope-o"></i> mystor@email.com</a></li>
              <li><a href=""><i class="fa fa-map-marker"></i> RABAT - MOROCCO</a></li>
            </ul>
            <ul class="header-links pull-right">
              @if (Route::has('login'))
                  @auth
                    <li><a href="{{ url('/dashboard') }}"><i class="fa-solid fa-user"></i> dashboard</a></li>
                  @else
                    <li><a href="{{ route('login') }}"><i class="fa-solid fa-right-to-bracket"></i> Log In</a></li>
                    @if (Route::has('register'))
                      <li><a href="{{ route('register') }}"><i class="fa-solid fa-user-plus"></i> Sign Up</a></li>
                    @endif
                  @endauth
              @endif
              <li> <a href=""><i class="fa-solid fa-globe"></i> EN </a></li>
              <li><a href=""><i class="fa fa-dollar"></i> USD</a></li>
            </ul>
          </div>
        </div>
        <!-- /Top Header -->

        <!-- Main Header -->
          <div class="header">
            <!-- container -->
            <div class="container">
              <!-- row -->
              <div class="row">
                <!-- LOGO -->
                  <div class="col-md-3">
                    <div class="header-logo">
                      <a href="/" class="logo">
                        <img src="{{asset('img/logo.png')}}" alt="">
                      </a>
                    </div>
                  </div>
                <!-- /LOGO -->

                <!-- search bar -->
                  <div class="col-md-6">
                    <div class="header-search">
                      <form action="">
                        <select name="" class="input-select">
                          <option value="0">All Category</option>
                          <option value="1">Category 1</option>
                        </select>
                        <input class="input" type="text" placeholder="search here">
                        <button class="search-btn">Search</button>
                      </form>
                    </div>
                  </div>
                <!-- search bar -->

                <!-- Account -->
                  <div class="col-md-3 clearfix">
                    <div class="header-ctn">
                      <!-- Wishlist -->
                        <div>
                          <a href="" >
                            <i class="fa fa-heart-o"></i>
                            <span> your wishlist</span>
                            <div class="qty">2</div>
                          </a>
                        </div>
                      <!-- /Wishlist -->

                      <!-- Cart -->
                          <div class="dropdown">
                            <a href="/paniers">
                              <i class="fa fa-shopping-cart"></i>
                              <span>Your cart</span>
                              <div class="qty">{{$panierCount}}</div>
                            </a>
                          </div>
                      <!-- /Cart -->
                      <!-- Menu Toogle -->
                          <div class="menu-toggle">
                            <a href="">
                              <i class="fa fa-bars"></i>
                              <span>Menu</span>
                            </a>
                          </div>
                      <!-- /Menu Toogle -->
                    </div>
                  </div>
                <!-- /Account -->
              </div>
              <!-- /row -->
            </div>
            <!-- /container -->
          </div>
        <!-- /Main Haeder -->
      </header>
    <!-- /Header -->

    <!-- NAVIGATION -->
      <nav class="navigation">
        <div class="container">
          <div class="nav-ul">
            <ul class="nav-li nav-left">
              <li><a href="#">Category</a></li>
            </ul>
            <ul class=" nav-li nav-right">
              <li><a href="#">Home</a></li>
              <li><a href="#">Marks</a></li>
              <li><a href="#">Companies</a></li>
              <li><a href="#">Category</a></li>
              <li><a href="#">AboutUs</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Help</a></li>

            </ul>

          </div>
        </div>
      </nav>
    <!-- /NAVIGATION -->

    <!-- content -->
      <div class="container">
        <div class="row content">
          <div class="col-md-3">
            <div class="sidebar">
              @yield('sidebar')
            </div>
          </div>
          <div class="col-md-9 con">
            <div class="cards">
              <div class="row">
              
                @yield('cards')
              </div>
            </div>
          </div>
        </div>
      </div>
      
    <!-- /content -->

    <!-- FOOTER -->
      <footer class="footer-fo">
        <!-- top footer -->
          <div class="section">
            <div class="container">
              <div class="row">
                <div class="newsletter">
                  <ul class="newsletter-follow">
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-xs-6">
                  <div class="footer">
                    <h3 class="footer-title">About Us</h3>
                    <p class="par">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
                    <ul class="footer-links">
                      <li><a href=""><i class="fa fa-map-marker"></i> Hassan 2 Road - Rabat</a></li>
                      <li><a href=""><i class="fa fa-phone"></i> +212-614-120-144</a> </li>
                      <li><a href=""><i class="fa fa-envelope-o"></i>mystor@email.com</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-3 col-xs-6">
                  <div class="footer">
                    <h3 class="footer-title">Categories</h3>
                    <ul class="footer-links">
                      <li><a href="">Hot deals</a></li>
                      <li><a href="">Laptops</a></li>
                      <li><a href="#">Smartphones</a></li>
                      <li><a href="#">Cameras</a></li>
                      <li><a href="#">Accessories</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-3 col-xs-6">
                  <div class="footer">
                    <h3 class="footer-title">Information</h3>
                    <ul class="footer-links">
                      <li><a href="#">About Us</a></li>
                      <li><a href="#">Contact Us</a></li>
                      <li><a href="#">Privacy Policy</a></li>
                      <li><a href="#">Orders and Returns</a></li>
                      <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-3 col-xs-6">
                  <div class="footer">
                    <h3 class="footer-title">Service</h3>
                    <ul class="footer-links">
                      <li><a href="#">My Account</a></li>
                      <li><a href="#">View Cart</a></li>
                      <li><a href="#">Wishlist</a></li>
                      <li><a href="#">Track My Order</a></li>
                      <li><a href="#">Help</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- /top footer -->
        <!-- bottom -->
          <div class="bottom-footer section">
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-center">
                  <ul class="footer-payments">
                    <li><a href=""><i class="fa fa-cc-visa"></i></a></li>
                    <li><a href=""><i class="fa fa-credit-card"></i></a></li>
                    <li><a href=""><i class="fa fa-cc-paypal"></i></a> </li>
                    <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                    <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                    <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>

                  </ul>
                  <span class="copyright">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a class="copy" href="https://colorlib.com" target="_blank">stor name</a>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  </span>
                </div>
              </div>
            </div>
          </div>
        <!-- /bottom -->
      </footer>
    <!--/FOOTER -->

</body>
</html>