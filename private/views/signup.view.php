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
            <form action="includes/signup.view.php" method="POST">
                <h1 class="login-heading">SIGN UP</h1>
                <input type="firstname" name="firstname" class="input-box" placeholder="First name">
                <input type="lastname" name="lastname" class="input-box" placeholder="Last name">
                <input type="email" name="email" class="input-box" placeholder="Email">
                <select class="input-box">
                    <option>--Select a Gender--</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
                <select class="input-box">
                    <option>--Select a Rank--</option>
                    <option value="student">student</option>
                    <option value="reception">reception</option>
                    <option value="lecturer">lecturer</option>
                    <option value="admin">admin</option>
                    <option value="super">super</option>
                </select>

                <input type="password" name="text" class="input-box" placeholder="Password">
                <input type="passwordRetype" name="text" class="input-box" placeholder="Retype password">

                <button type="submit" name="submit-login">ADD USER</button>

                <hr>

            </form>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>