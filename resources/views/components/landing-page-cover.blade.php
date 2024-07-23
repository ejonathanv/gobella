<section class="landing-page-cover" x-data="initCover()">
    <div style="background-image: url({{ asset('landing-page/template-imgs/cover-curves.svg') }})" class="curves"></div>
    <!-- Slides -->
    <div class="owl-carousel owl-theme">
        <div>
            <div class="container">
                <div class="slide">
                    <div class="w-1/2">
                        <h2>
                            Welcome to GO Bella - Slide 1
                        </h2>
                        <h1>
                            This is a sample landing page for a product
                        </h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, voluptates.
                        </p>
                        <a href="#" class="primary-btn lg">
                            <i class="fas fa-shopping-cart text-yellow-300"></i>
                            <span>Buy Now for $99</span>
                        </a>
                    </div>
                    <div class="w-1/2">
                        <div class="square-image" style="
                                    background-image: url({{ asset('landing-page/template-imgs/pexels-anntarazevich-6268736.jpg') }});
                                    height: 500px;
                                ">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="container">
                <div class="slide">
                    <div class="w-1/2">
                        <h2>
                            Welcome to GO Bella - Slide 2
                        </h2>
                        <h1>
                            This is a sample landing page for a product
                        </h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, voluptates.
                        </p>
                        <a href="#" class="primary-btn lg">
                            <i class="fas fa-shopping-cart text-yellow-300"></i>
                            <span>Buy Now for $99</span>
                        </a>
                    </div>
                    <div class="w-1/2">
                        <div class="square-image" style="
                                    background-image: url({{ asset('landing-page/template-imgs/pexels-anntarazevich-6268736.jpg') }});
                                    height: 500px;
                                ">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="container">
                <div class="slide">
                    <div class="w-1/2">
                        <h2>
                            Welcome to GO Bella - Slide 3
                        </h2>
                        <h1>
                            This is a sample landing page for a product
                        </h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, voluptates.
                        </p>
                        <a href="#" class="primary-btn lg">
                            <i class="fas fa-shopping-cart text-yellow-300"></i>
                            <span>Buy Now for $99</span>
                        </a>
                    </div>
                    <div class="w-1/2">
                        <div class="square-image" style="
                                    background-image: url({{ asset('landing-page/template-imgs/pexels-anntarazevich-6268736.jpg') }});
                                    height: 500px;
                                ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Thumbs -->
    <div class="thumbs">
        <div class="container">
            <ul>
                <li>
                    <i class="fa fa-caret-up"></i>
                    <p class="font-bold">Welcome to GO Bella - Slide 1</p>
                    <small>
                        This is a sample landing page for a product
                    </small>
                </li>
                <li>
                    <i class="fa fa-caret-up"></i>
                    <p class="font-bold">The best product in the market - Slide 2</p>
                    <small>
                        Lorem ipsum dolor sit amet, consectetur.
                    </small>
                </li>
                <li>
                    <i class="fa fa-caret-up"></i>
                    <p class="font-bold">Get it now for $99 - Slide 3</p>
                    <small>
                        Lorem ipsum dolor sit amet, consectetur.
                    </small>
                </li>
            </ul>
        </div>
    </div>
</section>

<script>
    function initCover() {
        return {
            owlCarousel() {
                const owl = $('.owl-carousel');
                const thumbs = $('.thumbs ul li');
                owl.owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: false,
                    dots: false,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    autoplayHoverPause: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 1
                        },
                        1000: {
                            items: 1
                        }
                    },
                    onInitialized: function() {
                        thumbs.first().addClass('active');
                    },
                    onChanged: function() {
                        const active = thumbs.filter('.active');
                        if (active.index() === thumbs.length - 1) {
                            thumbs.removeClass('active');
                            thumbs.first().addClass('active');
                        } else {
                            active.next().addClass('active');
                            active.removeClass('active');
                        }
                    }
                });

                thumbs.on('click', function() {
                    const index = $(this).index();
                    owl.trigger('to.owl.carousel', index);
                    thumbs.removeClass('active');
                    $(this).addClass('active');
                });
            },
            init() {
                this.owlCarousel();
            }
        }
    }
</script>