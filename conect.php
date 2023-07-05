<?php
$servername = "localhost"; // Nome do servidor
$username = "root"; // Nome de usuário do banco de dados
$password = ""; // Senha do banco de dados
$dbname = "GitHub"; // Nome do banco de dados

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Obter os dados do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];

// Inserir os dados no banco de dados
$sql = "INSERT INTO cadastro (email, senha) VALUES ('$email', '$senha')";
if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir os dados: " . $conn->error;
}

// Fechar a conexão
$conn->close();
?>