<x-guest-layout>
    <!-- Header -->
    <header class="landing-page-header">
        <div class="container flex items-center justify-between">
            <a href="#" class="font-bold text-xl">
                GO Bella Logo
            </a>

            <nav class="landing-page-nav">
                <a href="#">
                    Home
                </a>
                <a href="#">
                    About
                </a>
                <a href="#">
                    Features
                </a>
                <a href="#">
                    Testimonials
                </a>
                <a href="#">
                    Contact
                </a>
            </nav>
        </div>
    </header>
    <!-- Social media icons -->
    <div class="landing-page-social-media">
        <span>Follow us on:</span>
        <a href="#" class="social-icon">
            <i class="fab fa-facebook"></i>
        </a>
        <a href="#" class="social-icon">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="social-icon">
            <i class="fab fa-instagram"></i>
        </a>
    </div>
    <!-- Cookies banner -->
    <div class="cookies-banner">
        <p class="mb-4">
            We use cookies to ensure you get the best experience on our website. <a href="#">Learn more</a>
        </p>
        <div class="flex items-center space-x-4">
            <button class="underline">
                Accept
            </button>
            <button class="underline">
                Decline
            </button>
        </div>
    </div>
    <!-- Landing page cover -->
    <section class="landing-page-cover" x-data="{
        owlCarousel(){
            const owl = $('.owl-carousel');
            const thumbs = $('.thumbs ul li');
            owl.owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                dots: false,
                autoplay:true,
                autoplayTimeout:5000,
                autoplayHoverPause: true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                },
                onInitialized: function(){
                    thumbs.first().addClass('active');
                },
                onChanged: function(){
                    <!-- Vamos a buscar el elemento activo -->
                    const active = thumbs.filter('.active');
                    <!-- Si el elemento activo es el ultimo, entonces vamos a activar el primero -->
                    if(active.index() === thumbs.length - 1){
                        thumbs.removeClass('active');
                        thumbs.first().addClass('active');
                    }else{
                        <!-- Si no, entonces vamos a activar el siguiente elemento -->
                        active.next().addClass('active');
                        active.removeClass('active');
                    }
                }
            });

            thumbs.on('click', function(){
                const index = $(this).index();
                owl.trigger('to.owl.carousel', index);
                thumbs.removeClass('active');
                $(this).addClass('active');
            });
        }
    }" x-init="owlCarousel()">
        <div style="background-image: url({{ asset('landing-page/template-imgs/cover-curves.svg') }})" class="curves"></div>
        <div class="owl-carousel owl-theme">
            <div>
                <div class="container">
                    <div class="slide">
                        <div class="w-1/2">
                            <h2 class="underline decoration-wavy">
                                Welcome to GO Bella - Slide 1
                            </h2>
                            <h1>
                                This is a sample landing page for a product
                            </h1>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, voluptates.
                            </p>
                            <a href="#" class="primary-btn">
                                <i class="fas fa-shopping-cart text-yellow-300"></i>
                                <span>Buy Now for $99</span>
                            </a>
                        </div>
                        <div class="w-1/2">
                            <div class="square-image" 
                                style="
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
                            <h2 class="underline decoration-wavy">
                                Welcome to GO Bella - Slide 2
                            </h2>
                            <h1>
                                This is a sample landing page for a product
                            </h1>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, voluptates.
                            </p>
                            <a href="#" class="primary-btn">
                                <i class="fas fa-shopping-cart text-yellow-300"></i>
                                <span>Buy Now for $99</span>
                            </a>
                        </div>
                        <div class="w-1/2">
                            <div class="square-image" 
                                style="
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
                            <h2 class="underline decoration-wavy">
                                Welcome to GO Bella - Slide 3
                            </h2>
                            <h1>
                                This is a sample landing page for a product
                            </h1>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, voluptates.
                            </p>
                            <a href="#" class="primary-btn">
                                <i class="fas fa-shopping-cart text-yellow-300"></i>
                                <span>Buy Now for $99</span>
                            </a>
                        </div>
                        <div class="w-1/2">
                            <div class="square-image" 
                                style="
                                    background-image: url({{ asset('landing-page/template-imgs/pexels-anntarazevich-6268736.jpg') }});
                                    height: 500px;
                                ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <!-- MARQUEE -->
    <div x-data="{
        marquee(selector, speed) {
            const parentSelector = document.querySelector(selector);
            const clone = parentSelector.innerHTML;
            const firstElement = parentSelector.children[0];
            let i = 0;
            parentSelector.insertAdjacentHTML('beforeend', clone);
            parentSelector.insertAdjacentHTML('beforeend', clone);

            setInterval(function() {
                firstElement.style.marginLeft = `-${i}px`;
                if (i > firstElement.clientWidth) {
                    i = 0;
                }
                i = i + speed;
            }, 0);
        },
    }" x-init="marquee('.marquee', .2)">
        <div>
            <div class="marquee">
                <h2 class="text-7xl text-green-600 opacity-10 font-bold px-4 py-4">
                    Go Bell is the best product in the market. Get it now for $99
                </h2>
            </div>
        </div>
    </div>
    <!-- ABOUT US OR WHO I AM -->
    <section class="landing-page-about">
        <div class="container flex items-center space-x-20">
            <div class="w-1/2">
                <div class="square-image" 
                    style="
                        background-image: url({{ asset('landing-page/template-imgs/pexels-ifreestock-616833.jpg') }});
                        height: 500px;
                    ">
                </div>
            </div>
            <div class="w-1/2">
                <h2>
                    The best product in the market
                </h2>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt pariatur, tenetur vel, veniam nihil provident laboriosam inventore nam, id sit in quia possimus recusandae ut! Accusamus quis amet quae quia!
                </p>
            </div>
        </div>
    </section>
    <!-- Slogan -->
    <section class="landing-page-slogan" style="background-image: url('https://placehold.co/1500x600')">
        <div class="container text-center">
            <h2 class="slogan">
                Get it now for $99
            </h2>
            <h4>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, voluptates.
            </h4>
        </div>
    </section>
    <!-- Features or specs -->
    <section class="landing-page-specs">
        <div class="container"></div>
    </section>
    <!-- Testimonials -->
    <!-- Suscription form -->
    <!-- Footer -->
</x-guest-layout>