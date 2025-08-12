# DocsFlow Deployment Guide for uPress

## 🚀 Deploying to docsflow.co.il on uPress Servers

This guide covers deploying your DocsFlow website to uPress hosting infrastructure.

## About uPress
uPress is Israel's leading managed WordPress hosting provider, offering:
- Managed WordPress hosting
- Israeli-based servers
- Hebrew support
- Automatic updates and backups
- Built-in security features

## Pre-Deployment Checklist

### ✅ What We're Deploying:
- DocsFlow Child Theme (Phase 2 complete)
- Interactive Demo System
- WhatsApp Business Widget
- Video Testimonials
- Custom Icon System
- SEO Optimizations
- Mobile-Responsive Design

## Step 1: Access Your uPress Dashboard

1. **Login to uPress Control Panel**
   - Go to: https://my.upress.co.il
   - Login with your credentials
   - Select your docsflow.co.il website

2. **Verify Current Setup**
   - Check PHP version (should be 8.0+)
   - Verify SSL is active
   - Confirm backup settings

## Step 2: Prepare for Deployment

### Current Local Environment:
```
Site: Local by Flywheel
Database: local/root/root
WordPress Version: Latest
Theme: DocsFlow Child (based on Astra)
```

### Production Environment:
```
Domain: docsflow.co.il
Server: uPress managed hosting
Database: Provided by uPress
SSL: Included with uPress
```

## Step 3: Database Export and Migration

### Export Local Database:
1. **Using phpMyAdmin (Local):**
   ```
   1. Go to http://docsflow.local/wp-admin/ 
   2. Navigate to phpMyAdmin in Local by Flywheel
   3. Select "local" database
   4. Click "Export" → "Quick" → "SQL format"
   5. Download the .sql file
   ```

2. **Using WP-CLI (Alternative):**
   ```bash
   wp db export docsflow-backup.sql --path=/path/to/wordpress
   ```

### Import to uPress:
1. **Access uPress Database:**
   - Login to uPress dashboard
   - Go to "Database" section
   - Click "phpMyAdmin" or use provided database tools

2. **Import Database:**
   - Create new database or use existing
   - Import your exported .sql file
   - Update site URLs (see Step 4)

## Step 4: Update Database URLs

### Required URL Updates:
```sql
-- Update home URL
UPDATE wp_options SET option_value = 'https://docsflow.co.il' WHERE option_name = 'home';

-- Update site URL  
UPDATE wp_options SET option_value = 'https://docsflow.co.il' WHERE option_name = 'siteurl';

-- Update upload URLs (if needed)
UPDATE wp_options SET option_value = 'https://docsflow.co.il/wp-content/uploads' WHERE option_name = 'upload_url_path';

-- Search and replace any hardcoded URLs
UPDATE wp_posts SET post_content = REPLACE(post_content, 'http://docsflow.local', 'https://docsflow.co.il');
UPDATE wp_posts SET post_content = REPLACE(post_content, 'https://docsflow.local', 'https://docsflow.co.il');
```

### Using uPress Tools:
uPress often provides URL replacement tools in their dashboard:
- Look for "Search & Replace" or "URL Migration" tools
- Use these instead of manual SQL if available

## Step 5: File Upload Methods

### Method 1: uPress File Manager (Recommended)
1. **Access File Manager:**
   - Login to uPress dashboard
   - Click "File Manager" or "Website Files"
   - Navigate to your domain folder

2. **Upload DocsFlow Theme:**
   ```
   Upload to: /public_html/wp-content/themes/
   
   Files to upload:
   └── docsflow-child/ (entire folder)
       ├── style.css
       ├── functions.php  
       ├── assets/icons/custom-icons.svg
       ├── js/custom.js
       ├── js/whatsapp-widget.js
       ├── page-templates/
       ├── partials/demo-section.php
       └── inc/ (SEO files)
   ```

### Method 2: FTP/SFTP Upload
1. **Get FTP Credentials from uPress:**
   - Host: Usually ftp.docsflow.co.il or provided by uPress
   - Username: Provided by uPress
   - Password: Provided by uPress
   - Port: 21 (FTP) or 22 (SFTP)

2. **Upload Files:**
   ```
   Remote Directory: /public_html/wp-content/themes/
   Local Directory: C:\Users\gonen\Local Sites\docsflow\app\public\wp-content\themes\docsflow-child\
   ```

### Method 3: Staging Environment (If Available)
uPress may offer staging environments:
1. Upload to staging first
2. Test everything works
3. Push to production

## Step 6: WordPress Configuration

### Update wp-config.php (if accessible):
```php
// uPress typically manages wp-config.php
// But if you have access, ensure these settings:

// Force SSL
define('FORCE_SSL_ADMIN', true);

// Security settings
define('DISALLOW_FILE_EDIT', true);

// Performance settings  
define('WP_POST_REVISIONS', 3);
define('AUTOSAVE_INTERVAL', 300);

// uPress may handle these automatically
```

## Step 7: Plugin Management

### Verify Required Plugins are Active:
1. **Access WordPress Admin:**
   - Go to: https://docsflow.co.il/wp-admin/
   - Login with your credentials

2. **Check Plugin Status:**
   ```
   ✅ Astra (Parent Theme)
   ✅ Contact Form 7
   ✅ Elementor
   ✅ Yoast SEO
   ✅ Smush
   ✅ UpdraftPlus (for backups)
   ```

3. **Install Additional Plugins (if needed):**
   - Wordfence Security
   - WP Rocket (if not included by uPress)

## Step 8: Theme Activation

1. **Navigate to Appearance > Themes**
2. **Activate DocsFlow Child Theme**
3. **Verify Parent Theme (Astra) is Available**

### If Child Theme Doesn't Appear:
- Check file permissions (755 for folders, 644 for files)
- Verify style.css has proper header comment
- Check uPress file manager for upload errors

## Step 9: uPress-Specific Configurations

### Cache Settings:
- uPress includes built-in caching
- Check uPress dashboard for cache settings
- Clear cache after deployment

### Security Features:
- uPress includes security monitoring
- Verify firewall settings in dashboard
- Check for any blocked features

### Performance Optimization:
- uPress may include CDN
- Image optimization might be built-in
- Check performance settings in dashboard

## Step 10: Testing Deployment

### Essential Tests:
```
Homepage Tests:
✅ https://docsflow.co.il loads correctly
✅ Hero section displays with purple background
✅ Interactive demo functions work
✅ WhatsApp widget appears and is clickable
✅ Social proof notifications display

Feature Tests:
✅ Video testimonials open in modals
✅ Custom icons display properly
✅ Contact form submits successfully
✅ Mobile responsive design works
✅ All page templates function (Features, Pricing, Contact)

Technical Tests:
✅ SSL certificate active (green padlock)
✅ Site speed acceptable (< 3 seconds)
✅ No JavaScript errors in console
✅ SEO meta tags present
✅ Search functionality works
```

## Step 11: Post-Deployment Tasks

### DNS Verification:
```bash
# Check DNS propagation
nslookup docsflow.co.il
dig docsflow.co.il
```

### Performance Testing:
- Test with GTmetrix or PageSpeed Insights
- Verify Core Web Vitals scores
- Check mobile performance

### SEO Check:
- Submit sitemap to Google Search Console
- Verify meta descriptions and titles
- Check structured data (schema markup)

## Step 12: Backup Configuration

### uPress Backup Settings:
1. **Access Backup Section in uPress Dashboard**
2. **Configure Automatic Backups:**
   - Daily backups recommended
   - Keep at least 7-14 backup copies
   - Include database and files

3. **Test Backup Restoration:**
   - Download a backup
   - Verify it contains all your files
   - Test restoration process

## Troubleshooting Common uPress Issues

### White Screen of Death:
1. Check uPress error logs in dashboard
2. Deactivate recently installed plugins
3. Switch to default theme temporarily
4. Contact uPress support

### Database Connection Errors:
1. Check with uPress if database is running
2. Verify database credentials in wp-config.php
3. Check uPress dashboard for database status

### File Permission Issues:
1. uPress usually handles permissions automatically
2. If issues persist, contact uPress support
3. Verify file uploads work in WordPress admin

### Plugin Conflicts:
1. Deactivate all plugins
2. Activate one by one to identify conflicts
3. Some plugins may not be compatible with uPress

## uPress Support Resources

### Contact uPress:
- **Phone Support:** Available in Hebrew
- **Email Support:** Usually responds within 24 hours
- **Live Chat:** Available during business hours
- **Knowledge Base:** Comprehensive guides in Hebrew

### Emergency Contacts:
- Keep uPress support number handy
- Have backup contact for urgent issues

## Step 13: Go Live Checklist

### Final Pre-Launch:
```
✅ All pages load correctly
✅ Contact forms work and send emails
✅ WhatsApp widget functions properly
✅ Interactive demo works on mobile and desktop
✅ Video testimonials play correctly
✅ SSL certificate is active
✅ Site speed is acceptable
✅ No broken links or images
✅ SEO meta tags are present
✅ Analytics tracking is set up
✅ Backup system is configured
```

### Launch Day:
1. **Clear all caches** (uPress + browser)
2. **Test from multiple devices** and browsers  
3. **Monitor error logs** for any issues
4. **Check contact form submissions**
5. **Verify analytics are working**

## Post-Launch Monitoring

### Week 1 Tasks:
- Monitor site performance daily
- Check for any error reports
- Verify backup completion
- Monitor contact form submissions
- Check Google Search Console for crawl errors

### Ongoing Maintenance:
- Monthly performance reviews
- Regular plugin updates (managed by uPress)
- Content updates as needed
- Backup verification
- Security monitoring

---

## Success! 🚀

Your DocsFlow website is now live on docsflow.co.il with all Phase 2 features:
- Professional EasyHost-style design
- Interactive demo system  
- WhatsApp Business integration
- Video testimonials
- Social proof notifications
- Mobile-optimized experience

The website is ready to help Israeli insurance agents save 3 hours per day with digital document management!