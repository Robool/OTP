<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="login-box">
    <form method="post" action="login.php">
    <h2>LOGIN</h2>
        <div class="user-box">
            <input type="text" name="login"  required> <br>
            <label>Username</label>
        </div>

        <div class="user-box">
            <input type="password" name="password"  require><br>
             <label>Password</label>
        </div>
        
        <input type="submit" name="submit" value="Logar" id="submit" style="background:none;border-color:white;font-size:20px;color:white;margin: 0 200px 0px;">
       
    </form>
</div>
</body>


</html>