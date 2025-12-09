# 🧡 QuickHelp! – Sistema de Chamados com Acessibilidade

![GitHub repo size](https://img.shields.io/github/repo-size/vitorcesartw/quickhelp?color=orange)
![GitHub last commit](https://img.shields.io/github/last-commit/vitorcesartw/quickhelp?color=green)
![Status](https://img.shields.io/badge/status-Em%20desenvolvimento-yellow)
![License](https://img.shields.io/badge/license-MIT-blue)

> 💬 O **QuickHelp!** é uma plataforma de gerenciamento de chamados desenvolvida com foco em **usabilidade** e **acessibilidade**, permitindo que usuários registrem, acompanhem e gerenciem ocorrências de forma prática, intuitiva e inclusiva.

---

## 🧭 Índice
- [📖 Sobre o Projeto](#-sobre-o-projeto)
- [✨ Funcionalidades](#-funcionalidades)
- [🧩 Tecnologias Utilizadas](#-tecnologias-utilizadas)
- [🦾 Recursos de Acessibilidade](#-recursos-de-acessibilidade)
- [📂 Estrutura de Pastas](#-estrutura-de-pastas)
- [📸 Demonstrações](#-demonstrações)
- [⚙️ Como Executar o Projeto](#️-como-executar-o-projeto)
- [📊 Avaliação e Resultados](#-avaliação-e-resultados)
- [👨‍💻 Autor](#-autor)
- [🪪 Licença](#-licença)

---

## 📖 Sobre o Projeto

O **QuickHelp!** foi desenvolvido durante a disciplina de **Interação Humano-Computador (IHC)** do **Instituto Federal Fluminense (IFF)**.  
O sistema tem como objetivo **facilitar o registro e acompanhamento de chamados técnicos**, com uma interface moderna e acessível a diferentes perfis de usuários.

O projeto foi avaliado com base em **usabilidade, acessibilidade e estética**, seguindo as diretrizes da **ISO/IEC 25010** e **WCAG 2.1**.

---

## ✨ Funcionalidades

✅ Cadastro e acompanhamento de chamados  
✅ Painel administrativo e de usuários  
✅ Interface responsiva e intuitiva  
✅ Submenu dinâmico (“Abrir Chamado”)  
✅ Armazenamento local com **LocalStorage** (prototipagem)  
✅ Relatórios e tabelas de acompanhamento  
✅ Botões de acessibilidade fixos na interface  

---

## 🧩 Tecnologias Utilizadas

| Tipo | Ferramenta |
|------|-------------|
| **Frontend** | HTML5, CSS3, JavaScript |
| **Ambiente local** | XAMPP / Apache (PHP para simulação de rotas) |
| **Versionamento** | Git e GitHub |
| **Design e prototipagem** | Figma / Canva |
| **Análise de acessibilidade** | Access Monitor |
| **Coleta de dados** | Google Forms e Google Sheets |

---

## 🦾 Recursos de Acessibilidade

**Painel Libras** — suporte visual com tradução para Libras  
**Leitura em áudio** — reprodução sonora de informações da interface  
**Ajuste de tamanho de fonte** — botões “A+” e “A–”  
**Modo noturno** — inversão de cores para melhor contraste  
**Design responsivo** — adaptado a diferentes dispositivos  

Esses recursos foram implementados (protótipos) para atender a diferentes públicos, promovendo **inclusão digital** e conformidade com princípios da **Lei Brasileira de Inclusão (LBI)**.

---

## 📂 Estrutura de Pastas

```bash
quickhelp/
│
├── css/
│   ├── style.css
│   ├── style_usuario.css
│
├── js/
│   ├── chamados_usuario.js
│   ├── acessibilidade.js
│
├── img/
│   ├── hand.png
│   ├── sound.png
│   ├── saida.png
│   └── ...
│
├── chamados.php
├── chamados_usuario.php
├── abrir_chamado.php
├── login.php
└── index.php
