@props(['value'])

<label {{ $attributes->merge(['class' => 'form-floating']) }}>
    {{ $value ?? $slot }}
</label>