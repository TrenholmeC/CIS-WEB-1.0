<?php ob_start(); ?>
<h2>Databases</h2>
<?php create_quote("Everything is a database.", "Kody Verhulp") ?>
<?php $page_content = ob_get_clean(); ?>

<?php use_include("page", ['content' => $page_content]) ?>