<?php $title = 'Download - Bloa Programming Language'; include 'header.php'; ?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="mb-12">
        <h1 class="text-5xl md:text-6xl font-bold gradient-text mb-4">Download Bloa</h1>
        <p class="text-xl text-gray-600">Get started with the Bloa programming language</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
        <div>
            <h2 class="text-3xl font-bold mb-6">Source Code</h2>
            <p class="mb-6 text-gray-700 leading-relaxed">The latest source code is available on GitHub. You can clone the repository and build Bloa yourself.</p>

            <div class="bg-white p-6 rounded-lg border border-gray-100 shadow-md mb-6">
                <h3 class="text-lg font-bold mb-4 text-purple-600">Clone Repository</h3>
                <pre class="code bg-gray-900 text-gray-100 p-4 rounded border border-gray-700 overflow-x-auto text-sm"><code>git clone https://github.com/bloa-lang/bloa-src.git
cd bloa-src
mkdir build && cd build
cmake ..
make</code></pre>
            </div>

            <a href="https://github.com/bloa-lang/bloa-src" class="gradient-primary text-white px-8 py-4 rounded-lg font-bold hover:shadow-lg transition duration-300 inline-block" target="_blank">
                <i class="fab fa-github mr-2"></i>GitHub Repository
            </a>
        </div>

        <div>
            <h2 class="text-3xl font-bold mb-6">Installation</h2>
            <p class="mb-6 text-gray-700 leading-relaxed">After building, you can install Bloa system-wide or run it locally.</p>

            <h3 class="text-xl font-bold mb-4">System Requirements</h3>
            <ul class="space-y-3 mb-6">
                <li class="flex items-start">
                    <i class="fas fa-check text-green-500 mr-3 mt-1 flex-shrink-0"></i>
                    <span class="text-gray-700">C++17 compatible compiler (GCC, Clang, MSVC)</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-check text-green-500 mr-3 mt-1 flex-shrink-0"></i>
                    <span class="text-gray-700">CMake 3.16 or higher</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-check text-green-500 mr-3 mt-1 flex-shrink-0"></i>
                    <span class="text-gray-700">Standard C++ libraries</span>
                </li>
            </ul>

            <h3 class="text-xl font-bold mb-4">Quick Start</h3>
            <ol class="space-y-2 text-gray-700">
                <li class="flex">
                    <span class="bg-purple-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 flex-shrink-0">1</span>
                    Clone the repository
                </li>
                <li class="flex">
                    <span class="bg-purple-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 flex-shrink-0">2</span>
                    Create a build directory: <code class="bg-gray-100 px-2 py-1 rounded mx-1">mkdir build && cd build</code>
                </li>
                <li class="flex">
                    <span class="bg-purple-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 flex-shrink-0">3</span>
                    Configure with CMake: <code class="bg-gray-100 px-2 py-1 rounded mx-1">cmake ..</code>
                </li>
                <li class="flex">
                    <span class="bg-purple-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 flex-shrink-0">4</span>
                    Build: <code class="bg-gray-100 px-2 py-1 rounded mx-1">make</code>
                </li>
                <li class="flex">
                    <span class="bg-purple-600 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 flex-shrink-0">5</span>
                    Run: <code class="bg-gray-100 px-2 py-1 rounded mx-1">./bloa ../examples/hello.bloa</code>
                </li>
            </ol>
        </div>
    </div>

    <div class="mb-16">
        <h2 class="text-3xl font-bold mb-8">Package Managers</h2>
        <p class="mb-8 text-gray-700 text-lg">Coming soon: Pre-built packages for popular package managers.</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="card-hover bg-white p-8 rounded-xl shadow-lg border border-gray-100 text-center">
                <i class="fab fa-ubuntu text-5xl text-orange-500 mb-4"></i>
                <h3 class="text-xl font-bold mb-2">Ubuntu/Debian</h3>
                <p class="text-gray-600">APT packages coming soon</p>
            </div>
            <div class="card-hover bg-white p-8 rounded-xl shadow-lg border border-gray-100 text-center">
                <i class="fab fa-apple text-5xl text-gray-800 mb-4"></i>
                <h3 class="text-xl font-bold mb-2">macOS</h3>
                <p class="text-gray-600">Homebrew formula coming soon</p>
            </div>
            <div class="card-hover bg-white p-8 rounded-xl shadow-lg border border-gray-100 text-center">
                <i class="fab fa-windows text-5xl text-blue-600 mb-4"></i>
                <h3 class="text-xl font-bold mb-2">Windows</h3>
                <p class="text-gray-600">MSI installer coming soon</p>
            </div>
        </div>
    </div>

    <div class="mb-16">
        <h2 class="text-3xl font-bold mb-8">Try Bloa Now</h2>
        <p class="mb-8 text-gray-700 text-lg">Explore Bloa with these example scripts:</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-100">
                <h3 class="text-xl font-bold mb-4">Hello World</h3>
                <pre class="code bg-gray-900 text-gray-100 p-4 rounded border border-gray-700 text-sm mb-4 overflow-x-auto"><code>say("Hello, World!")</code></pre>
                <p class="text-sm text-gray-600">Save as <code class="bg-gray-100 px-2 py-1 rounded">hello.bloa</code> and run with <code class="bg-gray-100 px-2 py-1 rounded">./bloa hello.bloa</code></p>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-100">
                <h3 class="text-xl font-bold mb-4">Simple Calculator</h3>
                <pre class="code bg-gray-900 text-gray-100 p-4 rounded border border-gray-700 text-sm mb-4 overflow-x-auto"><code>a = ask("Enter first number: ")
b = ask("Enter second number: ")
sum = int(a) + int(b)
say("Sum: " + str(sum))</code></pre>
                <p class="text-sm text-gray-600">An interactive calculator script</p>
            </div>
        </div>
    </div>

    <div class="bg-gradient-to-br from-purple-50 to-blue-50 p-12 rounded-xl">
        <div class="flex items-start">
            <i class="fas fa-lightbulb text-3xl text-purple-600 mr-4 flex-shrink-0 mt-1"></i>
            <div>
                <h2 class="text-3xl font-bold mb-4">Need Help?</h2>
                <p class="mb-6 text-gray-700 text-lg">If you encounter any issues during installation or have questions:</p>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <i class="fas fa-arrow-right text-purple-600 mr-3 mt-1 flex-shrink-0"></i>
                        <span class="text-gray-700">Check the <a href="docs.php" class="text-purple-600 font-semibold hover:underline">documentation</a> for detailed instructions</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-arrow-right text-purple-600 mr-3 mt-1 flex-shrink-0"></i>
                        <span class="text-gray-700">Look at the <a href="examples.php" class="text-purple-600 font-semibold hover:underline">examples</a> for code samples</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-arrow-right text-purple-600 mr-3 mt-1 flex-shrink-0"></i>
                        <span class="text-gray-700">Open an issue on <a href="https://github.com/bloa-lang/bloa-src/issues" class="text-purple-600 font-semibold hover:underline" target="_blank">GitHub</a></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>