<x-app-layout>

    @section('page-header')
        <div class="bg-gradient-to-b from-et-light-skyblue via-et-skyblue to-et-light-skyblue py-16">

            <div class="relative mx-auto max-w-7xl">
                <div class="absolute left-0 w-1/4 h-full">
                    <div class="w-full h-full flex flex-col items-center justify-center">
                        <div class="w-full aspect-square bg-blue-500 rounded-full border-[10px] border-white overflow-hidden">
                            <img src="http://elliotstouch.hup234design.co.uk/storage/media/clutch-finger.jpg" class="h-full w-full object-cover object-center" />
                        </div>
                    </div>
                </div>
                <div class="absolute right-0 w-1/4 h-full">
                    <div class="w-full h-full flex flex-col items-center justify-center">
                        <div class="w-full aspect-square bg-blue-500 rounded-full border-[10px] border-white overflow-hidden">
                            <img src="http://elliotstouch.hup234design.co.uk/storage/media/elliots-touch-hi-viz.jpg" class="h-full w-full object-cover object-center" />
                        </div>
                    </div>
                </div>
                <div class="relative mx-auto w-[60%] overflow-hidden rounded-full border-[10px] border-white">
                    <img src="http://elliotstouch.hup234design.co.uk/storage/media/elliot.jpg" class="h-full w-full" />
                </div>
            </div>
        </div>
    @endsection



        <!-- Features Section: Key Features With Icons -->
        <div class="bg-white dark:bg-gray-900 dark:text-gray-100">
            <div
                class="container mx-auto space-y-16 px-4 py-8 lg:px-8 lg:py-16 xl:max-w-7xl"
            >
                <!-- Heading -->
                <div class="text-center">
{{--                    <div--}}
{{--                        class="mb-1 text-sm font-bold uppercase tracking-wider text-blue-600 dark:text-blue-500"--}}
{{--                    >--}}
{{--                        Save Time &amp; Deploy Faster--}}
{{--                    </div>--}}
                    <h2 class="mb-4 text-4xl font-black text-black dark:text-white">
                        A message from the Stevens family...
                    </h2>
                    <h3
                        class="mx-auto text-xl font-medium leading-relaxed text-gray-700 dark:text-gray-300 lg:w-2/3"
                    >
                        Welcome to Elliot's Touch, where you can find out all about our charity, the projects we are supporting and the events we hold throughout the year. Our aim is to bring communities together to raise awareness and funds for research into Mitochondrial Disease and Cardiomyopathy, which took the life of our son Elliot at only a year old. We hope that one day our research will make a real difference in helping to find cures for these horrible diseases.
                    </h3>
                </div>
                <!-- END Heading -->

                <!-- Features -->
                <div class="grid grid-cols-2 gap-4 text-center md:grid-cols-4 md:gap-12">
                    <div class="py-5">
                        <div
                            class="group relative mb-8 ml-3 inline-flex size-24 items-center justify-center"
                        >
                            <div
                                class="absolute inset-0 -m-3 -rotate-6 rounded-xl bg-et-skyblue transition duration-150 ease-out group-hover:rotate-6 group-hover:scale-110"
                            ></div>
                            <div
                                class="absolute inset-0 -m-3 rotate-2 rounded-xl bg-et-skyblue bg-opacity-50 shadow-inner transition duration-150 ease-out group-hover:-rotate-3 group-hover:scale-110"
                            ></div>
{{--                            <svg--}}
{{--                                viewBox="0 0 384 512"--}}
{{--                                xmlns="http://www.w3.org/2000/svg"--}}
{{--                                class="icon-html5 relative inline-block size-8 text-white transition duration-150 ease-out group-hover:scale-125"--}}
{{--                            >--}}
{{--                                <path--}}
{{--                                    fill="currentColor"--}}
{{--                                    d="M0 32l34.9 395.8L191.5 480l157.6-52.2L384 32H0zm308.2 127.9H124.4l4.1 49.4h175.6l-13.6 148.4-97.9 27v.3h-1.1l-98.7-27.3-6-75.8h47.7L138 320l53.5 14.5 53.7-14.5 6-62.2H84.3L71.5 112.2h241.1l-4.4 47.7z"--}}
{{--                                ></path>--}}
{{--                            </svg>--}}
                        </div>
                        <h4 class="mb-2 text-lg font-bold">Donate Now</h4>
                    </div>
                    <div class="py-5">
                        <div
                            class="group relative mb-8 ml-3 inline-flex size-24 items-center justify-center"
                        >
                            <div
                                class="absolute inset-0 -m-3 -rotate-6 rounded-xl bg-et-crimson transition duration-150 ease-out group-hover:rotate-6 group-hover:scale-110"
                            ></div>
                            <div
                                class="absolute inset-0 -m-3 rotate-2 rounded-xl bg-et-crimson bg-opacity-50 shadow-inner transition duration-150 ease-out group-hover:-rotate-3 group-hover:scale-110"
                            ></div>
{{--                            <svg--}}
{{--                                viewBox="0 0 512 512"--}}
{{--                                xmlns="http://www.w3.org/2000/svg"--}}
{{--                                class="icon-laravel relative inline-block size-8 text-white transition duration-150 ease-out group-hover:scale-125"--}}
{{--                            >--}}
{{--                                <path--}}
{{--                                    fill="currentColor"--}}
{{--                                    d="M504.4 115.83a5.72 5.72 0 00-.28-.68 8.52 8.52 0 00-.53-1.25 6 6 0 00-.54-.71 9.36 9.36 0 00-.72-.94c-.23-.22-.52-.4-.77-.6a8.84 8.84 0 00-.9-.68L404.4 55.55a8 8 0 00-8 0L300.12 111a8.07 8.07 0 00-.88.69 7.68 7.68 0 00-.78.6 8.23 8.23 0 00-.72.93c-.17.24-.39.45-.54.71a9.7 9.7 0 00-.52 1.25c-.08.23-.21.44-.28.68a8.08 8.08 0 00-.28 2.08v105.24l-80.22 46.19V63.44a7.8 7.8 0 00-.28-2.09c-.06-.24-.2-.45-.28-.68a8.35 8.35 0 00-.52-1.24c-.14-.26-.37-.47-.54-.72a9.36 9.36 0 00-.72-.94 9.46 9.46 0 00-.78-.6 9.8 9.8 0 00-.88-.68L115.61 1.07a8 8 0 00-8 0L11.34 56.49a6.52 6.52 0 00-.88.69 7.81 7.81 0 00-.79.6 8.15 8.15 0 00-.71.93c-.18.25-.4.46-.55.72a7.88 7.88 0 00-.51 1.24 6.46 6.46 0 00-.29.67 8.18 8.18 0 00-.28 2.1v329.7a8 8 0 004 6.95l192.5 110.84a8.83 8.83 0 001.33.54c.21.08.41.2.63.26a7.92 7.92 0 004.1 0c.2-.05.37-.16.55-.22a8.6 8.6 0 001.4-.58L404.4 400.09a8 8 0 004-6.95V287.88l92.24-53.11a8 8 0 004-7V117.92a8.63 8.63 0 00-.24-2.09zM111.6 17.28l80.19 46.15-80.2 46.18-80.18-46.17zm88.25 60V278.6l-46.53 26.79-33.69 19.4V123.5l46.53-26.79zm0 412.78L23.37 388.5V77.32L57.06 96.7l46.52 26.8v215.18a6.94 6.94 0 00.12.9 8 8 0 00.16 1.18 5.92 5.92 0 00.38.9 6.38 6.38 0 00.42 1 8.54 8.54 0 00.6.78 7.62 7.62 0 00.66.84c.23.22.52.38.77.58a8.93 8.93 0 00.86.66l92.19 52.18zm8-106.17l-80.06-45.32 84.09-48.41 92.26-53.11 80.13 46.13-58.8 33.56zm184.52 4.57L215.88 490.11V397.8l130.72-74.6 45.77-26.15zm0-119.13L358.68 250l-46.53-26.79v-91.42l33.69 19.4L392.37 178zm8-105.28l-80.2-46.17 80.2-46.16 80.18 46.15zm8 105.28V178L455 151.19l33.68-19.4v91.39z"--}}
{{--                                ></path>--}}
{{--                            </svg>--}}
                        </div>
                        <h4 class="mb-2 text-lg font-bold">Help Us</h4>
                    </div>
                    <div class="py-5">
                        <div
                            class="group relative mb-8 ml-3 inline-flex size-24 items-center justify-center"
                        >
                            <div
                                class="absolute inset-0 -m-3 -rotate-6 rounded-xl bg-et-blue transition duration-150 ease-out group-hover:rotate-6 group-hover:scale-110"
                            ></div>
                            <div
                                class="absolute inset-0 -m-3 rotate-2 rounded-xl bg-et-blue bg-opacity-50 shadow-inner transition duration-150 ease-out group-hover:-rotate-3 group-hover:scale-110"
                            ></div>
{{--                            <svg--}}
{{--                                viewBox="0 0 512 512"--}}
{{--                                xmlns="http://www.w3.org/2000/svg"--}}
{{--                                class="icon-react relative inline-block size-8 text-white transition duration-150 ease-out group-hover:scale-125"--}}
{{--                            >--}}
{{--                                <path--}}
{{--                                    fill="currentColor"--}}
{{--                                    d="M418.2 177.2c-5.4-1.8-10.8-3.5-16.2-5.1.9-3.7 1.7-7.4 2.5-11.1 12.3-59.6 4.2-107.5-23.1-123.3-26.3-15.1-69.2.6-112.6 38.4-4.3 3.7-8.5 7.6-12.5 11.5-2.7-2.6-5.5-5.2-8.3-7.7-45.5-40.4-91.1-57.4-118.4-41.5-26.2 15.2-34 60.3-23 116.7 1.1 5.6 2.3 11.1 3.7 16.7-6.4 1.8-12.7 3.8-18.6 5.9C38.3 196.2 0 225.4 0 255.6c0 31.2 40.8 62.5 96.3 81.5 4.5 1.5 9 3 13.6 4.3-1.5 6-2.8 11.9-4 18-10.5 55.5-2.3 99.5 23.9 114.6 27 15.6 72.4-.4 116.6-39.1 3.5-3.1 7-6.3 10.5-9.7 4.4 4.3 9 8.4 13.6 12.4 42.8 36.8 85.1 51.7 111.2 36.6 27-15.6 35.8-62.9 24.4-120.5-.9-4.4-1.9-8.9-3-13.5 3.2-.9 6.3-1.9 9.4-2.9 57.7-19.1 99.5-50 99.5-81.7 0-30.3-39.4-59.7-93.8-78.4zM282.9 92.3c37.2-32.4 71.9-45.1 87.7-36 16.9 9.7 23.4 48.9 12.8 100.4-.7 3.4-1.4 6.7-2.3 10-22.2-5-44.7-8.6-67.3-10.6-13-18.6-27.2-36.4-42.6-53.1 3.9-3.7 7.7-7.2 11.7-10.7zM167.2 307.5c5.1 8.7 10.3 17.4 15.8 25.9-15.6-1.7-31.1-4.2-46.4-7.5 4.4-14.4 9.9-29.3 16.3-44.5 4.6 8.8 9.3 17.5 14.3 26.1zm-30.3-120.3c14.4-3.2 29.7-5.8 45.6-7.8-5.3 8.3-10.5 16.8-15.4 25.4-4.9 8.5-9.7 17.2-14.2 26-6.3-14.9-11.6-29.5-16-43.6zm27.4 68.9c6.6-13.8 13.8-27.3 21.4-40.6s15.8-26.2 24.4-38.9c15-1.1 30.3-1.7 45.9-1.7s31 .6 45.9 1.7c8.5 12.6 16.6 25.5 24.3 38.7s14.9 26.7 21.7 40.4c-6.7 13.8-13.9 27.4-21.6 40.8-7.6 13.3-15.7 26.2-24.2 39-14.9 1.1-30.4 1.6-46.1 1.6s-30.9-.5-45.6-1.4c-8.7-12.7-16.9-25.7-24.6-39s-14.8-26.8-21.5-40.6zm180.6 51.2c5.1-8.8 9.9-17.7 14.6-26.7 6.4 14.5 12 29.2 16.9 44.3-15.5 3.5-31.2 6.2-47 8 5.4-8.4 10.5-17 15.5-25.6zm14.4-76.5c-4.7-8.8-9.5-17.6-14.5-26.2-4.9-8.5-10-16.9-15.3-25.2 16.1 2 31.5 4.7 45.9 8-4.6 14.8-10 29.2-16.1 43.4zM256.2 118.3c10.5 11.4 20.4 23.4 29.6 35.8-19.8-.9-39.7-.9-59.5 0 9.8-12.9 19.9-24.9 29.9-35.8zM140.2 57c16.8-9.8 54.1 4.2 93.4 39 2.5 2.2 5 4.6 7.6 7-15.5 16.7-29.8 34.5-42.9 53.1-22.6 2-45 5.5-67.2 10.4-1.3-5.1-2.4-10.3-3.5-15.5-9.4-48.4-3.2-84.9 12.6-94zm-24.5 263.6c-4.2-1.2-8.3-2.5-12.4-3.9-21.3-6.7-45.5-17.3-63-31.2-10.1-7-16.9-17.8-18.8-29.9 0-18.3 31.6-41.7 77.2-57.6 5.7-2 11.5-3.8 17.3-5.5 6.8 21.7 15 43 24.5 63.6-9.6 20.9-17.9 42.5-24.8 64.5zm116.6 98c-16.5 15.1-35.6 27.1-56.4 35.3-11.1 5.3-23.9 5.8-35.3 1.3-15.9-9.2-22.5-44.5-13.5-92 1.1-5.6 2.3-11.2 3.7-16.7 22.4 4.8 45 8.1 67.9 9.8 13.2 18.7 27.7 36.6 43.2 53.4-3.2 3.1-6.4 6.1-9.6 8.9zm24.5-24.3c-10.2-11-20.4-23.2-30.3-36.3 9.6.4 19.5.6 29.5.6 10.3 0 20.4-.2 30.4-.7-9.2 12.7-19.1 24.8-29.6 36.4zm130.7 30c-.9 12.2-6.9 23.6-16.5 31.3-15.9 9.2-49.8-2.8-86.4-34.2-4.2-3.6-8.4-7.5-12.7-11.5 15.3-16.9 29.4-34.8 42.2-53.6 22.9-1.9 45.7-5.4 68.2-10.5 1 4.1 1.9 8.2 2.7 12.2 4.9 21.6 5.7 44.1 2.5 66.3zm18.2-107.5c-2.8.9-5.6 1.8-8.5 2.6-7-21.8-15.6-43.1-25.5-63.8 9.6-20.4 17.7-41.4 24.5-62.9 5.2 1.5 10.2 3.1 15 4.7 46.6 16 79.3 39.8 79.3 58 0 19.6-34.9 44.9-84.8 61.4zm-149.7-15c25.3 0 45.8-20.5 45.8-45.8s-20.5-45.8-45.8-45.8c-25.3 0-45.8 20.5-45.8 45.8s20.5 45.8 45.8 45.8z"--}}
{{--                                ></path>--}}
{{--                            </svg>--}}
                        </div>
                        <h4 class="mb-2 text-lg font-bold">Our Projects</h4>
                    </div>
                    <div class="py-5">
                        <div
                            class="group relative mb-8 ml-3 inline-flex size-24 items-center justify-center"
                        >
                            <div
                                class="absolute inset-0 -m-3 -rotate-6 rounded-xl bg-et-dark-crimson transition duration-150 ease-out group-hover:rotate-6 group-hover:scale-110"
                            ></div>
                            <div
                                class="absolute inset-0 -m-3 rotate-2 rounded-xl bg-et-dark-crimson bg-opacity-50 shadow-inner transition duration-150 ease-out group-hover:-rotate-3 group-hover:scale-110"
                            ></div>
{{--                            <svg--}}
{{--                                viewBox="0 0 448 512"--}}
{{--                                xmlns="http://www.w3.org/2000/svg"--}}
{{--                                class="icon-vue relative inline-block size-8 text-white transition duration-150 ease-out group-hover:scale-125"--}}
{{--                            >--}}
{{--                                <path--}}
{{--                                    fill="currentColor"--}}
{{--                                    d="M356.9 64.3H280l-56 88.6-48-88.6H0L224 448 448 64.3h-91.1zm-301.2 32h53.8L224 294.5 338.4 96.3h53.8L224 384.5 55.7 96.3z"--}}
{{--                                ></path>--}}
{{--                            </svg>--}}
                        </div>
                        <h4 class="mb-2 text-lg font-bold">Fundraising Ideas</h4>
                    </div>
                </div>
                <!-- END Features -->
            </div>
        </div>
        <!-- END Features Section: Key Features With Icons -->



        <div class="hidden mt-12 max-w-7xl mx-auto px-8">

            <div class="prose max-w-none">

                <div class="max-w-4xl mx-auto text-center">

                    <h1>A message from the Stevens family...</h1>

                    <div class="lead"><p>Welcome to Elliot's Touch, where you can find out all about our charity, the projects we are supporting and the events we hold throughout the year. Our aim is to bring communities together to raise awareness and funds for research into Mitochondrial Disease and Cardiomyopathy, which took the life of our son Elliot at only a year old. We hope that one day our research will make a real difference in helping to find cures for these horrible diseases.</p></div>

                </div>
            </div>
            <div>
                <div class="h-full grid gap-8 mt-16 sm:grid-cols-2 lg:grid-cols-4">
                    <a class="block bg-et-skyblue rounded-full flex items-center justify-center p-4 text-center shadow-2xl shadow-gray-400 sm:p-8 lg:aspect-square lg:rounded-full ">
                    <span class="font-heading font-bold text-3xl xl:text-4xl">
                        Donate<br>Now
                    </span>
                    </a>
                    <a class="bg-et-crimson rounded-full flex items-center justify-center p-4 text-center shadow-2xl shadow-gray-400  sm:p-8 lg:aspect-square lg:rounded-full">
                    <span class="font-heading font-bold text-3xl xl:text-4xl">
                        Help<br>Us
                    </span>
                    </a>
                    <a class="bg-et-skyblue bg-opacity-50 rounded-full flex items-center justify-center p-4 text-center shadow-2xl  sm:p-8 shadow-gray-400 lg:aspect-square lg:rounded-full">
                    <span class="font-heading font-bold text-3xl xl:text-4xl">
                        Our<br>Projects
                    </span>
                    </a>
                    <a class="bg-et-crimson bg-opacity-70 rounded-full flex items-center justify-center p-4 text-center shadow-2xl  sm:p-8 shadow-gray-400 lg:aspect-square lg:rounded-full">
                    <span class="font-heading font-bold text-3xl xl:text-4xl">
                        Fundraising<br>Ideas
                    </span>
                    </a>
                </div>
            </div>


        </div>

{{--    <div class="container">--}}
{{--      <div class="prose max-w-none">--}}
{{--        <h1>{{ $page->title }}</h1>--}}
{{--        @if($page->content)--}}
{{--          {!! tiptap_converter()->asHTML($page->content) !!}--}}
{{--        @endif--}}
{{--      </div>--}}
{{--    </div>--}}

    <x-cms::content-blocks :blocks="$page->content_blocks" />
</x-app-layout>
