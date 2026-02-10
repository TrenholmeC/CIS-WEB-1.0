<?php ob_start(); ?>
<h2>Operating Systems</h2>
<?php create_quote("All operating systems suck, but Linux just sucks less.", "Linus Torvalds") ?>
<?php $page_content = ob_get_clean(); ?>

<?php use_include("page", ['content' => $page_content]) ?>