<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Abrir Chamado - QuickHelp</title>
  <link rel="stylesheet" href="css/abrir_chamado.css">
</head>
<body class="tela-abrir-chamado">

  <!-- Header -->
  <header class="header">
    <nav class="menu">
      <ul>
        <li class="dropdown">
          <a href="#" id="chamados-link">Chamados ▼</a>
          <ul class="dropdown-content">
            <li><a href="chamados_usuario.php">Ver Chamados</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>

  <!-- Sidebar -->
  <aside class="sidebar">
    <div class="logo-side">QuickHelp!</div>
    <div class="sidebar-bottom">
      <a href="#"><img src="img/telefone.png" alt="Contato"> Contato</a>
      <a href="#"><img src="img/duvida.png" alt="Ajuda"> Ajuda</a>
      <a href="login.php"><img src="img/saida.png" alt="Sair"> Sair</a>
    </div>
  </aside>

  <!-- Conteúdo -->
  <main class="conteudo">
    <div class="conteudo-interno">
      <h1 class="titulo-pagina">Abrir Chamado</h1>

      <div class="form-container">
        <form id="formChamado">

          <!-- Localização -->
          <div class="form-step" id="step-localizacao">
            <label for="localizacao">Selecione a localização:</label>
            <select id="localizacao" required>
              <option value="">-- Selecione --</option>
              <option value="Campos dos Goytacazes">Campos dos Goytacazes</option>
              <option value="Rio de Janeiro">Rio de Janeiro</option>
              <option value="Vitória">Vitória</option>
            </select>
          </div>

          <!-- Urgência -->
          <div class="form-step hidden" id="step-urgencia">
            <label for="urgencia">Selecione a urgência:</label>
            <select id="urgencia" required>
              <option value="">-- Selecione --</option>
              <option value="Baixa">Baixa</option>
              <option value="Média">Média</option>
              <option value="Alta">Alta</option>
            </select>
          </div>

          <!-- Departamento -->
          <div class="form-step hidden" id="step-departamento">
            <label for="departamento">Selecione o departamento:</label>
            <select id="departamento" required>
              <option value="">-- Selecione --</option>
              <option value="Vendas">Vendas</option>
              <option value="Oficina">Oficina</option>
              <option value="Administrativo">Administrativo</option>
            </select>
          </div>

          <!-- Título -->
          <div class="form-step hidden" id="step-titulo">
            <label for="titulo">Escreva o título do chamado:</label>
            <input type="text" id="titulo" placeholder="Digite o título" required>
            <small class="error hidden">O título precisa ter pelo menos 3 caracteres.</small>
          </div>

          <!-- Descrição -->
          <div class="form-step hidden" id="step-descricao">
            <label for="descricao">Descrição do chamado:</label>
            <textarea id="descricao" rows="4" placeholder="Descreva seu problema" required></textarea>
            <small class="error hidden">A descrição precisa ter pelo menos 3 caracteres.</small>
          </div>

          <!-- Botão -->
          <div class="form-step hidden" id="step-submit">
            <button type="submit">Criar Chamado</button>
          </div>

        </form>
      </div>
    </div>
  </main>

  <!-- Botões acessibilidade -->
  <div class="acessibilidade">
    <button class="btn libras"><img src="img/hand.png" alt="Libras"></button>
    <button class="btn verde"><img src="img/sound.png" alt="Áudio"></button>
    <button class="btn toggle" id="font-decrease">A-</button>
    <button class="btn toggle" id="font-increase">A+</button>
  </div>
  
    <!-- Painel lateral Libras -->
  <div class="libras-panel" id="librasPanel">
    <img src="img/libras.png" alt="Suporte Libras">
    <button class="voltar" id="closeLibras">Voltar</button>
  </div>

  <script src="js/abrir_chamado.js"></script>
  <script>
    // Dropdown toggle
    const chamadosLink = document.getElementById("chamados-link");
    const dropdown = chamadosLink.parentElement;

    chamadosLink.addEventListener("click", (e) => {
      e.preventDefault();
      dropdown.classList.toggle("open");
    });

    // Fecha se clicar fora
    document.addEventListener("click", (e) => {
      if (!dropdown.contains(e.target)) {
        dropdown.classList.remove("open");
      }
    });
  </script>
</body>
</html>
