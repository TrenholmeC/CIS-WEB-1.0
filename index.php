<?php include $_SERVER['DOCUMENT_ROOT'] . "/_private/tools.php"; ?>

<?php ob_start(); ?>
<table class="link-directory">
    <tr>
        <td><a href="/topic/security/index.php">Security</a></td>
        <td><a href="/topic/operating-systems/index.php">Operating Systems</a></td>
        <td><a href="/topic/networks/index.php">Networks</a></td>
        <td><a href="/topic/databases/index.php">Databases</a></td>
    </tr>
    <tr>
        <td colspan="2"><a href="/topic/web/index.php">The Web</a></td>
        <td colspan="2"><a href="/topic/java/index.php">Java</a></td>
    </tr>
    <tr>
        <td colspan="4"><a href="/topic/e-health/index.php">E-Health Informatics</a></td>
    </tr>
    <tr>
        <td colspan="4"></td>
    </tr>
    <tr>
        <td colspan="4"><a href="/class-directory.php">Class Directory</a></td>
    </tr>
</table>
<?php $page_content = ob_get_clean(); ?>

<?php use_include("page", ['content' => $page_content]) ?>