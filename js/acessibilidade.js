// ==========================
// Acessibilidade - Ajuste de fonte
// ==========================
const fontIncrease = document.getElementById("font-increase");
const fontDecrease = document.getElementById("font-decrease");

let fontLevel = 0;
const maxLevel = 10;   // limite de aumento
const minLevel = -10;  // limite de redução

function updateFontSize() {
  const baseSize = 16; // tamanho padrão
  const newSize = baseSize + fontLevel * 2;

  document.body.style.fontSize = `${newSize}px`;

  // Aplica também nos campos interativos
  document.querySelectorAll("input, select, textarea, option, button, table, th, td, h2, .rodape, .paginacao").forEach(el => {
    el.style.fontSize = `${newSize}px`;
  });
}

if (fontIncrease) {
  fontIncrease.addEventListener("click", () => {
    if (fontLevel < maxLevel) {
      fontLevel++;
      updateFontSize();
    }
  });
}

if (fontDecrease) {
  fontDecrease.addEventListener("click", () => {
    if (fontLevel > minLevel) {
      fontLevel--;
      updateFontSize();
    }
  });
}

// ==========================
// Painel Libras (abrir/fechar)
// ==========================
document.addEventListener("DOMContentLoaded", () => {
  const librasBtn = document.querySelector(".btn-libras");
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
