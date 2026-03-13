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

<?php include 'footer.php'; ?>