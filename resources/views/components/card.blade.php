<div class="card {{ $class ?? '' }}">
    <div class="card-header">
        <h4>{{ $title }}</h4>
        <a href="{{ $url }}">{{ $label }} <i class="fa-solid fa-chevron-right"></i></a>
    </div>

    <div class="card-content">
        {{ $slot }}
    </div>
</div>
