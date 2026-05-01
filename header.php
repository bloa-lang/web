<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Bloa Programming Language'; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            color-scheme: light;
            --bg: #f8fafc;
            --bg-surface: #ffffff;
            --bg-muted: #eef2ff;
            --bg-card: #ffffff;
            --bg-panel: rgba(255,255,255,0.85);
            --text-primary: #0f172a;
            --text-secondary: #475569;
            --text-muted: #64748b;
            --accent: #1d4ed8;
            --accent-alt: #2563eb;
            --accent-soft: rgba(59,130,246,0.1);
            --border: #e2e8f0;
            --card-border: #e2e8f0;
            --shadow: 0 20px 60px rgba(15,23,42,0.08);
            --code-bg: #f3f4f6;
            --glass: rgba(255,255,255,0.78);
        }

        @media (prefers-color-scheme: dark) {
            :root {
                color-scheme: dark;
                --bg: #050812;
                --bg-surface: #0d1728;
                --bg-muted: #111827;
                --bg-card: #111827;
                --bg-panel: rgba(15,23,42,0.88);
                --text-primary: #e2e8f0;
                --text-secondary: #94a3b8;
                --text-muted: #64748b;
                --accent: #38bdf8;
                --accent-alt: #0ea5e9;
                --accent-soft: rgba(56,189,248,0.12);
                --border: #1f2937;
                --card-border: #1f2937;
                --shadow: 0 20px 60px rgba(0,0,0,0.28);
                --code-bg: #111827;
                --glass: rgba(15,23,42,0.95);
            }
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: var(--bg);
            color: var(--text-primary);
            transition: background 0.35s ease, color 0.35s ease;
        }

        a {
            color: var(--accent);
        }

        a:hover {
            color: var(--accent-alt);
        }

        nav, footer {
            background: var(--bg-surface);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            border-color: var(--border);
        }

        .card-hover {
            transition: box-shadow 0.2s ease, border-color 0.2s ease;
            background: var(--bg-card) !important;
            border-color: var(--card-border) !important;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }

        .card-hover:hover {
            border-color: var(--accent) !important;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        .gradient-primary {
            background: linear-gradient(135deg, var(--accent), #60a5fa);
        }

        .gradient-text {
            background: linear-gradient(135deg, var(--accent), #6366f1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .code {
            font-family: 'Fira Code', 'JetBrains Mono', ui-monospace, SFMono-Regular, monospace;
        }

        pre,
        code {
            font-family: 'Fira Code', 'JetBrains Mono', ui-monospace, SFMono-Regular, monospace;
        }

        .code,
        pre {
            background: var(--code-bg) !important;
            color: var(--text-primary) !important;
        }

        @media (prefers-color-scheme: light) {
            .from-gray-900,
            .from-black,
            .to-black,
            .to-gray-900,
            .from-gray-800,
            .to-gray-800,
            .from-gray-700,
            .to-gray-700 {
                --tw-gradient-from: var(--bg-card);
                --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(255,255,255,0));
                --tw-gradient-to: var(--bg-card);
            }
        }

        input,
        textarea,
        select,
        button {
            background: var(--bg-card) !important;
            border-color: var(--card-border) !important;
            color: var(--text-primary) !important;
        }

        input:focus,
        textarea:focus,
        select:focus,
        button:focus {
            outline: none;
            border-color: var(--accent) !important;
            box-shadow: 0 0 0 3px var(--accent-soft) !important;
        }

        ::selection {
            background: rgba(56,189,248,0.18);
            color: var(--text-primary);
        }

        ::-webkit-scrollbar {
            width: 10px;
            height: 10px;
        }

        ::-webkit-scrollbar-track {
            background: var(--bg);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--card-border);
            border-radius: 999px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--accent);
        }

        .bg-black {
            background: var(--bg-card) !important;
        }

        .bg-white {
            background: var(--bg-card) !important;
        }

        .bg-gray-900 {
            background: var(--bg-card) !important;
        }

        .bg-gray-800 {
            background: var(--bg-panel) !important;
        }

        .bg-gray-700 {
            background: rgba(148,163,184,0.08) !important;
        }

        .bg-gray-100 {
            background: rgba(255,255,255,0.7) !important;
        }

        .bg-gray-50 {
            background: rgba(255,255,255,0.9) !important;
        }

        .text-white {
            color: var(--text-primary) !important;
        }

        .text-gray-400,
        .text-gray-300,
        .text-gray-500,
        .text-gray-600,
        .text-gray-50,
        .text-gray-100,
        .text-gray-200 {
            color: var(--text-secondary) !important;
        }

        .text-gray-700,
        .text-gray-800,
        .text-gray-900 {
            color: var(--text-primary) !important;
        }

        .border-gray-800,
        .border-gray-900,
        .border-gray-700 {
            border-color: var(--card-border) !important;
        }

        .shadow-xl,
        .shadow-lg,
        .shadow-md,
        .shadow-sm {
            box-shadow: var(--shadow) !important;
        }
    </style>
</head>
<body class="min-h-screen">
    <nav class="bg-white/80 dark:bg-gray-900/80 backdrop-blur-md border-b border-gray-200 dark:border-gray-700 text-gray-900 dark:text-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-3">
                    <a href="/" class="text-2xl font-bold flex items-center space-x-2 hover:opacity-80 transition">
                        <div class="bg-gradient-to-br from-cyan-500 to-blue-500 p-2 rounded-lg">
                            <i class="fas fa-code text-white"></i>
                        </div>
                        <span class="bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent font-bold">Bloa</span>
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="text-gray-300 hover:text-cyan-400 hover:opacity-100 transition duration-300 font-medium">Home</a>
                    <a href="/docs" class="text-gray-300 hover:text-cyan-400 hover:opacity-100 transition duration-300 font-medium">Docs</a>
                    <a href="/examples" class="text-gray-300 hover:text-cyan-400 hover:opacity-100 transition duration-300 font-medium">Examples</a>
                    <a href="/about" class="text-gray-300 hover:text-cyan-400 hover:opacity-100 transition duration-300 font-medium">About</a>
                    <a href="/download" class="text-gray-300 hover:text-cyan-400 hover:opacity-100 transition duration-300 font-medium">Download</a>
                    <a href="https://github.com/bloa-lang/bloa-src" class="bg-cyan-500 hover:bg-cyan-600 text-black px-3 py-2 rounded-lg transition duration-300 font-semibold" target="_blank">
                        <i class="fab fa-github text-black"></i>
                    </a>
                </div>
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-gray-900 dark:text-white focus:outline-none hover:text-cyan-400 transition">
                        <i class="fas fa-bars text-xl text-gray-900 dark:text-white"></i>
                    </button>
                </div>
            </div>
            <div id="mobile-menu" class="md:hidden hidden bg-white/90 dark:bg-gray-900/90 backdrop-blur-md px-4 py-3 space-y-2 rounded-b-lg border-t border-gray-200 dark:border-gray-700">
                <a href="/" class="block py-2 text-gray-300 hover:text-cyan-400 hover:bg-cyan-500 hover:bg-opacity-10 px-3 rounded transition">Home</a>
                <a href="/docs" class="block py-2 text-gray-300 hover:text-cyan-400 hover:bg-cyan-500 hover:bg-opacity-10 px-3 rounded transition">Docs</a>
                <a href="/examples" class="block py-2 text-gray-300 hover:text-cyan-400 hover:bg-cyan-500 hover:bg-opacity-10 px-3 rounded transition">Examples</a>
                <a href="/about" class="block py-2 text-gray-300 hover:text-cyan-400 hover:bg-cyan-500 hover:bg-opacity-10 px-3 rounded transition">About</a>
                <a href="/download" class="block py-2 hover:text-white hover:bg-white hover:bg-opacity-10 px-3 rounded transition">Download</a>
                <a href="https://github.com/bloa-lang/bloa-src" class="block py-2 hover:text-white hover:bg-white hover:bg-opacity-10 px-3 rounded transition" target="_blank">
                    <i class="fab fa-github mr-2 text-gray-900 dark:text-gray-300"></i>GitHub
                </a>
            </div>
        </div>
    </nav>
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>