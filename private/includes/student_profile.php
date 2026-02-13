<?php ob_start(); ?>
<div id="student-profile">
    <!-- Phones will typically use JPEG for photos so we'll use that as a default if we can't determine the extension -->
    <img class="profile-picture" src="<?= $_SERVER["REQUEST_URI"] ?>/pfp.<?= $include_args['pfp_ext'] ?? "jpg" ?>" alt="<?= $include_args['name'] ?>'s face" width="200" height="250">
    <p class="name"><?= $include_args['display_name'] ?? ($include_args['name'] ?? "MissingNo.") ?></p>
    <p class="title"><?= $include_args['campus'] ?></p>
    <p class="title">Class of <?= $include_args['class_year'] ?></p>
    <?php create_forum_signatures($include_args['forum_signatures']) ?>
</div>
<div id="inner-wrapper">
    <?= $include_args['content'] ?>
</div>
<?php $page_content = ob_get_clean(); ?>

<?php use_include("page", [
    'content' => $page_content,
    'robot_indexing' => (array_key_exists('preview', $include_args) ? "noindex, nofollow" : "index, follow")
]) ?>