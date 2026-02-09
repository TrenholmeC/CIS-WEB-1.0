<?php include $_SERVER['DOCUMENT_ROOT'] . "/_private/tools.php"; ?>

<?php ob_start(); ?>
<h2>Class of 2027</h2>
<h2>Student Directory for the Class of 2027</h2>
<ul id="profile-directory" class="link-directory">
    <li>Jesse Da Silvia</li>
    <li><a href="./student/alexander-fendyur/index.php">Alexander "Sasha" Fendyur</a></li>
    <li>Julian Keith</li>
    <li>Peter Logan</li>
    <li>Bridget Loo</li>
    <li>Lindsay Lynch</li>
    <li><a href="./student/chandler-trenholme/index.php">Chandler Trenholme</a></li>
    <li><a href="./student/kody-verhulp/index.php">Kody Verhulp</a></li>
</ul>
<?php $page_content = ob_get_clean(); ?>

<?php use_include("page", ['content' => $page_content]) ?>