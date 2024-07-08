<nav class="bg-white border-r border-gray-200 w-64 min-h-screen">
    <div class="flex flex-col h-full">
        <div class="flex items-center justify-center h-16 border-b border-gray-200">
            <span class="text-lg font-semibold">{{ config('app.name') }}</span>
        </div>
        <div class="flex-grow p-4">
            <ul class="space-y-2">
                <li>
                    <a href="{{ route('dashboard') }}" class="flex items-center p-2 text-gray-600 hover:bg-gray-100 rounded-lg">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        Dashboard
                    </a>
                </li>
                <!-- Add more menu items as needed -->
            </ul>
        </div>
        <div class="p-4 border-t border-gray-200">
            <!-- Add user profile or logout button here -->
        </div>
    </div>
</nav>