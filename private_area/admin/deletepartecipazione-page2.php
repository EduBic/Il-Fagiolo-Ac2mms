<?php
if(isset($_GET["Modifica"])){
	require("../private_php/print_private_area.php");
	require_file();

	$conn=connection_db();

	$user="Admin";

	print_arHeader($user);
	print_arMenu($user);

	print_form_deletePartecipazione($conn,$_GET);

	print_arfooter();
	print_close();
}
else
	echo "Ops";

?>