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

</body>
</html>
