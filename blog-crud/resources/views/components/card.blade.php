@props(['title' => ''])
<div {{ $attributes->merge(['class' => 'bg-gray-800 border border-gray-700 rounded-xl shadow-xl overflow-hidden']) }}>
    @if($title)
        <div class="px-6 py-4 border-b border-gray-700 font-semibold text-lg text-gray-200 bg-gray-800/50">
            {{ $title }}
        </div>
    @endif
    <div class="p-6">
        {{ $slot }}
    </div>
</div>