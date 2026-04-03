<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Bloa Programming Language'; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .code { font-family: 'Fira Code', 'Courier New', monospace; }
        body { background: #f8fafc; }
        .gradient-primary { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        .gradient-text { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .card-hover { transition: all 0.3s ease; }
        .card-hover:hover { transform: translateY(-4px); box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1); }
    </style>
</head>
<body class="text-gray-900">
    <nav class="gradient-primary text-white shadow-xl sticky top-0 z-50 backdrop-blur-sm bg-opacity-95">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-3">
                    <a href="index.php" class="text-2xl font-bold flex items-center space-x-2 hover:opacity-80 transition">
                        <div class="bg-white bg-opacity-20 p-2 rounded-lg">
                            <i class="fas fa-code"></i>
                        </div>
                        <span>Bloa</span>
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="index.php" class="hover:text-white hover:opacity-100 opacity-90 transition duration-300 font-medium">Home</a>
                    <a href="docs.php" class="hover:text-white hover:opacity-100 opacity-90 transition duration-300 font-medium">Docs</a>
                    <a href="examples.php" class="hover:text-white hover:opacity-100 opacity-90 transition duration-300 font-medium">Examples</a>
                    <a href="about.php" class="hover:text-white hover:opacity-100 opacity-90 transition duration-300 font-medium">About</a>
                    <a href="download.php" class="hover:text-white hover:opacity-100 opacity-90 transition duration-300 font-medium">Download</a>
                    <a href="https://github.com/bloa-lang/bloa-src" class="bg-white bg-opacity-20 hover:bg-opacity-30 px-3 py-2 rounded-lg transition duration-300" target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-white focus:outline-none hover:opacity-80 transition">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
            <div id="mobile-menu" class="md:hidden hidden bg-gradient-to-b from-purple-700 to-purple-800 px-4 py-3 space-y-2 rounded-b-lg">
                <a href="index.php" class="block py-2 hover:text-white hover:bg-white hover:bg-opacity-10 px-3 rounded transition">Home</a>
                <a href="docs.php" class="block py-2 hover:text-white hover:bg-white hover:bg-opacity-10 px-3 rounded transition">Docs</a>
                <a href="examples.php" class="block py-2 hover:text-white hover:bg-white hover:bg-opacity-10 px-3 rounded transition">Examples</a>
                <a href="about.php" class="block py-2 hover:text-white hover:bg-white hover:bg-opacity-10 px-3 rounded transition">About</a>
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