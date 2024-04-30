@props(['value'])

<td {{ $attributes->merge(['class' => 'center px-6 py-4 text-center'])}}>
    {{ $slot }}
</td>