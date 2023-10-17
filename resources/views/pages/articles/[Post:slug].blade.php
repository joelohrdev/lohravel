<x-app-layout>
    <div class="relative">
        <div class="mx-auto max-w-3xl">
            <a  href="/" wire:navigate aria-label="Go back to articles" class="group mb-8 flex h-10 w-10 items-center justify-center rounded-full bg-white shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 transition lg:absolute lg:-left-5 lg:-mt-2 lg:mb-0 xl:-top-1.5 xl:left-0 xl:mt-0">
                <svg viewBox="0 0 16 16" fill="none" aria-hidden="true" class="h-4 w-4 stroke-zinc-500 transition group-hover:stroke-zinc-700"><path d="M7.25 11.25 3.75 8m0 0 3.5-3.25M3.75 8h8.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            </a>
            <article>
                <header class="flex flex-col">
                    <h1 class="mt-6 text-4xl font-bold tracking-tight text-zinc-800 sm:text-5xl">{{ $post->title }}</h1>
                    <div class="flex space-x-5 mt-5">
                        @foreach($post->categories as $category)
                            <a wire:navigate href="/category/{{ $category->slug }}" class="inline-block mb-2 text-xs font-semibold tracking-wide text-teal-500 uppercase transition hover:text-teal-600">{{ $category->name }}</a>
                        @endforeach
                    </div>
                    <time datetime="2022-09-05" class="order-first flex items-center text-base text-zinc-400"><span class="h-4 w-0.5 rounded-full bg-zinc-200"></span>
                        <span class="ml-3">{{ $post->published_at->format('F d, Y') }}</span>
                    </time>
                </header>
                <div class="mt-5 min-w-full">
                    <x-markdown theme="nord" class="prose min-w-full">
                        {!! $post->body !!}
                    </x-markdown>
                </div>
            </article>
        </div>
    </div>
</x-app-layout>
