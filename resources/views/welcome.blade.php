<!Doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('/js/script.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="undefined" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/app.scss') }}" rel="stylesheet">
</head>
<body>
    <x-nav>
        <x-logo img="{{url('img/logo-white-orange.png')}}"/>
            <!-- Left Side Of Navbar -->
        <x-nav-element class="mr-auto">

            <x-search sendto="{{url('/')}}" via="post">
                <x-icon/>
            </x-search>

            <x-btn color="solid" type="button" text="Contact" />
            <x-btn color="gradient" type="button" text="Apply" />

        </x-nav-element>
    </x-nav>

    <x-nav>
        <div class="navbar-brand">
        </div>
        <!-- Left Side Of Navbar -->
        <x-nav-element class="d-flex">
            @foreach($menu as $list)
                <x-menu :id="$list->id" :name="$list->name" role="nav-link">
                    <x-dropdown :id="$list->id">
                        @foreach($list->items as $listItem)

                        @isset($listItem->subitems)
                            <x-menu :id="$listItem->id" :name="$listItem->name" role="btn btn-link">
                                <x-dropdown :id="$listItem->id">
                                @foreach(explode(",", $listItem->subitems) as $item)
                                    <x-dropdown-item :text="$item"/>
                                @endforeach
                                </x-dropdown>
                            </x-menu>
                        @endisset

                        @empty($listItem->subitems)
                            <x-dropdown-item :text="$listItem->name"/>
                        @endempty

                        @endforeach
                    </x-dropdown-item>
                </x-menu>
            @endforeach
        </x-nav-element>

    </x-nav>
</body>
</html>
