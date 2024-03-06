@props(['style' => 'default', 'width' => 'default'])

<section
    @class([
        "py-20",
        "bg-gray-50" => $style == 'light',
        "bg-blue-600" => $style == 'brand',
        "bg-gray-800" => $style == 'dark',
    ])
>
    <div
        @class([
            "px-8",
            "max-w-6xl mx-auto" => $width == 'default'
        ])
    >
        {{  $slot }}
    </div>
</section>
