

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?=ROOT;?>/asset/styleslogin.scss"/>
    
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 navbar-static-top ">
        <div class="container">
            <div class="navbar-logo">
                <a href="home"><img class="logo-image" src="<?=ROOT;?>/asset/images/learnit_doit.jpg" alt="logo-image"></a>
                LearnIT
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu" aria-controls="navmenu" aria-label="Toggle navigation" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php if (isset($_SESSION['USER'])):?>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="course" class="nav-link">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a href="user" class="nav-link">Users</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php 
                            echo Auth::get_Name();
                            ?>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <?php if (Auth::isAdmin()): ?>
                                <li><a class="dropdown-item" href="<?=ROOT?>/signup">Add user</a></li>
                            <?php endif; ?>
                            <li><a class="dropdown-item" href="<?=ROOT?>/profile">Profile</a></li>
                            <li><a class="dropdown-item" href=" <?=ROOT?>/logout">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <?php endif; ?>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>