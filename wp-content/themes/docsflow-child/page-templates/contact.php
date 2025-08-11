<?php
/**
 * Template Name: Contact Page
 * 
 * @package DocsFlow Child
 */

get_header(); ?>

<div class="contact-page-wrapper">
    
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1 class="page-title">צור קשר</h1>
            <p class="page-subtitle">נשמח לענות על כל שאלה ולהדגים לכם את המערכת</p>
        </div>
    </section>

    <!-- Contact Content Section -->
    <section class="section contact-section">
        <div class="container">
            <div class="contact-grid">
                
                <!-- Contact Form -->
                <div class="contact-form-wrapper">
                    <h2 class="form-title">בקש הדגמה חינם</h2>
                    <p class="form-subtitle">מלאו את הפרטים ונחזור אליכם תוך 24 שעות</p>
                    
                    <?php 
                    // Check if Contact Form 7 is active and display form
                    if (shortcode_exists('contact-form-7')) {
                        // You'll need to replace this ID with your actual Contact Form 7 form ID
                        echo do_shortcode('[contact-form-7 id="1" title="Contact form 1"]');
                    } else {
                        // Fallback HTML form if Contact Form 7 is not available
                        ?>
                        <form class="contact-form" action="/wp-admin/admin-post.php" method="post">
                            <input type="hidden" name="action" value="docsflow_contact_form">
                            
                            <div class="form-group">
                                <label for="fullname" class="form-label">שם מלא *</label>
                                <input type="text" id="fullname" name="fullname" class="form-input" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="company" class="form-label">שם החברה/סוכנות</label>
                                <input type="text" id="company" name="company" class="form-input">
                            </div>
                            
                            <div class="form-group">
                                <label for="email" class="form-label">דוא"ל *</label>
                                <input type="email" id="email" name="email" class="form-input" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="phone" class="form-label">טלפון *</label>
                                <input type="tel" id="phone" name="phone" class="form-input" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="plan" class="form-label">באיזו תוכנית אתם מעוניינים?</label>
                                <select id="plan" name="plan" class="form-input">
                                    <option value="">בחר תוכנית</option>
                                    <option value="basic">בסיסי - ₪199/חודש</option>
                                    <option value="professional">מקצועי - ₪399/חודש</option>
                                    <option value="enterprise">ארגוני - מחיר מותאם</option>
                                    <option value="not-sure">עדיין לא החלטתי</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="employees" class="form-label">כמה עובדים בסוכנות?</label>
                                <select id="employees" name="employees" class="form-input">
                                    <option value="">בחר</option>
                                    <option value="1">1 (עצמאי)</option>
                                    <option value="2-5">2-5</option>
                                    <option value="6-10">6-10</option>
                                    <option value="11-20">11-20</option>
                                    <option value="20+">20+</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="message" class="form-label">הודעה</label>
                                <textarea id="message" name="message" class="form-input" rows="4" placeholder="ספרו לנו קצת על הצרכים שלכם..."></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="newsletter" value="yes">
                                    אני מעוניין לקבל עדכונים וטיפים לסוכני ביטוח
                                </label>
                            </div>
                            
                            <button type="submit" class="btn-primary btn-large">שלח בקשה</button>
                        </form>
                        <?php
                    }
                    ?>
                </div>
                
                <!-- Contact Info -->
                <div class="contact-info-wrapper">
                    <h2 class="info-title">פרטי התקשרות</h2>
                    
                    
                    <div class="contact-info-item">
                        <div class="info-icon">
                            <span class="dashicons dashicons-email"></span>
                        </div>
                        <div class="info-content">
                            <h4>דוא"ל</h4>
                            <p><a href="mailto:info@docsflow.co.il">info@docsflow.co.il</a></p>
                            <p><a href="mailto:support@docsflow.co.il">support@docsflow.co.il</a></p>
                        </div>
                    </div>
                    
                    
                    <div class="contact-info-item">
                        <div class="info-icon">
                            <span class="dashicons dashicons-format-chat"></span>
                        </div>
                        <div class="info-content">
                            <h4>WhatsApp Business</h4>
                            <p><a href="https://wa.me/9720502417728" target="_blank">050-2417728</a></p>
                            <p>תמיכה מהירה בוואטסאפ</p>
                        </div>
                    </div>
                    
                    <!-- Support Hours -->
                    <div class="support-hours">
                        <h3>שעות פעילות</h3>
                        <ul>
                            <li><strong>ראשון-חמישי:</strong> 09:00-18:00</li>
                            <li><strong>שישי:</strong> 09:00-13:00</li>
                            <li><strong>שבת:</strong> סגור</li>
                        </ul>
                        <p class="emergency-note">תמיכת חירום 24/7 ללקוחות תוכנית ארגונית</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- FAQ Quick Links -->
    <section class="section faq-links-section">
        <div class="container">
            <h2 class="section-title text-center">אולי זה יעזור?</h2>
            <div class="grid-3">
                <a href="#" class="faq-link-card">
                    <span class="dashicons dashicons-book"></span>
                    <h4>מדריך למשתמש</h4>
                    <p>מדריכים וסרטוני הדרכה</p>
                </a>
                <a href="/pricing" class="faq-link-card">
                    <span class="dashicons dashicons-tag"></span>
                    <h4>תוכניות ומחירים</h4>
                    <p>השוואת תוכניות ומחירים</p>
                </a>
                <a href="#" class="faq-link-card">
                    <span class="dashicons dashicons-admin-tools"></span>
                    <h4>תמיכה טכנית</h4>
                    <p>פתרון בעיות ותמיכה</p>
                </a>
            </div>
        </div>
    </section>

</div>

<style>
/* Contact Page Specific Styles */
.contact-page-wrapper {
    padding-top: var(--space-8);
}

.contact-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: var(--space-16);
    align-items: start;
}

.contact-form-wrapper {
    background: var(--white);
    padding: var(--space-8);
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-md);
}

.form-title {
    font-size: var(--text-3xl);
    margin-bottom: var(--space-2);
    color: var(--gray-900);
}

.form-subtitle {
    color: var(--gray-600);
    margin-bottom: var(--space-8);
}

.contact-form {
    max-width: 100%;
}

.checkbox-label {
    display: flex;
    align-items: center;
    gap: var(--space-2);
    font-size: var(--text-sm);
    color: var(--gray-700);
}

.checkbox-label input[type="checkbox"] {
    width: auto;
    margin: 0;
}

/* Contact Info Styles */
.contact-info-wrapper {
    background: var(--gray-50);
    padding: var(--space-8);
    border-radius: var(--radius-lg);
}

.info-title {
    font-size: var(--text-2xl);
    margin-bottom: var(--space-6);
    color: var(--gray-900);
}

.contact-info-item {
    display: flex;
    gap: var(--space-4);
    margin-bottom: var(--space-6);
}

.info-icon {
    width: 48px;
    height: 48px;
    background: var(--primary-blue-ultra-light);
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.info-icon .dashicons {
    font-size: 24px;
    color: var(--primary-blue);
}

.info-content h4 {
    font-size: var(--text-lg);
    margin-bottom: var(--space-1);
    color: var(--gray-900);
}

.info-content p {
    color: var(--gray-600);
    margin: 0;
    line-height: 1.5;
}

.info-content a {
    color: var(--primary-blue);
    text-decoration: none;
}

.info-content a:hover {
    text-decoration: underline;
}

/* Support Hours */
.support-hours {
    margin-top: var(--space-8);
    padding-top: var(--space-6);
    border-top: 2px solid var(--gray-200);
}

.support-hours h3 {
    font-size: var(--text-xl);
    margin-bottom: var(--space-4);
    color: var(--gray-900);
}

.support-hours ul {
    list-style: none;
    padding: 0;
    margin-bottom: var(--space-4);
}

.support-hours li {
    padding: var(--space-2) 0;
    color: var(--gray-700);
}

.emergency-note {
    font-size: var(--text-sm);
    color: var(--primary-blue);
    font-weight: 600;
}

/* FAQ Links Section */
.faq-links-section {
    background: var(--gray-50);
}

.faq-link-card {
    display: block;
    background: var(--white);
    padding: var(--space-6);
    border-radius: var(--radius-lg);
    text-align: center;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: var(--shadow-sm);
}

.faq-link-card:hover {
    transform: translateY(-4px);
    box-shadow: var(--shadow-lg);
}

.faq-link-card .dashicons {
    font-size: 48px;
    color: var(--primary-blue);
    margin-bottom: var(--space-4);
}

.faq-link-card h4 {
    font-size: var(--text-xl);
    color: var(--gray-900);
    margin-bottom: var(--space-2);
}

.faq-link-card p {
    color: var(--gray-600);
    margin: 0;
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .contact-grid {
        grid-template-columns: 1fr;
        gap: var(--space-8);
    }
    
    .contact-form-wrapper,
    .contact-info-wrapper {
        padding: var(--space-6);
    }
}
</style>

<?php get_footer(); ?>