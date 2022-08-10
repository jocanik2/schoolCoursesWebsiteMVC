<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Courses</title>
</head>

<body>
    <?php
    include('includes/header.view.php');
    ?>

    <div class="col-sm-20 col-md-20 bg-light p-2" >

        <table class="table table-striped table-hover table-light table-bordered" >

            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Technology</th>
                <th>Semester</th>
                <th>
                    <a href="">
                        <button class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>Add New</button>
                    </a>
                </th>
            </tr>
            <?php if ($rows) : ?>

                <?php foreach ($rows as $row) : ?>

                    <tr>
                        <td class = "cell"><?= $row['name'] ?></td>
                        <td class="cell"><?= $row['description']?></td>
                        <td class="cell"><?= $row['technology'] ?></td>
                        <td class="cell"><?= $row['semester'] ?></td>

                        <td>
                            <a href="#edit>">
                                <button class="btn-sm btn btn-info text-white "></button>
                            </a>

                            <a href="#delete">
                                <button class="btn-sm btn btn-danger"></button>
                            </a>

                          


                        </td>

                    </tr>

                <?php endforeach; ?>
            <?php else : ?>
                <h4>No courses found.</h4>
            <?php endif; ?>

        </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>