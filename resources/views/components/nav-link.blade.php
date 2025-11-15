@props(['href', 'current' => false])

<a {{ $attributes->class([
    'rounded-md px-3 py-2 text-sm font-medium',
    'bg-gray-900 text-white' => $current,
    'text-gray-300 hover:bg-white/5 hover:text-white' => !$current,
]) }}
    href="{{ $href }}" {{ $current ? 'aria-current="page"' : '' }}>
    {{ $slot }}
</a>
