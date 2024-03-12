<div>
    @isset($this->data['include_header'])
        <div class="mb-12">
            <div class="mx-auto max-w-2xl text-center">
                @if($this->data['header_eyebrow'] ?? null)
                    <p class="mb-2 text-sm font-bold leading-7 text-et-dark-navy uppercase">
                        {{ $this->data['header_eyebrow'] }}
                    </p>
                @endif
                @if($this->data['header_title'] ?? null)
                    <h2 class="text-3xl font-bold tracking-tight text-et-navy sm:text-4xl">
                        {!! nl2br($this->data['header_title']) !!}
                    </h2>
                @endif
                @if($this->data['header_eyebrow'] ?? null)
                    <p class="mt-6 text-md font-medium leading-8 text-et-light-navy sm:text-lg">
                        {!! nl2br($this->data['header_text']) !!}
                    </p>
                @endif
            </div>
        </div>
    @endif

        <div class="max-w-6xl px-8 mx-auto">
            <div class="prose max-w-none">
                @if($this->data['content'])
                    {!! tiptap_converter()->asHTML($this->data['content']) !!}
                @endif
            </div>
        </div>
</div>
