@extends('app')
@section('content')
<script>
document.addEventListener("DOMContentLoaded", function() {
  const welcomeText = document.getElementById("welcome-text");
  const text = "Coming Soon!";
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
@include('components.secondScrollableImage')
@include('components.product_container',['image1'=>asset("images/a-min.png"),'product1'=>'Male Complete Body Outline','id1'=>1,'amount1'=>0.50,'image2'=>asset("images/b-min.png"),'product2'=>'Human Body Outline Without Smoothening','id2'=>2,'amount2'=>32.99,'image3'=>asset("images/c-min.png"),'product3'=>'Male Body Without Face Completion','id3'=>3,'amount3'=>29.99])
@include('components.product_container',['image1'=>asset("images/d-min.png"),'product1'=>'Female Complete Body','id1'=>1,'amount1'=>44.99,'image2'=>asset("images/e-min.png"),'product2'=>'Male Face Structured Incomplete Body','id2'=>2,'amount2'=>42.99,'image3'=>asset("images/f-min.png"),'product3'=>'Female Motion (Face and Body)','id3'=>3,'amount3'=>144.45])
@include('components.product_container',['image1'=>asset("images/h-min.png"),'product1'=>'Female Smoothen Body and Face','id1'=>1,'amount1'=>64.49,'image2'=>asset("images/i-min.png"),'product2'=>'Human Body Contour Alignment','id2'=>2,'amount2'=>20.99,'image3'=>asset("images/g-min.png"),'product3'=>'Female Face Final Product','id3'=>3,'amount3'=>79.49])
@include('components.product_container1',['image1'=>asset("images/aa-min.png"),'product1'=>'Human Body Motion','id1'=>1,'amount1'=>0.50,'image2'=>asset("images/bb-min.png"),'product2'=>'Human Head Motion','id2'=>2,'amount2'=>51.99])
@endsection