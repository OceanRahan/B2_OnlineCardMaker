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
 <form method="post"action="showcon">

     <?php foreach($posts as $post){?>
     <tr>
         <td><?php $a= $post->materialprice;?></td>
     
      </tr>    
     <?php }?>  
  


     <?php foreach($costs as $cost){?>
     <tr>
         <td><?php $b= $cost->CardNo;?></td>
     
      </tr>    
     <?php }?>  
 

<?php $c=$a*$b;?>





    <h1 style="margin-left:110px; margin-top:20px; font-size:60px">
	<large>Online Card Designer</large>
    </h1>	
	<h2 style="font-size:40px;color:black;font-family:script;margin-left:420px">Design Your Dream Card</h2>
<table>
    <div class="container" style="background-color:#f1f1f1">
        <a href="cat">Home</a>
        <a href="showcard">Cards</a>
        <a href="info">Back</a>
        <a href="index">Log out</a>
     <h2></h2>
  </div>
  <tr>
    <th>--</th>
    <th>Amount(BDT)</th>
    
  </tr>
  <tr>
      
        
         
     
    <td>No of cards you Ordered</td>
    <td><?php echo $b;?></td>
  </tr>
  <tr>
      
    <td>Price per piece</td>
     <td><?php echo $a;?></td>
  </tr>
  <tr>
    
    <td>Total</td>
    <td><?php echo $c;?></td>
  </tr>
  
</table>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" class="select" name="fc1" >Cancel </button>
     <button type="Action" class="select" name="fc2" >Confirm</button>
    </div>
   
 
</form>
</body>

</html>
