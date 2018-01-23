<!DOCTYPE HTML>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<meta name="resource-type" content="document" />
<meta http-equiv="content-language" content="en-us" />
<meta name="author" content="Parth Kheni, Swapna Lekshmanan" />
<meta name="keywords" content="Text,Flip Text, Text Flipper,Flip, free, Online, text editor, Technology, Gadgets, Robot, Apple, Microsoft, Geek, Google, Internet, Facebook, Twitter, How to, Tips and tricks,WordPress, iPhone, iPad, Android, Windows, Windows Phone, Software, Hardware, Computer, Smartphone, Apps, Application " />
<meta property="og:type" content="website"/>
        <meta property="og:site_name" content="www.techmuzz.com"/>
        <meta property="og:image" content="https://pbs.twimg.com/profile_images/481151853774663680/S6_eQrhL.png"/>
        <meta property="og:title" content="¡ʇxǝʇ pǝddıןɟ s,ʇı ˙uǝʞoɹq ʇ,usı pɹɐoqʎǝʞ ʎɯ"/>
        <meta property="og:description" content="˙ǝsn oʇ ʎsɐǝ ʎɹǝʌ 'uʍop ǝpısdn pǝddıןɟ ǝɯoɔǝq ןןıʍ ǝʇıɹʍ noʎ buıɥʇʎuɐ ˙ʞooqǝɔɐɟ uı ǝsn oʇ uʍop ǝpısdn spɹoʍ ʎuɐ dıןɟ. Flip any words upside down to use in Facebook. Anything you write will become flipped upside down, very easy to use."/>

    
        	<meta name="viewport" content="width=device-width, initial-scale=1.0"><title> Flip Text | TechMuzz</title>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script type="text/javascript" src="./js/ZeroClipboard.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39693139-2', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript">//<![CDATA[ 
$(function(){

var clientTarget = new ZeroClipboard( $("#target-to-copy"), {
              moviePath: '//cdnjs.cloudflare.com/ajax/libs/zeroclipboard/1.3.2/ZeroClipboard.swf',
    forceHandCursor: true,
    debug: true
            } );

            clientTarget.on( "load", function(clientTarget)
            {
                $('#flash-loaded').fadeIn();

                clientTarget.on( "complete", function(clientTarget, args) {
                    clientTarget.setText( args.text );
                    $('#target-to-copy-text').fadeIn();
                } );
            } );

			
			
});//]]>  
 </script>

 <script>

 $(window).ready(function(){
  
			$("button").on('click',function() {
				option = $(this).val();
				if(option=="fliptext")		
				
				{
					var result=flipString($('#in').val());
					$('#out').val(result); }
			
				else if(option=="reset")
					{
					$('#in').val('');  $('#out').val('');
					}		
					
			});
			
			
function flipString(aString) {
	aString = aString.toLowerCase();
	var last = aString.length - 1;
	var result = "";
	for (var i = last; i >= 0; --i) {
		result += flipChar(aString.charAt(i))
	}
	return result;
}

function flipChar(c) {
	if (c == 'a') {
		return '\u0250'
	}
	else if (c == 'b') {
		return 'q'
	}
	else if (c == 'c') {
		return '\u0254'  
	}
	else if (c == 'd') {
		return 'p'
	}
	else if (c == 'e') {
		return '\u01DD'
	}
	else if (c == 'f') {
		return '\u025F' 
	}
	else if (c == 'g') {
		return 'b'
	}
	else if (c == 'h') {
		return '\u0265'
	}
	else if (c == 'i') {
		return '\u0131'//'\u0131\u0323' 
	}
	else if (c == 'j') {
		return '\u0638'
	}
	else if (c == 'k') {
		return '\u029E'
	}
	else if (c == 'l') {
		return '\u05DF'
	}
	else if (c == 'm') {
		return '\u026F'
	}
	else if (c == 'n') {
		return 'u'
	}
	else if (c == 'o') {
		return 'o'
	}
	else if (c == 'p') {
		return 'd'
	}
	else if (c == 'q') {
		return 'b'
	}
	else if (c == 'r') {
		return '\u0279'
	}
	else if (c == 's') {
		return 's'
	}
	else if (c == 't') {
		return '\u0287'
	}
	else if (c == 'u') {
		return 'n'
	}
	else if (c == 'v') {
		return '\u028C'
	}
	else if (c == 'w') {
		return '\u028D'
	}
	else if (c == 'x') {
		return 'x'
	}
	else if (c == 'y') {
		return '\u028E'
	}
	else if (c == 'z') {
		return 'z'
	}
	else if (c == '[') {
		return ']'
	}
	else if (c == ']') {
		return '['
	}
	else if (c == '(') {
		return ')'
	}
	else if (c == ')') {
		return '('
	}
	else if (c == '{') {
		return '}'
	}
	else if (c == '}') {
		return '{'
	}
	else if (c == '?') {
		return '\u00BF'  
	}
	else if (c == '\u00BF') {
		return '?'
	}
	else if (c == '!') {
		return '\u00A1'
	}
	else if (c == "\'") {
		return ','
	}
	else if (c == ',') {
		return "\'"
	}
	else if (c == '.') {
		return '\u02D9'
	}
	else if (c == '_') {
		return '\u203E'
	}
	else if (c == ';') {
		return '\u061B'
	}
	else if (c == '9') {
		return '6'
	}
	else if (c == '6') {
		return '9'
	}
	return c;
}
 
 });
 </script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
 <style>

.clear {
	font-size:16px;
	font-family:Arial;
	font-weight:normal;
	-moz-border-radius:8px;
	-webkit-border-radius:8px;
	border-radius:8px;
	border:1px solid #337fed;
	padding:9px 18px;
	text-decoration:none;
	background:-moz-linear-gradient( center top, #3d94f6 5%, #1e62d0 100% );
	background:-ms-linear-gradient( top, #3d94f6 5%, #1e62d0 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#3d94f6', endColorstr='#1e62d0');
	background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #3d94f6), color-stop(100%, #1e62d0) );
	background-color:#3d94f6;
	color:#ffffff;
	display:inline-block;
	text-shadow:1px 1px 0px #1570cd;
 	-webkit-box-shadow:inset 1px 1px 0px 0px #97c4fe;
 	-moz-box-shadow:inset 1px 1px 0px 0px #97c4fe;
 	box-shadow:inset 1px 1px 0px 0px #97c4fe;
}.clear:hover {
	background:-moz-linear-gradient( center top, #1e62d0 5%, #3d94f6 100% );
	background:-ms-linear-gradient( top, #1e62d0 5%, #3d94f6 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#1e62d0', endColorstr='#3d94f6');
	background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #1e62d0), color-stop(100%, #3d94f6) );
	background-color:#1e62d0;
}.clear:active {
	position:relative;
	top:1px;
}

.flip {
	font-size:40px;
	font-family:Arial;
	font-weight:normal;
	-moz-border-radius:8px;
	-webkit-border-radius:8px;
	border-radius:8px;
	border:1px solid #268a16;
	padding:7px 100px;
	text-decoration:none;
	background:-moz-linear-gradient( center top, #4d940f 5%, #5cb811 100% );
	background:-ms-linear-gradient( top, #4d940f 5%, #5cb811 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#4d940f', endColorstr='#5cb811');
	background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #4d940f), color-stop(100%, #5cb811) );
	background-color:#4d940f;
	color:#ffffff;
	display:inline-block;
	text-shadow:1px 1px 0px #346b01;
 	-webkit-box-shadow:inset 1px 1px 0px 0px #6cb030;
 	-moz-box-shadow:inset 1px 1px 0px 0px #6cb030;
 	box-shadow:inset 1px 1px 0px 0px #6cb030;
}.flip:hover {
	background:-moz-linear-gradient( center top, #5cb811 5%, #4d940f 100% );
	background:-ms-linear-gradient( top, #5cb811 5%, #4d940f 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#5cb811', endColorstr='#4d940f');
	background:-webkit-gradient( linear, left top, left bottom, color-stop(5%, #5cb811), color-stop(100%, #4d940f) );
	background-color:#5cb811;
}.flip:active {
	position:relative;
	top:1px;
}


input[type=text]{
	  color:#999;
      padding:6px;font-size:18px; 
      border:2px solid #ccc;
      background: white;
      padding: 5px;
      width:280px;
      margin-bottom: 10px;
      border-radius: 10px;
      -webkit-transition: 0.2s ease-in-out all;
      -moz-transition: 0.2s ease-in-out all;
      -ms-transition: 0.2s ease-in-out all;
      -o-transition: 0.2s ease-in-out all;
      transition: 0.2s ease-in-out all;
	}
      
    input[type=text]:focus{
        border-color:green;
        -moz-box-shadow: 6px 6px 12px #999;
        -webkit-box-shadow: 6px 6px 12px #999;
        box-shadow: 6px 6px 12px #999;
    }


 </style>		
		
	</head>
	<body class="loading">
	
		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">

				<!-- Header -->
					<header id="header">
						<h1>Text Flipper</h1>
						
						<h1>
						<center>
<!--<p id="flash-loaded" style="display:none">Flash player is loaded.</p>-->
       
 <input type="text" id="in" class="in" value="Copy Your Text Here" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" style="width:40%;height: 50px;border-radius:10px;padding:5px;font-size:40px;text-align:center;margin-right:2px;"/><button value="reset" style="font-size:34px;" class="clear">Clear</button>
 </br>
 <button value="fliptext" class="flip">Flip Text</button>
  </br>
   <input type="text" id="out" class="out" style="width:40%;height: 50px;border-radius:10px;padding:5px;font-size:40px;text-align:center;"/><button style="font-size:34px;"  id="target-to-copy" data-clipboard-target="out" class="clear">Copy</button></h1>
   <br/>
 <div id="target-to-copy-text" style="display:none">Text Copied!!</div> 


 <nav>
							<ul>
								<li><a href="https://twitter.com/techmuzz" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="https://www.facebook.com/techmuzz" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="mailto:info@techmuzz.com?Subject=Your%20subject" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
							</ul>
						</nav>
						 
 </center>

				
	
					</header>

				<!-- Footer -->
					<footer id="footer">
						<span class="copyright">&copy; TechMuzz &nbsp;&bull;&nbsp; Powered By <a href="http://www.techmuzz.com" >TechMuzz</a>&nbsp;&bull;&nbsp; Design: <a href="http://html5up.net" rel="nofollow">HTML5 UP</a>.</span>
					</footer>
				
			</div>
		</div>
	</body>
</html>