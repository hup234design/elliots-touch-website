@props(['blocks' => []])

@if( count($blocks) > 0 )
    <div class="mt-20">
        @foreach($blocks as $block)
            <x-cms::content-blocks.wrapper
                :style="$block['data']['block_style'] ?? 'default'"
                :width="$block['data']['block_width'] ?? 'default'"
            >
                @livewire($block['type'].'-block', ['data' => $block['data']])
            </x-cms::content-blocks.wrapper>
        @endforeach
    </div>
@endif
