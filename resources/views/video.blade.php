<x-layout>
    <div class="mx-auto max-w-2xl px-6 py-24">
        <div
            class="mx-auto flex max-w-max items-center gap-3 font-bold"
        >
            <span class="text-lg">{{ $video->title }}</span>
        </div>

        <div class="py-10 flex justify-center">
            <iframe
                width="560" height="315"
                src="https://www.youtube.com/embed/{{ $video->video }}"
                title="{{ $video->title }}"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen
            ></iframe>
        </div>
</x-layout>
