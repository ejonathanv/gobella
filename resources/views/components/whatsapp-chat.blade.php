<div>
    <a href="{{ env('WHATSAPP_NUMBER') }}" target="_blank" class="whatsappIcon fixed bottom-6 right-6 z-50">
        <img src="{{ asset('img/whatsapp_icon.svg') }}" alt="Whatsapp" class="w-14 h-14">
    </a>
</div>

<style>

    /* Animacion pulsante */

    .whatsappIcon {
        transition: transform 0.25s;
        z-index: 1000;
    }

    .whatsappIcon:hover {
        transform: scale(1.1);
        transition: transform 0.25s;
    }

    /* Estilos del icono */
    .whatsappIcon {
        background-color: #25d366;
        border-radius: 50%;
        padding: 4px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }


</style>