<?php

if(!empty($_GET['id'])) {
    include_once('bd/config.php');
    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM auditoria WHERE id=$id";
    $result = $conexao->query($sqlSelect);
    if($result->num_rows > 0) {
        $sqlDelete = "DELETE FROM auditoria WHERE id={$id}";
        $resultDelete = $conexao->query($sqlDelete);
    }
}

header('Location: kangu.php');if(!empty($_GET['id'])) {
    include_once('bd/config.php');
    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM auditoria WHERE id=$id";
    $result = $conexao->query($sqlSelect);
    if($result->num_rows > 0) {
        $sqlDelete = "DELETE FROM auditoria WHERE id={$id}";
        $resultDelete = $conexao->query($sqlDelete);
    }
}



header('Location: kangu.php');
?>