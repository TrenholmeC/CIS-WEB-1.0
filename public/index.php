<?php ob_start(); ?>
<table class="link-directory">
    <tr>
        <td><a href="/topic/security">Security</a></td>
        <td><a href="/topic/operating-systems">Operating Systems</a></td>
        <td><a href="/topic/networks">Networks</a></td>
        <td><a href="/topic/databases">Databases</a></td>
    </tr>
    <tr>
        <td colspan="2"><a href="/topic/web">The Web</a></td>
        <td colspan="2"><a href="/topic/java">Java</a></td>
    </tr>
    <tr>
        <td colspan="4"><a href="/topic/e-health">E-Health Informatics</a></td>
    </tr>
    <tr>
        <td colspan="4"></td>
    </tr>
    <tr>
        <td colspan="4"><a href="/class-directory">Class Directory</a></td>
    </tr>
</table>
<?php $page_content = ob_get_clean(); ?>

<?php use_include("page", ['content' => $page_content]) ?>