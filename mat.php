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


small1{
	
	font-size:20px;
	font-family: "arial";
	color:white;
	margin-left:460px;
}
small2{
    font-size:20px;
	font-family: "arial";
	color:white;
	margin-left:40px;
	
}
small3
{
	font-size:20px;
	font-family: "arial";
	color:white;
	margin-left:40px;
}
small4
{ 
    font-size:20px;
	font-family: "arial";
	color:white;
	margin-left:40px;
	
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
    <h1 style="margin-left:110px; margin-top:20px; font-size:60px">
	<large>Online Card Designer</large>
    </h1>	
	<h2 style="font-size:40px;color:black;font-family:script;margin-left:420px">Design Your Dream Card</h2>
<table>
    <div class="container" style="background:radial-gradient(#c11144,black)">
        <a href="index"><small1>Home</small1></a>
        <a href="showcard"><small2>Cards</small2></a>
        <a href="info"><small3>Back</small3></a>
        <a href="index"><small4>Log out</small4></a>
     <h2 style="color:white; margin-left:510px; font-family:arial">Material and Price List</h2>
  </div>
  <tr>
    <th>Material</th>
    <th>Quantity</th>
    <th>Price</th>
  </tr>
  <tr>
      <td "
         rowspan="3">Glossy or Solid Paper Board
         <div class="container" style="background-color:#f1f1f1">
             <form method="post"action="shpinfo">
              <button type="Action" class="select" name="ms1 " >Select</button>
              </form>
     
    
   
  </div>
     
     </td>
    <td>500 pcs</td>
    <td>4450 pcs</td>
  </tr>
  <tr>
      
    <td>1000 pcs</td>
    <td>4950 BDT</td>
  </tr>
  <tr>
    
    <td>per pcs</td>
    <td>20 BDT</td>
  </tr>
  <tr>
    <td
         rowspan="3">Silky Matte Paper Board
         <div class="container" style="background-color:#f1f1f1">
             <form method="post"action="shpinfo">
     <button type="Action" class="select" name="ms2" >Select</button>
             </form>
   
  </div>
    </td>
    <td>500 pcs</td>
    <td>5500 BDT</td>
  </tr>
  <tr>
      
    <td>1000 pcs</td>
    <td>6500 BDT</td>
  </tr>
  <tr>
   
    <td>per pcs</td>
    <td>25 BDT</td>
  </tr>
   <tr>
    <td
        rowspan = "3">Special and Elite Paper
        <div class="container" style="background-color:#f1f1f1">
            <form method="post"action="shpinfo">
     <button type="Action" class="select" name="ms3" >Select</button>
            </form>
  </div>
    </td>
    <td>500 pcs</td>
    <td>7500 BDT</td>
  </tr>
  
  <tr>
     
    <td>1000 pcs</td>
    <td>8500 BDT</td>
  </tr>
  
  <tr>
    
    <td>per pcs</td>
    <td>30 BDT</td>
  </tr>
  
  
  
</table>
    <div style="text-align:center">
     <img src="img/img33.jpg" align="middle"></img></div>

</body>
</html>
