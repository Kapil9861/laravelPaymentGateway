@extends('app')
@section('content')
<script>
document.addEventListener("DOMContentLoaded", function() {
  const welcomeText = document.getElementById("welcome-text");
  const text = "Welcome to Sajilo Hisab!";
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
@include('components.introduction',['introduction'=>'Marriage (Also called as Myarrich or 21 Patti or 21 Rummy Card Game) and Call Break (13 Patti or Otti) are the two famous card games played all over Nepal and in India and Bhutan by the people of the Nepalese Origin. Additionally, all around the world by Nepalsese and few Indian descendents. The games are widely played on the festivals and or some occasional gatherings and all over the year by the admirers.'])
@include('components.textContent',['headerContent'=>'Marriage Card Game','bodyContent'=>'In marriage card game, depending on your luck and skill you can receive points (Maal) from the deck and from the players alongside. The more the points the more you will win and vice versa. A maal joker card can have a value of 2 or 3 or 5 points and the Joker card has a value of 5 while the super card has value of 5 or 10 according to the rules set by the players.'])
@include('components.textContent',['headerContent'=>'Call Break','bodyContent'=>'In call break, the initial points committed is called as Haat Bolnu or Bid Hand or claim hand points. Here, it is referenced as committed points.'])
@include('components.heading',['heading'=>'Features'])

@include('components.list',['title'=>'Streamlined Point Calculation','description'=>"Sajilo Hisab takes the hassle out of scorekeeping by providing a user-friendly interface for entering and calculating points during the game. No more mental arithmetic or confusion – our app does the hard work for you."])
@include('components.list',['title'=>'Smart Note Taking Facility','description'=>"Take note in every game when there is some foul committed by any player. You can utilize this facility for keeping records of the completed or incompleted transactions."])
@include('components.list',['title'=>'Customizable Settings/Rules','description'=>"Tailor the app to suit your preferences with customizable settings for point values, game rules, and more. Sajilo Hisab adapts to your gameplay, ensuring a personalized experience every time."])
@include('components.list',['title'=>'Real-time Updates','description'=>'Stay up-to-date with real-time point updates as the game progresses. Know exactly where you stand and strategize accordingly to secure victory.'])
@include('components.list',['title'=>'Intuitive Design','description'=>'Our app features an intuitive design that\'s easy to navigate, allowing you to focus on the game without distractions. Whether you\'re playing with friends or family, Sajilo Hisab keeps the fun flowing.'])
@include('components.list',['title'=>'Share Game Results','description'=>'You will see the results of your game records you can share these data across multiple social platforms and also from drives and e-mails.'])

@endsection