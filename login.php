<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <marquee><?php if(isset($_GET['success'])){echo $_GET['success'];} ?></marquee>
    <h1>Login Below</h1>
    <!-- <fieldset>
        <form action="login.php" method="post" enctype="application/x-www-form-urlencoded">
            <div>
                <label for="username">Enter your username</label>
                <input type="username" name="username" id="email" placeholder="Enter your username">
            </div>
            <div>
            <label for="password">Choose a Strong Password</label><br>
             <input type="password" name="password" id="password" placeholder="Form a tight lock">
        </div>
        <button name="loginBtn">Login</button>
        </form>
    </fieldset> -->
</body>
</html>