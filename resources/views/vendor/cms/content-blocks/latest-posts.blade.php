<div>

    {{--    <div class="h-[635px]">--}}
    {{--        <iframe width="100%" height="100%" src="{{ url('themes/givest/blog-posts.php') }}"></iframe>--}}
    {{--    </div>--}}

    @isset($this->data['include_header'])
        <div class="mb-12">
            <div class="mx-auto max-w-2xl text-center">
                @if($this->data['header_eyebrow'] ?? null)
                    <p class="mb-2 text-sm font-bold leading-7 text-et-dark-navy uppercase">
                        {{ $this->data['header_eyebrow'] }}
                    </p>
                @endif
                @if($this->data['header_title'] ?? null)
                    <h2 class="text-3xl font-bold tracking-tight text-et-navy sm:text-4xl">
                        {!! nl2br($this->data['header_title']) !!}
                    </h2>
                @endif
                @if($this->data['header_eyebrow'] ?? null)
                    <p class="mt-6 text-md font-medium leading-8 text-et-light-navy sm:text-lg">
                        {!! nl2br($this->data['header_text']) !!}
                    </p>
                @endif
            </div>
        </div>
    @endif

    <div class="grid gap-12 lg:grid-cols-3 ">
        @foreach($posts as $post)
            <div class="group relative pb-40 overflow-hidden">
                <div class="aspect-square overflow-hidden bg-et-skyblue">
                    <x-cms-media-image-renderer
                        :media="$post->featuredImage?->media_id"
                        :curation="$post->featuredImage?->curation"
                        preset="thumbnail"
                        imgClass="w-full h-full object-cover transform transition duration-300 group-hover:scale-110"
                    />
                </div>
                <div class="absolute top-0 left-0 ml-6 mt-6">
                    <div class="relative text-white bg-brand-crimson leading-none text-center p-4">
                        <p class="text-2xl font-extrabold">{{ $post->published_at->format('d') }}</p>
                        <p class="mt-1 text-xs uppercase font-extrabold">{{ $post->published_at->format('F') }}</p>
                    </div>
                </div>
                <div class="absolute bottom-0 left-0 mx-4 px-8 pt-8 bg-gray-50 -mt-16 -mb-20 transition-all duration-300 group-hover:mb-0 lg:mx-8">
                    @if($post->post_category_id)
                    <a
                        href="{{ route('posts.category', $post->post_category->slug) }}"
                        class="inline-block px-4 py-1 bg-brand-skyblue bg-opacity-90 mb-4 font-semibold text-white hover:bg-opacity-80 transition-all duration-300"
                    >
                        {{ $post->post_category->title }}
                    </a>
                    @endif
                    <h3 class="text-2xl mb-4 font-bold">{{ $post->title }}</h3>
                    <div class="min-h-24">
                        <p class="line-clamp-4">{{ nl2br($post->summary) }}</p>
                    </div>
                    <div class="mt-8 h-20 flex items-center">
                        <a
                            href="{{ route('posts.post', $post->slug) }}"
                            class="border-2 border-brand-skyblue rounded-2xl px-4 py-2 text-brand-skyblue font-semibold hover:bg-brand-skyblue hover:text-white transition-all duration-300"
                        >
                            Read More &rarr;
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>
