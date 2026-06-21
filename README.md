# BLOA Official Website

Modern, elegant official website for the BLOA programming language.

## ✨ Features

- **Elegant Design** - Modern, responsive UI built with Tailwind CSS
- **Fast Performance** - Optimized PHP with caching and compression
- **Mobile First** - Fully responsive on all devices
- **Accessibility** - WCAG 2.1 compliant
- **Security** - Built-in security headers and CSRF protection
- **SEO Optimized** - Semantic HTML and meta tags
- **Easy Deployment** - Docker, Nginx, Apache supported

## 🚀 Quick Start

### Local Development

```bash
# Clone repository
git clone https://github.com/bloa-lang/web.git
cd web

# Start development server
php -S localhost:8000

# Open browser
open http://localhost:8000
```

### Using Docker

```bash
# Build and run
docker-compose up -d

# Access website
open http://localhost
```

### Requirements

- **PHP:** 8.1+
- **Web Server:** Apache (with mod_rewrite) or Nginx
- **Node.js:** 16+ (for assets)
- **Docker:** 20.10+ (optional)

## 📁 Project Structure

```
web/
├── src/                    # PHP source files
│   ├── index.php          # Homepage
│   ├── docs.php           # Documentation page
│   ├── examples.php       # Examples page
│   ├── about.php          # About page
│   ├── download.php       # Download/Install page
│   ├── header.php         # Navigation component
│   ├── footer.php         # Footer component
│   ├── 403.php            # Forbidden error page
│   ├── 404.php            # Not found error page
│   └── 500.php            # Server error page
├── public/
│   ├── css/
│   │   └── styles.css     # Main stylesheet
│   ├── js/                # JavaScript files
│   └── img/               # Images and assets
├── .htaccess              # Apache configuration
├── nginx.conf             # Nginx configuration
├── Dockerfile             # Docker image
├── docker-compose.yml     # Docker Compose setup
├── composer.json          # PHP dependencies
├── config.php             # Application configuration
└── tailwind.config.js     # Tailwind CSS config
```

## 🎨 Design System

### Color Palette

- **Primary:** Blue (#0066dd)
- **Secondary:** Teal (#14b8a6)
- **Neutral:** Gray shades
- **Status:** Green, Orange, Red

### Typography

- **Display Font:** Poppins (headings)
- **Body Font:** Inter (text)
- **Mono Font:** Fira Code (code)

### Components

- Buttons (primary, secondary, outline, ghost)
- Cards
- Forms
- Badges
- Alerts
- Navigation

## 🛠️ Development

### Commands

```bash
# Install dependencies
composer install

# Run linting
composer run lint

# Fix code style
composer run lint:fix

# Run tests
composer run test

# Analyze code
composer run analyze

# Development server
composer run dev
```

### File Structure for New Pages

```php
<?php $pageTitle = "Page Title"; ?>
<?php include 'header.php'; ?>

<!-- Content here -->

<?php include 'footer.php'; ?>
```

## 📦 Deployment

### Apache

1. Copy files to `/var/www/html/bloa-web`
2. Enable `.htaccess` rewriting
3. Set permissions: `chmod -R 755`
4. Configure virtual host

### Nginx

1. Use provided `nginx.conf`
2. Install PHP-FPM
3. Configure SSL certificates
4. Restart Nginx

### Docker

```bash
# Build image
docker build -t bloa-web .

# Run container
docker run -d -p 80:80 -p 443:443 bloa-web

# Or use docker-compose
docker-compose up -d
```

## 🔒 Security

- ✅ CSRF protection on all forms
- ✅ Content Security Policy headers
- ✅ HTTP security headers
- ✅ Input validation
- ✅ Output escaping
- ✅ SQL injection prevention

## 🌐 Browser Support

- Chrome/Edge 90+
- Firefox 88+
- Safari 14+
- Mobile browsers

## 📝 Contributing

To contribute to the website:

1. Edit the PHP/HTML files
2. Test locally with PHP server
3. Ensure responsive design works on mobile
4. Submit a pull request

## License

Same as the main Bloa project.