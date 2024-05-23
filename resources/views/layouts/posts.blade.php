<x-app-layout>
    <div class="container">
        <div class="flex gap-24">
            <div class="flex-1">
    {{ $slot }}
            </div>
            <div class="w-72">

                <h3 class="mb-4 text-wxl font-bold sm:text-xl">
                    Recent Posts
                </h3>

                <div class="space-y-6">
                    @foreach($latestPosts as $post)

                        <div>
                            <p class="mb-1 text-sm font-medium text-gray-600 dark:text-gray-400">
                                {{ $post->published_at->format('l jS F Y') }}
                            </p>
                            <h4 class="mb-2 text-lg font-semibold sm:text-xl">
                                <a
                                    href="{{ route('posts.post', $post->slug) }}"
                                    class="leading-7 text-et-navy hover:text-et-skyblue dark:text-gray-200 dark:hover:text-gray-400"
                                >
                                    {{ $post->title }}
                                </a>
                            </h4>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
