@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto">
        <x-card title="Tambah Artikel Baru">
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf
                
                <!-- Judul Artikel -->
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Judul Artikel <span class="text-rose-500">*</span></label>
                    <input type="text" name="title" value="{{ old('title') }}" 
                           class="w-full bg-gray-900 border border-gray-700 focus:border-rose-500 focus:ring-1 focus:ring-rose-500 p-2.5 rounded-lg text-white outline-none transition-all" 
                           placeholder="Masukkan judul menarik di sini...">
                    @error('title') <span class="text-rose-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                </div>

                <!-- Gambar Sampul -->
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Gambar Cover (Opsional)</label>
                    <input type="file" name="image" 
                           class="w-full bg-gray-900 border border-gray-700 p-2 text-gray-400 rounded-lg outline-none cursor-pointer file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-rose-600 file:text-white hover:file:bg-rose-700 transition-all">
                    @error('image') <span class="text-rose-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                </div>

                <!-- Konten Artikel -->
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Konten Artikel <span class="text-rose-500">*</span></label>
                    <textarea name="content" rows="6" 
                              class="w-full bg-gray-900 border border-gray-700 focus:border-rose-500 focus:ring-1 focus:ring-rose-500 p-3 rounded-lg text-white outline-none transition-all" 
                              placeholder="Tulis ceritamu atau opini di sini...">{{ old('content') }}</textarea>
                    @error('content') <span class="text-rose-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                </div>

                <!-- Tombol Aksi -->
                <div class="flex justify-end gap-3 pt-3 border-t border-gray-700">
                    <a href="{{ route('posts.index') }}" class="bg-gray-700 hover:bg-gray-600 text-white px-5 py-2.5 rounded-lg font-semibold text-sm transition-colors">Batal</a>
                    <button type="submit" class="bg-rose-600 hover:bg-rose-700 text-white px-6 py-2.5 rounded-lg font-semibold text-sm transition-colors shadow-lg">Simpan Artikel</button>
                </div>
            </form>
        </x-card>
    </div>
@endsection