<?php $title = 'Documentation - Bloa Programming Language'; include 'header.php'; ?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="mb-12">
        <h1 class="text-5xl md:text-6xl font-bold mb-4 bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent">Bloa Documentation</h1>
        <p class="text-xl text-gray-400">Complete guide to the Bloa programming language</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
        <div class="lg:col-span-1">
            <nav class="sticky top-24 bg-gray-900 p-6 rounded-xl shadow-lg border border-gray-800">
                <h3 class="text-lg font-bold mb-6 bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent">Contents</h3>
                <ul class="space-y-3">
                    <li><a href="#syntax" class="text-cyan-400 hover:text-cyan-300 font-medium transition flex items-center"><i class="fas fa-chevron-right mr-2 text-sm"></i>Syntax</a></li>
                    <li><a href="#variables" class="text-cyan-400 hover:text-cyan-300 font-medium transition flex items-center"><i class="fas fa-chevron-right mr-2 text-sm"></i>Variables</a></li>
                    <li><a href="#operators" class="text-cyan-400 hover:text-cyan-300 font-medium transition flex items-center"><i class="fas fa-chevron-right mr-2 text-sm"></i>Operators</a></li>
                    <li><a href="#control-flow" class="text-cyan-400 hover:text-cyan-300 font-medium transition flex items-center"><i class="fas fa-chevron-right mr-2 text-sm"></i>Control Flow</a></li>
                    <li><a href="#functions" class="text-cyan-400 hover:text-cyan-300 font-medium transition flex items-center"><i class="fas fa-chevron-right mr-2 text-sm"></i>Functions</a></li>
                    <li><a href="#classes" class="text-cyan-400 hover:text-cyan-300 font-medium transition flex items-center"><i class="fas fa-chevron-right mr-2 text-sm"></i>Classes</a></li>
                    <li><a href="#modules" class="text-cyan-400 hover:text-cyan-300 font-medium transition flex items-center"><i class="fas fa-chevron-right mr-2 text-sm"></i>Modules</a></li>
                    <li><a href="#built-ins" class="text-cyan-400 hover:text-cyan-300 font-medium transition flex items-center"><i class="fas fa-chevron-right mr-2 text-sm"></i>Built-in Functions</a></li>
                    <li><a href="#stdlib" class="text-cyan-400 hover:text-cyan-300 font-medium transition flex items-center"><i class="fas fa-chevron-right mr-2 text-sm"></i>Standard Library</a></li>
                </ul>
            </nav>
        </div>

        <div class="lg:col-span-3 space-y-12">
            <section id="syntax" class="scroll-mt-24">
                <div class="border-l-4 border-cyan-500 pl-6">
                    <h2 class="text-3xl font-bold mb-4 text-white">Syntax</h2>
                </div>
                <p class="mb-4 text-gray-300">Bloa uses a clean, readable syntax inspired by modern programming languages. Statements end with newlines, and blocks are enclosed in curly braces <code class="code bg-gray-900 px-2 py-1 rounded text-cyan-400">{}</code>.</p>
                <div class="bg-gray-900 p-4 rounded-lg border border-gray-800">
                    <p class="text-gray-300 text-sm"><strong class="text-cyan-400"># Comments start with hash</strong></p>
                    <p class="text-gray-300 text-sm"><strong class="text-cyan-400">say("Hello, World!")</strong> # Print to console</p>
                </div>
            </section>

            <section id="variables" class="scroll-mt-24">
                <div class="border-l-4 border-cyan-500 pl-6">
                    <h2 class="text-3xl font-bold mb-4 text-white">Variables</h2>
                </div>
                <p class="mb-4 text-gray-300">Variables are dynamically typed and declared using the assignment operator <code class="code bg-gray-900 px-2 py-1 rounded text-cyan-400">=</code>.</p>
                <pre class="code bg-black text-gray-100 p-6 rounded-lg border border-gray-800 overflow-x-auto"><code>x = 42
name = "Bloa"
is_active = true
list = [1, 2, 3]
pi = 3.14159</code></pre>
            </section>

            <section id="operators" class="scroll-mt-24">
                <div class="border-l-4 border-cyan-500 pl-6">
                    <h2 class="text-3xl font-bold mb-4 text-white">Operators</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-gray-900 p-6 rounded-lg border border-gray-800 shadow-md">
                        <h3 class="text-lg font-bold mb-4 text-cyan-400">Arithmetic</h3>
                        <ul class="space-y-2">
                            <li class="flex"><span class="bg-gray-800 px-3 py-1 rounded mr-3 font-mono text-cyan-400">+</span><span class="text-gray-300">Addition</span></li>
                            <li class="flex"><span class="bg-gray-800 px-3 py-1 rounded mr-3 font-mono text-cyan-400">-</span><span class="text-gray-300">Subtraction</span></li>
                            <li class="flex"><span class="bg-gray-800 px-3 py-1 rounded mr-3 font-mono text-cyan-400">*</span><span class="text-gray-300">Multiplication</span></li>
                            <li class="flex"><span class="bg-gray-800 px-3 py-1 rounded mr-3 font-mono text-cyan-400">/</span><span class="text-gray-300">Division</span></li>
                            <li class="flex"><span class="bg-gray-800 px-3 py-1 rounded mr-3 font-mono text-cyan-400">%</span><span class="text-gray-300">Modulo</span></li>
                            <li class="flex"><span class="bg-gray-800 px-3 py-1 rounded mr-3 font-mono text-cyan-400">^</span><span class="text-gray-300">Power</span></li>
                        </ul>
                    </div>
                    <div class="bg-gray-900 p-6 rounded-lg border border-gray-800 shadow-md">
                        <h3 class="text-lg font-bold mb-4 text-cyan-400">Comparison</h3>
                        <ul class="space-y-2">
                            <li class="flex"><span class="bg-gray-800 px-3 py-1 rounded mr-3 font-mono text-cyan-400">==</span><span class="text-gray-300">Equal</span></li>
                            <li class="flex"><span class="bg-gray-800 px-3 py-1 rounded mr-3 font-mono text-cyan-400">!=</span><span class="text-gray-300">Not equal</span></li>
                            <li class="flex"><span class="bg-gray-800 px-3 py-1 rounded mr-3 font-mono text-cyan-400">&lt;</span><span class="text-gray-300">Less than</span></li>
                            <li class="flex"><span class="bg-gray-800 px-3 py-1 rounded mr-3 font-mono text-cyan-400">&gt;</span><span class="text-gray-300">Greater than</span></li>
                            <li class="flex"><span class="bg-gray-800 px-3 py-1 rounded mr-3 font-mono text-cyan-400">&lt;=</span><span class="text-gray-300">Less or equal</span></li>
                            <li class="flex"><span class="bg-gray-800 px-3 py-1 rounded mr-3 font-mono text-cyan-400">&gt;=</span><span class="text-gray-300">Greater or equal</span></li>
                        </ul>
                    </div>
                </div>
                <div class="mt-6 bg-gray-900 p-6 rounded-lg border border-gray-800 shadow-md">
                    <h3 class="text-lg font-bold mb-4 text-cyan-400">Logical</h3>
                    <ul class="space-y-2">
                        <li class="flex"><span class="bg-gray-800 px-3 py-1 rounded mr-3 font-mono text-cyan-400">and</span><span class="text-gray-300">Logical AND</span></li>
                        <li class="flex"><span class="bg-gray-800 px-3 py-1 rounded mr-3 font-mono text-cyan-400">or</span><span class="text-gray-300">Logical OR</span></li>
                        <li class="flex"><span class="bg-gray-800 px-3 py-1 rounded mr-3 font-mono text-cyan-400">not</span><span class="text-gray-300">Logical NOT</span></li>
                    </ul>
                </div>
            </section>

            <section id="control-flow" class="scroll-mt-24">
                <div class="border-l-4 border-cyan-500 pl-6">
                    <h2 class="text-3xl font-bold mb-4 text-white">Control Flow</h2>
                </div>

                <h3 class="text-xl font-bold mb-3 mt-6 text-white">If/Else</h3>
                <pre class="code bg-black text-gray-100 p-6 rounded-lg border border-gray-800 overflow-x-auto"><code>if x > 10 {
  say("x is greater than 10")
} else if x == 10 {
  say("x is 10")
} else {
  say("x is less than 10")
}</code></pre>

                <h3 class="text-xl font-bold mb-3 mt-8 text-white">While Loop</h3>
                <pre class="code bg-black text-gray-100 p-6 rounded-lg border border-gray-800 overflow-x-auto"><code>i = 0
while i < 5 {
  say("i = " + str(i))
  i = i + 1
}</code></pre>

                <h3 class="text-xl font-bold mb-3 mt-8 text-white">For Loop</h3>
                <pre class="code bg-black text-gray-100 p-6 rounded-lg border border-gray-800 overflow-x-auto"><code>for i = 0; i < 5; i = i + 1 {
  say("i = " + str(i))
}</code></pre>
            </section>

            <section id="functions" class="scroll-mt-24">
                <div class="border-l-4 border-cyan-500 pl-6">
                    <h2 class="text-3xl font-bold mb-4 text-white">Functions</h2>
                </div>
                <pre class="code bg-black text-gray-100 p-6 rounded-lg border border-gray-800 overflow-x-auto"><code>function greet(name) {
  say("Hello, " + name + "!")
}

function add(a, b) {
  return a + b
}

greet("Bloa")
result = add(5, 3)
say("5 + 3 = " + str(result))</code></pre>
            </section>

            <section id="classes" class="scroll-mt-24">
                <div class="border-l-4 border-cyan-500 pl-6">
                    <h2 class="text-3xl font-bold mb-4 text-white">Classes</h2>
                </div>
                <pre class="code bg-black text-gray-100 p-6 rounded-lg border border-gray-800 overflow-x-auto"><code>class Person {
  function __init__(self, name, age) {
    self.name = name
    self.age = age
  }

  function greet(self) {
    say("Hi, I'm " + self.name)
  }
}

person = Person("Alice", 30)
person.greet()</code></pre>
            </section>

            <section id="modules" class="scroll-mt-24">
                <div class="border-l-4 border-cyan-500 pl-6">
                    <h2 class="text-3xl font-bold mb-4 text-white">Modules</h2>
                </div>
                <p class="mb-4 text-gray-300">Import external modules with the <code class="code bg-gray-900 px-2 py-1 rounded text-cyan-400">import</code> keyword:</p>
                <pre class="code bg-black text-gray-100 p-6 rounded-lg border border-gray-800 overflow-x-auto"><code>import math
import utils.helpers

result = math.sqrt(16)
say("sqrt(16) = " + str(result))</code></pre>
            </section>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
  say(i)
  i = i + 1
}</code></pre>

                <h3 class="text-xl font-bold mb-3 mt-8">For-in Loop</h3>
                <pre class="code bg-gray-900 text-gray-100 p-6 rounded-lg border border-gray-700 overflow-x-auto"><code>for item in [1, 2, 3, 4, 5] {
  say(item)
}</code></pre>

                <h3 class="text-xl font-bold mb-3 mt-8">Repeat Loop</h3>
                <pre class="code bg-gray-900 text-gray-100 p-6 rounded-lg border border-gray-700 overflow-x-auto"><code>repeat 3 {
  say("Hello!")
}</code></pre>
            </section>

            <section id="functions" class="scroll-mt-24">
                <div class="border-l-4 border-purple-600 pl-6">
                    <h2 class="text-3xl font-bold mb-4">Functions</h2>
                </div>
                <p class="mb-4 text-gray-700">Functions are reusable blocks of code that can take parameters and return values.</p>
                <pre class="code bg-gray-900 text-gray-100 p-6 rounded-lg border border-gray-700 overflow-x-auto"><code>function add(a, b) {
  return a + b
}

result = add(5, 3)
say(result)  # Output: 8</code></pre>
            </section>

            <section id="classes" class="scroll-mt-24">
                <div class="border-l-4 border-purple-600 pl-6">
                    <h2 class="text-3xl font-bold mb-4">Classes</h2>
                </div>
                <p class="mb-4 text-gray-700">Bloa supports object-oriented programming with classes and inheritance.</p>
                <pre class="code bg-gray-900 text-gray-100 p-6 rounded-lg border border-gray-700 overflow-x-auto"><code>class Animal {
  function __init__(self, name) {
    self.name = name
  }

  function speak(self) {
    say(self.name + " makes a sound")
  }
}

dog = Animal("Buddy")
dog.speak()  # Output: Buddy makes a sound</code></pre>
            </section>

            <section id="modules" class="scroll-mt-24">
                <div class="border-l-4 border-purple-600 pl-6">
                    <h2 class="text-3xl font-bold mb-4">Modules</h2>
                </div>
                <p class="mb-4 text-gray-700">Organize your code into modules for better maintainability.</p>
                <pre class="code bg-gray-900 text-gray-100 p-6 rounded-lg border border-gray-700 overflow-x-auto"><code>use "math"

result = math.sqrt(16)
say(result)  # Output: 4</code></pre>
            </section>

            <section id="built-ins" class="scroll-mt-24">
                <div class="border-l-4 border-purple-600 pl-6">
                    <h2 class="text-3xl font-bold mb-4">Built-in Functions</h2>
                </div>
                <p class="mb-4 text-gray-700">Bloa provides many useful built-in functions:</p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-white p-4 rounded-lg border border-gray-100">
                        <p class="font-semibold text-purple-600">say(value)</p>
                        <p class="text-sm text-gray-600">Print output to console</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg border border-gray-100">
                        <p class="font-semibold text-purple-600">ask(prompt)</p>
                        <p class="text-sm text-gray-600">Read user input</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg border border-gray-100">
                        <p class="font-semibold text-purple-600">type(value)</p>
                        <p class="text-sm text-gray-600">Get the type of a value</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg border border-gray-100">
                        <p class="font-semibold text-purple-600">len(collection)</p>
                        <p class="text-sm text-gray-600">Get length of string/list/dict</p>
                    </div>
                </div>
            </section>

            <section id="stdlib" class="scroll-mt-24">
                <div class="border-l-4 border-purple-600 pl-6">
                    <h2 class="text-3xl font-bold mb-4">Standard Library</h2>
                </div>
                <p class="mb-6 text-gray-700">The standard library provides extensive functionality for common tasks. Explore the dedicated modules for detailed information.</p>
            </section>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>