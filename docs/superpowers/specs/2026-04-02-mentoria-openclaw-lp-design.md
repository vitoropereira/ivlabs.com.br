# Spec: Landing Page — Mentoria OpenClaw 2026

**Data:** 2026-04-02
**Status:** Aprovado pelo usuário
**Arquivo de saída:** `index.php` (substituirá o `index.html` atual)

---

## Objetivo

Landing page de alta conversão para captura de leads (lista de espera) da Mentoria OpenClaw 2026 — mentoria prática onde o participante sai com seu próprio assistente de IA pessoal funcionando no Telegram em 1 sábado.

## Público-alvo

Profissionais **não técnicos**:
- Empreendedores — organizar agenda, tarefas, operações
- Freelancers — reduzir bagunça, automatizar repetições
- Criadores de conteúdo — IA como apoio na rotina criativa
- Pessoas não técnicas — usar IA com estrutura, sem tutoriais soltos

## Promessa central

> "Saia com seu assistente de IA funcionando no celular em 1 sábado."

## CTA / Conversão

- **Tipo:** Captura de email (lista de espera)
- **Posição:** Hero (acima da dobra) + CTA final (fechamento)
- **Copy do botão:** "Entrar na lista"
- **Sem preço** na LP — ainda não está vendendo diretamente

## Mentor

**Vitor Pereira** (solo, sem co-mentor)
- Senior Full-Stack Engineer, CTO, AI Specialist
- 10+ anos construindo soluções digitais
- 8+ plataformas SaaS entregues (AjudaJá, SGCM, 4trip, ChatMatrix, DataClarity IA, ClearSeg, Calvino, Auralooks)
- 2.000+ clientes atendidos
- 200+ automações implementadas
- CTO desde 2015 — I.V. Tecnologias Web

## Formato da mentoria

- **Dia principal:** 1 sábado (~3h ao vivo, online)
  - Bloco 1 (50 min): Seu agente nasce — sobe a base, define identidade
  - Bloco 2 (50 min): Conectando ao mundo — Telegram + Google Agenda
  - Bloco 3 (50 min): Automatizando — monta automação prática
  - Bloco 4 (30 min): Blindando — estabilidade e plano de evolução
- **Follow-ups:** 2 encontros nas semanas seguintes (40 min cada)
  - Follow-up 1: Corrigir erros do uso real, otimizar
  - Follow-up 2: Consolidar resultados, visão de longo prazo

---

## Design Visual

### Direção
**Híbrido Moderno** — Hero escuro impactante + seções claras no conteúdo. Referências: Vercel, Stripe, Superhuman.

### Estilo
- Minimalista, performance first, sem animações pesadas
- Tailwind CSS via CDN
- Sem GSAP, sem partículas, sem efeitos de scroll
- Mobile-first, responsivo
- Palette: Deep Navy (#0b1120), Blue-Purple gradients, Soft Grays
- Glassmorphism na navbar
- Cards com rounded-[2rem], bordas sutis, hover states limpos

### Brand
- **Nome na navbar:** "IV Labs" (não "OpenClaw Mentoria")
- **Linguagem:** Português BR, acessível, sem jargão técnico
- **Tom:** Direto, confiante, prático

---

## Estrutura da LP — 11 Seções

### 1. Hero (dark)
- **Fundo:** #0b1120 com glow orbs CSS
- **Navbar:** Glassmorphism, links (Para quem é, Como funciona, Mentor, FAQ), CTA "Entrar na lista"
- **Badge:** "Próxima turma em breve - Vagas limitadas" com pulse dot
- **Headline:** "Saia com seu assistente de IA funcionando no celular."
- **Subheadline:** "Em 1 sábado, você configura seu próprio agente de IA no Telegram — conectado à sua agenda, suas tarefas e sua rotina. Sem precisar programar."
- **CTA:** Input email inline + botão "Entrar na lista"
- **Trust badges:** "Sem código", "Funciona no Telegram", "Resultado no mesmo dia", "+ 2 follow-ups"

### 2. Stats Bar (white)
- **Layout:** Grid 4 colunas com separadores verticais
- **Dados:**
  - 10+ anos construindo soluções digitais
  - 8+ plataformas SaaS entregues em produção
  - 2.000+ clientes atendidos
  - 200+ automações implementadas
- **Psicologia:** Bandwagon Effect + Authority Bias

### 3. Para quem é (white)
- **Headline:** "Essa mentoria é para quem quer usar IA de verdade"
- **Sub:** "Não é curso para assistir depois. É para quem quer sair com algo funcionando no mesmo dia."
- **Layout:** Grid 4 colunas
- **Cards:** Empreendedores, Freelancers, Criadores de Conteúdo, Não técnicos
- **Cada card:** Emoji + título + descrição em linguagem do cliente

### 4. O que trava (gray — #f8fafc)
- **Headline:** "O que normalmente trava quem tenta sozinho"
- **Sub:** "O problema quase nunca é falta de vontade. É falta de direção, sequência e acompanhamento."
- **Layout:** Grid 2x2 centralizado (max-width 680px)
- **Cards:** Ícones com fundo vermelho sutil (#fef2f2)
  - Muito conteúdo, pouca direção
  - Medo de quebrar tudo
  - IA sem utilidade prática
  - Falta de acompanhamento
- **Psicologia:** Contrast Effect + Confirmation Bias

### 5. O que você sai com (white)
- **Headline:** "No final do sábado, você já sai com isso funcionando"
- **Sub:** "Nada de curso para assistir depois. A proposta é sair com algo real rodando."
- **Layout:** Grid 2x2 centralizado
- **Cards:** Ícones com fundo azul sutil (#eff6ff)
  - Seu agente pessoal rodando (24/7 na VPS)
  - Telegram conectado ("como um colega de trabalho sempre disponível")
  - Agenda integrada (compromissos, prazos, prioridades)
  - 1 automação funcionando (briefing, relatório ou monitoramento)
- **Psicologia:** Present Bias + Endowment Effect (linguagem de posse: "seu")

### 6. Casos de uso (gray)
- **Headline:** "O que seu assistente pode fazer por você"
- **Sub:** "O objetivo não é só 'ter IA'. É fazer ela trabalhar por você em rotinas reais."
- **Layout:** Grid 4 colunas (text-align center)
- **Cards:**
  - Briefing diário (resumo agenda/tarefas no Telegram)
  - Relatório semanal (pendências, atenção)
  - Alertas proativos (avisa quando algo sai do esperado)
  - Apoio nas decisões ("como um sócio disponível 24h")
- **Banner destaque:** "Tudo pelo Telegram" — "Sem app novo, sem painel complicado. Você manda mensagem e ele responde."
- **Psicologia:** Availability Heuristic + Jobs to Be Done

### 7. Como funciona (white)
- **Headline:** "Como a mentoria funciona"
- **Sub:** "Você entra no sábado para montar seu assistente e continua refinando nas 2 semanas seguintes."
- **Fase 1 — Sábado:** Label "SÁBADO — DIA PRINCIPAL" (~3h ao vivo)
  - Grid 4 colunas com os 4 blocos (ícone, título, subtítulo gradient, descrição, tempo)
- **Fase 2 — Follow-ups:** Label "FOLLOW-UPS — SEMANAS SEGUINTES" (40 min cada)
  - Grid 2 colunas, fundo roxo sutil (#f5f3ff), borda #ede9fe
- **Psicologia:** Activation Energy reduzida + Goal-Gradient Effect

### 8. Não precisa programar (dark banner em fundo gray)
- **Banner centralizado** (max-width 640px) com fundo gradient #0f172a → #1e1b4b
- **Headline:** "Você não precisa saber programar"
- **Sub:** "Essa mentoria foi desenhada para profissionais não técnicos. Você só precisa do básico para entrar — o resto a gente constrói junto."
- **Badges:** Notebook com internet, Conta no Telegram, Conta Google, Vontade de colocar no ar
- **Psicologia:** Regret Aversion + Activation Energy

### 9. Quem te guia (white)
- **Layout:** Grid 2 colunas
- **Coluna esquerda:** Card bio
  - Badge "Seu mentor"
  - Nome: Vitor Pereira
  - Subtítulo: Senior Full-Stack Engineer - CTO - AI Specialist
  - Texto filosofia: "não foi criada para impressionar com jargão"
  - 5 credenciais com ✦: anos, SaaS, clientes, automações, CTO
- **Coluna direita:**
  - Card gradient roxo: "O foco aqui é simples: [...] está funcionando no meu celular."
  - Card produtos: Tags com 8 produtos (AjudaJá, SGCM, 4trip, ChatMatrix, DataClarity IA, ClearSeg, Calvino, Auralooks)
- **Psicologia:** Authority Bias + Pratfall Effect

### 10. FAQ (gray)
- **Headline:** "Perguntas frequentes"
- **Sub:** "O que normalmente as pessoas querem saber antes de entrar."
- **Layout:** Lista centralizada (max-width 600px), accordion expand/collapse
- **6 perguntas:**
  1. Preciso saber programar? → Não
  2. Eu saio com algo funcionando mesmo? → Sim
  3. Serve só para quem tem empresa? → Não
  4. E se eu travar depois do sábado? → 2 follow-ups
  5. Quanto custa manter o agente rodando? → R$ 50-100/mês
  6. É presencial ou online? → Online ao vivo
- **Psicologia:** Regret Aversion + Objection Handling

### 11. CTA Final (dark banner em fundo white)
- **Banner** (max-width 640px) com fundo #0b1120, glow orbs
- **Headline:** "Se você quer parar de só testar IA e começar a usar IA de verdade, essa mentoria é para você."
- **Sub:** "Em vez de continuar perdido entre ferramentas e tutoriais, você sai com um assistente pessoal funcionando no seu celular e um caminho claro para evoluir."
- **CTA:** Input email + botão "Entrar na lista"
- **Rodapé:** "Vagas limitadas por turma. Sem spam, só atualizações da mentoria."
- **Psicologia:** Loss Aversion + Commitment & Consistency

---

## Footer

- Brand "IV Labs"
- Descrição curta da mentoria
- Links: Instagram, LinkedIn, WhatsApp
- Card "Pronto para montar o seu?" com CTA "Entrar na lista"
- Copyright 2026, links Termos e Privacidade

---

## Tech Stack

- **Arquivo:** `index.php` (single file para fase atual)
- **CSS:** Tailwind CSS via CDN
- **JS:** Vanilla JS (accordion FAQ, smooth scroll, navbar)
- **Sem dependências externas** além do Tailwind CDN
- **Sem Chart.js** (removido — não faz sentido para público não-técnico)
- **Formulário de captura:** POST para endpoint a definir (pode ser integração futura com email marketing)
- **Performance:** Sem bibliotecas de animação, sem webfonts externas, sem imagens pesadas

---

## Fora do escopo

- Página de pagamento/checkout
- Área de membros
- Integração real com email marketing (formulário será estrutural, backend futuro)
- Versões por persona (Multi-LP)
- Foto do mentor (não fornecida)
