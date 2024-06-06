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
@include('components.product_container',['image1'=>asset("images/a-min.png"),'product1'=>'Item 1','id1'=>1,'amount1'=>50,'image2'=>asset("images/b-min.png"),'product2'=>'Item 2','id2'=>2,'amount2'=>40,'image3'=>asset("images/c-min.png"),'product3'=>'Item 2','id3'=>3,'amount3'=>45])
@include('components.product_container',['image1'=>asset("images/d-min.png"),'product1'=>'Item 1','id1'=>1,'amount1'=>50,'image2'=>asset("images/e-min.png"),'product2'=>'Item 2','id2'=>2,'amount2'=>40,'image3'=>asset("images/f-min.png"),'product3'=>'Item 2','id3'=>3,'amount3'=>45])
@include('components.product_container',['image1'=>asset("images/h-min.png"),'product1'=>'Item 1','id1'=>1,'amount1'=>50,'image2'=>asset("images/i-min.png"),'product2'=>'Item 2','id2'=>2,'amount2'=>40,'image3'=>asset("images/g-min.png"),'product3'=>'Item 2','id3'=>3,'amount3'=>45])
@include('components.product_container1',['image1'=>asset("images/aa-min.png"),'product1'=>'Item 1','id1'=>1,'amount1'=>50,'image2'=>asset("images/bb-min.png"),'product2'=>'Item 2','id2'=>2,'amount2'=>40])
@endsection