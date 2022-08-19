<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>

<body style="background-image: url('<?=ROOT?>/asset/images/blue-bg.jpg');">
    <!-- Navbar -->
    <?php
    include('includes/header.view.php');
    ?>
    <section>
        <div class="sign-up-form">
            <form method="POST">
                <h1 class="login-heading">LOG IN</h1>
                <?php if (count($errors) > 0) : ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Oh no!</strong>
                        <?php foreach ($errors as $error) : ?>
                            <br> <?= $error; ?>
                        <?php endforeach; ?>

                        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <input type="email" name="email_login" class="input-box" placeholder="Email">
                <br>
                <input type="password" name="pwd_login" class="input-box" placeholder="Password">

                <button type="submit" name="submit-login">LOGIN</button>

                <hr>

                        
                
            </form> 
           
        </div>
    </section>

</body>

</html>