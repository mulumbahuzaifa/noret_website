<div class="page-content bg-white">

    <!-- Banner  -->
    <div class="dz-bnr-inr dz-bnr-inr-sm overlay-black-middle text-center" style="background-image: url({{ asset('assets/images/bnr/bnr1.jpg);') }}">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Sector Detailes</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sector Detailes</li>
                    </ul>
                </nav>
                <!-- Breadcrumb Row End -->
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Portfolio Details -->
    <section class="section-full content-inner-2 port-detail1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row m-b30 lightgallery">
                        <div class="col-12 m-sm-b15 m-b30">
                            <div class="dz-box style-4">
                                <div class="dz-media height-md">
                                    <img src="{{ asset('assets/images/sectors') }}/{{ $sector->image }}" alt="">
                                </div>
                                <span data-exthumbimage="{{ asset('assets/images/sectors') }}/{{ $sector->image }}" data-src="{{ asset('assets/images/sectors') }}/{{ $sector->image }}" class="view-btn lightimg" title=""><i class="fas fa-plus"></i></span>
                            </div>
                        </div>
                        {{-- <div class="col-sm-6 m-sm-b15 m-b30">
                            <div class="dz-box style-4">
                                <div class="dz-media height-sm">
                                    <img src="{{ asset('assets/images/portfolio/pic3.jpg') }}" alt="">
                                </div>
                                <span data-exthumbimage="{{ asset('assets/images/portfolio/pic3.jpg') }}" data-src="{{ asset('assets/images/portfolio/pic3.jpg') }}" class="view-btn lightimg" title=""><i class="fas fa-plus"></i></span>
                            </div>
                        </div>
                        <div class="col-sm-6 m-sm-b15 m-b30">
                            <div class="dz-box style-4">
                                <div class="dz-media height-sm">
                                    <img src="{{ asset('assets/images/portfolio/pic4.jpg') }}" alt="">
                                </div>
                                <span data-exthumbimage="{{ asset('assets/images/portfolio/pic4.jpg') }}" data-src="{{ asset('assets/images/portfolio/pic4.jpg') }}" class="view-btn lightimg" title=""><i class="fas fa-plus"></i></span>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-head">
                        <h6 class="sub-title letter-s5">YEAR 2022</h6>
                        <h3 class="title">{{ $sector->name }}</h3>
                    </div>

                    <div class="dz-content m-b30">
                        <p>{{ $sector->description }}</p>
                    </div>
                    <div class="row justify-content-center m-b15">
                        <div class="col-md-4 col-sm-6">
                            <div class="icon-bx-wraper left style-8 m-b30">
                                <div class="icon-bx-sm radius">
                                    <span class="icon-cell text-dark">
                                    <i class="fas fa-users-cog"></i>
                                </span>
                                </div>
                                <div class="icon-content">
                                    <h5 class="dz-title m-b0">ARCHITECT</h5>
                                    <p>Jimmy Smith</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="icon-bx-wraper left style-8 m-b30">
                                <div class="icon-bx-sm radius">
                                    <span class="icon-cell text-dark">
                                    <i class="fas fa-map-marker-alt"></i>
                                </span>
                                </div>
                                <div class="icon-content">
                                    <h5 class="dz-title m-b0">LOCATION</h5>
                                    <p>London, UK</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="icon-bx-wraper left style-8 m-b30">
                                <div class="icon-bx-sm radius">
                                    <span class="icon-cell text-dark">
                                    <i class="fas fa-ruler-combined"></i>
                                </span>
                                </div>
                                <div class="icon-content">
                                    <h5 class="dz-title m-b0">SIZE</h5>
                                    <p>1,200m<sup>2</sup></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <!-- Subscribe -->
    <section class="section-full dz-subscribe style-1">
        <div class="container">
            <div class="subscribe-inner row align-items-center">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="title-head">
                        <i class="fas fa-envelope-open-text"></i>
                        <h3 class="title text-white">SIGN UP TO GET LATEST UPDATES</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form class="dzSubscribe" action="script/mailchamp.php" method="post">
                        <div class="dzSubscribeMsg"></div>
                        <div class="form-group">
                            <div class="input-group">
                                <input name="dzEmail" required="required" type="email" class="form-control" placeholder="Email Address...">
                                <div class="input-group-addon">
                                    <button name="submit" value="Submit" type="submit" class="btn btn-primary"><i class="fas fa-envelope"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
