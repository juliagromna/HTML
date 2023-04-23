<?php
    session_start();
?>

<!doctype html>
<html lang="pl">

<head>
    <title> Harry's House </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styl.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    
<div id="bc" class="container background rounded my-2">
<div class="container ">
    <?php
    if(isset($_SESSION['log_in'])==true){
      echo "<p style='color:rgb(125, 118, 87);text-align:center;position:relative;top:7px;'>Welcome ".$_SESSION['login']."</p>";
    }
      ?>
  </div>

    <nav id="navbar" class="navbar navbar-expand-sm rounded navbar-light sticky-top">
      <div class="container-fluid">  
       
          <a class="navbar-brand" href="main.php">
              <img id="door" src="images/door.png" alt="door"> 
            </a>
            <button class="navbar-toggler btncolor" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="navbar-nav">
          <li class="nav-item">
            <a  class="nav-link link" href="songs.php">Songs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link" href="lyrics.php">Lyrics</a>
          </li>
          <li class="nav-item">
              <a class="nav-link link" href="love_on_tour.php">Love on Tour 2022</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link" href="gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link" href="game.php">Game</a>
            </li>

            <?php
            include_once('db/polaczenie.php');
            if(isset($_SESSION['log_in'])==true){
                echo '<li id="sign_in" class="nav-item">
                <a class="nav-link link" href="db/log_out.php">Log out</a>
              </li>';
            }
            else{
                echo '<li id="sign_in" class="nav-item">
                <a class="nav-link link" href="sign_in.php">Sign in</a>
              </li>';
            }
            ?>

            
        </ul>
        </div>
      </div>
    </nav>
      <div id="accordion">

        <div class="card maindivcolor">
          <div class="card-header">
            <a class="btn" data-bs-toggle="collapse" href="#mfasr">
              Music for a Sushi Restaurant
            </a>
          </div>
          <div id="mfasr" class="collapse" data-bs-parent="#accordion">
            <div class="card-body">
              Ba, ba-ba<br>
              Ba-ba, ba-ba<br><br>
              Green eyes, fried rice<br>
              I could cook an egg on you<br>
              Late night, game time<br>
              Coffee on the stove, yeah<br>
              You're sweet ice cream<br>
              But you could use a flake or two<br>
              Blue bubblegum twisted 'round your tongue<br><br>
              I don't want you to get lost<br>
              I don't want you to go broke<br>
              I want you<br><br>
              It's 'cause I love you, babe<br>
              In every kind of way<br>
              Just a little taste<br>
              Know I love you, babe<br><br>
              Ba, ba-ba<br>
              Ba-ba, ba-ba<br>
              (You know I love you, babe)<br>
              Ba, ba-ba<br>
              Ba-ba, ba-ba<br><br>
              Excuse me, green tea<br>
              Music for a sushi restaurant<br>
              From ice on rice<br>
              Scuba-duba-do-boo-boo<br>
              Music for a sushi restaurant<br>
              Music for a sushi restaurant<br>
              Music for whatever you want<br>
              Scuba-duba-do-boo-boo<br><br>
              I'm not going to get lost<br>
              I'm not going to go broke<br>
              Staying cool<br>
              (Know I love you, babe)<br><br>
              Ba, ba-ba<br>
              Ba-ba, ba-ba<br>
              (You know I love you, babe)<br>
              Ba, ba-ba<br>
              Ba-ba, ba-ba<br><br>
              If the stars were edible<br>
              And our hearts were never full<br>
              Could we live with just a taste?<br>
              Just a taste<br><br>
              It's 'cause I love you, babe<br>
              In every kind of way<br>
              Just a little taste<br>
              Know I love you, babe<br><br>
              Ba, ba-ba<br>
              Ba-ba, ba-ba<br>
              (You know I love you, babe)<br>
              Ba, ba-ba<br>
              Ba-ba, ba-ba<br><br>
            </div>
          </div>
        </div>
      
        <div class="card maindivcolor">
          <div class="card-header">
            <a class="collapsed btn" data-bs-toggle="collapse" href="#lnt">
              Late Night Talking
            </a>
          </div>
          <div id="lnt" class="collapse" data-bs-parent="#accordion">
            <div class="card-body">
              Things haven't been quite the same<br>
              There's a haze on the horizon, babe<br>
              It's only been a couple of days<br>
              And I miss you, mm, yeah<br>
              When nothin' really goes to plan<br>
              You stub your toe or break your camera<br>
              I'll do everythin' I can<br>
              To help you through<br><br>
              If you're feelin' down<br>
              I just wanna make you happier, baby<br>
              Wish I was around<br>
              I just wanna make you happier, baby<br><br>
              We've been doin' all this late night talkin'<br>
              'Bout anythin' you want until the mornin'<br>
              Now you're in my life<br>
              I can't get you off my mind<br><br>
              I've never been a fan of change<br>
              But I'd follow you to any place<br>
              If it's Hollywood or Bishopsgate<br>
              I'm coming too<br><br>
              If you're feelin' down<br>
              I just wanna make you happier, baby<br>
              Wish I was around<br>
              I just wanna make you happier, baby<br><br>
              We've been doin' all this late night talkin'<br>
              'Bout anythin' you want until the mornin'<br>
              Now you're in my life<br>
              I can't get you off my mind<br><br>
              Can't get you off my mind<br>
              Can't get you off my mind (can't get you off my mind)<br>
              I won't even try (I won't even try)<br>
              To get you off my mind (get you off my mind)<br><br>
              We've been doin' all this late night talkin'<br>
              'Bout anythin' you want until the mornin'<br>
              Now you're in my life<br>
              I can't get you off my mind<br>
              Can't get you off my mind (all this late night talkin')<br>
              Can't get you off my mind (all this late night talkin')<br>
              I won't even try (all this late night talkin')<br>
              Can't get you off my<br>
              All this late night talkin'<br><br>
            </div>
          </div>
        </div>
      
        <div class="card maindivcolor">
          <div class="card-header">
            <a class="collapsed btn" data-bs-toggle="collapse" href="#grapejuice">
              Grapejuice
            </a>
          </div>
          <div id="grapejuice" class="collapse" data-bs-parent="#accordion">
            <div class="card-body">
              Yesterday, it finally came, a sunny afternoon<br>
              I was on my way to buy some flowers for you (ooh)<br>
              Thought that we could hide away in a corner of the heath<br>
              There's never been someone who's so perfect for me<br><br>
              But I got over it and I said<br>
              "Give me somethin' old and red"<br>
              I pay for it more than I did back then<br><br>
              There's just no gettin' through<br>
              Without you<br>
              A bottle of rouge<br>
              Just me and you<br><br>
              Sittin' in the garden, I'm a couple glasses in<br>
              I was tryna count up all the places we've been<br>
              You're always there, so don't overthink<br>
              I'm so over whites and pinks<br><br>
              I pay for it more than I did back then<br><br>
              There's just no gettin' through<br>
              Without you<br>
              A bottle of rouge<br>
              Just me and you<br>
              1982<br>
              Just me and you<br>
              There's just no gettin' through<br>
              The grape juice blues<br><br>
            </div>
          </div>
        </div>

        <div class="card maindivcolor">
          <div class="card-header">
            <a class="btn" data-bs-toggle="collapse" href="#aiw">
              As It Was
            </a>
          </div>
          <div id="aiw" class="collapse" data-bs-parent="#accordion">
            <div class="card-body">
              Holdin' me back<br>
              Gravity's holdin' me back<br>
              I want you to hold out the palm of your hand<br>
              Why don't we leave it at that?<br>
              Nothin' to say<br>
              When everything gets in the way<br>
              Seems you cannot be replaced<br>
              And I'm the one who will stay, oh<br><br>
              In this world, it's just us<br>
              You know it's not the same as it was<br>
              In this world, it's just us<br>
              You know it's not the same as it was<br>
              As it was, as it was<br>
              You know it's not the same<br><br>
              Answer the phone<br>
              "Harry, you're no good alone<br>
              Why are you sittin' at home on the floor?<br>
              What kind of pills are you on?"<br>
              Ringin' the bell<br>
              And nobody's comin' to help<br>
              Your daddy lives by himself<br>
              He just wants to know that you're well, oh<br><br>
              In this world, it's just us<br>
              You know it's not the same as it was<br>
              In this world, it's just us<br>
              You know it's not the same as it was<br>
              As it was, as it was<br>
              You know it's not the same<br><br>
              Go home, get ahead, light-speed internet<br>
              I don't wanna talk about the way that it was<br>
              Leave America, two kids follow her<br>
              I don't wanna talk about who's doin' it first<br><br>
              As it was<br>
              You know it's not the same as it was<br>
              As it was, as it was<br><br>
            </div>
          </div>
        </div>

        <div class="card maindivcolor">
          <div class="card-header">
            <a class="btn" data-bs-toggle="collapse" href="#daylight">
              Daylight
            </a>
          </div>
          <div id="daylight" class="collapse" data-bs-parent="#accordion">
            <div class="card-body">
              I'm on the roof, you're in your airplane seat<br>
              I was nose-bleeding, looking for life out there<br>
              Reading your horoscope, you were just doing cocaine<br>
              In my kitchen, you never listen, I hope you're missing me by now<br><br>
              If I was a bluebird, I would fly to you<br>
              You'd be the spoon<br>
              Dip you in honey so I could be sticking to you<br><br>
              Daylight, you got me cursing the daylight (ooh-ooh)<br>
              Daylight, you got me cursing the daylight (ooh-ooh)<br>
              Daylight, you got me calling at all times (ooh-ooh)<br>
              Ain't gonna sleep 'til the daylight (ooh-ooh)<br><br>
              Out of New York, I'm on the come down speed<br>
              We're on bicycles, saying there's life out there<br>
              You got the antidote, I'll take one to go, go please<br>
              Get the picture, cut out my middle<br>
              You ain't got time for me right now<br><br>
              If I was a bluebird, I would fly to you<br>
              You'd be the spoon<br>
              Dip you in honey so I could be sticking to you<br><br>
              Daylight, you got me calling at all times (ooh-ooh)<br>
              Ain't gonna sleep 'til the daylight (ooh-ooh)<br>
              Daylight, you got me cursing the daylight (ooh-ooh)<br>
              Daylight, you got me cursing the daylight (ooh-ooh)<br>
              Daylight, you got me calling at all times (ooh-ooh)<br>
              Ain't gonna sleep 'til the daylight (ooh-ooh)<br><br>
              If I was a bluebird, I would fly to you<br>
              You'd be the spoon<br>
              Dip you in honey so I could be sticking to you<br><br>
            </div>
          </div>
        </div>

        <div class="card maindivcolor">
          <div class="card-header">
            <a class="btn" data-bs-toggle="collapse" href="#lf">
              Little Freak
            </a>
          </div>
          <div id="lf" class="collapse" data-bs-parent="#accordion">
            <div class="card-body">
              Little freak, Jezebel<br>
              You sit high atop the kitchen counter<br>
              Stay green a little while<br>
              You bring blue lights to dreams<br>
              Starry haze, crystal ball<br>
              Somehow, you've become some paranoia<br>
              A wet dream just dangling<br>
              But your gift is wasted on me<br><br>
              I was thinkin' about who you are<br>
              Your delicate point of view, I<br>
              Was thinkin' about you<br>
              I'm not worried about where you are<br>
              Or who you will go home to, I'm<br>
              Just thinkin' about you<br>
              Just thinkin' about you<br><br>
              Did you dress up for Halloween?<br>
              I spilt beer on your friend, I'm not sorry<br>
              A golf swing and a trampoline<br>
              Maybe we'll do this again<br>
              Tracksuit and a ponytail<br>
              You hide the body, all that yoga gave you<br>
              Red wine and a ginger ale<br>
              But you would make fun of me, for sure<br><br>
              I was thinkin' about who you are<br>
              Your delicate point of view, I<br>
              Was thinkin' about you<br>
              I'm not worried about where you are<br>
              Or who you will go home to<br>
              I'm just thinkin' about you<br><br>
              I disrespected you<br>
              Jumped in feet first and I landed too hard<br>
              A broken ankle, karma rules<br>
              You never saw my birthmark<br><br>
              I was thinkin' about who you are<br>
              Your delicate point of view, I<br>
              Was thinkin' about you<br>
              I'm not worried about where you are<br>
              Or who you will go home to, I'm<br>
              Just thinkin' about you<br><br>
              Just thinkin' about you<br>
              Just thinkin' about you<br><br>
            </div>
          </div>
        </div>

        <div class="card maindivcolor">
          <div class="card-header background">
            <a class="btn" data-bs-toggle="collapse" href="#matilda">
              Matilda
            </a>
          </div>
          <div id="matilda" class="collapse" data-bs-parent="#accordion">
            <div class="card-body">
              You were riding your bike to the sound of "It's No Big Deal"<br>
              And you're trying to lift off the ground on those old two wheels<br>
              Nothing about the way that you were treated ever seemed especially alarming 'til now<br>
              So you tie up your hair and you smile like it's no big deal<br><br>
              You can let it go<br>
              You can throw a party full of everyone you know<br>
              And not invite your family, 'cause they never showed you love<br>
              You don't have to be sorry for leaving and growing up, mmh<br><br>
              Matilda, you talk of the pain like it's all alright<br>
              But I know that you feel like a piece of you's dead inside<br>
              You showed me a power that is strong enough to bring sun to the darkest days<br>
              It's none of my business, but it's just been on my mind<br><br>
              You can let it go<br>
              You can throw a party full of everyone you know<br>
              And not invite your family, 'cause they never showed you love<br>
              You don't have to be sorry for leaving and growing up<br><br>
              You can see the world, following the seasons<br>
              Anywhere you go, you don't need a reason<br>
              'Cause they never showed you love<br>
              You don't have to be sorry for doing it on your own<br><br>
              You're just in time, make your tea and your toast<br>
              You framed all your posters and dyed your clothes, ooh<br>
              You don't have to go<br>
              You don't have to go home<br>
              Oh, there's a long way to go<br>
              I don't believe that time will change your mind<br>
              In other words<br>
              I know they won't hurt you anymore as long as you can let them go<br><br>
              You can let it go<br>
              You can throw a party full of everyone you know<br>
              You can start a family who will always show you love<br>
              You don't have to be sorry for doing it on your own<br><br>
              You can let it go<br>
              You can throw a party full of everyone you know<br>
              You can start a family who will always show you love<br>
              You don't have to be sorry, no<br>
            </div>
          </div>
        </div>

        <div class="card maindivcolor">
          <div class="card-header">
            <a class="btn" data-bs-toggle="collapse" href="#cinema">
              Cinema
            </a>
          </div>
          <div id="cinema" class="collapse" data-bs-parent="#accordion">
            <div class="card-body">
              You got, you got the cinema<br><br>
              It's you<br>
              And I'm not gettin' over it<br>
              Darlin', is it cool<br>
              If I'm stubborn when it comes to this?<br>
              I guess we're in time<br>
              If you're getting yourself wet for me<br>
              I guess you're all mine<br>
              You're sleeping in this bed with me<br><br>
              I just think you're cool<br>
              I dig your cinema<br>
              Do you think I'm cool, too?<br>
              Or am I too into you?<br>
              Tell me what you want and you got it, love<br>
              I want all of you, gimme all you got<br>
              That's cinema<br>
              That's cinema, uh-huh<br><br>
              It's you<br>
              Don't know why, but it feels so right to me<br>
              Something in the way you move<br>
              I like it when you dance for me (I just think it's-)<br>
              You all the time (time, time)<br>
              In doses at night (night, night)<br>
              No roof on the drive<br>
              Dust off the high<br>
              And go to sleep (go to sleep, go to sleep)<br><br>
              I just think you're cool<br>
              I dig your cinema<br>
              Do you think I'm cool, too?<br>
              Or am I too into you?<br>
              I just think you're cool (co-cool)<br>
              I dig your cinema (cinema)<br>
              Do you think I'm cool, too?<br>
              Or am I (cinema) too into you?<br>
              Cinema<br><br>
              You got, you got<br>
              I'll bring you pop, you pop<br>
              You got, you got<br>
              I'll bring you pop<br>
              You got, you got the cinema<br>
              I'll bring the pop to the cinema<br>
              You pop<br><br>
              You got, you got the cinema<br>
              You got, you got the cinema<br>
              I'll bring the pop to the cinema<br>
              You pop when we get intimate<br>
              You got, you got the cinema<br>
              You got, you got (cinema) the cinema<br>
              I'll bring the pop to the cinema<br>
              You pop when we get intimate (baby, you're cinema)<br><br>
              You got, you got the cinema<br>
              You got, you got the cinema<br>
              I'll bring the pop to the cinema<br>
              You pop when we get intimate (baby, you're cinema)<br>
              You got, you got the cinema<br>
              You got, you got the cinema<br>
              I'll bring the pop to the cinema<br>
              You pop when we get intimate (baby, you're cinema)<br><br>
              You got, you got the cinema<br>
              You got, you got the cinema (cinema)<br>
              I'll bring the pop to the cinema<br>
              You pop when we get intimate<br><br>
            </div>
          </div>
        </div>

        <div class="card maindivcolor">
          <div class="card-header">
            <a class="btn" data-bs-toggle="collapse" href="#daydreaming">
              Daydreaming
            </a>
          </div>
          <div id="daydreaming" class="collapse" data-bs-parent="#accordion">
            <div class="card-body">
              Ooh-ooh<br>
              Ooh<br><br>
              Livin' in a daydream<br>
              She said, "Love me like you paid me"<br>
              You know I'll be gone for so long<br>
              So give me all of your love, give me something to dream about<br><br>
              Ooh-ooh<br><br>
              Stay until the morning<br>
              'Cause, baby, loving you's the real thing<br>
              It just feels right<br>
              When you give me all of your love, give me something to dream about<br>
              (All of your love, give me something to dream about)<br>
              So give me all of your love, give me something to dream about<br><br>
              Ooh-ooh<br><br>
              Livin' in a daydream<br>
              Livin' in a daydream<br>
              Livin' in a daydream<br>
              Give me all of your love, give me something to dream about<br><br>
              Livin' in a daydream<br>
              Livin' in a daydream (it's alright)<br>
              Livin' in a daydream<br>
              Give me all of your love<br>
              Give me something to dream about (give me all of your love, ooh-ooh)<br>
              Give me all of your love<br>
              Give me something to dream about (ooh-ooh, it's alright, ooh-ooh)<br>
              Give me all of your love<br>
              Give me something to dream about (ow)<br><br>
            </div>
          </div>
        </div>

        <div class="card maindivcolor">
          <div class="card-header">
            <a class="btn" data-bs-toggle="collapse" href="#kd">
              Keep Driving
            </a>
          </div>
          <div id="kd" class="collapse" data-bs-parent="#accordion">
            <div class="card-body">
              Black and white film camera<br>
              Yellow sunglasses<br>
              Ashtray, swimming pool<br>
              Hot wax, jump off the roof<br><br>
              A small concern with how the engine sounds<br>
              We held darkness in withheld clouds<br>
              I would ask, "Should we just keep driving?"<br><br>
              Maple syrup, coffee<br>
              Pancakes for two<br>
              Hash brown, egg yolk<br>
              I will always love you<br><br>
              A small concern with how the engine sounds<br>
              We held darkness in withheld clouds<br>
              I would ask, "Should we just keep driving?"<br>
              Should we just keep driving?<br><br>
              Passports in footwells<br>
              Kiss her and don't tells<br>
              Wine glass, puff pass, tea with cyborgs<br>
              Riot America, science and edibles<br>
              Life hacks going viral in the bathroom<br><br>
              Cocaine, side boob<br>
              Choke her with a sea view<br>
              Toothache, bad move<br>
              Just act normal<br>
              Moka pot Monday, it's all good<br>
              Hey, you<br>
              Should we just keep driving?<br><br>
              Should we just keep driving?<br>
              Ooh-ooh, ooh<br>
              Should we just keep driving?<br><br>
            </div>
          </div>
        </div>

        <div class="card maindivcolor">
          <div class="card-header">
            <a class="btn" data-bs-toggle="collapse" href="#satellite">
              Satellite
            </a>
          </div>
          <div id="satellite" class="collapse" data-bs-parent="#accordion">
            <div class="card-body">
              You got a new life<br>
              Am I bothering you?<br>
              Do you wanna talk?<br>
              We share the last line<br>
              Then we drink the wall<br>
              'Til we wanna talk<br><br>
              I go 'round and 'round<br>
              Satellite<br><br>
              Spinning out, waiting for ya to pull me in<br>
              I can see you're lonely down there<br>
              Don't you know that I am right here?<br>
              Spinning out, waiting for ya to pull me in<br>
              I can see you're lonely down there<br>
              Don't you know that I am right here?<br><br>
              I'm in an L.A. Mood<br>
              I don't wanna talk to you<br>
              She said, "Give me a day or two"<br><br>
              I go 'round and 'round<br>
              Satellite<br><br>
              Spinning out, waiting for ya to pull me in<br>
              I can see you're lonely down there<br>
              Don't you know that I am right here?<br>
              Spinning out, waiting for ya to pull me in<br>
              I can see you're lonely down there<br>
              Don't you know that I am right here?<br><br>
              Right here, right here<br>
              Spinning out, waiting for ya<br>
              I'm here, right here<br>
              Wishing I could be there for ya<br>
              Be there for ya<br>
              Be there for ya (for ya)<br>
              For ya<br>
              Be there for ya<br><br>
              Spinning out, waiting for ya to pull me in<br>
              (Spinning out, waiting)<br>
              I can see you're lonely down there<br>
              Don't you know that I am right here? (Spinning out, waiting for ya)<br>
              Spinning out waiting for ya (for ya, for ya) to pull me in (for ya)<br>
              I can see you're lonely down there<br>
              Don't you know that I am right here?<br>
              Spinning out, waiting for ya (for ya, for ya) to pull me in (for ya)<br>
              I can see you're lonely down thene<br>
              Don't you know that I am right here?<br><br>
              
            </div>
          </div>
        </div>

        <div class="card maindivcolor">
          <div class="card-header">
            <a class="btn" data-bs-toggle="collapse" href="#boyfriends">
              Boyfriends
            </a>
          </div>
          <div id="boyfriends" class="collapse" data-bs-parent="#accordion">
            <div class="card-body">
              Hoo<br>
              Niaga ti ta kcab er'uoy, loof<br><br>
              Boyfriends<br>
              They think you're so easy<br>
              They take you for granted<br>
              They don't know they're just misunderstanding you<br>
              You, you're back at it again<br><br>
              Weakened<br>
              When you get deep in<br>
              He starts secretly drinking<br>
              It gets hard to know what he's thinking<br>
              You love a fool who knows just how to get under your skin<br>
              You, you, you still open the door<br><br>
              You're no closer to him<br>
              Now you're halfway home<br>
              Only calling you when<br>
              Don't wanna be alone<br>
              Oh, and you go<br>
              Why? You don't know<br><br>
              Boyfriends<br>
              Are they just pretending?<br>
              They don't tell you where it's heading<br>
              And you know the game's never ending<br>
              You, you lay with him as you stay in the daydream<br>
              You feel a fool<br>
              You're back at it again<br><br>
              Ooh<br><br>
            </div>
          </div>
        </div>

        <div class="card maindivcolor">
          <div class="card-header">
            <a class="btn" data-bs-toggle="collapse" href="#loml">
              Love of My Life
            </a>
          </div>
          <div id="loml" class="collapse" data-bs-parent="#accordion">
            <div class="card-body">
              Baby, you were the love of my life, woah<br>
              Maybe you don't know what's lost 'til you find it<br><br>
              Take a walk on Sunday through the afternoon<br>
              We can always find somethin' for us to do<br>
              We don't really like what's on the news, but it's on all the time<br>
              I take you with me every time I go away<br>
              In a hotel, usin' someone else's name<br>
              I remember back at Jonny's place, it's not the same anymore<br><br>
              Baby, you were the love of my life, woah<br>
              Maybe you don't know what's lost 'til you find it<br>
              It's not what I wanted, to leave you behind<br>
              Don't know where you'll land when you fly<br>
              But, baby, you were the love of my life<br><br>
              It's unfortunate, ooh<br>
              Just coordinates, ooh<br><br>
              I don't know you half as well as all my friends<br>
              I won't pretend that I've been doin' everything I can<br>
              To get to know your creases and your ends<br>
              Are they the same?<br><br>
              Baby, you were the love of my life, woah<br>
              Maybe you don't know what's lost 'til you find it<br>
              It's not what I wanted, to leave you behind<br>
              Don't know where you'll land when you fly<br>
              But, baby, you were the love of my life<br>
            </div>
          </div>
        </div>
      
      </div>

      
      
    </div>
</body>

</html>