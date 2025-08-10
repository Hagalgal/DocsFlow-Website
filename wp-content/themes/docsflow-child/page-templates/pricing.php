<?php
/**
 * Template Name: Pricing Page
 * 
 * @package DocsFlow Child
 */

get_header(); ?>

<div class="pricing-page-wrapper">
    
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1 class="page-title">תוכניות ומחירים</h1>
            <p class="page-subtitle">בחרו את התוכנית המתאימה לכם - ללא התחייבות, ביטול בכל עת</p>
        </div>
    </section>

    <!-- Pricing Cards Section -->
    <section class="section pricing-section">
        <div class="container">
            <div class="grid-3 pricing-grid">
                
                <!-- Basic Plan -->
                <div class="pricing-card">
                    <h3 class="pricing-title">בסיסי</h3>
                    <div class="pricing-price">
                        <span class="currency">₪</span>
                        <span class="amount">199</span>
                        <span class="period">/חודש</span>
                    </div>
                    <p class="pricing-description">מושלם לסוכנים עצמאיים וסוכנויות קטנות</p>
                    <ul class="pricing-features">
                        <li>עד 100 מסמכים בחודש</li>
                        <li>חתימה דיגיטלית בסיסית</li>
                        <li>אחסון 10GB</li>
                        <li>משתמש יחיד</li>
                        <li>תמיכה בדוא"ל</li>
                        <li>אינטגרציית WhatsApp</li>
                    </ul>
                    <a href="/contact?plan=basic" class="btn-secondary btn-large">התחל ניסיון חינם</a>
                </div>

                <!-- Professional Plan -->
                <div class="pricing-card featured">
                    <div class="pricing-badge">הכי פופולרי</div>
                    <h3 class="pricing-title">מקצועי</h3>
                    <div class="pricing-price">
                        <span class="currency">₪</span>
                        <span class="amount">399</span>
                        <span class="period">/חודש</span>
                    </div>
                    <p class="pricing-description">האופציה המומלצת לסוכנויות בינוניות</p>
                    <ul class="pricing-features">
                        <li>עד 500 מסמכים בחודש</li>
                        <li>חתימה דיגיטלית מתקדמת</li>
                        <li>אחסון 50GB</li>
                        <li>עד 5 משתמשים</li>
                        <li>תמיכה טלפונית</li>
                        <li>אינטגרציות מלאות</li>
                        <li>אוטומציה בסיסית</li>
                        <li>דוחות וסטטיסטיקות</li>
                    </ul>
                    <a href="/contact?plan=professional" class="btn-primary btn-large">התחל ניסיון חינם</a>
                </div>

                <!-- Enterprise Plan -->
                <div class="pricing-card">
                    <h3 class="pricing-title">ארגוני</h3>
                    <div class="pricing-price">
                        <span class="custom-price">מחיר מותאם</span>
                    </div>
                    <p class="pricing-description">פתרון מותאם אישית לסוכנויות גדולות</p>
                    <ul class="pricing-features">
                        <li>מסמכים ללא הגבלה</li>
                        <li>כל התכונות המתקדמות</li>
                        <li>אחסון ללא הגבלה</li>
                        <li>משתמשים ללא הגבלה</li>
                        <li>תמיכת פרימיום 24/7</li>
                        <li>אינטגרציות מותאמות</li>
                        <li>אוטומציה מתקדמת</li>
                        <li>הדרכה אישית</li>
                        <li>API מלא</li>
                    </ul>
                    <a href="/contact?plan=enterprise" class="btn-secondary btn-large">צור קשר למכירות</a>
                </div>

            </div>
        </div>
    </section>

    <!-- Features Comparison Section -->
    <section class="section comparison-section">
        <div class="container">
            <h2 class="section-title text-center">השוואת תכונות</h2>
            <div class="comparison-table">
                <table>
                    <thead>
                        <tr>
                            <th>תכונה</th>
                            <th>בסיסי</th>
                            <th>מקצועי</th>
                            <th>ארגוני</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>חתימה דיגיטלית</td>
                            <td><span class="check">✓</span></td>
                            <td><span class="check">✓</span></td>
                            <td><span class="check">✓</span></td>
                        </tr>
                        <tr>
                            <td>ניהול מסמכים</td>
                            <td><span class="check">✓</span></td>
                            <td><span class="check">✓</span></td>
                            <td><span class="check">✓</span></td>
                        </tr>
                        <tr>
                            <td>אינטגרציית WhatsApp</td>
                            <td><span class="check">✓</span></td>
                            <td><span class="check">✓</span></td>
                            <td><span class="check">✓</span></td>
                        </tr>
                        <tr>
                            <td>אוטומציה</td>
                            <td><span class="cross">-</span></td>
                            <td><span class="check">✓</span></td>
                            <td><span class="check">✓</span></td>
                        </tr>
                        <tr>
                            <td>דוחות מתקדמים</td>
                            <td><span class="cross">-</span></td>
                            <td><span class="check">✓</span></td>
                            <td><span class="check">✓</span></td>
                        </tr>
                        <tr>
                            <td>API גישה</td>
                            <td><span class="cross">-</span></td>
                            <td><span class="cross">-</span></td>
                            <td><span class="check">✓</span></td>
                        </tr>
                        <tr>
                            <td>הדרכה אישית</td>
                            <td><span class="cross">-</span></td>
                            <td><span class="cross">-</span></td>
                            <td><span class="check">✓</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section faq-section">
        <div class="container">
            <h2 class="section-title text-center">שאלות נפוצות</h2>
            <div class="faq-grid">
                <div class="faq-item">
                    <h4 class="faq-question">האם יש תקופת ניסיון?</h4>
                    <p class="faq-answer">כן! אנחנו מציעים 14 ימי ניסיון חינם לכל התוכניות, ללא צורך בכרטיס אשראי.</p>
                </div>
                <div class="faq-item">
                    <h4 class="faq-question">האם אפשר לבטל בכל עת?</h4>
                    <p class="faq-answer">בהחלט. אין התחייבות לתקופה מינימלית וניתן לבטל את המנוי בכל עת.</p>
                </div>
                <div class="faq-item">
                    <h4 class="faq-question">האם המחירים כוללים מע"מ?</h4>
                    <p class="faq-answer">לא, המחירים המוצגים הם לפני מע"מ. מע"מ יתווסף בהתאם לחוק.</p>
                </div>
                <div class="faq-item">
                    <h4 class="faq-question">האם יש הנחה לתשלום שנתי?</h4>
                    <p class="faq-answer">כן! בתשלום שנתי מראש תקבלו 20% הנחה על כל התוכניות.</p>
                </div>
                <div class="faq-item">
                    <h4 class="faq-question">מה כולל השירות והתמיכה?</h4>
                    <p class="faq-answer">כל התוכניות כוללות עדכונים שוטפים, גיבויים אוטומטיים ותמיכה טכנית בעברית.</p>
                </div>
                <div class="faq-item">
                    <h4 class="faq-question">האם אפשר לשדרג תוכנית?</h4>
                    <p class="faq-answer">כמובן! ניתן לשדרג או לשנמך תוכנית בכל עת, והשינוי ייכנס לתוקף מיידית.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section cta-section">
        <div class="container text-center">
            <h2 class="section-title">מוכנים להתחיל?</h2>
            <p class="cta-subtitle">הצטרפו לסוכני הביטוח המובילים בישראל</p>
            <div class="cta-buttons">
                <a href="/contact" class="btn-primary btn-large">התחל ניסיון חינם</a>
                <a href="/contact" class="btn-secondary btn-large">דבר עם נציג</a>
            </div>
        </div>
    </section>

</div>

<style>
/* Pricing Page Specific Styles */
.pricing-page-wrapper {
    padding-top: var(--space-8);
}

.page-header {
    text-align: center;
    padding: var(--space-16) 0;
    background: linear-gradient(135deg, var(--primary-blue-ultra-light) 0%, var(--white) 100%);
}

.page-title {
    font-size: var(--text-5xl);
    color: var(--gray-900);
    margin-bottom: var(--space-4);
}

.page-subtitle {
    font-size: var(--text-xl);
    color: var(--gray-600);
}

.pricing-grid {
    align-items: stretch;
}

.pricing-card .currency {
    font-size: var(--text-2xl);
    vertical-align: top;
}

.pricing-card .amount {
    font-size: var(--text-5xl);
}

.pricing-card .period {
    font-size: var(--text-base);
    color: var(--gray-600);
}

.pricing-card .custom-price {
    font-size: var(--text-2xl);
    color: var(--gray-700);
}

.pricing-description {
    color: var(--gray-600);
    margin-bottom: var(--space-6);
}

/* Comparison Table */
.comparison-section {
    background: var(--gray-50);
}

.comparison-table {
    overflow-x: auto;
    margin-top: var(--space-8);
}

.comparison-table table {
    width: 100%;
    border-collapse: collapse;
    background: var(--white);
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: var(--shadow-md);
}

.comparison-table th {
    background: var(--primary-blue);
    color: var(--white);
    padding: var(--space-4);
    text-align: center;
    font-weight: 600;
}

.comparison-table td {
    padding: var(--space-4);
    text-align: center;
    border-bottom: 1px solid var(--gray-200);
}

.comparison-table tr:last-child td {
    border-bottom: none;
}

.comparison-table td:first-child {
    text-align: right;
    font-weight: 600;
}

.check {
    color: var(--success-green);
    font-size: var(--text-xl);
}

.cross {
    color: var(--gray-400);
    font-size: var(--text-xl);
}

/* FAQ Section */
.faq-section {
    background: var(--white);
}

.faq-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--space-8);
    margin-top: var(--space-8);
}

.faq-item {
    padding: var(--space-6);
    background: var(--gray-50);
    border-radius: var(--radius-lg);
}

.faq-question {
    font-size: var(--text-lg);
    font-weight: 600;
    margin-bottom: var(--space-3);
    color: var(--gray-900);
}

.faq-answer {
    color: var(--gray-700);
    line-height: 1.6;
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .page-title {
        font-size: var(--text-3xl);
    }
    
    .pricing-grid {
        grid-template-columns: 1fr;
    }
    
    .comparison-table {
        font-size: var(--text-sm);
    }
    
    .faq-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<?php get_footer(); ?>