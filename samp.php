<!DOCTYPE html>
<html>
<head>
<style>
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
	background-color: black;
	color:white;
	margin-left:440px;
	margin-top:50px;
	box-shadow:10px 10px 10px   black ;
	height:200px;
	border: 3px solid black;
}
img {
   
    padding: 10px;
    width: 400px;
	border: 10px solid    #661c36  ; 
	box-shadow: 10px 10px 10px   black ;
}

.container {
    padding: 6px;
}

.submitbtn{
   width: auto;
    padding:10px 18px;
    
    
   
         
    background-color : blue;
}

button {
    background:radial-gradient(#c11144,black);
    color: white;
    padding: 14px 50px;
    margin:8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
	font-size:15px;
	font-family:"arial";
	font-weight:bold;
}

large
{
	color: #730e2d ;
	font-family:"Comic Sans MS";
	font-weight:bold;
}

small{
	
	font-size:20px;
	font-family: "arial";
	color:white;
}

header{
	
	background:radial-gradient( #c11144,black  );
	color:white;
	height:80px;
	width:82%;
	text-align:center;
	margin-left:109px;
	margin-top:10px;
	
    
}

</style>
</head>
<body>
    <h1 style="margin-left:110px; margin-top:20px; font-size:60px">
	<large>Online Card Designer</large>
    </h1>	
	<h2 style="font-size:40px;color:black;font-family:script;margin-left:420px">Design Your Dream Card</h2>
    <header>
	<header>
<a href="index"><small>Home</small></a>
<a href="showcard"><small>Cards</small></a>
<a href="cat"><small>Category</small></a>
<a href="index"><small>Log out</small></a>
<h2>Business Cards</h2>





<div class="container" style="background:radial-gradient( #ac7dcb,white )">
    
    <form method="post" action="info">
    <img src="<?php echo $this->config->item('base_url'); ?>c1.jpg" />
    <button type="submit" class="submitbtn"name ="s1" >Order</button>
    </form>
    
    <form method="post" action="info">
  <img src="<?php echo $this->config->item('base_url'); ?>c2.jpg" />
    <button type="submit" class="submitbtn"name ="s2" >Order</button>
    </form>
     <form method="post" action="info">
    <img src="<?php echo $this->config->item('base_url'); ?>c3.jpg" />
     <button type="submit" class="submitbtn"name ="s3" >Order</button>
     </form>
      </div>
<div class="container" style="background:radial-gradient(#ac7dcb,white)">
    <form method ="post" action="info">
      <img src="<?php echo $this->config->item('base_url'); ?>c4.jpg" />
     <button type="submit" class="submitbtn"name ="s4" >Order</button>
     </form>
    <form method ="post" action="info">
      <img src="<?php echo $this->config->item('base_url'); ?>c5.jpg" />
     <button type="submit" class="submitbtn"name ="s5" >Order</button>
      </form>
    <form method ="post" action="info">
      <img src="<?php echo $this->config->item('base_url'); ?>c6.jpg" />
     <button type="submit" class="submitbtn"name ="s6" >Order</button>
     </form>
     
  </div>






</body>
</html>
