<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
         <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
         {{-- <link rel="stylesheet" href="build/assets/angeldx-9bff9eec.css">
         <link rel="stylesheet" href="build/assets/app-10b39032.css">
         <link rel="stylesheet" href="build/assets/app-48a96618.css">
         <script src="build/assets/app-0627d69a.js"></script> --}}
         <!-- Styles -->
         @livewireStyles
         <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pace-js@latest/pace-theme-default.min.css">
    </head>
    <body class="font-sans antialiased bg-gray-100">
        <div class="sticky top-0 z-50">
            @livewire('web.navbar')
        </div>

        <div class="sm:justify-center sm:items-center bg-dots-darker bg-center dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="mt-4">
                    <main>
                        {{ $slot }}
                    </main>
                </div>
            </div>
            @livewire('footerweb')
        </div>
        @stack('modals')
        @livewire('livewire-ui-modal')
        @livewireScripts
        <script type="text/javascript">
            Livewire.on('alert',function(message){
                Swal.fire(
                'Mensaje del sistema',
                message,
                'success'
                )
            })
        </script>
        @stack('js')

    </body>
</html>
