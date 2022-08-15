<?php
include('includes/header.view.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
</head>

<body>


    <div class="table-courses bg-light p-2 w-75 mx-auto mt-4">

        <table class="table table-striped table-hover table-light table-bordered">

            <tr>
                <th>No.</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Username</th>
                <th>E-mail</th>
                <th>Rank</th>


            </tr>
            <?php if ($rows) : ?>
                <?php $num = 0; ?>
                <?php foreach ($rows as $row) : ?>

                    <tr id="delete<?php echo $row['id'] ?>">
                        <td class="cell"><?= ($num = $num+1) ?></td>
                        <td class="cell"><?= $row['first_name'] ?></td>
                        <td class="cell"><?= $row['last_name'] ?></td>
                        <td class="cell"><?= $row['username'] ?></td>
                        <td class="cell"><?= $row['email'] ?></td>
                        <td class="cell"><?= $row['rank'] ?></td>


                        <?php if (Auth::isAdmin()) : ?>
                            <td>

                                <a href="#delete">
                                    <button onclick="deleteAjax(<?php echo $row['id'] ?>)" class="btn pull-left bg-danger mt-1 btn-sm rounded-pill">Delete</button>
                                </a>

                            </td>
                        <?php endif; ?>
                    </tr>

                <?php endforeach; ?>
            <?php else : ?>
                <h4>No users found.</h4>
            <?php endif; ?>

        </table>

    </div>

    <script type="text/javascript">

                function deleteAjax(id){
                    if (confirm('Are you sure?')) {
                        

                        $.ajax({

                            type:'POST',
                            url:"user.delete.view.php",
                            data:{delete_id:id},
                            success:function(data){
                                $("#delete"+id).hide('slow');
                            }

                        })
                    }
                }

    </script>

</body>

</html>