@php
$images=[asset('images/logo.png'),asset('images/1.png'),asset('images/2.png'),asset('images/20.png'),asset('images/4.png'),asset('images/31.png'),asset('images/14-min.png'),asset('images/29.png')];
@endphp

<div id="imageContainer" class="image-container">
    @foreach ($images as $image)
        <img src="{{ $image }}" alt="Image">
    @endforeach
</div>
