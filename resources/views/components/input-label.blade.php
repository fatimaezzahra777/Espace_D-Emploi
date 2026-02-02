@props(['value'])

<label {{ $attributes->merge([
    'class' => 'block text-sm font-medium text-gray-700 text-gray-300
               tracking-wide'
]) }}>
    {{ $value ?? $slot }}
</label>
