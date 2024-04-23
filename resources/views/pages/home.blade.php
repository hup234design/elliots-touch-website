<x-app-layout>

    <div class="bg-et-skyblue py-8">

        <div class="container">
            <div class="relative h-96">
                <div class="absolute left-0 w-1/4 h-full">
                    <div class="w-full h-full flex flex-col items-center justify-center">
                        <div class="w-full aspect-square rounded-full overflow-hidden">
                            <x-media-image-renderer
                                :media="$page->heroImageLeft"
                                imgClass="h-full w-full object-cover object-center   rounded-full"
                            />
                        </div>
                    </div>
                </div>
                <div class="absolute right-0 w-1/4 h-full">
                    <div class="w-full h-full flex flex-col items-center justify-center">
                        <div class="w-full aspect-square rounded-full overflow-hidden">
                            <x-media-image-renderer
                                :media="$page->heroImageRight"
                                imgClass="h-full w-full object-cover object-center   rounded-full"
                            />
                        </div>
                    </div>
                </div>
                <div class="relative mx-auto w-[60%] h-full bg-gray-100  rounded-full">
                    <x-media-image-renderer
                        :media="$page->heroImageCenter"
                        imgClass="h-full w-full object-cover object-center   rounded-full"
                    />
                </div>
            </div>
        </div>

    </div>

    <div class="bg-gradient-to-t from-et-light-skyblue/20">
        <div class="container py-6">
            <div class="grid gap-24 lg:grid-cols-5">
                <div class="col-span-3 flex flex-col justify-center">
                    <h2 class="mb-4 text-3xl font-heading font-bold  text-blue-900 dark:text-white">
                        {{ $page->introduction_heading }}
                    </h2>
                    <p
                        class="mt-6 text-lg font-medium leading-relaxed text-gray-700 dark:text-gray-300"
                    >
                        {!! nl2br($page->introduction) !!}
                    </p>
                </div>

                <div class="w-full lg:col-span-2 grid gap-4 md:grid-cols-4 lg:grid-cols-2">
                    <a class="block bg-et-skyblue rounded-full flex items-center justify-center p-4 text-center shadow-2xl shadow-gray-400 sm:p-8 lg:aspect-square lg:rounded-full ">
                    <span class="font-heading font-extrabold text-2xl xl:text-3xl tracking-wider">
                        Donate<br>Now
                    </span>
                    </a>
                    <a class="bg-et-crimson rounded-full flex items-center justify-center p-4 text-center shadow-2xl shadow-gray-400  sm:p-8 lg:aspect-square lg:rounded-full">
                    <span class="font-heading font-bold text-2xl xl:text-3xl tracking-wider">
                        Help<br>Us
                    </span>
                    </a>
                    <a class="bg-et-skyblue bg-opacity-50 rounded-full flex items-center justify-center p-4 text-center shadow-2xl  sm:p-8 shadow-gray-400 lg:aspect-square lg:rounded-full">
                    <span class="font-heading font-bold text-2xl xl:text-3xl">
                        Our<br>Projects
                    </span>
                    </a>
                    <a class="bg-et-crimson bg-opacity-70 rounded-full flex items-center justify-center p-4 text-center shadow-2xl  sm:p-8 shadow-gray-400 lg:aspect-square lg:rounded-full">
                    <span class="font-heading font-bold text-2xl xl:text-3xl">
                        Fundraising<br>Ideas
                    </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-16">

            <div class="mx-auto text-center mb-16">
                <h2 class="mb-4 text-6xl font-heading text-blue-900 tracking-tight">
                    Upcoming Events
                </h2>
{{--                <h3--}}
{{--                    class="mx-auto text-xl font-medium leading-relaxed text-gray-700 dark:text-gray-300 lg:w-2/3 xl:w-1/2"--}}
{{--                >--}}
{{--                    {!! nl2br($this->data['header_text']) !!}--}}
{{--                </h3>--}}
            </div>

        <div class="container">
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
                                <div class="aspect-video aspect-w-4 block bg-et-crimson rounded-3xl overflow-hidden">
                                    @if( $event->featuredImage )
                                        <x-media-image-renderer
                                            :media="$event->featuredImage->media_id"
                                            imgClass="object-cover object-center h-full w-full rounded-3xl"
                                        />
                                    @endif
                                </div>
                                <div class="px-4">
                                <p
                                    class="mb-2 mt-4 text-sm font-medium text-gray-600 dark:text-gray-400"
                                >
                                <span class="font-medium">
                                    {{ $event->date->format('j F Y') }}
                                </span>
                                </p>
                                <h4
                                    class="mb-3 text-xl font-semibold leading-6 text-gray-500 dark:text-gray-200"
                                >
                                    {{ $event->title }}
                                </h4>

                                <p>{!! nl2br($event->summary) !!}</p>
                            </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        </div>

    </div>

    <div class="mt-24">

            <div class="mx-auto text-center mb-16">
                <h2 class="mb-4 text-6xl font-heading text-blue-900 tracking-tight dark:text-white">
                    Latest News
                </h2>
{{--                <h3--}}
{{--                    class="mx-auto text-xl font-medium leading-relaxed text-gray-700 dark:text-gray-300 lg:w-2/3 xl:w-1/2"--}}
{{--                >--}}
{{--                    {!! nl2br($this->data['header_text']) !!}--}}
{{--                </h3>--}}
            </div>

        <div class="container">
        <div class="bg-white dark:bg-gray-900 dark:text-gray-100">
            <div
                class=""
            >
                <!-- Latest Posts -->
                <div class="grid grid-cols-1 gap-8 md:grid-cols-3 lg:gap-10">
                    @foreach($posts as $post)
                        <a href="{{ route('posts.post', $post->slug) }}" class="group relative block">
                            <div
                                class="absolute inset-0 scale-0 rounded bg-et-light-skyblue/50 opacity-0 transition group-hover:scale-110 group-hover:opacity-100 group-active:bg-et-light-skyblue dark:bg-gray-800 dark:group-active:bg-blue-600 dark:group-active:bg-opacity-25"
                            ></div>
                            <div class="relative">
                                <div class="aspect-video aspect-w-4 block bg-et-crimson rounded-3xl overflow-hidden">
                                    @if( $post->featuredImage )
                                        <x-media-image-renderer
                                            :media="$post->featuredImage->media_id"
                                            imgClass="object-cover object-center h-full w-full rounded-3xl"
                                        />
                                    @endif
                                </div>
                                <div class="px-4">
                                <p
                                    class="mb-2 mt-4 text-sm font-medium text-gray-600 dark:text-gray-400"
                                >
                                <span class="font-medium">
                                    {{ $post->published_at->format('j F Y') }}
                                </span>
                                </p>
                                <h4
                                    class="mb-3 text-lg font-semibold leading-6 text-gray-500 dark:text-gray-200"
                                >
                                    {{ $post->title }}
                                </h4>

                                <p class="line-clamp-4">{!! nl2br($post->summary) !!}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        </div>


    </div>


</x-app-layout>
