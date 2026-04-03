<?php $title = 'Examples - Bloa Programming Language'; include 'header.php'; ?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="mb-12">
        <h1 class="text-5xl md:text-6xl font-bold gradient-text mb-4">Code Examples</h1>
        <p class="text-xl text-gray-600">Learn Bloa with practical examples</p>
    </div>

    <div class="space-y-12">
        <section class="card-hover bg-white p-8 rounded-xl shadow-lg border border-gray-100">
            <div class="flex items-center mb-6">
                <i class="fas fa-code text-2xl text-purple-600 mr-3"></i>
                <h2 class="text-3xl font-bold">Hello World</h2>
            </div>
            <p class="mb-6 text-gray-700">The classic first program:</p>
            <pre class="code bg-gray-900 text-gray-100 p-6 rounded-lg border border-gray-700 overflow-x-auto"><code>say("Hello, World!")</code></pre>
        </section>

        <section class="card-hover bg-white p-8 rounded-xl shadow-lg border border-gray-100">
            <div class="flex items-center mb-6">
                <i class="fas fa-sliders-h text-2xl text-purple-600 mr-3"></i>
                <h2 class="text-3xl font-bold">Variables and Expressions</h2>
            </div>
            <pre class="code bg-gray-900 text-gray-100 p-6 rounded-lg border border-gray-700 overflow-x-auto"><code>x = 42
y = x * 2 + 10
name = "Bloa"
is_cool = true

say("x = " + str(x))
say("y = " + str(y))
say("Language: " + name)
say("Is cool? " + str(is_cool))</code></pre>
        </section>

        <section class="card-hover bg-white p-8 rounded-xl shadow-lg border border-gray-100">
            <div class="flex items-center mb-6">
                <i class="fas fa-function text-2xl text-purple-600 mr-3"></i>
                <h2 class="text-3xl font-bold">Functions</h2>
            </div>
            <pre class="code bg-gray-900 text-gray-100 p-6 rounded-lg border border-gray-700 overflow-x-auto"><code>function factorial(n) {
  if n <= 1 {
    return 1
  } else {
    return n * factorial(n - 1)
  }
}

function greet(name, age) {
  say("Hello, " + name + "! You are " + str(age) + " years old.")
}

result = factorial(5)
say("5! = " + str(result))

greet("Alice", 25)</code></pre>
        </section>

        <section class="card-hover bg-white p-8 rounded-xl shadow-lg border border-gray-100">
            <div class="flex items-center mb-6">
                <i class="fas fa-object-group text-2xl text-purple-600 mr-3"></i>
                <h2 class="text-3xl font-bold">Classes and Inheritance</h2>
            </div>
            <pre class="code bg-gray-900 text-gray-100 p-6 rounded-lg border border-gray-700 overflow-x-auto"><code>class Shape {
  function __init__(self, color) {
    self.color = color
  }

  function describe(self) {
    say("A " + self.color + " shape")
  }
}

class Circle extends Shape {
  function __init__(self, color, radius) {
    super().__init__(color)
    self.radius = radius
  }

  function area(self) {
    return 3.14159 * self.radius * self.radius
  }

  function describe(self) {
    say("A " + self.color + " circle with radius " + str(self.radius))
  }
}

circle = Circle("red", 5)
circle.describe()
say("Area: " + str(circle.area()))</code></pre>
        </section>

        <section class="card-hover bg-white p-8 rounded-xl shadow-lg border border-gray-100">
            <div class="flex items-center mb-6">
                <i class="fas fa-list text-2xl text-purple-600 mr-3"></i>
                <h2 class="text-3xl font-bold">Lists and Loops</h2>
            </div>
            <pre class="code bg-gray-900 text-gray-100 p-6 rounded-lg border border-gray-700 overflow-x-auto"><code># Create a list
numbers = [1, 2, 3, 4, 5]

# Add items
append(numbers, 6)
append(numbers, 7)

# Iterate
for num in numbers {
  say("Number: " + str(num))
}

# List comprehension style (manual)
squares = []
for i in range(1, 6) {
  append(squares, i * i)
}

say("Squares: " + str(squares))</code></pre>
        </section>
    </div>
</div>
        <section>
            <h2 class="text-2xl font-bold mb-4">File I/O</h2>
            <pre class="code bg-gray-100 p-4 rounded"><code>use "io"

# Write to file
io.write_file("example.txt", "Hello from Bloa!")

# Read from file
content = io.read_file("example.txt")
say("File content: " + content)

# Check if file exists
if io.exists("example.txt") {
  say("File exists!")
} else {
  say("File does not exist.")
}</code></pre>
        </section>

        <section>
            <h2 class="text-2xl font-bold mb-4">Math Operations</h2>
            <pre class="code bg-gray-100 p-4 rounded"><code>use "math"

# Basic math
a = 16
sqrt_a = math.sqrt(a)
say("Square root of " + str(a) + " is " + str(sqrt_a))

# Trigonometry
angle = 45
sin_val = math.sin(angle * math.pi() / 180)
cos_val = math.cos(angle * math.pi() / 180)
say("sin(45°) = " + str(sin_val))
say("cos(45°) = " + str(cos_val))

# Power
result = math.pow(2, 8)
say("2^8 = " + str(result))</code></pre>
        </section>

        <section>
            <h2 class="text-2xl font-bold mb-4">Exception Handling</h2>
            <pre class="code bg-gray-100 p-4 rounded"><code>function divide(a, b) {
  if b == 0 {
    throw "Division by zero!"
  }
  return a / b
}

try {
  result = divide(10, 0)
  say("Result: " + str(result))
} except error {
  say("Error: " + error)
}

try {
  result = divide(10, 2)
  say("Result: " + str(result))
} except error {
  say("Error: " + error)
}</code></pre>
        </section>
    </div>
</div>

<?php include 'footer.php'; ?>