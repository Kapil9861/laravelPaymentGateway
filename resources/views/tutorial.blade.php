@extends('app')
@section('content')
<script>
document.addEventListener("DOMContentLoaded", function() {
  const welcomeText = document.getElementById("welcome-text");
  const text = "Let's Get Started!";
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
@include('components.heading',['heading'=>'Welcome to Sajilo Hisab\'s Tutorial!'])
@include('components.heading',['heading'=>' Learn How to Use the Sajilo Hisab in Details!'])
<div class="image-container1">
  <img src="{{asset('images/start.png')}}" alt="first" class="image1">
</div>
@include('components.heading',['heading'=>'You will see this screen once the application is opened.'])
@include('components.heading',['heading'=>'Marriage Points Calculator Tutorial'])
<div class="image-container1">
  <img src="{{asset('images/1-min.png')}}" alt="first" class="image1">
</div>
@include('components.tutorial',['headerContent'=>'Step 1:','bodyContent'=>'Select Marriage Point Calculator'])
@include('components.tutorial',['headerContent'=>'Step 2:','bodyContent'=>'Select the rules as per your decisions and comfortability and click on proceed.'])
<div class="image-container1">
  <img src="{{asset('images/3-min.png')}}" alt="first" class="image1">
</div>
@include('components.tutorial',['headerContent'=>'Step 3:','bodyContent'=>'Enter the players playing with you, keep in mind that the minimum player is 2 and maximum 6 players can play together.'])
<div class="image-container1">
  <img src="{{asset('images/4-min.png')}}" alt="first" class="image1">
</div>
@include('components.tutorial',['headerContent'=>'Step 4:','bodyContent'=>'Enter the players name of the individual players it does not matter where you sit while playing you will get absolutely reliable and correct results.'])
<div class="image-container1">
  <img src="{{asset('images/5-min.png')}}" alt="first" class="image1">
</div>
@include('components.tutorial',['headerContent'=>'Step 5:','bodyContent'=>'Bravo! You have reached the calculator now! Now put the points per amount that you want to play with your friends and do not forget to input the fine amount and remember it will be the same if you pay the fine on the same game or another! Do not forget that you have minimum and maximum limit on both price per amount and fine amount. In price per point, it must be between 0.01 to 99999 and in fine points it must be between 5 and 100! Click at the Start button, to know that the game is running this will also ensure that there are not any invalid values entered in the fine points and per amount section. However, it will also be checked once clicked the calculate button.'])
<div class="image-container1">
  <img src="{{asset('images/6-min.png')}}" alt="first" class="image1">
  <img src="{{asset('images/7-min.png')}}" alt="first" class="image1">
</div>
@include('components.tutorial',['headerContent'=>'Step 6:','bodyContent'=>'Now, press on the button to change the winner as shown in Second Image of Step: 5, remember there can be only one winner and if the player has not seen, is on hold or has committed foul in the same game he/she cannot win the game and after that input the win points by individual player and remember 3 points will be counted by the calculator itself so you must not add 3 points if you win! Then change if the player has seen, seen with dublee, is on hold, unseen or has committed foul then press the calculate button!'])
@include('components.tutorial',['headerContent'=>'Step 7:','bodyContent'=>'Now you will see the points updated on the table below, here you cannot update the points of previous games, but you can delete the row if the game was cancelled after the game was completed in mutual understanding, by clicking on the data 3 times! And can provide entry if points are entered incorrectly.'])
<div class="image-container1">
  <img src="{{asset('images/26.png')}}" alt="first" class="image1">
  <img src="{{asset('images/27.png')}}" alt="first" class="image1">
</div>
@include('components.helper_tutorial',['content'=>'Below the table you can see the chart in which you can see who is winning the more than another.'])
<div class="image-container1">
  <img src="{{asset('images/31.png')}}" alt="first" class="image1">
</div>
@include('components.helper_tutorial',['content'=>'Remember if you have negative points your bar will be at 0 meaning you have not won anything may have lost instead.'])
@include('components.heading',['heading'=>'Call Break Points Calculator Tutorial'])
<div class="image-container1">
  <img src="{{asset('images/2-min.png')}}" alt="first" class="image1">
</div>
@include('components.tutorial',['headerContent'=>'Step 1:','bodyContent'=>'Select CallBreak Point Calculator'])
<div class="image-container1">
  <img src="{{asset('images/8-min.png')}}" alt="first" class="image1">
</div>
@include('components.tutorial',['headerContent'=>'Step 2:','bodyContent'=>'Now you are in the player’s rule screen which is similar to the player rule screen for marriage. Here, you must choose the rules according to your group\'s preferences. After you press the proceed button, you will be taken to the call break home screen.'])
<div class="image-container1">
  <img src="{{asset('images/9-min.png')}}" alt="first" class="image1">
</div>
@include('components.tutorial',['headerContent'=>'Step 3:','bodyContent'=>'In this screen you must provide the individual players\' name and if two players have same name don\'t forget to provide with some number or any characters you want so that you can identify the players. Now, click on the start calculator to move to the calculator screen.'])
<div class="image-container1">
  <img src="{{asset('images/10-min.png')}}" alt="first" class="image1">
</div>
@include('components.tutorial',['headerContent'=>'Step 4:','bodyContent'=>'Good Job!  Now you are in the call break points calculator. Here you must provide the amount that must be paid by the losers. The amount should be for the 2nd, 3rd and the 4th players respectively. The amount must be greater than 5 and must be less than 100000! Click at the Start button, to know that the game is running this will also ensure that there is not any invalid values entered in the amount section for the players that comes 2nd, 3rd and 4th respectively. However, it will also be checked once clicked the calculate button. Then you should provide the initial haat(Haat Bolnu), before starting the game after distributing the cards. Then you should lock the initial haat so that the points cannot be changed while the game is running and after the game. Then provide the final points after the game is finished. Then you can calculate the points clicking on the calculate button and all the tasks will be handled by the calculator itself. Remember! you can directly calculate points without clicking the lock button however, if done so the points can be changed by any player unknowingly.'])
<div class="image-container1">
  <img src="{{asset('images/11-min.png')}}" alt="first" class="image1">
  <img src="{{asset('images/12-min.png')}}" alt="first" class="image1">

</div>
@include('components.tutorial',['headerContent'=>'Step 5:','bodyContent'=>'As in the marriage points calculator you cannot change the points in here after entering the points and you can change the initial points once locked clicking in the same button once again. However, you can delete the game info if agreed between the players by swiping the data row right or left or you can just change the initial and final points without calculating the points.'])
<div class="image-container1">
  <img src="{{asset('images/24.png')}}" alt="first" class="image1">
  <img src="{{asset('images/28.png')}}" alt="first" class="image1">
  <img src="{{asset('images/29.png')}}" alt="first" class="image1">
</div>
@include('components.tutorial',['headerContent'=>'Step 6:','bodyContent'=>'You can see the real time winner, between you and other players in a chart at the bottom of your screen once you scroll to the end as in the marriage points calculator.'])
<div class="image-container1">
  <img src="{{asset('images/32.png')}}" alt="first" class="image1">
</div>
@include('components.introduction',['introduction'=>'**Note : You will be assisted by some dialog box with information to guide you if you make some major errors. Also, for minor errors or for some valid information you will be guided by the form controls and snackbars as given below:'])
<div class="image-container1">
  <img src="{{asset('images/13-min.png')}}" alt="first" class="image1">
  <img src="{{asset('images/14-min.png')}}" alt="first" class="image1">
  <img src="{{asset('images/15-min.png')}}" alt="first" class="image1">

</div>
@include('components.introduction',['introduction'=>'**Finally : You can share the results of the both marriage card game and call-break points calculator with your friends on different platforms, clicking the button below the Results table.'])
<div class="image-container1">
  <img src="{{asset('images/20.png')}}" alt="first" class="image1">
  <img src="{{asset('images/22.png')}}" alt="first" class="image1">
  <img src="{{asset('images/23.png')}}" alt="first" class="image1">

</div>
@include('components.heading',['heading'=>'Congratulations! You have completed the tutorial; you are fully capable of using the Sajilo Hisab app while playing the game.'])
@endsection