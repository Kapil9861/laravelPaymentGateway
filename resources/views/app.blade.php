<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sajilo Hisab</title>
    <link href="{{ asset('css/componentStyling.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

</head>
<body>

@include('components.header')

<div class="container">
    @yield('content')
</div>
<script>
    var images = document.querySelectorAll('#imageContainer img');
    var currentImageIndex = 0;
    
    function changeImage() {
        images[currentImageIndex].classList.remove('active');
        currentImageIndex = (currentImageIndex + 1) % images.length;
        images[currentImageIndex].classList.add('active');
    }
    
    setInterval(changeImage, 2000); // Change image every 2 seconds
</script>

<script>
    let lastScrollTop = 0;

    window.addEventListener("scroll", function() {
        let currentScroll = window.pageYOffset || document.documentElement.scrollTop;
        if (currentScroll > lastScrollTop) {
            // Scroll down
            document.querySelector('.footer').classList.add('hidden');
        } else {
            // Scroll up
            document.querySelector('.footer').classList.remove('hidden');
        }
        lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // For Mobile or negative scrolling
    });
</script>
@include('components.footer')
</body>
</html>
