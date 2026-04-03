# Mentoria OpenClaw 2026

> Em 1 sabado voce sai com um assistente de IA funcionando no seu celular via Telegram — que organiza sua agenda, gera relatorios e automatiza tarefas do seu negocio. Nas 2 semanas seguintes, a gente refina juntos.

---

## Indice

- [Sobre](#sobre)
- [Formato](#formato)
- [Estrutura do Repositorio](#estrutura-do-repositorio)
- [Roteiros das Aulas](#roteiros-das-aulas)
- [Materiais de Setup](#materiais-de-setup)
- [Apresentacoes](#apresentacoes)
- [Casos de Uso](#casos-de-uso)
- [Troubleshooting](#troubleshooting)
- [Documentacao e Specs](#documentacao-e-specs)
- [Scripts](#scripts)
- [Como Contribuir](#como-contribuir)

---

## Sobre

Mentoria pratica que ensina profissionais nao-tecnicos a configurar um agente de IA pessoal usando [OpenClaw](https://openclaw.ai). O agente roda em VPS propria, conecta com Telegram e Google Calendar, e executa tarefas automaticamente — briefings diarios, relatorios semanais, monitoramento proativo.

**Publico-alvo:** empreendedores (1-3 funcionarios), freelancers, criadores de conteudo, profissionais buscando produtividade.

**Pre-requisito tecnico:** zero. Notebook com internet, conta no Telegram e conta Google.

**Parceria:** Vitor (apresentador/instrutor) + Isaque (suporte tecnico ao vivo).

---

## Formato

| Momento                                     | Duracao | Entregavel do aluno                     |
| ------------------------------------------- | ------- | --------------------------------------- |
| Sabado — Bloco 1: Seu Agente Nasceu         | 50min   | Agente rodando + identidade configurada |
| Sabado — Bloco 2: Conectando ao Mundo       | 50min   | Telegram + Google Agenda integrados     |
| Sabado — Bloco 3: Automatizando Seu Negocio | 50min   | 1 automacao + cron rodando              |
| Sabado — Bloco 4: Blindando e Planejando    | 30min   | Debug + watchdog + plano de acao        |
| Follow-up 1 (semana +1)                     | 40min   | Problemas resolvidos + agente otimizado |
| Follow-up 2 (semana +2)                     | 40min   | Resultados documentados + visao B2B     |

**Total:** ~5h10 de contato (3h50 no sabado + 1h20 de follow-up)

---

## Estrutura do Repositorio

```
mentoria-openclaw-2026/
│
├── roteiro/                          # Roteiros minuto-a-minuto do instrutor
│   ├── bloco-1-seu-agente-nasceu.md
│   ├── bloco-2-conectando-ao-mundo.md
│   ├── bloco-3-automatizando-seu-negocio.md
│   ├── bloco-4-blindando-e-planejando.md
│   ├── followup-1.md
│   └── followup-2.md
│
├── materiais/
│   ├── setup/                        # Templates e checklists
│   │   ├── template-SOUL.md
│   │   ├── template-USER.md
│   │   ├── template-MEMORY.md
│   │   ├── template-cron-briefing-diario.json
│   │   ├── template-cron-watchdog.json
│   │   ├── template-heartbeat.md
│   │   ├── guia-vps-setup.md
│   │   ├── checklist-pre-mentoria.md
│   │   └── checklist-aluno-dia.md
│   ├── apresentacao/                 # Slides HTML gerados no Claude Cowork
│   │   ├── bloco1-seu-agente-nasceu.html
│   │   ├── bloco2-conectando-ao-mundo.html
│   │   ├── bloco3-automatizando-seu-negocio.html
│   │   ├── bloco4-blindando-e-planejando.html
│   │   ├── followup1-primeira-semana-real.html
│   │   ├── followup2-primeiros-resultados.html
│   │   ├── mentoria-openclaw.skill
│   │   └── slides/                   # 60 slides individuais
│   ├── divulgacao/                   # Materiais de marketing
│   │   ├── pitch-vendas.md
│   │   └── posts-instagram.md
│   └── feedback/
│       └── formulario-pos-mentoria.md
│
├── casos-de-uso/                     # Guias por perfil de aluno
│   ├── empreendedor.md
│   ├── produtividade-pessoal.md
│   ├── criador-de-conteudo.md
│   └── empresario-b2b.md
│
├── troubleshooting/
│   └── problemas-comuns.md           # Guia de problemas para instrutores
│
├── docs/
│   ├── specs/                        # Especificacoes e planos
│   │   ├── 2026-03-28-mentoria-openclaw-design.md
│   │   └── 2026-03-28-mentoria-openclaw-plan.md
│   ├── apresentacoes/                # Prompts para gerar slides no Cowork
│   │   ├── README.md
│   │   ├── design-system.md
│   │   ├── 00-contexto-cowork.md
│   │   └── 01-06 (prompts por bloco)
│   └── other/                        # Regras, termos e transcricoes
│       ├── 10-regras-inviolaveis.md
│       └── transcricoes/
│
├── scripts/
│   └── setup-vps-aluno.sh            # Provisionamento automatico de VPS
│
├── CLAUDE.md                         # Instrucoes para Claude Code
└── README.md                         # Voce esta aqui
```

---

## Roteiros das Aulas

Cada arquivo em `roteiro/` e um script completo para o instrutor, contendo:

- **Objetivo** do bloco
- **Preparacao** (checklists do que ter pronto)
- **Minuto a minuto** (timing exato de cada atividade)
- **Falas do Vitor** (o que dizer em cada momento)
- **Instrucoes do Isaque** (o que monitorar, como ajudar)
- **Prompts de demo** (comandos para demonstrar ao vivo)
- **Troubleshooting** (problemas comuns e solucoes rapidas)
- **Checkpoint** (o que o aluno deve ter ao final)

| Roteiro                             | Arquivo                                                                                        |
| ----------------------------------- | ---------------------------------------------------------------------------------------------- |
| Bloco 1 — Seu Agente Nasceu         | [`roteiro/bloco-1-seu-agente-nasceu.md`](roteiro/bloco-1-seu-agente-nasceu.md)                 |
| Bloco 2 — Conectando ao Mundo       | [`roteiro/bloco-2-conectando-ao-mundo.md`](roteiro/bloco-2-conectando-ao-mundo.md)             |
| Bloco 3 — Automatizando Seu Negocio | [`roteiro/bloco-3-automatizando-seu-negocio.md`](roteiro/bloco-3-automatizando-seu-negocio.md) |
| Bloco 4 — Blindando e Planejando    | [`roteiro/bloco-4-blindando-e-planejando.md`](roteiro/bloco-4-blindando-e-planejando.md)       |
| Follow-up 1 — Primeira Semana Real  | [`roteiro/followup-1.md`](roteiro/followup-1.md)                                               |
| Follow-up 2 — Primeiros Resultados  | [`roteiro/followup-2.md`](roteiro/followup-2.md)                                               |

---

## Materiais de Setup

### Templates (copiados para a VPS do aluno)

| Arquivo                                                                                    | Funcao                               | Usado no |
| ------------------------------------------------------------------------------------------ | ------------------------------------ | -------- |
| [`template-SOUL.md`](materiais/setup/template-SOUL.md)                                     | Personalidade e identidade do agente | Bloco 1  |
| [`template-USER.md`](materiais/setup/template-USER.md)                                     | Contexto sobre o dono do agente      | Bloco 1  |
| [`template-MEMORY.md`](materiais/setup/template-MEMORY.md)                                 | Estrutura de memoria basica          | Bloco 2  |
| [`template-cron-briefing-diario.json`](materiais/setup/template-cron-briefing-diario.json) | Automacao de briefing matinal        | Bloco 3  |
| [`template-cron-watchdog.json`](materiais/setup/template-cron-watchdog.json)               | Cron que vigia outros crons          | Bloco 4  |
| [`template-heartbeat.md`](materiais/setup/template-heartbeat.md)                           | Monitoramento proativo               | Bloco 3  |

### Checklists

| Arquivo                                                                  | Para quem    | Quando         |
| ------------------------------------------------------------------------ | ------------ | -------------- |
| [`checklist-pre-mentoria.md`](materiais/setup/checklist-pre-mentoria.md) | Vitor/Isaque | 3 dias antes   |
| [`checklist-aluno-dia.md`](materiais/setup/checklist-aluno-dia.md)       | Aluno        | Noite anterior |
| [`guia-vps-setup.md`](materiais/setup/guia-vps-setup.md)                 | Vitor/Isaque | Setup da VPS   |

---

## Apresentacoes

Slides HTML interativos no estilo [Cognitum](https://cognitum.one/seed) — dark mode, navegacao por setas, notas do apresentador e prompts de demo copiaveis.

| Apresentacao                  | Slides | Arquivo                                                                                                 |
| ----------------------------- | ------ | ------------------------------------------------------------------------------------------------------- |
| Bloco 1 — Seu Agente Nasceu   | 11     | [`bloco1-seu-agente-nasceu.html`](materiais/apresentacao/bloco1-seu-agente-nasceu.html)                 |
| Bloco 2 — Conectando ao Mundo | 12     | [`bloco2-conectando-ao-mundo.html`](materiais/apresentacao/bloco2-conectando-ao-mundo.html)             |
| Bloco 3 — Automatizando       | 11     | [`bloco3-automatizando-seu-negocio.html`](materiais/apresentacao/bloco3-automatizando-seu-negocio.html) |
| Bloco 4 — Blindando           | 9      | [`bloco4-blindando-e-planejando.html`](materiais/apresentacao/bloco4-blindando-e-planejando.html)       |
| Follow-up 1                   | 8      | [`followup1-primeira-semana-real.html`](materiais/apresentacao/followup1-primeira-semana-real.html)     |
| Follow-up 2                   | 9      | [`followup2-primeiros-resultados.html`](materiais/apresentacao/followup2-primeiros-resultados.html)     |

**Como usar:** abrir o HTML no Chrome, F11 (fullscreen), setas para navegar.

**Como regenerar/editar:** ver [`docs/apresentacoes/README.md`](docs/apresentacoes/README.md) — prompts prontos para o Claude Cowork.

---

## Casos de Uso

Guias detalhados com cenarios reais, configuracoes e ROI estimado para cada perfil:

| Perfil                   | Casos                                                          | Arquivo                                                             |
| ------------------------ | -------------------------------------------------------------- | ------------------------------------------------------------------- |
| Empreendedor (1-3 func.) | Briefing diario, relatorio semanal, pesquisa de concorrencia   | [`empreendedor.md`](casos-de-uso/empreendedor.md)                   |
| Produtividade Pessoal    | Assistente de agenda, organizador de tarefas, resumo de emails | [`produtividade-pessoal.md`](casos-de-uso/produtividade-pessoal.md) |
| Criador de Conteudo      | Content waterfall, monitor de metricas, banco de ideias        | [`criador-de-conteudo.md`](casos-de-uso/criador-de-conteudo.md)     |
| Empresario B2B           | Teaser para implementacao empresarial                          | [`empresario-b2b.md`](casos-de-uso/empresario-b2b.md)               |

---

## Troubleshooting

[`troubleshooting/problemas-comuns.md`](troubleshooting/problemas-comuns.md) — guia completo para instrutores com problemas organizados por severidade:

- **Criticos:** SSH nao conecta, OpenClaw nao responde, bot do Telegram mudo
- **Importantes:** cron nao executa, agente esquece contexto, OAuth falha
- **Moderados:** agente responde generico, resposta lenta, IP bloqueado

Cada problema tem: sintoma, causa, solucao passo-a-passo e prevencao.

---

## Documentacao e Specs

| Documento                                                                                     | Descricao                                             |
| --------------------------------------------------------------------------------------------- | ----------------------------------------------------- |
| [`2026-03-28-mentoria-openclaw-design.md`](docs/specs/2026-03-28-mentoria-openclaw-design.md) | Spec canonica — formato, pricing, curriculo, decisoes |
| [`2026-03-28-mentoria-openclaw-plan.md`](docs/specs/2026-03-28-mentoria-openclaw-plan.md)     | Plano de implementacao com tarefas                    |
| [`docs/apresentacoes/`](docs/apresentacoes/)                                                  | Prompts e design system para gerar slides no Cowork   |
| [`docs/other/10-regras-inviolaveis.md`](docs/other/10-regras-inviolaveis.md)                  | Regras fundamentais do agente                         |
| [`docs/other/transcricoes/`](docs/other/transcricoes/)                                        | Transcricoes de referencia do curso Bruno Okamoto     |

---

## Scripts

### `setup-vps-aluno.sh`

Script automatizado para provisionar VPS de alunos. Instala Node.js, OpenClaw, configura firewall, cria usuario, copia templates e configura API key.

```bash
# Rodar como root na VPS Ubuntu 22.04+
bash setup-vps-aluno.sh <NOME_DO_ALUNO>
```

Ao final, exibe IP, usuario, senha e instrucoes de acesso.

---

## Como Contribuir

Este e um repositorio de conteudo, nao de codigo. Para contribuir:

1. Criar branch a partir de `main`
2. Editar os arquivos markdown relevantes
3. Abrir PR com descricao do que mudou e por que

Convencoes:

- Nomes de arquivos em kebab-case portugues
- Conteudo em portugues brasileiro (sem acentos nos nomes de arquivos)
- Specs prefixadas com data (`YYYY-MM-DD-*`)
- Checklists usam `- [ ]` / `- [x]`
