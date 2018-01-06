<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
<meta name="keywords" content="Dressmode, lebanon, dress, lebanon cloth, clothing, brands,fashion, lebanese, joseph, tossy,tossi, best, designers, model, suits, shoes, high, low, stores, retail, cloth,contact, best, contact us, dressmode telephone" />
<meta name="description" content="contact us" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact Us</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<style type="text/css"  rel="stylesheet" media="screen">
* {
	margin: 0 ;
	border: 0 ;
	padding: 0 ;
	}
	  body {
		background:url(images/img02.jpg);
		background-size: 100% 710px;
		font: 16px/20px Calibri, San-Serif;
		color: #040520 ;
		margin: 0;
		padding-top:100px;
			}
			/*--------------FORM----------*/
			h2 {
				margin-top: 20px;
				padding-top: 25px;
				font-weight:80px;
				font-family: calibri;
				color: #navy;
			}
			form{
				padding-top: 4%;
				padding-left: 3%;
				font-size: 2vw;
				background: #07031C;
				width: 50%;
				height: 500px;
				border-radius: 12px;
				margin: auto;
				opacity:0.9;
	}	
	
input	{
		width: 87%;
		height: 40px;
		margin-top: 2%;
		padding-left: 2%;
		font-family: calibri ;
		font-size: 2vw;
		color: black;
		background: rgba(0.6,0.25,0.8,0.5);
		border-radius: 5px;
		border: 1px solid black;
		display: block;
		}	
		
	input#mybtn	{
		margin: 0 auto;
		padding-right: 2%;
		padding-left: 2%;
		width: 25%;
		background: rgba(0,0.2,0,0.6);
		font-size: 2vw ;
	}
	
	textarea {
		margin: 0 auto;
		padding-right: 5%;
		padding-left: 5%;
		width: 80%;
		background: rgba(0,0.2,0,0.6);
		font-size: 1vw ;	
		border-radius: 6px;
	}
			
			
			
			
			
			
			
			
			
			
			/*--------------*MENU------------*/
			
			a {
			color:#FFF;
			text-decoration: none;
			font-weight: bold;
				}
			a:hover {
			color: black;
			text-decoration: underline;
				}
	header {
	  background-color: #950202;
	  width: 100%;
	  height: 90px;
	  position: fixed;
	  opacity: 0.9;
	  border-radius: 6px;
	  top: 0;
	  left: 0;
	  z-index: 100;
			}	
#logo {
  margin: 10px;
  float: left;
  width: 300px;
  height: 85px;
  background: url(images/dressmode.jpg) no-repeat center;
}	
nav {
	float: right;
	padding: 10px 15px 15px 0 ;
}
#menu-icon {
	display: hidden;
	width: 40px;
	height: 40px;
	background: url(images/icon01.png) center;
}
a:hover#menu-icon {
	border-radius: 5px 6px 0 0;
}
ul {
list-style: none;
}
nav ul li {
display: inline-block;
float: left;
padding: 12px;
}
.current {
 color: #FFF;
 text-decoration: none;
}

/*---media query----*/
@media screen and (max-width: 320px) {
body {
position:absolute;
		}
		form {
		width: 100%;
		}
		input {
			font-size: 25px;
		}
		input #mybtn{
			font-size: 8vw;
		}
}
@media screen and (max-width: 730px) {
#menu-icon {
	position:top;
	display: inline-block;
	float: right;
	margin:0;
	}
	nav ul, nav:active ul {
	display: none;
	position: absolute;
	padding: 20px;
	background: #405580;
	border: 1px solid #FFF;
	right: 20px;
	top: 60px;
	width: 50%;
	border-radius: 2px 0 2px;
	}
	nav li {
	text-align: center;
	width: 100%;
	padding: 10px 0;
	margin: 0;
	}
	nav:hover ul {
	display: block;
	}
	form {
		width: 100%;
		overflow: none;
		}
				input {
			font-size: 25px;
		}
		textarea {
			font-size: 20px;
		}
		input #mybtn {
			font-size: 20px;
		}
}
</style>
<script>
function_(id) {	 return document.getElementByID(id);}
function submitForm() {
	_("mybtn").disabled = true;
	_("status").innerHTML = "Please Wait";
	var formdata = new FormData();
	formdata.append("n, _("n").value);
	formdata.append("e, _("e").value);
	formdata.append("m, _("m").value);
var ajax = new XMLHttPRequest();
ajax.open("POST", "form_process.php");
ajax.onreadystatechange = function() {
	if (ajax.readyState == 4 && ajax.status == 200) {
	if(ajax.responseText == "success") {
		_("my_form").innerHTML = '<h2>Thank you'+_("n").value+', your message has been sent.</h2>;
	} else {
		_("status").innerHTML = ajax.responseText;
		_("mybtn").disabled = false;
	}
		}
}
ajax.send ( formdata )	;
	
}


</script>
</head>
<body>
<header>
		<a href="#" id="logo"></a>
		<nav>
		<a href="#" id="menu-icon"></a>
		<ul>
		<li><a href="index.html" class="current">Home</a></li>
		<li><a href="brands.html">Brands</a></li>
		<li><a href="events.html">Up-coming events</a></li>
		<li><a href="contact.php">Contact us</a></li>
		</ul>
		</nav>
		</header>
<form id="my_form" onsubmit="submitForm(); return false;">
<h2></h2>
<p><input id="n" placeholder="Name" required></p>
<input id="e" placeholder="E-mail" type="email" required></p><br><br>
<p><textarea id="m" placeholder="Message Us" rows="10" required></textarea></p><br>
<p><input id="mybtn" type="submit" value="Send">
<span id="status"></span></p>
</form>

</body>
</html>