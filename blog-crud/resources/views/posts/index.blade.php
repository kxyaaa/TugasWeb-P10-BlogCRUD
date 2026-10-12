@extends('layouts.app')

@section('content')
    <!-- Flash Message Alert -->
    @if(session('success'))
        <x-alert type="success" :message="session('success')" />
    @endif

    @if(session('error'))
        <x-alert type="error" :message="session('error')" />
    @endif

    <!-- Header & Bar Pencarian -->
    <div class="flex flex-col md:flex-row justify-between items-center gap-4 mb-8">
        <h1 class="text-3xl font-extrabold text-white tracking-tight">Daftar Artikel</h1>
        
        <form action="{{ route('posts.index') }}" method="GET" class="flex w-full md:w-auto gap-2">
            <input type="text" name="search" value="{{ request('search') }}" 
                   placeholder="Cari artikel..." 
                   class="bg-gray-800 border border-gray-700 text-white text-sm rounded-lg focus:ring-rose-500 focus:border-rose-500 block w-full p-2.5 outline-none">
            <button type="submit" class="bg-rose-600 hover:bg-rose-700 text-white px-4 py-2 rounded-lg text-sm font-semibold transition">
                Cari
            </button>
            @if(request('search'))
                <a href="{{ route('posts.index') }}" class="bg-gray-700 hover:bg-gray-600 text-gray-300 px-3 py-2 rounded-lg text-sm flex items-center">
                    Reset
                </a>
            @endif
        </form>
    </div>

    <!-- Grid Daftar Artikel -->
    @if($posts->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($posts as $post)
                <x-card class="flex flex-col justify-between h-full">
                    <div>
                        @if($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="w-full h-48 object-cover rounded-lg mb-4">
                        @endif

                        <h2 class="text-xl font-bold text-white mb-2 line-clamp-2">{{ $post->title }}</h2>
                        <p class="text-gray-400 text-sm mb-4 line-clamp-3">{{ Str::limit(strip_tags($post->content), 100) }}</p>
                    </div>

                    <div class="pt-4 border-t border-gray-700 flex items-center justify-between mt-auto">
                        <span class="text-xs text-gray-500">{{ $post->created_at->format('d M Y') }}</span>
                        
                        <div class="flex items-center gap-3 text-sm">
                            <a href="{{ route('posts.show', $post) }}" class="text-blue-400 hover:text-blue-300 font-medium">
                                Lihat
                            </a>
                            <a href="{{ route('posts.edit', $post) }}" class="text-amber-400 hover:text-amber-300 font-medium">
                                Edit
                            </a>

                            <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Apakah kamu yakin ingin menghapus artikel ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-rose-400 hover:text-rose-300 font-medium">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </x-card>
            @endforeach
        </div>

        <div class="mt-8">
            {{ $posts->links() }}
        </div>
    @else
        <x-card class="text-center py-12">
            <p class="text-gray-400 text-lg">Tidak ada artikel ditemukan.</p>
        </x-card>
    @endif
@endsection