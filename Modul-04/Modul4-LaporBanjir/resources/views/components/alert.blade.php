@props(['type' => 'success'])

<div class="alert {{ $type }}" role="alert">
    {{ $slot }}
</div>
