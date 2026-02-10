<?php include $_SERVER['DOCUMENT_ROOT'] . "/private/tools.php"; ?>

<?php
    $profile = [
        'name' => $_POST['preview_name'],
        'campus' => $_POST['preview_campus'],
        'class_year' => $_POST['preview_class_year'],
        'forum_signatures' => $_POST['preview_forum_signatures'],
        'content' => $_POST['preview_profile_content'],
        'pfp_ext' => "jpg"
    ]
?>

<?php use_include("student_profile", $profile) ?>