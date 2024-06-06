@php
$images=[asset('images/logo1.png'),asset('images/c1-min.png'),asset('images/c2-min.png'),asset('images/c3-min.png'),asset('images/c4-min.png')];
@endphp

<div id="imageContainer" class="image-container">
    @foreach ($images as $image)
        <img src="{{ $image }}" alt="Image">
    @endforeach
</div>