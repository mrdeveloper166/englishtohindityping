
<?php
$link = mysqli_connect("localhost", "iop", "iop2020@", "iopstaff");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} // Using database connection file here

$records = mysqli_query($link,"select * from sname"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="google" content="notranslate" />
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="॥Happy Dussehra॥" />
        <meta property="og:description" content="॥Happy Deewali॥" />
        <meta property="og:site_name" content="॥Happy दीपावली ॥" /> 
        <title>दीपावली की शुभकामनाएं</title>
        <link rel="stylesheet" href="animate.min.css">
    
    <style>
    body{
            background: #f8f8f8;
            margin:0;
          }
          .mainContainer {
             background: linear-gradient(to bottom, #ffffff 0%, #ffffff 100%);
            max-width: 450px;
            min-height: 290px;
            margin: 0 auto;
            text-align: center;
            padding: 15px;
            color: #999;
            padding-bottom: 60px;
    
            box-shadow: 0 0 10px 1px rgba(0,0,0,.14), 0 1px 14px 2px rgba(0,0,0,.12), 0 0 5px -3px rgba(0,0,0,.3);
    
    
          }
    
    #name {
         
          animation: name 4s infinite; 
          text-transform: capitalize;
          margin-bottom: 5px;
          font-size: 50px;
          padding: 0 10px;
          font-family: 'Teko', sans-serif;
    } 
    
    #usernameb { color: black;  /* Fallback: assume this color ON TOP of image */
       background: url(img/namegif.gif);
       -webkit-background-clip: text;
       -webkit-text-fill-color: transparent;
              animation: swing 4s infinite;
                text-transform: uppercase;
              margin-bottom: 5px;
              font-size: 25px;
              padding: 0 10px;
        font-family: 'SF Espresso Shack', cursive;
    }
    
    .m1{position:fixed;left:1%; width:auto;height:100%;top:1%;color:#000;}
    .m2{position:fixed;right:1%; width:auto;height:100%;top:1%;color:#000;}
    
    /* Custom Animation classes */     
    .name {
        color: #fff;
            margin: 6px;
            padding: 25px 20px;
            font-size: 48px;
            font-family: sans-serif;
    }
    
    .enter-name input[type=name] {
        background-color: yellow;
        color: black;
        font-weight:bold;
           border-radius: 10px;
            box-sizing: border-box;
            border:2px solid black;
            padding: 5px;
            position: fixed;
            left: 10px;
            bottom: 5px;
            height: 50px;
            width: 70%;
            text-align: center;
            font-size: 22px;
            display: inline-block;
    }
    
    .enter-name .btn {
        border-radius: 10px;
            font-size: 21px;
            padding: 4px;
            position: fixed;
            right: 2px;
            bottom: 5px;
            height: 50px;
            width: 23%;
            display: inline-block;
            color: white;
            font-weight:600;
            background-color: red;
            border: 2px solid black;
            letter-spacing: .5px;
            transition: .2s ease-out;
            cursor: pointer;
            line-height: 36px;
            outline: 0;
            text-transform: uppercase;
            vertical-align: middle;
            text-decoration: none;
            animation-duration: 4s !important;
    }
    
    .enter-name input[type=name]::-webkit-input-placeholder { 
        color: black;
          font-size: 18px;	
    }
    
    .enter-name input[type=name]::-moz-placeholder { 
        color: black;
          font-size: 18px;
    }
    
    .enter-name input[type=name]:focus::-webkit-input-placeholder {
        color: black;
    }
    
    .enter-name input[type=name]:focus::-moz-placeholder { 
        color: black;
          font-size: 18px;
    }
    
    
    #demo
    {
      
        color: red;
        font-size: 16px;
        font-weight: bold;
        animation: pulse 2s infinite;
        width:87%;
        margin:auto;
    }
    
    a.rope
    {
        text-decoration:none;
    }
    .wishMessage {
            color: #fff;
            font-size: 22px;
            font-weight: bold;
            margin-top: 20px;
            text-shadow: 0px 0px 10px #afafaf;
          }
          .wishMessage p{
            margin: 0.3em 0;
          }
    /* Custom Animation classes */ 
    #show-name {
      font-size: 25px;
      display: inline-block;
      margin-bottom: 5px;
      animation: swing 1s infinite, glow 20s infinite; }
    
    @keyframes glow {
      0%, 100% {
        text-shadow: 0 0 30px red; }
      25% {
        text-shadow: 0 0 30px orange; }
      50% {
        text-shadow: 0 0 30px forestgreen; }
      75% {
        text-shadow: 0 0 30px cyan; } }  
    figure {
      animation:wobble 5s ease-in-out infinite;
      transform-origin:center center;
      transform-style:preserve-3d;
    }@keyframes wobble {
      0%,100%{ transform:rotate3d(1,1,0,40deg); }
      25%{ transform:rotate3d(-1,1,0,40deg); }
      50%{ transform:rotate3d(-1,-1,0,40deg); }
      75%{ transform:rotate3d(1,-1,0,40deg); }
    }
    </style>
    
    <style type="text/css">
          *{
            margin:0;
            padding:0;
          }
          body {
            text-align: center;
            
          }
          img{
          border: none;
        }
    .leftcurtain{
           width: 100%;
          height: 70%;
          top: 0px;
          left: 0px;
          position: absolute;
          z-index: 2;
        }
         .rightcurtain{
          width: 100%;
          height: 120%;
          right: 0px;
          top: 0px;
          position: absolute;
          z-index: 3;
        }
         .rightcurtain img, .leftcurtain img{
          width: 100%;
          height: 100%;
        }
        .logo{
          margin: 0px auto;
          margin-top: 150px;
        }
        .rope{
        position: absolute;
        top: 10px;
        left: 23%;
        z-index: 4;
    }
        } 
    .centered {
        position: absolute;
        top: 70%;
        left: 55%;
        transform: translate(-50%, -50%);
    }
    a.rope
    {
        text-decoration:none;
    }
    
    
    
    
    @keyframes aadisoni{
      0% {
        transform:  translate(0px,0px)  rotate(0deg) ;
      }
      15% {
        transform:  translate(-25px,0px)  rotate(-5deg) ;
      }
      30% {
        transform:  translate(20px,0px)  rotate(3deg) ;
      }
      45% {
        transform:  translate(-15px,0px)  rotate(-3deg) ;
      }
      60% {
        transform:  translate(10px,0px)  rotate(2deg) ;
      }
      75% {
        transform:  translate(-5px,0px)  rotate(-1deg) ;
      }
      100% {
        transform:  translate(0px,0px)  rotate(0deg) ;
      }
    }
    
    @-webkit-keyframes aadisoni {
      0% {
        -webkit-transform:  translate(0px,0px)  rotate(0deg) ;
      }
      15% {
        -webkit-transform:  translate(-25px,0px)  rotate(-5deg) ;
      }
      30% {
        -webkit-transform:  translate(20px,0px)  rotate(3deg) ;
      }
      45% {
        -webkit-transform:  translate(-15px,0px)  rotate(-3deg) ;
      }
      60% {
        -webkit-transform:  translate(10px,0px)  rotate(2deg) ;
      }
      75% {
        -webkit-transform:  translate(-5px,0px)  rotate(-1deg) ;
      }
      100% {
        -webkit-transform:  translate(0px,0px)  rotate(0deg) ;
      }
    }
    
    
    
    @keyframes name {
      0%   {color:red;}
      20%   {color:white;}
      40%   {color:yellow;}
      60%   {color:orange;}
      80%   {color:cyan;}
      100% {color:#f45bf4;}
    }
    
    
    .glow {
      width:50%;
      padding: 2px;
      background-color: #FF1493	;
      animation: glow 2s infinite;
      font-size:25px;
      font-family: 'Ranga', cursive;
      color:white;
      margin:auto;
      text-align:center;
      border-radius:10px;
      text-shadow:1px 2px 6px black;
    
    }
    
    @keyframes glow {
      0%   {box-shadow: 0px 0px 0px #FF1493	;}
      100%   {box-shadow: 0px 0px 20px 5px #ffb3db;}
     
    }
    /* Slideshow container */
    .slideshow-container {
      max-width: 80%;
      position: relative;
      height:280px;
      margin: auto;
    }
    
    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }
    
    
    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 1.5s;
      animation-name: fade;
      animation-duration: 1.5s;
    }
    
    @-webkit-keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }
    
    @keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }
    
    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .text {font-size: 11px}
    }
    
    </style>
    <style type="text/css">
    canvas {
        cursor: crosshair;
        display: block;
    }
    *{margin:0;padding:0}body{text-align:center}img{border:none}.leftcurtain{width:100%;height:100%;top:0;left:0px;position:absolute;z-index:2}.rightcurtain{width:100%;height:100%;right:0px;top:0;position:absolute;z-index:3}.rightcurtain img,.leftcurtain img{width:100%;height:100%}.logo{margin:0 auto;margin-top:150px}.rope{position:absolute;top:10px;left:23%;z-index:4}.centered{position:absolute;top:75%;left:50%;transform:translate(-50%,-50%)}.aadi{background-image:url();background-repeat:no-repeat;background-attachment:fixed;background-position:top}.matki{height:200px;}@keyframes aadisoni{0%{transform:translate(0px,0px) rotate(0deg)}15%{transform:translate(-25px,0px) rotate(-5deg)}30%{transform:translate(20px,0px) rotate(3deg)}45%{transform:translate(-15px,0px) rotate(-3deg)}60%{transform:translate(10px,0px) rotate(2deg)}75%{transform:translate(-5px,0px) rotate(-1deg)}100%{transform:translate(0px,0px) rotate(0deg)}}@-webkit-keyframes aadisoni{0%{-webkit-transform:translate(0px,0px) rotate(0deg)}15%{-webkit-transform:translate(-25px,0px) rotate(-5deg)}30%{-webkit-transform:translate(20px,0px) rotate(3deg)}45%{-webkit-transform:translate(-15px,0px) rotate(-3deg)}60%{-webkit-transform:translate(10px,0px) rotate(2deg)}75%{-webkit-transform:translate(-5px,0px) rotate(-1deg)}100%{-webkit-transform:translate(0px,0px) rotate(0deg)}}
    #username {
         color: black;  /* Fallback: assume this color ON TOP of image */
       background: url(img/namegif.gif);
       -webkit-background-clip: text;
       -webkit-text-fill-color: transparent;
              animation: swing 4s infinite;
                text-transform: uppercase;
              margin-bottom: 5px;
              font-size: 40px;
              padding: 0 10px;
        font-family: 'SF Espresso Shack', cursive;
    } 
    
    #usernameb { color: black;  /* Fallback: assume this color ON TOP of image */
       background: url(img/namegif.gif);
       -webkit-background-clip: text;
       -webkit-text-fill-color: transparent;
              animation: swing 4s infinite;
                text-transform: uppercase;
              margin-bottom: 5px;
              font-size: 25px;
              padding: 0 10px;
        font-family: 'SF Espresso Shack', cursive;
    }
    #loading {
            
    }
    @-webkit-keyframes rotation-star {
            from {
                    -webkit-transform: rotate(0deg);
                     transform: rotate(0deg);
            }
            to {
                    -webkit-transform: rotate(359deg);
                     transform: rotate(359deg);
            }
    }
    
    @-keyframes rotation-star{
        from {
             -webkit-transform: rotate(0deg);
              transform: rotate(0deg);
        }
        to {
             -webkit-transform: rotate(359deg);
              transform: rotate(359deg);
        }
    }
    
      </style>
      
    </head>
    <body class="aadi">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="slider.js" type="text/javascript"></script> 
    <script type="text/javascript">
    var scroll = $(document).ready(function(){$curtainopen=!1,$(".rope").click(function(){return $(this).blur(),0==$curtainopen?($(this).stop().animate({top:"-171%"},{queue:!1,duration:350,easing:"easeOutBounce"}),$(".leftcurtain").stop().animate({width:"1px"},2e3),$(".rightcurtain").stop().animate({width:"1px"},2e3),$curtainopen=!0):($(this).stop().animate({top:"-40px"},{queue:!1,duration:350,easing:"easeOutBounce"}),$(".leftcurtain").stop().animate({width:"50%"},2e3),$(".rightcurtain").stop().animate({width:"51%"},2e3),$curtainopen=!1),!1})});
    
    </script>
    <script>
      function play(){
           var audio = document.getElementById("audio");
           audio.play();
                     }
       </script>
    
    <audio id="audio" src="a.mp3" ></audio>
    <a class="rope" style="text-decoration:none;" href="#" onclick="play()"><br><br><br>
      
      
    <div style="font-size: 25px;text-shadow: 1px 1px 3px blue, 1px 1px 3px blue, -1px -1px 3px blue, -1px -1px 3px black;color:white;font-weight: bold;"><br><b>इस जादुई दीपक<br> को <br>  टच करके देखो !<br>👇👇👇</b></div><br>
    <div class="animated pulse" style="background-image: url(img/4.gif); background-size: 50%; background-position: center; background-repeat: no-repeat;">
    <img id="loading" src="img/round.gif" class="center swing1" style="max-width:250px; width: 100%;" />
    </div>
    </a>  
      
      
    <div class="leftcurtain"><img src="img/diwalikns.jpg"/></div>
    <div class="rightcurtain"><img src="img/diwalikns.jpg"/></div>
      
    <marquee class="m1" behavior="scroll" direction="up" scrolldelay="0"> <br>
    <img src="img/d1.png" height="30px" width="30px"/><br><br>
    <img src="img/d2.png" height="30px" width="30px"/><br><br>
    <img src="img/d3.png" height="30px" width="30px"/><br><br>
    <img src="img/d4.png" height="30px" width="30px"/><br><br>
    <img src="img/d1.png" height="30px" width="30px"/><br><br>
    <img src="img/d2.png" height="30px" width="30px"/><br><br>
    <img src="img/d3.png" height="30px" width="30px"/><br><br>
    <img src="img/d4.png" height="30px" width="30px"/><br><br>
    <img src="img/d1.png" height="30px" width="30px"/><br><br>
    <img src="img/d2.png" height="30px" width="30px"/><br><br>
    <img src="img/d3.png" height="30px" width="30px"/><br><br>
    <img src="img/d4.png" height="30px" width="30px"/><br><br>
    <img src="img/d1.png" height="30px" width="30px"/><br><br>
    <img src="img/d2.png" height="30px" width="30px"/><br><br>
    <img src="img/d3.png" height="30px" width="30px"/><br><br>
    <img src="img/d4.png" height="30px" width="30px"/><br><br>
    <img src="img/d1.png" height="30px" width="30px"/><br><br>
    <img src="img/d2.png" height="30px" width="30px"/><br><br>
    <img src="img/d3.png" height="30px" width="30px"/><br><br>
    <img src="img/d4.png" height="30px" width="30px"/><br><br>
    </marquee>
    <marquee class="m2" behavior="scroll" direction="down" scrolldelay="0"> <br>
    <img src="img/d1.png" height="30px" width="30px"/><br><br>
    <img src="img/d2.png" height="30px" width="30px"/><br><br>
    <img src="img/d3.png" height="30px" width="30px"/><br><br>
    <img src="img/d4.png" height="30px" width="30px"/><br><br>
    <img src="img/d1.png" height="30px" width="30px"/><br><br>
    <img src="img/d2.png" height="30px" width="30px"/><br><br>
    <img src="img/d3.png" height="30px" width="30px"/><br><br>
    <img src="img/d4.png" height="30px" width="30px"/><br><br>
    <img src="img/d1.png" height="30px" width="30px"/><br><br>
    <img src="img/d2.png" height="30px" width="30px"/><br><br>
    <img src="img/d3.png" height="30px" width="30px"/><br><br>
    <img src="img/d4.png" height="30px" width="30px"/><br><br>
    <img src="img/d1.png" height="30px" width="30px"/><br><br>
    <img src="img/d2.png" height="30px" width="30px"/><br><br>
    <img src="img/d3.png" height="30px" width="30px"/><br><br>
    <img src="img/d4.png" height="30px" width="30px"/><br><br>
    <img src="img/d1.png" height="30px" width="30px"/><br><br>
    <img src="img/d2.png" height="30px" width="30px"/><br><br>
    <img src="img/d3.png" height="30px" width="30px"/><br><br>
    <img src="img/d4.png" height="30px" width="30px"/><br><br>
    </marquee>
    <div class="mainContainer">
    <center>
 
 
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7144402668220123"
     crossorigin="anonymous"></script>
<!-- first for calculator -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7144402668220123"
     data-ad-slot="3612998959"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
 
    </center>
    <br>
    <div style="animation: swing 4s infinite;">
    <h1 style="-webkit-text-stroke: 1px black; color: white; text-shadow: 3px 3px 0 #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;" id="name"><?php echo $data['n']; ?>
   </h1>
    </div><br>
            <h3 class="fromMessage" id="fromMessage"></h3>
     <img src="img/kikn.png" width="68%"><br>
     <div style="font-size: 7px; font-weight: 500; color: black;">
         <p id="demo"></p>
    </div>
    <br>  
     <img src="img/hd011.png" width="90%" height="auto" style="animation: pulse 2s infinite">
    <br>
    
    <center>
    <div class="slideshow-container">
    <div class="mySlides fade">
      <img src="img/d2d2.png" style="animation: pulse 2.5s infinite; width:  80%; height: 90%;">
    </div>
    <div class="mySlides fade">
      <img src="img/laxmi.png" style="animation: pulse 2.5s infinite; width:  80%; height: 90%;">
    </div>
    <div class="mySlides fade"> 
      <img src="img/hd1.gif" style="animation: pulse 2.5s infinite; width:  80%; height: 90%;">
    </div>
    </center>
    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
     <span class="dot"></span> 
    
    </div>
    <br>
    <div style="background-color: orange; border-radius: 17px; border: 0px solid rgb(0, 0, 0); box-shadow: rgba(0, 0, 0, 0.2) 5px 5px 5px; color: black; font-family: arial, sans-serif; font-size: 18px; font-stretch: normal; font-style: normal; font-variant: normal; line-height: normal; margin: 0px auto; padding: 4px 5px 3px; width: 90%;">
    <marquee behavior="alternate"><b>दीयों की रौशनी से झिलमिलाता आँगन हो,</b></marquee>
    </div>
    <div style="background-color: #FF00FF; border-radius: 17px; border: 0px solid rgb(0, 0, 0); box-shadow: rgba(0, 0, 0, 0.2) 5px 5px 5px; color: black; font-family: arial, sans-serif; font-size: 18px; font-stretch: normal; font-style: normal; font-variant: normal; line-height: normal; margin: 0px auto; padding: 4px 5px 3px; width: 90%;">
    <marquee behavior="alternate"><b>पटाखों की गूंजो से आसमान रोशन हो,</b></marquee>
    </div>
    <div style="background-color: red; border-radius: 17px; border: 0px solid rgb(0, 0, 0); box-shadow: rgba(0, 0, 0, 0.2) 5px 5px 5px; color: black; font-family: arial, sans-serif; font-size: 18px; font-stretch: normal; font-style: normal; font-variant: normal; line-height: normal; margin: 0px auto; padding: 4px 5px 3px; width: 90%;">
    <marquee behavior="alternate"><b>ऐसी आये झूमती गाती यह दिवाली,</b></marquee>
    </div>
    <div style="background-color: #FFFF00; border-radius: 17px; border: 0px solid rgb(0, 0, 0); box-shadow: rgba(0, 0, 0, 0.2) 5px 5px 5px; color: black; font-family: arial, sans-serif; font-size: 18px; font-stretch: normal; font-style: normal; font-variant: normal; line-height: normal; margin: 0px auto; padding: 4px 5px 3px; width: 90%;">
    <marquee behavior="alternate"><b>
    हर तरफ खुशियों ही खुशियों का मौसम हो,<b></marquee>
    </div>
    <div style="background-color: #00FF00; border-radius: 17px; border: 0px solid rgb(0, 0, 0); box-shadow: rgba(0, 0, 0, 0.2) 5px 5px 5px; color: black; font-family: arial, sans-serif; font-size: 18px; font-stretch: normal; font-style: normal; font-variant: normal; line-height: normal; margin: 0px auto; padding: 4px 5px 3px; width: 90%;">
    <marquee behavior="alternate"><b>
    !!आपको दिवाली की हार्दिक शुभकामनाएँ!!</b></marquee>
    </div>
    <br>
    <center>
  
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7144402668220123"
     crossorigin="anonymous"></script>
<!-- first for calculator -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7144402668220123"
     data-ad-slot="3612998959"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </center>
    <br>
    <span style="font-size:22px;text-shadow: 1px 1px 3px #FFEB3B, 1px 1px 3px #FFEB3B, -1px -1px 3px #FFEB3B, -1px -1px 3px #FFEB3B;color:#E91E63;"><marquee><b><i>“<?php echo $data['n']; ?>  की तरफ से आपको और आपके परिवार को दीपावली की हार्दिक शुभकामनाएँ!!”</b></i></marquee></span>
<?php
}
?>
    <br>
    <br>  
    <img src="img/bulb.gif" width="90%" height="15%" style="animation: pulse 2s infinite">
    <br>
    <br>
      <div class="glow"></b></h1></div>
    </div>
    <form method="POST" action="ready.php">
    <div class="enter-name">
            <input class="animated pulse infinite" type="name" required="" maxlength="50" name="n" id="n" placeholder="👉 यहाँ अपना नाम लिखें...">
            <button class="btn animated shake infinite" type="submit"><span>👉देखें</span></button>
        </div>
    </form>
    <script>
    function carousel(){var e,l=document.getElementsByClassName("mySlides");for(e=0;e<l.length;e++)l[e].style.display="";++myIndex>l.length&&(myIndex=1),l[myIndex-1].style.display="block",setTimeout(carousel,2e3)}carousel();
    
    </script>
    <script>
    var slideIndex = 0;
    showSlides();
    
    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
    </script>
    <script> 
    
    var countDownDate=new Date("04 Nov, 2021 00:00:00").getTime(),x=setInterval(function(){var e=(new Date).getTime(),o=countDownDate-e,t=Math.floor(o/864e5),n=Math.floor(o%864e5/36e5),a=Math.floor(o%36e5/6e4),l=Math.floor(o%6e4/1e3);document.getElementById("demo").innerHTML=t+"<font color='black'> दिन,</font> "+n+"<font color='black'> घंटे,</font> "+a+"<font color='black'>  मिनट,<br></font> "+l+"<font color='black'> सेकंड <spna style='color:red'>पहले</span> </font>",o<0&&(clearInterval(x),document.getElementById("demo").innerHTML="")},1e3);
        document.write(res);
    </script>
    
    
    
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-152739352-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-152739352-1');
    </script>
    
    <script type="text/javascript">! function (){
     var t;
     try{for (t=0; 10 > t; ++t)
      history.pushState({}, "", "#");
     onpopstate=function (t)
     {
      t.state && alert('अपना नाम लिखकर आगे बढ़ें ,कृपा बरसेगी');
      }}
      catch (o){}}();</script>
    
    </body>
    </html>