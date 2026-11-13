<?php

// Verificar se o formulário foi enviado pelo método POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    exit("Acesso inválido. Envie o formulário.");
}

// Receber os dados do formulário
$nome = trim($_POST["nome"] ?? "");
$email = trim($_POST["email"] ?? "");
$senha = $_POST["senha"] ?? "";
$confirmar_senha = $_POST["confirmar_senha"] ?? "";
$terms = $_POST["terms"] ?? "";

// Verificar se os campos estão preenchidos
if (
    $nome === "" ||
    $email === "" ||
    $senha === "" ||
    $confirmar_senha === ""
) {
    exit("Preencha todos os campos!");
}

// Verificar se as senhas coincidem
if ($senha !== $confirmar_senha) {
    exit("As senhas não coincidem!");
}


// Se todas as verificações forem aprovadas
echo "Dados recebidos com sucesso!";

?>
