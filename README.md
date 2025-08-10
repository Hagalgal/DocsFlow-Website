# DocsFlow - Hebrew Document Management System

A professional WordPress website for DocsFlow, a document management system designed specifically for Israeli insurance agents. Features complete Hebrew/RTL support, modern design, and comprehensive functionality.

## 🌟 Features

- **Complete Hebrew/RTL Support** - Full right-to-left layout with Hebrew typography
- **Modern Design System** - Professional UI based on contemporary design patterns
- **Insurance Agent Focused** - Specifically designed for Israeli insurance industry
- **Mobile Responsive** - Optimized for all devices and screen sizes
- **SEO Optimized** - Built with search engine optimization in mind

## 🛠 Technology Stack

- **WordPress** - Content Management System
- **Astra Theme** - Parent theme foundation
- **Custom Child Theme** - DocsFlow-specific customizations
- **Hebrew Fonts** - Assistant & Rubik font families
- **RTL CSS** - Complete right-to-left stylesheet
- **JavaScript** - Interactive features and animations

## 📱 Pages Included

### Main Pages
- **Homepage** (`/home/`) - Hero section with key benefits and features
- **Features** (`/features/`) - Complete feature showcase with comparisons
- **Pricing** (`/pricing/`) - 3-tier pricing structure with comparison table
- **Contact** (`/contact/`) - Contact form with demo request functionality
- **About** (`/about/`) - Company information

### Solution Pages
- **Digital Signature** (`/solutions/digital-signature/`) - Digital signature capabilities
- **Document Management** (`/solutions/document-management/`) - Smart document organization
- **Process Automation** (`/solutions/process-automation/`) - Workflow automation features

## 🚀 Key Components

### Design System
- **Color Palette** - Primary blue (#2563EB) with status colors
- **Typography** - 9-scale system from 12px to 48px
- **Spacing** - Consistent 8px-based spacing system
- **Components** - Reusable cards, buttons, forms, and layouts

### Features Highlights
- **WhatsApp Integration** - Direct document sharing via WhatsApp
- **AI Processing** - Smart document categorization and processing
- **Multi-user Support** - Team collaboration and permissions
- **Security** - End-to-end encryption and compliance
- **24/7 Support** - Hebrew support for Israeli customers

### Technical Features
- **RTL Support** - Complete right-to-left layout
- **Responsive Design** - Mobile-first approach
- **Performance Optimized** - Fast loading with lazy loading
- **SEO Ready** - Meta tags, schema markup, sitemap ready
- **Form Validation** - Client and server-side validation
- **Accessibility** - WCAG compliant design

## 📁 File Structure

```
wp-content/themes/docsflow-child/
├── assets/
│   ├── images/
│   │   ├── hero-placeholder.svg
│   │   ├── solution-placeholder.svg
│   │   └── logo.svg
│   └── .htaccess
├── js/
│   └── custom.js
├── page-templates/
│   ├── homepage.php
│   ├── features.php
│   ├── pricing.php
│   ├── contact.php
│   └── solutions.php
├── functions.php
├── style.css
├── style-rtl.css
└── screenshot.png
```

## 🔧 Installation

1. **WordPress Setup**
   - Install WordPress locally or on server
   - Install and activate Astra parent theme
   - Install recommended plugins (Contact Form 7, Yoast SEO, Elementor)

2. **Theme Installation**
   - Upload the `docsflow-child` theme folder
   - Activate the DocsFlow Child theme
   - Pages and navigation will be created automatically

3. **Configuration**
   - Go to Appearance → DocsFlow Setup to create pages manually if needed
   - Configure Contact Form 7 for contact forms
   - Set up Yoast SEO for optimization
   - Add actual content and images

## 🎨 Customization

### Colors
The design system uses CSS custom properties that can be easily modified:
```css
:root {
  --primary-blue: #2563EB;
  --primary-blue-dark: #1D4ED8;
  --success-green: #10B981;
  /* ... more variables */
}
```

### Typography
Hebrew fonts are loaded via Google Fonts:
- **Assistant** - Primary Hebrew font
- **Rubik** - Alternative Hebrew font

### Templates
All page templates are located in `/page-templates/` and can be customized as needed.

## 🌐 Supported Languages

- **Hebrew** - Primary language with complete RTL support
- **English** - Secondary language support built-in

## 📊 Performance Features

- **Lazy Loading** - Images load on scroll
- **Critical CSS** - Inline critical styles for fast rendering
- **Minified Assets** - Compressed CSS and JavaScript
- **Caching Ready** - Compatible with WordPress caching plugins

## 🔐 Security Features

- **Sanitized Inputs** - All form inputs are validated and sanitized
- **Nonce Protection** - WordPress nonce verification for forms
- **File Access Control** - .htaccess rules for asset protection
- **No Direct PHP Access** - Proper WordPress security practices

## 📱 Mobile Optimization

- **Responsive Grid** - Flexible grid system for all screen sizes
- **Touch Friendly** - Optimized for mobile interactions
- **Fast Loading** - Mobile-optimized images and assets
- **iOS/Android Ready** - Progressive Web App capabilities

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📄 License

This project is licensed under the GPL v2 or later - see the [LICENSE](LICENSE) file for details.

## 🆘 Support

For support and questions:
- **Email**: support@docsflow.co.il
- **Phone**: 03-1234567
- **WhatsApp**: 050-1234567

## 🚀 Live Demo

Visit the live website: [DocsFlow Demo](https://demo.docsflow.co.il)

---

## Development Notes

### WordPress Requirements
- WordPress 5.0+
- PHP 7.4+
- Astra Theme (parent)

### Recommended Plugins
- Contact Form 7 (contact forms)
- Yoast SEO (search optimization)
- Elementor (page building, optional)
- WP Rocket (caching, optional)

### Browser Support
- Chrome/Edge 88+
- Firefox 85+
- Safari 14+
- Mobile browsers (iOS Safari, Chrome Mobile)

Built with ❤️ for Israeli insurance agents.