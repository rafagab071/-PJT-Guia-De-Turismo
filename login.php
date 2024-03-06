<?php
// Verifica as credenciais (usuário e senha)
$usuario_correto = "teste";
$senha_correta = "teste";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["username"];
    $senha = $_POST["password"];

    // Verifica se as credenciais são corretas
    if ($usuario == $usuario_correto && $senha == $senha_correta) {
        // Redireciona para a página original.php
        header("Location: central.php");
        exit();
    } else {
        // Caso as credenciais estejam incorretas, pode adicionar uma mensagem de erro ou redirecionar para uma página de erro
        echo "Credenciais incorretas. Tente novamente.";
    }
}
?>
