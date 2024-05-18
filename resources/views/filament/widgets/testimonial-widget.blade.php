<x-filament-widgets::widget>
    <x-filament::section>
         <!-- <div class="p-6 bg-white shadow rounded-lg"> -->
    <h2 class="text-lg font-medium"><strong>Testimonial</strong></h2>
    <ul class="mt-4 space-y-2">
        @foreach ($links as $link)
            <li>
                <a href="{{ $link['url'] }}" class="text-blue-500 hover:underline">
                    {{ $link['label'] }}
                </a>
            </li>
        @endforeach
    </ul>
    <!-- </div> -->
    </x-filament::section>
</x-filament-widgets::widget>
