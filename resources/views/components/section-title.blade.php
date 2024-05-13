<div class="md:col-span-1 flex justify-between">
    <div class="mt-3 px-4 sm:px-0 text-center">
        <h3 class="text-lg font-medium">{{ $title }}</h3>

        <p class="mt-3 text-sm text-center">
            {{ $description }}
        </p>
    </div>

    <div class="px-4 sm:px-0">
        {{ $aside ?? '' }}
    </div>
</div>
