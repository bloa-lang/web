<?php $title = 'Download - Bloa Programming Language'; include 'header.php'; ?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <h1 class="text-4xl font-bold mb-8">Download Bloa</h1>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <div>
            <h2 class="text-2xl font-bold mb-4">Source Code</h2>
            <p class="mb-4">The latest source code is available on GitHub. You can clone the repository and build Bloa yourself.</p>

            <div class="bg-gray-100 p-6 rounded-lg mb-6">
                <h3 class="text-lg font-semibold mb-2">Clone Repository</h3>
                <pre class="code bg-white p-4 rounded border"><code>git clone https://github.com/bloa-lang/bloa-src.git
cd bloa-src
mkdir build && cd build
cmake ..
make</code></pre>
            </div>

            <a href="https://github.com/bloa-lang/bloa-src" class="bg-gray-800 text-white px-6 py-3 rounded-lg hover:bg-gray-700 transition inline-block">
                <i class="fab fa-github mr-2"></i>GitHub Repository
            </a>
        </div>

        <div>
            <h2 class="text-2xl font-bold mb-4">Installation</h2>
            <p class="mb-4">After building, you can install Bloa system-wide or run it locally.</p>

            <h3 class="text-lg font-semibold mb-2">System Requirements</h3>
            <ul class="list-disc list-inside space-y-1 mb-4">
                <li>C++17 compatible compiler (GCC, Clang, MSVC)</li>
                <li>CMake 3.16 or higher</li>
                <li>Standard C++ libraries</li>
            </ul>

            <h3 class="text-lg font-semibold mb-2">Quick Start</h3>
            <ol class="list-decimal list-inside space-y-2 mb-4">
                <li>Clone the repository</li>
                <li>Create a build directory: <code>mkdir build && cd build</code></li>
                <li>Configure with CMake: <code>cmake ..</code></li>
                <li>Build: <code>make</code></li>
                <li>Run: <code>./bloa ../examples/hello.bloa</code></li>
            </ol>
        </div>
    </div>

    <div class="mt-12">
        <h2 class="text-2xl font-bold mb-4">Package Managers</h2>
        <p class="mb-4">Coming soon: Pre-built packages for popular package managers.</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <i class="fab fa-ubuntu text-4xl text-orange-600 mb-4"></i>
                <h3 class="text-lg font-semibold">Ubuntu/Debian</h3>
                <p class="text-sm text-gray-600">APT packages coming soon</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <i class="fab fa-apple text-4xl text-gray-800 mb-4"></i>
                <h3 class="text-lg font-semibold">macOS</h3>
                <p class="text-sm text-gray-600">Homebrew formula coming soon</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <i class="fab fa-windows text-4xl text-blue-600 mb-4"></i>
                <h3 class="text-lg font-semibold">Windows</h3>
                <p class="text-sm text-gray-600">MSI installer coming soon</p>
            </div>
        </div>
    </div>

    <div class="mt-12">
        <h2 class="text-2xl font-bold mb-4">Examples</h2>
        <p class="mb-4">Try Bloa with these example scripts:</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-gray-100 p-6 rounded-lg">
                <h3 class="text-lg font-semibold mb-2">Hello World</h3>
                <pre class="code bg-white p-4 rounded text-sm"><code>say("Hello, World!")</code></pre>
                <p class="text-sm text-gray-600 mt-2">Save as <code>hello.bloa</code> and run with <code>./bloa hello.bloa</code></p>
            </div>
            <div class="bg-gray-100 p-6 rounded-lg">
                <h3 class="text-lg font-semibold mb-2">Simple Calculator</h3>
                <pre class="code bg-white p-4 rounded text-sm"><code>a = ask("Enter first number: ")
b = ask("Enter second number: ")
sum = int(a) + int(b)
say("Sum: " + str(sum))</code></pre>
                <p class="text-sm text-gray-600 mt-2">Interactive calculator script</p>
            </div>
        </div>
    </div>

    <div class="mt-12 bg-blue-50 p-8 rounded-lg">
        <h2 class="text-2xl font-bold mb-4">Need Help?</h2>
        <p class="mb-4">If you encounter any issues during installation or have questions:</p>
        <ul class="list-disc list-inside space-y-1 mb-4">
            <li>Check the <a href="docs.php" class="text-blue-600 hover:underline">documentation</a> for detailed instructions</li>
            <li>Look at the <a href="examples.php" class="text-blue-600 hover:underline">examples</a> for code samples</li>
            <li>Open an issue on <a href="https://github.com/bloa-lang/bloa-src/issues" class="text-blue-600 hover:underline">GitHub</a></li>
        </ul>
    </div>
</div>

<?php include 'footer.php'; ?>