<?php ob_start(); ?>
<h2>E-Health Informatics</h2>
<?php create_quote("Information is the lifeblood of medicine and health informaion technology is destined to be the circulatory system for that information.", "David Blumenthal") ?>
<?php $page_content = ob_get_clean(); ?>

<?php use_include("page", ['content' => $page_content]) ?>