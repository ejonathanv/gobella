<div x-data="{
    show: true,
    accept() {
        this.show = false;

        <!-- Vamos a generar una cookie para guardar la preferencia del usuario -->
        document.cookie = 'cookies-accepted=true; expires=Fri, 31 Dec 9999 23:59:59 GMT';
    },
    decline() {
        this.show = false;
        <!-- Vamos a generar una cookie para guardar la preferencia del usuario -->
        document.cookie = 'cookies-accepted=false; expires=Fri, 31 Dec 9999 23:59:59 GMT';
    }
}">
    @if(!isset($_COOKIE['cookies-accepted']))
    <template x-if="show">
        <div class="cookies-banner wow animate__animated animate__fadeInUp" data-wow-duration="1.5s">
            <p class="mb-4">
                We use cookies to ensure you get the best experience on our website.
            </p>
            <div class="flex items-center space-x-4">
                <button class="underline" @click="accept">
                    Accept
                </button>
            </div>
        </div>
    </template>
    @endif
</div>