<?php

require("../private_php/print_private_area.php");
require_file();

//$conn=connection_db();

session_control();

$user="Admin";
print_arHeader($user);
print_arMenu($user);

print_form_addTappa();

print_arfooter();
print_close();

?>
