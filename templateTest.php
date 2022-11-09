<?php
$template = $_REQUEST['template'];

include('templates/header.html');
include("templates/$template.html");
include('templates/footer.html');
?>