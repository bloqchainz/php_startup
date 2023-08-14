<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration</title>
</head>
<body>
    <h1>Register Below</h1>
    <fieldset>
        <legend>Fill the form below to sign up</legend>
        <form action="res/main.php" method="post" enctype="application/x-www-form-urlencoded">
    <div>
        <label for="fullname">Enter your fullname</label>
        <input type="text" id="fullname" name="fullname" placeholder="Enter your fullname">
    </div>
    <div>
        <label for="username">Enter your username</label><br>
        <input type="username" name="username" id="email" placeholder="Enter your username">
    </div>
    <div>
        <label for="country">Select your Country</label>
        <select name="country" id="country">
            <option value="Nigeria">Nigeria</option>
            <option value="Algeria">Algeria</option>
            <option value="Uganda">Uganda</option>
            <option value="Ghana">Ghana</option>
        </select>
    </div>
    <div>
     <h4>Gender</h4>
        <input type="checkbox" value="Male" name="sex" id="male">
        <input type="checkbox" value="Female" name="sex" id="female">
    </div>
    <div>
        <label for="email">Enter your email</label><br>
        <input type="email" name="email" id="email" placeholder="Enter your email">
    </div>
        <div>
            <label for="password">Choose a Strong Password</label><br>
             <input type="password" name="password" id="password" placeholder="Form a tight lock">
        </div>
             <button name="registerBtn">Submit Form</button>
        </form>
    </fieldset>
    
</body>
</html>