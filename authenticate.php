<?php
// Conexão com o banco de dados
$pdo = new PDO("mysql:host=localhost;dbname=test", "adm", "123");

// Coletar dados do formulário
$username = $_POST['username'];
$password = $_POST['password'];

// Verificar se o usuário existe
$stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
$stmt->execute([$username]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {
    echo "Login bem-sucedido!";
} else {
    echo "Credenciais inválidas. Tente novamente.";
}
?>
