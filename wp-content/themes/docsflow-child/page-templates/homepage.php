<?php
/**
 * Template Name: Homepage
 * 
 * @package DocsFlow Child
 */

get_header(); ?>

<div class="homepage-wrapper">
    
    <!-- Hero Section with SEO-optimized content -->
    <section class="hero-section" itemscope itemtype="https://schema.org/WebPageElement">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title" itemprop="headline">
                    חסכו <span class="hero-highlight">3 שעות ביום</span><br>
                    עם פלטפורמת DocsFlow לסוכני ביטוח
                </h1>
                <p class="hero-subtitle" itemprop="description">
                    <strong>המערכת היחידה בישראל</strong> שמאחדת חתימה דיגיטלית, ניהול מסמכים ואוטומציה עם WhatsApp מובנה. 
                    <span class="hero-benefit">מעל 500 סוכני ביטוח כבר חוסכים זמן וכסף איתנו</span>
                </p>
                <div class="hero-buttons">
                    <a href="#demo" class="btn-primary btn-large cta-enhanced">
                        <span class="cta-main">קבל הדגמה אישית</span>
                        <span class="cta-sub">15 דקות, התחל לחסוך היום</span>
                    </a>
                    <a href="#features" class="btn-secondary btn-large">
                        <span class="cta-main">צפה בדמו מהיר</span>
                        <span class="cta-sub">2 דקות בלבד</span>
                    </a>
                </div>
                <div class="hero-trust-indicators">
                    <div class="trust-item">
                        <strong>500+</strong> סוכני ביטוח פעילים
                    </div>
                    <div class="trust-item">
                        <strong>ISO 27001</strong> מאושר אבטחה
                    </div>
                    <div class="trust-item">
                        <strong>99.9%</strong> זמינות מובטחת
                    </div>
                </div>
            </div>
            <div class="hero-graphics">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hero-placeholder.svg" alt="DocsFlow Dashboard" />
            </div>
        </div>
    </section>

    <!-- Key Benefits Section -->
    <section class="section benefits-section">
        <div class="container">
            <h2 class="section-title text-center">הפרודוקטיביות שלכם עולה פי 3 עם DocsFlow</h2>
            <div class="grid-3">
                <div class="feature-card">
                    <div class="custom-icon-wrapper icon-animate-pulse">
                        <svg class="custom-icon">
                            <use href="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/custom-icons.svg#icon-time"></use>
                        </svg>
                    </div>
                    <h3 class="feature-card-title">3 שעות פחות עבודה ביום</h3>
                    <p class="feature-card-description">מהר שלקח לכם שעות עכשיו לוקח דקות. לקוחות מקבלים מסמכים תוך 5 דקות במקום 2 שעות</p>
                </div>
                <div class="feature-card">
                    <div class="custom-icon-wrapper">
                        <svg class="custom-icon">
                            <use href="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/custom-icons.svg#icon-security"></use>
                        </svg>
                    </div>
                    <h3 class="feature-card-title">אפס חשש מאבדן מסמכים</h3>
                    <p class="feature-card-description">כל המסמכים מוגבים אוטומטית ומוגנים בהצפנה צבאית. לא תאבדו עוד מסמך חשוב</p>
                </div>
                <div class="feature-card">
                    <div class="custom-icon-wrapper icon-animate-bounce">
                        <svg class="custom-icon">
                            <use href="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/custom-icons.svg#icon-support"></use>
                        </svg>
                    </div>
                    <h3 class="feature-card-title">תמיכה שפותרת בעיות מיד</h3>
                    <p class="feature-card-description">צוות ישראלי שמכיר את השוק שלכם ועונה תוך דקות, לא שעות</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Features Section -->
    <section class="section features-section" id="features">
        <div class="container">
            <h2 class="section-title text-center">הפתרונות המובילים שלנו</h2>
            <div class="grid-3">
                <div class="feature-card">
                    <div class="custom-icon-wrapper">
                        <svg class="custom-icon">
                            <use href="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/custom-icons.svg#icon-signature"></use>
                        </svg>
                    </div>
                    <h3 class="feature-card-title">חתימה דיגיטלית</h3>
                    <p class="feature-card-description">חתימה דיגיטלית מאושרת על כל סוגי המסמכים - פוליסות, הצעות, טפסים ועוד</p>
                    <a href="/solutions/digital-signature" class="btn-primary btn-small">למידע נוסף</a>
                </div>
                <div class="feature-card">
                    <div class="custom-icon-wrapper icon-animate-pulse">
                        <svg class="custom-icon">
                            <use href="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/custom-icons.svg#icon-documents"></use>
                        </svg>
                    </div>
                    <h3 class="feature-card-title">ניהול מסמכים חכם</h3>
                    <p class="feature-card-description">ארגון אוטומטי של כל המסמכים, חיפוש מהיר ושיתוף קל עם לקוחות</p>
                    <a href="/solutions/document-management" class="btn-primary btn-small">למידע נוסף</a>
                </div>
                <div class="feature-card">
                    <div class="custom-icon-wrapper icon-animate-rotate">
                        <svg class="custom-icon">
                            <use href="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/custom-icons.svg#icon-automation"></use>
                        </svg>
                    </div>
                    <h3 class="feature-card-title">אוטומציה של תהליכים</h3>
                    <p class="feature-card-description">הגדרת תהליכי עבודה אוטומטיים, תזכורות, משימות והתראות</p>
                    <a href="/solutions/process-automation" class="btn-primary btn-small">למידע נוסף</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Demo Section -->
    <?php include get_stylesheet_directory() . '/partials/demo-section.php'; ?>

    <!-- Integration Section -->
    <section class="section integration-section">
        <div class="container">
            <h2 class="section-title text-center">אינטגרציה עם הכלים שאתם כבר משתמשים</h2>
            <div class="integration-logos">
                <div class="integration-item">WhatsApp Business</div>
                <div class="integration-item">Gmail</div>
                <div class="integration-item">Outlook</div>
                <div class="integration-item">Google Drive</div>
                <div class="integration-item">Dropbox</div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="section stats-section">
        <div class="container">
            <div class="grid-4">
                <div class="stat-item">
                    <div class="stat-number">500+</div>
                    <div class="stat-label">סוכני ביטוח פעילים</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">1M+</div>
                    <div class="stat-label">מסמכים מנוהלים</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">70%</div>
                    <div class="stat-label">חיסכון בזמן</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">99.9%</div>
                    <div class="stat-label">זמינות המערכת</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Testimonials Section -->
    <section class="section video-testimonials-section">
        <div class="container">
            <h2 class="section-title text-center">סוכני ביטוח מספרים על החוויה שלהם</h2>
            <p class="section-subtitle text-center">שמעו ישירות מהלקוחות שלנו איך DocsFlow שינתה את השגרה היומית שלהם</p>
            
            <div class="video-testimonials-grid">
                <div class="video-testimonial-card" data-video="demo1">
                    <div class="video-thumbnail">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/testimonial-moshe.jpg" alt="משה כהן - סוכן ביטוח" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                        <div class="placeholder-avatar" style="display: none;">👨‍💼</div>
                        <div class="play-button">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </div>
                        <div class="video-duration">2:15</div>
                    </div>
                    <div class="testimonial-info">
                        <h3 class="testimonial-name">משה כהן</h3>
                        <p class="testimonial-title">סוכן ביטוח בכיר</p>
                        <p class="testimonial-company">כהן ושות' ביטוחים</p>
                        <div class="testimonial-preview">"DocsFlow חסכה לי 3 שעות ביום וגרמה ללקוחות שלי להיות מאושרים יותר"</div>
                    </div>
                </div>
                
                <div class="video-testimonial-card" data-video="demo2">
                    <div class="video-thumbnail">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/testimonial-sara.jpg" alt="שרה לוי - סוכנת ביטוח" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                        <div class="placeholder-avatar" style="display: none;">👩‍💼</div>
                        <div class="play-button">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </div>
                        <div class="video-duration">1:45</div>
                    </div>
                    <div class="testimonial-info">
                        <h3 class="testimonial-name">שרה לוי</h3>
                        <p class="testimonial-title">מנהלת סוכנות</p>
                        <p class="testimonial-company">לוי ביטוחים בע"מ</p>
                        <div class="testimonial-preview">"המעבר למערכת היה קל והתמיכה זמינה תמיד"</div>
                    </div>
                </div>
                
                <div class="video-testimonial-card" data-video="demo3">
                    <div class="video-thumbnail">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/testimonial-david.jpg" alt="דוד ישראלי - סוכן ביטוח" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                        <div class="placeholder-avatar" style="display: none;">👨‍💻</div>
                        <div class="play-button">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </div>
                        <div class="video-duration">3:20</div>
                    </div>
                    <div class="testimonial-info">
                        <h3 class="testimonial-name">דוד ישראלי</h3>
                        <p class="testimonial-title">סוכן ביטוח עצמאי</p>
                        <p class="testimonial-company">ישראלי - ייעוץ וביטוח</p>
                        <div class="testimonial-preview">"האינטגרציה עם WhatsApp פשוט מהפכה בתקשורת עם הלקוחות"</div>
                    </div>
                </div>
            </div>
            
            <div class="testimonials-stats">
                <div class="stat-item">
                    <div class="stat-number">4.9/5</div>
                    <div class="stat-label">דירוג ממוצע</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">98%</div>
                    <div class="stat-label">ממליצים לחברים</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">500+</div>
                    <div class="stat-label">לקוחות מרוצים</div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Video Modal -->
    <div id="videoModal" class="video-modal" style="display: none;">
        <div class="video-modal-overlay"></div>
        <div class="video-modal-content">
            <button class="video-modal-close">&times;</button>
            <div class="video-container">
                <div class="video-placeholder">
                    <div class="demo-video-content" id="demoVideo1" style="display: none;">
                        <div class="demo-video-header">
                            <h3>משה כהן - סוכן ביטוח בכיר</h3>
                            <p>כהן ושות' ביטוחים</p>
                        </div>
                        <div class="demo-video-body">
                            <p><strong>אני עובד בתחום הביטוח כבר 15 שנה</strong>, ובמשך כל השנים האלה חיפשתי דרך לייעל את התהליכים.</p>
                            <p>עם DocsFlow, מה שלקח לי בעבר <span class="highlight">3-4 שעות ליום</span> עכשיו לוקח רק 30 דקות.</p>
                            <p>הלקוחות מקבלים את המסמכים <span class="highlight">תוך דקות</span> במקום לחכות ימים שלמים.</p>
                            <p><strong>התוצאה?</strong> יותר לקוחות מרוצים, יותר זמן למכירות, ויותר רווחיות לעסק שלי.</p>
                            <p class="testimonial-cta">אני ממליץ על DocsFlow לכל סוכן ביטוח שרוצה להתקדם לעידן הדיגיטלי.</p>
                        </div>
                    </div>
                    
                    <div class="demo-video-content" id="demoVideo2" style="display: none;">
                        <div class="demo-video-header">
                            <h3>שרה לוי - מנהלת סוכנות</h3>
                            <p>לוי ביטוחים בע"מ</p>
                        </div>
                        <div class="demo-video-body">
                            <p><strong>כשהחלטתי לעבור למערכת דיגיטלית</strong>, הכי חששתי מהמעבר והלימוד.</p>
                            <p>הצוות של DocsFlow <span class="highlight">ליווה אותי בכל שלב</span> - ההדרכה, המעבר, וגם התמיכה השוטפת.</p>
                            <p>היום, כל הצוות שלי עובד עם המערכת וכולם <span class="highlight">מרוצים מהשינוי</span>.</p>
                            <p><strong>הדבר הכי מרשים?</strong> שהמערכת פועלת גם בעברית וגם מתאימה לשוק הישראלי.</p>
                            <p class="testimonial-cta">ממליצה בחום לכל סוכנות שרוצה להיות מקצועית ויעילה יותר.</p>
                        </div>
                    </div>
                    
                    <div class="demo-video-content" id="demoVideo3" style="display: none;">
                        <div class="demo-video-header">
                            <h3>דוד ישראלי - סוכן ביטוח עצמאי</h3>
                            <p>ישראלי - ייעוץ וביטוח</p>
                        </div>
                        <div class="demo-video-body">
                            <p><strong>בתור סוכן עצמאי</strong>, אני צריך לעבוד חכם ולא רק קשה.</p>
                            <p>האינטגרציה עם WhatsApp של DocsFlow <span class="highlight">שינתה לי את המשחק</span> - לקוחות חותמים מהנייד!</p>
                            <p>במקום להדפיס, לסרוק, לשלוח במייל ולחכות - <span class="highlight">הכל קורה בזמן אמת</span>.</p>
                            <p><strong>התוצאה המרשימה ביותר?</strong> עליתי ב-40% במכירות כי אני יכול לטפל ביותר לקוחות.</p>
                            <p class="testimonial-cta">DocsFlow זה לא רק כלי עבודה, זה שדרוג לכל העסק.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <section class="section cta-section" id="demo">
        <div class="container text-center">
            <h2 class="section-title">מוכנים להתחיל לחסוך זמן?</h2>
            <p class="cta-subtitle">הצטרפו למאות סוכני ביטוח שכבר עובדים חכם יותר עם DocsFlow</p>
            <div class="cta-buttons">
                <a href="/contact" class="btn-primary btn-large">בקש הדגמה חינם</a>
                <a href="/pricing" class="btn-secondary btn-large">ראה מחירים</a>
            </div>
        </div>
    </section>

</div>

<style>
/* Homepage Specific Styles */
.homepage-wrapper {
    overflow-x: hidden;
}

/* Enhanced hero buttons */
.hero-buttons {
    display: flex;
    gap: var(--space-4);
    justify-content: flex-start;
    margin-top: var(--space-8);
    flex-wrap: wrap;
}

.hero-buttons a {
    white-space: nowrap;
}

.hero-graphics {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}

.hero-graphics img {
    max-width: 100%;
    height: auto;
    filter: drop-shadow(0 20px 40px rgba(0, 0, 0, 0.1));
}

.benefits-section {
    background: linear-gradient(135deg, #f8fafc 0%, #ffffff 50%, #f1f5f9 100%);
    position: relative;
}

.benefits-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="4" height="4" patternUnits="userSpaceOnUse"><circle cx="2" cy="2" r="0.5" fill="%23000" opacity="0.02"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
    pointer-events: none;
}

.integration-section {
    background: linear-gradient(135deg, #ffffff 0%, #f9fafb 100%);
    position: relative;
    padding: var(--space-24) 0;
}

.integration-section::after {
    content: '';
    position: absolute;
    bottom: -50px;
    left: 50%;
    transform: translateX(-50%);
    width: 80%;
    height: 100px;
    background: linear-gradient(135deg, rgba(103, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.1) 100%);
    border-radius: 50%;
    filter: blur(40px);
    z-index: 1;
}

.integration-logos {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: var(--space-8);
    flex-wrap: wrap;
    margin-top: var(--space-8);
}

.integration-item {
    padding: var(--space-4) var(--space-6);
    background: var(--gray-100);
    border-radius: var(--radius-md);
    font-weight: 600;
}

.stats-section {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
    color: var(--white);
    position: relative;
    overflow: hidden;
}

.stats-section::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -200px;
    width: 600px;
    height: 600px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    z-index: 1;
}

.stats-section .container {
    position: relative;
    z-index: 2;
}

.grid-4 {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: var(--space-8);
}

.stat-item {
    text-align: center;
}

.stat-number {
    font-size: var(--text-4xl);
    font-weight: 700;
    margin-bottom: var(--space-2);
}

.stat-label {
    font-size: var(--text-lg);
    opacity: 0.9;
}

.testimonials-section {
    background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    position: relative;
}

.testimonials-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(circle at 20% 20%, rgba(103, 126, 234, 0.05) 0%, transparent 50%), 
                radial-gradient(circle at 80% 80%, rgba(118, 75, 162, 0.05) 0%, transparent 50%);
    pointer-events: none;
}

.cta-section {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    position: relative;
    overflow: hidden;
}

.cta-section::before {
    content: '';
    position: absolute;
    top: -100px;
    left: -100px;
    width: 300px;
    height: 300px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    z-index: 1;
}

.cta-section .container {
    position: relative;
    z-index: 2;
}

.cta-section .section-title {
    color: white;
}

.cta-subtitle {
    color: rgba(255, 255, 255, 0.9);
}

.cta-subtitle {
    font-size: var(--text-xl);
    color: var(--gray-600);
    margin-bottom: var(--space-8);
}

.cta-buttons {
    display: flex;
    gap: var(--space-4);
    justify-content: center;
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .hero-buttons,
    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .integration-logos {
        gap: var(--space-4);
    }
    
    .integration-item {
        font-size: var(--text-sm);
        padding: var(--space-2) var(--space-4);
    }
}
</style>

<?php get_footer(); ?>