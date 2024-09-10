<section class="landing-page-cover" x-data="initCover()" id="homeSection">
    <div style="background-image: url({{ asset('landing-page/template-imgs/cover-curves.svg') }})" class="curves"></div>
    <!-- Slides -->
    <div class="owl-carousel owl-theme">
        <!-- Slide 1 -->
        <div class="slide-container one" 
            style="background-image: url({{ asset('landing-page/template-imgs/jar-go-bella-wellness_slide_two.jpg') }})">
            <div class="container h-full !p-0">
                <div class="slide h-full flex-col md:flex-row md:space-y-0 !space-x-0 md:!space-x-24 text-center md:text-left">
                    <div class="w-full md:w-1/2 px-6 md:p-0">
                        <h1 class="mb-7 md:mb-7 !text-primary">
                            Power Your Lifestyle with Go Bella Wellness
                        </h1>
                        <p class="mb-7 md:mb-7 !text-dark">
                            Say goodbye to sugar crashes and hello to pure, sustained energy with Go Bella Wellness. Our supplement is crafted with natural ingredients, including essential vitamins, selenium, and L-theanine, to power your day. 
                        </p>
                        <a href="#" class="highlight-btn lg">
                            <i class="fas fa-shopping-cart text-primary"></i>
                            <span>Buy Now for $99</span>
                        </a>
                    </div>
                    <div class="w-full md:w-1/2 mt-auto">
                        <img src="{{ asset('landing-page/template-imgs/jar-go-bella-wellness_slide_one_mobile.jpg') }}" alt="Go Bella Wellness" class="!block md:!hidden">
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="slide-container one" 
            style="background-image: url({{ asset('landing-page/template-imgs/jar-go-bella-wellness-2.jpg') }})">
            <div class="container !p-0 h-full">
                <div class="slide h-full flex-col md:flex-row md:space-y-0 !space-x-0 md:!space-x-24 text-center md:text-left">
                    <div class="w-full md:w-1/2 px-6 md:p-0">
                        <h1 class="mb-7 md:mb-7 !text-primary">
                            Orange Flavor, Natural Boost <br> Energize Your Life!
                        </h1>
                        <p class="mb-7 md:mb-7 !text-dark">
                            Discover the delicious way to boost your energy with Go Bella Wellness. Infused with a delightful orange flavor, our supplement is free from sugar and artificial additives.
                        </p>
                        <a href="#" class="highlight-btn lg">
                            <i class="fas fa-shopping-cart text-primary"></i>
                            <span>Buy Now for $99</span>
                        </a>
                    </div>
                    <div class="w-full md:w-1/2 mt-auto">
                        <img src="{{ asset('landing-page/template-imgs/jar-go-bella-wellness_slide_two_mobile.jpg') }}" alt="Go Bella Wellness" class="!block md:!hidden">
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="slide-container video">
            <video autoplay muted loop playsinline>
                <source src="{{ asset('landing-page/template-imgs/video/7241750-uhd_3840_2160_24fps.mp4') }}" type="video/mp4">
            </video>
            <div class="gradient" style="background-image: url({{ asset('landing-page/template-imgs/jar-go-bella-wellness-gradient-bg.png') }})">

            </div>
            <div class="container">
                <div class="slide flex flex-col md:flex-row space-y-7 md:space-y-0 md:space-x-24">
                    <div class="w-full md:w-1/2">
                        <h1 class="mb-7 md:mb-7">
                            Vitamin-Pack <br> For a Life Full of Energy
                        </h1>
                        <p class="mb-7 md:mb-7">
                            Go Bella Wellness brings you a potent blend of vitamins, selenium, and L-theanine in a tasty, orange-flavored supplement. Specially formulated to support your active lifestyle, it offers a healthy, sugar-free way to stay energized and focused. 
                        </p>
                        <a href="#" class="highlight-btn lg">
                            <i class="fas fa-shopping-cart text-primary"></i>
                            <span>Buy Now for $99</span>
                        </a>
                    </div>
                    <div class="w-full md:w-1/2">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Thumbs -->
    <div class="thumbs hidden md:flex">
        <div class="container">
            <ul>
                <li>
                    <i class="fa fa-caret-up"></i>
                    <p class="font-bold">
                        Power Your Lifestyle
                    </p>
                    <small>
                        Say goodbye to sugar crashes
                    </small>
                </li>
                <li>
                    <i class="fa fa-caret-up"></i>
                    <p class="font-bold">
                        Orange Flavor, Natural Boost
                    </p>
                    <small>
                        Delicious way to boost your energy
                    </small>
                </li>
                <li>
                    <i class="fa fa-caret-up"></i>
                    <p class="font-bold">
                        Vitamin-Pack For a Life Full of Energy
                    </p>
                    <small>
                        Potent blend of vitamins
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
                    autoplay: false,
                    autoplayTimeout: 5000,
                    autoplayHoverPause: false,
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