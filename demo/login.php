<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>

    <body>
        <div class="container">
            <div class="header">
                <h2>Login</h2>
            </div>
            <form action="login.php" method="post">
           <!--excluding error.php-->
                <div>
                    <label for="username">Username: </label>
                    <input type="text" name="username_log" required>

                </div>

                <div>
                    <label for="password_1">Password: </label>
                    <input type="password" name="password_log" required>
                     
                </div>
    
                <button type="submit" name="log_in">Log in</button>
           
            </form>
            <p>Not a user? <a href="registration.php"><b>Sign up</b></a></p>
        
        </div>

    </body>

</html>