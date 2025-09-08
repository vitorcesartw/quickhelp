<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>QuickHelp - Chamados</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="tela-chamados">

  <!-- Sidebar -->
  <aside class="sidebar">
    <div class="logo-side">QuickHelp!</div>

    <div class="sidebar-bottom">
      <a href="#">
        <img src="img/telefone.png" alt="Contato"> Contato
      </a>
      <a href="#">
        <img src="img/duvida.png" alt="Ajuda"> Ajuda
      </a>
      <a href="login.php">
        <img src="img/saida.png" alt="Sair"> Sair
      </a>
    </div>
  </aside>

  <!-- Conteúdo principal -->
  <main class="conteudo">
    
    <!-- Navbar superior -->
<!-- Navbar superior (novo) -->
<header class="topbar" role="banner" aria-label="Barra superior">
  <div class="topbar-inner">
    <nav aria-label="Menu principal">
      <ul>
        <li><a href="#">Home ▾</a></li>
        <li><a href="#">Incidentes ▾</a></li>
        <li><a href="#">Usuários ▾</a></li>
        <li><a href="#">Equipe Suporte ▾</a></li>
        <li><a href="#">Administração ▾</a></li>
        <li><a href="#">Configurações ▾</a></li>
      </ul>
    </nav>

    <!-- area à direita do topo (pode conter search, breadcrumbs, botões não-acessibilidade, etc) -->
    <div class="topbar-actions" aria-hidden="false">
    </div>
  </div>
</header>

  

      
    <!-- Tabela de chamados -->

    <section class="painel">
      <div class = "painel-header">
        <h2>Painel de controle</h2>
          <div class="search">
            <input type="text" placeholder="Pesquisar pelo código ou chamado">
            <button>Buscar</button>
          </div>
      
      <table>
        <thead>
          <tr>
            <th>Código</th>
            <th>Chamados</th>
            <th>Data de Abertura</th>
            <th>Prioridade</th>
            <th>Andamento</th>
            <th>Previsão</th>
            <th>Aprovação</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Servidor está indisponível</td>
            <td>28/08/2025 08:01</td>
            <td><span class="tag alta">A</span></td>
            <td>Equipe A</td>
            <td>28/08/2025 09:00</td>
            <td></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Internet instável</td>
            <td>25/08/2025 10:10</td>
            <td><span class="tag alta">A</span></td>
            <td>Equipe B</td>
            <td>25/08/2025 11:30</td>
            <td></td>
          </tr>
          <tr>
            <td>3</td>
            <td>Telefone quebrou</td>
            <td>25/08/2025 15:33</td>
            <td><span class="tag media">M</span></td>
            <td>Equipe C</td>
            <td>28/08/2025 17:00</td>
            <td></td>
          </tr>
          <tr>
            <td>4</td>
            <td>Remover acesso dos usuários que saíram do Time</td>
            <td>28/06/2025 16:00</td>
            <td><span class="tag media">M</span></td>
            <td>Equipe A</td>
            <td>29/12/2025 17:00</td>
            <td></td>
          </tr>
          <tr>
            <td>5</td>
            <td>Notebook está lento</td>
            <td>29/06/2025 17:45</td>
            <td><span class="tag baixa">B</span></td>
            <td>Equipe B</td>
            <td>30/06/2025 09:00</td>
            <td></td>
          </tr>
          <tr>
            <td>6</td>
            <td>Atualização de software</td>
            <td>29/06/2025 18:03</td>
            <td><span class="tag media">M</span></td>
            <td>Equipe B</td>
            <td>30/06/2025 17:00</td>
            <td></td>
          </tr>
        </tbody>
        
      </table>
          <!-- Paginação -->
    <div class="paginacao">1,2,3... ▶</div>
    </section>



    <!-- Rodapé -->
    <footer class="rodape">
      © 2025 QuickHelp!. Todos os direitos reservados
    </footer>
  </main>

<!-- Botões laterais -->
<div class="accessibility-buttons">
  <button class="btn-libras">
    <img src="img/hand.png" alt="Acessibilidade - Libras">
  </button>
  <button class="btn-audio">
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
  
<script src="js/acessibilidade.js"></script>


</body>
</html>
