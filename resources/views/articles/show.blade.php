@extends('layouts.app')

@section('content')
    <div class="mx-auto px-4 py-8 max-w-4xl">
        <article class="bg-white shadow-lg p-8 rounded-xl">
            <header class="mb-6">
                <h1 class="mb-2 font-bold text-gray-900 text-4xl">{{ $article->title }}</h1>
                <span class="inline-block bg-indigo-100 px-3 py-1 rounded-full font-medium text-indigo-800 text-sm">
                    {{ $article->category->name }}
                </span>
            </header>

            <div class="max-w-none text-gray-700 leading-relaxed prose prose-lg">
                {!! nl2br(e($article->content)) !!}
            </div>

            <footer class="mt-8 pt-6 border-gray-200 border-t">
                <a href="{{ route('articles.index') }}"
                    class="inline-flex items-center bg-gray-100 hover:bg-gray-200 px-4 py-2 rounded-lg font-medium text-gray-700 transition-colors duration-200">
                    <svg class="mr-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Back to list
                </a>
            </footer>
        </article>
    </div>
@endsection
