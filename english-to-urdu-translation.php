<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<title>English To Urdu Translation | FREE English to urdu Translation |Instant urdu Translation</title>


	<meta name="description" content="English to Urdu translate - translate your English content into Urdu and there is no limit of translation. you can translate unlimited characters here and you can translate your English paragraphs into Urdu by using copy and paste options."/>

<meta name="keywords" content="English to urdu translation, urdu translation,india typing,english to urdu translation english to urdu ,english into urdu, translation,urdu transliteration english-to-urdu-translation, best site for translation google translate english to urdu,english to urdu translation,english to urdu translation meaning,english to urdu translation online,english to urdu translation with voice,english to urdu translation sentences,english to urdu translation online easy" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<meta name="viewport" content="width=device-width, initial-scale=1" />

<meta property="og:locale" content="en_US" />

<meta property="og:type" content="website" />

<meta property="fb:app_id" content="504015233411430" />

<meta property="og:title" content="English To Urdu Translation | FREE English to urdu Translation |Instant urdu Translation" />

<meta property="og:description" content="English to Urdu translate - translate your English content into Urdu and there is no limit of translation. you can translate unlimited characters here and you can translate your English paragraphs into Urdu by using copy and paste options."/>


<meta property="og:url" content="http://www.englishtohindityping.com/english-to-urdu-translation.php" />

<meta property="og:site_name" content="english to hindi typing" />

<meta property="article:publisher" content="https://www.facebook.com/Englishtohindityping" />


 <link href="assets/css/bootstrap.min.css" rel="stylesheet">
 <link href="assets/footer.css" rel="stylesheet">
       <link href="assets/style.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
   <script src="go.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129405892-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-129405892-1');
</script>
<meta name="viewport" content="width=device-width, initial-scale=1"/>

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

	<h1 style="color: darkgreen
			   ;"> <b> <a href="english-to-urdu-translation.php"> English To Urdu Translation </a> </b>  </h1>
		</center>

	<div class="container-fluid">
	<div class="row">
		<div class="col-md-1">
		</div>

		<div class="col-md-8">
			<ul class="nav nav-tabs">

    <li ><a href="urdu-to-english-translation.php" target="_blank">Urdu To English Translation</a></li>
    <li><a href="english-to-hindi-typing.php" target="_blank">Hindi Typing</a></li>
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
		<div class="col-lg-1 col-md-1 col-sm-1 col-xs-12" >

			</div>


        <?php

		error_reporting(0);
            require_once ('vendor/autoload.php');
            use \Statickidz\GoogleTranslate;

            $source = 'en';
            $target = 'ur';
            //$text = 'good';

		 $text =$_POST[text];
            $trans = new GoogleTranslate();
            $result = $trans->translate($source, $target, $text);

            //echo '<h2>'.$result.'</h2>';



		?>

		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<div class="form-group">
		<form  method="post">
<textarea  name="text" cols="50" rows="15" class="textarea1 form-control t48"  <?php echo '<h1>'.$text =$_POST[text]; ?>
</textarea>
			&nbsp;&nbsp;




	<center>
			<input type="submit" class="tstbutton" Value="Translate In Urdu"   />
		</center>
	</form>
		</div>
			</div>


		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">


			<textarea name="result" dir="rtl" cols="50" rows="15" class="textarea2 form-control t49"  readonly style="background-color: white;"  id="myInput" <?php echo '<h1>'.$result; ?>   </textarea>


			<br> <br><br>
			<center>
			<button class="tstbuttoncopy" onclick="myFunction()">Copy Text</button>
		</center>
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


    <p>

		<span> <b> Urdu Translation (اردو ترجمہ) </b> </span>Urdu Translation is the process of translating English Sentence in to Urdu Language. So urdu speakers understand its meaning. This is also known as اردو ترجمہ
 Each and every country and states have their own language when they need to communicate with each other countries either they have to learn that language or use translation.


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
		<p>
			In India there are near about 70 Million telugu language speaker. The free online English to urdu Translation Tool provide instant translation of your English sentences.
Here we are using Machine translation software that translates English in urdu. As given input your English Sentence on given box and after that click on translate button.


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
		    

			<p>  <span> <b>About our translation tool</b>  </span>  Our English to urdu Translation Tool is powered by Google Translation API. You can type the text you want translated and then click the "Translate" button. Our app then translates your English word, phrase or sentence into urdu.
The translation only takes few seconds and  to be translated in one request. Although this translation is not 100% accurate, you can get a basic idea and with few modification it can be pretty accurate. This translation software is evolving day by day and Google Engineers are working on it to make urdu translation more intelligent and accurate. Hopefully, one day it will produce near to perfect translation!
  </p>


		<br>
			<p><span> <b>urdu Typing Input Tool</b>  </span>  With this tool you can type in English and Get in urdu. For e.g. typing "How are you" gives you "تم کیسی ہو". Typing urdu is natural and you don’t need to remember complex telugu keyboard. Please visit: www.EnglishToHindiTyping.com to use this tool.
This urdu typing is absolutely free and you can email the text you have typed to anyone - including yourself.

  </p>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 800x300 horizontal -->
<ins class="adsbygoogle"
     style="display:inline-block;width:800px;height:300px"
     data-ad-client="ca-pub-7144402668220123"
     data-ad-slot="9868384414"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>



			<br>

			<p> The translation will take 1 to 2 minutes in translation. Although it is not 100% accurate. But you can get an idea that what the meaning of the sentence. Translation software is evolving day by day. And we hope one day the software will able to produce 100 % accurate translation. Hindi translation is much needed in India where govt and Major Company’s works in English and a common person don’t understand it.
For personal use it is very helpful. Google and other developer has been working on it for more accurate result and fast processing. Translation process manually is difficult and costly & time taking.</p>

			<br>
			<p>
				<b>About</b> Urdu (/ˈʊərduː/;[11] Urdu: اُردُو‎  Urdū [ˈʊrduː] (About this soundlisten)) (also known as Lashkari,[12][13] locally written لشکری [lʌʃkɜ:i:])—or, more precisely, Modern Standard Urdu—is a Persianised standard register of the Hindustani language. It is the official national language and lingua franca of Pakistan. In India, it is one of the 22 official languages recognised in the Constitution of India, having official status in the five states of Telangana, Uttar Pradesh, Bihar, Jharkhand and West Bengal, as well as the national capital territory of Delhi.

				</p>
			<br>
			<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- horizonal700 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-7144402668220123"
     data-ad-slot="7122871422"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
			
			
			<p>
				<b>Can we download this translation service?</b>

 At a moment you can only use our urdu translation online and copy this text or use this text anywhere else.

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
    include 'footer.php';

?>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




    </body>
</htmL>