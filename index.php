<?php $title = 'Home - Bloa Programming Language'; include 'header.php'; ?>

<section class="bg-gradient-to-r from-blue-500 to-purple-600 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl font-bold mb-6">Welcome to Bloa</h1>
        <p class="text-xl mb-8">A minimalist scripting language designed for simplicity, readability, and power.</p>
        <div class="space-x-4">
            <a href="docs.php" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">Get Started</a>
            <a href="examples.php" class="border-2 border-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition">View Examples</a>
        </div>
    </div>
</section>

<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center mb-12">Why Choose Bloa?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <i class="fas fa-code text-4xl text-blue-600 mb-4"></i>
                <h3 class="text-xl font-semibold mb-4">Simple Syntax</h3>
                <p>Easy to learn and read, perfect for beginners and experts alike.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <i class="fas fa-rocket text-4xl text-green-600 mb-4"></i>
                <h3 class="text-xl font-semibold mb-4">Fast Execution</h3>
                <p>Built with performance in mind, executes scripts quickly and efficiently.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <i class="fas fa-tools text-4xl text-purple-600 mb-4"></i>
                <h3 class="text-xl font-semibold mb-4">Rich Features</h3>
                <p>Supports functions, classes, modules, and a comprehensive standard library.</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center mb-12">Quick Example</h2>
        <div class="bg-white p-8 rounded-lg shadow-md max-w-2xl mx-auto">
            <pre class="code text-sm bg-gray-100 p-4 rounded overflow-x-auto"><code>class Calculator {
  function add(self, a, b) {
    return a + b
  }
}

calc = Calculator()
result = calc.add(5, 3)
say("Result: " + str(result))</code></pre>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center mb-12">Key Features</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-gray-50 p-6 rounded-lg">
                <h3 class="text-xl font-semibold mb-4 text-blue-600">Variables & Expressions</h3>
                <p>Support for arithmetic, logic, and comparison operations.</p>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg">
                <h3 class="text-xl font-semibold mb-4 text-green-600">Control Flow</h3>
                <p>if/else, while, for-in, repeat loops for flexible programming.</p>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg">
                <h3 class="text-xl font-semibold mb-4 text-purple-600">Functions</h3>
                <p>Define and call functions with parameters.</p>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg">
                <h3 class="text-xl font-semibold mb-4 text-red-600">Classes & Inheritance</h3>
                <p>Object-oriented programming with class definitions and inheritance.</p>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg">
                <h3 class="text-xl font-semibold mb-4 text-yellow-600">Modules</h3>
                <p>Import modules with 'use' and include files with 'require'.</p>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg">
                <h3 class="text-xl font-semibold mb-4 text-indigo-600">Standard Library</h3>
                <p>Built-in functions for math, I/O, strings, and utilities.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center mb-12">Standard Library Highlights</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h3 class="text-xl font-semibold mb-4 text-blue-600">Math Functions</h3>
                <ul class="list-disc list-inside space-y-1">
                    <li>sqrt(x), pow(base, exp)</li>
                    <li>sin(x), cos(x), tan(x)</li>
                    <li>log(x), exp(x), abs(x)</li>
                    <li>floor(x), ceil(x), round(x)</li>
                    <li>pi(), e() constants</li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-semibold mb-4 text-green-600">I/O Functions</h3>
                <ul class="list-disc list-inside space-y-1">
                    <li>read_file(path), write_file(path, content)</li>
                    <li>exists(path), list_dir(path)</li>
                    <li>mkdir(path), rmdir(path)</li>
                    <li>remove(path), copy_file(from, to)</li>
                    <li>file_size(path), is_dir(path)</li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-semibold mb-4 text-purple-600">String Functions</h3>
                <ul class="list-disc list-inside space-y-1">
                    <li>len(s), split(s, delim), join(list, sep)</li>
                    <li>substr(s, start, len?), find(s, sub)</li>
                    <li>replace(s, old, new), to_upper(s), to_lower(s)</li>
                    <li>trim(s), starts_with(s, prefix), ends_with(s, suffix)</li>
                    <li>contains(s, sub), reverse(s), repeat(s, n)</li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-semibold mb-4 text-red-600">Utility Functions</h3>
                <ul class="list-disc list-inside space-y-1">
                    <li>random_int(max) or random_int(min, max)</li>
                    <li>random_float(max) or random_float(min, max)</li>
                    <li>now() - current timestamp in milliseconds</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>