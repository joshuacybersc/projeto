<?php
// Conexão com o banco de dados
$pdo = new PDO("mysql:host=localhost;dbname=test", "adm", "123");

// Coletar dados do formulário
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

// Verificar se o usuário já existe
$stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
$stmt->execute([$username]);
if ($stmt->rowCount() > 0) {
    echo "Nome de usuário já existe. Por favor, escolha outro.";
} else {
    // Inserir o novo usuário no banco de dados
    $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->execute([$username, $password]);
    echo "Registro bem-sucedido!";
}
?>
