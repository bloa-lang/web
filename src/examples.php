<?php $pageTitle = "Examples"; ?>
<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="bg-gradient-to-br from-primary-50 to-white py-16">
    <div class="container-custom max-w-7xl mx-auto px-4 md:px-6 lg:px-8">
        <h1 class="text-5xl md:text-6xl font-bold font-display text-neutral-900 mb-4">
            Code <span class="gradient-text">Examples</span>
        </h1>
        <p class="text-xl text-neutral-600 max-w-2xl">
            Learn BLOA by exploring real-world examples and use cases
        </p>
    </div>
</section>

<!-- Examples Grid -->
<section class="py-16">
    <div class="container-custom max-w-7xl mx-auto px-4 md:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <!-- Example 1 -->
            <div class="card">
                <div class="flex items-center gap-2 mb-4">
                    <i class="fas fa-calculator text-primary-600 text-xl"></i>
                    <h3 class="text-2xl font-bold text-neutral-900">Fibonacci Sequence</h3>
                </div>
                <p class="text-neutral-600 mb-4">Generate Fibonacci numbers recursively</p>
                <div class="bg-neutral-900 text-neutral-50 p-4 rounded-lg font-mono text-sm mb-4 overflow-x-auto">
                    <pre><code><span class="text-accent-400">fn</span> <span class="text-yellow-400">fib</span>(n: <span class="text-emerald-400">i32</span>) -> <span class="text-emerald-400">i32</span> {
  <span class="text-accent-400">if</span> n &lt;= <span class="text-blue-400">1</span> {
    <span class="text-accent-400">return</span> n;
  }
  <span class="text-amber-400">fib</span>(n - <span class="text-blue-400">1</span>) + <span class="text-amber-400">fib</span>(n - <span class="text-blue-400">2</span>)
}</code></pre>
                </div>
                <a href="#" class="btn btn-secondary">View More</a>
            </div>

            <!-- Example 2 -->
            <div class="card">
                <div class="flex items-center gap-2 mb-4">
                    <i class="fas fa-list text-accent-600 text-xl"></i>
                    <h3 class="text-2xl font-bold text-neutral-900">Array Operations</h3>
                </div>
                <p class="text-neutral-600 mb-4">Work with arrays and collections</p>
                <div class="bg-neutral-900 text-neutral-50 p-4 rounded-lg font-mono text-sm mb-4 overflow-x-auto">
                    <pre><code><span class="text-accent-400">let</span> numbers = [<span class="text-blue-400">1</span>, <span class="text-blue-400">2</span>, <span class="text-blue-400">3</span>];
<span class="text-accent-400">let</span> doubled = numbers
  .<span class="text-yellow-400">map</span>(|x| x * <span class="text-blue-400">2</span>)
  .<span class="text-yellow-400">filter</span>(|x| x > <span class="text-blue-400">3</span>);</code></pre>
                </div>
                <a href="#" class="btn btn-secondary">View More</a>
            </div>

            <!-- Example 3 -->
            <div class="card">
                <div class="flex items-center gap-2 mb-4">
                    <i class="fas fa-database text-emerald-600 text-xl"></i>
                    <h3 class="text-2xl font-bold text-neutral-900">Data Structure</h3>
                </div>
                <p class="text-neutral-600 mb-4">Define and use custom structures</p>
                <div class="bg-neutral-900 text-neutral-50 p-4 rounded-lg font-mono text-sm mb-4 overflow-x-auto">
                    <pre><code><span class="text-accent-400">struct</span> <span class="text-blue-400">User</span> {
  id: <span class="text-emerald-400">i32</span>,
  name: <span class="text-emerald-400">String</span>,
  email: <span class="text-emerald-400">String</span>,
}</code></pre>
                </div>
                <a href="#" class="btn btn-secondary">View More</a>
            </div>

            <!-- Example 4 -->
            <div class="card">
                <div class="flex items-center gap-2 mb-4">
                    <i class="fas fa-exchange-alt text-blue-600 text-xl"></i>
                    <h3 class="text-2xl font-bold text-neutral-900">Pattern Matching</h3>
                </div>
                <p class="text-neutral-600 mb-4">Powerful pattern matching with match</p>
                <div class="bg-neutral-900 text-neutral-50 p-4 rounded-lg font-mono text-sm mb-4 overflow-x-auto">
                    <pre><code><span class="text-accent-400">match</span> value {
  <span class="text-blue-400">0</span> => <span class="text-amber-400">println</span>!(<span class="text-emerald-300">"Zero"</span>),
  <span class="text-blue-400">1</span> => <span class="text-amber-400">println</span>!(<span class="text-emerald-300">"One"</span>),
  _ => <span class="text-amber-400">println</span>!(<span class="text-emerald-300">"Other"</span>),
}</code></pre>
                </div>
                <a href="#" class="btn btn-secondary">View More</a>
            </div>
        </div>

        <!-- Featured Project -->
        <div class="bg-gradient-to-r from-primary-600 to-accent-600 rounded-2xl p-12 text-white mb-12">
            <h2 class="text-4xl font-bold font-display mb-4">Featured Project: Web Server</h2>
            <p class="text-primary-50 text-lg mb-6 max-w-3xl leading-relaxed">
                Build a complete, high-performance HTTP web server with BLOA. Learn concurrency, networking, and protocol handling.
            </p>
            <a href="#" class="btn bg-white text-primary-600 hover:bg-primary-50">
                <i class="fas fa-arrow-right mr-2"></i>Explore Project
            </a>
        </div>

        <!-- Categories -->
        <div class="mb-12">
            <h2 class="text-3xl font-bold font-display text-neutral-900 mb-8">Browse by Category</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <a href="#" class="card text-center hover:shadow-lg transition-shadow">
                    <i class="fas fa-cube text-3xl text-primary-600 mb-4"></i>
                    <h3 class="font-bold text-neutral-900 mb-2">Basics</h3>
                    <p class="text-sm text-neutral-600">Learn fundamentals</p>
                </a>
                <a href="#" class="card text-center hover:shadow-lg transition-shadow">
                    <i class="fas fa-cogs text-3xl text-accent-600 mb-4"></i>
                    <h3 class="font-bold text-neutral-900 mb-2">Advanced</h3>
                    <p class="text-sm text-neutral-600">Master advanced topics</p>
                </a>
                <a href="#" class="card text-center hover:shadow-lg transition-shadow">
                    <i class="fas fa-project-diagram text-3xl text-emerald-600 mb-4"></i>
                    <h3 class="font-bold text-neutral-900 mb-2">Projects</h3>
                    <p class="text-sm text-neutral-600">Full applications</p>
                </a>
                <a href="#" class="card text-center hover:shadow-lg transition-shadow">
                    <i class="fas fa-book text-3xl text-purple-600 mb-4"></i>
                    <h3 class="font-bold text-neutral-900 mb-2">Tutorials</h3>
                    <p class="text-sm text-neutral-600">Step-by-step guides</p>
                </a>
            </div>
        </div>

        <!-- Help -->
        <div class="alert alert-info">
            <strong>💡 Need Help?</strong> Can't find what you're looking for? Check the <a href="/docs.php" class="text-blue-600 hover:underline">full documentation</a> or join our community.
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
