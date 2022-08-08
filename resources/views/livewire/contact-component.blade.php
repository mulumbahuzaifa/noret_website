<div class="page-content bg-white">

    <!-- Banner  -->
    <div class="dz-bnr-inr dz-bnr-inr-sm overlay-black-middle text-center" style="background-image: url({{ asset('assets/images/bnr/bnr1.jpg') }});">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Contact Us</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>

                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ul>
                </nav>
                <!-- Breadcrumb Row End -->
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <section class="content-inner-2 pt-0">
        <div class="map-iframe">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227748.3825624477!2d75.65046970649679!3d26.88544791796718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C+Rajasthan!5e0!3m2!1sen!2sin!4v1500819483219"
                style="border:0; width:100%; min-height:100%; margin-bottom: -8px;" allowfullscreen></iframe>
        </div>
    </section>

    <section class="contact-wraper1" style="background-image: url({{ asset('assets/images/background/bg18.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-info">
                        <div class="section-head text-white style-1">
                            <h3 class="title text-white">Get In Touch</h3>
                            <p>If you are interested in working with us, please get in touch.</p>
                        </div>
                        <ul class="no-margin">
                            <li class="icon-bx-wraper text-white left m-b30">
                                <div class="icon-md">
                                    <span class="icon-cell">
                                    <i class="flaticon-placeholder-1"></i>
                                </span>
                                </div>
                                <div class="icon-content">
                                    <h4 class=" dz-tilte text-white">Our Address</h4>
                                    <p class="font-18">{{ $setting->address }}</p>
                                </div>
                            </li>
                            <li class="icon-bx-wraper text-white left m-b30">
                                <div class="icon-md">
                                    <span class="icon-cell">
                                    <i class="flaticon-call"></i>
                                </span>
                                </div>
                                <div class="icon-content">
                                    <h4 class=" dz-tilte text-white">Our Contacts</h4>
                                    <p class="font-18"><a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a><br />
                                        <a href="tel:{{ $setting->phone2 }}">{{ $setting->phone2 }}</a></p>
                                </div>
                            </li>
                            <li class="icon-bx-wraper text-white left m-b30">
                                <div class="icon-md">
                                    <span class="icon-cell">
                                    <i class="flaticon-message"></i>
                                </span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="dz-tilte text-white">Our Email</h4>
                                    <p class="font-18">
                                        <a
                                        href="mail:{{ $setting->email }}"
                                        >{{ $setting->email }}</a
                                      >
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 m-b40">
                    <div class="contact-area1 m-r20 m-md-r0">
                        <div class="section-head style-1">
                            <h6 class="sub-title text-primary">CONTACT US</h6>
                            <h3 class="title m-b20">Get In Touch With Us</h3>
                        </div>
                        <form class="dz-form" wire:submit.prevent="sendMessage">
                            <div class="input-group">
                                <input required type="text" class="form-control" name="dzName" placeholder="Full Name"  wire:model="name">
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="input-group">
                                <input required type="email" class="form-control" name="dzEmail" placeholder="Email Adress"  wire:model="email">
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="input-group">
                                <input required type="text" class="form-control" name="dzPhoneNumber" placeholder="Phone No."  wire:model="phone">
                                @error('phone')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="input-group">
                                <textarea required name="dzMessage" rows="5" class="form-control"  wire:model="message" placeholder="Message" ></textarea>
                                @error('message')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            </div>

                            <div>
                                <button name="submit" type="submit" class="btn w-100 btn-primary btn-border">CONTACT US</button>
                            </div>
                        </form>
                        @if (Session::has('message'))
                            <div class="alert alert-success m-t20" role="alert">{{ Session::get('message') }}</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
