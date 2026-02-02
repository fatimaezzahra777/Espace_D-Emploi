@props(['disabled' => false])

<input
    @disabled($disabled)
    {{ $attributes->merge([
        'class' => '
            w-full
            rounded-xl
            border border-gray-300 border-gray-700
            bg-white bg-gray-800
            text-gray-900 text-gray-100
            shadow-sm
            focus:border-blue-500 focus:ring-blue-500
            transition
        '
    ]) }}
>
