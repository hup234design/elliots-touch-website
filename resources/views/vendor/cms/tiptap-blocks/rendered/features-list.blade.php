<div class="grid gap-6 md:grid-cols-3 md-gap-8 lg:gap-12">
    @foreach($features as $feature)
        <div class="flex flex-col items-center justify-center text-center space-y-2">
            <x-heroicon-o-check-circle class="w-8 h-8" />
            <p class="mt-0 leading-tight font-medium">
                {{ $feature['text'] }}
            </p>
        </div>
    @endforeach
</div>
