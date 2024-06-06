@extends('app')
@section('content')
<script>
document.addEventListener("DOMContentLoaded", function() {
  const welcomeText = document.getElementById("welcome-text");
  const text = "Welcome to The Designers!";
  let index = 0;

  function type() {
    if (index < text.length) {
      welcomeText.innerHTML += text.charAt(index);
      index++;
      setTimeout(type, 100); // Typing speed
    } else {
      welcomeText.style.borderRight = "none"; // Remove blinking cursor
    }
  }

  type();
});
</script>
<div id="welcome-text"></div>
@include('components.scrollableImages')
@include('components.introduction', ['introduction' => 'Welcome to The Designers! We specialize in creating high-quality 3D designs related to the human body. Our designs are available for purchase at affordable prices, making it easy for you to access top-notch designs without breaking the bank. Explore our collection and bring your projects to life with our stunning 3D models.'])
<div class="image-container1">
  <img src="{{asset('images/b-min.png')}}" alt="first" class="image1">
  <img src="{{asset('images/c-min.png')}}" alt="first" class="image1">
  <img src="{{asset('images/e-min.png')}}" alt="first" class="image1">
</div>
@include('components.textContent', ['headerContent' => 'High-Quality 3D Human Body Designs', 'bodyContent' => 'Our 3D human body designs are crafted with precision and attention to detail. Whether you are a designer, educator, or healthcare professional, our models are perfect for a wide range of applications. Discover the perfect design to meet your needs and elevate your work with our expertly crafted models.'])
<div class="image-container1">
  <img src="{{asset('images/bb-min.png')}}" alt="first" class="image1">
  <img src="{{asset('images/aa-min.png')}}" alt="first" class="image1">
</div>
@include('components.textContent', ['headerContent' => 'Affordable Pricing', 'bodyContent' => 'At The Designers, we believe that high-quality 3D designs should be accessible to everyone. That’s why we offer our designs at competitive prices. Check out our pricing page to see how affordable our models are and start enhancing your projects today.'])
@endsection