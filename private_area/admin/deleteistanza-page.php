<?php

require("../private_php/print_private_area.php");
require_file();

$conn=connection_db();
session_control();

include('../private_php/deleteistanza.php');

$user="Admin";
print_arHeader($user);
print_arMenu($user);

print_form_deleteIstanza($conn,$info);

print_arfooter();
print_close();

connection_db_close($conn);

?>
