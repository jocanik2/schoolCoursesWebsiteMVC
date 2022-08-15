<?php
include('includes/header.view.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome!</title>
    <script>
        $(document).ready(function() {
            var commentCount = 1;
            $("#btn").click(function() {
                commentCount = commentCount + 1;
                $("#comm").load("load-comments.php", {
                    commentNewCount: commentCount
                });
            })
        });
    </script>
</head>


<body>

    <!-- Intro section -->
    <section class="intro-section bg-dark text-light p-5 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div class="intro-text bg-intro text-dark p-4">
                    <h1>Let's start an <span class="text-light">IT career </span>together</h1>
                </div>
                <img class="img-fluid w-50 p-2 d-sm-blocked" src="images/selflearning.jpg" alt="">
            </div>

        </div>
    </section>
    <!-- Section students -->
    <section class="students p-4">

        <div class="container">
            <h2 class="text-dark text-center pb-4">What do our students say?</h2>
            <div id="comm" class="row g-4">
                <?php
                $comment = new Comments();
                $rows = $comment->get_limited(1);
                ?>  

                <?php foreach ($rows as $row) : ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="card-body bg-light text-center">
                            <img class="rounded-circle mb-3" src="<?= $row['images'] ?>" alt="">
                            <h3 class="card-title mb-3"><?= $row['name'] ?></h3>
                            <p class="card-text"><?= $row['comment'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- <div class="col-md-6 col-lg-3">
                    <div class="card-body bg-light text-center">
                        <img class="rounded-circle mb-3" src="https://randomuser.me/api/portraits/men/18.jpg" alt="">
                        <h3 class="card-title mb-3">Andrew Mick</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quidem, distinctio impedit mollitia sapiente dicta sunt nulla deserunt commodi quasi officiis delectus neque aut. Nam odio perferendis illum labore at!</p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card-body bg-light text-center">
                        <img class="rounded-circle mb-3" src="https://randomuser.me/api/portraits/men/16.jpg" alt="">
                        <h3 class="card-title mb-3">Aaron Gordon</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quidem, distinctio impedit mollitia sapiente dicta sunt nulla deserunt commodi quasi officiis delectus neque aut. Nam odio perferendis illum labore at!</p>

                    </div>

                </div> -->

            </div>
        </div>
        <button id="btn" type="submit">Show more comments</button>
    </section>
    <?php
    include("includes/footer.view.php");

    ?>
</body>

</html>