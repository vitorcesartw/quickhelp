<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>QuickHelp - Chamados Usuário</title>
  <link rel="stylesheet" href="css/style_usuario.css">
</head>
<body class="tela-chamados">

  <!-- Sidebar -->
  <aside class="sidebar">
    <div class="logo-side">QuickHelp!</div>
    <div class="sidebar-bottom">
      <a href="#"><img src="img/telefone.png" alt="Contato"> Contato</a>
      <a href="#"><img src="img/duvida.png" alt="Ajuda"> Ajuda</a>
      <a href="login.php"><img src="img/saida.png" alt="Sair"> Sair</a>
    </div>
  </aside>

  <!-- Conteúdo principal -->
  <main class="conteudo">
    
    <!-- Header -->
    <header class="topbar">
      <nav class="menu">
        <ul>
          <li>
            <a href="#" id="btnChamados">Chamados ▼</a>
            <ul class="dropdown-content" id="submenuChamados">
              <li><a href="abrir_chamado.php">Abrir Chamado</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </header>

    <!-- Painel de chamados -->
    <section class="painel">
      <div class = "painel-header">
        <h2>Meus Chamados</h2>
          <div class="search">
            <input type="text" placeholder="Pesquisar pelo código ou chamado">
            <button>Buscar</button>
          </div>
        </div>
      <div class="tabela-container">
        <table id="tabelaChamados">
          <thead>
            <tr>
              <th>Código</th>
              <th>Chamados</th>
              <th>Data de Abertura</th>
              <th>Prioridade</th>
              <th>Andamento</th>
              <th>Departamentos</th>
              <th>Localização</th>
            </tr>
          </thead>
          <tbody>
            <!-- Preenchido via JS -->
          </tbody>
        </table>
      </div>
    </section>

    <!-- Rodapé -->
    <footer class="rodape">
      © 2025 QuickHelp!. Todos os direitos reservados
    </footer>
  </main>

    <!-- Botões laterais -->
  <div class="acessibilidade">
    <button class="btn libras">
      <img src="img/hand.png" alt="Acessibilidade - Libras">
    </button>
    <button class="btn verde">
      <img src="img/sound.png" alt="Acessibilidade - Leitura de tela">
    </button>
    <button class="btn toggle" id="font-decrease">A-</button>
    <button class="btn toggle" id="font-increase">A+</button>
  </div>
    <!-- Painel lateral Libras -->
  <div class="libras-panel" id="librasPanel">
    <img src="img/libras.png" alt="Suporte Libras">
    <button class="voltar" id="closeLibras">Voltar</button>
  </div>


  <script src="js/chamados_usuario.js"></script>
</body>
</html>
