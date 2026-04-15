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
            --bg-dark: #0a0e27;
            --bg-darker: #050810;
            --bg-card: #151b2f;
            --text-primary: #e0e0e0;
            --text-secondary: #a0a0a0;
            --accent: #00d4ff;
            --accent-secondary: #6366f1;
            --border-color: #2a2f4a;
        }

        * { color-scheme: dark; }
        body { 
            background: var(--bg-dark);
            color: var(--text-primary);
        }
        
        .code { 
            font-family: 'Fira Code', 'Courier New', monospace;
        }
        
        .gradient-primary { 
            background: linear-gradient(135deg, var(--accent) 0%, var(--accent-secondary) 100%);
        }
        
        .gradient-text { 
            background: linear-gradient(135deg, var(--accent) 0%, var(--accent-secondary) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .card-hover { 
            transition: all 0.3s ease;
            background: var(--bg-card) !important;
            border-color: var(--border-color) !important;
        }
        
        .card-hover:hover { 
            transform: translateY(-4px);
            box-shadow: 0 20px 25px -5px rgba(0, 212, 255, 0.15);
            border-color: var(--accent) !important;
        }

        ::selection {
            background: rgba(0, 212, 255, 0.2);
            color: var(--text-primary);
        }

        input, textarea, select {
            background: var(--bg-darker) !important;
            border-color: var(--border-color) !important;
            color: var(--text-primary) !important;
        }

        input:focus, textarea:focus, select:focus {
            border-color: var(--accent) !important;
            box-shadow: 0 0 0 3px rgba(0, 212, 255, 0.1) !important;
        }

        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--bg-dark);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--border-color);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--accent);
        }
    </style>
</head>
<body class="bg-black min-h-screen">
    <nav class="bg-black bg-opacity-40 backdrop-blur-xl border-b border-gray-800 text-white shadow-xl sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-3">
                    <a href="index.php" class="text-2xl font-bold flex items-center space-x-2 hover:opacity-80 transition">
                        <div class="bg-gradient-to-br from-cyan-500 to-blue-500 p-2 rounded-lg">
                            <i class="fas fa-code"></i>
                        </div>
                        <span class="bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent font-bold">Bloa</span>
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="index.php" class="text-gray-300 hover:text-cyan-400 hover:opacity-100 transition duration-300 font-medium">Home</a>
                    <a href="docs.php" class="text-gray-300 hover:text-cyan-400 hover:opacity-100 transition duration-300 font-medium">Docs</a>
                    <a href="examples.php" class="text-gray-300 hover:text-cyan-400 hover:opacity-100 transition duration-300 font-medium">Examples</a>
                    <a href="about.php" class="text-gray-300 hover:text-cyan-400 hover:opacity-100 transition duration-300 font-medium">About</a>
                    <a href="download.php" class="text-gray-300 hover:text-cyan-400 hover:opacity-100 transition duration-300 font-medium">Download</a>
                    <a href="https://github.com/bloa-lang/bloa-src" class="bg-cyan-500 hover:bg-cyan-600 text-black px-3 py-2 rounded-lg transition duration-300 font-semibold" target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-white focus:outline-none hover:text-cyan-400 transition">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
            <div id="mobile-menu" class="md:hidden hidden bg-black bg-opacity-60 backdrop-blur-lg px-4 py-3 space-y-2 rounded-b-lg border-t border-gray-800">
                <a href="index.php" class="block py-2 text-gray-300 hover:text-cyan-400 hover:bg-cyan-500 hover:bg-opacity-10 px-3 rounded transition">Home</a>
                <a href="docs.php" class="block py-2 text-gray-300 hover:text-cyan-400 hover:bg-cyan-500 hover:bg-opacity-10 px-3 rounded transition">Docs</a>
                <a href="examples.php" class="block py-2 text-gray-300 hover:text-cyan-400 hover:bg-cyan-500 hover:bg-opacity-10 px-3 rounded transition">Examples</a>
                <a href="about.php" class="block py-2 text-gray-300 hover:text-cyan-400 hover:bg-cyan-500 hover:bg-opacity-10 px-3 rounded transition">About</a>
                <a href="download.php" class="block py-2 hover:text-white hover:bg-white hover:bg-opacity-10 px-3 rounded transition">Download</a>
                <a href="https://github.com/bloa-lang/bloa-src" class="block py-2 hover:text-white hover:bg-white hover:bg-opacity-10 px-3 rounded transition" target="_blank">
                    <i class="fab fa-github mr-2"></i>GitHub
                </a>
            </div>
        </div>
    </nav>
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>