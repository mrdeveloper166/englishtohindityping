
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>HTML editor |Online Html Editor | css editor | online java script editor |Html Editor</title>

<meta name="keywords" content="online html editor, html code editor , html code tester, css code run online, java script run online,  WYSIWYG HTML Editor,edit your html code,online html editor,html editor online,html editor,text to html editor,html editor online free,html editor w3schools,html editor free.html editor best,html editor code,css editor,css editor online,html css editor,html & css,js editor,js editor online,code editor,code editor online,code editor in html,code editor html,code editor visual studio,code editor brackets,code runner,code runner online" />

<meta name="description" content="online html editor,  WYSIWYG HTML Editor, edit your html code online, online css code editor, java script code editor, code editor, html code software"/>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<meta name="viewport" content="width=device-width, initial-scale=1" />

<meta property="og:locale" content="en_US" />

<meta property="og:type" content="website" />

<meta property="fb:app_id" content="504015233411430" />

<meta property="og:title" content="HTML editor |Online Html Editor | css editor | online java script editor |Html Editor" />

<meta property="og:description" content="online html editor,  WYSIWYG HTML Editor, edit your html code online, online css code editor, java script code editor, code editor, html code software"/>


<meta property="og:url" content="http://www.englishtohindityping.com/html-editor.php" />

<meta property="og:site_name" content="english to hindi typing" />

<meta property="article:publisher" content="https://www.facebook.com/Englishtohindityping" />





 <link href="assets/css/bootstrap.min.css" rel="stylesheet">
 
       <link href="assets/style.css" rel="stylesheet">
       <link href="assets/footer.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"> </script>
    <link rel="icon" href="favicon.ico" type="image/gif">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129405892-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-129405892-1');
</script>




<style type="text/css">



.menu{ height:80px; background-color:#E4DADA;}
#browser{ width:55%; height:auto; float:right; border:1px solid black;}
#editor{ width:40%; height:450px; float:left; border:1px solid balck;}
.content{
height:450px; background-color:#fff;}
}
.menu input[type="button"] {margin-left:200px;width:120px; height:40px;
	
	
}
.main{
	
background-color:
height:500px;	
}
</style>

<script type="text/javascript">
function Mytry()
{
	
var code= document.getElementById("editor").value;
document.getElementById("browser").innerHTML =code;	
}

</script>

</head>

<body>

<?php
    include 'menu.php';
    
?>


<div class="main container">

<div class="menu"> 
<center> 
<p style="color:green; font-size:16px; font-weight:bold;">Write code on the left box after that click Run Button and you can see result on right side box. </p>
<input type="button" value="Run" onClick="Mytry()" style="width:100px; height:40px;"></center>
<p style="color:green; font-size:21px; font-weight:bold; margin-top:-25px; margin-left:10px;"> Write Code Here Or Paste Your Code </p>

</div>
<div class="content"> 
 
<div id="browser">

</div>

<textarea id="editor">
</textarea>


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
</html>
