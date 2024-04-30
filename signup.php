<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Usuários</title>
</head>
<body>
    <h2>Cadastro de Usuário</h2>
    <form action="register.php" method="post">
        <label for="username">Nome de Usuário:</label>
        <input type="text" name="username" required><br>
        
        <label for="password">Senha:</label>
        <input type="password" name="password" required><br>
        
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
