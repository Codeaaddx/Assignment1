
<!-- //Question 6 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question6</title>
</head>
<body>

<?php
 if(isset($_POST['email'])){
     $email = $_POST['email'];
     if(filter_var($email, FILTER_VALIDATE_EMAIL) == true){
         echo "You are welcome!";
     } else {
         echo "Invalid Email!";
     }
 }
?>
    
    <form action="" method ="post">
    <input name ="email" type="text" placeholder="Enter your email">
    <input type="submit">

    </form>

</body>
</html>

