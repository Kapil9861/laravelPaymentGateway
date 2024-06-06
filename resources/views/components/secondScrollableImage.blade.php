@php
$images=[asset('images/start.png'),asset('images/35-min.png'),asset('images/6-min.png'),asset('images/33-min.png'),asset('images/34-min.png'),asset('images/20.png'),asset('images/25.png'),asset('images/24.png')];
@endphp

<div id="imageContainer" class="image-container">
    @foreach ($images as $image)
        <img src="{{ $image }}" alt="Image">
    @endforeach
</div>