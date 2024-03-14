<x-app-layout>
    <div class="container">
      <div class="prose max-w-none">
        <h1>{{ $page->title }}</h1>
        @if($page->content)
          {!! tiptap_converter()->asHTML($page->content) !!}
        @endif
      </div>
    </div>

    <x-content-blocks :blocks="$page->content_blocks" />
</x-app-layout>
