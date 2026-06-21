<?php $pageTitle = "Page Not Found"; ?>
<?php include 'header.php'; ?>

<!-- 404 Error Section -->
<section class="min-h-screen flex items-center justify-center py-20">
    <div class="container-custom max-w-2xl mx-auto px-4 md:px-6 lg:px-8 text-center">
        <div class="animate-bounce mb-8">
            <i class="fas fa-search text-8xl text-primary-600 opacity-20"></i>
        </div>
        
        <h1 class="text-9xl font-bold font-display text-neutral-200 mb-4">404</h1>
        <h2 class="text-4xl font-bold font-display text-neutral-900 mb-4">Page Not Found</h2>
        
        <p class="text-xl text-neutral-600 mb-8 leading-relaxed">
            Oops! We couldn't find the page you're looking for. It might have been moved or deleted.
        </p>

        <!-- Suggestions -->
        <div class="bg-neutral-50 rounded-lg p-8 mb-8">
            <h3 class="font-bold text-neutral-900 mb-4">Here are some helpful links:</h3>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/" class="btn btn-primary">
                    <i class="fas fa-home mr-2"></i>Go Home
                </a>
                <a href="/docs.php" class="btn btn-secondary">
                    <i class="fas fa-book mr-2"></i>Documentation
                </a>
                <a href="/examples.php" class="btn btn-secondary">
                    <i class="fas fa-lightbulb mr-2"></i>Examples
                </a>
            </div>
        </div>

        <!-- Search -->
        <div class="max-w-md mx-auto mb-8">
            <form action="#" method="GET" class="flex gap-2">
                <div class="relative flex-1">
                    <i class="fas fa-search absolute left-3 top-3 text-neutral-400"></i>
                    <input type="text" placeholder="Search..." class="form-input pl-10 w-full" name="q">
                </div>
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>

        <!-- Illustration -->
        <div class="text-6xl mb-8 opacity-50">
            <i class="fas fa-compass"></i>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
