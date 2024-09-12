<header class="landing-page-header" x-data="{
    out_of_home: {{ request()->routeIs('landing-page') ? 'false' : 'true' }},
    open: false,
    toggleMenu() {
        this.open = !this.open;
    },
    goTo(section) {

        <!-- Si estamos out_of_home, vamos a redirigir a la ruta de la landing page con el hash id de la seccion -->
        if (this.out_of_home) {
            window.location.href = `{{ route('landing-page') }}#${section}`;
        }

        <!-- Necesitamos hacer un scroll suave hasta la seccion con el ID que le pasemoa y le vamos a agregar 100px para que no quede pegado al header -->
        const element = document.getElementById(section);
        const offset = 130;
        const bodyRect = document.body.getBoundingClientRect().top;
        const elementRect = element.getBoundingClientRect().top;
        const elementPosition = elementRect - bodyRect;
        const offsetPosition = elementPosition - offset;

        window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
        });

        <!-- Vamos a agregar la clase .active al enlace que se le dio click y remove la clase .active a los demas enlaces siblings -->
        const links = document.querySelectorAll('.landing-page-nav a');
        links.forEach(link => {
            link.classList.remove('active');
        });
        
        <!-- Vamos a agregarle la clase active al elemento que tenga el attributo data-section igual al section que le pasamos -->
        
        const link = document.querySelector(`.landing-page-nav a[class='${section}Link']`);
        link.classList.add('active');

        <!-- Si tenemos activado el menu responsive, al dar click en un enlace, se va a cerrar el menu -->
        if (this.open) {
            this.open = false;
        }

    },
    goToSectionOnInit() {
        <!-- Vamos a obtener el hash de la URL -->
        const hash = window.location.hash;

        <!-- Vamos a esperar que cargue la pagina y despues vamos a ejecutar goTo con el hash que obtuvimos -->
        window.onload = () => {
            if (hash) { this.goTo(hash.replace('#', '')); }
        }

    }
}" x-init="goToSectionOnInit()">
    <div class="container flex items-center justify-between">
        <!-- Logo Go Bella Wellness -->
        <a href="#" class="font-bold text-xl logo" @click.prevent="goTo('homeSection')">
            <img src="{{ asset('landing-page/go-bella-wellness-logo.svg') }}" alt="Go Bella Wellness Logo">
        </a>
        <!-- Menu de navegacion -->
        <nav class="landing-page-nav hidden sm:flex">
            <a href="#" class="active homeSectionLink" @click.prevent="goTo('homeSection')">
                Home
            </a>
            <a href="#" class="benefitsSectionLink" @click.prevent="goTo('benefitsSection')">
                Benefits
            </a>
            <a href="#" class="factsSectionLink" @click.prevent="goTo('factsSection')">
                Supplement Facts
            </a>
            <a href="#" class="testimonialsSectionLink" @click.prevent="goTo('testimonialsSection')">
                Testimonials
            </a>
            <a href="#" class="contactSectionLink" @click.prevent="goTo('contactSection')">
                Contact
            </a>
        </nav>
        <!-- Menu responsive -->
        <div class="landing-page-menu-responsive inline-block sm:hidden">
            <a href="#" @click.prevent="toggleMenu()" class="text-2xl relative" style="z-index: 9999">
                <i x-show="! open" class="fas fa-bars"></i>
                <i x-show="open" class="fas fa-times"></i>
            </a>
            <template x-if="open">
                <div class="landing-page-menu-responsive-content space-y-16">
                    <!-- Logo de Go Bella -->
                    <a href="#" class="font-bold text-xl logo">
                        <img src="{{ asset('landing-page/go-bella-wellness-logo.svg') }}" alt="Go Bella Wellness Logo">
                    </a>
                    <!-- Navegacion -->
                    <nav class="landing-page-menu-responsive-nav">
                        <a href="#" class="active" @click.prevent="goTo('homeSection')">
                            Home
                        </a>
                        <a href="#" @click.prevent="goTo('benefitsSection')">
                            Benefits
                        </a>
                        <a href="#" @click.prevent="goTo('factsSection')">
                            Supplement Facts
                        </a>
                        <a href="#" @click.prevent="goTo('testimonialsSection')">
                            Testimonials
                        </a>
                        <a href="#" @click.prevent="goTo('contactSection')">
                            Contact
                        </a>
                    </nav>
                    <!-- Redes sociales -->
                    <div class="landing-page-menu-responsive-social-media space-y-6">
                        <!-- Iconos de redes sociales -->
                        <div class="flex items-center space-x-4 social-media-icons">
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                        <a href="#" class="highlight-btn">
                            Buy Now
                        </a>
                    </div>
                </div>
            </template>
        </div>
    </div>
</header>