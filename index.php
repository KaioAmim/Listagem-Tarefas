<?php
require_once 'conn.php';
?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Tarefas</title>
</head>
<body>
    <div style="align-items: center; text-align: center;">
        <h1>Adicionar uma nova Tarefa</h1>
        <form action="adicionarTarefa.php" method="POST">
        <h3>título</h3>
        <input type="text" value="titulo" name="txtTitulo" placeholder="Digite o Titulo da tarefa" required>
        <h3>Descrição</h3>
        <textarea value="descricao" name="txtDescricao" rows="5" cols="50" required></textarea>
        <p></p>
        <button type="submit">Adicionar Tarefa</button>
        </form>
        <h2>Visualizar todas tarefas cadastradas:</h2>
        <a href="listaTarefa.php">
            <button>Ver Tarefas</button>
        </a>
    </div>
</body>
</html>