<?php
    $profile = [
        'name' => "Alexander Fendyur",
        'display_name' => "Alexander \"Sasha\" Fendyur",
        'campus' => "Summerside Water Front Campus",
        'class_year' => 2027,
        'forum_signatures' => "coca-cola-drinker|tcp-ip-player",
        'pfp_ext' => "jpg"
    ]
?>

<?php ob_start(); ?>
<p>The Russian.</p>
<?php $profile['content'] = ob_get_clean(); ?>

<?php use_include("student_profile", $profile) ?>