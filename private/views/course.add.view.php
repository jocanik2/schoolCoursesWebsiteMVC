<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleslogin.scss">
    <title>Sign up</title>
</head>

<body>
    <!-- Navbar -->
    <?php
    require "includes/header.view.php";
    ?>
    <section>
        <div class="sign-up-form">
            <form method="POST">
                <h1 class="ass-course-heading">Add a new course</h1>
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
                <input type="name" name="name" class="input-box" placeholder="Name">
                <input type="description" name="description" class="input-box" placeholder="Description">
                <input type="technology" name="technology" class="input-box" placeholder="Technology">
                <input type="semester" name="semester" class="input-box" placeholder="Semester">
                <input type="price" name="price" class="input-box" placeholder="Price">

                
                <button type="submit" name="submit-add-course">ADD</button>

                <hr>

            </form> 
           
        </div>
    </section>

</body>

</html>