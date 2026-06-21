<?php $pageTitle = "Documentation"; ?>
<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="bg-gradient-to-br from-primary-50 to-white py-16">
    <div class="container-custom max-w-7xl mx-auto px-4 md:px-6 lg:px-8">
        <h1 class="text-5xl md:text-6xl font-bold font-display text-neutral-900 mb-4">
            <span class="gradient-text">Documentation</span>
        </h1>
        <p class="text-xl text-neutral-600 max-w-2xl">
            Everything you need to master BLOA and build amazing projects
        </p>
    </div>
</section>

<!-- Search Bar -->
<section class="bg-white border-b border-neutral-200 py-8">
    <div class="container-custom max-w-7xl mx-auto px-4 md:px-6 lg:px-8">
        <div class="relative max-w-2xl">
            <i class="fas fa-search absolute left-4 top-3 text-neutral-400"></i>
            <input type="text" placeholder="Search documentation..." class="form-input pl-10 w-full" id="searchInput">
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-16">
    <div class="container-custom max-w-7xl mx-auto px-4 md:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Sidebar Navigation -->
            <div class="md:col-span-1">
                <div class="sticky top-24">
                    <h3 class="text-lg font-bold text-neutral-900 mb-4">Getting Started</h3>
                    <nav class="space-y-2 mb-8">
                        <a href="#" class="block px-3 py-2 rounded-lg text-primary-600 bg-primary-50 hover:bg-primary-100 transition-colors">
                            <i class="fas fa-rocket mr-2"></i>Introduction
                        </a>
                        <a href="#" class="block px-3 py-2 rounded-lg text-neutral-600 hover:bg-neutral-100 transition-colors">
                            <i class="fas fa-download mr-2"></i>Installation
                        </a>
                        <a href="#" class="block px-3 py-2 rounded-lg text-neutral-600 hover:bg-neutral-100 transition-colors">
                            <i class="fas fa-play mr-2"></i>Quick Start
                        </a>
                    </nav>

                    <h3 class="text-lg font-bold text-neutral-900 mb-4">Language Guide</h3>
                    <nav class="space-y-2 mb-8">
                        <a href="#" class="block px-3 py-2 rounded-lg text-neutral-600 hover:bg-neutral-100 transition-colors">
                            <i class="fas fa-cube mr-2"></i>Basics
                        </a>
                        <a href="#" class="block px-3 py-2 rounded-lg text-neutral-600 hover:bg-neutral-100 transition-colors">
                            <i class="fas fa-code mr-2"></i>Variables & Types
                        </a>
                        <a href="#" class="block px-3 py-2 rounded-lg text-neutral-600 hover:bg-neutral-100 transition-colors">
                            <i class="fas fa-function mr-2"></i>Functions
                        </a>
                        <a href="#" class="block px-3 py-2 rounded-lg text-neutral-600 hover:bg-neutral-100 transition-colors">
                            <i class="fas fa-project-diagram mr-2"></i>Structures
                        </a>
                    </nav>

                    <h3 class="text-lg font-bold text-neutral-900 mb-4">Advanced</h3>
                    <nav class="space-y-2">
                        <a href="#" class="block px-3 py-2 rounded-lg text-neutral-600 hover:bg-neutral-100 transition-colors">
                            <i class="fas fa-cogs mr-2"></i>Concurrency
                        </a>
                        <a href="#" class="block px-3 py-2 rounded-lg text-neutral-600 hover:bg-neutral-100 transition-colors">
                            <i class="fas fa-network-wired mr-2"></i>Networking
                        </a>
                        <a href="#" class="block px-3 py-2 rounded-lg text-neutral-600 hover:bg-neutral-100 transition-colors">
                            <i class="fas fa-database mr-2"></i>Databases
                        </a>
                    </nav>
                </div>
            </div>

            <!-- Main Content Area -->
            <div class="md:col-span-3">
                <!-- Section -->
                <article class="card mb-8">
                    <h2 class="text-3xl font-bold font-display text-neutral-900 mb-4">Getting Started</h2>
                    <p class="text-neutral-700 mb-4 leading-relaxed">
                        BLOA is a modern programming language designed for simplicity and power. Let's get you started with the basics.
                    </p>
                    
                    <h3 class="text-xl font-bold text-neutral-900 mt-8 mb-3">Installation</h3>
                    <p class="text-neutral-700 mb-4">Install BLOA using your package manager:</p>
                    <div class="bg-neutral-900 text-neutral-50 p-4 rounded-lg font-mono text-sm mb-4">
                        <div class="text-emerald-400">$ brew install bloa  <span class="text-neutral-600"># macOS</span></div>
                        <div class="text-emerald-400">$ apt install bloa   <span class="text-neutral-600"># Ubuntu/Debian</span></div>
                    </div>

                    <h3 class="text-xl font-bold text-neutral-900 mt-8 mb-3">Hello World</h3>
                    <p class="text-neutral-700 mb-4">Create your first BLOA program:</p>
                    <div class="bg-neutral-900 text-neutral-50 p-4 rounded-lg font-mono text-sm">
                        <pre><code><span class="text-accent-400">fn</span> <span class="text-yellow-400">main</span>() {
  <span class="text-amber-400">println</span>!(<span class="text-emerald-300">"Hello, BLOA!"</span>);
}</code></pre>
                    </div>
                </article>

                <!-- Section -->
                <article class="card mb-8">
                    <h2 class="text-2xl font-bold font-display text-neutral-900 mb-4">Variables & Types</h2>
                    <p class="text-neutral-700 mb-4 leading-relaxed">
                        BLOA uses a powerful type system that helps you write safe and reliable code.
                    </p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                        <div class="bg-neutral-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-neutral-900 mb-2">Type Annotation</h4>
                            <div class="bg-neutral-900 text-neutral-50 p-3 rounded font-mono text-sm">
                                <pre><code><span class="text-accent-400">let</span> name: <span class="text-emerald-400">String</span> = <span class="text-emerald-300">"Alice"</span>;
<span class="text-accent-400">let</span> age: <span class="text-emerald-400">i32</span> = <span class="text-blue-400">30</span>;</code></pre>
                            </div>
                        </div>
                        <div class="bg-neutral-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-neutral-900 mb-2">Type Inference</h4>
                            <div class="bg-neutral-900 text-neutral-50 p-3 rounded font-mono text-sm">
                                <pre><code><span class="text-accent-400">let</span> count = <span class="text-blue-400">42</span>;
<span class="text-accent-400">let</span> price = <span class="text-blue-400">9.99</span>;</code></pre>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Helpful Tips -->
                <div class="alert alert-info">
                    <strong>💡 Tip:</strong> Check out the <a href="/examples.php" class="text-blue-600 hover:underline">Examples</a> page for more code samples and real-world use cases.
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
