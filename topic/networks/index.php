<?php include $_SERVER['DOCUMENT_ROOT'] . "/_private/tools.php"; ?>

<?php ob_start(); ?>
<h2>Networks</h2>
<?php create_quote("It's like the Wild West, the Internet. There are no rules.", "Steven Wright") ?>
<?php $page_content = ob_get_clean(); ?>

<?php use_include("page", ['content' => $page_content]) ?>