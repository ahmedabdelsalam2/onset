@props(['title', 'body'])

<div class="relative isolate overflow-hidden bg-gray-900 px-6 py-24 text-center sm:rounded-3xl sm:px-16">
    <h3 class="mx-auto max-w-2xl text-2xl font-bold tracking-tight text-white sm:text-2xl">{{ $title }}</h3>
    <p class="mx-auto mt-6 max-w-xl  leading-8 text-gray-300">{{ $body }}</p>

    <svg viewBox="0 0 1024 1024" class="absolute left-1/2 bottom-1/2 -z-10 h-[64rem] w-[64rem] -translate-x-1/2 [mask-image:radial-gradient(closest-side,white,transparent)]" aria-hidden="true">
        <circle cx="512" cy="512" r="512" fill="url(#827591b1-ce8c-4110-b064-7cb85a0b1217)" fill-opacity="0.7" />
        <defs>
            <radialGradient id="827591b1-ce8c-4110-b064-7cb85a0b1217">
                <stop stop-color="#7775D6" />
                <stop offset="1" stop-color="#E935C1" />
            </radialGradient>
        </defs>
    </svg>
</div>
