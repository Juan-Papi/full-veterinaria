@extends('admin.layouts.main')

@push('styles')
@endpush

@section('admin-content')
    <div
        class="flex flex-col p-6 bg-white rounded-lg dark:bg-gray-800 transition duration-300 ease-in-out lg:h-screen md:h-screen sm:h-auto">
        <div class="text-center mb-6">
            <h3 class="text-xl font-medium dark:text-white">Dashboard</h3>
            <p class="text-sm text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Aliquam, dicta!.</p>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
