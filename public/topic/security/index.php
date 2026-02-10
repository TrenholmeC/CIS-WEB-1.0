<?php ob_start(); ?>
<h2>Security</h2>
<?php create_quote("Cyber-Security is much more than a matter of IT.", "St&eacute;phane Nappo") ?>
<?php $page_content = ob_get_clean(); ?>

<?php use_include("page", ['content' => $page_content]) ?>