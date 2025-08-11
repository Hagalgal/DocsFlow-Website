<?php
/**
 * Template Name: Blog
 * SEO-optimized blog template for content marketing
 * 
 * @package DocsFlow Child
 */

get_header(); ?>

<article class="blog-page" itemscope itemtype="https://schema.org/Blog">
    
    <!-- Blog Header with SEO keywords -->
    <header class="blog-header">
        <div class="container">
            <h1 class="page-title" itemprop="name">מדריכים וטיפים לסוכני ביטוח</h1>
            <p class="page-subtitle" itemprop="description">
                כל מה שסוכני ביטוח צריכים לדעת על <strong>חתימה דיגיטלית</strong>, 
                <strong>ניהול מסמכים</strong>, <strong>אוטומציה</strong> ועוד
            </p>
            
            <!-- Blog Categories for SEO -->
            <nav class="blog-categories" aria-label="קטגוריות בלוג">
                <ul>
                    <li><a href="#digital-signature">חתימה דיגיטלית</a></li>
                    <li><a href="#document-management">ניהול מסמכים</a></li>
                    <li><a href="#automation">אוטומציה</a></li>
                    <li><a href="#regulation">רגולציה</a></li>
                    <li><a href="#tips">טיפים מקצועיים</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <!-- Featured Articles -->
    <section class="featured-articles section">
        <div class="container">
            <h2 class="section-title">מאמרים מומלצים</h2>
            
            <!-- Article 1: Commission Pressure Solution -->
            <article class="blog-card featured" itemscope itemtype="https://schema.org/Article">
                <div class="blog-card-content">
                    <h3 itemprop="headline">
                        <a href="#" itemprop="url">איך להפוך כל לקוח לרווחי - גם אלה שמרוויחים פחות מ-10,000₪</a>
                    </h3>
                    <meta itemprop="datePublished" content="2024-01-15">
                    <p itemprop="description">
                        מדריך מלא לסוכני ביטוח: כיצד אוטומציה ו<strong>חתימה דיגיטלית</strong> 
                        מורידות 70% מעלות השירות והופכות כל לקוח לרווחי
                    </p>
                    <div class="article-meta">
                        <span class="read-time">⏱ 5 דקות קריאה</span>
                        <span class="category">עמלות וריווחיות</span>
                    </div>
                </div>
            </article>
            
            <!-- Article 2: WhatsApp Integration -->
            <article class="blog-card featured" itemscope itemtype="https://schema.org/Article">
                <div class="blog-card-content">
                    <h3 itemprop="headline">
                        <a href="#" itemprop="url">המדריך המלא: שליחת מסמכים וחתימות דרך WhatsApp</a>
                    </h3>
                    <meta itemprop="datePublished" content="2024-01-10">
                    <p itemprop="description">
                        85% מהלקוחות בישראל מעדיפים WhatsApp. למדו איך להשתמש ב<strong>WhatsApp Business API</strong> 
                        לשליחת מסמכי ביטוח וקבלת חתימות
                    </p>
                    <div class="article-meta">
                        <span class="read-time">⏱ 7 דקות קריאה</span>
                        <span class="category">WhatsApp וטכנולוגיה</span>
                    </div>
                </div>
            </article>
            
            <!-- Article 3: Regulatory Compliance -->
            <article class="blog-card featured" itemscope itemtype="https://schema.org/Article">
                <div class="blog-card-content">
                    <h3 itemprop="headline">
                        <a href="#" itemprop="url">רשות שוק ההון 2024: כל הדרישות החדשות במקום אחד</a>
                    </h3>
                    <meta itemprop="datePublished" content="2024-01-05">
                    <p itemprop="description">
                        סקירה מקיפה של דרישות הרגולציה החדשות מרשות שוק ההון וכיצד 
                        <strong>מערכת ניהול מסמכים</strong> עוזרת לעמוד בהן
                    </p>
                    <div class="article-meta">
                        <span class="read-time">⏱ 10 דקות קריאה</span>
                        <span class="category">רגולציה וציות</span>
                    </div>
                </div>
            </article>
        </div>
    </section>
    
    <!-- Recent Articles Grid -->
    <section class="recent-articles section">
        <div class="container">
            <h2 class="section-title">מאמרים אחרונים</h2>
            
            <div class="blog-grid">
                <!-- Article 4 -->
                <article class="blog-card" itemscope itemtype="https://schema.org/Article">
                    <h3 itemprop="headline">
                        <a href="#" itemprop="url">5 דרכים לחסוך זמן עם טפסים דיגיטליים</a>
                    </h3>
                    <p itemprop="description">גלו איך <strong>טפסים דיגיטליים ביטוח</strong> חוסכים שעות של עבודה</p>
                    <span class="category">אוטומציה</span>
                </article>
                
                <!-- Article 5 -->
                <article class="blog-card" itemscope itemtype="https://schema.org/Article">
                    <h3 itemprop="headline">
                        <a href="#" itemprop="url">השוואה: 3 מערכות CRM המובילות לסוכני ביטוח</a>
                    </h3>
                    <p itemprop="description">השוואה מקיפה של <strong>מערכת CRM ביטוח</strong> - יתרונות וחסרונות</p>
                    <span class="category">השוואות</span>
                </article>
                
                <!-- Article 6 -->
                <article class="blog-card" itemscope itemtype="https://schema.org/Article">
                    <h3 itemprop="headline">
                        <a href="#" itemprop="url">N8N לסוכני ביטוח: אוטומציה בקוד פתוח</a>
                    </h3>
                    <p itemprop="description">מדריך שימוש ב<strong>N8N אוטומציה</strong> ליצירת תהליכים אוטומטיים</p>
                    <span class="category">טכנולוגיה</span>
                </article>
                
                <!-- Article 7 -->
                <article class="blog-card" itemscope itemtype="https://schema.org/Article">
                    <h3 itemprop="headline">
                        <a href="#" itemprop="url">בינה מלאכותית בביטוח: העתיד כבר כאן</a>
                    </h3>
                    <p itemprop="description">כיצד <strong>AI insurance document processing</strong> משנה את התעשייה</p>
                    <span class="category">AI וחדשנות</span>
                </article>
                
                <!-- Article 8 -->
                <article class="blog-card" itemscope itemtype="https://schema.org/Article">
                    <h3 itemprop="headline">
                        <a href="#" itemprop="url">מדריך: העברת מסמכים מנייר לדיגיטל</a>
                    </h3>
                    <p itemprop="description">תהליך מלא של סריקה, ארגון ו<strong>ניהול מסמכים דיגיטליים</strong></p>
                    <span class="category">מדריכים</span>
                </article>
                
                <!-- Article 9 -->
                <article class="blog-card" itemscope itemtype="https://schema.org/Article">
                    <h3 itemprop="headline">
                        <a href="#" itemprop="url">אבטחת מידע לסוכני ביטוח: המדריך המלא</a>
                    </h3>
                    <p itemprop="description">כל מה שצריך לדעת על הצפנה, גיבויים ו<strong>אבטחת מסמכים</strong></p>
                    <span class="category">אבטחה</span>
                </article>
            </div>
        </div>
    </section>
    
    <!-- FAQ Section with Schema -->
    <section class="blog-faq section">
        <div class="container">
            <h2 class="section-title">שאלות נפוצות על ניהול מסמכי ביטוח</h2>
            
            <div class="faq-list" itemscope itemtype="https://schema.org/FAQPage">
                <!-- FAQ 1 -->
                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 itemprop="name">מהי חתימה דיגיטלית ואיך היא עובדת בביטוח?</h3>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">
                            חתימה דיגיטלית היא אמצעי מאובטח וחוקי לחתימה על מסמכי ביטוח. 
                            היא מאושרת על ידי רשות שוק ההון ומאפשרת חתימה מרחוק תוך שניות.
                        </p>
                    </div>
                </div>
                
                <!-- FAQ 2 -->
                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 itemprop="name">כמה זמן לוקח להטמיע מערכת ניהול מסמכים?</h3>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">
                            הטמעת מערכת כמו DocsFlow לוקחת 24-48 שעות בלבד. 
                            אנחנו מספקים הדרכה מלאה ותמיכה צמודה לאורך כל התהליך.
                        </p>
                    </div>
                </div>
                
                <!-- FAQ 3 -->
                <div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 itemprop="name">האם ניתן לשלוח מסמכים דרך WhatsApp?</h3>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p itemprop="text">
                            בהחלט! DocsFlow מאפשרת שליחת מסמכים, קבלת חתימות ותקשורת מלאה 
                            דרך WhatsApp Business API, הפלטפורמה המועדפת על 85% מהישראלים.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Newsletter Signup -->
    <section class="newsletter-section section">
        <div class="container text-center">
            <h2 class="section-title">קבלו טיפים ועדכונים ישירות למייל</h2>
            <p class="newsletter-subtitle">
                הצטרפו ל-500+ סוכני ביטוח שמקבלים תוכן בלעדי על 
                <strong>חתימה דיגיטלית</strong>, <strong>אוטומציה</strong> וחדשות הענף
            </p>
            <form class="newsletter-form" action="#" method="post">
                <input type="email" name="email" placeholder="הכניסו כתובת מייל" required>
                <button type="submit" class="btn-primary">הרשמו עכשיו</button>
            </form>
        </div>
    </section>
    
</article>

<style>
/* Blog Page Styles */
.blog-header {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 80px 0 60px;
    text-align: center;
}

.blog-header .page-title {
    color: white;
    font-size: 3rem;
    margin-bottom: 20px;
}

.blog-header .page-subtitle {
    color: rgba(255, 255, 255, 0.9);
    font-size: 1.25rem;
    margin-bottom: 30px;
}

.blog-categories {
    margin-top: 30px;
}

.blog-categories ul {
    list-style: none;
    padding: 0;
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.blog-categories a {
    color: white;
    background: rgba(255, 255, 255, 0.2);
    padding: 8px 20px;
    border-radius: 25px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.blog-categories a:hover {
    background: rgba(255, 255, 255, 0.3);
    transform: translateY(-2px);
}

.blog-card {
    background: white;
    border-radius: 12px;
    padding: 30px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
    margin-bottom: 30px;
}

.blog-card.featured {
    border-left: 4px solid #2563EB;
}

.blog-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
}

.blog-card h3 {
    font-size: 1.5rem;
    margin-bottom: 15px;
    line-height: 1.3;
}

.blog-card h3 a {
    color: #111827;
    text-decoration: none;
    transition: color 0.2s ease;
}

.blog-card h3 a:hover {
    color: #2563EB;
}

.blog-card p {
    color: #6B7280;
    line-height: 1.6;
    margin-bottom: 15px;
}

.article-meta {
    display: flex;
    gap: 20px;
    font-size: 0.875rem;
    color: #9CA3AF;
}

.category {
    display: inline-block;
    background: #EFF6FF;
    color: #2563EB;
    padding: 4px 12px;
    border-radius: 4px;
    font-size: 0.875rem;
    font-weight: 600;
}

.blog-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 30px;
}

.faq-list {
    max-width: 800px;
    margin: 0 auto;
}

.faq-item {
    background: white;
    border-radius: 8px;
    padding: 25px;
    margin-bottom: 20px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
}

.faq-item h3 {
    font-size: 1.25rem;
    margin-bottom: 15px;
    color: #111827;
}

.faq-item p {
    color: #6B7280;
    line-height: 1.6;
}

.newsletter-section {
    background: linear-gradient(135deg, #EFF6FF 0%, #F3F4F6 100%);
    padding: 60px 0;
}

.newsletter-form {
    display: flex;
    gap: 15px;
    justify-content: center;
    max-width: 500px;
    margin: 30px auto 0;
}

.newsletter-form input {
    flex: 1;
    padding: 12px 20px;
    border: 2px solid #D1D5DB;
    border-radius: 8px;
    font-size: 1rem;
}

.newsletter-form button {
    padding: 12px 30px;
    white-space: nowrap;
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .blog-header .page-title {
        font-size: 2rem;
    }
    
    .blog-categories ul {
        gap: 10px;
    }
    
    .blog-grid {
        grid-template-columns: 1fr;
    }
    
    .newsletter-form {
        flex-direction: column;
    }
    
    .newsletter-form button {
        width: 100%;
    }
}

/* SEO Keyword Highlighting */
.keyword-primary {
    font-weight: 700;
    color: #1D4ED8;
}

.keyword-highlight {
    font-weight: 600;
    color: #2563EB;
}

strong {
    font-weight: 600;
    color: #374151;
}
</style>

<?php get_footer(); ?>