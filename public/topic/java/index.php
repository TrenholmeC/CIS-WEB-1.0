<?php ob_start(); ?>
<h2>Java</h2>
<?php create_quote("A class, in Java, is where we teach objects how to behave.", "Richard E. Pattis") ?>
<?php $page_content = ob_get_clean(); ?>

<?php use_include("page", ['content' => $page_content]) ?>