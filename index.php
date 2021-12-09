<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebChallenge53</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
  
  <form method="POST" style="background-image:url(<?php echo getRandomImage() ?>)" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            
            <label for="username">User name:</label>
            <input type="text" name="username" >
            <br>
            <label for="password">Password:</label>
            <input type="text" name="password" required>
            <br>
            <input type="submit" value="Login">
    </form>
<?php

function login($username, $password){
  $usernameDB= "dragana";
  $passwordDB= "2204998";
  if($username == $usernameDB && $password== $passwordDB){
      return "Korisnik je ulogovan!";
  }else{
      return "Korisnik nije ulogovan!";
  }
}

echo login($_POST["username"], $_POST["password"]);
function getRandomImage(){
  $images=array("/draganadavidovic/5/images/image1.jpg", "/draganadavidovic/5/images/image2.jpg", "/draganadavidovic/5/images/image3.jpg");
  $key=array_rand($images);
  return $images[$key];
}

?>

</body>
</html>


