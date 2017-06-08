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



    
form {
    border: 5px solid #f1f1f1;
    margin: 0 400px;
    width:40%;
    margin-top:50px;
    
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


   
   
   <form  Method ="POST" Action="mList" >
      <div class="container" style="background-color: #DAF7A6 ">
           <a href="cat">Home</a>
           <a href="showcard">Cards</a>
           <a href="cat">Category</a>
           <a href="index">Log out</a>
     <h2>Fill up the Information</h2>
  </div>
      
  <div class="container" style="background:radial-gradient(#ac7dcb,white)">
    <label><b style="font-size:20px">Your Name</b></label>
    <input type="text"  name="uname" required>

    <label><b style="font-size:20px">Company Name</b></label>
    <input type="text" name="com" required>
    <label><b style="font-size:20px">Designation</b></label>
    <input type="text" name="des" required>
     <label><b style="font-size:20px">Resident</b></label>
    <input type="text"  name="res" >
    <label><b style="font-size:20px">Company Address</b></label>
    <input type="text" name="add" required> 
     <label><b style="font-size:20px">Phone no</b></label>
    <input type="text" placeholder="+880" name="phone" required>
    
    
  </div>

  <div class="container" style="background-color:  #b4d784 ">
     <button type="button" class="cancelbtn" name="c" style="background:radial-gradient(red,black);font-size:15px;font-weight:bold" >Cancel </button>
     <button type="Action" class="submitbtn" name="s" style="background:radial-gradient(blue,black);font-size:15px;font-weight:bold">Submit</button>
   
  </div>
</form>

</body>
</html>

