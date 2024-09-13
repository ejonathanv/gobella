<x-guest-layout>
    <section class="pt-48 pb-24 px-6">
        <div class="w-8/12 mx-auto text-center">
            <h1> 
                <span class="text-primary">Error 404</span>
            </h1>
            <h3>
                Page Not Found
            </h3>
            <p>
                The page you are looking for does not exist.
            </p>
            <a href="{{ route('landing-page') }}" class="underline font-bold text-primary">
                Go back to the home page
            </a>
        </div>
    </section>
</x-guest-layout>
