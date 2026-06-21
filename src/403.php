<?php $pageTitle = "Access Forbidden"; ?>
<?php include 'header.php'; ?>

<!-- 403 Error Section -->
<section class="min-h-screen flex items-center justify-center py-20">
    <div class="container-custom max-w-2xl mx-auto px-4 md:px-6 lg:px-8 text-center">
        <div class="animate-pulse mb-8">
            <i class="fas fa-lock text-8xl text-orange-600 opacity-20"></i>
        </div>
        
        <h1 class="text-9xl font-bold font-display text-neutral-200 mb-4">403</h1>
        <h2 class="text-4xl font-bold font-display text-neutral-900 mb-4">Access Forbidden</h2>
        
        <p class="text-xl text-neutral-600 mb-8 leading-relaxed">
            Sorry! You don't have permission to access this resource. This area is restricted.
        </p>

        <!-- Suggestions -->
        <div class="bg-orange-50 border-l-4 border-orange-500 rounded-lg p-8 mb-8">
            <h3 class="font-bold text-neutral-900 mb-4">What you can do:</h3>
            <ul class="text-left text-neutral-700 space-y-2 mb-6">
                <li><i class="fas fa-check text-orange-600 mr-2"></i>Check if you're logged in with the correct account</li>
                <li><i class="fas fa-check text-orange-600 mr-2"></i>Contact your administrator for access</li>
                <li><i class="fas fa-check text-orange-600 mr-2"></i>Try accessing a different page</li>
            </ul>
        </div>

        <!-- Actions -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
            <a href="/" class="btn btn-primary">
                <i class="fas fa-home mr-2"></i>Go Home
            </a>
            <a href="/about.php" class="btn btn-secondary">
                <i class="fas fa-info-circle mr-2"></i>About Us
            </a>
        </div>

        <!-- Illustration -->
        <div class="text-6xl mb-8 opacity-50">
            <i class="fas fa-shield-alt"></i>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
