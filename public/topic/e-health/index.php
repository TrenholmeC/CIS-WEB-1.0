<?php ob_start(); ?>
<h2>E-Health Informatics</h2>
<p>Soon to come..</p>
<?php $page_content = ob_get_clean(); ?>

<?php use_include("page", ['content' => $page_content]) ?>