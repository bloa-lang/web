<?php $pageTitle = "Download & Install"; ?>
<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="bg-gradient-to-br from-primary-50 to-white py-16">
    <div class="container-custom max-w-7xl mx-auto px-4 md:px-6 lg:px-8">
        <h1 class="text-5xl md:text-6xl font-bold font-display text-neutral-900 mb-4">
            Get <span class="gradient-text">Started</span>
        </h1>
        <p class="text-xl text-neutral-600 max-w-2xl">
            Download and install BLOA on your system
        </p>
    </div>
</section>

<!-- Installation Tabs -->
<section class="py-16">
    <div class="container-custom max-w-4xl mx-auto px-4 md:px-6 lg:px-8">
        <!-- OS Selection -->
        <div class="flex flex-wrap gap-4 mb-12">
            <button class="os-tab btn btn-primary active" data-os="macos">
                <i class="fab fa-apple mr-2"></i>macOS
            </button>
            <button class="os-tab btn btn-secondary" data-os="linux">
                <i class="fab fa-linux mr-2"></i>Linux
            </button>
            <button class="os-tab btn btn-secondary" data-os="windows">
                <i class="fab fa-windows mr-2"></i>Windows
            </button>
            <button class="os-tab btn btn-secondary" data-os="docker">
                <i class="fab fa-docker mr-2"></i>Docker
            </button>
        </div>

        <!-- macOS Instructions -->
        <div class="os-content active" id="macos">
            <div class="card mb-8">
                <h2 class="text-2xl font-bold text-neutral-900 mb-4">Install on macOS</h2>
                
                <h3 class="text-lg font-semibold text-neutral-900 mt-6 mb-3">Using Homebrew (Recommended)</h3>
                <div class="bg-neutral-900 text-neutral-50 p-4 rounded-lg font-mono text-sm mb-4">
                    <div class="text-emerald-400">$ brew install bloa</div>
                </div>

                <h3 class="text-lg font-semibold text-neutral-900 mt-6 mb-3">From Source</h3>
                <div class="bg-neutral-900 text-neutral-50 p-4 rounded-lg font-mono text-sm mb-4">
                    <div class="text-emerald-400">$ git clone https://github.com/bloa-lang/bloa.git</div>
                    <div class="text-emerald-400">$ cd bloa && make install</div>
                </div>

                <div class="alert alert-success">
                    <strong>✓ Installed!</strong> Verify with: <code>bloa --version</code>
                </div>
            </div>
        </div>

        <!-- Linux Instructions -->
        <div class="os-content hidden" id="linux">
            <div class="card mb-8">
                <h2 class="text-2xl font-bold text-neutral-900 mb-4">Install on Linux</h2>
                
                <h3 class="text-lg font-semibold text-neutral-900 mt-6 mb-3">Ubuntu/Debian</h3>
                <div class="bg-neutral-900 text-neutral-50 p-4 rounded-lg font-mono text-sm mb-4">
                    <div class="text-emerald-400">$ sudo apt update</div>
                    <div class="text-emerald-400">$ sudo apt install bloa</div>
                </div>

                <h3 class="text-lg font-semibold text-neutral-900 mt-6 mb-3">Fedora/RHEL</h3>
                <div class="bg-neutral-900 text-neutral-50 p-4 rounded-lg font-mono text-sm mb-4">
                    <div class="text-emerald-400">$ sudo dnf install bloa</div>
                </div>

                <h3 class="text-lg font-semibold text-neutral-900 mt-6 mb-3">Arch Linux</h3>
                <div class="bg-neutral-900 text-neutral-50 p-4 rounded-lg font-mono text-sm mb-4">
                    <div class="text-emerald-400">$ sudo pacman -S bloa</div>
                </div>

                <div class="alert alert-success">
                    <strong>✓ Installed!</strong> Verify with: <code>bloa --version</code>
                </div>
            </div>
        </div>

        <!-- Windows Instructions -->
        <div class="os-content hidden" id="windows">
            <div class="card mb-8">
                <h2 class="text-2xl font-bold text-neutral-900 mb-4">Install on Windows</h2>
                
                <h3 class="text-lg font-semibold text-neutral-900 mt-6 mb-3">Using Chocolatey</h3>
                <div class="bg-neutral-900 text-neutral-50 p-4 rounded-lg font-mono text-sm mb-4">
                    <div class="text-emerald-400">> choco install bloa</div>
                </div>

                <h3 class="text-lg font-semibold text-neutral-900 mt-6 mb-3">Using Scoop</h3>
                <div class="bg-neutral-900 text-neutral-50 p-4 rounded-lg font-mono text-sm mb-4">
                    <div class="text-emerald-400">> scoop install bloa</div>
                </div>

                <h3 class="text-lg font-semibold text-neutral-900 mt-6 mb-3">Download Installer</h3>
                <p class="text-neutral-700 mb-4">
                    <a href="#" class="text-primary-600 hover:text-primary-700">Download BLOA Installer</a> and run the executable.
                </p>

                <div class="alert alert-success">
                    <strong>✓ Installed!</strong> Open PowerShell and verify with: <code>bloa --version</code>
                </div>
            </div>
        </div>

        <!-- Docker Instructions -->
        <div class="os-content hidden" id="docker">
            <div class="card mb-8">
                <h2 class="text-2xl font-bold text-neutral-900 mb-4">Using Docker</h2>
                
                <h3 class="text-lg font-semibold text-neutral-900 mt-6 mb-3">Run BLOA in Docker</h3>
                <div class="bg-neutral-900 text-neutral-50 p-4 rounded-lg font-mono text-sm mb-4">
                    <div class="text-emerald-400">$ docker pull bloalang/bloa:latest</div>
                    <div class="text-emerald-400">$ docker run -it bloalang/bloa</div>
                </div>

                <h3 class="text-lg font-semibold text-neutral-900 mt-6 mb-3">Using Docker Compose</h3>
                <div class="bg-neutral-900 text-neutral-50 p-4 rounded-lg font-mono text-sm mb-4">
                    <pre><code><span class="text-accent-400">version:</span> <span class="text-emerald-300">'3'</span>
<span class="text-accent-400">services:</span>
  <span class="text-blue-400">bloa:</span>
    <span class="text-accent-400">image:</span> bloalang/bloa:latest
    <span class="text-accent-400">volumes:</span>
      - <span class="text-emerald-300">./app:/app</span></code></pre>
                </div>

                <div class="alert alert-info">
                    <strong>💡 Tip:</strong> Docker is great for containerized development and deployment.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Start -->
<section class="bg-neutral-50 py-16">
    <div class="container-custom max-w-4xl mx-auto px-4 md:px-6 lg:px-8">
        <h2 class="text-3xl font-bold font-display text-neutral-900 mb-8 text-center">Your First Program</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Step 1 -->
            <div class="card">
                <div class="badge badge-primary mb-4 inline-block">Step 1</div>
                <h3 class="text-xl font-bold text-neutral-900 mb-3">Create a file</h3>
                <div class="bg-neutral-900 text-neutral-50 p-3 rounded font-mono text-sm mb-4">
                    <div class="text-emerald-400">$ touch hello.bloa</div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="card">
                <div class="badge badge-primary mb-4 inline-block">Step 2</div>
                <h3 class="text-xl font-bold text-neutral-900 mb-3">Write code</h3>
                <div class="bg-neutral-900 text-neutral-50 p-3 rounded font-mono text-sm mb-4">
                    <pre><code><span class="text-accent-400">fn</span> <span class="text-yellow-400">main</span>() {
  <span class="text-amber-400">println</span>!(<span class="text-emerald-300">"Hello!"</span>);
}</code></pre>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="card">
                <div class="badge badge-primary mb-4 inline-block">Step 3</div>
                <h3 class="text-xl font-bold text-neutral-900 mb-3">Run it</h3>
                <div class="bg-neutral-900 text-neutral-50 p-3 rounded font-mono text-sm mb-4">
                    <div class="text-emerald-400">$ bloa run hello.bloa</div>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="card">
                <div class="badge badge-primary mb-4 inline-block">Step 4</div>
                <h3 class="text-xl font-bold text-neutral-900 mb-3">See output</h3>
                <div class="bg-neutral-900 text-neutral-50 p-3 rounded font-mono text-sm mb-4">
                    <div class="text-emerald-400">Hello!</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Download Links -->
<section class="py-16">
    <div class="container-custom max-w-7xl mx-auto px-4 md:px-6 lg:px-8">
        <h2 class="text-3xl font-bold font-display text-neutral-900 mb-8 text-center">Direct Downloads</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <a href="#" class="card text-center hover:shadow-lg transition-shadow">
                <i class="fab fa-apple text-4xl text-neutral-900 mb-4"></i>
                <h3 class="font-bold text-neutral-900 mb-2">macOS</h3>
                <p class="text-sm text-neutral-600 mb-4">v1.0.0 (Intel & Apple Silicon)</p>
                <span class="text-sm text-primary-600">Download →</span>
            </a>

            <a href="#" class="card text-center hover:shadow-lg transition-shadow">
                <i class="fab fa-linux text-4xl text-neutral-900 mb-4"></i>
                <h3 class="font-bold text-neutral-900 mb-2">Linux</h3>
                <p class="text-sm text-neutral-600 mb-4">v1.0.0 (x64 & ARM64)</p>
                <span class="text-sm text-primary-600">Download →</span>
            </a>

            <a href="#" class="card text-center hover:shadow-lg transition-shadow">
                <i class="fab fa-windows text-4xl text-neutral-900 mb-4"></i>
                <h3 class="font-bold text-neutral-900 mb-2">Windows</h3>
                <p class="text-sm text-neutral-600 mb-4">v1.0.0 (x64 & x86)</p>
                <span class="text-sm text-primary-600">Download →</span>
            </a>

            <a href="#" class="card text-center hover:shadow-lg transition-shadow">
                <i class="fab fa-docker text-4xl text-neutral-900 mb-4"></i>
                <h3 class="font-bold text-neutral-900 mb-2">Docker</h3>
                <p class="text-sm text-neutral-600 mb-4">Pre-built container image</p>
                <span class="text-sm text-primary-600">Learn more →</span>
            </a>
        </div>
    </div>
</section>

<!-- What's Included -->
<section class="bg-neutral-50 py-16">
    <div class="container-custom max-w-4xl mx-auto px-4 md:px-6 lg:px-8">
        <h2 class="text-3xl font-bold font-display text-neutral-900 mb-8 text-center">What's Included</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="flex gap-4">
                <i class="fas fa-check-circle text-2xl text-accent-600 flex-shrink-0"></i>
                <div>
                    <h3 class="font-bold text-neutral-900 mb-1">BLOA Compiler</h3>
                    <p class="text-neutral-700">Fast and optimized compiler for producing efficient binaries</p>
                </div>
            </div>

            <div class="flex gap-4">
                <i class="fas fa-check-circle text-2xl text-accent-600 flex-shrink-0"></i>
                <div>
                    <h3 class="font-bold text-neutral-900 mb-1">Standard Library</h3>
                    <p class="text-neutral-700">Comprehensive standard library with common utilities</p>
                </div>
            </div>

            <div class="flex gap-4">
                <i class="fas fa-check-circle text-2xl text-accent-600 flex-shrink-0"></i>
                <div>
                    <h3 class="font-bold text-neutral-900 mb-1">Package Manager</h3>
                    <p class="text-neutral-700">Easy dependency management and package distribution</p>
                </div>
            </div>

            <div class="flex gap-4">
                <i class="fas fa-check-circle text-2xl text-accent-600 flex-shrink-0"></i>
                <div>
                    <h3 class="font-bold text-neutral-900 mb-1">Documentation</h3>
                    <p class="text-neutral-700">Complete documentation and helpful guides included</p>
                </div>
            </div>

            <div class="flex gap-4">
                <i class="fas fa-check-circle text-2xl text-accent-600 flex-shrink-0"></i>
                <div>
                    <h3 class="font-bold text-neutral-900 mb-1">Debug Tools</h3>
                    <p class="text-neutral-700">Integrated debugger and profiling tools</p>
                </div>
            </div>

            <div class="flex gap-4">
                <i class="fas fa-check-circle text-2xl text-accent-600 flex-shrink-0"></i>
                <div>
                    <h3 class="font-bold text-neutral-900 mb-1">IDE Support</h3>
                    <p class="text-neutral-700">Extensions for VS Code, JetBrains, and other editors</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="py-16">
    <div class="container-custom max-w-4xl mx-auto px-4 md:px-6 lg:px-8">
        <h2 class="text-3xl font-bold font-display text-neutral-900 mb-8 text-center">FAQ</h2>
        
        <div class="space-y-4">
            <details class="card cursor-pointer group">
                <summary class="font-bold text-neutral-900 flex items-center justify-between">
                    Is BLOA free?
                    <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                </summary>
                <p class="text-neutral-700 mt-4">
                    Yes! BLOA is completely free and open source under the MIT License.
                </p>
            </details>

            <details class="card cursor-pointer group">
                <summary class="font-bold text-neutral-900 flex items-center justify-between">
                    Do I need admin rights to install?
                    <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                </summary>
                <p class="text-neutral-700 mt-4">
                    On most package managers, yes. However, you can also compile from source without admin rights.
                </p>
            </details>

            <details class="card cursor-pointer group">
                <summary class="font-bold text-neutral-900 flex items-center justify-between">
                    Can I use BLOA for production?
                    <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                </summary>
                <p class="text-neutral-700 mt-4">
                    Absolutely! BLOA is production-ready. Many companies use it for critical applications.
                </p>
            </details>

            <details class="card cursor-pointer group">
                <summary class="font-bold text-neutral-900 flex items-center justify-between">
                    How do I update BLOA?
                    <i class="fas fa-chevron-down group-open:rotate-180 transition-transform"></i>
                </summary>
                <p class="text-neutral-700 mt-4">
                    Use your package manager: <code>brew upgrade bloa</code> or <code>apt upgrade bloa</code>
                </p>
            </details>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-16">
    <div class="container-custom max-w-4xl mx-auto px-4 md:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-bold font-display text-neutral-900 mb-4">Ready?</h2>
        <p class="text-lg text-neutral-700 mb-8">Install BLOA and start coding today</p>
        <a href="/docs.php" class="btn btn-primary btn-lg">
            <i class="fas fa-arrow-right mr-2"></i>Go to Documentation
        </a>
    </div>
</section>

<!-- JavaScript -->
<script>
document.querySelectorAll('.os-tab').forEach(tab => {
    tab.addEventListener('click', function() {
        const os = this.dataset.os;
        
        // Update active tab
        document.querySelectorAll('.os-tab').forEach(t => {
            if (t === this) {
                t.classList.remove('btn-secondary');
                t.classList.add('btn-primary');
            } else {
                t.classList.add('btn-secondary');
                t.classList.remove('btn-primary');
            }
        });
        
        // Update active content
        document.querySelectorAll('.os-content').forEach(content => {
            if (content.id === os) {
                content.classList.remove('hidden');
            } else {
                content.classList.add('hidden');
            }
        });
    });
});
</script>

<?php include 'footer.php'; ?>
