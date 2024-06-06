@php
$images=[asset('images/logo1.png'),asset('images/a-min.png'),asset('images/d-min.png'),asset('images/g-min.png'),asset('images/i-min.png')];
@endphp

<div id="imageContainer" class="image-container">
    @foreach ($images as $image)
        <img src="{{ $image }}" alt="Image">
    @endforeach
</div>
