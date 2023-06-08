<?php

$searchTerm = $_POST['search'];


// Conexão com o banco de dados (substitua com suas próprias credenciais)
$servername = "localhost";
$username = "host";
$password = "";
$dbname = "login_venda";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Executa a consulta de pesquisa no banco de dados
$sql = "SELECT * FROM pesquisa WHERE coluna LIKE '%$searchTerm%'";
$result = $conn->query($sql);

// Verifica se a consulta retornou algum resultado
if ($result->num_rows > 0) {
    // Itera sobre os resultados e faz o que desejar com eles
    while ($row = $result->fetch_assoc()) {
        // Exemplo: Imprime o resultado
        echo $row['coluna']."<br>";
    }
} else {
    // Caso não haja resultados
    echo "Nenhum resultado encontrado.";
}

// Fecha a conexão com o banco de dados
$conn->close();




?>