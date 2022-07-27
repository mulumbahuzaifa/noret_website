<header class="site-header mo-left header-transparent style-1">
           <!-- Top Bar -->
           <div class="top-bar text-white">
            <div class="container">
                <div class="dz-topbar-inner d-flex justify-content-between align-items-center">
                    <div class="dz-topbar-left">
                        <p>Mon 8am - 7pm - Sunday 10am - 4pm</p>
                    </div>
                    <div class="dz-topbar-right">
                        <ul>
                            <li><i class="fas fa-phone-alt"></i> Phone line: (123) 456-7891</li>
                            <li><i class="fas fa-envelope"></i> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="aac3c4ccc5eacfd2cbc7dac6cf84c9c5c7">[email&#160;protected]</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    <!-- Main Header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar clearfix">
          <div class="container-fluid clearfix">
            <!-- Website Logo -->
            <div class="logo-header mostion ">
                <a href="/"
                  ><img src="{{ asset('assets/images/logo-white.png') }}" alt=""
                /></a>
              </div>

            <!-- Nav Toggle Button -->
            <button
              class="navbar-toggler collapsed navicon justify-content-end"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarNavDropdown"
              aria-controls="navbarNavDropdown"
              aria-expanded="false"
              aria-label="Toggle navigation"
             >
              <span></span>
              <span></span>
              <span></span>
            </button>
            <!-- Extra Nav -->
            <div class="extra-nav">
              <div class="extra-cell">
                <ul>
                  <li>
                    <a
                      class="search-link"
                      id="quik-search-btn"
                      href="javascript:void(0);"
                    >
                      <i class="fas fa-search"></i>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0);" class="menu-btn">
                      <span></span>
                      <span></span>
                      <span></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Extra Nav -->

            <div class="dz-quik-search">
              <form action="#">
                <input
                  name="search"
                  value=""
                  type="text"
                  class="form-control"
                  placeholder="Enter Your Keyword ..."
                />
                <span id="quik-search-remove"><i class="ti-close"></i></span>
              </form>
            </div>

            <div class="full-sidenav">
              <div class="flsbg">
                <span class="bg-wrap">
                  <span></span>
                </span>
                <span class="bg-wrap">
                  <span></span>
                </span>
                <span class="bg-wrap">
                  <span></span>
                </span>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="service-list">
                      <ul>
                        <li>
                          <i class="la la-phone"></i>
                          <span>Make A Call</span>
                          <h4 class="title">+1800-001-658</h4>
                        </li>
                        <li>
                          <i class="la la-clock-o"></i>
                          <span>Email Address</span>
                          <h4 class="title">
                            <a
                              href="/cdn-cgi/l/email-protection"
                              class="__cf_email__"
                              data-cfemail="de89bbbcadb7aabb9eb7b0b8b1f0bdb1b3"
                              >[email&#160;protected]</a
                            >
                          </h4>
                        </li>
                        <li>
                          <i class="la la-map"></i>
                          <span>Location</span>
                          <h4 class="title">
                            Envato Pty Ltd 13/2 Permanent <br />
                            St Melbourne
                          </h4>
                        </li>
                      </ul>
                    </div>
                    <div class="social-menu">
                      <ul>
                        <li>
                          <a
                            class="fab fa-facebook-f"
                            href="https://www.facebook.com/"
                          ></a>
                        </li>
                        <li>
                          <a
                            class="fab fa-twitter"
                            href="https://twitter.com/?lang=en"
                          ></a>
                        </li>
                        <li>
                          <a
                            class="fab fa-linkedin-in"
                            href="https://www.linkedin.com/"
                          ></a>
                        </li>
                        <li>
                          <a
                            class="fab fa-instagram"
                            href="https://www.instagram.com/?hl=en"
                          ></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <h4>About Us</h4>
                    <p>
                      Aliquam erat volutpat. Nunc erat massa, porttitor vel
                      egestas sit amet, tristique at massa. Donec posuere odio
                      neque, in ultricies lorem aliquet eu. Donec venenatis
                      libero a nulla placerat egestas.
                    </p>
                    <a href="about-us.html" class="btn btn-primary"
                      >READ MORE</a
                    >
                  </div>
                </div>
              </div>
            </div>

            <div
              class="header-nav navbar-collapse collapse justify-content-start"
              id="navbarNavDropdown"
             >
              <div class="logo-header logo-dark">
                <a href="/"><img src="{{ asset('assets/images/logo.png') }}" alt="" /></a>
              </div>
              <ul class="nav navbar-nav navbar navbar-left">
                <li class="nav-item">
                  <a href="/"><span>Home</span></a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('about') }}"><span>About us</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('services') }}"><span>Services</span></a>
                  </li>
                <li class="nav-item">
                  <a href="{{ route('sectors') }}"><span>Sectors</span></a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('blogs') }}"><span>Blog</span></a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('contact') }}"><span>Contact us</span></a>
                </li>
                @if (Route::has('login'))
                @auth
                @if (Auth::user()->utype === 'ADM')
                <li class="sub-menu-down"><a href="javascript:void(0);" ><span>My Account ({{ Auth::user()->name }})</span></a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a></li>
                        <form method="POST" id="logout-form" action="{{ route('logout') }}">
                            @csrf

                        </form>
                    </ul>
                </li>
                @else
                <li class="sub-menu-down"><a href="javascript:void(0);" ><span>My Account ({{ Auth::user()->name }})</span></a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a></li>
                        <form method="POST" id="logout-form" action="{{ route('logout') }}">
                            @csrf

                        </form>
                    </ul>
                </li>
                @endif
                @else
                <li class="sub-menu-down">
                    <a href="javascript:void(0);"><span>Login</span></a>
                    <ul class="sub-menu">

                      <li><a href="{{ route('login') }}">Login</a></li>
                      <li><a href="{{ route('register') }}">Register</a></li>
                    </ul>
                  </li>
                @endauth
                @endif
                {{-- <li class="sub-menu-down">
                  <a href="javascript:void(0);"><span>Shop</span></a>
                  <ul class="sub-menu">
                    <li><a href="shop-grid-3.html">Shop Grid 3</a></li>
                    <li>
                      <a href="shop-grid-sidebar.html">Shop Grid Sidebar</a>
                    </li>
                    <li>
                      <a href="product-details.html">Product Details</a>
                    </li>
                    <li><a href="shop-wishlist.html">Wishlist</a></li>
                    <li><a href="shop-checkout.html">Checkout</a></li>
                    <li><a href="shop-cart.html">Cart</a></li>
                    <li><a href="login.html">Login</a></li>
                  </ul>
                </li>
                <li class="sub-menu-down">
                  <a href="javascript:void(0);"><span>Blog</span></a>
                  <ul class="sub-menu">
                    <li><a href="blog-grid.html">Blog Grid</a></li>
                    <li>
                      <a href="blog-large-right-sidebar.html"
                        >Blog Right Sidebar</a
                      >
                    </li>
                    <li>
                      <a href="blog-list-sidebar.html">Blog List Sidebar</a>
                    </li>
                    <li>
                      <a href="blog-list-left-sidebar.html"
                        >Blog List Left Sidebar</a
                      >
                    </li>
                    <li>
                      <a href="blog-details-post-wide.html">Post Wide View</a>
                    </li>
                    <li><a href="blog-details.html">Blog Details</a></li>
                  </ul>
                </li> --}}

              </ul>
              <div class="dz-social-icon">
                <ul>
                  <li>
                    <a
                      class="fab fa-facebook-f"
                      href="https://www.facebook.com/"
                    ></a>
                  </li>
                  <li>
                    <a
                      class="fab fa-twitter"
                      href="https://twitter.com/?lang=en"
                    ></a>
                  </li>
                  <li>
                    <a
                      class="fab fa-linkedin-in"
                      href="https://www.linkedin.com/"
                    ></a>
                  </li>
                  <li>
                    <a
                      class="fab fa-instagram"
                      href="https://www.instagram.com/?hl=en"
                    ></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- Main Header End -->
  </header>
