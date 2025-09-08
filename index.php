<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>QuickHelp - Login</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    
    <!-- Logo -->
    <img src="img/logo.png" alt="Logo QuickHelp" class="logo">

    <!-- Card de login -->
    <div class="login-card">
      <h1>QuickHelp!</h1>
      <p><strong>Faça login na sua conta</strong></p>
      
      <form action="login.php" method="POST">
        <input type="text" name="usuario" placeholder="Usuário" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <button type="submit">Login</button>
      </form>
    </div>

    <!-- Termos -->
    <footer>
      <a href="#">Termos de uso</a>
    </footer>
  </div>

  <!-- Botões laterais (mantidos) -->
  <div class="acessibilidade">
    <button class="btn laranja">
      <img src="img/hand.png" alt="Acessibilidade - Libras">
    </button>
    <button class="btn verde">
      <img src="img/sound.png" alt="Acessibilidade - Leitura de tela">
    </button>
  </div>

  <!-- Toggle de saturação (topo direito) -->
  <div class="toggle-saturacao">
    <button id="btnSaturacao">🎨</button>
  </div>

  <script src="js/acessibilidade.js"></script>
</body>
</html>
