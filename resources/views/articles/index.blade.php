@extends('layouts.app')

@section('content')
    <div class="mx-auto py-12 max-w-5xl">
        <header class="mb-8">
            <h1 class="font-extrabold text-gray-900 dark:text-gray-100 text-4xl">Articles</h1>
            <p class="mt-2 text-gray-600 dark:text-gray-400">Browse our latest publications</p>
        </header>

        <div class="gap-8 grid md:grid-cols-2">
            @forelse($articles as $article)
                <article
                    class="bg-white dark:bg-gray-800 shadow-sm hover:shadow-md border border-gray-200 dark:border-gray-700 rounded-xl overflow-hidden transition-shadow duration-300">
                    <div class="p-6">
                        <div class="mb-3">
                            <span
                                class="inline-block bg-gray-100 dark:bg-gray-700 px-3 py-1 rounded-full font-semibold text-gray-700 dark:text-gray-300 text-xs">
                                {{ $article->category->name }}
                            </span>
                        </div>
                        <h2 class="mb-3 font-bold text-gray-900 dark:text-gray-100 text-xl">
                            <a href="{{ route('articles.show', $article->id) }}"
                                class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">
                                {{ $article->title }}
                            </a>
                        </h2>
                        <p class="text-gray-600 dark:text-gray-400 line-clamp-3 leading-relaxed">
                            {{ Str::limit($article->excerpt ?? $article->body, 150) }}
                        </p>
                    </div>
                    <div class="flex justify-between items-center bg-gray-50 dark:bg-gray-750 px-6 py-4">
                        <time class="text-gray-500 dark:text-gray-500 text-sm">
                            {{ $article->created_at->format('M j, Y') }}
                        </time>
                        <a href="{{ route('articles.show', $article->id) }}"
                            class="inline-flex items-center bg-blue-100 hover:bg-blue-200 dark:bg-blue-900 dark:hover:bg-blue-800 px-4 py-2 rounded-lg font-medium text-blue-700 dark:text-blue-300 text-sm transition-colors">
                            Continue Reading
                        </a>
                    </div>
                </article>
            @empty
                <div class="col-span-full py-12 text-center">
                    <p class="text-gray-500 dark:text-gray-400">No articles have been published yet.</p>
                </div>
            @endforelse
        </div>

        @if ($articles->hasPages())
            <div class="mt-12">
                {{ $articles->links() }}
            </div>
        @endif
    </div>
@endsection
