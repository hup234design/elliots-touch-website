@props([
    'title'   => null,
    'text'    => "Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua",
    'eyebrow' => "Get the help you need",
    'blocks'  => []
])

@section('page-header')
<div class="bg-skyblue py-12 mb-16">
    <div class="mx-auto max-w-2xl text-center">
{{--        @if($eyebrow)--}}
{{--            <p class="mb-2 text-base font-bold leading-7 text-gray-200 uppercase">--}}
{{--                {{ $eyebrow }}--}}
{{--            </p>--}}
{{--        @endif--}}
        <h2 class="text-4xl font-bold tracking-tight text-gray-50 sm:text-5xl">
            {{ $title }}
        </h2>
{{--        @if($text)--}}
{{--            <p class="mt-6 text-lg font-medium leading-8 text-gray-100">--}}
{{--                {{ $text }}--}}
{{--            </p>--}}
{{--        @endif--}}
    </div>
</div>
@endsection
