// ==========================
// Carregar chamados salvos no localStorage
// ==========================
document.addEventListener("DOMContentLoaded", () => {
  const tabelaBody = document.querySelector("#tabelaChamados tbody");

  let chamados = JSON.parse(localStorage.getItem("chamados")) || [];
  tabelaBody.innerHTML = "";

  if (chamados.length === 0) {
    const tr = document.createElement("tr");
    tr.innerHTML = `<td colspan="7" style="text-align:center;">Nenhum chamado aberto</td>`;
    tabelaBody.appendChild(tr);
    return;
  }

  chamados.forEach(chamado => {
    // Define prioridade visual
    let prioridadeTag = "";
    if (chamado.prioridade === "Alta") {
      prioridadeTag = `<span class="tag alta">A</span>`;
    } else if (chamado.prioridade === "Média") {
      prioridadeTag = `<span class="tag media">M</span>`;
    } else if (chamado.prioridade === "Baixa") {
      prioridadeTag = `<span class="tag baixa">B</span>`;
    }

    const tr = document.createElement("tr");
    tr.innerHTML = `
      <td>${chamado.codigo}</td>
      <td>${chamado.titulo}</td>
      <td>${chamado.dataAbertura}</td>
      <td>${prioridadeTag}</td>
      <td>${chamado.andamento}</td>
      <td>${chamado.departamento}</td>
      <td>${chamado.localizacao}</td>
    `;
    tabelaBody.appendChild(tr);
  });
});

// ==========================
// Dropdown Chamados
// ==========================
document.addEventListener("DOMContentLoaded", () => {
  const btnChamados = document.getElementById("btnChamados");
  const submenu = document.getElementById("submenuChamados");

  if (!btnChamados || !submenu) return;

  // Toggle submenu ao clicar
  btnChamados.addEventListener("click", (e) => {
    e.preventDefault();
    submenu.classList.toggle("show");
  });

  // Fecha se clicar fora
  document.addEventListener("click", (e) => {
    if (!btnChamados.contains(e.target) && !submenu.contains(e.target)) {
      submenu.classList.remove("show");
    }
  });
  // ==========================
// Acessibilidade - Fonte A+ / A- e Saturação
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
  document.querySelectorAll("input, select, textarea, option, button, table, td, th").forEach(el => {
    el.style.fontSize = `${newSize}px`;
  });
}

if (fontIncrease && fontDecrease) {
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
}


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
