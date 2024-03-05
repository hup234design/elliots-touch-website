<x-cms-app-layout>
    <div class="max-w-6xl px-8 mx-auto">
      <div class="prose max-w-none">
          <h1>{{ $post->title }}</h1>
          @if($post->content)
              {!! tiptap_converter()->asHTML($post->content) !!}
          @endif
      </div>
    </div>
</x-cms-app-layout>
