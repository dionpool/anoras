<li class="{{ request()->routeIs($route) ? 'active' : '' }}">
    @if($variant === 'fa')
        <i class="fa-solid fa-{{ $icon }}"></i>
    @endif
    @if($variant === 'ra')
        <i class="ra ra-{{ $icon }}"></i>
    @endif
    <a href="{{ route($route) }}">
        {{ $slot }}
    </a>
</li>
