<?php $title = 'About - Bloa Programming Language'; include 'header.php'; ?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="mb-12">
        <h1 class="text-5xl md:text-6xl font-bold gradient-text mb-4">About Bloa</h1>
        <p class="text-xl text-gray-600">Learn about our mission and vision</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
        <div>
            <h2 class="text-3xl font-bold mb-6">What is Bloa?</h2>
            <p class="mb-4 text-gray-700 leading-relaxed">Bloa is a minimalist scripting language designed to be simple, readable, and powerful. It combines the ease of use of high-level scripting languages with the performance needed for real-world applications.</p>
            <p class="mb-6 text-gray-700 leading-relaxed">The language was created to fill the gap between complex, feature-heavy languages and overly simplistic ones. Bloa aims to provide just the right amount of features to be productive without overwhelming developers.</p>

            <h3 class="text-2xl font-bold mb-6">Key Principles</h3>
            <ul class="space-y-3">
                <li class="flex items-start">
                    <i class="fas fa-check text-green-500 mr-3 mt-1 flex-shrink-0"></i>
                    <div>
                        <strong class="text-lg">Simplicity:</strong>
                        <p class="text-gray-700">Clean, readable syntax that's easy to learn</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-check text-green-500 mr-3 mt-1 flex-shrink-0"></i>
                    <div>
                        <strong class="text-lg">Power:</strong>
                        <p class="text-gray-700">Rich features including OOP, modules, and exception handling</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-check text-green-500 mr-3 mt-1 flex-shrink-0"></i>
                    <div>
                        <strong class="text-lg">Performance:</strong>
                        <p class="text-gray-700">Fast execution with a C++-based interpreter</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-check text-green-500 mr-3 mt-1 flex-shrink-0"></i>
                    <div>
                        <strong class="text-lg">Extensibility:</strong>
                        <p class="text-gray-700">Easy to extend with modules and libraries</p>
                    </div>
                </li>
            </ul>
        </div>

        <div>
            <h2 class="text-3xl font-bold mb-6">Features Overview</h2>
            <div class="space-y-4">
                <div class="card-hover bg-white p-5 rounded-lg border border-gray-100 shadow-md">
                    <div class="flex items-start">
                        <i class="fas fa-code text-blue-600 text-2xl mr-4 mt-1 flex-shrink-0"></i>
                        <div>
                            <h3 class="font-bold text-lg mb-1">Dynamic Typing</h3>
                            <p class="text-gray-600 text-sm">Variables can hold any type without explicit declarations.</p>
                        </div>
                    </div>
                </div>
                <div class="card-hover bg-white p-5 rounded-lg border border-gray-100 shadow-md">
                    <div class="flex items-start">
                        <i class="fas fa-cogs text-green-600 text-2xl mr-4 mt-1 flex-shrink-0"></i>
                        <div>
                            <h3 class="font-bold text-lg mb-1">Object-Oriented Programming</h3>
                            <p class="text-gray-600 text-sm">Classes, inheritance, and polymorphism support.</p>
                        </div>
                    </div>
                </div>
                <div class="card-hover bg-white p-5 rounded-lg border border-gray-100 shadow-md">
                    <div class="flex items-start">
                        <i class="fas fa-puzzle-piece text-purple-600 text-2xl mr-4 mt-1 flex-shrink-0"></i>
                        <div>
                            <h3 class="font-bold text-lg mb-1">Modular Design</h3>
                            <p class="text-gray-600 text-sm">Import and organize code with modules and files.</p>
                        </div>
                    </div>
                </div>
                <div class="card-hover bg-white p-5 rounded-lg border border-gray-100 shadow-md">
                    <div class="flex items-start">
                        <i class="fas fa-shield-alt text-red-600 text-2xl mr-4 mt-1 flex-shrink-0"></i>
                        <div>
                            <h3 class="font-bold text-lg mb-1">Exception Handling</h3>
                            <p class="text-gray-600 text-sm">Robust error handling with try/except blocks.</p>
                        </div>
                    </div>
                </div>
                <div class="card-hover bg-white p-5 rounded-lg border border-gray-100 shadow-md">
                    <div class="flex items-start">
                        <i class="fas fa-book text-indigo-600 text-2xl mr-4 mt-1 flex-shrink-0"></i>
                        <div>
                            <h3 class="font-bold text-lg mb-1">Rich Standard Library</h3>
                            <p class="text-gray-600 text-sm">Math, I/O, string manipulation, and more.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-16">
        <h2 class="text-3xl font-bold mb-8">Architecture</h2>
        <p class="mb-8 text-gray-700 text-lg">Bloa is implemented as an interpreter written in C++. The architecture consists of several key components:</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="card-hover bg-white p-8 rounded-xl shadow-lg border border-gray-100">
                <i class="fas fa-code-branch text-3xl text-purple-600 mb-4"></i>
                <h3 class="text-xl font-bold mb-3">Parser</h3>
                <p class="text-gray-600">Converts Bloa source code into an Abstract Syntax Tree (AST) for execution.</p>
            </div>
            <div class="card-hover bg-white p-8 rounded-xl shadow-lg border border-gray-100">
                <i class="fas fa-play text-3xl text-purple-600 mb-4"></i>
                <h3 class="text-xl font-bold mb-3">Interpreter</h3>
                <p class="text-gray-600">Executes the AST, managing variables, functions, and control flow.</p>
            </div>
            <div class="card-hover bg-white p-8 rounded-xl shadow-lg border border-gray-100">
                <i class="fas fa-database text-3xl text-purple-600 mb-4"></i>
                <h3 class="text-xl font-bold mb-3">Environment</h3>
                <p class="text-gray-600">Handles variable scoping, function definitions, and object instances.</p>
            </div>
        </div>
    </div>

    <div class="bg-gradient-to-br from-purple-50 to-blue-50 p-12 rounded-xl">
        <h2 class="text-3xl font-bold mb-8">Getting Involved</h2>
        <p class="mb-8 text-gray-700 text-lg">Bloa is an open-source project hosted on GitHub. We welcome contributions from the community!</p>
        <div class="flex flex-wrap gap-4">
            <a href="https://github.com/bloa-lang/bloa-src" class="gradient-primary text-white px-8 py-3 rounded-lg font-bold hover:shadow-lg transition duration-300" target="_blank">
                <i class="fab fa-github mr-2"></i>View on GitHub
            </a>
            <a href="docs.php" class="border-2 border-purple-600 text-purple-600 px-8 py-3 rounded-lg font-bold hover:bg-purple-50 transition duration-300">
                <i class="fas fa-book mr-2"></i>Read Documentation
            </a>
            <a href="examples.php" class="border-2 border-purple-600 text-purple-600 px-8 py-3 rounded-lg font-bold hover:bg-purple-50 transition duration-300">
                <i class="fas fa-code mr-2"></i>Try Examples
            </a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>