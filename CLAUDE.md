# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a WordPress installation running locally via Local by Flywheel (as indicated by the file path structure). The site appears to be called "docsflow" and is set up for local development.

## WordPress Configuration

- **Database Configuration**: Local development setup with MySQL (database: 'local', user: 'root', password: 'root')
- **Environment**: Set to 'local' (`WP_ENVIRONMENT_TYPE`)
- **Debug Mode**: Currently disabled (`WP_DEBUG = false`)
- **Table Prefix**: `wp_` (standard)
- **URL Rewriting**: Standard WordPress pretty permalinks enabled via `.htaccess`
- **Local Development**: Xdebug info available via `local-xdebuginfo.php`

## Active Plugins

The following plugins are installed and should be considered when making changes:

1. **Contact Form 7** - Contact form functionality
2. **Elementor** - Page builder with extensive assets and modules
3. **UpdraftPlus** - Backup and restore functionality
4. **Yoast SEO** (WordPress SEO) - SEO optimization
5. **Smush** (WP Smushit) - Image optimization

## Theme Structure

The site uses WordPress default themes:
- **twentytwentyfive** (likely active) - Modern block theme with extensive patterns and styles
- **twentytwentyfour** - Block theme with portfolio/business focus
- **twentytwentythree** - Classic block theme

All themes follow the modern WordPress block theme architecture with:
- `theme.json` for global styles and settings
- Block patterns in `/patterns/` directories
- Template parts in `/parts/` directories
- Full site editing templates in `/templates/` directories

## Development Commands

This is a standard WordPress installation without custom build processes. Common development tasks:

### Local Development
- Access admin: Navigate to `/wp-admin/` in browser
- Site URL: Determined by Local by Flywheel configuration
- Database: Access via Local's database tools or phpMyAdmin
- Debug info: Access `/local-xdebuginfo.php` for Xdebug configuration
- Pretty permalinks: Enabled via `.htaccess` rewrite rules

### WordPress Management
- Plugin management: Via WP Admin or WP-CLI
- Theme customization: Via WP Admin Customizer or Site Editor
- Content management: Via WP Admin dashboard

### Backup & Maintenance
- Backups: Managed via UpdraftPlus plugin
- Updates: Via WP Admin updates page
- File uploads: Handled in `/wp-content/uploads/`

## File Structure Important Notes

- **wp-config.php**: Contains database credentials and WordPress configuration
- **wp-content/**: Contains themes, plugins, and uploads (the customizable part)
- **wp-content/uploads/**: Media files organized by year/month
- **wp-content/updraft/**: UpdraftPlus backup storage
- **.htaccess**: Controls URL rewriting and server configurations
- **local-xdebuginfo.php**: Local development Xdebug information
- Core WordPress files are in the root and should not be modified directly

## Security Considerations

- Authentication keys and salts are already configured in wp-config.php
- Local development environment with standard local credentials
- Plugins should be kept updated for security
- Consider enabling WP_DEBUG for development work

## Plugin-Specific Notes

- **Elementor**: Extensive assets in `/assets/` with CSS/JS for editor and frontend
- **Yoast SEO**: Handles SEO metadata and XML sitemaps
- **Contact Form 7**: Provides shortcode-based contact forms
- **UpdraftPlus**: Configured for automated backups
- **Smush**: Optimizes images automatically on upload

## WordPress Development Guidelines

- Follow WordPress coding standards for any PHP customizations
- Use child themes for theme modifications to preserve updates
- Custom functionality should go in plugins or theme functions.php
- Use WordPress hooks (actions/filters) for extensibility
- Follow WordPress security best practices (nonces, sanitization, escaping)