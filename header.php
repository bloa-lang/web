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
    <nav class="bg-blue-600 text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="index.php" class="text-xl font-bold">Bloa</a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="index.php" class="hover:bg-blue-700 px-3 py-2 rounded">Home</a>
                    <a href="docs.php" class="hover:bg-blue-700 px-3 py-2 rounded">Docs</a>
                    <a href="examples.php" class="hover:bg-blue-700 px-3 py-2 rounded">Examples</a>
                    <a href="about.php" class="hover:bg-blue-700 px-3 py-2 rounded">About</a>
                    <a href="download.php" class="hover:bg-blue-700 px-3 py-2 rounded">Download</a>
                </div>
            </div>
        </div>
    </nav>