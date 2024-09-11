<section class="landing-page-suscription-form flex-col lg:flex-row" id="contactSection">
    <div class="w-full md:w-full lg:w-5/12 xl:w-1/2 bg-primary bg-cover bg-center relative p-48 sm:p-72 lg:p-0" style="background-image: url({{ asset('landing-page/template-imgs/pexels-freestocks-370014.jpg') }})">
    </div>
    <div class="w-full md:w-full lg:w-7/12 xl:w-1/2 bg-light relative">
        <form action="" class="suscription-form">
            <img src="{{ asset('landing-page/template-imgs/orange-right.svg') }}" alt="Orange Right" style="width: 120px" class="mb-7">
            <h2 class="text-primary font-bold lg:text-2xl xl:text-4xl mb-8 wow animate__animated animate__fadeInRight" data-wow-delay="0.5s">
                Subscribe to Our Newsletter
            </h2>
            <p class="text-dark mb-8 text-xl">
                Get the latest news and updates on our product, plus exclusive offers and discounts.
            </p>
            <div class="flex flex-col md:flex-row items-center justify-center mb-8 space-y-3 md:space-y-0 md:space-x-2 w-full">
                <div class="flex-1 w-full">
                    <input type="email" class="input w-full" placeholder="Enter your email address">
                </div>
                <button class="btn btn-primary flex-1">
                    <i class="fas fa-paper-plane"></i>
                    <span>Subscribe</span>
                </button>
            </div>
            <p class="text-dark text-sm">
                By subscribing, you agree to receive marketing emails from Go Bella Wellness. You can unsubscribe at any time.
            </p>
        </form>
    </div>
</section>