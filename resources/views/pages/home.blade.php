<x-cms-app-layout>
    <div class="max-w-6xl px-8 mx-auto">
      <div class="prose max-w-none">
        <h1>{{ $page->title }}</h1>
        @if($page->content)
          {!! tiptap_converter()->asHTML($page->content) !!}
        @endif
      </div>
    </div>

    <x-cms::content-blocks :blocks="$page->content_blocks" />
</x-cms-app-layout>
