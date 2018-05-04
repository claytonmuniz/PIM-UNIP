<?php
include("conect.php");
$DESC_CAMPUS = $_POST['DESC_CAMPUS'];
$sql = "insert into campus (DESC_CAMPUS) values ('".$DESC_CAMPUS."')";
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
?>