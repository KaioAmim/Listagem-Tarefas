<?php
require_once 'conn.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['txtTitulo'];
    $descricao = $_POST['txtDescricao'];


    $sql = "INSERT INTO tarefas (titulo, descricao) VALUES ('$titulo', '$descricao')";

    if ($conn->query($sql) === TRUE) {
        echo "Tarefa adicionada a lista!";
        header("Location: listaTarefa.php");
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>