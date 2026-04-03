# Mentoria OpenClaw LP Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Build a high-conversion landing page for Mentoria OpenClaw 2026, capturing leads via email waitlist.

**Architecture:** Single PHP file (`index.php`) with 11 content sections, Tailwind CSS via CDN, vanilla JS for FAQ accordion and smooth scroll. No external dependencies beyond Tailwind CDN. Mobile-first responsive design.

**Tech Stack:** PHP 8.x, Tailwind CSS (CDN), vanilla JavaScript

**Spec:** `docs/superpowers/specs/2026-04-02-mentoria-openclaw-lp-design.md`

---

## File Structure

```
index.php          # Full LP (all 11 sections + navbar + footer + JS)
```

Single file. All HTML, inline `<style>` for custom scrollbar, and `<script>` for FAQ accordion + smooth scroll at the bottom.

---

### Task 1: Scaffold index.php with head, Tailwind CDN, and custom styles

**Files:**
- Create: `index.php`

- [ ] **Step 1: Create index.php with DOCTYPE, head, meta tags, Tailwind CDN, and custom styles**

```php
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentoria OpenClaw 2026 — Seu Assistente de IA em 1 Sábado</title>
    <meta name="description" content="Mentoria prática: saia com seu assistente de IA pessoal funcionando no Telegram em 1 sábado. Sem precisar programar.">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            scroll-behavior: smooth;
        }
        ::-webkit-scrollbar {
            width: 10px;
        }
        ::-webkit-scrollbar-track {
            background: #f3f4f6;
        }
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 5px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
    </style>
</head>
<body class="antialiased bg-white text-gray-900 font-sans">

<!-- Content will be added in subsequent tasks -->

</body>
</html>
```

- [ ] **Step 2: Verify it loads**

Run: `php -S localhost:8000` and open `http://localhost:8000` in browser.
Expected: Blank white page, no errors in console.

- [ ] **Step 3: Commit**

```bash
git add index.php
git commit -m "feat: scaffold index.php with head, Tailwind CDN, and custom styles"
```

---

### Task 2: Navbar with glassmorphism

**Files:**
- Modify: `index.php`

- [ ] **Step 1: Add navbar HTML right after opening body tag**

Replace `<!-- Content will be added in subsequent tasks -->` with the navbar. Include: IV Labs brand with gradient star, desktop nav links (Para quem e, Como funciona, Mentor, FAQ), gradient CTA button "Entrar na lista", mobile hamburger button, and collapsible mobile menu.

The navbar uses: `bg-white/80 backdrop-blur-md shadow-sm sticky top-0 z-40 border-b border-gray-100`. Desktop links are `hidden md:flex`. Mobile hamburger is `md:hidden`. Mobile menu is `hidden md:hidden` and toggled via JS onclick.

- [ ] **Step 2: Verify in browser**

Reload page. Expected: Sticky navbar with glassmorphism, hamburger on mobile, nav links on desktop.

- [ ] **Step 3: Commit**

```bash
git add index.php
git commit -m "feat: add glassmorphism navbar with brand and navigation"
```

---

### Task 3: Section 1 — Hero (dark)

**Files:**
- Modify: `index.php`

- [ ] **Step 1: Add hero section after navbar**

Hero uses `bg-[#0b1120]` dark background with CSS glow orb (gradient blur div). Contains:
- Badge: "Proxima turma em breve - Vagas limitadas" with pulse dot
- H1: "Saia com seu assistente de IA funcionando no celular." with gradient text on "assistente de IA"
- Subheadline paragraph
- Email capture form with inline input + "Entrar na lista" button. Form uses `onsubmit="return handleFormSubmit(event, this)"` (JS added in Task 14)
- Trust badges row: "Sem codigo", "Funciona no Telegram", "Resultado no mesmo dia", "+ 2 follow-ups"

All text in Portuguese BR. Mobile responsive with `text-4xl sm:text-5xl md:text-7xl` for headline.

- [ ] **Step 2: Verify in browser**

Expected: Dark hero with glow, headline, email form, badges.

- [ ] **Step 3: Commit**

```bash
git add index.php
git commit -m "feat: add hero section with email capture and trust badges"
```

---

### Task 4: Section 2 — Stats Bar

**Files:**
- Modify: `index.php`

- [ ] **Step 1: Add stats bar section after hero**

White background, `grid grid-cols-2 md:grid-cols-4`. Four stats with `md:border-l border-gray-100` separators:
- 10+ anos construindo solucoes digitais
- 8+ plataformas SaaS entregues em producao
- 2.000+ clientes atendidos
- 200+ automacoes implementadas

Numbers use `text-4xl sm:text-5xl font-extrabold`. Labels use `text-sm text-gray-500`.

- [ ] **Step 2: Verify in browser**

Expected: 4-column stats on desktop, 2-column on mobile.

- [ ] **Step 3: Commit**

```bash
git add index.php
git commit -m "feat: add stats bar with credibility numbers"
```

---

### Task 5: Section 3 — Para quem e

**Files:**
- Modify: `index.php`

- [ ] **Step 1: Add persona section with id="para-quem"**

White background. Headline: "Essa mentoria e para quem quer usar IA de verdade". Grid `grid-cols-1 sm:grid-cols-2 xl:grid-cols-4`. Four cards with `bg-gray-50 rounded-[2rem]`: Empreendedores, Freelancers, Criadores de Conteudo, Nao tecnicos. Each has emoji icon, title, description.

- [ ] **Step 2: Verify in browser**

Expected: 4 persona cards responsive.

- [ ] **Step 3: Commit**

```bash
git add index.php
git commit -m "feat: add persona section"
```

---

### Task 6: Section 4 — O que trava

**Files:**
- Modify: `index.php`

- [ ] **Step 1: Add pain points section**

Gray background (`bg-gray-50`). Headline: "O que normalmente trava quem tenta sozinho". Grid `grid-cols-1 sm:grid-cols-2 max-w-[680px] mx-auto`. Four white cards with red-tinted icon containers (`bg-red-50`): Muito conteudo/pouca direcao, Medo de quebrar tudo, IA sem utilidade pratica, Falta de acompanhamento.

- [ ] **Step 2: Verify in browser**

Expected: 2x2 centered grid with red-accent icons.

- [ ] **Step 3: Commit**

```bash
git add index.php
git commit -m "feat: add pain points section"
```

---

### Task 7: Section 5 — O que voce sai com

**Files:**
- Modify: `index.php`

- [ ] **Step 1: Add deliverables section**

White background. Headline: "No final do sabado, voce ja sai com isso funcionando". Same grid layout as section 4 but with `bg-blue-50` icon containers. Four cards: Seu agente pessoal rodando, Telegram conectado, Agenda integrada, 1 automacao funcionando.

- [ ] **Step 2: Verify in browser**

Expected: 2x2 centered grid with blue-accent icons.

- [ ] **Step 3: Commit**

```bash
git add index.php
git commit -m "feat: add deliverables section"
```

---

### Task 8: Section 6 — Casos de uso

**Files:**
- Modify: `index.php`

- [ ] **Step 1: Add use cases section**

Gray background. Headline: "O que seu assistente pode fazer por voce". Grid `grid-cols-1 sm:grid-cols-2 xl:grid-cols-4` centered text. Four cards: Briefing diario, Relatorio semanal, Alertas proativos, Apoio nas decisoes.

After cards, add Telegram highlight banner: `bg-gradient-to-r from-blue-50 to-purple-50 rounded-[2rem]` with chat emoji and "Tudo pelo Telegram" text.

- [ ] **Step 2: Verify in browser**

Expected: 4 use-case cards + Telegram banner below.

- [ ] **Step 3: Commit**

```bash
git add index.php
git commit -m "feat: add use cases section with Telegram highlight"
```

---

### Task 9: Section 7 — Como funciona

**Files:**
- Modify: `index.php`

- [ ] **Step 1: Add timeline section with id="como-funciona"**

White background. Headline: "Como a mentoria funciona".

Saturday phase: Dark label pill "SABADO — DIA PRINCIPAL" with `~3h ao vivo`. Grid `grid-cols-1 sm:grid-cols-2 lg:grid-cols-4`. Four blocks with emoji, "Bloco N" title, gradient subtitle, description, and time badge in corner.

Follow-ups phase: Gradient label pill "FOLLOW-UPS — SEMANAS SEGUINTES" with `40 min cada`. Grid `grid-cols-1 sm:grid-cols-2`. Two cards with purple-tinted background (`from-gray-50 to-purple-50/50 border-purple-100`).

- [ ] **Step 2: Verify in browser**

Expected: Two-phase timeline with labeled sections.

- [ ] **Step 3: Commit**

```bash
git add index.php
git commit -m "feat: add timeline section"
```

---

### Task 10: Section 8 — Nao precisa programar (dark banner)

**Files:**
- Modify: `index.php`

- [ ] **Step 1: Add no-code banner section**

Gray background wrapper. Centered `max-w-[640px]` dark banner with `bg-gradient-to-br from-[#0f172a] to-[#1e1b4b] rounded-[2rem]`. CSS glow orbs (absolute positioned blurred divs). Headline: "Voce nao precisa saber programar". Subtitle. Four prerequisite badges: Notebook com internet, Conta no Telegram, Conta Google, Vontade de colocar no ar.

- [ ] **Step 2: Verify in browser**

Expected: Dark banner centered in gray section with glow effects.

- [ ] **Step 3: Commit**

```bash
git add index.php
git commit -m "feat: add no-code required banner section"
```

---

### Task 11: Section 9 — Quem te guia (Mentor)

**Files:**
- Modify: `index.php`

- [ ] **Step 1: Add mentor section with id="mentor"**

White background. Grid `grid-cols-1 lg:grid-cols-2`.

Left column: Bio card (`bg-gray-50 rounded-[2rem]`) with "Seu mentor" badge, "Vitor Pereira" name, subtitle, philosophy paragraph, 5 credentials with star bullet (10+ anos, 8+ SaaS, 2.000+ clientes, 200+ automacoes, CTO desde 2015).

Right column: Two stacked cards. Top: gradient card (`from-indigo-500 to-purple-600`) with quote about "esta funcionando no meu celular". Bottom: products card with 8 product name tags (AjudaJa, SGCM, 4trip, ChatMatrix, DataClarity IA, ClearSeg, Calvino, Auralooks).

- [ ] **Step 2: Verify in browser**

Expected: 2-column layout with bio and quote/products.

- [ ] **Step 3: Commit**

```bash
git add index.php
git commit -m "feat: add mentor bio section with credentials and products"
```

---

### Task 12: Section 10 — FAQ

**Files:**
- Modify: `index.php`

- [ ] **Step 1: Add FAQ section with id="faq"**

Gray background. Headline: "Perguntas frequentes". Centered `max-w-2xl`.

Six FAQ items, each a div with `bg-white rounded-2xl border border-gray-100`. Each contains a button with question text and +/- icon, and a hidden answer div. Button uses `onclick="toggleFaq(this)"` (JS in Task 14).

Questions and answers:
1. Preciso saber programar? - Nao, desenhada para nao tecnicos.
2. Eu saio com algo funcionando mesmo? - Sim, assistente rodando no Telegram.
3. Serve so para quem tem empresa? - Nao, freelancers e criadores tambem.
4. E se eu travar depois do sabado? - 2 follow-ups nas semanas seguintes.
5. Quanto custa manter o agente rodando? - R$ 50-100/mes VPS + API.
6. E presencial ou online? - Online ao vivo.

- [ ] **Step 2: Verify in browser**

Expected: 6 FAQ items displayed (accordion JS added in Task 14).

- [ ] **Step 3: Commit**

```bash
git add index.php
git commit -m "feat: add FAQ accordion section"
```

---

### Task 13: Section 11 — CTA Final + Footer

**Files:**
- Modify: `index.php`

- [ ] **Step 1: Add CTA final section with id="cta-final"**

White background wrapper. Centered `max-w-[640px]` dark banner (`bg-[#0b1120] rounded-[2rem]`) with glow orb. Headline with gradient text: "Se voce quer parar de so testar IA e comecar a usar IA de verdade, essa mentoria e para voce." Subtitle. Email capture form (same structure as hero form, uses `handleFormSubmit`). "Vagas limitadas" note.

- [ ] **Step 2: Add footer after CTA section**

Footer with `bg-white pt-16 pb-10 border-t`. Grid `grid-cols-1 md:grid-cols-2`. Left: IV Labs brand, description, social links (Instagram, LinkedIn, WhatsApp). Right: CTA card (`bg-gray-50 rounded-[2rem]`) with "Pronto para montar o seu?" and link to #cta-final. Bottom bar: copyright 2026 IV Labs, Termos and Privacidade links.

- [ ] **Step 3: Verify in browser**

Expected: Dark CTA banner + complete footer.

- [ ] **Step 4: Commit**

```bash
git add index.php
git commit -m "feat: add CTA final section and footer"
```

---

### Task 14: Add JavaScript (FAQ accordion, form handler, smooth scroll)

**Files:**
- Modify: `index.php`

- [ ] **Step 1: Add script block before closing body tag**

Three functions:

`toggleFaq(button)`: Finds parent `.faq-item`, gets `.faq-answer` and `.faq-icon`. Closes all FAQ items first (add `hidden` to all answers, set all icons to `+`). If clicked item was not open, opens it (remove `hidden`, set icon to `-` character).

`handleFormSubmit(event, form)`: Prevents default. Gets email value from `input[name="email"]`. If email exists, replaces form content with success message using `textContent` on a created paragraph element with green text: "Pronto! Voce esta na lista. Fique de olho no seu email."

Smooth scroll: Query all `a[href^="#"]`, add click listener. Get target element from href, if exists call `scrollIntoView({ behavior: 'smooth', block: 'start' })`.

- [ ] **Step 2: Test FAQ accordion**

Click each FAQ question. Expected: Answer toggles. Only one open at a time. Icon switches +/-.

- [ ] **Step 3: Test email forms**

Submit email in hero and CTA forms. Expected: Success message replaces form.

- [ ] **Step 4: Test smooth scroll**

Click navbar links. Expected: Smooth scroll to sections.

- [ ] **Step 5: Commit**

```bash
git add index.php
git commit -m "feat: add FAQ accordion, form handler, and smooth scroll JS"
```

---

### Task 15: Final review and cleanup

**Files:**
- Modify: `index.php`

- [ ] **Step 1: Remove old index.html**

```bash
git rm index.html 2>/dev/null || true
```

- [ ] **Step 2: Full page walkthrough**

Open `http://localhost:8000` and verify all 11 sections render correctly:
- Navbar: glassmorphism, sticky, mobile menu works
- Hero: dark, glow, headline, email form, badges
- Stats: 4 numbers
- Personas: 4 cards
- Pain points: 2x2 red icons
- Deliverables: 2x2 blue icons
- Use cases: 4 cards + Telegram banner
- Timeline: Saturday blocks + follow-ups
- No-code banner: dark centered
- Mentor: bio + quote + products
- FAQ: accordion works
- CTA final: email form works
- Footer: complete

Test at mobile (375px), tablet (768px), desktop (1280px) viewports.

- [ ] **Step 3: Commit final version**

```bash
git add -A
git commit -m "feat: complete Mentoria OpenClaw 2026 landing page

11-section high-conversion LP with email waitlist capture,
hybrid dark/light design, mobile-responsive layout."
```
