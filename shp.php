<!DOCTYPE html>
<html>
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

form {
    border: 3px solid #f1f1f1;
    margin: 0 400px;
    width:40%;
   
    
}

input[type=text] {
    width: 100%;
    padding: 10px 6px;
    margin: 10px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 50px;
    margin:8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
}

button:hover {
    opacity: 1.5;
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
.cancelbtn {
    width: auto;
    padding:10px 18px;
    background-color: #f44;
}
.submitbtn{
   float:right;
    width:auto;
   
    padding:10px 18px; 
    
   
         
    background-color: blue;
}


.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}



.container {
    padding: 6px;
}



/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 700px) {
    
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>

    <h1 style="margin-left:110px; margin-top:20px; font-size:60px">
	<large>Online Card Designer</large>
    </h1>	
	<h2 style="font-size:40px;color:black;font-family:script;margin-left:420px">Design Your Dream Card</h2>
    
   
   <form  Method ="POST" Action="showlast" >
      <div class="container" style="background-color: #DAF7A6">
             <a href="index">Home</a>
             <a href="showcard">Cards</a>
             <a href="cat">Category</a>
             <a href="index">Log out</a>
     <h2>Fill up the Information</h2>
  </div>
  <div class="container" style="background:radial-gradient(#ac7dcb,white)">
    <label><b>Your Name</b></label>
    <input type="text"  name="uname" required>

    <label><b>Address</b></label>
    <input type="text" name="addr" required>
    
     <label><b>Phone no</b></label>
    <input type="text" placeholder="+880" name="phone" required>
    
    <label><b>No of cards</b></label>
    <input type="text" placeholder="+50" name="cards" required>
    
    
    
  </div>
        </div>
        <input style="margin-left:210px" type="radio" name="cash" value="Credit card">Credit card <br>
        <input style="margin-left:210px"  type="radio" name="cash" value="bKash">bKash<br>
        <input  style="margin-left:210px" type="radio" name="cash" value="Debit card">Debit Card <br>
        <input style="margin-left:210px " type="radio" name="cash" value="Cash">Cash <br>
        
   
  </div>

  <div class="container" style="background-color:#DAF7A6">
      <button type="button" class="cancelbtn" name="c2"style="background:radial-gradient(red,black);font-size:15px;font-weight:bold" >Cancel </button>
     <button type="Action" class="submitbtn" name="cnf"style="background:radial-gradient(blue,black);font-size:15px;font-weight:bold"  >Confirm</button>
   
 
</form>

</body>
</html>