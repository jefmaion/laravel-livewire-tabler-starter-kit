<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.parts.header')
</head>

<body>
    @include('layouts.parts.theme')
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="." wire:navigate class="navbar-brand navbar-brand-autodark">
                    <x-application-logo />
                </a>
            </div>
            <div class="card card-md">
                <div class="card-body">
                    {{ $slot }}
                </div>
            </div>
            {{ $link ?? null }}
        </div>
    </div>
   @include('layouts.parts.scripts')
</body>

</html>