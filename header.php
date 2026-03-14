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
    </style>
</head>
<body class="bg-gray-100 text-gray-900">
    <nav class="bg-gradient-to-r from-blue-600 to-purple-600 text-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="index.php" class="text-xl font-bold flex items-center space-x-2">
                        <i class="fas fa-code"></i>
                        <span>Bloa</span>
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-6">
                    <a href="index.php" class="hover:text-blue-200 transition duration-300">Home</a>
                    <a href="docs.php" class="hover:text-blue-200 transition duration-300">Docs</a>
                    <a href="examples.php" class="hover:text-blue-200 transition duration-300">Examples</a>
                    <a href="about.php" class="hover:text-blue-200 transition duration-300">About</a>
                    <a href="download.php" class="hover:text-blue-200 transition duration-300">Download</a>
                    <a href="https://github.com/bloa-lang/bloa-src" class="hover:text-blue-200 transition duration-300" target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-white focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
            <div id="mobile-menu" class="md:hidden hidden bg-blue-700 px-4 py-2 space-y-2">
                <a href="index.php" class="block hover:text-blue-200 transition duration-300">Home</a>
                <a href="docs.php" class="block hover:text-blue-200 transition duration-300">Docs</a>
                <a href="examples.php" class="block hover:text-blue-200 transition duration-300">Examples</a>
                <a href="about.php" class="block hover:text-blue-200 transition duration-300">About</a>
                <a href="download.php" class="block hover:text-blue-200 transition duration-300">Download</a>
                <a href="https://github.com/bloa-lang/bloa-src" class="block hover:text-blue-200 transition duration-300" target="_blank">
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