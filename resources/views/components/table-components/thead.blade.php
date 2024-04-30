@props(['value'])

<th {{ $attributes->merge(['scope' => 'col', 'class' => 'px-6 py-3 text-center', 'style' => 'font-size: 15px'])}}>
    {{ $slot }}
</th>