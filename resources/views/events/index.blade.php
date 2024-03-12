<x-events-layout>
    <div class="container">
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
            @foreach( $events as $event )
                <div class="prose max-w-none">
                    <h3>{{ $event->title }}</h3>
                    <p>{!! nl2br($event->summary) !!}</p>
                    <p>
                        <a href="{{ route('events.event', $event->slug) }}">
                            Read More
                        </a>
                    </p>
                </div>
            @endforeach
        </div>
        @if( $events->hasPages())
            <div class="mt-12">
                {{ $events->links() }}
            </div>
        @endif
    </div>
</x-events-layout>
