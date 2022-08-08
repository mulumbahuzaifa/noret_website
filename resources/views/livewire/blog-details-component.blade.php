<div class="page-content bg-white">

    <!-- Banner  -->
    <div class="dz-bnr-inr dz-bnr-inr-sm my-paroller overlay-black-middle text-center" id="my-element" data-paroller-factor="-0.5" data-paroller-direction="horizontal" style="background-image: url({{ asset('assets/images/bnr/bnr1.jpg') }});">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Blog Details</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                        <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
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
                <div class="col-xl-8 col-lg-8 m-b40">
                    <div class="dz-card style-1 blog-single">
                        <div class="dz-media">
                            <img src="{{ asset('assets/images/blog/large/pic1.jpg') }}" alt="">
                        </div>
                        <div class="dz-info">
                            <div class="dz-meta">
                                <ul>
                                    <li class="post-date"><i class="las la-calendar"></i> {{date('d F, Y', strtotime(   $blog->created_at )) }}</li>
                                    <li class="post-author"><a href="javascript:void(0);"><i class="las la-user"></i> By {{ $blog->user->name }}</a></li>
                                </ul>
                            </div>
                            <h2 class="dz-title">{{ $blog->name }}</h2>
                            <p>{{ $blog->description }}</p>
                            <ul class="wp-block-gallery columns-3">
                                <li class="blocks-gallery-item"><img alt="" src="{{ asset('assets/images/blogs') }}/{{ $blog->image }}"></li>
                            </ul>
                    
                      
                     
                        </div>
  
                    </div>

              

                    <!-- Comments -->
                    <div class="clear" id="comment-list">
                        <div class="comments-area" id="comments">
                            <div class="widget-title">
                                <h4 class="title">8 Comments</h4>
                                <div class="dz-separator style-1 bg-primary mb-0"></div>
                            </div>
                            <div class="clearfix">
                                <!-- comment list END -->
                                <ol class="comment-list">
                                    <li class="comment">
                                        <div class="comment-body">
                                            <div class="comment-author vcard">
                                                <img class="avatar photo" src="images/testimonials/pic1.jpg" alt="">
                                                <cite class="fn">Celesto Anderson</cite>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <div class="reply">
                                                <a href="javascript:void(0);" class="comment-reply-link"><i class="fa fa-reply"></i>Reply</a>
                                            </div>
                                        </div>
                                        <ol class="children">
                                            <li class="comment odd parent">
                                                <div class="comment-body">
                                                    <div class="comment-author vcard">
                                                        <img class="avatar photo" src="images/testimonials/pic2.jpg" alt="">
                                                        <cite class="fn">Jake Johnson</cite>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <div class="reply">
                                                        <a href="javascript:void(0);" class="comment-reply-link"><i class="fa fa-reply"></i>Reply</a>
                                                    </div>
                                                </div>
                                                <!-- list END -->
                                            </li>
                                        </ol>
                                        <!-- list END -->
                                    </li>
                                    <li class="comment">
                                        <div class="comment-body">
                                            <div class="comment-author vcard">
                                                <img class="avatar photo" src="images/testimonials/pic3.jpg" alt="">
                                                <cite class="fn">John Doe</cite>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <div class="reply">
                                                <a href="javascript:void(0);" class="comment-reply-link"><i class="fa fa-reply"></i>Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                                <!-- comment list END -->
                                <!-- Form -->
                                <div class="comment-respond" id="respond">
                                    <div class="widget-title">
                                        <h4 class="title" id="reply-title">Leave Your Comment
                                            <small><a style="display:none;" href="javascript:void(0);" id="cancel-comment-reply-link" rel="nofollow">Cancel reply</a></small>
                                        </h4>
                                        <div class="dz-separator style-1 bg-primary mb-0"></div>
                                    </div>
                                    <form class="comment-form" id="commentform" method="post">
                                        <p class="comment-form-author">
                                            <label for="author">Name <span class="required">*</span></label>
                                            <input type="text" name="Author" placeholder="Author" id="author">
                                        </p>
                                        <p class="comment-form-email">
                                            <label for="email">Email <span class="required">*</span></label>
                                            <input type="text" placeholder="Email" name="email" id="email">
                                        </p>
                                        <p class="comment-form-url">
                                            <label for="url">Website</label>
                                            <input type="text" value="url" placeholder="Website" name="url" id="url">
                                        </p>
                                        <p class="comment-form-comment">
                                            <label for="comment">Comment</label>
                                            <textarea rows="8" name="comment" placeholder="Comment" id="comment"></textarea>
                                        </p>
                                        <p class="form-submit">
                                            <button type="submit" class="btn btn-border shadow-primary btn-primary" id="submit">SUBMIT</button>
                                        </p>
                                    </form>
                                </div>
                                <!-- Form -->
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-4 col-lg-4">
                    <aside class="side-bar sticky-top right">
                        <div class="widget style-1">
                            <div class="widget-title">
                                <h4 class="title">Search</h4>
                            </div>
                            <div class="search-bx">
                                <form role="search" method="post">
                                    <div class="input-group">
                                        <input name="text" class="form-control" placeholder="Search Here..." type="text">
                                        <span class="input-group-btn">
                                        <button type="submit" class="btn btn-primary sharp radius-no"><i class="la la-search scale3"></i></button>
                                    </span>
                                    </div>
                                </form>
                            </div>
                        </div>

                 

                        <div class="widget style-1 widget_gallery gallery-grid-3">
                            <div class="widget-title">
                                <h4 class="title">Gallery</h4>
                            </div>
                            <ul id="lightgallery" class="lightgallery">
                                <li>
                                    <div class="dlab-post-thum dlab-img-effect">
                                        <span data-exthumbimage="{{ asset('assets/images/gallery/small/pic1.jpg') }}" data-src="{{ asset('assets/images/gallery/small/pic1.jpg') }}" class="lightimg" title="Image 1 Title will come here">
                                        <img src="{{ asset('assets/images/gallery/small/pic1.jpg') }}" alt="">
                                    </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="dlab-post-thum dlab-img-effect">
                                        <span data-exthumbimage="{{ asset('assets/images/gallery/small/pic2.jpg') }}" data-src="{{ asset('assets/images/gallery/small/pic2.jpg') }}" class="lightimg" title="Image 2 Title will come here">
                                        <img src="{{ asset('assets/images/gallery/small/pic2.jpg') }}" alt="">
                                    </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="dlab-post-thum dlab-img-effect">
                                        <span data-exthumbimage="{{ asset('assets/images/gallery/small/pic3.jpg') }}" data-src="{{ asset('assets/images/gallery/small/pic3.jpg') }}" class="lightimg" title="Image 3 Title will come here">
                                        <img src="{{ asset('assets/images/gallery/small/pic3.jpg') }}" alt="">
                                    </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="dlab-post-thum dlab-img-effect">
                                        <span data-exthumbimage="{{ asset('assets/images/gallery/small/pic4.jpg') }}" data-src="{{ asset('assets/images/gallery/small/pic4.jpg') }}" class="lightimg" title="Image 4 Title will come here">
                                        <img src="{{ asset('assets/images/gallery/small/pic4.jpg') }}" alt="">
                                    </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="dlab-post-thum dlab-img-effect">
                                        <span data-exthumbimage="{{ asset('assets/images/gallery/small/pic5.jpg') }}" data-src="{{ asset('assets/images/gallery/small/pic5.jpg') }}" class="lightimg" title="Image 5 Title will come here">
                                        <img src="{{ asset('assets/images/gallery/small/pic5.jpg') }}" alt="">
                                    </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="dlab-post-thum dlab-img-effect">
                                        <span data-exthumbimage="{{ asset('assets/images/gallery/small/pic6.jpg') }}" data-src="{{ asset('assets/images/gallery/small/pic6.jpg') }}" class="lightimg" title="Image 6 Title will come here">
                                        <img src="{{ asset('assets/images/gallery/small/pic6.jpg') }}" alt="">
                                    </span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="widget style-1 recent-posts-entry">
                            <div class="widget-title">
                                <h4 class="title">Recent Post</h4>
                            </div>
                            <div class="widget-post-bx">
                                @foreach ($l_blogs as $l_blog)
                                    <div class="widget-post clearfix">
                                        <div class="dz-media">
                                            <img src="{{ asset('assets/images/blogs') }}/{{ $l_blog->image }}" alt="{{ $l_blog->name }}">
                                        </div>
                                        <div class="dz-info">
                                            <div class="dz-meta">
                                                <ul>
                                                    <li class="post-date"> {{date('d F, Y', strtotime(   $l_blog->created_at )) }}</li>
                                                </ul>
                                            </div>
                                            <h6 class="title"><a href="{{ route('blog.details', ['slug' => $l_blog->slug]) }}">{{ $l_blog->name }}</a></h6>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

              

                    </aside>
                </div>
            </div>
        </div>
    </section>


</div>
