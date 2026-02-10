<?php
    $profile = [
        'name' => "Kody Verhulp",
        'campus' => "Summerside Water Front Campus",
        'class_year' => 2027,
        'forum_signatures' => "coca-cola-drinker|tcp-ip-player",
        'pfp_ext' => "webp"
    ]
?>

<?php ob_start(); ?>
<p>I am a master AI prompter.</p>
<?php $profile['content'] = ob_get_clean(); ?>

<?php use_include("student_profile", $profile) ?>