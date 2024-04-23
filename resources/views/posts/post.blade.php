<x-posts-layout>

    @section('page-header')
        <x-page-header :title="cmsSetting('posts_title')" />
    @endsection

    <div class="container">
      <div class="prose max-w-none">

          <h1>{{ $post->title }}</h1>

          <p class="flex items-center gap-x-4">
              <time datetime="2020-03-16" class="text-gray-700">
                  {{ $post->published_at->format('j F Y') }}
              </time>
              @if($category = $post->postCategory)
                  <a href="javascript: void;" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-800 hover:bg-gray-100">
                      {{ $category->title }}
                  </a>
              @endif
          </p>

          @if( $post->featuredImage )
              <x-media-image-renderer
                  :media="$post->featuredImage->media_id"
                  imgClass="w-full h-auto"
              />
          @endif

          @if($post->content)
              {!! tiptap_converter()->asHTML($post->content) !!}
          @endif
      </div>
    </div>
</x-posts-layout>
