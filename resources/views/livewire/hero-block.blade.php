<div>
    {{--    <div class="border border-gray-400 bg-gray-100 flex items-center justify-center h-64">--}}
    {{--        HERO BLOCK--}}
    {{--    </div>--}}

    {{--    <p>{{ $this->data['images'][0] ?? null }}</p>--}}
    {{--    <p>{{ $this->data['images'][1] ?? null }}</p>--}}
    {{--    <p>{{ $this->data['images'][2] ?? null }}</p>--}}

    <div class="bg-et-skyblue py-8">

        <div class="container">
            <div class="relative h-96">
                <div class="absolute left-0 w-1/4 h-full">
                    <div class="w-full h-full flex flex-col items-center justify-center">
                        <div class="w-full aspect-square rounded-full overflow-hidden">
                            <x-media-image-renderer
                                :media="$this->data['images'][0]"
                                imgClass="h-full w-full object-cover object-center   rounded-full"
                            />
                        </div>
                    </div>
                </div>
                <div class="absolute right-0 w-1/4 h-full">
                    <div class="w-full h-full flex flex-col items-center justify-center">
                        <div class="w-full aspect-square rounded-full overflow-hidden">
                            <x-media-image-renderer
                                :media="$this->data['images'][2]"
                                imgClass="h-full w-full object-cover object-center   rounded-full"
                            />
                        </div>
                    </div>
                </div>
                <div class="relative mx-auto w-[60%] h-full bg-gray-100  rounded-full">
                    <x-media-image-renderer
                        :media="$this->data['images'][1]"
                        imgClass="h-full w-full object-cover object-center   rounded-full"
                    />
                </div>
            </div>
        </div>

    </div>

    {{--                <div class="container">--}}
    {{--                <div class="relative">--}}
    {{--                    <div class="absolute left-0 w-1/4 h-96">--}}
    {{--                        <div class="w-full h-full flex flex-col items-center justify-center">--}}
    {{--                            <div class="w-full aspect-square bg-blue-500 rounded-full text-2xl xl:text-3xl overflow-hidden">--}}
    {{--                                <img src="http://elliotstouch.hup234design.co.uk/storage/media/clutch-finger.jpg" class="h-full w-full object-cover object-center" />--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="absolute right-0 w-1/4 h-96">--}}
    {{--                        <div class="w-full h-full flex flex-col items-center justify-center">--}}
    {{--                            <div class="w-full aspect-square bg-blue-500 rounded-full text-2xl xl:text-3xl overflow-hidden">--}}
    {{--                                <img src="http://elliotstouch.hup234design.co.uk/storage/media/elliots-touch-hi-viz.jpg" class="h-full w-full object-cover object-center" />--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="relative mx-auto w-[60%] h-96 overflow-hidden rounded-full text-2xl xl:text-3xl">--}}
    {{--                        <x-media-image-renderer--}}
    {{--                            :media="$this->data['images'][1]"--}}
    {{--                            imgClass="h-full w-full object-cover object-center"--}}
    {{--                        />--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            </div>--}}

    <div class="bg-gradient-to-t from-et-light-skyblue/20">
        <div class="container py-12">
            <div class="grid gap-24 lg:grid-cols-5">
                <div class="col-span-3">
                    <h2 class="mb-4 text-3xl font-black text-black dark:text-white">
                        {{ $this->data['title'] }}
                    </h2>
                    <p
                        class="text-xl font-medium leading-relaxed text-gray-700 dark:text-gray-300"
                    >
                        {!! nl2br($this->data['introduction']) !!}
                    </p>
                </div>

                <div class="col-span-2 grid gap-8 md:grid-cols-4 lg:grid-cols-2">
                    <a class="block bg-et-skyblue rounded-full flex items-center justify-center p-4 text-center shadow-2xl shadow-gray-400 sm:p-8 lg:aspect-square lg:rounded-full ">
                    <span class="font-heading font-bold text-2xl xl:text-3xl">
                        Donate<br>Now
                    </span>
                    </a>
                    <a class="bg-et-crimson rounded-full flex items-center justify-center p-4 text-center shadow-2xl shadow-gray-400  sm:p-8 lg:aspect-square lg:rounded-full">
                    <span class="font-heading font-bold text-2xl xl:text-3xl">
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
</div>
