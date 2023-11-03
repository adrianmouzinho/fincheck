@props(['name', 'placeholder', 'value', 'errors'])

<div class="relative">
    <input name="{{ $name }}" id="{{ $name }}" placeholder=" " {!! $attributes->merge([
        'class' =>
            'bg-white rounded-lg w-full border border-gray-500 px-3 h-[52px] text-gray-800 pt-4 pb-0 peer placeholder-shown:pt-0 focus:border-gray-800 focus:ring-0 focus:ring-offset-0 transition-all outline-none',
    ]) !!}
        {{ $attributes }} />
    <label for="{{ $name }}"
        class="absolute text-xs left-[13px] top-2 pointer-events-none text-gray-700 peer-placeholder-shown:text-base peer-placeholder-shown:top-3.5 transition-all">
        {{ $placeholder }}
    </label>

    @if ($errors)
        <ul class="mt-2 flex flex-col">
            @foreach ((array) $errors as $error)
                <li class="flex gap-2 items-center text-xs text-red-600">
                    <svg class="w-4 fill-red-600" xmlns="http://www.w3.org/2000/svg" fill="#000000" viewBox="0 0 256 256">
                        <path
                            d="M165.66,101.66,139.31,128l26.35,26.34a8,8,0,0,1-11.32,11.32L128,139.31l-26.34,26.35a8,8,0,0,1-11.32-11.32L116.69,128,90.34,101.66a8,8,0,0,1,11.32-11.32L128,116.69l26.34-26.35a8,8,0,0,1,11.32,11.32ZM232,128A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z">
                        </path>
                    </svg>
                    <span class="text-xs">{{ $error }}</span>
                </li>
            @endforeach
        </ul>
    @endif
</div>
