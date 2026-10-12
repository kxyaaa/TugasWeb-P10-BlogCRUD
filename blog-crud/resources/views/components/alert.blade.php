@props(['type' => 'success', 'message'])
<div class="p-4 mb-6 border-l-4 rounded-r-lg shadow-md flex items-center justify-between {{ $type === 'success' ? 'bg-emerald-900/50 border-emerald-500 text-emerald-200' : 'bg-rose-900/50 border-rose-500 text-rose-200' }}">
    <span>{{ $message }}</span>
    <button onclick="this.parentElement.remove()" class="text-gray-400 hover:text-white">&times;</button>
</div>