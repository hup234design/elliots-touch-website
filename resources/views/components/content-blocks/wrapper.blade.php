@props(['style' => 'default', 'width' => 'default'])

<section
    @class([
        "py-0",
        "bg-gray-50" => $style == 'light',
        "bg-blue-600" => $style == 'brand',
        "bg-gray-800" => $style == 'dark',
    ])
>
    <div
        @class([
            "container" => $width == 'default'
        ])
    >
        {{  $slot }}
    </div>
</section>
