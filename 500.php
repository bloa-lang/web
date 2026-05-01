<?php $title = '500 Server Error - Bloa Programming Language'; include 'header.php'; ?>

<div class="min-h-[80vh] flex items-center justify-center px-4 py-24">
    <div class="max-w-3xl w-full bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-3xl p-12 shadow-xl shadow-slate-900/5">
        <div class="text-center">
            <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-red-500/10 text-red-500 mb-8">
                <i class="fas fa-server text-3xl text-red-500 dark:text-red-300"></i>
            </div>
            <p class="text-sm uppercase tracking-[0.25em] font-semibold text-red-600 mb-4">Server error</p>
            <h1 class="text-6xl font-bold tracking-tight text-gray-900 dark:text-white mb-4">500</h1>
            <p class="text-lg text-gray-600 dark:text-gray-300 max-w-xl mx-auto mb-8">Something went wrong on our end. Please try again later or return to the homepage.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="/" class="inline-flex items-center justify-center rounded-full bg-cyan-500 text-black px-6 py-3 font-semibold hover:bg-cyan-400 transition">Go Home</a>
                <a href="/docs" class="inline-flex items-center justify-center rounded-full border border-cyan-500 text-cyan-500 dark:text-cyan-300 px-6 py-3 font-semibold hover:bg-cyan-50 dark:hover:bg-cyan-500/10 transition">Read Docs</a>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>