<?php
    $profile = [
        'name' => htmlspecialchars($_POST['name']),
        'campus' => htmlspecialchars($_POST['campus']),
        'class_year' => htmlspecialchars($_POST['class_year']),
        'forum_signatures' => htmlspecialchars($_POST['forum_signatures']),
        'content' => "<h2>Student Profile Preview</h2>" . $HTML_PURIFIER->purify($_POST['profile_content']),
        'pfp_ext' => "jpg",
        'preview' => true
    ]
?>

<?php use_include("student_profile", $profile) ?>