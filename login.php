<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = $_POST["usuario"] ?? "";
    $senha = $_POST["senha"] ?? "";

    if ($usuario === "admin" && $senha === "1234") {
        header("Location: chamados.php");
        exit;
    } elseif ($usuario === "user" && $senha === "1234") {
        header("Location: chamados_usuario.php");
        exit;
    } else {
        $erro = "Usuário ou senha inválidos!";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Login - QuickHelp</title>
  <link rel="stylesheet" href="css/login.css">
</head>
<body class="login-body">
  <div class="logo">
    <img src="img/logo.png" alt="Logo QuickHelp">
  </div>

  <div class="login-box">
    <h1>QuickHelp!</h1>
    <p class="subtitle">Faça login na sua conta</p>
    
    <?php if (!empty($erro)): ?>
      <p style="color:red; font-weight:bold; text-align:center;"><?= $erro ?></p>
    <?php endif; ?>

    <form method="post" action="login.php">
      <input type="text" id="usuario" name="usuario" placeholder="Usuário" required>
      <input type="password" id="senha" name="senha" placeholder="Senha" required>
      <button type="submit">Login</button>
    </form>
  </div>

  <!-- Botões de acessibilidade -->
  <div class="accessibility-buttons">
    <button class="btn-libras">
      <img src="img/hand.png" alt="Libras">
    </button>
    <button class="btn-audio">
      <img src="img/sound.png" alt="Áudio">
    </button>
    <button id="font-decrease">A-</button>
    <button id="font-increase">A+</button>
  </div>

  <!-- Painel lateral Libras -->
  <div class="libras-panel" id="librasPanel">
    <img src="img/libras.png" alt="Suporte Libras">
    <button class="voltar" id="closeLibras">Voltar</button>
  </div>

  <footer>
    <a href="#">Termos de uso</a>
  </footer>

  <script src="js/acessibilidade.js"></script>
</body>
</html>
