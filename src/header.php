<?php
/**
 * Header Template - Elegant Navigation Bar
 * Reusable header with navigation, search, and responsive design
 */

// Check if current page for active nav link
function isActive($page) {
  $current = basename($_SERVER['PHP_SELF'], '.php');
  return $current === $page || ($page === 'index' && $current === 'index') ? 'border-b-2 border-primary-600 text-primary-600' : 'text-neutral-600 hover:text-primary-600';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BLOA - A modern programming language with elegant syntax and powerful features">
    <meta name="keywords" content="programming language, BLOA, coding, development">
    <meta name="author" content="BLOA Community">
    <meta property="og:title" content="BLOA - Modern Programming Language">
    <meta property="og:description" content="Discover BLOA, a modern programming language">
    <meta property="og:type" content="website">
    
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - BLOA' : 'BLOA - Modern Programming Language'; ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/public/img/favicon.png">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:wght@600;700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0f7ff', 100: '#e0efff', 200: '#bae0ff', 300: '#7cc5ff',
                            400: '#36a9ff', 500: '#0984ff', 600: '#0066dd', 700: '#004fb8',
                            800: '#003a8f', 900: '#002966', 950: '#001a40'
                        },
                        accent: {
                            50: '#f0fdfa', 100: '#ccfbf1', 200: '#99f7eb', 300: '#5eead4',
                            400: '#2dd4bf', 500: '#14b8a6', 600: '#0d9488', 700: '#0f766e',
                            800: '#134e4a', 900: '#0f2f2a'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', '-apple-system', 'sans-serif'],
                        display: ['Poppins', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <!-- Styles -->
    <link rel="stylesheet" href="/public/css/styles.css">
    
    <!-- Extra Styles -->
    <?php if (isset($extraStyles)) echo $extraStyles; ?>
</head>
<body class="font-sans antialiased">
    <!-- Navbar -->
    <nav class="sticky top-0 z-50 bg-white shadow-md">
        <div class="container-custom max-w-7xl mx-auto px-4 md:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <a href="/" class="flex items-center gap-2 text-2xl font-bold font-display gradient-text">
                    <i class="fas fa-code text-primary-600"></i>
                    <span>BLOA</span>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center gap-8">
                    <a href="/index.php" class="transition-all duration-fast py-2 <?php echo isActive('index'); ?>">
                        <i class="fas fa-home mr-2"></i>Home
                    </a>
                    <a href="/docs.php" class="transition-all duration-fast py-2 <?php echo isActive('docs'); ?>">
                        <i class="fas fa-book mr-2"></i>Documentation
                    </a>
                    <a href="/examples.php" class="transition-all duration-fast py-2 <?php echo isActive('examples'); ?>">
                        <i class="fas fa-lightbulb mr-2"></i>Examples
                    </a>
                    <a href="/about.php" class="transition-all duration-fast py-2 <?php echo isActive('about'); ?>">
                        <i class="fas fa-info-circle mr-2"></i>About
                    </a>
                </div>

                <!-- CTA Button & Mobile Menu -->
                <div class="flex items-center gap-4">
                    <a href="/download.php" class="hidden sm:flex btn btn-primary btn-sm">
                        <i class="fas fa-download mr-2"></i>Get Started
                    </a>
                    
                    <!-- Mobile Menu Button -->
                    <button id="mobileMenuBtn" class="md:hidden text-neutral-600 hover:text-primary-600 transition-colors">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Navigation -->
            <div id="mobileMenu" class="hidden md:hidden pb-4 border-t border-neutral-200">
                <a href="/index.php" class="block px-4 py-2 text-neutral-600 hover:text-primary-600 hover:bg-primary-50 rounded transition-colors">
                    <i class="fas fa-home mr-2"></i>Home
                </a>
                <a href="/docs.php" class="block px-4 py-2 text-neutral-600 hover:text-primary-600 hover:bg-primary-50 rounded transition-colors">
                    <i class="fas fa-book mr-2"></i>Documentation
                </a>
                <a href="/examples.php" class="block px-4 py-2 text-neutral-600 hover:text-primary-600 hover:bg-primary-50 rounded transition-colors">
                    <i class="fas fa-lightbulb mr-2"></i>Examples
                </a>
                <a href="/about.php" class="block px-4 py-2 text-neutral-600 hover:text-primary-600 hover:bg-primary-50 rounded transition-colors">
                    <i class="fas fa-info-circle mr-2"></i>About
                </a>
                <a href="/download.php" class="btn btn-primary btn-sm m-4 w-[calc(100%-2rem)]">
                    <i class="fas fa-download mr-2"></i>Get Started
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
