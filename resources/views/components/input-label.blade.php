@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-bold text-base text-yellow-500']) }}>
    {{ $value ?? $slot }}
</label>
