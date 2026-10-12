@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto">
        <x-card>
            @if($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="w-full h-72 object-cover rounded-xl mb-6">
            @endif
            <h1 class="text-3xl font-bold text-white mb-4">{{ $post->title }}</h1>
            <p class="text-gray-300 leading-relaxed whitespace-pre-line text-lg mb-6">{{ $post->content }}</p>
            <a href="{{ route('posts.index') }}" class="text-rose-400 hover:underline text-sm">&larr; Kembali ke Senarai</a>
        </x-card>
    </div>
@endsection