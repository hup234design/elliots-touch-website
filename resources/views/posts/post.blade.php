<x-posts-layout>

    @section('page-header')
        <x-page-header :title="cmsSetting('posts_title')" />
    @endsection

    <div class="container">
      <div class="prose max-w-none">
          <h1>{{ $post->title }}</h1>
          @if($post->content)
              {!! tiptap_converter()->asHTML($post->content) !!}
          @endif
      </div>
    </div>
</x-posts-layout>
