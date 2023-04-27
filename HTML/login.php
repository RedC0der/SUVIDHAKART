
<?php
session_start();
include 'databasecon.php';
if (isset($_POST['submit2'])) {
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
	$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

    
    $emailquery = "select * from registerform where email='$email' ";
	$query = mysqli_query($con, $emailquery);

	$emailcount = mysqli_num_rows($query);
	if ($emailcount > 0) {
		echo "email already exist";
	} else {

if($password===$cpassword){
    $insertquery = "insert into registerform (fname,lname, email,password,cpassword) VALUES ('$fname','$lname','$email','$password','$cpassword')";
	$iquery = mysqli_query($con, $insertquery);
}
else{
    echo("password not matching");
}
}
}
include 'databasecon.php';
if (isset($_POST['submit1'])) {
	$email= $_POST['email'];
	$password = $_POST['password'];

	$email_search = " select * from registerform where email ='$email' and password='$password' ";
	$query = mysqli_query($con, $email_search);
	$email_count = mysqli_num_rows($query);

	if ($email_count) {
			
	header("location: index.php");
	} else {
		echo("Email or password incorrect");
	}
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login 2</title>
    
    <link rel="stylesheet" href="login.css">
   
</head>
<body>
    <div class="full-page">
        <div class="navbar">
            <div>
                <a href='dwork.html'>SUVIDHACART</a>
            </div>
            <nav>
                <ul id='MenuItems'>
            <li>
                <button class='loginbtn' onclick="document.getElementById('login-form')
                .style.display='block'" style="width:auto;">Login</button>
            </li>           
          </ul>
        </nav>
        </div>
        <div id='login-form'class='login-page'>
          <div class="form-box">
              <div class='button-box'>
                  <div id='btn'></div>
                  <button type='button'onclick='login()'class='toggle-btn'>Log In</button>
                  
                  <button type='button'onclick='register()'class='toggle-btn'>Register</button>
              </div>
        <form method="POST" id='login' class='input-group-login'>
       <input name="email" type='email' class='input-field'placeholder='Email Id' required>
      <input name="password" type='password'class='input-field'placeholder='Enter Password' required>
      <input type='checkbox'class='check-box'><span>Remember Password</span>
      <button name="submit1" class='submit-btn'>Log in</button>
   </form>
   <form method="POST" id='register' class='input-group-register'>
       <input name="fname" type='text'class='input-field'placeholder='First Name' required>
       <input name="lname" type='text'class='input-field'placeholder='Last Name ' required>
       <input name="email" type='email' class='input-field'placeholder='Email Id' required>
       <input name="password" type='password'class='input-field'placeholder='Enter Password' required>
       <input name="cpassword" type='password'class='input-field'placeholder='Confirm Password'  required>
       <input type='checkbox'class='check-box'><span>I agree to the terms and                                                   conditions</span>
                  <button name="submit2" class='submit-btn'>Register</button>
         </form>
          </div>
      </div>
  </div>
  <script>
      var x=document.getElementById('login');
  var y=document.getElementById('register');
  var z=document.getElementById('btn');
  function register()
  {
    x.style.left='-400px';
    y.style.left='50px';
    z.style.left='110px';
  }
  function login()
  {
    x.style.left='50px';
    y.style.left='450px';
    z.style.left='0px';
  }
</script>
<script>
      var modal = document.getElementById('login-form');
      window.onclick = function(event) 
      {
          if (event.target == modal) 
          {
              modal.style.display = "none";
          }
      }
  </script>
</body>
</html>



