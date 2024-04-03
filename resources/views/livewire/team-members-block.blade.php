<div>
    @isset($this->data['include_header'])

        <div class="mx-auto text-center mb-16">
            <h2 class="mb-4 text-6xl font-heading text-blue-900 tracking-tight dark:text-white">
                {{ $this->data['header_title'] }}
            </h2>
            <h3
                class="mx-auto text-xl font-medium leading-relaxed text-gray-700 dark:text-gray-300 lg:w-2/3 xl:w-1/2"
            >
                {!! nl2br($this->data['header_text']) !!}
            </h3>
        </div>
    @endif

        <div class="bg-white dark:bg-gray-900 dark:text-gray-100">
            <div class="">
                <div class="grid grid-cols-1 gap-8 md:grid-cols-3 lg:gap-10">
                    @foreach($team_members as $team_member)
                        <div class="group relative block">
                        <div
                            class="absolute inset-0 scale-0 rounded bg-et-light-skyblue/50 opacity-0 transition group-hover:scale-110 group-hover:opacity-100 group-active:bg-et-light-skyblue dark:bg-gray-800 dark:group-active:bg-blue-600 dark:group-active:bg-opacity-25"
                        ></div>
                        <div class="relative">
                            <div class="aspect-square aspect-w-4 block bg-et-crimson">
                                @if( $team_member->media )
                                    <x-media-image-renderer
                                        :media="$team_member->media"
                                        imgClass="object-cover object-center h-full w-full"
                                    />
                               @endif
                            </div>
                            <h4
                                class="mt-4 mb-2 text-lg font-semibold leading-6 text-gray-500 dark:text-gray-200"
                            >
                                {{ $team_member->name }}
                            </h4>

                            <p>{!! nl2br($team_member->bio) !!}</p>
                        </div>
                    </a>
                    @endforeach
                </div>
                <!-- END Latest Posts -->
            </div>
        </div>
        <!-- END Blog List Section: In Grid Alternate -->


</div>
