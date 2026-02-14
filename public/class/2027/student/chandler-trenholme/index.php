<?php
    $profile = [
        'name' => "Chandler Trenholme",
        'campus' => "Summerside Water Front Campus",
        'class_year' => 2027,
        'forum_signatures' => "coca-cola-drinker|tcp-ip-player",
        'pfp_ext' => "jpg"
    ]
?>

<?php ob_start(); ?>
<p>Hello, I made this website. It is very modern, using cutting edge software like PHP.</p>
<p>Obligatory blink tags:</p>
<p><blink-182>Now you see me</blink-182></p>
<p>C:\<blink-182 data-blink-time="1000">_</blink-182></p>
<?php $profile['content'] = ob_get_clean(); ?>

<?php use_include("student_profile", $profile) ?>