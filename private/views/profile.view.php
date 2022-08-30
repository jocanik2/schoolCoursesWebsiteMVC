<?php include('includes/header.view.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>

<body style="background-image: url('<?=ROOT?>/asset/images/blue-bg.jpg');">

    <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
        <div class="row">
            <div>
                <img src="<?= IMAGES ?>/user-image.jpg" class="border border-primary d-block mx-auto rounded-circle " style="width:150px;">
                <h3 class="text-center">Jovana Nikolic</h3>
            </div>
            <div class="col-sm-20 col-md-20 bg-light p-2">
                <table class="table table-hover table-striped table-bordered">
                    <tr>
                        <th>First Name:</th>
                        <td><?php echo $_SESSION['USER']['first_name']?></td>
                    </tr>
                    <tr>
                        <th>Last Name:</th>
                        <td><?php echo $_SESSION['USER']['last_name']?></td>
                    </tr>
                    <tr>
                        <th>Username:</th>
                        <td><?php echo $_SESSION['USER']['username']?></td>
                    </tr>

                    <tr>
                        <th>E-mail:</th>
                        <td><?php echo $_SESSION['USER']['email']?></td>
                    </tr>
                    <tr>
                        <th>Rank</th>
                        <td><?php echo $_SESSION['USER']['rank']?></td>
                    </tr>

                </table>
            </div>
        </div>
        <br>
       
    </div>

</body>

</html>