FROM php:8.1-fpm-alpine

# Install system packages
RUN apk add --no-cache \
    nginx \
    supervisor \
    curl \
    git \
    wget \
    unzip \
    zip

# Install PHP extensions
RUN docker-php-ext-install \
    pdo \
    pdo_mysql \
    mysqli \
    mbstring \
    opcache

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create app directory
WORKDIR /var/www/html

# Copy application
COPY . .

# Set permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Copy Nginx config
COPY nginx.conf /etc/nginx/http.d/default.conf

# Copy supervisor config
RUN mkdir -p /etc/supervisor/conf.d
COPY supervisor.conf /etc/supervisor/conf.d/app.conf

# Expose port
EXPOSE 80 443

# Health check
HEALTHCHECK --interval=30s --timeout=10s --start-period=40s --retries=3 \
    CMD curl -f http://localhost/ || exit 1

# Start services
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/supervisord.conf"]
