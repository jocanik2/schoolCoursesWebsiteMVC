
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
                <h1 class="login-heading">SIGN UP</h1>

            <?php if(count($errors) >0):?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Holy guacamole!</strong> 
                    <?php foreach($errors as $error):?>
                        <br> <?=$error; ?>
                    <?php endforeach; ?>

                    <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php endif; ?>

                <input type="firstname" name="firstname" class="input-box" placeholder="First name">
                <input type="lastname" name="lastname" class="input-box" placeholder="Last name">
                <input type="username" name="username" class="input-box" placeholder="Username">
                <input type="email" name="email" class="input-box" placeholder="Email">

                <select class="input-box" name="rank">
                    <option>-Choose a rank-</option>
                    <option value="student">student</option>
                    <option value="receptionist">receptionist</option>  
                    <option value="lecturer">lecturer</option>
                    <option value="admin">admin</option>
                </select>

                <input type="password" name="pwd" class="input-box" placeholder="Password">
                <input type="password" name="pwdrepeat" class="input-box" placeholder="Retype password">

                <button type="submit" name="submit-signup">ADD USER</button>

                <hr>

            </form>
        </div>
    </section>

</body>

</html>