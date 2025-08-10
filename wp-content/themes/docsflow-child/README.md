# DocsFlow Child Theme

A custom WordPress child theme for DocsFlow insurance document automation platform, featuring Hebrew/RTL support and design patterns inspired by EasyHost.

## Features

- **Hebrew/RTL Support**: Complete right-to-left layout and Hebrew typography
- **EasyHost Design Pattern**: Clean, modern design inspired by EasyHost.co.il
- **Custom Post Types**: Case studies and testimonials
- **Responsive Design**: Mobile-first approach with perfect mobile experience
- **Performance Optimized**: Fast loading with optimized CSS and JavaScript
- **SEO Ready**: Structured data and SEO-friendly markup
- **Accessibility**: WCAG compliant with proper contrast and focus states

## Design System

### Colors
- **Primary Blue**: #2563EB (DocsFlow brand color)
- **Success Green**: #10B981 (completed actions)
- **Warning Orange**: #F59E0B (pending items)
- **Error Red**: #EF4444 (errors and issues)
- **Gray Scale**: Complete neutral palette for text and UI

### Typography
- **Primary Font**: Assistant (Hebrew optimized)
- **Secondary Font**: Rubik (Hebrew optimized)
- **Scale**: 5xl (48px) down to xs (12px)

### Components
- **Buttons**: Primary, secondary, large, small variants
- **Cards**: Feature cards, pricing cards, testimonial cards
- **Forms**: Custom styled inputs with validation
- **Grid System**: Responsive 2-column and 3-column grids

## Installation

1. **Install Parent Theme**: Make sure Astra theme is installed and activated
2. **Upload Child Theme**: Upload the docsflow-child folder to `/wp-content/themes/`
3. **Activate**: Go to Appearance > Themes and activate "DocsFlow Child"
4. **Install Plugins**: Install required plugins (see below)

## Required Plugins

### Essential (Free)
- **Astra** - Parent theme
- **Elementor** - Page builder
- **Contact Form 7** - Contact forms
- **Yoast SEO** - SEO optimization
- **UpdraftPlus** - Backup solution
- **Smush** - Image optimization

### Recommended (Premium)
- **Elementor Pro** - Advanced page builder features
- **WPForms Pro** - Advanced form features
- **Yoast SEO Premium** - Advanced SEO features

## Theme Setup

### 1. Customizer Settings
Go to **Appearance > Customize** and configure:

- **Site Identity**: Upload logo and set site title
- **Colors**: Already set via child theme CSS
- **Typography**: Already configured for Hebrew fonts
- **Header Builder**: Configure navigation menu
- **Footer Builder**: Set footer content

### 2. Astra Settings
Go to **Appearance > Astra Options**:

- **Layout**: Set container width to 1200px
- **Header**: Enable transparent header for homepage
- **Footer**: Configure footer layout
- **Blog**: Set archive layout preferences

### 3. Menu Setup
Create menus in **Appearance > Menus**:

- **Main Menu**: Primary navigation (Hebrew)
- **Footer Menu**: Footer links

### 4. Pages Setup
Create these essential pages:

- **דף הבית** (Homepage)
- **פתרונות** (Solutions)
- **תכונות** (Features)
- **מחירים** (Pricing)
- **לקוחות** (Customers)
- **בלוג** (Blog)
- **על אודות** (About)
- **צור קשר** (Contact)

## Custom Post Types

### Case Studies (מקרי בוחן)
Use for customer success stories:
- **Fields**: Company name, size, industry, results
- **URL**: `/customers/case-study-name`
- **Template**: Single case study layout

### Testimonials (המלצות)  
Use for customer testimonials:
- **Fields**: Customer name, title, company, rating
- **Shortcode**: `[testimonials limit="3"]`
- **Display**: Cards with star ratings

## Shortcodes

### Features Grid
```
[features]
[feature icon="🚀" title="Feature Title" description="Feature description"]
[feature icon="⚡" title="Another Feature" description="Another description"]
[/features]
```

### Testimonials
```
[testimonials limit="3" columns="3"]
```

## Page Templates

### Homepage Template (Elementor)
1. **Hero Section**: Large headline, subtitle, CTA button
2. **Features Grid**: 3-column feature cards
3. **Testimonials**: Customer testimonials carousel
4. **CTA Section**: Final call-to-action

### Solutions Page Template
1. **Page Header**: Title and description
2. **Solutions Grid**: 3 main solutions with icons
3. **Process Flow**: Step-by-step process
4. **CTA**: Demo request form

### Pricing Page Template  
1. **Page Header**: Pricing headline
2. **Pricing Cards**: 3-tier pricing structure
3. **FAQ Section**: Common pricing questions
4. **CTA**: Start trial button

## Customization

### Colors
Edit CSS custom properties in `style.css`:
```css
:root {
  --primary-blue: #2563EB;
  --primary-blue-dark: #1D4ED8;
  /* etc... */
}
```

### Typography
Modify font stack in `style.css`:
```css
body {
  font-family: 'Assistant', 'Rubik', sans-serif;
}
```

### Spacing
Adjust spacing scale:
```css
:root {
  --space-4: 1rem;      /* 16px */
  --space-6: 1.5rem;    /* 24px */
  /* etc... */
}
```

## RTL/Hebrew Considerations

### CSS Guidelines
- Use `margin-inline-start` instead of `margin-left`
- Use `text-align: start` instead of `text-align: left`
- Test all layouts in RTL mode
- Use logical properties when possible

### Content Guidelines
- Write Hebrew content in proper Hebrew
- Use correct Hebrew typography (no English punctuation)
- Ensure proper Hebrew date formats
- Use Hebrew number formats where appropriate

## Performance Optimization

### CSS
- Critical CSS inlined for above-fold content
- Non-critical CSS loaded asynchronously
- CSS custom properties for consistency
- Minimal external dependencies

### JavaScript
- jQuery for compatibility
- Modular code structure
- Event delegation for performance
- Lazy loading for images

### Images
- WebP format support
- Lazy loading implementation
- Optimized sizes for different screens
- CDN integration ready

## SEO Features

### Schema Markup
- Organization schema
- Local business schema  
- Product schema for pricing
- FAQ schema for help content

### Meta Tags
- Hebrew language meta tags
- Proper Open Graph tags
- Twitter Card support
- Canonical URLs

### Performance
- Fast loading speed
- Mobile-first responsive
- Core Web Vitals optimized
- Structured data implementation

## Browser Support

### Supported Browsers
- **Chrome**: 70+
- **Firefox**: 65+
- **Safari**: 12+
- **Edge**: 79+
- **Mobile Safari**: iOS 12+
- **Chrome Mobile**: Android 8+

### RTL Support
- All modern browsers support RTL
- CSS logical properties fallbacks
- Hebrew font rendering optimized
- BiDi text handling

## Development

### File Structure
```
docsflow-child/
├── style.css           # Main stylesheet
├── functions.php       # Theme functions
├── js/
│   └── custom.js      # Custom JavaScript
├── README.md          # This file
└── languages/         # Translation files (future)
```

### Coding Standards
- **CSS**: BEM methodology
- **PHP**: WordPress coding standards
- **JavaScript**: ES5 for compatibility
- **HTML**: Semantic markup

### Git Workflow
1. Create feature branch
2. Make changes
3. Test thoroughly
4. Submit pull request
5. Review and merge

## Support

### Documentation
- Design system documented in CSS
- Component examples in theme files
- Shortcode usage in README
- Customization guides provided

### Troubleshooting
- Check parent theme (Astra) is active
- Verify all required plugins installed
- Clear cache after changes
- Test in RTL mode for Hebrew

## Changelog

### Version 1.0.0
- Initial release
- Complete design system implementation
- Hebrew/RTL support
- Custom post types
- Shortcodes system
- Performance optimizations

## Credits

- **Design Inspiration**: EasyHost.co.il
- **Parent Theme**: Astra by Brainstorm Force
- **Fonts**: Google Fonts (Assistant, Rubik)
- **Icons**: Can use Heroicons or similar
- **Development**: Custom implementation

## License

This theme is licensed under GPL v2 or later.
Same as WordPress: http://www.gnu.org/licenses/gpl-2.0.html

Use it to make something cool, have fun, and share what you've learned with others.