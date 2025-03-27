@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-white to-green-50 px-8 py-12">
    <div class="max-w-7xl mx-auto">
        <a href="#" class="text-blue-500 mb-4 inline-block">&larr; Back</a>

        <div class="flex flex-col md:flex-row gap-8">
            <!-- Kartu -->
            <div class="w-full md:w-1/3 bg-white rounded-lg shadow-md p-6 relative">
                <span class="absolute top-4 right-4 bg-blue-700 text-white text-xs font-semibold px-3 py-1 rounded">Available</span>
                <div class="flex flex-col items-center justify-center mt-10">
                    <h1 class="text-lg font-bold mb-4">Headline</h1>
                    <img src="{{ asset('images/logo-liturtara.png') }}" alt="Logo Liturtara" class="h-16 mb-6">
                    <p class="text-gray-800 font-semibold">John Doe</p>
                    <p class="text-gray-500 text-sm">UD Maju Jaya</p>
                    <p class="text-gray-400 text-xs mt-8">20 Oktober 2024</p>
                </div>
            </div>

            <!-- Detail -->
            <div class="w-full md:w-2/3 bg-white rounded-lg p-6">
                <h2 class="text-2xl font-bold text-blue-900 mb-6">Lorem ipsum dolor sit amet</h2>

                <!-- Tags -->
                <div class="flex flex-wrap gap-2 mb-6">
                    <span class="px-3 py-1 bg-gray-200 rounded-full text-sm">Category</span>
                    <span class="px-3 py-1 bg-gray-200 rounded-full text-sm">Category</span>
                </div>

                <!-- User Info -->
                <div class="space-y-4 mb-6">
                    <div class="flex items-center gap-2 text-gray-600">
                        <i class="fa-solid fa-user"></i> <span>John Doe</span>
                    </div>
                    <div class="flex items-center gap-2 text-gray-600">
                        <i class="fa-solid fa-building"></i> <span>UD Maju Jaya</span>
                    </div>
                    <div class="flex items-center gap-2 text-gray-600">
                        <i class="fa-solid fa-calendar"></i> <span>2 Oktober 2024</span>
                    </div>
                    <a href="#" class="inline-block mt-4 px-5 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">View Profile</a>
                </div>

                <!-- Description -->
                <div class="text-gray-600 space-y-4 mb-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                </div>

                <!-- Delete Button -->
                <button class="bg-red-500 text-white px-6 py-2 rounded hover:bg-red-600">
                    Delete
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
