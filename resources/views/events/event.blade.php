<x-events-layout>

    @section('page-header')
        <x-page-header :title="cmsSetting('events_title')" />
    @endsection

    <div class="container">
        <div class="prose max-w-none">

            <h1 class="text-et-navy">{{ $event->title }}</h1>

            <p class="-mt-4 flex items-center gap-x-4">
                <time datetime="{{ $event->date->format('Y-m-d') }}" class="text-gray-700">
                    {{ $event->date->format('j F Y') }}
                </time>
                @if($category = $event->eventCategory)
                    <a href="javascript: void;" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-800 hover:bg-gray-100">
                        {{ $category->title }}
                    </a>
                @endif
            </p>

            @if( $event->featuredImage )
                <x-media-image-renderer
                    :media="$event->featuredImage->media_id"
                    imgClass="w-full h-auto"
                />
            @endif

            @if($event->content)
                {!! tiptap_converter()->asHTML($event->content) !!}
            @endif
        </div>
    </div>
</x-events-layout>


{{--<x-events-layout>--}}
{{--    <div class="container">--}}
{{--      <div class="prose max-w-none">--}}
{{--          <h1>{{ $event->title }}</h1>--}}
{{--          @if($event->content)--}}
{{--              {!! tiptap_converter()->asHTML($event->content) !!}--}}
{{--          @endif--}}
{{--      </div>--}}
{{--    </div>--}}
{{--</x-events-layout>--}}
