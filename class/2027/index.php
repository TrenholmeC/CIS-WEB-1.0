<?php include $_SERVER['DOCUMENT_ROOT'] . "/_private/tools.php"; ?>

<?php ob_start(); ?>
<h2>Class of 2027</h2>
<table class="link-directory">
    <tr>
        <td><a href="./highlights.php">Class Highlights</a></td>
        <td><a href="./student-directory.php">Student Directory</td>
    </tr>
</table>
<?php $page_content = ob_get_clean(); ?>

<?php use_include("page", ['content' => $page_content]) ?>