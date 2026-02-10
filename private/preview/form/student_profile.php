<?php include $_SERVER['DOCUMENT_ROOT'] . "/private/tools.php"; ?>

<?php $default_content = "<p>Put HTML here!</p>
<ul>
    <li>Hyper</li>
    <li>Text</li>
    <li>Markup</li>
    <li>Language</li>
</ul>" ?>

<?php ob_start(); ?>
<h2>Student Profile Form</h2>
<form action="/private/preview/post/student_profile.php" method="post" target="_blank">
    <table>
        <tr>
            <td><label for="form-name">Name:</label></td>
            <td><input type="text" id="form-name" name="preview_name"></td>
        </tr>
        <tr>
            <td><label for="form-campus">Campus:</label></td>
            <td><input type="text" id="form-campus" name="preview_campus"></td>
        </tr>
        <tr>
            <td><label for="form-class-year">Graduating Year:</label></td>
            <td><input type="text" id="form-class-year" name="preview_class_year"></td>
        </tr>
        <tr>
            <td><label for="form-forum-signatures">Forum Signatures:</label></td>
            <td><input type="text" id="form-forum-signatures" name="preview_forum_signatures"></td>
        </tr>
        <tr><td colspan="2"><label for="form-profile-content">Profile Content:</label></td></tr>
    </table>
    <textarea id="form-profile-content" name="preview_profile_content"><?= $default_content ?></textarea> 
    <input id="preview-button" type="submit" value="Preview">
</form>
<?php $page_content = ob_get_clean(); ?>

<?php use_include("page", ['content' => $page_content]) ?>