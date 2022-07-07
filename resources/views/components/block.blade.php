<div>
    @if($title)
        <b>{{ $title }}</b>
    @endif
    <div class="mt-3 space-x-3">
        {{ $slot }}
    </div>
</div>
