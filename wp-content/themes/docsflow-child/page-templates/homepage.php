<?php
/**
 * Template Name: Homepage
 * 
 * @package DocsFlow Child
 */

get_header(); ?>

<div class="homepage-wrapper">
    
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">מערכת ניהול מסמכים מתקדמת לסוכני ביטוח בישראל</h1>
                <p class="hero-subtitle">חסכו 70% מהזמן בניהול מסמכים וחתימות דיגיטליות עם טכנולוגיה ישראלית מתקדמת</p>
                <div class="hero-buttons">
                    <a href="#demo" class="btn-primary btn-large">בקש הדגמה חינם</a>
                    <a href="#features" class="btn-secondary btn-large">גלה את היכולות</a>
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
            <h2 class="section-title text-center">למה סוכני ביטוח בוחרים ב-DocsFlow?</h2>
            <div class="grid-3">
                <div class="feature-card">
                    <div class="feature-card-icon">
                        <span class="dashicons dashicons-clock"></span>
                    </div>
                    <h3 class="feature-card-title">חיסכון של 70% בזמן</h3>
                    <p class="feature-card-description">אוטומציה מלאה של תהליכי עבודה, חתימות דיגיטליות ומסמכים - כל מה שצריך במקום אחד</p>
                </div>
                <div class="feature-card">
                    <div class="feature-card-icon">
                        <span class="dashicons dashicons-shield-alt"></span>
                    </div>
                    <h3 class="feature-card-title">אבטחה ברמה הגבוהה ביותר</h3>
                    <p class="feature-card-description">עמידה בתקני אבטחת מידע מחמירים, הצפנה מלאה וגיבויים אוטומטיים</p>
                </div>
                <div class="feature-card">
                    <div class="feature-card-icon">
                        <span class="dashicons dashicons-phone"></span>
                    </div>
                    <h3 class="feature-card-title">תמיכה בעברית 24/7</h3>
                    <p class="feature-card-description">צוות תמיכה ישראלי מקצועי זמין בכל שעה לכל שאלה או בעיה</p>
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
                    <div class="feature-card-icon">
                        <span class="dashicons dashicons-edit"></span>
                    </div>
                    <h3 class="feature-card-title">חתימה דיגיטלית</h3>
                    <p class="feature-card-description">חתימה דיגיטלית מאושרת על כל סוגי המסמכים - פוליסות, הצעות, טפסים ועוד</p>
                    <a href="/solutions/digital-signature" class="btn-primary btn-small">למידע נוסף</a>
                </div>
                <div class="feature-card">
                    <div class="feature-card-icon">
                        <span class="dashicons dashicons-portfolio"></span>
                    </div>
                    <h3 class="feature-card-title">ניהול מסמכים חכם</h3>
                    <p class="feature-card-description">ארגון אוטומטי של כל המסמכים, חיפוש מהיר ושיתוף קל עם לקוחות</p>
                    <a href="/solutions/document-management" class="btn-primary btn-small">למידע נוסף</a>
                </div>
                <div class="feature-card">
                    <div class="feature-card-icon">
                        <span class="dashicons dashicons-admin-generic"></span>
                    </div>
                    <h3 class="feature-card-title">אוטומציה של תהליכים</h3>
                    <p class="feature-card-description">הגדרת תהליכי עבודה אוטומטיים, תזכורות, משימות והתראות</p>
                    <a href="/solutions/process-automation" class="btn-primary btn-small">למידע נוסף</a>
                </div>
            </div>
        </div>
    </section>

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

    <!-- Testimonials Section -->
    <section class="section testimonials-section">
        <div class="container">
            <h2 class="section-title text-center">מה אומרים עלינו סוכני הביטוח</h2>
            <div class="grid-3">
                <div class="testimonial-card">
                    <p class="testimonial-content">"DocsFlow שינתה לי את החיים. מה שלקח לי שעות עכשיו לוקח דקות. ממליץ בחום!"</p>
                    <div class="testimonial-author">משה כהן</div>
                    <div class="testimonial-company">סוכנות ביטוח כהן ושות'</div>
                </div>
                <div class="testimonial-card">
                    <p class="testimonial-content">"התמיכה המעולה והמערכת הידידותית הפכו את העבודה שלי ליעילה ומקצועית יותר"</p>
                    <div class="testimonial-author">שרה לוי</div>
                    <div class="testimonial-company">לוי ביטוחים</div>
                </div>
                <div class="testimonial-card">
                    <p class="testimonial-content">"האינטגרציה עם WhatsApp מאפשרת לי לעבוד מול לקוחות בצורה מהירה ונוחה"</p>
                    <div class="testimonial-author">דוד ישראלי</div>
                    <div class="testimonial-company">ישראלי סוכנות לביטוח</div>
                </div>
            </div>
        </div>
    </section>

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