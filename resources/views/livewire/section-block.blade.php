<div>
    @isset($this->data['include_header'])
        <div class="mb-16">
            <div class="mx-auto max-w-2xl text-center">
                @if($this->data['header_eyebrow'] ?? null)
                    <p class="mb-2 text-sm font-bold leading-7 text-et-dark-navy uppercase">
                        {{ $this->data['header_eyebrow'] }}
                    </p>
                @endif
                @if($this->data['header_title'] ?? null)
                        <h2 class="mb-4 text-6xl font-heading text-blue-900 tracking-tight dark:text-white">
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

    @switch($this->data['layout'])

{{--        @case("imageOverlay")--}}
{{--            <div class="grid grid-cols-3 gap-8">--}}
{{--                @foreach($section?->sectionItems ?? [] as $sectionItem)--}}
{{--                    <div class="aspect-square bg-et-crimson">--}}
{{--                        @if( $sectionItem->featuredImage )--}}
{{--                                <x-media-image-renderer--}}
{{--                                    :media="$sectionItem->featuredImage->media_id"--}}
{{--                                    imgClass="object-cover object-center h-full w-full "--}}
{{--                                />--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--            @break--}}

        @case("cardGrid")
            <div @class([
                "grid grid-cols-2 gap-16",
                "grid-cols-2" => $this->data['grid_cols'] == 2,
                "grid-cols-3" => $this->data['grid_cols'] == 3,
                "grid-cols-4" => $this->data['grid_cols'] == 4,
            ])>
                @foreach($section?->sectionItems ?? [] as $sectionItem)
                    <!-- Cards: Story -->
                    <div
                        class="flex flex-col overflow-hidden rounded-lg bg-white dark:bg-gray-800 dark:text-gray-100"
                    >
                        <!-- Card Cover -->
                        <div @class([
                            "bg-et-crimson overflow-hidden",
                            "rounded-full" => $this->data['image_style'] == 'circle',
                            "rounded-3xl" => $this->data['image_style'] == 'rounded',
                        ])>
                            <div @class([
                                "aspect-video" => $this->data["image_style"] != 'circle',
                                "aspect-square" => $this->data["image_style"] == 'circle'
                            ])>
                                @if( $sectionItem->featuredImage )
                                    <x-media-image-renderer
                                        :media="$sectionItem->featuredImage->media_id"
                                        imgClass="
                                            object-cover object-center h-full w-full
                                            {{ $this->data['image_style'] == 'circle'
                                                ? 'rounded-full'
                                                : ($this->data['image_style'] == 'rounded' ? 'rounded-3xl' : '' )
                                            }}
                                        "
                                    />
                                @endif
                            </div>
                        </div>
                        <!-- END Card Cover -->

                        <!-- Card Body -->
                        <div @class([
                            "prose max-w-none grow py-8",
                            "text-center" => $this->data['text_alignment'] == 'center'
                        ])>
{{--                            <p class="mb-1 font-semibold text-blue-500">Stories</p>--}}
                            <h2 class="text-et-navy">
                                {{ $sectionItem->title }}
                            </h2>
                            <h3 class="text-et-light-navy">
                                {{ $sectionItem->subtitle }}
                            </h3>
                            @if($sectionItem->summary)
                                <div class="font-medium">
                                {!! tiptap_converter()->asHTML($sectionItem->summary) !!}
                                </div>
                            @endif
                            @if($sectionItem->content)
                                {!! tiptap_converter()->asHTML($sectionItem->content) !!}
                            @endif
                        </div>
                        <!-- END Card Body -->

                    </div>
                    <!-- END Cards: Story -->

                @endforeach
            </div>
            @break

        @case("mediaObject")
            <div class="space-y-16">
                @foreach($section?->sectionItems ?? [] as $sectionItem)
                    <div
                        class="flex flex-col overflow-hidden rounded-lg bg-white dark:bg-gray-800 md:flex-row"
                    >
                        <div
                            class="group relative block w-full overflow-hidden md:w-2/5 xl:w-1/3 bg-et-crimson"
                        >

                            @if( $sectionItem->featuredImage )
                                <div class="h-64 md:h-auto md:absolute md:inset-0">
                                <x-media-image-renderer
                                    :media="$sectionItem->featuredImage->media_id"
                                    imgClass="object-cover object-center h-full w-full "
                                />
                                </div>
                            @endif
                        </div>
                        <div
                            class="prose max-w-none w-full p-6 md:w-3/5 lg:self-center md:px-10 md:py-8 xl:w-2/3"
                        >
                            <h2 class="text-et-navy">
                                {{ $sectionItem->title }}
                            </h2>
{{--                            <p class="mb-3 text-sm text-gray-600 dark:text-gray-400">--}}
{{--                                <a--}}
{{--                                    href="javascript:void(0)"--}}
{{--                                    class="font-medium text-blue-600 hover:text-blue-400 dark:text-blue-400 dark:hover:text-blue-300"--}}
{{--                                >Joe Smith</a--}}
{{--                                >--}}
{{--                                on <span class="font-medium">March 3, 2023</span> · 12 min read--}}
{{--                            </p>--}}
                            @if($sectionItem->summary)
                                {!! tiptap_converter()->asHTML($sectionItem->summary) !!}
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
            @break
    @endswitch

</div>

{{--    <div class="grid grid-cols-3 gap-16">--}}
{{--        @foreach($section?->sectionItems ?? [] as $sectionItem)--}}

{{--                        <!-- Item -->--}}
{{--                        <div--}}
{{--                            class="group relative overflow-hidden rounded-lg bg-blue-900 focus-within:ring-4 focus-within:ring-blue-500 focus-within:ring-opacity-50 focus-within:ring-offset-2 focus:outline-none focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 focus:ring-offset-2 dark:ring-offset-gray-900"--}}
{{--                            tabindex="0"--}}
{{--                        >--}}
{{--                            <img--}}
{{--                                src="https://cdn.tailkit.com/media/placeholders/photo-73F4pKoUkM0-800x600.jpg"--}}
{{--                                alt="Image 1"--}}
{{--                            />--}}

{{--                            <!-- Item Overlay -->--}}
{{--                            <div--}}
{{--                                class="absolute inset-0 flex flex-col items-center justify-center bg-blue-900 bg-opacity-80 opacity-0 transition duration-300 ease-out group-focus-within:opacity-100 group-hover:opacity-100 group-focus:opacity-100"--}}
{{--                            >--}}
{{--                                <div class="text-center">--}}
{{--                                    <h4 class="text-lg font-semibold text-white">{{ $sectionItem->title }}</h4>--}}
{{--                                    <h5 class="mb-5 text-sm text-white text-opacity-80">--}}
{{--                                        {{ $sectionItem->content }}--}}
{{--                                    </h5>--}}
{{--                                    <a--}}
{{--                                        href="javascript:void(0)"--}}
{{--                                        class="inline-flex items-center justify-center space-x-2 rounded-lg border border-blue-600 bg-blue-600 px-3 py-2 text-sm font-semibold leading-5 text-white hover:border-blue-700 hover:bg-blue-700 hover:text-white focus:ring focus:ring-blue-400 focus:ring-opacity-50 active:border-blue-600 active:bg-blue-600"--}}
{{--                                    >--}}
{{--                                        <span>More Info</span>--}}
{{--                                        <svg--}}
{{--                                            class="hi-mini hi-arrow-top-right-on-square inline-block size-4 opacity-50"--}}
{{--                                            xmlns="http://www.w3.org/2000/svg"--}}
{{--                                            viewBox="0 0 20 20"--}}
{{--                                            fill="currentColor"--}}
{{--                                            aria-hidden="true"--}}
{{--                                        >--}}
{{--                                            <path--}}
{{--                                                fill-rule="evenodd"--}}
{{--                                                d="M4.25 5.5a.75.75 0 00-.75.75v8.5c0 .414.336.75.75.75h8.5a.75.75 0 00.75-.75v-4a.75.75 0 011.5 0v4A2.25 2.25 0 0112.75 17h-8.5A2.25 2.25 0 012 14.75v-8.5A2.25 2.25 0 014.25 4h5a.75.75 0 010 1.5h-5z"--}}
{{--                                                clip-rule="evenodd"--}}
{{--                                            />--}}
{{--                                            <path--}}
{{--                                                fill-rule="evenodd"--}}
{{--                                                d="M6.194 12.753a.75.75 0 001.06.053L16.5 4.44v2.81a.75.75 0 001.5 0v-4.5a.75.75 0 00-.75-.75h-4.5a.75.75 0 000 1.5h2.553l-9.056 8.194a.75.75 0 00-.053 1.06z"--}}
{{--                                                clip-rule="evenodd"--}}
{{--                                            />--}}
{{--                                        </svg>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- END Item Overlay -->--}}
{{--                        </div>--}}
{{--                        <!-- END Item -->--}}
{{--            <!-- END Image Overlays Section: Overlay Fade In -->--}}


{{--            <!-- Cards: Author -->--}}
{{--            <div--}}
{{--                class="flex flex-col overflow-hidden rounded-lg bg-white shadow-sm dark:bg-gray-800 dark:text-gray-100"--}}
{{--            >--}}
{{--                <!-- Card Cover/Avatar -->--}}
{{--                <div class="aspect-square bg-et-crimson">--}}
{{--                    <div class="h-full flex flex-col items-center justify-center bg-black/25 p-8">--}}
{{--                        <div class="text-center">--}}
{{--                            <h3 class="text-xl font-semibold text-white">--}}
{{--                                {{ $sectionItem->title }}--}}
{{--                            </h3>--}}
{{--                            <p class="text-sm text-white opacity-90">Author</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- END Card Cover/Avatar -->--}}
{{--            </div>--}}
{{--            <!-- END Cards: Author -->--}}

{{--        @endforeach--}}
{{--    </div>--}}

