<!DOCTYPE html>
<html lang="en">

<head>
    @include('global.layouts.seo')
    @include('global.layouts.styles')


    @vite('resources/css/app.css')
</head>

<body>
    @include('admin.layouts.header-sidebar')
    <main class="px-4 pt-20  md:ml-64 h-auto">
        <div class="shadow rounded-lg border-gray-300 dark:border-gray-600 h-28 mb-4">
            @yield('admin-content-toolbar')
        </div>
        <div class="shadow rounded-lg border-gray-300 dark:border-gray-600 h-screen mb-4">
            @yield('admin-content')
        </div>
    </main>
    <div class="px-4 pb-4 md:ml-64 h-auto">
        @include('admin.layouts.footer')
    </div>

    @include('global.layouts.scripts')
</body>

</html>
