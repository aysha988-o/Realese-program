<div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
    @foreach($available_locales as $locale_name => $locale_code)
        @if($locale_code === $current_locale)
            <span class="ml-2 mr-2 text-gray-700">{{ $locale_name }}</span>
        @else
            <a class="ml-1 underline ml-2 mr-2" href="{{ url($locale_code) }}">
                <span>{{ $locale_name }}</span>
            </a>
        @endif
    @endforeach
</div>
