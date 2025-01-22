@props(['highlight' => false])
<div @class(['card', 'highlight' => $highlight])>
    {{ $slot }}
    {{-- 
    If we only pass one attribute (prop) we can use like this 
    If we have multiple attributes the -> href="{{ $attributes->get('href') }}"
    --}}
    <a {{ $attributes }} class="btn">View Detail</a>
</div>