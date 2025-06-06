<?php
require_once 'conn.php';

//função para excluir tarefa
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_id"])) {
    $conn->query("DELETE FROM tarefas WHERE id = " . intval($_POST["delete_id"]));
}
//função para alterar o status do checkbox(pendente/concluída)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
    $id = intval($_POST["id"]);
    $concluida = isset($_POST["concluida"]) ? 1 : 0;



    $conn->query("UPDATE tarefas SET concluida = $concluida WHERE id = $id");
}
?>
<style>
    table, th, td {
        border: 1px solid black;
    }
    td, th {
        padding: 2px;
        text-align: center;
    }
</style>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizador de Tarefas</title>
</head>
<body>
    <div style="align-items: center; text-align: center;">
        <h1>Visualizar todas tarefas cadastradas:</h1>
       <table style="width: 60%; margin: auto;">
            <tr style="background-color:lightgray;">
                
                <th>ID</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Status</th>
                <th>Excluir</th>
            </tr>
            <?php
            $sql = "SELECT * FROM tarefas";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["titulo"] . "</td>";
                    echo "<td>" . $row["descricao"] . "</td>";
                    //checkbox para atualizar o status
                    echo "<td>" ."<form method='POST'>";
                    echo "<input type='hidden' name='id' value='{$row['id']}'>";
                    echo "<input type='checkbox' name='concluida' value='1' " . ($row['concluida'] ? 'checked' : '') . " onchange='this.form.submit()'>";
                    echo $row['concluida'] ? " Concluída" : " Pendente";
                    echo "</form>";
                    echo "</td>";

                    //botão para excluir tarefa
                    echo "<td>";
                    echo "<form method='POST'>";
                    echo "<input type='hidden' name='delete_id' value='{$row['id']}'>";
                    echo "<button type='submit' style=';background-color:lightcoral'>X</button>";
                    echo "</form>";
                    echo "</td>";
                    echo "</tr>";
                 
                }
            } else {
                echo "<tr><td colspan='5'>Nenhuma tarefa encontrada.</td></tr>";
            }
            ?>  

        </table>
        <p></p>
        <a href="index.php">
        <button>Início</button>
        </a>
    </div>
</body>
</html>