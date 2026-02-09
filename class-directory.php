<?php include $_SERVER['DOCUMENT_ROOT'] . "/_private/tools.php"; ?>

<?php ob_start(); ?>
<h2>Class Directory</h2>
<table class="link-directory">
    <tr>
        <td><a href="/class/2027/index.php">Class of 2027</a></td>
    </tr>
</table>
<?php $page_content = ob_get_clean(); ?>

<?php use_include("page", ['content' => $page_content]) ?>