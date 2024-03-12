<x-app-layout>

    @section('page-header')
        <div class="bg-et-skyblue py-16">

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

        <div class="mt-12 max-w-7xl mx-auto px-8">
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
