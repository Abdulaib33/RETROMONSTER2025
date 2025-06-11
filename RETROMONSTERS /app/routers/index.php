<?php 


if (isset($_GET["page"])) {

} else {

    global $content;
    ob_start();
    include "../views/templates/partials/_main.php";
    $content = ob_get_clean();
    
}