<?php
 if(isset($_POST['email']) && empty($_POST['email']) == false){
     $email = $_POST['email'];
     echo "Seu e-mail foi cadrastado com sucesso!";
 }

?>
