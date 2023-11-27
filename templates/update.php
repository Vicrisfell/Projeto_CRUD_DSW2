<?php 

require_once('../classes/DBconnect.php');
$objeto1 = new DBConnect(); 


$objeto1->atualiza($nome_atualizar = $_POST['atualizar'],$id_atualizar = $_POST['id_atualizar']);

?>