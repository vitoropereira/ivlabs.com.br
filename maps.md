# Project Map — ivlabs.com.br

## Estrutura

```
ivlabs.com.br/
├── .claude/
│   ├── agents/                  # Subagentes especializados (vazio, pronto para agents PHP)
│   ├── commands/                # Slash commands: commit, push, pr, ship
│   ├── skills/                  # 25 skills de marketing/SEO/copywriting
│   │   ├── ad-creative/         # Criação de anúncios (Meta, Google, TikTok)
│   │   ├── ai-discoverability-audit/  # Auditoria de presença em LLMs
│   │   ├── ai-seo/             # SEO otimizado para IA
│   │   ├── article-writing/    # Redação de artigos longos
│   │   ├── case-study-builder/ # Construção de cases de sucesso
│   │   ├── cold-email/         # Cold emails com frameworks de conversão
│   │   ├── cold-outreach-sequence/ # Sequências de outreach multicanal
│   │   ├── content-engine/     # Motor de conteúdo em escala
│   │   ├── content-idea-generator/ # Geração de ideias de conteúdo
│   │   ├── content-strategy/   # Estratégia editorial
│   │   ├── copy-editing/       # Revisão e edição de texto
│   │   ├── copywriting/        # Copy de vendas (PAS, AIDA, etc.)
│   │   ├── daily-briefing-builder/ # Briefings diários automatizados
│   │   ├── de-ai-ify/          # Humanização de texto gerado por IA
│   │   ├── deep-research/      # Pesquisa profunda com agentes
│   │   ├── email-sequence/     # Sequências de email marketing
│   │   ├── launch-strategy/    # Estratégia de lançamento
│   │   ├── marketing-copy/     # Copy para materiais de marketing
│   │   ├── marketing-ideas/    # Brainstorm de ideias de marketing
│   │   ├── marketing-principles/ # Princípios fundamentais de marketing
│   │   ├── marketing-psychology/ # Psicologia aplicada ao marketing
│   │   ├── seo-audit/          # Auditoria SEO completa
│   │   ├── seo-technical/      # SEO técnico (structured data, etc.)
│   │   ├── social-content/     # Conteúdo para redes sociais
│   │   └── summarize/          # Resumo de textos longos
│   └── settings.local.json     # Permissões + hook auto-format PHP/JSON
├── index.html                   # LP principal da Mentoria OpenClaw
├── gpt-v1.html                  # Versão anterior da LP (referência)
├── CLAUDE.md                    # Instruções para Claude Code
├── maps.md                      # Este arquivo — mapa do projeto
└── README.md                    # Documentação da mentoria OpenClaw 2026
```

## Stack

| Camada | Tecnologia |
|--------|-----------|
| Backend | PHP 8.x (vanilla) |
| Frontend | HTML5, Tailwind CSS (CDN), vanilla JS |
| Charts | Chart.js (CDN) |
| Server | Apache (.htaccess) ou `php -S localhost:8000` |
| Formatting | php-cs-fixer (PSR-12) via hook automático |

## Fase Atual

**LP Phase** — landing page(s) estática(s) para venda da mentoria. Ainda em HTML puro, migração para PHP planejada.

## Próximas Fases

1. **PHP Migration** — router index.php, includes (header/footer), pages separadas
2. **Multi-LP** — LPs específicas por persona (empreendedor, freelancer, criador)
3. **Área de Membros** — login, dashboard de alunos, conteúdo protegido
4. **Integrações** — pagamento, email marketing, CRM
