<?php $pageTitle = "Home"; ?>
<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-primary-50 via-white to-accent-50 py-20 md:py-32">
    <!-- Background Elements -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-primary-100 rounded-full mix-blend-multiply filter blur-3xl opacity-20 -z-10"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-accent-100 rounded-full mix-blend-multiply filter blur-3xl opacity-20 -z-10"></div>

    <div class="container-custom max-w-7xl mx-auto px-4 md:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="animate-slideInLeft">
                <span class="badge badge-primary mb-4">
                    <i class="fas fa-sparkles mr-2"></i>Welcome to BLOA
                </span>
                
                <h1 class="text-5xl md:text-6xl font-bold font-display text-neutral-900 mb-6 leading-tight">
                    Elegant Programming <span class="gradient-text">Made Simple</span>
                </h1>
                
                <p class="text-lg text-neutral-700 mb-8 leading-relaxed max-w-lg">
                    BLOA is a modern programming language designed with elegance and simplicity in mind. Write powerful, expressive code with syntax that feels natural and intuitive.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-wrap gap-4 mb-8">
                    <a href="/download.php" class="btn btn-primary btn-lg">
                        <i class="fas fa-rocket mr-2"></i>Get Started
                    </a>
                    <a href="/docs.php" class="btn btn-outline">
                        <i class="fas fa-book mr-2"></i>Read Docs
                    </a>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-4 pt-8 border-t border-neutral-200">
                    <div>
                        <div class="text-3xl font-bold text-primary-600">50K+</div>
                        <div class="text-sm text-neutral-600">Developers</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-primary-600">500+</div>
                        <div class="text-sm text-neutral-600">Projects</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-primary-600">v1.0.0</div>
                        <div class="text-sm text-neutral-600">Latest</div>
                    </div>
                </div>
            </div>

            <!-- Right - Code Example -->
            <div class="animate-slideInRight hidden md:block">
                <div class="bg-neutral-900 rounded-2xl shadow-2xl overflow-hidden">
                    <div class="bg-neutral-800 px-6 py-4 border-b border-neutral-700 flex gap-2">
                        <div class="w-3 h-3 rounded-full bg-red-500"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                    </div>
                    <div class="p-6 font-mono text-sm">
                        <div class="text-neutral-500">
                            <span class="text-accent-400">fn</span> <span class="text-blue-400">greet</span>(name: <span class="text-emerald-400">String</span>) {
                        </div>
                        <div class="text-neutral-500 ml-4">
                            <span class="text-amber-400">print</span>!(<span class="text-emerald-300">"Hello, {}"</span>, name);
                        </div>
                        <div class="text-neutral-500">}</div>
                        <div class="text-neutral-600 mt-4">&gt;&gt; <span class="text-accent-400">greet</span>(<span class="text-emerald-300">"BLOA"</span>);</div>
                        <div class="text-emerald-400 mt-2">Hello, BLOA</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-20 md:py-32 bg-white">
    <div class="container-custom max-w-7xl mx-auto px-4 md:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="badge badge-secondary mb-4 justify-center">
                <i class="fas fa-check-circle mr-2"></i>Why Choose BLOA
            </span>
            <h2 class="text-4xl md:text-5xl font-bold font-display text-neutral-900 mb-4">
                Powerful Features
            </h2>
            <p class="text-lg text-neutral-600 max-w-2xl mx-auto">
                Everything you need to build amazing applications, elegantly designed
            </p>
        </div>

        <!-- Features Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="card hover:scale-105 transition-transform duration-fast">
                <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-lightning-bolt text-primary-600 text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-neutral-900 mb-3">Lightning Fast</h3>
                <p class="text-neutral-600 leading-relaxed">
                    Optimized compiler and runtime deliver blazing-fast performance for your applications.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="card hover:scale-105 transition-transform duration-fast">
                <div class="w-12 h-12 bg-accent-100 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-shield-alt text-accent-600 text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-neutral-900 mb-3">Type Safe</h3>
                <p class="text-neutral-600 leading-relaxed">
                    Catch errors at compile time with a powerful type system that doesn't get in your way.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="card hover:scale-105 transition-transform duration-fast">
                <div class="w-12 h-12 bg-emerald-100 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-code text-emerald-600 text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-neutral-900 mb-3">Clean Syntax</h3>
                <p class="text-neutral-600 leading-relaxed">
                    Read and write code that's naturally expressive and easy to understand at first glance.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="card hover:scale-105 transition-transform duration-fast">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-cube text-blue-600 text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-neutral-900 mb-3">Modular Design</h3>
                <p class="text-neutral-600 leading-relaxed">
                    Build reusable modules and packages for libraries and frameworks easily.
                </p>
            </div>

            <!-- Feature 5 -->
            <div class="card hover:scale-105 transition-transform duration-fast">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-users text-purple-600 text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-neutral-900 mb-3">Great Community</h3>
                <p class="text-neutral-600 leading-relaxed">
                    Join thousands of developers sharing knowledge, tools, and best practices.
                </p>
            </div>

            <!-- Feature 6 -->
            <div class="card hover:scale-105 transition-transform duration-fast">
                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mb-4">
                    <i class="fas fa-book text-orange-600 text-xl"></i>
                </div>
                <h3 class="text-xl font-bold text-neutral-900 mb-3">Docs & Support</h3>
                <p class="text-neutral-600 leading-relaxed">
                    Comprehensive documentation and active community support to help you succeed.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Code Example Section -->
<section class="py-20 md:py-32 bg-neutral-50">
    <div class="container-custom max-w-7xl mx-auto px-4 md:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <!-- Left - Showcase -->
            <div>
                <h2 class="text-4xl font-bold font-display text-neutral-900 mb-6">
                    See It <span class="gradient-text">In Action</span>
                </h2>
                <p class="text-lg text-neutral-700 mb-6 leading-relaxed">
                    BLOA's clean syntax makes it easy to express complex ideas. Here's a quick example of how elegant BLOA code can be:
                </p>
                <ul class="space-y-4">
                    <li class="flex gap-3">
                        <i class="fas fa-check-circle text-accent-600 mt-1"></i>
                        <span class="text-neutral-700">Intuitive and easy to learn</span>
                    </li>
                    <li class="flex gap-3">
                        <i class="fas fa-check-circle text-accent-600 mt-1"></i>
                        <span class="text-neutral-700">Powerful standard library included</span>
                    </li>
                    <li class="flex gap-3">
                        <i class="fas fa-check-circle text-accent-600 mt-1"></i>
                        <span class="text-neutral-700">Cross-platform compilation</span>
                    </li>
                </ul>
            </div>

            <!-- Right - Code Block -->
            <div class="bg-neutral-900 rounded-2xl shadow-2xl overflow-hidden">
                <div class="bg-neutral-800 px-6 py-4 border-b border-neutral-700 flex gap-2">
                    <div class="w-3 h-3 rounded-full bg-red-500"></div>
                    <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                    <div class="w-3 h-3 rounded-full bg-green-500"></div>
                </div>
                <div class="p-6 font-mono text-sm overflow-x-auto">
                    <pre><code><span class="text-accent-400">struct</span> <span class="text-blue-400">Person</span> {
  name: <span class="text-emerald-400">String</span>,
  age: <span class="text-emerald-400">i32</span>,
}

<span class="text-accent-400">impl</span> <span class="text-blue-400">Person</span> {
  <span class="text-accent-400">fn</span> <span class="text-yellow-400">new</span>(name: <span class="text-emerald-400">String</span>, age: <span class="text-emerald-400">i32</span>) -> <span class="text-blue-400">Self</span> {
    <span class="text-blue-400">Person</span> { name, age }
  }
}</code></pre>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 md:py-28 bg-gradient-to-r from-primary-600 to-accent-600">
    <div class="container-custom max-w-4xl mx-auto px-4 md:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-bold font-display text-white mb-6">
            Ready to Get Started?
        </h2>
        <p class="text-lg text-primary-50 mb-8 max-w-2xl mx-auto">
            Join thousands of developers who are already using BLOA to build amazing applications.
        </p>
        <div class="flex flex-wrap gap-4 justify-center">
            <a href="/download.php" class="btn btn-primary bg-white text-primary-600 hover:bg-primary-50 btn-lg">
                <i class="fas fa-download mr-2"></i>Download BLOA
            </a>
            <a href="/docs.php" class="btn bg-primary-700 text-white hover:bg-primary-800 border-2 border-white btn-lg">
                <i class="fas fa-book mr-2"></i>View Documentation
            </a>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
