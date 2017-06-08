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

.abc{
	margin-left:auto;
	margin-right:auto;
	min-width:90%;
	background-image:url(<?php echo $this->config->item('base_url'); ?>/img/img6.jpg);
	box-shadow:8px 8px 8px #900C3F;
	color:   #2f9773  ;
	font-family:"Lucida Console";
	font-size:25px;
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

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}

button {
    background-color: #4CAF50;
    color : white;
    padding: 14px 50px;
    margin: 1px 0;
    border: none;
    cursor: pointer;
    width: 50%;
}





.select{
    width: auto;
    padding:10px 18px;
    background-color: blueviolet;
}

.container {
    padding: 6px;
}



</style>
</head>
<body>


     <?php foreach($posts as $post){?>
     <tr>
         <td><?php $a= $post->SName;?></td>
     
      </tr>    
     <?php }?>  
  






    <h1 style="margin-left:110px; margin-top:20px; font-size:60px">
	<large>Online Card Designer</large>
    </h1>	
	<h2 style="font-size:40px;color:black;font-family:script;margin-left:420px">Design Your Dream Card</h2>

    <div class="container" style="background-color:#f1f1f1">
        <a href="index">Home</a>
        <a href="showcard">Cards</a>
        <a href="info">Back</a>
        <a href="index">Log out</a>
     <h2></h2>
  </div>
  	<div style="font-size:30px;color: #0011bb;margin-left:590px;font-family:Avant Garde;font-size:30px">Congrats!</div>
  	<div style="font-size:30px;color: #0011bb;margin-left:630px;font-family:Avant Garde;font-size:30px"><?php echo $a;?></div>
  	<div style="font-size:30px;color: #0011bb;margin-left:500px;font-family:Avant Garde;font-size:30px">Your Order is Confirmed</div>
   
  
  
      
        
         
     
   
   
 

</body>
</html>
