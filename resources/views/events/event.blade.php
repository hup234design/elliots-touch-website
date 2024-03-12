<x-events-layout>
    <div class="container">
      <div class="prose max-w-none">
          <h1>{{ $event->title }}</h1>
          @if($event->content)
              {!! tiptap_converter()->asHTML($event->content) !!}
          @endif
      </div>
    </div>
</x-events-layout>
