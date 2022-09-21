<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">

</head>
<body>
    <?php  

$username = $_POST["username"]; 
$password = $_POST["password"];


$validateLogin = fopen("loginformation.txt", "a+") or die("Unable to open file!");

function checkExistingLogin($validationInformation, $username, $password){
    $loginStatus = false;
    foreach ($validationInformation as $savedUsername => $savedPassword){

        if($savedUsername == $username && $savedPassword == $password){
            $loginStatus = true;
        }

    }

    if($loginStatus == true){
        echo "<h1><Welcome back, $username/h1><br><h2>Login success</h2>";
    }

    else{
        echo "<h2>Incorrect password</h2>";
    }
}

checkExistingLogin($validateLogin, $username, $password);

?>

<a href="login.html">Back to site</a>

</body>
</html>
