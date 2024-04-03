<x-app-layout>

    @section('page-header')
        <x-page-header :title="$page->title" :blocks="$page->header?->header_blocks" />
    @endsection

    <div class="container">

      <div class="prose max-w-none">

          @if( count($page->header_blocks ?? []) > 0)
              <h1>{{ $page->title }}</h1>
          @endif

          @if($page->content)
            {!! tiptap_converter()->asHTML($page->content) !!}
          @endif
      </div>
    </div>

    <x-content-blocks :blocks="$page->content_blocks" />
</x-app-layout>
