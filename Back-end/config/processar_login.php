
<?php

session_start();
require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = trim($_POST["email"] ?? "");
    $senha = $_POST["senha"] ?? "";

    if (empty($email) || empty($senha)) {
        die("Preencha todos os campos!");
    }

    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $resultado = $conexao->execute_query($sql, [$email]);

    $usuario = $resultado->fetch_assoc();

    if ($usuario && password_verify($senha, $usuario["senha"])) {

        session_regenerate_id(true);

        $_SESSION["usuario_id"] = $usuario["id"];
        $_SESSION["usuario_nome"] = $usuario["nome"];

        header("Location: ../../Front-end/pages/dashboard.php");
        exit;

    } else {
        die("Email ou senha incorretos!");
    }
}

?>
