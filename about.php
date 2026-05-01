<?php $title = 'About - Bloa Programming Language'; include 'header.php'; ?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="mb-12">
        <h1 class="text-5xl md:text-6xl font-bold mb-4 bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent">About Bloa</h1>
        <p class="text-xl text-gray-400">Learn about our mission and vision</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-20">
        <div>
            <h2 class="text-3xl font-bold mb-6 text-white">What is Bloa?</h2>
            <p class="mb-4 text-gray-300 leading-relaxed">Bloa is a minimalist scripting language designed to be simple, readable, and powerful. It combines the ease of use of high-level scripting languages with the performance needed for real-world applications.</p>
            <p class="mb-6 text-gray-300 leading-relaxed">The language was created to fill the gap between complex, feature-heavy languages and overly simplistic ones. Bloa aims to provide just the right amount of features to be productive without overwhelming developers.</p>

            <h3 class="text-2xl font-bold mb-6 text-white">Key Principles</h3>
            <ul class="space-y-4">
                <li class="flex items-start">
                    <i class="fas fa-check text-cyan-400 mr-3 mt-1 flex-shrink-0 text-xl"></i>
                    <div>
                        <strong class="text-lg text-white">Simplicity:</strong>
                        <p class="text-gray-400">Clean, readable syntax that's easy to learn</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-check text-cyan-400 mr-3 mt-1 flex-shrink-0 text-xl"></i>
                    <div>
                        <strong class="text-lg text-white">Power:</strong>
                        <p class="text-gray-400">Rich features including OOP, modules, and exception handling</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-check text-cyan-400 mr-3 mt-1 flex-shrink-0 text-xl"></i>
                    <div>
                        <strong class="text-lg text-white">Performance:</strong>
                        <p class="text-gray-400">Fast execution with a C++-based interpreter</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-check text-cyan-400 mr-3 mt-1 flex-shrink-0 text-xl"></i>
                    <div>
                        <strong class="text-lg text-white">Extensibility:</strong>
                        <p class="text-gray-400">Easy to extend with modules and libraries</p>
                    </div>
                </li>
            </ul>
        </div>

        <div>
            <h2 class="text-3xl font-bold mb-6 text-white">Features Overview</h2>
            <div class="space-y-4">
                <div class="card-hover bg-gray-900 p-5 rounded-lg border border-gray-800 shadow-md">
                    <div class="flex items-start">
                        <i class="fas fa-code text-blue-400 text-2xl mr-4 mt-1 flex-shrink-0"></i>
                        <div>
                            <h3 class="font-bold text-lg mb-1 text-white">Dynamic Typing</h3>
                            <p class="text-gray-400 text-sm">Variables can hold any type without explicit declarations.</p>
                        </div>
                    </div>
                </div>
                <div class="card-hover bg-gray-900 p-5 rounded-lg border border-gray-800 shadow-md">
                    <div class="flex items-start">
                        <i class="fas fa-cogs text-green-400 text-2xl mr-4 mt-1 flex-shrink-0"></i>
                        <div>
                            <h3 class="font-bold text-lg mb-1 text-white">Object-Oriented Programming</h3>
                            <p class="text-gray-400 text-sm">Classes, inheritance, and polymorphism support.</p>
                        </div>
                    </div>
                </div>
                <div class="card-hover bg-gray-900 p-5 rounded-lg border border-gray-800 shadow-md">
                    <div class="flex items-start">
                        <i class="fas fa-puzzle-piece text-purple-400 text-2xl mr-4 mt-1 flex-shrink-0"></i>
                        <div>
                            <h3 class="font-bold text-lg mb-1 text-white">Modular Design</h3>
                            <p class="text-gray-400 text-sm">Import and organize code with modules and files.</p>
                        </div>
                    </div>
                </div>
                <div class="card-hover bg-gray-900 p-5 rounded-lg border border-gray-800 shadow-md">
                    <div class="flex items-start">
                        <i class="fas fa-shield-alt text-red-400 text-2xl mr-4 mt-1 flex-shrink-0"></i>
                        <div>
                            <h3 class="font-bold text-lg mb-1 text-white">Exception Handling</h3>
                            <p class="text-gray-400 text-sm">Robust error handling with try/except blocks.</p>
                        </div>
                    </div>
                </div>
                <div class="card-hover bg-gray-900 p-5 rounded-lg border border-gray-800 shadow-md">
                    <div class="flex items-start">
                        <i class="fas fa-book text-indigo-400 text-2xl mr-4 mt-1 flex-shrink-0"></i>
                        <div>
                            <h3 class="font-bold text-lg mb-1 text-white">Rich Standard Library</h3>
                            <p class="text-gray-400 text-sm">Math, I/O, string manipulation, and more.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-20 border-t border-gray-800 pt-12">
        <h2 class="text-3xl font-bold mb-10 text-white">Architecture</h2>
        <p class="mb-10 text-gray-300 text-lg">Bloa is implemented as an interpreter written in C++. The architecture consists of several key components:</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="card-hover bg-gray-900 p-8 rounded-xl shadow-lg border border-gray-800">
                <i class="fas fa-code-branch text-3xl text-cyan-400 mb-4"></i>
                <h3 class="text-xl font-bold mb-3 text-white">Parser</h3>
                <p class="text-gray-400">Converts Bloa source code into an Abstract Syntax Tree (AST) for execution.</p>
            </div>
            <div class="card-hover bg-gray-900 p-8 rounded-xl shadow-lg border border-gray-800">
                <i class="fas fa-play text-3xl text-cyan-400 mb-4"></i>
                <h3 class="text-xl font-bold mb-3 text-white">Interpreter</h3>
                <p class="text-gray-400">Executes the AST, managing variables, functions, and control flow.</p>
            </div>
            <div class="card-hover bg-gray-900 p-8 rounded-xl shadow-lg border border-gray-800">
                <i class="fas fa-database text-3xl text-cyan-400 mb-4"></i>
                <h3 class="text-xl font-bold mb-3 text-white">Environment</h3>
                <p class="text-gray-400">Handles variable scoping, function definitions, and object instances.</p>
            </div>
        </div>
    </div>

    <div class="bg-white/90 dark:bg-gradient-to-br dark:from-gray-900 dark:to-black p-12 rounded-xl border border-gray-200 dark:border-gray-800">
        <h2 class="text-3xl font-bold mb-8 text-gray-900 dark:text-white">Getting Involved</h2>
        <p class="mb-8 text-gray-700 dark:text-gray-300 text-lg leading-relaxed">Bloa is an open-source project hosted on GitHub. We welcome contributions from the community including bug reports, feature requests, and pull requests.</p>
        <div class="flex flex-wrap gap-4">
            <a href="https://github.com/bloa-lang/bloa-src" class="bg-cyan-500 text-black px-8 py-3 rounded-lg font-bold hover:bg-cyan-400 transition duration-300" target="_blank">
                <i class="fab fa-github mr-2"></i>View on GitHub
            </a>
            <a href="/docs" class="border-2 border-cyan-500 text-cyan-500 dark:text-cyan-300 px-8 py-3 rounded-lg font-bold hover:bg-cyan-500 hover:text-white transition duration-300">
                <i class="fas fa-book mr-2"></i>Read Documentation
            </a>
            <a href="/examples" class="border-2 border-cyan-500 text-cyan-500 dark:text-cyan-300 px-8 py-3 rounded-lg font-bold hover:bg-cyan-500 hover:text-white transition duration-300">
                <i class="fas fa-code mr-2"></i>Try Examples
            </a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>