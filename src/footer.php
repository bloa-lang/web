    </main>

    <!-- Footer -->
    <footer class="bg-neutral-900 text-neutral-300 border-t border-neutral-800 mt-20">
        <div class="container-custom max-w-7xl mx-auto px-4 md:px-6 lg:px-8 py-16">
            <!-- Footer Content -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <!-- Brand -->
                <div class="col-span-1">
                    <a href="/" class="flex items-center gap-2 text-2xl font-bold font-display text-white mb-4">
                        <i class="fas fa-code text-primary-500"></i>
                        <span>BLOA</span>
                    </a>
                    <p class="text-neutral-400 text-sm leading-relaxed mb-4">
                        A modern programming language with elegant syntax and powerful features for developers worldwide.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="text-neutral-400 hover:text-primary-500 transition-colors" title="GitHub">
                            <i class="fab fa-github text-lg"></i>
                        </a>
                        <a href="#" class="text-neutral-400 hover:text-primary-500 transition-colors" title="Twitter">
                            <i class="fab fa-twitter text-lg"></i>
                        </a>
                        <a href="#" class="text-neutral-400 hover:text-primary-500 transition-colors" title="Discord">
                            <i class="fab fa-discord text-lg"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-white font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="/index.php" class="text-neutral-400 hover:text-primary-500 transition-colors text-sm">Home</a></li>
                        <li><a href="/docs.php" class="text-neutral-400 hover:text-primary-500 transition-colors text-sm">Documentation</a></li>
                        <li><a href="/examples.php" class="text-neutral-400 hover:text-primary-500 transition-colors text-sm">Examples</a></li>
                        <li><a href="/download.php" class="text-neutral-400 hover:text-primary-500 transition-colors text-sm">Download</a></li>
                    </ul>
                </div>

                <!-- Resources -->
                <div>
                    <h4 class="text-white font-semibold mb-4">Resources</h4>
                    <ul class="space-y-2">
                        <li><a href="/about.php" class="text-neutral-400 hover:text-primary-500 transition-colors text-sm">About Us</a></li>
                        <li><a href="#" class="text-neutral-400 hover:text-primary-500 transition-colors text-sm">API Reference</a></li>
                        <li><a href="#" class="text-neutral-400 hover:text-primary-500 transition-colors text-sm">Blog</a></li>
                        <li><a href="#" class="text-neutral-400 hover:text-primary-500 transition-colors text-sm">Community</a></li>
                    </ul>
                </div>

                <!-- Support -->
                <div>
                    <h4 class="text-white font-semibold mb-4">Support</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-neutral-400 hover:text-primary-500 transition-colors text-sm">Help Center</a></li>
                        <li><a href="#" class="text-neutral-400 hover:text-primary-500 transition-colors text-sm">Report Issue</a></li>
                        <li><a href="#" class="text-neutral-400 hover:text-primary-500 transition-colors text-sm">Contribute</a></li>
                        <li><a href="#" class="text-neutral-400 hover:text-primary-500 transition-colors text-sm">Donate</a></li>
                    </ul>
                </div>
            </div>

            <!-- Divider -->
            <div class="border-t border-neutral-800 py-8">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-neutral-400">
                    <p>&copy; 2024-2026 BLOA Community. All rights reserved.</p>
                    <div class="flex gap-6">
                        <a href="#" class="hover:text-primary-500 transition-colors">Privacy Policy</a>
                        <a href="#" class="hover:text-primary-500 transition-colors">Terms of Service</a>
                        <a href="#" class="hover:text-primary-500 transition-colors">License</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Script -->
    <script>
        document.getElementById('mobileMenuBtn').addEventListener('click', function() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        });

        // Close menu when clicking a link
        document.querySelectorAll('#mobileMenu a').forEach(link => {
            link.addEventListener('click', function() {
                document.getElementById('mobileMenu').classList.add('hidden');
            });
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    </script>

    <!-- Extra Scripts -->
    <?php if (isset($extraScripts)) echo $extraScripts; ?>
</body>
</html>
