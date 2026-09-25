<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Tamil to English | tamil to english translate</title>
<meta name="keywords" content="tamil to english translation, tamil translation, Tamil writing,easy hindi typing,tamil font,india typing,tamil to english translation tamil to english,tamil into english,tamil to eng translation,tamil transliteration to english,translation from india to tamil,english translation,transliteration from tamil to english,typing in tamil,typing from tamil to english,hindi tamil typing,english tamil converter,FREE tamil to english Translation - Instant tamil Translation," />




<meta name="description" content="Tamil to English translate - translate your Tamil content into English and there is no limit of translation. you can translate unlimited characters here and you can translate your Tamil paragraphs into english by using copy and paste options."/>




<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="fb:app_id" content="504015233411430" />
<meta property="og:title" content="Tamil to English | tamil to english translate" />
<meta property="og:description" content="Tamil to English translate - translate your Tamil content into English and there is no limit of translation. you can translate unlimited characters here and you can translate your Tamil paragraphs into english by using copy and paste options"/>
<meta property="og:url" content="http://www.englishtohindityping.com/tamil-to-english-translation.php" />
<meta property="og:site_name" content="english to hindi typing" />
<meta property="article:publisher" content="https://www.facebook.com/Englishtohindityping" />




<meta name="viewport" content="width=device-width, initial-scale=1"/>
 <link href="assets/css/bootstrap.min.css" rel="stylesheet">
 <link href="assets/footer.css" rel="stylesheet">
       <link href="assets/style.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="jqueryy.min.js"></script>




	   
 
	<style>

        .btn-success{color:#ffffff;background-color:#5cb85c;border-color:#5cb85c}.btn-success:hover,.btn-success:focus,.btn-success.focus,.btn-success:active,.btn-success.active,.open > .dropdown-toggle.btn-success{color:#ffffff;background-color:#449d44;border-color:#419641}
        

        @media screen and (max-width: 600px) {
      .lap{
        display: none;
      }
    }
    
    
    @media screen and (min-width: 600px) {
      .mob{
        display: none;
      }
    }


            </style>






	   





<style>

	p{

		text-align: justify;
		font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, "sans-serif";
			font-size: 23px;
		line-height: 33px;

	}

	</style>




</head>

<body>

<?php
    include 'menu.php';

?>



	<center>

	<h2 style="color: darkgreen
			   ;"> <b> <a href="tamil-to-english-translation.php"> Tamil To English Translation </a> </b>  </h2>
		</center>

	<div class="container-fluid">
	<div class="row">
		<div class="col-md-1">
		</div>

		<div class="col-md-8">
			<ul class="nav nav-tabs">

    <li ><a href="english-to-tamil-translation.php" target="_blank">English To Tamil Translation</a></li>
    <li><a href="english-to-hindi-typing.php" target="_blank">Hindi Typing</a></li>
    <li><a href="tamil-to-hindi-translation.php" target="_blank">Tamil To Hindi Translation</a></li>



    <li><a href="malayalam-typing.php" target="_blank">Assamese Typing</a></li>
    <li><a href="download-hindi-font.php" target="_blank">Download Hindi Font</a></li>
    <li><a href="Download-Kruti-Dev-Font.php" target="_blank">Kruti Dev Font</a></li>
    <li><a href="tamil-typing.php" target="_blank">Tamil Typing</a></li>
    <li><a href="typing-tips.php" target="_blank">Typing Tips</a></li>


  </ul>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- for top 700x60 horizontal -->
<ins class="adsbygoogle"
     style="display:inline-block;width:700px;height:60px"
     data-ad-client="ca-pub-7144402668220123"
     data-ad-slot="7683158486"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>


			</div>

		<div class="col-md-3">
		    
		    
		  
		    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- for event -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7144402668220123"
     data-ad-slot="5037681447"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>  
		    
		    

			</div>

		</div>
		<br>

    <div class="row">
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">

			</div>



        <?php

		error_reporting(0);
            require_once ('vendor/autoload.php');
            use \Statickidz\GoogleTranslate;

            $source = 'ta';
            $target = 'en';
            //$text = 'good';

		 $text =$_POST[text];
            $trans = new GoogleTranslate();
            $result = $trans->translate($source, $target, $text);

            //echo '<h2>'.$result.'</h2>';



		?>









<div class="lap">

		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<div class="form-group">
		<form  method="post">
		    		

<textarea id="data" name="text" cols="50" rows="17" class="textarea1 form-control t11" <?php echo '<h1>'.$text =$_POST[text]; ?></textarea>
<br><br>
		<center><input type="submit" class="tstbutton" Value="Translate In English"/></center>
	</form>
		</div>
			</div>


		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">


			<textarea name="result" cols="50" rows="15" class="textarea2 form-control t4"  readonly style="background-color: white;"  id="myInput" <?php echo '<h1>'.$result; ?>   </textarea>



			<br> <br><br>
			<center>
			<button class="tstbuttoncopy" onclick="myFunction()">Copy Text</button>
		</center>
		</div>

</div>


<div class="mob">

		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<div class="form-group">
		<form  method="post">


<div id="input_tool_helper">
  <em>Suggestion Word Appears Here!</em>
  </div>
  <textarea name="text" cols="50" rows="17" class="textarea1 form-control t11" id="input_tool" <?php echo '<h1>'.$text =$_POST[text]; ?></textarea>
  <input type="hidden" name="googleInputKeyCode" value="ta-t-i0-und">
  

<br><br>
		<center><input type="submit" class="tstbutton" Value="Translate In English"/></center>
	</form>
		</div>
			</div>


		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">


			<textarea name="result" cols="50" rows="15" class="textarea2 form-control t4"  readonly style="background-color: white;"  id="myInput" <?php echo '<h1>'.$result; ?>   </textarea>



			<br> <br><br>
			<center>
			<button class="tstbuttoncopy" onclick="myFunction()">Copy Text</button>
		</center>
		</div>

</div>





		<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
</script>



		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" > 
	
	
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 300x400 for translation right side col size 3 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:400px"
     data-ad-client="ca-pub-7144402668220123"
     data-ad-slot="3726697648"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
	
	
	
	
	
	</div>


		</div>


</div>


	 <br>
	<div class="row">
		<div class="col-md-2">
		    
		    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- for event -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7144402668220123"
     data-ad-slot="5037681447"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script> 
		     
		    
		</div>

		<div class="col-md-8">


    <h1>Tamil to English translation</h1>
    <p>Tamil to English translate - translate your Tamil content into English and there is no limit of translation. you can translate unlimited characters here and you can translate your Tamil paragraphs into english by using copy and paste options.</p>

    <p>

		<span> <b> Tamil Translation (தமிழ் மொழிபெயர்ப்பு) </b> </span>Tamil Translation is the process of translating Tamil Sentence in to English Language. So Tamil speakers understand its meaning. This is also known as Tamil Translation
 Each and every country and states have their own language when they need to communicate with each other countries either they have to learn that language or use translation.


		</p>
			<br>
			
			 <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- for event -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7144402668220123"
     data-ad-slot="5037681447"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script> 
		    
		<p>
			In India there are near about 68 million tamil language. The free online Tamil to english Translation Tool provide instant translation of your tamil sentences.
Here we are using Machine translation software that translates Tamil in english. As given input your tamil Sentence on given box and after that click on translate button.


			</p>

			<br>


			<p>  <span> <b>About our translation tool</b>  </span>  Our Tamil to egnlish Translation Tool is powered by Google Translation API. You can type the text you want translated and then click the "Translate" button. Our app then translates your Tamil word, phrase or sentence into English.
The translation only takes few seconds and  to be translated in one request. Although this translation is  100% accurate, you can get a basic idea and with few modification it can be pretty accurate. This translation software is evolving day by day and Google Engineers are working on it to make tamil translation more intelligent and accurate. Hopefully, one day it will produce near to more  perfect translation!
  </p>


		<br>
			<p><span> <b>Tamil Typing Input Tool</b>  </span>  With this tool you can type in tamil and Get in english. For e.g. typing "நீங்கள் எப்படி இருக்கிறீர்கள்" gives you "how are you". Typing tamil is natural and you don’t need to remember complex tamil keyboard. Please visit: www.EnglishToHindiTyping.com to use this tool.
This tamil typing is absolutely free and you can email the text you have typed to anyone - including yourself.

  </p>

 <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- for event -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7144402668220123"
     data-ad-slot="5037681447"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script> 
		    

			<br>

			<p> The translation will take 1 to 2 minutes in translation. Although it is not 100% accurate. But you can get an idea that what the meaning of the sentence. Translation software is evolving day by day. And we hope one day the software will able to produce 100 % accurate translation. tamil translation is much needed in India where govt and Major Company’s works in English and a common person don’t understand it.
For personal use it is very helpful. Google and other developer has been working on it for more accurate result and fast processing. Translation process manually is difficult and costly & time taking.</p>


			<p>

				Each and every tamizh knowing people will be happy to see Tamizh or Tamil typing letters anywhere in the world. Yes, so we are also happy and proud to promote our language through this website with the help of English to tamil translation tool.
				</p>
			<p>

				Nowadays, we are intended to use English keyboards and keypads. But No worries, Tamil typing online is easy now (without downloading Tamil fonts from anywhere)

				</p>

			<p>
				Our youngsters already playing with Thanglish(writing our language words through English letters). Now its easy to Convert english to Tamizh. Also you can make use of Tamil to English Translation tool in this website
				</p>

 <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- for event -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7144402668220123"
     data-ad-slot="5037681447"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script> 
		    


			<p>
				<b>Can we download this translation service?</b>

 At a moment you can only use our Gujarati translation online and copy this text or use this text anywhere else.

However, you can install the chrome extension tool called Google Translate by visiting Google Translate <a href="https://chrome.google.com/webstore/detail/google-translate/aapbdbdomjkkjkaonfhkkikfgjllcleb?hl=en" target="_blank">Chrome Extension link.</a>

				</p>

			</div>

		<div class="col-md-2">
		    
		    
		     <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- for event -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7144402668220123"
     data-ad-slot="5037681447"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script> 
		    
		    

			</div>

		</div>


	








        <?php
    include 'myabhishek/tamil-typing.php';

?>





















	<?php
    include 'footer.php';

?>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



    </body>
</htmL>