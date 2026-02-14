<?php

$INCLUDES_DIR = $PRIVATE_DIR . "/includes/";

function use_include($include_file, $include_args) {
    global $INCLUDES_DIR, $PUBLIC_DIR, $URL_PATH;
    include $INCLUDES_DIR . $include_file . ".php";
}

function create_quote($qoute, $speaker) {
    echo <<<HTML
        <div class="qoute">
            <q>$qoute</q>
            <p>$speaker</p>
        </div>
    HTML;
}

function create_forum_signatures($signatures) {
    $FORUM_SIGNATURE_DESC = [
        'coca-cola-drinker' => "Coca-Cola drinker",
        'tcp-ip-player' => "TCP/IP Player",
    ];

    $parsed_signatures = "";

    foreach(explode("|", $signatures) as $sig) {
        if(array_key_exists($sig, $FORUM_SIGNATURE_DESC)) {
            $parsed_signatures .= '<img src="/img/forum-signatures/' . $sig . '.jpg" alt="' . $FORUM_SIGNATURE_DESC[$sig] . '" width="350" height="19">';
        }
    }

    echo <<<HTML
        <div id="forum-signatures">
            $parsed_signatures
        </div>
    HTML;
}

?>