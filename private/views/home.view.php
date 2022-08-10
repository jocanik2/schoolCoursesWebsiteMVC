<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Welcome!</title>
    
</head>
<body>

<?php
    include('includes/header.view.php');

?>
<!-- Intro section -->
<section class="intro-section bg-dark text-light p-5 text-center text-sm-start">
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
        <div class="intro-text bg-intro text-dark p-4">
            <h1 >Let's start an <span class="text-light">IT career </span>together</h1>
            <p class="lead my-4">Begin your learning journey with our courses,<br> everything you need is right here.</p>
            </div>
            <img class="img-fluid w-50 p-2 d-sm-blocked" src="images/selflearning.jpg" alt="">
        </div>
        
    </div>
</section>
<!-- Section students -->
<section id="students" class="students p-4">
    <div class="container">
        <h2 class="text-dark text-center pb-4">What do our students say?</h2>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card-body bg-light text-center">
                 <img class="rounded-circle mb-3" src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
                 <h3 class="card-title mb-3">Jacob Elordi</h3>
                 <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quidem, distinctio impedit mollitia sapiente dicta sunt nulla deserunt commodi quasi officiis delectus neque aut. Nam odio perferendis illum labore at!</p>
                
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card-body bg-light text-center">
                 <img class="rounded-circle mb-3" src="https://randomuser.me/api/portraits/men/26.jpg" alt="">
                 <h3 class="card-title mb-3">Lee Xin-mei</h3>
                 <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quidem, distinctio impedit mollitia sapiente dicta sunt nulla deserunt commodi quasi officiis delectus neque aut. Nam odio perferendis illum labore at!</p>
                
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
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
            </div>
            
        </div>
        

    </div>
</section>

 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

