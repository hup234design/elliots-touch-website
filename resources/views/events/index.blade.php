<x-events-layout>

    @section('page-header')
        <x-page-header :title="cmsSetting('events_title')" />
    @endsection

    <div class="container">
        <div class="prose max-w-none">
            @if($content)
                {!! tiptap_converter()->asHTML($content) !!}
            @endif
        </div>
        <div class="space-y-20 lg:space-y-20">
            @foreach( $events as $event )
                <article class="relative isolate flex flex-col gap-8 lg:flex-row">
                    <div class="relative aspect-[16/9] sm:aspect-[2/1] lg:aspect-[16/9] lg:w-64 lg:shrink-0 bg-et-crimson rounded-2xl overflow-hidden">
                        <div class="aspect-video aspect-w-4 block bg-et-crimson rounded-3xl overflow-hidden">
                            @if( $event->featuredImage )
                                <x-media-image-renderer
                                    :media="$event->featuredImage->media_id"
                                    imgClass="absolute inset-0 h-full w-full rounded-2xl bg-gray-50 object-cover"
                                />
                            @endif
                        </div>
                        <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                    </div>
                    <div>
                        <div class="flex items-center gap-x-4 text-sm">
                            <time datetime="{{ $event->date->format('Y-m-d') }}" class="text-gray-500">
                                {{ $event->date->format('j F Y') }}
                            </time>
                            @if($category = $event->eventCategory)
                                <a href="javascript: void;" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">
                                    {{ $category->title }}
                                </a>
                            @endif
                        </div>
                        <div class="group relative">
                            <a href="{{ route('events.event', $event->slug) }}">
                                <h3 class="mt-3 text-xl font-semibold leading-6 text-et-navy group-hover:text-et-light-navy">
                                    <span class="absolute inset-0"></span>
                                    {{ $event->title }}
                                </h3>
                            </a>
                            <p class="mt-5 text-base leading-6">
                                {!! nl2br($event->summary) !!}
                            </p>
                        </div>
                    </div>
                </article>
            @endforeach

            @if( $events->hasPages())
                <div class="mt-12">
                    {{ $events->links() }}
                </div>
            @endif
        </div>

    </div>
</x-events-layout>

