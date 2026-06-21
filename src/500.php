<?php $pageTitle = "Server Error"; ?>
<?php include 'header.php'; ?>

<!-- 500 Error Section -->
<section class="min-h-screen flex items-center justify-center py-20">
    <div class="container-custom max-w-2xl mx-auto px-4 md:px-6 lg:px-8 text-center">
        <div class="animate-bounce mb-8">
            <i class="fas fa-exclamation-triangle text-8xl text-danger opacity-20"></i>
        </div>
        
        <h1 class="text-9xl font-bold font-display text-neutral-200 mb-4">500</h1>
        <h2 class="text-4xl font-bold font-display text-neutral-900 mb-4">Server Error</h2>
        
        <p class="text-xl text-neutral-600 mb-8 leading-relaxed">
            Something went wrong on our end. Our team has been notified and is working on a fix.
        </p>

        <!-- Alert -->
        <div class="alert alert-danger mb-8">
            <strong>Error:</strong> An unexpected error occurred. Please try again in a few moments.
        </div>

        <!-- What to do -->
        <div class="bg-neutral-50 rounded-lg p-8 mb-8">
            <h3 class="font-bold text-neutral-900 mb-4">Try these steps:</h3>
            <div class="text-left space-y-3">
                <div class="flex gap-3">
                    <span class="badge badge-primary inline-block">1</span>
                    <div>
                        <p class="font-semibold text-neutral-900">Refresh the page</p>
                        <p class="text-sm text-neutral-600">Sometimes the issue resolves itself</p>
                    </div>
                </div>
                <div class="flex gap-3">
                    <span class="badge badge-primary inline-block">2</span>
                    <div>
                        <p class="font-semibold text-neutral-900">Clear your cache</p>
                        <p class="text-sm text-neutral-600">Remove cached files and try again</p>
                    </div>
                </div>
                <div class="flex gap-3">
                    <span class="badge badge-primary inline-block">3</span>
                    <div>
                        <p class="font-semibold text-neutral-900">Contact support</p>
                        <p class="text-sm text-neutral-600">If the problem persists, let us know</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Actions -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
            <a href="/" class="btn btn-primary">
                <i class="fas fa-home mr-2"></i>Go Home
            </a>
            <a href="javascript:location.reload()" class="btn btn-secondary">
                <i class="fas fa-redo mr-2"></i>Refresh Page
            </a>
        </div>

        <!-- Support Info -->
        <div class="text-neutral-600 text-sm">
            <p class="mb-2">Need help? Contact us at:</p>
            <a href="mailto:support@bloa.dev" class="text-primary-600 hover:text-primary-700">support@bloa.dev</a>
        </div>

        <!-- Illustration -->
        <div class="text-6xl mb-8 opacity-50 mt-12">
            <i class="fas fa-robot"></i>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
