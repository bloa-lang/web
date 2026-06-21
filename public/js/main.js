/**
 * Main JavaScript - Interactive Features
 * Handles navigation, animations, and user interactions
 */

document.addEventListener('DOMContentLoaded', function() {
    initNavigation();
    initAnimations();
    initSmoothScroll();
    initForms();
});

/**
 * Initialize responsive navigation
 */
function initNavigation() {
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!event.target.closest('nav')) {
                mobileMenu.classList.add('hidden');
            }
        });
    }
}

/**
 * Initialize scroll animations
 */
function initAnimations() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fadeIn');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.card, .btn').forEach(el => {
        observer.observe(el);
    });
}

/**
 * Smooth scroll for anchor links
 */
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href === '#') return;
            
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });
}

/**
 * Form handling
 */
function initForms() {
    document.querySelectorAll('form').forEach(form => {
        // Add loading state on submit
        form.addEventListener('submit', function() {
            const btn = this.querySelector('button[type="submit"]');
            if (btn) {
                const originalText = btn.innerHTML;
                btn.disabled = true;
                btn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Processing...';
                
                // Reset after 3 seconds if no actual submission
                setTimeout(() => {
                    btn.disabled = false;
                    btn.innerHTML = originalText;
                }, 3000);
            }
        });

        // Real-time validation
        const inputs = form.querySelectorAll('input, textarea, select');
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                validateField(this);
            });
        });
    });
}

/**
 * Validate form field
 */
function validateField(field) {
    const value = field.value.trim();
    let isValid = true;
    let message = '';

    // Check required
    if (field.hasAttribute('required') && !value) {
        isValid = false;
        message = 'This field is required';
    }
    
    // Check email
    if (field.type === 'email' && value) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(value)) {
            isValid = false;
            message = 'Please enter a valid email';
        }
    }
    
    // Check minlength
    if (field.hasAttribute('minlength')) {
        const minlength = parseInt(field.getAttribute('minlength'));
        if (value.length > 0 && value.length < minlength) {
            isValid = false;
            message = `Minimum ${minlength} characters required`;
        }
    }

    // Update field styling
    if (isValid) {
        field.classList.remove('border-red-500');
        field.classList.add('border-green-500');
        removeErrorMessage(field);
    } else {
        field.classList.remove('border-green-500');
        field.classList.add('border-red-500');
        showErrorMessage(field, message);
    }
}

/**
 * Show validation error
 */
function showErrorMessage(field, message) {
    removeErrorMessage(field);
    const errorEl = document.createElement('div');
    errorEl.className = 'text-red-600 text-sm mt-1 error-message';
    errorEl.textContent = message;
    field.parentNode.insertBefore(errorEl, field.nextSibling);
}

/**
 * Remove validation error
 */
function removeErrorMessage(field) {
    const errorEl = field.nextElementSibling;
    if (errorEl && errorEl.classList.contains('error-message')) {
        errorEl.remove();
    }
}

/**
 * Analytics tracking (if enabled)
 */
function trackEvent(category, action, label) {
    if (window.gtag) {
        gtag('event', action, {
            'event_category': category,
            'event_label': label
        });
    }
}

// Export functions for global use
window.validateField = validateField;
window.trackEvent = trackEvent;
