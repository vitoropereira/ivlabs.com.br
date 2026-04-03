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

<!-- Remaining sections -->

</body>
</html>
