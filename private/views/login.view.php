<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sign up</title>
</head>
<body>
    <!-- Navbar -->
<?php
    include('includes/header.view.php');
    ?>
 <section>
     <div class="sign-up-form">
         <form action="includes/login.view.php" method="POST">
             <h1 class="login-heading">LOG IN</h1>
             <input type="email" name="email" class="input-box" placeholder="Email">
             <br>
             <input type="password"  name="pwd" class="input-box" placeholder="Password">
             
             <button type="submit" name="submit-login">LOGIN</button>
             
             <hr>
                   
         </form>
     </div>
    </section>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>