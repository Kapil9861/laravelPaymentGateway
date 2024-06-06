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
<form action="{{route('index')}}" method="get">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <button type="submit">Proceed To Checkout</button>
</form>
@include('components.helper_tutorial',['content'=>'The game is currently not available in Apple store and is in Internal Testing Section in Google Play Console and will be available on 1st July(Estimated).'])
@include('components.introduction',['introduction'=>'However, if you want to use the application right away, download the .aab file below: '])
<div class="image-container1">

  <a href="{{ url('/download-aab') }}" class="btn btn-primary"><img src="{{asset('images/aab.png')}}" alt="download .aab file"></a>
</div>

@include('components.introduction',['introduction'=>'Once the file is downloaded, download a .aab to .apk converter as your choice and once the file is converted into .apk file, you can install by clicking the .apk file'])
@endsection