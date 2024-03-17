<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Head Contents -->
    @spladeHead
</head>

<body>
    <div id="app">
        <!-- Navigation Bar -->
        <nav>
            <x-splade-link href="{{ route('home') }}">Home</x-splade-link>
            <x-splade-link href="{{ route('about') }}">About</x-splade-link>
            <!-- Add more navigation links as needed -->
        </nav>

        <!-- Page Content -->
        {{ $slot }}
    </div>

    @spladeScripts
</body>

</html>
