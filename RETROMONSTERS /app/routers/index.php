<?php 


if (isset($_GET[""])) {

} else {

    global $header;
    ob_start();
    include "../views/templates/partials/_header.php";
    $header = ob_get_clean();
    
}