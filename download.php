<?php $title = 'Download - Bloa Programming Language'; include 'header.php'; ?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="mb-12">
        <h1 class="text-5xl md:text-6xl font-bold mb-4 bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent">Download Bloa</h1>
        <p class="text-xl text-gray-400">Get started with the Bloa programming language</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-20">
        <div>
            <h2 class="text-3xl font-bold mb-6 text-white">Source Code</h2>
            <p class="mb-6 text-gray-300 leading-relaxed">The latest source code is available on GitHub. You can clone the repository and build Bloa yourself.</p>

            <div class="bg-gray-900 p-6 rounded-lg border border-gray-800 shadow-md mb-8">
                <h3 class="text-lg font-bold mb-4 text-cyan-400">Clone Repository</h3>
                <pre class="code bg-black text-gray-100 p-4 rounded border border-gray-800 overflow-x-auto text-sm"><code>git clone https://github.com/bloa-lang/bloa-src.git
cd bloa-src
mkdir build && cd build
cmake ..
make</code></pre>
            </div>

            <a href="https://github.com/bloa-lang/bloa-src" class="inline-block bg-cyan-500 text-black px-8 py-4 rounded-lg font-bold hover:bg-cyan-400 hover:shadow-lg hover:shadow-cyan-500/50 transition duration-300" target="_blank">
                <i class="fab fa-github mr-2"></i>GitHub Repository
            </a>
        </div>

        <div>
            <h2 class="text-3xl font-bold mb-6 text-white">Installation</h2>
            <p class="mb-6 text-gray-300 leading-relaxed">After building, you can install Bloa system-wide or run it locally.</p>

            <h3 class="text-xl font-bold mb-4 text-white">System Requirements</h3>
            <ul class="space-y-3 mb-8">
                <li class="flex items-start">
                    <i class="fas fa-check text-cyan-400 mr-3 mt-1 flex-shrink-0 text-lg"></i>
                    <span class="text-gray-300">C++17 compatible compiler (GCC, Clang, MSVC)</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-check text-cyan-400 mr-3 mt-1 flex-shrink-0 text-lg"></i>
                    <span class="text-gray-300">CMake 3.16 or higher</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-check text-cyan-400 mr-3 mt-1 flex-shrink-0 text-lg"></i>
                    <span class="text-gray-300">Standard C++ libraries</span>
                </li>
            </ul>

            <h3 class="text-xl font-bold mb-4 text-white">Quick Start</h3>
            <ol class="space-y-3 text-gray-300">
                <li class="flex">
                    <span class="bg-cyan-500 text-black rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 flex-shrink-0 font-bold">1</span>
                    Clone the repository
                </li>
                <li class="flex">
                    <span class="bg-cyan-500 text-black rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 flex-shrink-0 font-bold">2</span>
                    Create a build directory: <code class="bg-gray-800 px-2 py-1 rounded mx-1 text-cyan-400">mkdir build && cd build</code>
                </li>
                <li class="flex">
                    <span class="bg-cyan-500 text-black rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 flex-shrink-0 font-bold">3</span>
                    Configure with CMake: <code class="bg-gray-800 px-2 py-1 rounded mx-1 text-cyan-400">cmake ..</code>
                </li>
                <li class="flex">
                    <span class="bg-cyan-500 text-black rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 flex-shrink-0 font-bold">4</span>
                    Build: <code class="bg-gray-800 px-2 py-1 rounded mx-1 text-cyan-400">make</code>
                </li>
                <li class="flex">
                    <span class="bg-cyan-500 text-black rounded-full w-6 h-6 flex items-center justify-center text-sm mr-3 flex-shrink-0 font-bold">5</span>
                    Run: <code class="bg-gray-800 px-2 py-1 rounded mx-1 text-cyan-400">./bloa ../examples/hello.bloa</code>
                </li>
            </ol>
        </div>
    </div>

    <div class="mb-20 border-t border-gray-800 pt-12">
        <h2 class="text-3xl font-bold mb-10 text-white">Package Managers</h2>
        <p class="mb-10 text-gray-300 text-lg">Coming soon: Pre-built packages for popular package managers.</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="card-hover bg-gray-900 p-8 rounded-xl shadow-lg border border-gray-800 text-center">
                <i class="fab fa-ubuntu text-5xl text-orange-500 mb-4"></i>
                <h3 class="text-xl font-bold mb-2 text-white">Ubuntu/Debian</h3>
                <p class="text-gray-400">APT packages coming soon</p>
            </div>
            <div class="card-hover bg-gray-900 p-8 rounded-xl shadow-lg border border-gray-800 text-center">
                <i class="fab fa-apple text-5xl text-gray-300 mb-4"></i>
                <h3 class="text-xl font-bold mb-2 text-white">macOS</h3>
                <p class="text-gray-400">Homebrew formula coming soon</p>
            </div>
            <div class="card-hover bg-gray-900 p-8 rounded-xl shadow-lg border border-gray-800 text-center">
                <i class="fab fa-windows text-5xl text-blue-500 mb-4"></i>
                <h3 class="text-xl font-bold mb-2 text-white">Windows</h3>
                <p class="text-gray-400">MSI installer coming soon</p>
            </div>
        </div>
    </div>

    <div class="mb-16">
        <h2 class="text-3xl font-bold mb-8 text-white">Try Bloa Now</h2>
        <p class="mb-8 text-gray-300 text-lg">Explore Bloa with these example scripts:</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-gray-900 p-8 rounded-xl shadow-lg border border-gray-800">
                <h3 class="text-xl font-bold mb-4 text-white">Hello World</h3>
                <pre class="code bg-black text-gray-100 p-4 rounded border border-gray-800 text-sm mb-4 overflow-x-auto"><code>say("Hello, World!")</code></pre>
                <p class="text-sm text-gray-400">Save as <code class="bg-gray-800 px-2 py-1 rounded text-cyan-400">hello.bloa</code> and run with <code class="bg-gray-800 px-2 py-1 rounded text-cyan-400">./bloa hello.bloa</code></p>
            </div>
            <div class="bg-gray-900 p-8 rounded-xl shadow-lg border border-gray-800">
                <h3 class="text-xl font-bold mb-4 text-white">Simple Calculator</h3>
                <pre class="code bg-black text-gray-100 p-4 rounded border border-gray-800 text-sm mb-4 overflow-x-auto"><code>a = ask("Enter first number: ")
b = ask("Enter second number: ")
sum = int(a) + int(b)
say("Sum: " + str(sum))</code></pre>
                <p class="text-sm text-gray-400">An interactive calculator script</p>
            </div>
        </div>
    </div>

    <div class="bg-white/95 dark:bg-gradient-to-br dark:from-gray-900 dark:to-black p-12 rounded-xl border border-gray-200 dark:border-gray-800">
        <div class="flex items-start">
            <i class="fas fa-lightbulb text-3xl text-cyan-400 mr-4 flex-shrink-0 mt-1"></i>
            <div>
                <h2 class="text-3xl font-bold mb-4 text-gray-900 dark:text-white">Need Help?</h2>
                <p class="mb-6 text-gray-700 dark:text-gray-300 text-lg leading-relaxed">If you encounter any issues during installation or have questions:</p>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <i class="fas fa-arrow-right text-cyan-400 mr-3 mt-1 flex-shrink-0"></i>
                        <span class="text-gray-700 dark:text-gray-300">Check the <a href="/docs" class="text-cyan-500 dark:text-cyan-300 font-semibold hover:text-cyan-400 transition">documentation</a> for detailed instructions</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-arrow-right text-cyan-400 mr-3 mt-1 flex-shrink-0"></i>
                        <span class="text-gray-700 dark:text-gray-300">Look at the <a href="/examples" class="text-cyan-500 dark:text-cyan-300 font-semibold hover:text-cyan-400 transition">examples</a> for code samples</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-arrow-right text-cyan-400 mr-3 mt-1 flex-shrink-0"></i>
                        <span class="text-gray-300">Open an issue on <a href="https://github.com/bloa-lang/bloa-src/issues" class="text-cyan-400 font-semibold hover:text-cyan-300 transition" target="_blank">GitHub</a></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>