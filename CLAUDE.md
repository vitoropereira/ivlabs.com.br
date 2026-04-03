# CLAUDE.md

## What This Is

Site institucional da **IV Labs** (ivlabs.com.br) — inicialmente contendo a(s) Landing Page(s) da Mentoria OpenClaw 2026. Projeto baseado em PHP com Tailwind CSS.

**Objetivo atual:** LP de alta conversão para venda da mentoria de implementação de agentes autônomos com OpenClaw.

**Futuro:** área de membros, dashboard de alunos, integrações com pagamento.

## Tech Stack

- **Backend:** PHP 8.x (vanilla, sem framework por enquanto)
- **Frontend:** HTML5, Tailwind CSS (via CDN), vanilla JavaScript
- **Charts:** Chart.js (via CDN)
- **Server:** Apache com .htaccess (ou `php -S localhost:8000` para dev)
- **Deploy:** a definir

## Architecture

Mapa completo do projeto, skills e fases: **[maps.md](maps.md)**

### Estrutura Futura (PHP Phase)
```
├── index.php               # Router principal
├── includes/
│   ├── header.php          # Nav, meta tags, CSS
│   └── footer.php          # Footer, scripts
├── pages/
│   ├── home.php            # LP principal
│   ├── mentoria.php        # Detalhes da mentoria
│   └── contato.php         # Formulário de contato
├── api/
│   └── lead.php            # Captura de leads
├── assets/
│   ├── css/custom.css      # Estilos além do Tailwind
│   └── js/main.js          # JS global
├── data/
│   └── modules.json        # Dados dos módulos da mentoria
└── .env                    # Variáveis de ambiente (não committar)
```

## Development Workflow

### Local Development
```bash
php -S localhost:8000
```

### Code Formatting
- PHP: PSR-12 via php-cs-fixer (hook automático configurado)
- JSON: 4 espaços de indentação
- Install: `composer global require friendsofphp/php-cs-fixer`

### Git Workflow
- Commit messages em inglês
- Conventional commits format
- Usar `/commit`, `/push`, `/pr`, `/ship` commands

## Styling & Design

- **Palette:** Deep Navy (#0b1120), Blue-Purple gradients, Soft Grays
- **Vibe:** Modern AI Corporate — glassmorphism, rounded corners, ample whitespace
- **Framework:** Tailwind CSS via CDN
- **Responsivo:** mobile-first

## Code Preferences

- Linguagem de docs/user-facing: **Português (BR)**
- Linguagem de código/commits: **Inglês**
- Preferir funções sobre classes (PHP vanilla)
- Arquivos focados e single-purpose
- Validar e sanitizar todos os inputs
- Nunca commitar credenciais (.env, API keys)

## Security

- Input sanitization via whitelist patterns
- .htaccess protege contra exploits comuns
- Environment variables para dados sensíveis
- HTTPS redirect em produção
- Nunca expor dados de debug em produção
