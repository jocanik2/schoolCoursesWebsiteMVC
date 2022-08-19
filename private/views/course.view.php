<!DOCTYPE html>
<html lang="en">
<?php
include('includes/header.view.php');
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/styleslogin.css">
    <title>Courses</title>

</head>

<body style="background-image: url('<?=ROOT?>/asset/images/blue-bg.jpg');">


    <div class="table-courses bg-light p-2 w-75 mx-auto mt-4">
        <table class="table table-striped table-hover table-light table-bordered align-middle">
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Name</th>
                <th class="text-center">Description</th>
                <th class="text-center">Technology</th>
                <th class="text-center">Semester</th>
                <th class="text-center">Price</th>

                <?php if (Auth::isAdmin()) : ?>
                    <th>
                        <a href="<?= ROOT ?>/course/add">
                            <button class="btn btn-sm btn-primary ">Add New</button>
                        </a>
                    </th>
                <?php endif; ?>
            </tr>
            <?php if ($rows) : ?>
                <?php $num = 0; ?>
                <?php foreach ($rows as $row) : ?>

                    <tr>
                        <?php if (Auth::isAdmin()) : ?>
                            <td class="cell" name="num"><?= ($num = $num + 1) ?></td>
                        <?php endif; ?>
                        <td class="text-center"><?= $row['name'] ?></td>
                        <td class="text-center"><?= $row['description'] ?></td>
                        <td class="text-center"><?= $row['technology'] ?></td>
                        <td class="text-center"><?= $row['semester'] ?></td>
                        <td class="text-center"><?= $row['price'] . "$"; ?></td>


                        <?php if (Auth::isAdmin()) : ?>
                            <td>
                                <a href="<?= ROOT ?>/course/edit/<?= $row['course_id'] ?>">
                                    <button class="btn pull-left bg-info btn-sm rounded-pill">Edit price</button>
                                </a>
                                <a href="<?= ROOT ?>/course/delete/<?= $row['course_id'] ?>">
                                    <button class="btn pull-left bg-danger mt-1 btn-sm rounded-pill" type="button">Delete</button>
                                </a>

                            </td>
                        <?php endif; ?>
                    </tr>

                <?php endforeach; ?>
            <?php else : ?>
                <h4>No courses found.</h4>
            <?php endif; ?>

        </table>

    </div>

</body>

</html>