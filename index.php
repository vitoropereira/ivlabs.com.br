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

<!-- Navbar -->
<nav class="bg-white/80 backdrop-blur-md shadow-sm sticky top-0 z-40 border-b border-gray-100">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Brand -->
            <a href="#inicio" class="flex items-center gap-2 font-bold text-xl text-gray-900">
                <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">&#10022;</span>
                IV Labs
            </a>

            <!-- Desktop Nav Links -->
            <div class="hidden md:flex items-center gap-8">
                <a href="#para-quem" class="text-sm text-gray-600 hover:text-gray-900 transition-colors">Para quem é</a>
                <a href="#como-funciona" class="text-sm text-gray-600 hover:text-gray-900 transition-colors">Como funciona</a>
                <a href="#mentor" class="text-sm text-gray-600 hover:text-gray-900 transition-colors">Mentor</a>
                <a href="#faq" class="text-sm text-gray-600 hover:text-gray-900 transition-colors">FAQ</a>
            </div>

            <!-- Desktop CTA -->
            <a href="#cta-final" class="hidden md:inline-flex items-center px-5 py-2.5 rounded-full text-sm font-semibold text-white bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 transition-all shadow-sm">
                Entrar na lista
            </a>

            <!-- Mobile Hamburger -->
            <button
                class="md:hidden p-2 rounded-lg text-gray-600 hover:text-gray-900 hover:bg-gray-100 transition-colors"
                onclick="document.getElementById('mobile-menu').classList.toggle('hidden')"
                aria-label="Abrir menu"
            >
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden border-t border-gray-100 bg-white/95 backdrop-blur-md">
        <div class="max-w-6xl mx-auto px-4 py-4 flex flex-col gap-1">
            <a href="#para-quem" onclick="document.getElementById('mobile-menu').classList.add('hidden')" class="px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 rounded-lg transition-colors">Para quem é</a>
            <a href="#como-funciona" onclick="document.getElementById('mobile-menu').classList.add('hidden')" class="px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 rounded-lg transition-colors">Como funciona</a>
            <a href="#mentor" onclick="document.getElementById('mobile-menu').classList.add('hidden')" class="px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 rounded-lg transition-colors">Mentor</a>
            <a href="#faq" onclick="document.getElementById('mobile-menu').classList.add('hidden')" class="px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50 rounded-lg transition-colors">FAQ</a>
            <a href="#cta-final" onclick="document.getElementById('mobile-menu').classList.add('hidden')" class="mt-2 px-4 py-2.5 text-sm font-semibold text-center text-white bg-gradient-to-r from-blue-600 to-purple-600 rounded-full transition-all">Entrar na lista</a>
        </div>
    </div>
</nav>

<!-- Section 1: Hero -->
<section id="inicio" class="relative bg-[#0b1120] py-24 sm:py-28 overflow-hidden">
    <!-- Glow orb -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[400px] bg-gradient-to-b from-blue-500/20 to-purple-600/20 blur-[100px] pointer-events-none"></div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <!-- Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-2 mb-8 bg-white/5 border border-white/10 rounded-full text-blue-300 text-sm">
            <span class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></span>
            Próxima turma em breve &bull; Vagas limitadas
        </div>

        <!-- H1 -->
        <h1 class="text-4xl sm:text-5xl md:text-7xl font-extrabold text-white leading-tight tracking-tight mb-6">
            Saia com seu<br>
            <span class="bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400 bg-clip-text text-transparent">assistente de IA</span><br>
            funcionando no celular.
        </h1>

        <!-- Subheadline -->
        <p class="text-lg sm:text-xl text-gray-400 max-w-2xl mx-auto mb-10 leading-relaxed">
            Em 1 sábado, você configura seu próprio agente de IA no Telegram — conectado à sua agenda, suas tarefas e sua rotina. Sem precisar programar.
        </p>

        <!-- Email Capture Form -->
        <form id="hero-form" onsubmit="return handleFormSubmit(event, this)" class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto mb-10">
            <input
                type="email"
                name="email"
                placeholder="seu@email.com"
                required
                class="flex-1 px-5 py-3.5 rounded-full bg-white/10 border border-white/20 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm"
            >
            <button
                type="submit"
                class="px-6 py-3.5 rounded-full font-semibold text-white text-sm bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 transition-all shadow-lg whitespace-nowrap"
            >
                Entrar na lista
            </button>
        </form>

        <!-- Trust Badges -->
        <div class="flex flex-wrap justify-center gap-3">
            <span class="inline-flex items-center gap-1.5 px-4 py-2 bg-white/5 border border-white/10 rounded-full text-gray-400 text-xs">
                <svg class="w-3.5 h-3.5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                Sem código
            </span>
            <span class="inline-flex items-center gap-1.5 px-4 py-2 bg-white/5 border border-white/10 rounded-full text-gray-400 text-xs">
                <svg class="w-3.5 h-3.5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                Funciona no Telegram
            </span>
            <span class="inline-flex items-center gap-1.5 px-4 py-2 bg-white/5 border border-white/10 rounded-full text-gray-400 text-xs">
                <svg class="w-3.5 h-3.5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                Resultado no mesmo dia
            </span>
            <span class="inline-flex items-center gap-1.5 px-4 py-2 bg-white/5 border border-white/10 rounded-full text-gray-400 text-xs">
                <svg class="w-3.5 h-3.5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                + 2 follow-ups
            </span>
        </div>
    </div>
</section>

<!-- Section 2: Stats Bar -->
<section class="py-16 bg-white border-b border-gray-100">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4">
            <div class="flex flex-col items-center text-center px-6 py-6">
                <span class="text-4xl sm:text-5xl font-extrabold text-gray-900">10+</span>
                <span class="mt-2 text-sm text-gray-500">anos construindo soluções digitais</span>
            </div>
            <div class="flex flex-col items-center text-center px-6 py-6 md:border-l border-gray-100">
                <span class="text-4xl sm:text-5xl font-extrabold text-gray-900">8+</span>
                <span class="mt-2 text-sm text-gray-500">plataformas SaaS entregues em produção</span>
            </div>
            <div class="flex flex-col items-center text-center px-6 py-6 border-t md:border-t-0 md:border-l border-gray-100">
                <span class="text-4xl sm:text-5xl font-extrabold text-gray-900">2.000+</span>
                <span class="mt-2 text-sm text-gray-500">clientes atendidos</span>
            </div>
            <div class="flex flex-col items-center text-center px-6 py-6 border-t md:border-t-0 md:border-l border-gray-100">
                <span class="text-4xl sm:text-5xl font-extrabold text-gray-900">200+</span>
                <span class="mt-2 text-sm text-gray-500">automações implementadas</span>
            </div>
        </div>
    </div>
</section>

<!-- Section 3: Para quem é -->
<section id="para-quem" class="py-20 sm:py-24 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Headline -->
        <div class="text-center mb-12 sm:mb-16">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight tracking-tight mb-4">
                Essa mentoria é para quem quer usar IA de verdade
            </h2>
            <p class="text-lg text-gray-500 max-w-2xl mx-auto">
                Não é curso para assistir depois. É para quem quer sair com algo funcionando no mesmo dia.
            </p>
        </div>

        <!-- Cards grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6 sm:gap-8">
            <!-- Card: Empreendedores -->
            <div class="bg-gray-50 rounded-[2rem] p-8 border border-gray-100">
                <div class="text-4xl mb-4">📈</div>
                <h3 class="text-lg font-bold text-gray-900 mb-3">Empreendedores</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Quer organizar agenda, tarefas e pequenas operações sem depender de equipe grande.</p>
            </div>

            <!-- Card: Freelancers -->
            <div class="bg-gray-50 rounded-[2rem] p-8 border border-gray-100">
                <div class="text-4xl mb-4">💼</div>
                <h3 class="text-lg font-bold text-gray-900 mb-3">Freelancers</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Quer reduzir bagunça, ganhar tempo e automatizar partes repetitivas do trabalho.</p>
            </div>

            <!-- Card: Criadores de Conteúdo -->
            <div class="bg-gray-50 rounded-[2rem] p-8 border border-gray-100">
                <div class="text-4xl mb-4">🎥</div>
                <h3 class="text-lg font-bold text-gray-900 mb-3">Criadores de Conteúdo</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Quer usar IA como apoio real na rotina criativa, nas ideias e na execução.</p>
            </div>

            <!-- Card: Não técnicos -->
            <div class="bg-gray-50 rounded-[2rem] p-8 border border-gray-100">
                <div class="text-4xl mb-4">🧩</div>
                <h3 class="text-lg font-bold text-gray-900 mb-3">Não técnicos</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Quer finalmente usar IA com estrutura, sem ficar perdido em tutoriais e ferramentas soltas.</p>
            </div>
        </div>
    </div>
</section>

<!-- Section 4: O que trava -->
<section class="py-20 sm:py-24 bg-gray-50 border-t border-gray-100">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Headline -->
        <div class="text-center mb-12 sm:mb-16">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight tracking-tight mb-4">
                O que normalmente trava quem tenta sozinho
            </h2>
            <p class="text-lg text-gray-500 max-w-2xl mx-auto">
                O problema quase nunca é falta de vontade. É falta de direção, sequência e acompanhamento.
            </p>
        </div>

        <!-- Cards grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-[680px] mx-auto">
            <!-- Card: Muito conteúdo -->
            <div class="bg-white rounded-[2rem] p-8 border border-gray-100">
                <div class="w-10 h-10 rounded-xl bg-red-50 flex items-center justify-center text-xl mb-4">😵</div>
                <h3 class="text-base font-bold text-gray-900">Muito conteúdo, pouca direção</h3>
            </div>

            <!-- Card: Medo de quebrar -->
            <div class="bg-white rounded-[2rem] p-8 border border-gray-100">
                <div class="w-10 h-10 rounded-xl bg-red-50 flex items-center justify-center text-xl mb-4">😰</div>
                <h3 class="text-base font-bold text-gray-900">Medo de quebrar tudo</h3>
            </div>

            <!-- Card: IA sem utilidade -->
            <div class="bg-white rounded-[2rem] p-8 border border-gray-100">
                <div class="w-10 h-10 rounded-xl bg-red-50 flex items-center justify-center text-xl mb-4">🤷</div>
                <h3 class="text-base font-bold text-gray-900">IA sem utilidade prática</h3>
            </div>

            <!-- Card: Falta de acompanhamento -->
            <div class="bg-white rounded-[2rem] p-8 border border-gray-100">
                <div class="w-10 h-10 rounded-xl bg-red-50 flex items-center justify-center text-xl mb-4">🛑</div>
                <h3 class="text-base font-bold text-gray-900">Falta de acompanhamento</h3>
            </div>
        </div>
    </div>
</section>

<!-- Section 5: O que você sai com -->
<section class="py-20 sm:py-24 bg-white border-t border-gray-100">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Headline -->
        <div class="text-center mb-12 sm:mb-16">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight tracking-tight mb-4">
                No final do sábado, você já sai com isso funcionando
            </h2>
            <p class="text-lg text-gray-500 max-w-2xl mx-auto">
                Nada de curso para assistir depois. A proposta é sair com algo real rodando.
            </p>
        </div>

        <!-- Cards grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-[680px] mx-auto">
            <!-- Card: Agente pessoal -->
            <div class="bg-gray-50 rounded-[2rem] p-8 border border-gray-100">
                <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center text-xl mb-4">🤖</div>
                <h3 class="text-base font-bold text-gray-900 mb-2">Seu agente pessoal rodando</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Seu próprio assistente de IA configurado numa VPS, pronto para operar 24h por dia, 7 dias por semana.</p>
            </div>

            <!-- Card: Telegram conectado -->
            <div class="bg-gray-50 rounded-[2rem] p-8 border border-gray-100">
                <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center text-xl mb-4">📲</div>
                <h3 class="text-base font-bold text-gray-900 mb-2">Telegram conectado</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Você conversa com seu assistente direto pelo celular, como se fosse um colega de trabalho sempre disponível.</p>
            </div>

            <!-- Card: Agenda integrada -->
            <div class="bg-gray-50 rounded-[2rem] p-8 border border-gray-100">
                <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center text-xl mb-4">📅</div>
                <h3 class="text-base font-bold text-gray-900 mb-2">Agenda integrada</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Seu assistente enxerga sua rotina e te ajuda com contexto real — compromissos, prazos e prioridades.</p>
            </div>

            <!-- Card: 1 automação funcionando -->
            <div class="bg-gray-50 rounded-[2rem] p-8 border border-gray-100">
                <div class="w-10 h-10 rounded-xl bg-blue-50 flex items-center justify-center text-xl mb-4">⚙️</div>
                <h3 class="text-base font-bold text-gray-900 mb-2">1 automação funcionando</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Pelo menos uma rotina automática prática rodando no seu contexto — briefing, relatório ou monitoramento.</p>
            </div>
        </div>
    </div>
</section>

<!-- Section 6: Casos de uso -->
<section class="py-20 sm:py-24 bg-gray-50 border-t border-gray-100">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Headline -->
        <div class="text-center mb-12 sm:mb-16">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight tracking-tight mb-4">
                O que seu assistente pode fazer por você
            </h2>
            <p class="text-lg text-gray-500 max-w-2xl mx-auto">
                O objetivo não é só "ter IA". É fazer ela trabalhar por você em rotinas reais.
            </p>
        </div>

        <!-- Cards grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6 sm:gap-8">
            <!-- Card: Briefing diário -->
            <div class="bg-white rounded-[2rem] p-8 border border-gray-100 text-center">
                <div class="text-4xl mb-4">🌅</div>
                <h3 class="text-base font-bold text-gray-900 mb-3">Briefing diário</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Todo dia cedo, recebe um resumo da sua agenda, tarefas e prioridades no Telegram.</p>
            </div>

            <!-- Card: Relatório semanal -->
            <div class="bg-white rounded-[2rem] p-8 border border-gray-100 text-center">
                <div class="text-4xl mb-4">📝</div>
                <h3 class="text-base font-bold text-gray-900 mb-3">Relatório semanal</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Visão organizada do que aconteceu, do que ficou pendente e do que precisa de atenção.</p>
            </div>

            <!-- Card: Alertas proativos -->
            <div class="bg-white rounded-[2rem] p-8 border border-gray-100 text-center">
                <div class="text-4xl mb-4">🚨</div>
                <h3 class="text-base font-bold text-gray-900 mb-3">Alertas proativos</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Seu agente avisa quando algo importante sai do esperado ou precisa da sua atenção.</p>
            </div>

            <!-- Card: Apoio nas decisões -->
            <div class="bg-white rounded-[2rem] p-8 border border-gray-100 text-center">
                <div class="text-4xl mb-4">🧠</div>
                <h3 class="text-base font-bold text-gray-900 mb-3">Apoio nas decisões</h3>
                <p class="text-sm text-gray-500 leading-relaxed">Peça opinião, pesquise dados ou organize ideias — direto na conversa, como um sócio disponível 24h.</p>
            </div>
        </div>

        <!-- Telegram highlight banner -->
        <div class="mt-8 bg-gradient-to-r from-blue-50 to-purple-50 rounded-[2rem] p-6 sm:p-8 border border-indigo-100 max-w-3xl mx-auto">
            <div class="flex flex-col sm:flex-row items-center sm:items-start gap-4 text-center sm:text-left">
                <div class="text-4xl flex-shrink-0">💬</div>
                <div>
                    <h3 class="text-lg font-bold text-gray-900 mb-1">Tudo pelo Telegram</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Sem app novo, sem painel complicado. Você manda mensagem e ele responde — simples assim.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 7: Como funciona -->
<section id="como-funciona" class="py-20 sm:py-24 bg-white border-t border-gray-100">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Headline -->
        <div class="text-center mb-12 sm:mb-16">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight tracking-tight mb-4">
                Como a mentoria funciona
            </h2>
            <p class="text-lg text-gray-500 max-w-2xl mx-auto">
                Você entra no sábado para montar seu assistente e continua refinando nas 2 semanas seguintes.
            </p>
        </div>

        <!-- Saturday phase label -->
        <div class="flex items-center gap-4 mb-6">
            <div class="flex-1 h-px bg-gray-200"></div>
            <span class="bg-gray-900 text-white px-4 py-1.5 rounded-full text-xs font-bold tracking-wider whitespace-nowrap">SÁBADO — DIA PRINCIPAL</span>
            <div class="flex-1 h-px bg-gray-200"></div>
            <span class="text-xs text-gray-400 whitespace-nowrap">~3h ao vivo</span>
        </div>

        <!-- Saturday blocks -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-10">
            <!-- Block 1 -->
            <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 relative">
                <span class="absolute top-4 right-4 text-[11px] text-gray-400">50min</span>
                <div class="text-3xl mb-3">🤖</div>
                <h3 class="text-base font-bold mb-1">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">Seu agente nasce</span>
                </h3>
                <p class="text-sm text-gray-500 leading-relaxed">Sobe a base, define identidade, sai com o agente rodando.</p>
            </div>

            <!-- Block 2 -->
            <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 relative">
                <span class="absolute top-4 right-4 text-[11px] text-gray-400">50min</span>
                <div class="text-3xl mb-3">📲</div>
                <h3 class="text-base font-bold mb-1">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">Conectando ao mundo</span>
                </h3>
                <p class="text-sm text-gray-500 leading-relaxed">Telegram + Google Agenda. Comandos reais funcionando.</p>
            </div>

            <!-- Block 3 -->
            <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 relative">
                <span class="absolute top-4 right-4 text-[11px] text-gray-400">50min</span>
                <div class="text-3xl mb-3">⚙️</div>
                <h3 class="text-base font-bold mb-1">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">Automatizando</span>
                </h3>
                <p class="text-sm text-gray-500 leading-relaxed">Monta uma automação prática baseada na sua rotina real.</p>
            </div>

            <!-- Block 4 -->
            <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 relative">
                <span class="absolute top-4 right-4 text-[11px] text-gray-400">30min</span>
                <div class="text-3xl mb-3">🛡️</div>
                <h3 class="text-base font-bold mb-1">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">Blindando</span>
                </h3>
                <p class="text-sm text-gray-500 leading-relaxed">Estabilidade, ajustes e plano claro de evolução.</p>
            </div>
        </div>

        <!-- Follow-ups phase label -->
        <div class="flex items-center gap-4 mb-6">
            <div class="flex-1 h-px bg-gray-200"></div>
            <span class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-4 py-1.5 rounded-full text-xs font-bold tracking-wider whitespace-nowrap">FOLLOW-UPS — SEMANAS SEGUINTES</span>
            <div class="flex-1 h-px bg-gray-200"></div>
            <span class="text-xs text-gray-400 whitespace-nowrap">40 min cada</span>
        </div>

        <!-- Follow-up cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <!-- Follow-up 1 -->
            <div class="bg-gradient-to-br from-gray-50 to-purple-50/50 rounded-2xl p-6 border border-purple-100">
                <div class="text-3xl mb-3">🔁</div>
                <h3 class="text-base font-bold text-gray-900 mb-1">Follow-up 1</h3>
                <p class="text-xs text-gray-400 mb-3">Semana 1 após o sábado</p>
                <p class="text-sm text-gray-500 leading-relaxed">Corrigir erros do uso real, otimizar respostas e refinar o fluxo principal.</p>
            </div>

            <!-- Follow-up 2 -->
            <div class="bg-gradient-to-br from-gray-50 to-purple-50/50 rounded-2xl p-6 border border-purple-100">
                <div class="text-3xl mb-3">📈</div>
                <h3 class="text-base font-bold text-gray-900 mb-1">Follow-up 2</h3>
                <p class="text-xs text-gray-400 mb-3">Semana 2 após o sábado</p>
                <p class="text-sm text-gray-500 leading-relaxed">Consolidar resultados, melhorar uso prático e ganhar visão de longo prazo.</p>
            </div>
        </div>
    </div>
</section>

<!-- Section 8: Não precisa programar -->
<section class="py-20 sm:py-24 bg-gray-50 border-t border-gray-100">
    <div class="max-w-[640px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-br from-[#0f172a] to-[#1e1b4b] rounded-[2rem] p-10 sm:p-14 text-center relative overflow-hidden">
            <!-- Glow orbs -->
            <div class="absolute -top-20 -left-20 w-64 h-64 bg-purple-600/20 rounded-full blur-[80px] pointer-events-none"></div>
            <div class="absolute -bottom-20 -right-20 w-64 h-64 bg-indigo-600/20 rounded-full blur-[80px] pointer-events-none"></div>

            <div class="relative">
                <h2 class="text-2xl sm:text-3xl font-extrabold text-white leading-tight mb-4">
                    Você não precisa saber programar
                </h2>
                <p class="text-gray-400 text-sm sm:text-base leading-relaxed mb-8">
                    Essa mentoria foi desenhada para profissionais não técnicos. Você só precisa do básico para entrar — o resto a gente constrói junto.
                </p>
                <div class="flex flex-wrap justify-center gap-3">
                    <span class="bg-white/[0.06] border border-white/10 rounded-full px-4 py-2 text-gray-300 text-sm">Notebook com internet</span>
                    <span class="bg-white/[0.06] border border-white/10 rounded-full px-4 py-2 text-gray-300 text-sm">Conta no Telegram</span>
                    <span class="bg-white/[0.06] border border-white/10 rounded-full px-4 py-2 text-gray-300 text-sm">Conta Google</span>
                    <span class="bg-white/[0.06] border border-white/10 rounded-full px-4 py-2 text-gray-300 text-sm">Vontade de colocar no ar</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 9: Quem te guia -->
<section id="mentor" class="py-20 sm:py-24 bg-white border-t border-gray-100">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">

            <!-- Left column: Bio card -->
            <div class="bg-gray-50 rounded-[2rem] p-8 sm:p-10 border border-gray-100">
                <span class="inline-block bg-blue-50 text-blue-700 text-xs font-semibold px-3 py-1 rounded-full mb-6">Seu mentor</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">Vitor Pereira</h2>
                <p class="text-gray-500 text-sm mb-6">Senior Full-Stack Engineer &bull; CTO &bull; AI Specialist</p>
                <p class="text-gray-600 text-sm leading-relaxed mb-8">
                    Essa mentoria não foi criada para impressionar com jargão técnico. Foi criada para pegar quem quer usar IA de forma séria — e colocar isso de pé com clareza, estrutura e acompanhamento.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-2 text-sm text-gray-700">
                        <span class="text-indigo-500 mt-0.5">&#10022;</span>
                        10+ anos construindo soluções digitais
                    </li>
                    <li class="flex items-start gap-2 text-sm text-gray-700">
                        <span class="text-indigo-500 mt-0.5">&#10022;</span>
                        8+ plataformas SaaS entregues do zero à produção
                    </li>
                    <li class="flex items-start gap-2 text-sm text-gray-700">
                        <span class="text-indigo-500 mt-0.5">&#10022;</span>
                        2.000+ clientes atendidos
                    </li>
                    <li class="flex items-start gap-2 text-sm text-gray-700">
                        <span class="text-indigo-500 mt-0.5">&#10022;</span>
                        200+ automações implementadas
                    </li>
                    <li class="flex items-start gap-2 text-sm text-gray-700">
                        <span class="text-indigo-500 mt-0.5">&#10022;</span>
                        CTO desde 2015 — I.V. Tecnologias Web
                    </li>
                </ul>
            </div>

            <!-- Right column: 2 stacked cards -->
            <div class="flex flex-col gap-6">
                <!-- Gradient card -->
                <div class="bg-gradient-to-br from-indigo-500 to-purple-600 rounded-[2rem] p-8 sm:p-10 text-white">
                    <p class="text-sm font-semibold text-white/70 mb-4">O foco aqui é simples:</p>
                    <p class="text-xl sm:text-2xl font-bold leading-snug">
                        "Você não sair dizendo 'entendi a ideia'. Você sair dizendo: 'está funcionando no meu celular.'"
                    </p>
                </div>

                <!-- Products card -->
                <div class="bg-gray-50 rounded-[2rem] p-8 sm:p-10 border border-gray-100">
                    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-5">Alguns produtos do Vitor</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-white border border-gray-200 rounded-lg px-3 py-1.5 text-sm text-gray-700 font-medium">AjudaJá</span>
                        <span class="bg-white border border-gray-200 rounded-lg px-3 py-1.5 text-sm text-gray-700 font-medium">SGCM</span>
                        <span class="bg-white border border-gray-200 rounded-lg px-3 py-1.5 text-sm text-gray-700 font-medium">4trip</span>
                        <span class="bg-white border border-gray-200 rounded-lg px-3 py-1.5 text-sm text-gray-700 font-medium">ChatMatrix</span>
                        <span class="bg-white border border-gray-200 rounded-lg px-3 py-1.5 text-sm text-gray-700 font-medium">DataClarity IA</span>
                        <span class="bg-white border border-gray-200 rounded-lg px-3 py-1.5 text-sm text-gray-700 font-medium">ClearSeg</span>
                        <span class="bg-white border border-gray-200 rounded-lg px-3 py-1.5 text-sm text-gray-700 font-medium">Calvino</span>
                        <span class="bg-white border border-gray-200 rounded-lg px-3 py-1.5 text-sm text-gray-700 font-medium">Auralooks</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Section 10: FAQ -->
<section id="faq" class="py-20 sm:py-24 bg-gray-50 border-t border-gray-100">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 leading-tight tracking-tight mb-4">
                Perguntas frequentes
            </h2>
            <p class="text-lg text-gray-500">
                O que normalmente as pessoas querem saber antes de entrar.
            </p>
        </div>

        <div class="space-y-4">
            <!-- FAQ 1 -->
            <div class="faq-item bg-white rounded-2xl border border-gray-100 overflow-hidden">
                <button class="faq-toggle w-full flex items-center justify-between px-6 py-5 text-left" onclick="toggleFaq(this)">
                    <span class="text-sm font-semibold text-gray-900">Preciso saber programar?</span>
                    <span class="faq-icon text-gray-400 text-xl font-light ml-4 flex-shrink-0">+</span>
                </button>
                <div class="faq-answer hidden px-6 pb-5">
                    <p class="text-sm text-gray-500 leading-relaxed">Não. A mentoria foi desenhada justamente para pessoas não técnicas. Você precisa de um notebook com internet, conta no Telegram e conta Google.</p>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="faq-item bg-white rounded-2xl border border-gray-100 overflow-hidden">
                <button class="faq-toggle w-full flex items-center justify-between px-6 py-5 text-left" onclick="toggleFaq(this)">
                    <span class="text-sm font-semibold text-gray-900">Eu saio com algo funcionando mesmo?</span>
                    <span class="faq-icon text-gray-400 text-xl font-light ml-4 flex-shrink-0">+</span>
                </button>
                <div class="faq-answer hidden px-6 pb-5">
                    <p class="text-sm text-gray-500 leading-relaxed">Sim. A proposta é que você termine o sábado com seu assistente rodando no Telegram, conectado à sua agenda e com pelo menos uma automação ativa.</p>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="faq-item bg-white rounded-2xl border border-gray-100 overflow-hidden">
                <button class="faq-toggle w-full flex items-center justify-between px-6 py-5 text-left" onclick="toggleFaq(this)">
                    <span class="text-sm font-semibold text-gray-900">Serve só para quem tem empresa?</span>
                    <span class="faq-icon text-gray-400 text-xl font-light ml-4 flex-shrink-0">+</span>
                </button>
                <div class="faq-answer hidden px-6 pb-5">
                    <p class="text-sm text-gray-500 leading-relaxed">Não. Serve para freelancers, criadores de conteúdo e qualquer pessoa que queira mais produtividade com IA no dia a dia.</p>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="faq-item bg-white rounded-2xl border border-gray-100 overflow-hidden">
                <button class="faq-toggle w-full flex items-center justify-between px-6 py-5 text-left" onclick="toggleFaq(this)">
                    <span class="text-sm font-semibold text-gray-900">E se eu travar depois do sábado?</span>
                    <span class="faq-icon text-gray-400 text-xl font-light ml-4 flex-shrink-0">+</span>
                </button>
                <div class="faq-answer hidden px-6 pb-5">
                    <p class="text-sm text-gray-500 leading-relaxed">Você terá 2 encontros de follow-up nas semanas seguintes para corrigir, ajustar e evoluir o que foi montado.</p>
                </div>
            </div>

            <!-- FAQ 5 -->
            <div class="faq-item bg-white rounded-2xl border border-gray-100 overflow-hidden">
                <button class="faq-toggle w-full flex items-center justify-between px-6 py-5 text-left" onclick="toggleFaq(this)">
                    <span class="text-sm font-semibold text-gray-900">Quanto custa manter o agente rodando?</span>
                    <span class="faq-icon text-gray-400 text-xl font-light ml-4 flex-shrink-0">+</span>
                </button>
                <div class="faq-answer hidden px-6 pb-5">
                    <p class="text-sm text-gray-500 leading-relaxed">O custo de infraestrutura (VPS + API de IA) fica em torno de R$ 50–100/mês dependendo do uso. Explicamos tudo durante a mentoria.</p>
                </div>
            </div>

            <!-- FAQ 6 -->
            <div class="faq-item bg-white rounded-2xl border border-gray-100 overflow-hidden">
                <button class="faq-toggle w-full flex items-center justify-between px-6 py-5 text-left" onclick="toggleFaq(this)">
                    <span class="text-sm font-semibold text-gray-900">É presencial ou online?</span>
                    <span class="faq-icon text-gray-400 text-xl font-light ml-4 flex-shrink-0">+</span>
                </button>
                <div class="faq-answer hidden px-6 pb-5">
                    <p class="text-sm text-gray-500 leading-relaxed">Os encontros são ao vivo e online. Você participa do seu computador, de qualquer lugar.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 11: CTA Final -->
<section id="cta-final" class="py-20 sm:py-24 bg-white border-t border-gray-100">
    <div class="max-w-[640px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-[#0b1120] rounded-[2rem] p-10 sm:p-14 relative overflow-hidden">
            <!-- Glow orb -->
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[400px] h-[200px] bg-gradient-to-b from-blue-500/20 to-purple-600/20 blur-[80px] pointer-events-none"></div>

            <div class="relative text-center">
                <h2 class="text-2xl sm:text-3xl font-extrabold text-white leading-tight mb-5">
                    Se você quer parar de só testar IA e começar a
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400"> usar IA de verdade</span>,
                    essa mentoria é para você.
                </h2>
                <p class="text-gray-400 text-sm sm:text-base leading-relaxed mb-8">
                    Em vez de continuar perdido entre ferramentas e tutoriais, você sai com um assistente pessoal funcionando no seu celular e um caminho claro para evoluir.
                </p>

                <!-- Form -->
                <form id="cta-form" onsubmit="return handleFormSubmit(event, this)" class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto mb-5">
                    <input
                        type="email"
                        name="email"
                        placeholder="seu@email.com"
                        required
                        class="flex-1 px-5 py-3.5 rounded-full bg-white/10 border border-white/20 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm"
                    >
                    <button
                        type="submit"
                        class="px-6 py-3.5 rounded-full font-semibold text-white text-sm bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 transition-all shadow-lg whitespace-nowrap"
                    >
                        Entrar na lista
                    </button>
                </form>

                <p class="text-gray-500 text-xs">Vagas limitadas por turma. Sem spam, só atualizações da mentoria.</p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-white pt-16 pb-10 border-t border-gray-200">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-12">
            <!-- Left: Brand -->
            <div>
                <a href="#inicio" class="inline-flex items-center gap-2 font-bold text-xl text-gray-900 mb-4">
                    <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">&#10022;</span>
                    IV Labs
                </a>
                <p class="text-gray-500 text-sm leading-relaxed max-w-xs mb-6">
                    Construindo soluções digitais com IA para profissionais que querem resultados reais — sem enrolação.
                </p>
                <div class="flex items-center gap-4">
                    <a href="https://www.instagram.com/vitorpereirasaas/" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-gray-700 transition-colors text-sm">Instagram</a>
                    <a href="https://www.linkedin.com/in/vitor-onofre-pereira/" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-gray-700 transition-colors text-sm">LinkedIn</a>
                    <a href="https://wa.me/5581996733973" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-gray-700 transition-colors text-sm">WhatsApp</a>
                </div>
            </div>

            <!-- Right: CTA card -->
            <div class="bg-gray-50 rounded-[2rem] p-8 border border-gray-100 flex flex-col justify-between">
                <p class="text-lg font-bold text-gray-900 mb-4">Pronto para montar o seu?</p>
                <p class="text-gray-500 text-sm leading-relaxed mb-6">Entre na lista e seja avisado quando a próxima turma abrir.</p>
                <a href="#cta-final" class="inline-flex items-center justify-center px-6 py-3 rounded-full font-semibold text-sm text-white bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 transition-all shadow-sm">
                    Entrar na lista
                </a>
            </div>
        </div>

        <!-- Bottom bar -->
        <div class="border-t border-gray-100 pt-8 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-gray-400 text-xs">&copy; 2026 IV Labs. Todos os direitos reservados.</p>
            <div class="flex items-center gap-6">
                <a href="#" class="text-gray-400 hover:text-gray-600 text-xs transition-colors">Termos de Uso</a>
                <a href="#" class="text-gray-400 hover:text-gray-600 text-xs transition-colors">Privacidade</a>
            </div>
        </div>
    </div>
</footer>

<script>
    function handleFormSubmit(event, form) {
        event.preventDefault();
        var email = form.querySelector('input[name="email"]').value.trim();
        var source = form.id === 'hero-form' ? 'hero' : 'cta';
        var btn = form.querySelector('button');
        btn.disabled = true;
        btn.textContent = 'Enviando...';

        fetch('/api/lead.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ email: email, source: source })
        })
        .then(function(res) { return res.json(); })
        .then(function(data) {
            var p = document.createElement('p');
            if (data.success) {
                p.textContent = 'Pronto! Você está na lista. Fique de olho no seu email.';
                p.className = 'text-green-400 font-semibold py-3 text-sm';
            } else {
                p.textContent = data.error || 'Erro ao cadastrar. Tente novamente.';
                p.className = 'text-red-400 font-semibold py-3 text-sm';
            }
            while (form.firstChild) { form.removeChild(form.firstChild); }
            form.appendChild(p);
        })
        .catch(function() {
            btn.disabled = false;
            btn.textContent = 'Quero participar';
            alert('Erro de conexão. Tente novamente.');
        });

        return false;
    }

    function toggleFaq(button) {
        var clickedAnswer = button.nextElementSibling;
        var clickedIcon = button.querySelector('.faq-icon');
        var isAlreadyOpen = !clickedAnswer.classList.contains('hidden');

        document.querySelectorAll('.faq-answer').forEach(function (answer) {
            answer.classList.add('hidden');
        });
        document.querySelectorAll('.faq-icon').forEach(function (icon) {
            icon.textContent = '+';
        });

        if (!isAlreadyOpen) {
            clickedAnswer.classList.remove('hidden');
            clickedIcon.textContent = '−';
        }
    }

    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (event) {
            event.preventDefault();
            var target = document.querySelector(anchor.getAttribute('href'));
            if (target) {
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });
</script>

</body>
</html>
