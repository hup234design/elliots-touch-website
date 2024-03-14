@props(['blocks' => []])

@if( count($blocks) > 0 )
    <div class="mt-20 space-y-20">
        @foreach($blocks as $block)
            <x-content-blocks.wrapper
                :style="$block['data']['block_style'] ?? 'default'"
                :width="$block['data']['block_width'] ?? 'default'"
            >
                @livewire($block['type'].'-block', ['data' => $block['data']])
            </x-content-blocks.wrapper>
        @endforeach
    </div>
@endif
