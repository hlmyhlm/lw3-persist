<ul class="divide-y divide-gray-100">
    @foreach ($videos as $video)
        <li
            class="flex flex-col items-start gap-x-6 gap-y-3 px-6 py-4 sm:flex-row sm:items-center sm:justify-between"
        >
            <div>
                <a
                    href="/video/{{ $video->getKey() }}"
                    class="transition hover:text-[#FF2D20]"
                    wire:navigate
                >
                    <h2>
                        {{ $video->title }}
                    </h2>
                </a>
                <div
                    class="mt-1 flex flex-wrap items-center gap-x-3 gap-y-1 text-sm text-gray-500"
                >
                    <p>
                        Released:
                        {{ $video->published_at->format('M j, Y') }}
                    </p>
                    &middot;
                    <p>
                        Duration:
                        {{ $video->duration }}
                    </p>
                </div>
            </div>
            <a
                href="/video/{{ $video->getKey() }}"
                type="button"
                class="flex shrink-0 items-center gap-1 text-sm font-medium text-[#FF2D20] transition hover:opacity-60"
                wire:navigate
            >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 w-8 transition hover:opacity-60">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 010 .656l-5.603 3.113a.375.375 0 01-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112z" />
                </svg>
                <span>View</span>
            </a>
        </li>
    @endforeach
</ul>
