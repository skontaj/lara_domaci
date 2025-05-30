<!-- resources/views/components/guest-navigation.blade.php -->
<nav class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ url('/') }}">
                    <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                </a>
            </div>

            <!-- Guest Links -->
             
            <div class="flex justify-end space-x-4 p-4 bg-white text-gray-800">
                <x-nav-link href="{{ url('/') }}">
                    {{ __('Home') }}
                </x-nav-link>
                <x-nav-link href="{{ url('/about') }}">
                    {{ __('About') }}
                </x-nav-link>
                <x-nav-link href="{{ url('/shop') }}">
                    {{ __('Shop') }}
                </x-nav-link>
                <x-nav-link href="{{ url('/contact') }}">
                    {{ __('Contact') }}
                </x-nav-link>
            </div>
            
        </div>
    </div>
</nav>
