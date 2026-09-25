<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<title>English to Marathi Translation - Instant Marathi Translation </title>
<meta name="keywords" content="english to marathi translation,english to marathi,translate english to marathi,english to marathi translation, eng to marathi,english into marathi,translation,english transliteration to marathi,english,marathi to english translation,google translate english to marathi,typing, english to marathi translator, marathi typing,english to marathi translate,FREE English to marathi Translation - Instant marathi Translation,english to marathi translation,english to marathi translation online,english to marathi translation app,english to marathi translation sentences,english to marathi translation google,english to marathi translation unlimited words,english to marathi translation grammar" />

	<meta name="description" content="English to Marathi translate - translate your English content into Marathi and there is no limit of translation. you can translate unlimited characters here and you can translate your English paragraphs into Marathi by using copy and paste options."/>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<meta name="viewport" content="width=device-width, initial-scale=1" />

<meta property="og:locale" content="en_US" />

<meta property="og:type" content="website" />

<meta property="fb:app_id" content="504015233411430" />

<meta property="og:title" content="English to Marathi Translation - Instant Marathi Translation " />

<meta property="og:description" content="English to Marathi translate - translate your English content into Marathi and there is no limit of translation. you can translate unlimited characters here and you can translate your English paragraphs into Marathi by using copy and paste options."/>


<meta property="og:url" content="http://www.englishtohindityping.com/english-to-marathi-translation.php" />

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
			   ;"> <b> <a href="english-to-marathi-translation.php"> English To Marathi Translation </a> </b>  </h1>
		</center>

	<div class="container-fluid">
	<div class="row">
		<div class="col-md-1">
		</div>

		<div class="col-md-8">
			<ul class="nav nav-tabs">

    <li ><a href="marathi-to-english-translation.php" target="_blank">Marathi To English Translation</a></li>
    <li><a href="marathi-typing.php" target="_blank">Marathi Typing</a></li>
    <li><a href="malayalam-typing.php" target="_blank">Assamese Typing</a></li>
    <li><a href="download-hindi-font.php" target="_blank">Download Hindi Font</a></li>
    <li><a href="Download-Kruti-Dev-Font.php" target="_blank">Kruti Dev Font</a></li>
				<li><a href="marathi-to-hindi-translation.php" target="_blank">Marathi to Hindi Translation</a></li>
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
            $target = 'mr';
            //$text = 'good';

		 $text =$_POST[text];
            $trans = new GoogleTranslate();
            $result = $trans->translate($source, $target, $text);

            //echo '<h2>'.$result.'</h2>';



		?>

		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<div class="form-group">
		<form  method="post">
<textarea  name="text" cols="50" rows="15" class="textarea1 form-control t5"  <?php echo '<h1>'.$text =$_POST[text]; ?>
</textarea>
			&nbsp;&nbsp;




	<center>
			<input type="submit" class="tstbutton" Value="Translate In Marathi"   />
		</center>
	</form>
		</div>
			</div>


		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">


			<textarea name="result" cols="50" rows="15" class="textarea2 form-control t6"  readonly style="background-color: white;"  id="myInput" <?php echo '<h1>'.$result; ?>   </textarea>


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

		<span> <b> Marathi Translation (मराठी अनुवाद ) </b> </span>Marathi Translation is the process of translating English Sentence in to Marathi Language. So marathi speakers understand its meaning. This is also known as Marathi Anuvad
 Each and every country and states have their own language when they need to communicate with each other countries either they have to learn that language or use translation.


		</p>
			<br>
			
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 800x300 horizontal -->
<ins class="adsbygoogle"
     style="display:inline-block;width:800px;height:300px"
     data-ad-client="ca-pub-7144402668220123"
     data-ad-slot="9868384414"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>	
			
			
		<p>
			Marathi language is widely spoken. More than 73 million people around the world speaks this language. The free online english to marathi Translation Tool provide instant translation of your English sentences.
Here we are using Machine translation software that translates English in marathi. As given input your English Sentence on given box and after that click on translate button.


			</p>

			<br>


<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 800x300 horizontal -->
<ins class="adsbygoogle"
     style="display:inline-block;width:800px;height:300px"
     data-ad-client="ca-pub-7144402668220123"
     data-ad-slot="9868384414"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>






			<p>  <span> <b>About our translation tool</b>  </span>  Our English to Marathi Translation Tool is powered by Google Translation API. You can type the text you want translated and then click the "Translate" button. Our app then translates your English word, phrase or sentence into Marathi.
The translation only takes few seconds and  to be translated in one request. Although this translation is not 100% accurate, you can get a basic idea and with few modification it can be pretty accurate. This translation software is evolving day by day and Google Engineers are working on it to make marathi translation more intelligent and accurate. Hopefully, one day it will produce near to perfect translation!
  </p>


		<br>
			<p><span> <b>google Typing Input Tool</b>  </span>  With this tool you can type in English and Get in Marathi. For e.g. typing "india is great" gives you "भारत महान आहे ". Typing marathi is natural and you don’t need to remember complex Hindi keyboard. Please visit: www.EnglishToHindiTyping.com to use this tool.
This Marathi typing is absolutely free and you can email the text you have typed to anyone - including yourself.

  </p>


			<br>


<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 800x300 horizontal -->
<ins class="adsbygoogle"
     style="display:inline-block;width:800px;height:300px"
     data-ad-client="ca-pub-7144402668220123"
     data-ad-slot="9868384414"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>



			<p>

			 who cannot speak Marathi Language, translating Engish to Marathi could be quite difficult. There are many website that provide services to translate marathi for few money.but here you can do this absolutely free.

			</p>






	<p>

			 With the help of our english to marathi translator you can translate unlimited characters.

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
			<br>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 800x300 horizontal -->
<ins class="adsbygoogle"
     style="display:inline-block;width:800px;height:300px"
     data-ad-client="ca-pub-7144402668220123"
     data-ad-slot="9868384414"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

			<p>
				Marathi is an Indo-Aryan language spoken predominantly by around 83.1 million Marathi people of Maharashtra, India. It is the official language and co-official language in the Maharashtra and Goa states of Western India, respectively, and is one of the 22 scheduled languages of India

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