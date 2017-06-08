<!Doctype html>
<html lang="en">
<head>
 <title> Online Card Maker</title>
     <link type="text/css" href="style1.css" rel="stylesheet"/>
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
	font-size:30px;
	max-width:400px;
	margin:15px 15px 15px 15px;
	padding:15px 15px 15px 15px;
	background:radial-gradient(#e99ce1,black);
	color:white;
	margin-left:440px;
	margin-top:50px;
	box-shadow:10px 10px 10px   black ;
	height:200px;
}
.gallery{
	
	text-align:center;
	display:inline-block;
	
}
.gallery img{
	
	
    width:20%;
	margin-top:90px;
	border: 10px solid   #392336; 
	box-shadow: 10px 10px 10px   black ;
	padding:5px;
	
}
img {
    border: 3px solid #f1f1f1;
    border-radius: none;
    padding: 10px;
    width: 400px;
}

bis{
	color:white;
	font-size:200%;
	margin-top:20px;
	font-weight:bold;
	margin-left:270px;
	
}

wed
{
	color:white;
	font-size:200%;
	margin-top:20px;
	font-weight:bold;
	margin-left:110px;
	
	
}

others
{
	color:white;
	font-size:200%;
	margin-top:20px;
	font-weight:bold;
	margin-left:100px;
	
	
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
	font-weight:bold;
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
/*
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
*/
/* 
    Created on : Jun 7, 2017, 12:27:40 PM
    Author     : Soumita
*/


   </style>
   <body>
    <h1 style="margin-left:110px; margin-top:20px; font-size:60px">
	<large>Online Card Designer</large>
    </h1>	
	<h2 style="font-size:40px;color:black;font-family:script;margin-left:420px">Design Your Dream Card</h2>
    <header>
	<a href="index.php/welcome"><tagH> Home </tagH> </a>
	<a href="about.html"><tagA>About</tagA></a>
	<a href="index.php/welcome/login"><tagL><span style="background:radial-gradient( #65fbbb, black )"> Login</span> </tagL></a>
	<a href="index.php/welcome"><tagS> Register </tagL></a>
	</header>
	<div class="form">   
	<form action="cat">
	<label>Email </label>
	<br>
	<input type="email" name="email">
	<br>
	<label>Password</label>
	<br>
	<input type="password" name="password">
	<br>
	<input type="submit" value="Login" >
	<form>
	</div>
    </body>


</html>