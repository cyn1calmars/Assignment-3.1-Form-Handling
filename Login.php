<!DOCTYPE html>
<html lang="EN">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Login.css">
<script src="Login.js"></script>
<link rel="icon" type="image/x-icon" href="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/f990495a-dc4a-477c-b015-93d6b197cee8/d7n7ni5-fcc1bcc0-95b7-4f8e-b5e0-293911be5c63.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Y5OTA0OTVhLWRjNGEtNDc3Yy1iMDE1LTkzZDZiMTk3Y2VlOFwvZDduN25pNS1mY2MxYmNjMC05NWI3LTRmOGUtYjVlMC0yOTM5MTFiZTVjNjMucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.1UOD7LRBOATxegj8IHeikF8uuqcDxm7QElvPcLyVdw0">
<title>Login Page</title>
  </head>
  <body>
        
    <!--Back Button image hyperlink back to home page-->
    <div class="Backbutton">
        <a href="Index.php">
          <img  src="https://pngmaterial.com/dvsxyz02/uploads/curvy-arrow-png.png" width = "60px" height="60px">
        </a>
      </div>

  <form name="appForm" action="LoginForm" onsubmit="return validateForm();" method="post">

  <div class="login_form">
    <h1>Employee Login Page</h1>

    <label for="user_error"><b>Username</b></label>
    <input type="userid" placeholder="Enter Username" name="user">
    <div class="error" id="user_error"></div>

    <label for="pass_error"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw">
    <div class="error" id="pass_error"></div>

    <input type="submit" value="Login">
    <br>
    <div id="user_result"></div>
    <div id="pass_result"></div>
  </div>

</form>

  </body>
</html>