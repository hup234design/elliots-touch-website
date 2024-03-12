@props(['size' => 'md', 'colour' => 'skyblue', 'text'])
<button
    type="button"
    @class([
        "rounded-full font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2",
        "bg-et-blue hover:bg-et-dark-blue focus-visible:outline-et-dark-blue" => $colour == 'blue',
        "bg-et-skyblue hover:bg-et-dark-skyblue focus-visible:outline-et-dark-skyblue" => $colour == 'skyblue',
        "bg-et-crimson hover:bg-et-dark-crimson focus-visible:outline-et-dark-crimson" => $colour == 'crimson',
        "px-3 py-1.5 text-sm" => $size == 'sm',
        "px-4 py-2 text-md"   => $size == 'md',
        "px-5 py-2.5 text-lg" => $size == 'lg',
        "px-6 py-3 text-xl"   => $size == 'xl',
    ])
>
    <span class="whitespace-nowrap">{{ $text }}</span>
</button>
