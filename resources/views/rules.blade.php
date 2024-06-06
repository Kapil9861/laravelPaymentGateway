@extends('app')
@section('content')
@include('components.textContent',['headerContent'=>'Marriage Card Game','bodyContent'=>'As you might have known to win points you have to follow some set of rules. Some of them are given below:'])
@include('components.list',["title"=>"Murder","description"=>"If a player/s is unable to see the Joker Card Either by Dublees or Sequences or Tunellas, the Maal or Points of the Unseen player will not count."])
@include('components.list',["title"=>"Dublee Bonus","description"=>"Dublee is a pair or exactly same cards. The Player With Dublee get's 5 Points Bonus, if the Player Finishes the Game."])
@include('components.list',["title"=>"Dublee Point Less","description"=>"The Player with Dublee Should not Pay 3 Points to the Winner. If he/she is not the Winner."])
@include('components.list',["title"=>"Fine System","description"=>"When a play commits foul knowingly or unknowingly the player must pay fine amount as per the agreement between the players. Originally, 15 points is set as the fine points which may vary according to location or players."])
@include('components.list',["title"=>"Kidnap","description"=>"The Unseen Player/s Should Pay for Their Points too. The points will be added to the points of the Winner."])
@include('components.supportList',["title"=>"Few Examples of Fouls","description"=>"Some famous and common fouls are:","description1"=>" 1. If a player cuts the deck for joker card if it's already cut by a player previously.","description2"=>"2. If player cuts the deck for joker with incomplete or invalid sequence or joker.","description3"=>"3. If a player tries to complete the game with invalid trials, invalid jokers or sequences or dublees.","description4"=>"4. If a seen player intentionally reveals the joker to the unseen player and if the same unseen player protests the player with the joker card info. (If the joker card is not as per claimed the player who protests will be fined).","description5"=>" 5. If the seen player with doublee picks a card from the player before him/her and is unable to complete the game. That is, even if the card is any joker, if picked must complete the game otherwise he/she can't pick the card.","description6"=>"* More importantly there might be some rules that are mutually agreed between the players as per the locations and players."])

@include('components.textContent',['headerContent'=>'Call Break','bodyContent'=>'Here, you don\'t have lots of rules as in marriage card game but you should follow some crucial rules as agreed between the players exactly like in marriage. Few are mentioned below:'])
@include('components.list',["title"=>"Double Pay","description"=>"The players who came 2nd, 3rd and 4th have to pay double if the winner crosses 20 points. But if the 2nd or 3rd players also crosses 20 points only the fourth players should pay meaning that if other players have less than 20 points have to pay double the amount as set at the starting of the game."])
@include('components.list',["title"=>"Double Receive","description"=>"If the player/s who did not win the game has negative total points have to pay double to the Winner, only if the Winner does not have negative total points."])
@include('components.list',["title"=>"Sum of Nine","description"=>"This will help you to notify if the sum of all the players initial points(HAAT) is less than 10. Generally in this situation the rounded is ended providing every player 1 Otti."])
@include('components.list',["title"=>"Direct Winner","description"=>"If a player calls/bids 8 hands points and successfully receives 8 or more points, he/she will automatically win the whole game."])
@include('components.introduction',['introduction'=>"For more information about the game and rules, visit the site given below by bhoos.com,\n"])
&emsp;&emsp;<a href="https://www.bhoos.com/blog/learn-to-play-the-best-marriage-card-game/">https://www.bhoos.com/blog/learn-to-play-the-best-marriage-card-game/</a>
@include('components.introduction',['introduction'=>"is the blog by Deb Mahato Upadted on: Sep 29,2023 (Last Seen)\n"])
@include('components.introduction',['introduction'=>"And Call Break rules at firstgames.in:"])
&emsp;&emsp;<a href="https://firstgames.in/blog/how-to-play-call-break-call-break-rules-in-detail">https://firstgames.in/blog/how-to-play-call-break-call-break-rules-in-detail</a>
@include('components.introduction',['introduction'=>"Also a blog by Suraj Jayaswal on: Jun 2, 2021 (Last Seen)"])
@include('components.introduction',['introduction'=>"Also visit the official website of Sajilo Hisab:"])
&emsp;&emsp;<a href="https://sajilohisab-production.up.railway.app/">https://sajilohisab-production.up.railway.app/</a>

@endsection