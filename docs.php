<?php $title = 'Documentation - Bloa Programming Language'; include 'header.php'; ?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <h1 class="text-4xl font-bold mb-8">Bloa Documentation</h1>

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
        <div class="lg:col-span-1">
            <nav class="sticky top-8">
                <h3 class="text-lg font-semibold mb-4">Contents</h3>
                <ul class="space-y-2">
                    <li><a href="#syntax" class="text-blue-600 hover:underline">Syntax</a></li>
                    <li><a href="#variables" class="text-blue-600 hover:underline">Variables</a></li>
                    <li><a href="#operators" class="text-blue-600 hover:underline">Operators</a></li>
                    <li><a href="#control-flow" class="text-blue-600 hover:underline">Control Flow</a></li>
                    <li><a href="#functions" class="text-blue-600 hover:underline">Functions</a></li>
                    <li><a href="#classes" class="text-blue-600 hover:underline">Classes</a></li>
                    <li><a href="#modules" class="text-blue-600 hover:underline">Modules</a></li>
                    <li><a href="#built-ins" class="text-blue-600 hover:underline">Built-in Functions</a></li>
                    <li><a href="#stdlib" class="text-blue-600 hover:underline">Standard Library</a></li>
                </ul>
            </nav>
        </div>

        <div class="lg:col-span-3 space-y-12">
            <section id="syntax">
                <h2 class="text-2xl font-bold mb-4">Syntax</h2>
                <p class="mb-4">Bloa uses a clean, readable syntax inspired by modern programming languages. Statements end with newlines, and blocks are enclosed in curly braces <code class="code bg-gray-100 px-1 rounded">{}</code>.</p>
            </section>

            <section id="variables">
                <h2 class="text-2xl font-bold mb-4">Variables</h2>
                <p class="mb-4">Variables are dynamically typed and declared using the assignment operator <code class="code">=</code>.</p>
                <pre class="code bg-gray-100 p-4 rounded"><code>x = 42
name = "Bloa"
is_active = true
list = [1, 2, 3]</code></pre>
            </section>

            <section id="operators">
                <h2 class="text-2xl font-bold mb-4">Operators</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Arithmetic</h3>
                        <ul class="space-y-1">
                            <li><code>+</code> Addition</li>
                            <li><code>-</code> Subtraction</li>
                            <li><code>*</code> Multiplication</li>
                            <li><code>/</code> Division</li>
                            <li><code>%</code> Modulo</li>
                            <li><code>^</code> Power</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Comparison</h3>
                        <ul class="space-y-1">
                            <li><code>==</code> Equal</li>
                            <li><code>!=</code> Not equal</li>
                            <li><code>&lt;</code> Less than</li>
                            <li><code>&gt;</code> Greater than</li>
                            <li><code>&lt;=</code> Less or equal</li>
                            <li><code>&gt;=</code> Greater or equal</li>
                        </ul>
                    </div>
                </div>
                <div class="mt-6">
                    <h3 class="text-lg font-semibold mb-2">Logical</h3>
                    <ul class="space-y-1">
                        <li><code>and</code> Logical AND</li>
                        <li><code>or</code> Logical OR</li>
                        <li><code>not</code> Logical NOT</li>
                    </ul>
                </div>
            </section>

            <section id="control-flow">
                <h2 class="text-2xl font-bold mb-4">Control Flow</h2>

                <h3 class="text-lg font-semibold mb-2">If/Else</h3>
                <pre class="code bg-gray-100 p-4 rounded"><code>if x > 10 {
  say("x is greater than 10")
} else if x == 10 {
  say("x is 10")
} else {
  say("x is less than 10")
}</code></pre>

                <h3 class="text-lg font-semibold mb-2 mt-6">While Loop</h3>
                <pre class="code bg-gray-100 p-4 rounded"><code>i = 0
while i < 5 {
  say(i)
  i = i + 1
}</code></pre>

                <h3 class="text-lg font-semibold mb-2 mt-6">For-in Loop</h3>
                <pre class="code bg-gray-100 p-4 rounded"><code>for item in [1, 2, 3, 4, 5] {
  say(item)
}</code></pre>

                <h3 class="text-lg font-semibold mb-2 mt-6">Repeat Loop</h3>
                <pre class="code bg-gray-100 p-4 rounded"><code>repeat 3 {
  say("Hello")
}</code></pre>
            </section>

            <section id="functions">
                <h2 class="text-2xl font-bold mb-4">Functions</h2>
                <p class="mb-4">Functions are defined using the <code>function</code> keyword and can return values.</p>
                <pre class="code bg-gray-100 p-4 rounded"><code>function add(a, b) {
  return a + b
}

function greet(name) {
  say("Hello, " + name)
}

result = add(5, 3)
greet("World")</code></pre>
            </section>

            <section id="classes">
                <h2 class="text-2xl font-bold mb-4">Classes and Objects</h2>
                <p class="mb-4">Classes support methods and inheritance.</p>
                <pre class="code bg-gray-100 p-4 rounded"><code>class Animal {
  function speak(self) {
    say("Animal sound")
  }
}

class Dog extends Animal {
  function speak(self) {
    say("Woof!")
  }

  function __init__(self, name) {
    self.name = name
  }
}

dog = Dog("Buddy")
dog.speak()</code></pre>
            </section>

            <section id="modules">
                <h2 class="text-2xl font-bold mb-4">Modules</h2>
                <p class="mb-4">Use <code>use</code> to import modules and <code>require</code> to include files.</p>
                <pre class="code bg-gray-100 p-4 rounded"><code>use "math"
result = math.sqrt(16)

require "utils.bloa"</code></pre>
            </section>

            <section id="built-ins">
                <h2 class="text-2xl font-bold mb-4">Built-in Functions</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-lg font-semibold mb-2">I/O</h3>
                        <ul class="space-y-1">
                            <li><code>say(value)</code> - Print to console</li>
                            <li><code>ask(prompt)</code> - Read input from user</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Type Conversion</h3>
                        <ul class="space-y-1">
                            <li><code>str(value)</code> - Convert to string</li>
                            <li><code>int(value)</code> - Convert to integer</li>
                            <li><code>float(value)</code> - Convert to float</li>
                        </ul>
                    </div>
                </div>
                <div class="mt-6">
                    <h3 class="text-lg font-semibold mb-2">Utilities</h3>
                    <ul class="space-y-1">
                        <li><code>len(collection)</code> - Get length of list or string</li>
                        <li><code>range(start, end)</code> - Create a range of numbers</li>
                        <li><code>append(list, item)</code> - Add item to list</li>
                    </ul>
                </div>
            </section>

            <section id="stdlib">
                <h2 class="text-2xl font-bold mb-4">Standard Library</h2>

                <h3 class="text-lg font-semibold mb-2">Math Module</h3>
                <pre class="code bg-gray-100 p-4 rounded"><code>use "math"

sqrt_result = math.sqrt(25)  # 5
pow_result = math.pow(2, 3)  # 8
abs_result = math.abs(-10)   # 10
pi_value = math.pi()         # 3.14159...</code></pre>

                <h3 class="text-lg font-semibold mb-2 mt-6">I/O Module</h3>
                <pre class="code bg-gray-100 p-4 rounded"><code>use "io"

content = io.read_file("example.txt")
io.write_file("output.txt", "Hello World")
exists = io.exists("file.txt")</code></pre>

                <h3 class="text-lg font-semibold mb-2 mt-6">String Module</h3>
                <pre class="code bg-gray-100 p-4 rounded"><code>use "string"

upper = string.upper("hello")     # "HELLO"
lower = string.lower("WORLD")     # "world"
parts = string.split("a,b,c", ",") # ["a", "b", "c"]</code></pre>
            </section>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>