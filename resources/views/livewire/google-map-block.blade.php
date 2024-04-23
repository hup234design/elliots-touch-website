<div>
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
{{--    <div class="border border-gray-400 bg-gray-100 flex items-center justify-center h-64">--}}
{{--        {{ json_encode($this->data['location']) }}--}}
{{--        <hr>--}}
{{--        {{ $this->data['location'] ? $this->data['location']['lat'] : '-' }}--}}
{{--        <hr>--}}
{{--        {{ $this->data['location'] ? $this->data['location']['lng'] : '-' }}--}}
{{--    </div>--}}

        <div id="map" class="w-full h-[40vh]"></div>
        <script>
            function initMap() {
                var location = {lat: {{ $this->data['location']['lat'] }}, lng: {{ $this->data['location']['lng'] }}};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 12,
                    center: location
                });
                var marker = new google.maps.Marker({
                    position: location,
                    map: map
                });
            }
        </script>

        <!-- Ensure the initMap function is called once the API is loaded -->
        <script>
            window.onload = function() {
                initMap();
            };
        </script>

</div>
