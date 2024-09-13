<x-guest-layout>
    <section class="pt-48 pb-24 px-6">
        <div class="w-8/12 mx-auto text-center">
            <h1> 
                <span class="text-primary">Error 503</span>
            </h1>
            <h3>
                Service Unavailable
            </h3>
            <p>
                The service is temporarily unavailable. Please try again later.
            </p>
            <a href="{{ route('landing-page') }}" class="underline font-bold text-primary">
                Go back to the home page
            </a>
        </div>
    </section>
</x-guest-layout>
