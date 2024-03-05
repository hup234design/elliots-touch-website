<x-cms-app-layout>
    <div class="max-w-6xl px-8 mx-auto">
        @if($headerImage)
            <div class="-mt-12 w-full h-64 mb-12">
            <x-curator-glider
                class="object-cover object-center w-full h-full"
                :media="$headerImage"
            />
            </div>
        @endif

      <div class="prose max-w-none">
          <h1>{{ $title }}</h1>
          @if($content)
              {!! tiptap_converter()->asHTML($content) !!}
          @endif
      </div>
        <div class="mt-12 space-y-8">
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
</x-cms-app-layout>
