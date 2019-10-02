<?php

$usernmame = $_POST['username'];
$password = $_POST['password'];

if (empty($usernmame)){
    echo "ERROR";

}else {
    if($usernmame == "dev2802" && $password == "12345"){
        echo "Hello $usernmame";
    }else {
        echo"unauthorized";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>comment</title>
</head>
<body>
    <form action="comment.php" method="post">
        <input type="hidden" name="username" value="<?php echo $username; ?>">
        <label for="comment">Post a comment</label><br>
        <textarea name="comment" cols="30" rows="10"></textarea>
        <input type="submit" value="post">
    </form>
</body>
</html>