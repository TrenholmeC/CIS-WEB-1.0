<?php ob_start(); ?>
<h2>Highlights for the Class of 2027</h2>
<section class="highlight">
    <h3>UPEI Hackathon Team: The Incompetence</h3>
    <img src="./img/highlights/upei-hackathon.png" alt="The Incompetence">
</section>
<?php $page_content = ob_get_clean(); ?>

<?php use_include("page", ['content' => $page_content]) ?>