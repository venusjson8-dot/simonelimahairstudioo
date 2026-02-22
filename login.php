<?php
session_start();
// Mude aqui o usuário e a senha se quiser
$user_admin = "simone"; 
$pass_admin = "studio2026"; 

if (isset($_POST['entrar'])) {
    if ($_POST['usuario'] == $user_admin && $_POST['senha'] == $pass_admin) {
        $_SESSION['logado'] = true;
        header("Location: admin.php");
    } else {
        $erro = "Senha incorreta, amada!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Administrativo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body { background: #111; display: flex; align-items: center; justify-content: center; height: 100vh; color: white; }
        .box { background: #222; padding: 30px; border-radius: 15px; border: 1px solid #ff0000; }
    </style>
</head>
<body>
    <div class="box">
        <h3 class="text-center">Acesso Simone</h3>
        <form method="POST">
            <input type="text" name="usuario" class="form-control mb-3" placeholder="Usuário" required>
            <input type="password" name="senha" class="form-control mb-3" placeholder="Senha" required>
            <button name="entrar" class="btn btn-danger btn-block">Entrar no Painel</button>
            <?php if(isset($erro)) echo "<p class='mt-3 text-center'>$erro</p>"; ?>
        </form>
    </div>
</body>
</html>