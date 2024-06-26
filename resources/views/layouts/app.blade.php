<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf_token" value="{{ csrf_token() }}"/>
    <title>{{ config('app.name', 'Laravel') }}</title>
    @googlefonts
    @googlefonts('gloria-hallelujah')
    @vite(['resources/css/app.css','resources/js/app.js'])
    @livewireStyles
    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('cms.google_maps_api_key', '') }}&callback=initMap&libraries=&v=weekly" async></script>
</head>
<body class="antialiased text-gray-700">

<header>

    <div class="mt-4 max-w-7xl mx-auto px-8 flex justify-between items-center">
        <div class="flex-1 flex gap-4">
            @if(cmsSetting('social_facebook'))
                <a href="{{ cmsSetting('social_facebook') }}" target="_blank">
                    <x-si-facebook class="w-8 h-8 text-et-skyblue hover:text-et-dark-crimson "/>
                </a>
            @endif

                @if(cmsSetting('social_twitter'))
                    <a href="{{ cmsSetting('social_twitter') }}" target="_blank">
                        <x-si-x class="w-8 h-8 text-et-skyblue hover:text-et-dark-crimson "/>
                    </a>
                @endif
                @if(cmsSetting('social_linkedin'))
                    <a href="{{ cmsSetting('social_linkedin') }}" target="_blank">
                        <x-si-linkedin class="w-8 h-8 text-et-skyblue hover:text-et-dark-crimson "/>
                    </a>
                @endif
                @if(cmsSetting('social_instagram'))
                    <a href="{{ cmsSetting('social_instagram') }}" target="_blank">
                        <x-si-instagram class="w-8 h-8 text-et-skyblue hover:text-et-dark-crimson "/>
                    </a>
                @endif
                @if(cmsSetting('social_pinterest'))
                    <a href="{{ cmsSetting('social_pinterest') }}" target="_blank">
                        <x-si-pinterest class="w-8 h-8 text-et-skyblue hover:text-et-dark-crimson "/>
                    </a>
                @endif
                @if(cmsSetting('social_youtube'))
                    <a href="{{ cmsSetting('social_youtube') }}" target="_blank">
                        <x-si-youtube class="w-8 h-8 text-et-skyblue hover:text-et-dark-crimson "/>
                    </a>
                @endif
                @if(cmsSetting('social_tiktok'))
                    <a href="{{ cmsSetting('social_tiktok') }}" target="_blank">
                        <x-si-tiktok class="w-8 h-8 text-et-skyblue hover:text-et-dark-crimson "/>
                    </a>
                @endif
        </div>
        <div>
            <img src="{{ asset('logos/logo-transparent.png') }}" alt="Logo" class="max-h-20 w-auto">
        </div>
        <div class="flex-1 text-right">
            @if(cmsSetting('donation_link'))
                <x-button.primary text="Donate Now"  size="lg" colour="skyblue" tag="a" href="{{ cmsSetting('donation_link') }}" />
            @endif
        </div>
    </div>
    <div class="container">

        <nav class="mt-4">
            <ul class="w-full h-16 flex justify-center text-xl">
                @foreach( $menus['header'] ?? [] as $link)
                    <li class="group px-6">
                        @if( $link['dropdown'] )
                            <div class="relative group">
                                @if( $link['href'] )
                                    <a href="{{ $link['href'] }}" target="{{ $link['target'] }}" class="h-16 font-semibold rounded flex items-center  hover:text-red-700">
                                        <span>{{ $link['label'] }}</span>
{{--                                        <svg class="fill-current h-4 w-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 12l-6-6h12l-6 6z"/></svg>--}}
                                    </a>
                                @else
                                    <button class="h-16  font-semibold rounded flex items-center  hover:text-red-700">
                                        <span>{{ $link['label'] }}</span>
{{--                                        <svg class="fill-current h-4 w-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 12l-6-6h12l-6 6z"/></svg>--}}
                                    </button>
                                @endif
                                <div class="hidden group-hover:block absolute right-0 -mr-6 z-50" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                    <div class="relative text-right rounded-b-md shadow-lg py-1 bg-white whitespace-nowrap min-w-[160px]" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                        @foreach( $link['children'] as $child )
                                            <a href="{{ $child['href'] }}" target="{{ $link['target'] }}" class="block px-6 py-2 text-base font-semibold text-gray-700 hover:bg-gray-100 hover:text-red-700" role="menuitem">
                                                {{ $child['label'] }}
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @else
                            <a href="{{ $link['href'] }}" target="{{ $link['target'] }}" class="h-16 font-semibold rounded flex items-center  hover:text-red-700">
                                {{ $link['label'] }}
                            </a>
                        @endif
                    </li>
                @endforeach
            </ul>
        </nav>

        <ul class="w-full flex justify-center items-center space-x-4">
{{--            @foreach($pages as $slug=>$title)--}}
{{--                <li class="relative group p-4 hover:bg-gray-200 hover:cursor-pointer">--}}
{{--                    <a--}}
{{--                        href="{{ $slug == 'home' ? route('home') : route('page',$slug) }}"--}}
{{--                        class="text-lg font-bold text-et-navy white group-hover:text-et-blue"--}}
{{--                    >--}}
{{--                        {{ $title }}--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            @endforeach--}}
        </ul>
    </div>
</header>

@section('page-header')
@show

{{ $slot }}

<footer class="mt-16 bg-gray-100 py-16 flex flex-col justify-center items-center space-y-12">

    <div class="text-center">
        <a href="{{ route('pages.home') }}" class="font-bold text-xl text-white">
            <img src="{{ asset('logos/logo-transparent.png') }}" alt="{{ config('app.name') }}" class="mx-auto w-auto h-20
            ">
        </a>

        <p class="uppercase font-semibold text-base mt-4 text-brand-crimson">keeping energy flowing and little hearts beating</p>
    </div>

    <ul class="flex items-center font-medium text-sm gap-12">
        @foreach( $menuLinks ?? [] as $link)
            <li class="group px-6">
                <a href="{{ $link['href'] }}" target="{{ $link['target'] }}" class="text-gray-700 font-bold text-lg rounded flex items-center  hover:text-red-700">
                    {{ $link['label'] }}
                </a>
            </li>
        @endforeach
    </ul>

    @if(
        cmsSetting('social_facebook') || cmsSetting('social_twitter') || cmsSetting('social_linkedin') ||
        cmsSetting('social_instagram') || cmsSetting('social_pinterest') || cmsSetting('social_youtube') ||
        cmsSetting('social_tiktok')
    )
        <ul class="flex items-center font-medium text-sm gap-12">
            @if(cmsSetting('social_facebook'))
                <li>
                    <a href="{{ cmsSetting('social_facebook') }}" target="_blank">
                        <x-si-facebook class="w-8 h-8 text-brand-blue "/>
                    </a>
                </li>
            @endif
            @if(cmsSetting('social_twitter'))
                <li>
                    <a href="{{ cmsSetting('social_twitter') }}" target="_blank">
                        <x-si-x class="w-8 h-8 text-brand-blue "/>
                    </a>
                </li>
            @endif
            @if(cmsSetting('social_linkedin'))
                <li>
                    <a href="{{ cmsSetting('social_linkedin') }}" target="_blank">
                        <x-si-linkedin class="w-8 h-8 text-brand-blue "/>
                    </a>
                </li>
            @endif
            @if(cmsSetting('social_instagram'))
                <li>
                    <a href="{{ cmsSetting('social_instagram') }}" target="_blank">
                        <x-si-instagram class="w-8 h-8 text-brand-blue "/>
                    </a>
                </li>
            @endif
            @if(cmsSetting('social_pinterest'))
                <li>
                    <a href="{{ cmsSetting('social_pinterest') }}" target="_blank">
                        <x-si-pinterest class="w-8 h-8 text-brand-blue "/>
                    </a>
                </li>
            @endif
            @if(cmsSetting('social_youtube'))
                <li>
                    <a href="{{ cmsSetting('social_youtube') }}" target="_blank">
                        <x-si-youtube class="w-8 h-8 text-brand-blue "/>
                    </a>
                </li>
            @endif
            @if(cmsSetting('social_tiktok'))
                <li>
                    <a href="{{ cmsSetting('social_tiktok') }}" target="_blank">
                        <x-si-tiktok class="w-8 h-8 text-brand-blue "/>
                    </a>
                </li>
            @endif
        </ul>
    @endif

    <p class="text-base text-brand-gray-800">
        &copy; {{ date('Y') }} Elliots Touch. Charity Number: 1094446
    </p>

</footer>

@livewireScripts
</body>
</html>
