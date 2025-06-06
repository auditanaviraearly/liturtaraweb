    <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md min-h-screen p-6">
            <nav class="space-y-4">
                <a href="{{ route('accounttr') }}" class="block font-semibold text-white bg-blue-900 px-4 py-2 rounded-lg">Profile</a>
                <a href= "#" class="block text-gray-700 hover:text-blue-700">CV & Certification</a>
                <a href="#" class="block text-gray-700 hover:text-blue-700">Project</a>
                <a href="#" class="block text-gray-700 hover:text-blue-700">Favorite</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="block text-red-600 hover:text-red-800">
                        Logout →
                    </button>
                </form>
            </nav>
        </aside>