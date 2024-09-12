<footer class="landing-page-footer">
    <div class="container">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <div class="w-full md:8/12 lg:w-1/2 mx-auto flex items-center flex-col">
                <a href="#" class="font-bold text-xl logo">
                    <img src="{{ asset('landing-page/go-bella-wellness-logo-light.svg') }}" alt="Go Bella Wellness Logo">
                </a>
                <p class="mb-6">
                    &copy; {{ date('Y') }} Go Bella Wellness. All rights reserved.
                </p>
                <div class="flex items-center justify-end space-x-8">
                    <a href="#">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
                <p class="mt-6 text-center text-xs">
                    <b>Disclaimer:</b> This product is not intended to diagnose, treat, cure, or prevent any disease. Results may vary from person to person. Consult your doctor before using this supplement if you are pregnant, nursing, have a medical condition, or are taking any medications. This product is not a medical treatment, and its consumption is at your own risk. The manufacturer and seller are not responsible for any adverse reactions you may experience. Keep this product out of reach of children.
                </p>
                <div class="flex items-center space-x-4 text-xs font-bold mt-5">
                    <a href="{{ route('privacy-policies') }}" class="underline">
                        Privacy Policy
                    </a>

                    <a href="{{ route('shipping-and-return-policies') }}" class="underline">
                        Shipping and Return Policy
                    </a>
                </div>
            </div>
        </div>
</footer>