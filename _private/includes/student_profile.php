<?php ob_start(); ?>
<div id="student-profile">
    <img class="profile-picture" src="./pfp.<?= $include_args['pfp_ext'] ?? "webp" ?>" alt="<?= $include_args['name'] ?>'s face" width="220" height="270">
    <p class="name"><?= $include_args['display_name'] ?? ($include_args['name'] ?? "MissingNo.") ?></p>
    <p class="title"><?= $include_args['campus'] ?></p>
    <p class="title">Class of <?= $include_args['class_year'] ?></p>
    <?php create_forum_signatures($include_args['forum_signatures']) ?>
</div>
<div id="inner-wrapper">
    <?= $include_args['content'] ?>
</div>
<?php $page_content = ob_get_clean(); ?>

<?php use_include("page", ['content' => $page_content]) ?>