<?php ob_start(); ?>
<h2>The Web</h2>
<?php create_quote("I just had to take the hypertext idea and connect it to the TCP and DNS ideas and &mdash;ta-da!&mdash;<br/>the World Wide Web.", "Tim Berners-Lee") ?>
<?php $page_content = ob_get_clean(); ?>

<?php use_include("page", ['content' => $page_content]) ?>