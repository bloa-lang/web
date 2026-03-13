<?php $title = 'About - Bloa Programming Language'; include 'header.php'; ?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <h1 class="text-4xl font-bold mb-8">About Bloa</h1>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <div>
            <h2 class="text-2xl font-bold mb-4">What is Bloa?</h2>
            <p class="mb-4">Bloa is a minimalist scripting language designed to be simple, readable, and powerful. It combines the ease of use of high-level scripting languages with the performance needed for real-world applications.</p>
            <p class="mb-4">The language was created to fill the gap between complex, feature-heavy languages and overly simplistic ones. Bloa aims to provide just the right amount of features to be productive without overwhelming developers.</p>

            <h3 class="text-xl font-semibold mb-2 mt-6">Key Principles</h3>
            <ul class="list-disc list-inside space-y-1 mb-4">
                <li><strong>Simplicity:</strong> Clean, readable syntax that's easy to learn</li>
                <li><strong>Power:</strong> Rich features including OOP, modules, and exception handling</li>
                <li><strong>Performance:</strong> Fast execution with a C++-based interpreter</li>
                <li><strong>Extensibility:</strong> Easy to extend with modules and libraries</li>
            </ul>
        </div>

        <div>
            <h2 class="text-2xl font-bold mb-4">Features Overview</h2>
            <div class="space-y-4">
                <div class="flex items-start">
                    <i class="fas fa-code text-blue-600 text-2xl mr-4 mt-1"></i>
                    <div>
                        <h3 class="font-semibold">Dynamic Typing</h3>
                        <p class="text-sm text-gray-600">Variables can hold any type without explicit declarations.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <i class="fas fa-cogs text-green-600 text-2xl mr-4 mt-1"></i>
                    <div>
                        <h3 class="font-semibold">Object-Oriented Programming</h3>
                        <p class="text-sm text-gray-600">Classes, inheritance, and polymorphism support.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <i class="fas fa-puzzle-piece text-purple-600 text-2xl mr-4 mt-1"></i>
                    <div>
                        <h3 class="font-semibold">Modular Design</h3>
                        <p class="text-sm text-gray-600">Import and organize code with modules and files.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <i class="fas fa-shield-alt text-red-600 text-2xl mr-4 mt-1"></i>
                    <div>
                        <h3 class="font-semibold">Exception Handling</h3>
                        <p class="text-sm text-gray-600">Robust error handling with try/except blocks.</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <i class="fas fa-book text-indigo-600 text-2xl mr-4 mt-1"></i>
                    <div>
                        <h3 class="font-semibold">Rich Standard Library</h3>
                        <p class="text-sm text-gray-600">Math, I/O, string manipulation, and more.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-12">
        <h2 class="text-2xl font-bold mb-4">Architecture</h2>
        <p class="mb-4">Bloa is implemented as an interpreter written in C++. The architecture consists of several key components:</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold mb-2">Parser</h3>
                <p class="text-sm">Converts Bloa source code into an Abstract Syntax Tree (AST) for execution.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold mb-2">Interpreter</h3>
                <p class="text-sm">Executes the AST, managing variables, functions, and control flow.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold mb-2">Environment</h3>
                <p class="text-sm">Handles variable scoping, function definitions, and object instances.</p>
            </div>
        </div>
    </div>

    <div class="mt-12">
        <h2 class="text-2xl font-bold mb-4">Getting Involved</h2>
        <p class="mb-4">Bloa is an open-source project hosted on GitHub. We welcome contributions from the community!</p>
        <div class="flex flex-wrap gap-4">
            <a href="https://github.com/bloa-lang/bloa-src" class="bg-gray-800 text-white px-6 py-3 rounded-lg hover:bg-gray-700 transition">
                <i class="fab fa-github mr-2"></i>View on GitHub
            </a>
            <a href="docs.php" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                <i class="fas fa-book mr-2"></i>Read Documentation
            </a>
            <a href="examples.php" class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition">
                <i class="fas fa-code mr-2"></i>Try Examples
            </a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>