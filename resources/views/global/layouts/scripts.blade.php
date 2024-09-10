<script src="{{ asset('plugins/global/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('template-admin/assets/plugins/global/flowbite-2.5.1.min.js') }}"></script>

<script>
    window.onbeforeunload = function() {
        mostrarLoading();
    };

    document.addEventListener('DOMContentLoaded', () => {
        ocultarLoading();
    });

    const mostrarLoading = () => {
        console.log("Mostrando spinner...");
        $('#loading').show();
    };

    const ocultarLoading = () => {
        console.log("Ocultando spinner...");
        $('#loading').hide();
    };
</script>
@stack('scripts')
