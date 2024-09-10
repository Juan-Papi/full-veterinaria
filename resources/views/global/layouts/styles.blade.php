<link rel="canonical" href="#" />
<link rel="shortcut icon" href="https://flowbite.com/docs/images/logo.svg" />

<!--begin::Fonts(mandatory for all pages)-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
<!--end::Fonts-->
<style>
    .spinner svg {
        width: 50px;
        /* Tamaño más grande para mejor visibilidad */
        height: 50px;
        fill: #007bff;
        /* Un color azul que debería contrastar bien con ambos fondos */
    }

    #loading {
        background-color: rgba(0, 0, 0, 0.5);
        /* Fondo semitransparente */
        display: flex;
        justify-content: center;
        align-items: center;
        position: fixed;
        inset: 0;
        /* Esto cubrirá toda la pantalla */
        z-index: 9999;
    }

    @keyframes spinner-b87k6z {
        to {
            transform: rotate(360deg);
        }
    }

    .spinner {
        animation: spinner-b87k6z 1s infinite linear;
    }
</style>
@stack('styles')
