<?php $title = 'Home - Bloa Programming Language'; include 'header.php'; ?>

<section class="relative min-h-screen flex items-center justify-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 py-32">
        <h1 class="text-6xl md:text-7xl font-bold mb-8 leading-tight text-gray-900 dark:text-white">Welcome to <span class="bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent">Bloa</span></h1>
        <p class="text-xl md:text-2xl mb-10 text-gray-600 dark:text-gray-400 max-w-3xl mx-auto leading-relaxed">A minimalist scripting language designed for simplicity, readability, and powerful performance. Write more with less code.</p>
        <div class="flex flex-wrap gap-4 justify-center mb-16">
            <a href="/docs" class="bg-cyan-500 text-black px-8 py-4 rounded-lg font-bold hover:bg-cyan-400 hover:shadow-2xl hover:shadow-cyan-500/50 hover:scale-105 transition transform duration-300">Get Started</a>
            <a href="/examples" class="border-2 border-cyan-500 text-cyan-400 px-8 py-4 rounded-lg font-bold hover:bg-cyan-500 hover:text-black transition duration-300">View Examples</a>
            <a href="https://github.com/bloa-lang/bloa-src" target="_blank" class="bg-gray-800 hover:bg-gray-700 text-white px-8 py-4 rounded-lg font-bold transition duration-300 border border-gray-700">
                <i class="fab fa-github mr-2"></i>GitHub
            </a>
        </div>
    </div>
</section>

<section class="py-24 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-bold mb-4 text-gray-900 dark:text-white">Why Choose Bloa?</h2>
            <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">Experience the perfect balance of simplicity and power</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="card-hover bg-white dark:bg-gray-800 p-8 rounded-xl border border-gray-200 dark:border-gray-700">
                <div class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-blue-500 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-code text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white">Simple Syntax</h3>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Easy to learn and read, perfect for beginners and experts alike. Write more with less code.</p>
            </div>
            <div class="card-hover bg-white dark:bg-gray-800 p-8 rounded-xl border border-gray-200 dark:border-gray-700">
                <div class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-cyan-500 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-rocket text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white">Fast Execution</h3>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Built with performance in mind, executes scripts quickly and efficiently with minimal overhead.</p>
            </div>
            <div class="card-hover bg-white dark:bg-gray-800 p-8 rounded-xl border border-gray-200 dark:border-gray-700">
                <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-blue-500 rounded-lg flex items-center justify-center mb-6">
                    <i class="fas fa-tools text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-900 dark:text-white">Rich Features</h3>
                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">Supports functions, classes, modules, and a comprehensive standard library for real-world applications.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-24 relative z-10 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-bold mb-4 text-white">Quick Example</h2>
            <p class="text-xl text-gray-400">See how simple and elegant Bloa code is</p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="bg-gray-900 p-8 rounded-xl shadow-xl border border-gray-800">
                <div class="flex items-center mb-4">
                    <span class="text-sm font-semibold text-cyan-400 uppercase">Calculator Example</span>
                </div>
                <pre class="code text-sm bg-black text-gray-100 p-6 rounded-lg overflow-x-auto border border-gray-700 leading-relaxed"><code>class Calculator {
  function add(self, a, b) {
    return a + b
  }
  
  function multiply(self, a, b) {
    return a * b
  }
}

calc = Calculator()
result = calc.add(5, 3)
say("5 + 3 = " + str(result))

product = calc.multiply(4, 7)
say("4 * 7 = " + str(product))</code></pre>
            </div>
            <div class="space-y-6">
                <div class="flex space-x-4">
                    <i class="fas fa-check text-2xl text-cyan-400 dark:text-cyan-300 flex-shrink-0 mt-1"></i>
                    <div>
                        <h4 class="font-bold text-lg text-white">Clean & Readable</h4>
                        <p class="text-gray-400">Syntax that's easy to understand at first glance</p>
                    </div>
                </div>
                <div class="flex space-x-4">
                    <i class="fas fa-check text-2xl text-cyan-400 dark:text-cyan-300 flex-shrink-0 mt-1"></i>
                    <div>
                        <h4 class="font-bold text-lg text-white">Object-Oriented</h4>
                        <p class="text-gray-400">Full support for classes, inheritance, and polymorphism</p>
                    </div>
                </div>
                <div class="flex space-x-4">
                    <i class="fas fa-check text-2xl text-cyan-400 dark:text-cyan-300 flex-shrink-0 mt-1"></i>
                    <div>
                        <h4 class="font-bold text-lg text-white">Powerful</h4>
                        <p class="text-gray-400">Rich standard library with everything you need</p>
                    </div>
                </div>
                <div class="flex space-x-4">
                    <i class="fas fa-check text-2xl text-cyan-400 dark:text-cyan-300 flex-shrink-0 mt-1"></i>
                    <div>
                        <h4 class="font-bold text-lg text-white">Performance</h4>
                        <p class="text-gray-400">Optimized C++ interpreter for fast execution</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-24 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20">
            <h2 class="text-4xl md:text-5xl font-bold mb-4 text-white">Featured Features</h2>
            <p class="text-xl text-gray-400">Everything you need to build powerful applications</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-gray-900 p-6 rounded-lg border border-gray-800 hover:border-cyan-500 transition duration-300">
                <i class="fas fa-list text-2xl text-cyan-400 dark:text-cyan-300 mb-3"></i>
                <h3 class="font-bold text-white mb-2">Lists & Arrays</h3>
                <p class="text-gray-400 text-sm">Native support for collections and iteration</p>
            </div>
            <div class="bg-gray-900 p-6 rounded-lg border border-gray-800 hover:border-cyan-500 transition duration-300">
                <i class="fas fa-repeat text-2xl text-cyan-400 dark:text-cyan-300 mb-3"></i>
                <h3 class="font-bold text-white mb-2">Control Flow</h3>
                <p class="text-gray-400 text-sm">Complete loops, conditionals, and exception handling</p>
            </div>
            <div class="bg-gray-900 p-6 rounded-lg border border-gray-800 hover:border-cyan-500 transition duration-300">
                <i class="fas fa-box text-2xl text-cyan-400 dark:text-cyan-300 mb-3"></i>
                <h3 class="font-bold text-white mb-2">Modules</h3>
                <p class="text-gray-400 text-sm">Organize code with modular system</p>
            </div>
            <div class="bg-gray-900 p-6 rounded-lg border border-gray-800 hover:border-cyan-500 transition duration-300">
                <i class="fas fa-puzzle-piece text-2xl text-cyan-400 dark:text-cyan-300 mb-3"></i>
                <h3 class="font-bold text-white mb-2">Extensible</h3>
                <p class="text-gray-400 text-sm">Easy to extend with custom libraries</p>
            </div>
        </div>
    </div>
</section>

<section class="py-24 relative z-10 border-t border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6 text-white">Ready to Get Started?</h2>
        <p class="text-xl text-gray-400 mb-10 max-w-2xl mx-auto">Join the Bloa community and start building amazing things today.</p>
        <div class="flex flex-wrap gap-4 justify-center">
            <a href="/download" class="bg-cyan-500 text-black px-8 py-4 rounded-lg font-bold hover:bg-cyan-400 transition duration-300">
                <i class="fas fa-download mr-2 text-black dark:text-black"></i>Download Now
            </a>
            <a href="/docs" class="border-2 border-cyan-500 text-cyan-400 px-8 py-4 rounded-lg font-bold hover:bg-cyan-500 hover:text-black transition duration-300">
                <i class="fas fa-book mr-2 text-cyan-400 dark:text-cyan-300"></i>Read Docs
            </a>
        </div>
    </div>
</section>
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-4 gradient-text">Get Started Today</h2>
            <p class="text-xl text-gray-600">Join the Bloa community and start building amazing applications</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="text-5xl font-bold gradient-text mb-4">01</div>
                <h3 class="text-xl font-bold mb-3">Learn</h3>
                <p class="text-gray-600 mb-4">Read our comprehensive documentation and explore examples</p>
                <a href="/docs" class="inline-block text-purple-600 font-semibold hover:text-purple-700">Start Learning →</a>
            </div>
            <div class="text-center">
                <div class="text-5xl font-bold gradient-text mb-4">02</div>
                <h3 class="text-xl font-bold mb-3">Code</h3>
                <p class="text-gray-600 mb-4">Write your first Bloa program and experiment with the language</p>
                <a href="/examples" class="inline-block text-purple-600 font-semibold hover:text-purple-700">View Examples →</a>
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
                <h3 class="text-xl font-bold mb-6 flex items-center"><i class="fas fa-calculator text-purple-600 dark:text-purple-300 mr-3"></i> Math Functions</h3>
                <div class="space-y-2 text-gray-600">
                    <p>• sqrt(x), pow(base, exp)</p>
                    <p>• sin(x), cos(x), tan(x)</p>
                    <p>• log(x), exp(x), abs(x)</p>
                    <p>• floor(x), ceil(x), round(x)</p>
                    <p>• And many more...</p>
                </div>
            </div>
            <div class="card-hover bg-white p-8 rounded-xl shadow-lg border border-gray-100">
                <h3 class="text-xl font-bold mb-6 flex items-center"><i class="fas fa-file-alt text-purple-600 dark:text-purple-300 mr-3"></i> File I/O</h3>
                <div class="space-y-2 text-gray-600">
                    <p>• read_file(path), write_file(path, content)</p>
                    <p>• exists(path), list_dir(path)</p>
                    <p>• mkdir(path), rmdir(path)</p>
                    <p>• remove(path), copy_file(from, to)</p>
                    <p>• And more file operations...</p>
                </div>
            </div>
            <div class="card-hover bg-white p-8 rounded-xl shadow-lg border border-gray-100">
                <h3 class="text-xl font-bold mb-6 flex items-center"><i class="fas fa-type text-purple-600 dark:text-purple-300 mr-3"></i> String Functions</h3>
                <div class="space-y-2 text-gray-600">
                    <p>• len(s), split(s, delim), join(list, sep)</p>
                    <p>• substr(s, start, len?), find(s, sub)</p>
                    <p>• replace(s, old, new), to_upper(s), to_lower(s)</p>
                    <p>• trim(s), contains(s, sub), reverse(s)</p>
                    <p>• And string utilities...</p>
                </div>
            </div>
            <div class="card-hover bg-white p-8 rounded-xl shadow-lg border border-gray-100">
                <h3 class="text-xl font-bold mb-6 flex items-center"><i class="fas fa-wrench text-purple-600 dark:text-purple-300 mr-3"></i> Utilities</h3>
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
                <a href="/download" class="bg-gradient-primary text-white px-8 py-4 rounded-lg font-bold hover:shadow-2xl transition duration-300">Download Now</a>
                <a href="/docs" class="border-2 border-purple-600 text-purple-600 px-8 py-4 rounded-lg font-bold hover:bg-purple-50 transition duration-300">Read Documentation</a>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>