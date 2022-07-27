
        <div class="page-content bg-white">

            <!-- Banner  -->
            <div class="dz-bnr-inr dz-bnr-inr-sm overlay-black-middle text-center" style="background-image: url({{ asset('assets/images/bnr/bnr1.jpg') }});">
                <div class="container">
                    <div class="dz-bnr-inr-entry">
                        <h1>Services (Our Services)</h1>
                        <!-- Breadcrumb Row -->
                        <nav aria-label="breadcrumb" class="breadcrumb-row">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item">Services</li>
                                {{-- <li class="breadcrumb-item active" aria-current="page">Shop grid Sidebar</li> --}}
                            </ul>
                        </nav>
                        <!-- Breadcrumb Row End -->
                    </div>
                </div>
            </div>
            <!-- Banner End -->
            <section class="content-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 m-b30">
                            <aside class="sticky-top">
                                <div class="widget">
                                    <div class="widget-title">
                                        <h5 class="title">Filter by category</h5>
                                    </div>
                                    <div class="product-brand">
                                        <div class="form-check search-content">
                                            <input class="form-check-input" type="checkbox" value="" id="productCheckBox">
                                            <label class="form-check-label" for="productCheckBox">
											Casual shirts
										</label>
                                        </div>
                                        <div class="form-check search-content">
                                            <input class="form-check-input" type="checkbox" value="" id="productCheckBox1">
                                            <label class="form-check-label" for="productCheckBox1">
											Leather bags
										</label>
                                        </div>
                                        <div class="form-check search-content">
                                            <input class="form-check-input" type="checkbox" value="" id="productCheckBox2">
                                            <label class="form-check-label" for="productCheckBox2">
											Men's shorts
										</label>
                                        </div>
                                        <div class="form-check search-content">
                                            <input class="form-check-input" type="checkbox" value="" id="productCheckBox3">
                                            <label class="form-check-label" for="productCheckBox3">
											Polo t-shirts
										</label>
                                        </div>
                                        <div class="form-check search-content">
                                            <input class="form-check-input" type="checkbox" value="" id="productCheckBox4">
                                            <label class="form-check-label" for="productCheckBox4">
											Short skirts
										</label>
                                        </div>
                                        <div class="form-check search-content">
                                            <input class="form-check-input" type="checkbox" value="" id="productCheckBox5">
                                            <label class="form-check-label" for="productCheckBox5">
											Winter jackets
										</label>
                                        </div>
                                    </div>
                                </div>

                            </aside>
                        </div>
                        <div class="col-xl-9 col-lg-8 ">
                            <div class="row">
                                @foreach ($services  as $service)
                                    <div class="col-xl-4 col-sm-6 m-b30" >
                                        <div class=" item-box m-b30" style="height: 400px;">
                                            <div class="item-img">
                                                <img src="{{ asset('assets/images/services') }}/{{ $service->image }}" style="height: 200px;" alt="{{ $service->name }}">
                                                <span class="badge bg-danger">{{ $service->category->name }}</span>
                                            </div>
                                            <div class="position-relative item-info text-center" style="height: 200px;">
                                                <h4 class="item-title"><a href="{{ route('services.details', ['slug' => $service->slug]) }}">{{ $service->name }}</a></h4>
                                                <p>{{ str_limit(strip_tags($service->description),100,'...') }} </p>
                                                <div class="position-absolute top-100 start-50 translate-middle dz-bottom">
                                                    <a href="{{ route('services.details', ['slug' => $service->slug]) }}" class="btn-link">READ MORE<i class="fas fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="d-flex aligns-items-center justify-content-center">
                                    <nav aria-label="Blog Pagination">
                                        {{ $services->links('pagination::bootstrap-4') }}
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
