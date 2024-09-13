<section class="landing-page-suscription-form flex-col lg:flex-row" id="contactSection">
    <div class="w-full md:w-full lg:w-5/12 xl:w-1/2 bg-primary bg-cover bg-center relative p-48 sm:p-72 lg:p-0" style="background-image: url({{ asset('landing-page/template-imgs/pexels-freestocks-370014.jpg') }})">
    </div>
    <div class="w-full md:w-full lg:w-7/12 xl:w-1/2 bg-light relative" x-data="{
        sending: false,
        grecaptcha: null,
        success_message: '',
        errors: null,
        form: {  
            name: '',
            email: '',
        },
        async submit_form() {
            const t = this;
            const route = '{{ route('subscribers.store') }}';
            const data = new FormData();
            data.append('name', t.form.name);
            data.append('email', t.form.email);
            data.append('g-recaptcha-response', grecaptcha.getResponse());

            t.sending = true;

            try{
                const response = await axios.post(route, data);
                if (response.data.success) {
                    t.success_message = response.data.message;
                    t.sending = false;
                    t.reset_form();
                } else {
                    alert('There was an error subscribing, please try again later.');
                    t.sending = false;
                }
            }catch(error){
                if (error.response.status === 422) {
                    t.errors = error.response.data.errors;
                    t.sending = false;
                    t.grecaptcha.reset();
                } else {
                    t.errors = ['An error occurred, please try again later.'];
                    t.sending = false;
                    t.grecaptcha.reset();
                }
            }
        },
        reset_form(){

            const t = this;

            t.form.name = '';
            t.form.email = '';
            t.errors = null;
            t.grecaptcha.reset();
        }
    }">
        <form action="" class="suscription-form" @submit.prevent="submit_form()">
            <!-- Imagen y titulo del formulario -->
            <img src="{{ asset('landing-page/template-imgs/orange-right.svg') }}" alt="Orange Right" style="width: 120px" class="mb-7">
            <h2 class="text-primary font-bold lg:text-2xl xl:text-4xl mb-8 wow animate__animated animate__fadeInRight" data-wow-delay="0.5s">
                Subscribe to Our Newsletter
            </h2>
            <p class="text-dark mb-8 text-xl">
                Get the latest news and updates on our product, plus exclusive offers and discounts.
            </p>
            <!-- Mensaje de exito -->
            <div x-show="success_message" class="text-green-500 mb-8 rounded-lg">
                <!-- Thumbs up emoji here -->
                👍 <span x-text="success_message"></span>
            </div>
            <!-- Errores de validacion -->
            <div x-show="errors" class="text-primary mb-8 rounded-lg">
                <ul>
                    <template x-for="(error, index) in errors" :key="index">
                        <li>
                            <span x-text="error"></span>
                        </li>
                    </template>
                </ul>
            </div>
            <!-- Campos del formulario -->
            <div class="flex flex-col md:flex-row items-center mb-8 space-y-3 md:space-y-0 md:space-x-2 w-full">
                <div class="w-full md:w-5/12">
                    <input type="text" class="input w-full" placeholder="What's your name?" x-model="form.name" required>
                </div>
                <div class="w-full md:w-5/12">
                    <input type="email" class="input w-full" placeholder="Enter your email address" x-model="form.email" required>
                </div>
                <div class="w-full md:w-2/12">
                    <button class="btn btn-primary w-full md:w-24 flex items-center space-x-2" type="submit">
                        <i x-show="! sending" class="fas fa-paper-plane"></i>
                        <i x-show="sending" class="fas fa-spinner fa-spin"></i>
                        <span class="md:hidden md:inline">Subscribe Now!</span>
                    </button>
                </div>
            </div>
            <div>
                {!! NoCaptcha::renderJs() !!}
                {!! NoCaptcha::display() !!}
            </div>
            <!-- Texto legal -->
            <p class="text-dark text-sm mt-6">
                By subscribing, you agree to receive marketing emails from Go Bella Wellness. You can unsubscribe at any time.
            </p>
        </form>
    </div>
</section>