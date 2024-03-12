<x-app-layout>
    <div class="container">
        <div class="flex gap-24">
            <div class="flex-1">
                {{ $slot }}
            </div>
            <div class="w-72">

{{--                <h2>Recent Posts</h2>--}}

{{--                <div class="space-y-6">--}}
{{--                    @foreach($latestPosts as $post)--}}

{{--                        <div>--}}
{{--                            <p class="mb-1 text-sm font-medium text-gray-600 dark:text-gray-400">--}}
{{--                                Mar 3, 2023 · 12 min read--}}
{{--                            </p>--}}
{{--                            <h4 class="mb-2 text-lg font-bold sm:text-xl">--}}
{{--                                <a--}}
{{--                                    href="javascript:void(0)"--}}
{{--                                    class="leading-7 text-gray-800 hover:text-gray-600 dark:text-gray-200 dark:hover:text-gray-400"--}}
{{--                                >--}}
{{--                                    The 10 best hiking trails in the world you should put in your bucket--}}
{{--                                    list--}}
{{--                                </a>--}}
{{--                            </h4>--}}
{{--                            <p--}}
{{--                                class="mb-2 text-sm leading-relaxed text-gray-600 dark:text-gray-400"--}}
{{--                            >--}}
{{--                                Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed--}}
{{--                                rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec--}}
{{--                                lectus.--}}
{{--                            </p>--}}
{{--                            <a--}}
{{--                                href="javascript:void(0)"--}}
{{--                                class="text-sm font-medium text-blue-600 hover:text-blue-400 dark:text-blue-400 dark:hover:text-blue-300"--}}
{{--                            >Read More</a--}}
{{--                            >--}}
{{--                        </div>--}}

{{--                        <a href="{{ route('posts.post', $post->slug) }}" class="block no-underline space-y-1">--}}
{{--                            <p class="text-sm text-gray-600 my-0">{{ $post->published_at->format('l jS F Y') }}</p>--}}
{{--                            <h4 class="my-0">{{ $post->title }}</h4>--}}
{{--                        </a>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        </div>
    </div>
</x-app-layout>
