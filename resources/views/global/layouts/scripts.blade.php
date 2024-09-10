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

    const successfulAlert = (title, message) => {
        Toast.fire({
            icon: 'success',
            title: title,
            text: message,
        });
    };

    const errorAlert = (title, message) => {
        Toast.fire({
            icon: 'error',
            title: title,
            text: message,
        });
    };

    const warningAlert = (title, message) => {
        Toast.fire({
            icon: 'warning',
            title: title,
            text: message,
        });
    };
</script>
@stack('scripts')
