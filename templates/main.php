<!DOCTYPE html>
<html>
<head>

<title>Geekofia Web Proxy</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Josefin+Sans|Nunito');
@import url(http://fonts.googleapis.com/css?family=Lato:300,400,700);
html body {
	padding: 46px;
	font-family: 'Lato', Arial, sans-serif;
	background : #ededed;
}
h1{
	color: #000;
}
/* 
#container {
	width: 500px;
	margin:0 auto;
	margin-top:150px;
}

#error {
	color:red;
	font-weight:bold;
}
fieldset, .url-form {
    margin: 0;
    padding: 0;
    display: table;
    width: 100%
}
input, select, textarea {
    font: 100% Raleway, Arial, Helvetica, sans-serif;
    color: #444;
    vertical-align: middle
}

#frm {
	padding:10px 15px;
	margin: 0;
    padding: 0;
    display: table;
	width: 100%;
	overflow: hidden;
	background-color:#FFC8C8;
	
	border:1px solid #818181;
	
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
}

#footer {
	text-align:center;
	font-size:10px;
	margin-top:35px;
	clear:both;
}
*/
#error{
	background: #f00;
	color: #ededed;
	padding: 5px;
	font-size: 14px;
	display: inline-block;
	margin-bottom: 4px;
	border-radius: 5px;
}
.alert-box {
	background-color: transparent;/*#fffbcc*/
	color: #777;
	font-size: 13x;
	line-height: 23px;
	padding-bottom: 30px;
	text-align: center;
	font-family: 'Lato', Arial, sans-serif;
	border-radius: 3px;
}
.alert-box .badge {
	background-color: #f58f2a;
	border-radius: 3px;
	color: #fff;
	margin-left: 4px;
	margin-right: 4px;
	padding: 3px;
	font-weight:bold;
	border: none;
	/*text-transform: uppercase;*/
}
.badge-ext {
	background-color: #f00;
	border-radius: 3px;
	color: #fff;
	margin-left: 4px;
	margin-right: 4px;
	padding: 3px;
	font-weight:bold;
	/*text-transform: uppercase;*/
}
@-webkit-keyframes blinker {
  0% {
    opacity: 1.0;
  }
  50% {
    opacity: 0.0;
  }
  100% {
    opacity: 1.0;
  }
}
@-moz-keyframes blinker {
  0% {
    opacity: 1.0;
  }
  50% {
    opacity: 0.0;
  }
  100% {
    opacity: 1.0;
  }
}
.blink {
  -webkit-animation: blinker 1s 5;
  -moz-animation: blinker 1s 5;
  animation: blinker 5s infinite;
}
</style>
<style type="text/css">
<?php include 'url-form.css'; ?>
</style>

</head>

<body>

<div id="container">

	<div style="text-align:center;">
		<h1 onclick="window.location.href='index.php'">Geekofia Web Proxy</h1>
	<div class="blink alert-box" style="text-align:center;">
		<span class="alert-box badge">Server Location</span> <span class="badge-ext">New Delhi (NCR)</span>
	</div>
	
	<?php if(isset($error_msg)){ ?>
	
	<div id="error">
		<p><?php echo "Error > $error_msg" ?></p>
	</div>
	
	<?php } ?>
	
		<script type="text/javascript">
			document.getElementsByName("url")[0].focus();
		</script>
</div>


	<form action="index.php" method="post" class="url-form">
			<div class="row"><input placeholder="Enter Url" type="text" autocomplete=off name="url" value="">
			<button type="submit">Go</button></div>
	</form>
		
<div id="footer">
	Created & Hosted by &copy; <a href="https://geekofia.wordpress.com" target="_blank">GEEKOFIA</a> <?php echo $version; ?>
</div>



</body>
</html>