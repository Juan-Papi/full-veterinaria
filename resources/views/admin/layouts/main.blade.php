<!DOCTYPE html>
<html lang="en">

<head>
    @include('global.layouts.seo')
    @include('global.layouts.styles')


    @vite('resources/css/app.css')
</head>

<body class="flex flex-col min-h-screen bg-gray-50 dark:bg-gray-900 antialiased">
    {{-- <div class="antialiased bg-gray-50 dark:bg-gray-900"> --}}
    @include('admin.layouts.header')
    @include('admin.layouts.sidebar')
    {{-- </div> --}}

    <main class="px-4 pt-20 md:ml-64 flex-1 overflow-auto">
        <div class="shadow rounded-lg border-gray-300 dark:border-gray-600 mb-4">
            @yield('admin-content')
        </div>
    </main>

    <div class="px-4 pb-4 md:ml-64 h-auto">
        @include('admin.layouts.footer')
    </div>

    @include('global.layouts.scripts')
</body>

</html>
