<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/styleslogin.css">
    <title>Document</title>
</head>

<body>
    <?php
    include('includes/header.view.php');
    ?>

    <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">

        <?php if ($row) : ?>
            <div class="card-group justify-content-center">

                <form method="POST">
                    <h3>Are you sure you want to delete?!</h3>
                    <input type="hidden" name="id">
                    <input class="btn btn-danger float-end" type="submit" value="Delete">

                    <a href="<?= ROOT ?>/course">
                        <input class="btn btn-success" type="button" value="Cancel">
                    </a>
                </form>

            </div>
        <?php else : ?>

            <div style="text-align: center;">
                <h3>That course was not found!</h3>
                <div class="clearfix"></div>
                <br><br>
                <a href="<?= ROOT ?>/course">
                    <input class="btn btn-danger" type="button" value="Cancel">
                </a>
            </div>
        <?php endif; ?>



    </div>

</body>

</html>