<?php
$commentNewCount = $_POST['commentNewCount'];
$comment = new Comments();
$rows = $comment->get_limited($commentNewCount);
print_r($rows);
?>

<?php foreach ($rows as $row): ?>
    <div class="col-md-6 col-lg-3">
        <div class="card-body bg-light text-center">
            <img class="rounded-circle mb-3" src="<?= $row['images'] ?>" alt="">
            <h3 class="card-title mb-3"><?= $row['name'] ?></h3>
            <p class="card-text"><?= $row['comment'] ?></p>
        </div>
    </div>
<?php endforeach; ?>