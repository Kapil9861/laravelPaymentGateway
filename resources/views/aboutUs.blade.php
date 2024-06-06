@extends('app')
@section('content')
@include('components.introduction', ['introduction' => 'Welcome to The Designers! We specialize in creating high-quality 3D designs related to the human body. Our designs are available for purchase at affordable prices, making it easy for you to access top-notch designs without breaking the bank. Explore our collection and bring your projects to life with our stunning 3D models.'])
@include('components.textContent', ['headerContent' => 'High-Quality 3D Human Body Designs', 'bodyContent' => 'Our 3D human body designs are crafted with precision and attention to detail. Whether you are a designer, educator, or healthcare professional, our models are perfect for a wide range of applications. Discover the perfect design to meet your needs and elevate your work with our expertly crafted models.'])
@include('components.textContent', ['headerContent' => 'Affordable Pricing', 'bodyContent' => 'At The Designers, we believe that high-quality 3D designs should be accessible to everyone. That’s why we offer our designs at competitive prices. Check out our pricing page to see how affordable our models are and start enhancing your projects today.'])
@include('components.textContent', ['headerContent' => 'About Us', 'bodyContent' => 'The Designers is your go-to source for high-quality 3D human body designs. Our team of experts is dedicated to creating detailed and accurate models that can be used in various fields, including education, healthcare, and entertainment. We strive to provide our customers with the best products at affordable prices.'])
@include('components.textContent', ['headerContent' => 'Mission', 'bodyContent' => 'At The Designers, our mission is simple: to make high-quality 3D human body designs accessible to everyone. We are committed to providing affordable, accurate, and detailed models that can help you achieve your project goals. Our team works tirelessly to ensure that each design meets our high standards of quality and precision.'])

<div class="text" style="text-align: center;">
    <div style="padding: 8px; padding-top:0px">
        <div style="font-size: 22px;">Developed By: The Designers</div>
    </div>
</div>

@endsection