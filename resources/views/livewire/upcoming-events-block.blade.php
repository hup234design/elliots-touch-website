<div>
    @isset($this->data['include_header'])



        <!-- Heading -->
        <div class="mx-auto text-center mb-16">
            <h2 class="mb-4 text-6xl font-heading text-blue-900 tracking-tight">
                {{ $this->data['header_title'] }}
            </h2>
            <h3
                class="mx-auto text-xl font-medium leading-relaxed text-gray-700 dark:text-gray-300 lg:w-2/3 xl:w-1/2"
            >
                {!! nl2br($this->data['header_text']) !!}
            </h3>
        </div>
        <!-- END Heading -->



        {{--        <div class="mb-12">--}}
        {{--            <div class="mx-auto max-w-2xl text-center">--}}
        {{--                @if($this->data['header_eyebrow'] ?? null)--}}
        {{--                    <p class="mb-2 text-sm font-bold leading-7 text-et-dark-navy uppercase">--}}
        {{--                        {{ $this->data['header_eyebrow'] }}--}}
        {{--                    </p>--}}
        {{--                @endif--}}
        {{--                @if($this->data['header_title'] ?? null)--}}
        {{--                    <h2 class="text-3xl font-bold tracking-tight text-et-navy sm:text-4xl">--}}
        {{--                        {!! nl2br($this->data['header_title']) !!}--}}
        {{--                    </h2>--}}
        {{--                @endif--}}
        {{--                @if($this->data['header_eyebrow'] ?? null)--}}
        {{--                    <p class="mt-6 text-md font-medium leading-8 text-et-light-navy sm:text-lg">--}}
        {{--                        {!! nl2br($this->data['header_text']) !!}--}}
        {{--                    </p>--}}
        {{--                @endif--}}
        {{--            </div>--}}
        {{--        </div>--}}
    @endif


    <!-- Blog List Section: In Grid Alternate -->
    <div class="bg-white dark:bg-gray-900 dark:text-gray-100">
        <div
            class=""
        >
            <!-- Latest Posts -->
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3 lg:gap-10">
                @foreach($events as $event)
                    <a href="{{ route('events.event', $event->slug) }}" class="group relative block">
                        <div
                            class="absolute inset-0 scale-0 rounded bg-et-light-skyblue/50 opacity-0 transition group-hover:scale-110 group-hover:opacity-100 group-active:bg-et-light-skyblue dark:bg-gray-800 dark:group-active:bg-blue-600 dark:group-active:bg-opacity-25"
                        ></div>
                        <div class="relative">
                            <div class="aspect-video aspect-w-4 block bg-et-crimson">
                                @if( $event->featuredImage )
                                    <x-media-image-renderer
                                        :media="$event->featuredImage->media_id"
                                        imgClass="object-cover object-center h-full w-full"
                                    />
                                @endif
                            </div>
                            <p
                                class="mb-1 mt-3 text-sm font-medium text-gray-600 dark:text-gray-400"
                            >
                                <span class="font-medium">
                                    {{ $event->date }}
                                </span>
                            </p>
                            <h4
                                class="mb-2 text-xl font-semibold leading-6 text-gray-500 dark:text-gray-200"
                            >
                                {{ $event->title }}
                            </h4>

                            <p>{!! nl2br($event->summary) !!}</p>
                        </div>
                    </a>
                @endforeach
            </div>
            <!-- END Latest Posts -->
        </div>
    </div>
    <!-- END Blog List Section: In Grid Alternate -->


</div>
