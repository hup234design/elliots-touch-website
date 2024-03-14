@props(['heading','text','alignment' => 'center'])

<div
    @class([
        "mb-20",
        "mx-auto max-w-2xl text-center" => $alignment == 'center',
])>
    @isset($heading)
        <h2 class="text-2xl font-bold tracking-tight  sm:text-5xl">
            {{ $heading }}
        </h2>
    @endisset
    @isset($text)
        <p class="mt-2 text-lg leading-8 text-gray-600">
            {{ $text  }}
        </p>
    @endisset
</div>
