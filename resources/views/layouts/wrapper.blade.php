<!DOCTYPE html>
<html lang="id">

<head>
    <base href="">
    <title>{{ $web->title ?? 'TITLE' }}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="/files/logo/{{ $web->logo ?? 'LOGO.PNG'}}" />
    <link href="{{ asset('fix-theme/assets/css/tailwind.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        [v-cloak]>* {
            display: none;
        }

        [v-cloak]::before {
            content: "loading...";
        }
    </style>
</head>

<body class="min-h-screen">
    <div class="">
        @include('layouts.header')
        <div class="bg-cover bgi-no-repeat flex items-center justify-center" style="background-image: url(/files/logo/background_home_3.jpg); height: 100vh;">
            <div id="app" class="flex justify-center">
                <div>
                    @yield('content') <!-- Konten spesifik untuk setiap tampilan -->
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </div>

    <!-- Javascript Bundle -->
    <script src="{{ asset('fix-theme/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('fix-theme/assets/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('fix-theme/assets/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>
    <script src="{{ asset('fix-theme/assets/plugins/custom/typedjs/typedjs.bundle.js') }}"></script>
    <script src="{{ asset('fix-theme/assets/js/custom/landing.js') }}"></script>
    <script src="{{ asset('fix-theme/assets/js/custom/pages/pricing/general.js') }}"></script>
</body>

</html>