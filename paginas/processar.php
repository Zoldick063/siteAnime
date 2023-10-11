<?php
include('conexao.php');
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$mes = $_POST['mes'];
$genero = $_POST['generos'];

// Inserir os dados no banco de dados
$sql = "INSERT INTO usuarios (nome, email, senha, mes, genero)
VALUES ('$nome', '$email', '$senha', '$mes', '$genero')";

if ($conn->query($sql) === TRUE) {
    echo "Registro inserido com sucesso.";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>