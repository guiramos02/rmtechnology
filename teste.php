<?php
require_once("conecta.php");
$test = "select * from tb_cliente";
$pegartest = mysqli_fetch_assoc($conexao->query($test));
print_r ($pegartest);