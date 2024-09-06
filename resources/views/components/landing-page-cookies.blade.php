<div x-data="{
    show: true,
    accept() {
        this.show = false;
    },
    decline() {
        this.show = false;
    }
}">
    <template x-if="show">
        <div class="cookies-banner wow animate__animated animate__fadeInUp" data-wow-duration="1.5s">
            <p class="mb-4">
                We use cookies to ensure you get the best experience on our website.
            </p>
            <div class="flex items-center space-x-4">
                <button class="underline" @click="accept">
                    Accept
                </button>
                <button class="underline" @click="decline">
                    Decline
                </button>
            </div>
        </div>
    </template>
</div>