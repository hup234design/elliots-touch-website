<x-app-layout>
    <div class="container">
        <div class="mb-8">
            <a href="{{ route('pages.page', $page->slug) }}">
                &larr; Back to {{ $page->title }}
            </a>
        </div>
      <div class="prose max-w-none">
        <h1>{{ $subPage->title }}</h1>
        @if($subPage->content)
          {!! tiptap_converter()->asHTML($subPage->content) !!}
        @endif
      </div>
    </div>

    <x-content-blocks :blocks="$subPage->content_blocks" />
</x-app-layout>
