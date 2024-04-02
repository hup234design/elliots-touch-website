<x-posts-layout>

    @section('page-header')
        <x-page-header :title="cmsSetting('posts_title')" />
    @endsection

    <div class="container">
      <div class="prose max-w-none">
          @if($content)
              {!! tiptap_converter()->asHTML($content) !!}
          @endif
      </div>
        <div class="space-y-8">
            @foreach( $posts as $post )
                <div class="prose max-w-none">
                    <h3>{{ $post->title }}</h3>
                    <p>{!! nl2br($post->summary) !!}</p>
                    <p>
                        <a href="{{ route('posts.post', $post->slug) }}">
                            Read More
                        </a>
                    </p>
                </div>
            @endforeach
        </div>
        @if( $posts->hasPages())
            <div class="mt-12">
                {{ $posts->links() }}
            </div>
        @endif
    </div>
</x-posts-layout>
