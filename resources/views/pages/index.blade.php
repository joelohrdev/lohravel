@php
    $posts = \App\Models\Post::where('status', 'published')->orderBy('published_at', 'desc')->get();
@endphp

<x-app-layout>
    <div class="flex max-w-3xl flex-col space-y-16 mx-auto">
        @foreach($posts as $post)
        <article class="md:grid md:grid-cols-4 md:items-baseline">
            <div class="md:col-span-3 group relative flex flex-col items-start">
                <h2 class="text-base font-semibold tracking-tight text-zinc-800">
                    <div class="absolute -inset-x-4 -inset-y-6 z-0 scale-95 bg-zinc-50 opacity-0 transition group-hover:scale-100 group-hover:opacity-100 sm:-inset-x-6 sm:rounded-2xl"></div>
                    <a href="/articles/{{ $post->slug }}" wire:navigate>
                        <span class="absolute -inset-x-4 -inset-y-6 z-20 sm:-inset-x-6 sm:rounded-2xl"></span>
                        <span class="relative z-10">{{ $post->title }}</span>
                    </a>
                </h2>
                <time class="md:hidden relative z-10 order-first mb-3 flex items-center text-sm text-zinc-400 pl-3.5" datetime="2022-09-05">
                    <span class="absolute inset-y-0 left-0 flex items-center" aria-hidden="true"><span class="h-4 w-0.5 rounded-full bg-zinc-200"></span>
                    </span>{{ $post->published_at->format('F d, Y') }}</time>
                <p class="relative z-10 mt-2 text-sm text-zinc-600">Most companies try to stay ahead of the curve when it comes to visual design, but for Planetaria we needed to create a brand that would still inspire us 100 years from now when humanity has spread across our entire solar system.</p>
                <div aria-hidden="true" class="relative z-10 mt-4 flex items-center text-sm font-medium text-teal-500">Read article<svg viewBox="0 0 16 16" fill="none" aria-hidden="true" class="ml-1 h-4 w-4 stroke-current"><path d="M6.75 5.75 9.25 8l-2.5 2.25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>
            </div>
            <time class="mt-1 hidden md:block relative z-10 order-first mb-3 flex items-center text-sm text-zinc-400" datetime="2022-09-05">{{ $post->published_at->format('F d, Y') }}</time>
        </article>
        @endforeach
    </div>
</x-app-layout>
