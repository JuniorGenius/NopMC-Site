<?php

function loadPage($page) {
    include 'includes/header.php';
    include 'pages/' . $page . '.php';
    include 'includes/footer.php';
}

function redirectTo($url) {
    header("Location: ". $url);
}

?>