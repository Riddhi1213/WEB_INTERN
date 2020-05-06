<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
/* body{  font-family: Calibri, Helvetica, sans-serif;    background-color: pink;  }  
.container {  
    padding: 50px;  
  background-color: lightblue;  
} */
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}
 
.container {
  padding: 16px;
  background-color: white;
}
  
input[type=text],input[type=email],input[type=file], input[type=number],input[type=password], 
textarea {    
  padding: 10px;  
  margin: 5px 0 22px 0; 
  width: 60%; 
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus
 {  
  background-color: orange;  
  outline: none;  
}  
 div { 
      width: 500px;
      height: 1200px; 
      padding: 10px 0;  
      margin-top: 100px;
      margin-left: 500px;
      border: 2px solid black;
      box-sizing: border-box;
     }  
hr 
{  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn 
{  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover 
{  
  opacity: 1;  
}  
</style>  
</head>  
<body>  
<form action="CONNECTION/IR_STU.php" method="POST">  
  <div class="container">  
  <center>  <h1> Student Registration Form</h1> </center>  
  <hr>  
    <label> ID : </label>   
    <input type="text" name="id" placeholder= "id" size="15" required />  <br>
    <label> Name : </label>   
    <input type="text" name="name" placeholder= "Name" size="15" required /><br>
  <!--<div>-->  
     <label> Gender :  </label>
     <input type="radio" value="Male" name="gender" checked > Male   
     <input type="radio" value="Female" name="gender"> Female   
     <input type="radio" value="Other" name="gender"> Other  
  <!--</div>--><br><br><br>
    <label> Current Address :  </label><br>
    <textarea cols="80" rows="5" placeholder="Current Address" value="address"name = "address" required></textarea><br>  
    <label> Phone :  </label>  
    <input type="number" name="phone"  required><br>
    <label> CGPA : </label>   
    <input type="number" name="cgpa" placeholder= "OUT OF 10" size="3" required /> <br>
    <label> No of Backlogs : </label>   
    <input type="number" name="Bgs" size="4" required /> <br>
  <!--<div>-->  
     <label> Technical skills : </label>   
      <select name="skills">  
        <option value="Language" >Language</option>  
        <option value="HTML" >HTML</option>  
        <option value="CSS" >CSS</option>  
        <option value="JAVASCRIPT">JAVASCRIPT</option>  
        <option value="PHP" >PHP</option>  
        <option value="ANGULAR Js" >ANGULAR JS</option>  
        <option value="Android app devlopment" >Android app devlopment</option>  
      </select><br><br><br>  
  <!--</div>-->   
  <!--<div>-->   
    <label> Certifications : </label><br>  
    <input type="file" value="certi" name="certi" size="60">    
  <!--</div>-->  
  <!--UPLOAD RESUME-->
  <!--<div>--><br>    
    <label> Resume : </label><br>  
    <input type="file" value="cv" size="60"><br>    
  <!--</div>-->    
    <label><b>Email</b></label>  
    <input type="Email" placeholder="Enter Email" name="email" required><br>
    <label for="psw"><b>Password</b></label>  
    <input type="password" placeholder="Enter Password" name="psw" required>  <br>
    <label for="psw-repeat"><b>Re-type Password</b></label>  
    <input type="password" placeholder="Retype Password" name="psw-r" required>  <br>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn" name="SubmitBtn">Register</button>
</form>  
</body>  
</html>  