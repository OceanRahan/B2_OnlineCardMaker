<!Doctype html>
<html lang="en">
  <head>
     <title> Online Card Maker</title>
     <link type="text/css" href="style.css" rel="stylesheet"/>
   </head>
   <style>
   *,html
{
	margin:0;
	padding:0;
	
}
body
{
margin:0;
padding:0;
background-image: url(<?php echo $this->config->item('base_url'); ?>/img/nice.png);

margin-left:auto;
margin-right:auto;


}




.form{
	font-size:15px;
	max-width:350px;
	margin:10px 10px 10px 10px;
	padding:10px 10px 10px 10px;
	background-color:  #3b8972;
	color:white;
}

img{
	
	border: 10px solid  white ;
	box-shadow: 10px 10px 10px   black ;
    width:80%;
	margin-top:30px;
	opacity:0.9;
	
	
}
small{
	
	font-size:18px;
	text-align:right;
	font-family: "script";
}

medium{
	font-size:25px;
	text-align:right;
	font-family:"arial";
}
large
{
	color: #730e2d ;
	font-family:"Comic Sans MS";
	font-weight:bold;;
}
 a{
		    text-decoration:none;
			color: white;
		 
		 }
		 
a:hovar{
		     background-color:blue;
			 color: yellow;
			 font-family:"elephant";
		 
		 }
header{
	
	background:radial-gradient( #c11144,black  );
	color:white;
	
	height:60px;
	width:82%;
	text-align:center;
	margin-left:109px;
	margin-top:10px;
	
    
}
tagH{
	color:white;
	font-size:220%;
	margin-left:20px;
	font-family:Comic Sans MS;
	font-weight:500px;
	margin-top:30px;
}

tagA{
	color:white;
	font-size:220%;
	margin-left:150px;
	font-family:Comic Sans MS;
	font-weight:500px;
	
}
tagL{
	color:white;
	font-size:220%;
	margin-left:160px;
	font-family:Comic Sans MS;
	font-weight:500px;
	
	
}
tagS{
	color:white;
	font-size:220%;
	margin-left:170px;
	font-family:Comic Sans MS;
	font-weight:500px;
	
	
}


</style>
   <body>
    <h1 style="margin-left:110px; margin-top:20px; font-size:60px">
	<large>Online Card Designer</large>
    </h1>	
	<h2 style="font-size:40px;color:black;font-family:script;margin-left:420px">Design Your Dream Card</h2>
    <header>

	<a href="index.php/welcome"><tagH><span style="background:radial-gradient(#65fbbb,black)"> Home </span></tagH> </a>
	<a href="about.html"><tagA>About</tagA></a>
	<a href="index.php/welcome/login"><tagL> Login </tagL></a>
	<a href="index.php/welcome/"><tagS> Register </tagL></a>
	</header>
    <div style="text-align: center">
    <img src="<?php echo $this->config->item('base_url'); ?>/img/img33.jpg" /></div>
	 
	
    </body>
</html>