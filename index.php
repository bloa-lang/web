<?php $title = 'Home - Bloa Programming Language'; include 'header.php'; ?>

<section class="gradient-primary text-white py-32 relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-10 w-80 h-80 bg-white rounded-full mix-blend-multiply filter blur-3xl"></div>
        <div class="absolute top-0 right-10 w-80 h-80 bg-white rounded-full mix-blend-multiply filter blur-3xl animation-delay-2000"></div>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <h1 class="text-6xl md:text-7xl font-bold mb-6 leading-tight">Welcome to <span class="text-transparent bg-clip-text bg-gradient-to-r from-white to-purple-200">Bloa</span></h1>
        <p class="text-xl md:text-2xl mb-10 text-gray-100 max-w-3xl mx-auto leading-relaxed">A minimalist scripting language designed for simplicity, readability, and powerful performance.</p>
        <div class="flex flex-wrap gap-4 justify-center">
            <a href="docs.php" class="bg-white text-purple-600 px-8 py-4 rounded-lg font-bold hover:shadow-2xl hover:scale-105 transition transform duration-300">Get Started</a>
            <a href="examples.php" class="border-2 border-white text-white px-8 py-4 rounded-lg font-bold hover:bg-white hover:text-purple-600 transition duration-300">View Examples</a>
            <a href="https://github.com/bloa-lang/bloa-src" target="_blank" class="bg-white bg-opacity-20 text-white px-8 py-4 rounded-lg font-bold hover:bg-opacity-40 transition duration-300 backdrop-blur-sm">GitHub</a>
        </div>
    </div>
</section>

<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4 gradient-text">Why Choose Bloa?</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Experience the perfect balance of simplicity and power</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="card-hover bg-white p-8 rounded-xl shadow-lg border border-gray-100">
                <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-code text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Simple Syntax</h3>
                <p class="text-gray-600 leading-relaxed">Easy to learn and read, perfect for beginners and experts alike. Write more with less code.</p>
            </div>
            <div class="card-hover bg-white p-8 rounded-xl shadow-lg border border-gray-100">
                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-rocket text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Fast Execution</h3>
                <p class="text-gray-600 leading-relaxed">Built with performance in mind, executes scripts quickly and efficiently with minimal overhead.</p>
            </div>
            <div class="card-hover bg-white p-8 rounded-xl shadow-lg border border-gray-100">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-tools text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Rich Features</h3>
                <p class="text-gray-600 leading-relaxed">Supports functions, classes, modules, and a comprehensive standard library for real-world applications.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4 gradient-text">Quick Example</h2>
            <p class="text-xl text-gray-600">See how simple Bloa code is</p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
            <div class="bg-white p-8 rounded-xl shadow-xl border border-gray-100">
                <div class="flex items-center mb-4">
                    <span class="text-sm font-semibold text-gray-500 uppercase">Code Example</span>
                </div>
                <pre class="code text-sm bg-gray-900 text-gray-100 p-6 rounded-lg overflow-x-auto border border-gray-700 leading-relaxed"><code>class Calculator {
  function add(self, a, b) {
    return a + b
  }
}

calc = Calculator()
result = calc.add(5, 3)
say("Result: " + str(result))</code></pre>
            </div>
            <div class="space-y-6">
                <div class="flex space-x-4">
                    <i class="fas fa-check text-2xl text-green-500 flex-shrink-0 mt-1"></i>
                    <div>
                        <h4 class="font-bold text-lg">Clean & Readable</h4>
                        <p class="text-gray-600">Syntax that's easy to understand at first glance</p>
                    </div>
                </div>
                <div class="flex space-x-4">
                    <i class="fas fa-check text-2xl text-green-500 flex-shrink-0 mt-1"></i>
                    <div>
                        <h4 class="font-bold text-lg">Object-Oriented</h4>
                        <p class="text-gray-600">Full support for classes, inheritance, and polymorphism</p>
                    </div>
                </div>
                <div class="flex space-x-4">
                    <i class="fas fa-check text-2xl text-green-500 flex-shrink-0 mt-1"></i>
                    <div>
                        <h4 class="font-bold text-lg">Powerful</h4>
                        <p class="text-gray-600">Rich standard library with everything you need</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4 gradient-text">Get Started Today</h2>
            <p class="text-xl text-gray-600">Join the Bloa community and start building amazing applications</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="text-5xl font-bold gradient-text mb-4">01</div>
                <h3 class="text-xl font-bold mb-3">Learn</h3>
                <p class="text-gray-600 mb-4">Read our comprehensive documentation and explore examples</p>
                <a href="docs.php" class="inline-block text-purple-600 font-semibold hover:text-purple-700">Start Learning →</a>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold gradient-text mb-4">02</div>
                <h3 class="text-xl font-bold mb-3">Code</h3>
                <p class="text-gray-600 mb-4">Write your first Bloa program and experiment with the language</p>
                <a href="examples.php" class="inline-block text-purple-600 font-semibold hover:text-purple-700">View Examples →</a>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold gradient-text mb-4">03</div>
                <h3 class="text-xl font-bold mb-3">Share</h3>
                <p class="text-gray-600 mb-4">Contribute to the project and join our growing community</p>
                <a href="https://github.com/bloa-lang/bloa-src" class="inline-block text-purple-600 font-semibold hover:text-purple-700" target="_blank">Contribute →</a>
            </div>
        </div>
    </div>
</section>

<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4 gradient-text">Powerful Standard Library</h2>
            <p class="text-xl text-gray-600">Everything you need for real-world applications</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="card-hover bg-white p-8 rounded-xl shadow-lg border border-gray-100">
                <h3 class="text-xl font-bold mb-6 flex items-center"><i class="fas fa-calculator text-purple-600 mr-3"></i> Math Functions</h3>
                <div class="space-y-2 text-gray-600">
                    <p>• sqrt(x), pow(base, exp)</p>
                    <p>• sin(x), cos(x), tan(x)</p>
                    <p>• log(x), exp(x), abs(x)</p>
                    <p>• floor(x), ceil(x), round(x)</p>
                    <p>• And many more...</p>
                </div>
            </div>
            <div class="card-hover bg-white p-8 rounded-xl shadow-lg border border-gray-100">
                <h3 class="text-xl font-bold mb-6 flex items-center"><i class="fas fa-file-alt text-purple-600 mr-3"></i> File I/O</h3>
                <div class="space-y-2 text-gray-600">
                    <p>• read_file(path), write_file(path, content)</p>
                    <p>• exists(path), list_dir(path)</p>
                    <p>• mkdir(path), rmdir(path)</p>
                    <p>• remove(path), copy_file(from, to)</p>
                    <p>• And more file operations...</p>
                </div>
            </div>
            <div class="card-hover bg-white p-8 rounded-xl shadow-lg border border-gray-100">
                <h3 class="text-xl font-bold mb-6 flex items-center"><i class="fas fa-type text-purple-600 mr-3"></i> String Functions</h3>
                <div class="space-y-2 text-gray-600">
                    <p>• len(s), split(s, delim), join(list, sep)</p>
                    <p>• substr(s, start, len?), find(s, sub)</p>
                    <p>• replace(s, old, new), to_upper(s), to_lower(s)</p>
                    <p>• trim(s), contains(s, sub), reverse(s)</p>
                    <p>• And string utilities...</p>
                </div>
            </div>
            <div class="card-hover bg-white p-8 rounded-xl shadow-lg border border-gray-100">
                <h3 class="text-xl font-bold mb-6 flex items-center"><i class="fas fa-wrench text-purple-600 mr-3"></i> Utilities</h3>
                <div class="space-y-2 text-gray-600">
                    <p>• random_int(max), random_float(max)</p>
                    <p>• now() - current timestamp</p>
                    <p>• Type conversions: int(), float(), str(), bool()</p>
                    <p>• List operations: append(), length()</p>
                    <p>• More utilities available...</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gradient-to-br from-purple-50 to-blue-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-4 gradient-text">Ready to Start?</h2>
            <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">Join thousands of developers using Bloa to build fast, beautiful applications</p>
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="download.php" class="bg-gradient-primary text-white px-8 py-4 rounded-lg font-bold hover:shadow-2xl transition duration-300">Download Now</a>
                <a href="docs.php" class="border-2 border-purple-600 text-purple-600 px-8 py-4 rounded-lg font-bold hover:bg-purple-50 transition duration-300">Read Documentation</a>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>