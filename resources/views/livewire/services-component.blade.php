<div class="page-content bg-white">

    <!-- Banner  -->
    <div class="dz-bnr-inr dz-bnr-inr-sm overlay-black-middle text-center" style="background-image: url({{ asset('assets/images/bnr/bnr1.jpg') }});">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Sectors(The Sectors That We Specialise In)</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sectors</li>
                    </ul>
                </nav>
                <!-- Breadcrumb Row End -->
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Services -->
    <section class="content-inner bg-gray">
        <div class="container">
            <div class="row">
                @foreach ($sectors as $sector)
                    <div class="col-lg-4 col-md-6 m-b30" style="height: 500px;">
                        <div class="content-box2 m-b30" style="height: 500px;">
                            <div class="dz-info">
                                <a href="{{ route('sectors.details', ['slug' => $sector->slug]) }}">
                                <h4 class="title">{{ $sector->name }}</h4>
                            </a>
                                <p>{{ str_limit(strip_tags($sector->description),100,'...') }} </p>
                            </div>
                            <div class="dz-media m-b30">
                                <img src="{{ asset('assets/images/sectors') }}/{{ $sector->image }}" style="height: 200px;" alt="{{ $sector->name }}">
                            </div>
                            <div class="dz-bottom">
                                <a href="{{ route('sectors.details', ['slug' => $sector->slug]) }}" class="btn-link">READ MORE<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex aligns-items-center justify-content-center">
                    <nav aria-label="Blog Pagination">
                        {{ $sectors->links('pagination::bootstrap-4') }}
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Subscribe -->
    <section class="section-full dz-subscribe style-1 bg-gray">
        <div class="container">
            <div class="subscribe-inner row align-items-center">
                <div class="col-lg-6">
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
