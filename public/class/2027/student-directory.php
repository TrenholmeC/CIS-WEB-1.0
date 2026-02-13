<?php ob_start(); ?>
<h2>Student Directory for the Class of 2027</h2>
<ul id="profile-directory" class="link-directory">
    <li>John R. "John R." Aquino</li>
    <li>Adian Chappelle</li>
    <li>Connor Chappelle</li>
 <li>John M. "John Mark" Cuntapay</li>
    <li>Jesse Da Silvia</li>
    <li>Troelle "Z" Davis-Braylock</li>
    <li><a href="/class/2027/student/alexander-fendyur">Alexander "Sasha" Fendyur</a></li>
    <li>Julian Keith</li>
    <li>Peter Logan</li>
    <li>Bridget Loo</li>
    <li>Lindsay Lynch</li>
    <li>Thomas McNally</li>
    <li><a href="/class/2027/student/chandler-trenholme">Chandler Trenholme</a></li>
    <li><a href="/class/2027/student/kody-verhulp">Kody Verhulp</a></li>
</ul>
<?php $page_content = ob_get_clean(); ?>

<?php use_include("page", ['content' => $page_content]) ?>