<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-teal-900 hover:bg-teal-800 disabled:bg-gray-100 px-6 h-12 rounded-2xl font-medium text-white disabled:text-gray-400 disabled:cursor-not-allowed transition-all flex items-center justify-center']) }}>
    {{ $slot }}
</button>
