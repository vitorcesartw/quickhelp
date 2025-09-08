// ==========================
// Abrir Chamado - Fluxo
// ==========================

const localizacao = document.getElementById("localizacao");
const urgencia = document.getElementById("urgencia");
const departamento = document.getElementById("departamento");
const titulo = document.getElementById("titulo");
const descricao = document.getElementById("descricao");

// Localização -> mostra urgência
localizacao.addEventListener("change", () => {
  document.getElementById("step-urgencia").classList.add("show");
});

// Urgência -> mostra departamento
urgencia.addEventListener("change", () => {
  document.getElementById("step-departamento").classList.add("show");
});

// Departamento -> mostra título
departamento.addEventListener("change", () => {
  if (departamento.value !== "") {
    document.getElementById("step-titulo").classList.add("show");
  }
});

// Título -> valida + mostra descrição
titulo.addEventListener("input", () => {
  const error = titulo.nextElementSibling;
  if (titulo.value.trim().length >= 3) {
    error.classList.add("hidden");
    document.getElementById("step-descricao").classList.add("show");
  } else {
    error.classList.remove("hidden");
  }
});

// Descrição -> valida + mostra submit
descricao.addEventListener("input", () => {
  const error = descricao.nextElementSibling;
  if (descricao.value.trim().length >= 3) {
    error.classList.add("hidden");
    document.getElementById("step-submit").classList.add("show");
  } else {
    error.classList.remove("hidden");
  }
});

// ==========================
// Salvar chamado no localStorage + Redirecionar
// ==========================
document.getElementById("formChamado").addEventListener("submit", (e) => {
  e.preventDefault();

  // Pega lista de chamados já salvos
  let chamados = JSON.parse(localStorage.getItem("chamados")) || [];

  // Gera um código sequencial simples
  const codigo = chamados.length + 1;

  const chamado = {
    codigo: codigo,
    titulo: titulo.value.trim(),
    dataAbertura: new Date().toLocaleString("pt-BR"),
    prioridade: urgencia.value,
    andamento: "Aberto",
    departamento: departamento.value,
    localizacao: localizacao.value,
    descricao: descricao.value
  };

  // Adiciona e salva
  chamados.push(chamado);
  localStorage.setItem("chamados", JSON.stringify(chamados));

  // Redireciona
  setTimeout(() => {
    window.location.href = "chamados_usuario.php";
  }, 200);
});

// ==========================
// Acessibilidade - Fonte A+ / A-
// ==========================
const fontIncrease = document.getElementById("font-increase");
const fontDecrease = document.getElementById("font-decrease");
let fontLevel = 0;
const maxLevel = 10;
const minLevel = -4;

function updateFontSize() {
  const baseSize = 16;
  const newSize = baseSize + fontLevel * 2;
  document.body.style.fontSize = `${newSize}px`;
  document.querySelectorAll("input, select, textarea, option, button").forEach(el => {
    el.style.fontSize = `${newSize}px`;
  });
}

fontIncrease.addEventListener("click", () => {
  if (fontLevel < maxLevel) {
    fontLevel++;
    updateFontSize();
  }
});

fontDecrease.addEventListener("click", () => {
  if (fontLevel > minLevel) {
    fontLevel--;
    updateFontSize();
  }
});

// ==========================
// Dropdown Home
// ==========================
document.addEventListener("DOMContentLoaded", () => {
  const parent = document.querySelector(".dropdown");
  const link = parent.querySelector("a");
  const submenu = parent.querySelector(".dropdown-content");

  link.addEventListener("click", (e) => {
    e.preventDefault();
    submenu.classList.toggle("show");
  });

  // Fecha se clicar fora
  document.addEventListener("click", (e) => {
    if (!parent.contains(e.target)) {
      submenu.classList.remove("show");
    }
  });


  // Fecha se clicar fora
  document.addEventListener("click", (e) => {
  if (!dropdown.contains(e.target)) {
    dropdown.querySelector(".dropdown-content").classList.remove("show");
  }
});
});

// ==========================
// Painel Libras (abrir/fechar)
// ==========================
document.addEventListener("DOMContentLoaded", () => {
  const librasBtn = document.querySelector(".btn.libras");
  const librasPanel = document.getElementById("librasPanel");
  const closeLibras = document.getElementById("closeLibras");

  if (librasBtn && librasPanel && closeLibras) {
    librasBtn.addEventListener("click", () => {
      librasPanel.classList.add("active");
    });

    closeLibras.addEventListener("click", () => {
      librasPanel.classList.remove("active");
    });
  }
});