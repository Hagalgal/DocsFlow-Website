<?php
/**
 * Template Name: FAQ
 * 
 * @package DocsFlow Child
 */

get_header(); ?>

<div class="faq-page-wrapper">
    
    <!-- FAQ Hero Section -->
    <section class="faq-hero-section">
        <div class="container">
            <div class="faq-hero-content">
                <h1 class="faq-hero-title">שאלות נפוצות</h1>
                <p class="faq-hero-subtitle">מצא תשובות לשאלות הנפוצות על DocsFlow - המערכת המתקדמת לניהול מסמכים וחתימה דיגיטלית</p>
                <div class="faq-search">
                    <input type="search" placeholder="חפש בשאלות ותשובות..." id="faqSearch">
                    <button type="button" id="faqSearchBtn">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Categories -->
    <section class="faq-categories-section">
        <div class="container">
            <div class="faq-categories">
                <button class="faq-category-btn active" data-category="all">הכל</button>
                <button class="faq-category-btn" data-category="getting-started">התחלת עבודה</button>
                <button class="faq-category-btn" data-category="digital-signature">חתימה דיגיטלית</button>
                <button class="faq-category-btn" data-category="document-management">ניהול מסמכים</button>
                <button class="faq-category-btn" data-category="whatsapp">אינטגרציית WhatsApp</button>
                <button class="faq-category-btn" data-category="pricing">מחירים ותשלומים</button>
                <button class="faq-category-btn" data-category="technical">תמיכה טכנית</button>
            </div>
        </div>
    </section>

    <!-- FAQ Items -->
    <section class="faq-content-section">
        <div class="container">
            <div class="faq-items">
                
                <!-- Getting Started -->
                <div class="faq-item" data-category="getting-started">
                    <div class="faq-question">
                        <h3>איך מתחילים לעבוד עם DocsFlow?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>ההתחלה עם DocsFlow פשוטה ומהירה:</p>
                        <ol>
                            <li><strong>הרשמה חינמית</strong> - צרו חשבון באתר תוך דקה</li>
                            <li><strong>הגדרת פרופיל</strong> - הזינו את פרטי החברה שלכם</li>
                            <li><strong>העלאת מסמך ראשון</strong> - נסו את המערכת עם מסמך לדוגמה</li>
                            <li><strong>הדרכה אישית</strong> - נציג שלנו ילווה אתכם בשלבים הראשונים</li>
                        </ol>
                        <p>כל התהליך אורך פחות מ-10 דקות ותוכלו להתחיל לעבוד מיד!</p>
                    </div>
                </div>

                <div class="faq-item" data-category="getting-started">
                    <div class="faq-question">
                        <h3>האם יש ניסיון חינם?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p><strong>כן!</strong> אנו מציעים ניסיון חינם של 14 יום הכולל:</p>
                        <ul>
                            <li>גישה מלאה לכל התכונות</li>
                            <li>עד 50 מסמכים לחודש</li>
                            <li>תמיכה טכנית מלאה</li>
                            <li>הדרכה אישית</li>
                        </ul>
                        <p>לא נדרש כרטיס אשראי להתחלת הניסיון.</p>
                    </div>
                </div>

                <!-- Digital Signature -->
                <div class="faq-item" data-category="digital-signature">
                    <div class="faq-question">
                        <h3>האם החתימה הדיגיטלית מאושרת בישראל?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p><strong>כן, בהחלט!</strong> החתימה הדיגיטלית שלנו:</p>
                        <ul>
                            <li>מאושרת על פי חוק החתימה האלקטרונית התשס"א-2001</li>
                            <li>תואמת תקני ISO 27001 לאבטחת מידע</li>
                            <li>מוכרת על ידי כל חברות הביטוח הגדולות</li>
                            <li>בעלת תוקף משפטי מלא</li>
                        </ul>
                        <p>עבדנו עם יועצים משפטיים מובילים כדי להבטיח התאמה מלאה לחקיקה הישראלית.</p>
                    </div>
                </div>

                <div class="faq-item" data-category="digital-signature">
                    <div class="faq-question">
                        <h3>כמה זמן לוקח לחתום על מסמך?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>החתימה מהירה במיוחד:</p>
                        <ul>
                            <li><strong>מהמחשב:</strong> פחות מ-30 שניות</li>
                            <li><strong>מהנייד:</strong> פחות מ-60 שניות</li>
                            <li><strong>דרך WhatsApp:</strong> פחות מ-2 דקות</li>
                        </ul>
                        <p>הלקוח מקבל את המסמך החתום מיד לאימייל ול-WhatsApp.</p>
                    </div>
                </div>

                <!-- Document Management -->
                <div class="faq-item" data-category="document-management">
                    <div class="faq-question">
                        <h3>איך המערכת מארגנת את המסמכים?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>המערכת מארגנת מסמכים באופן אוטומטי:</p>
                        <ul>
                            <li><strong>לפי לקוחות:</strong> כל לקוח יקבל תיקיה נפרדת</li>
                            <li><strong>לפי סוגי מסמכים:</strong> פוליסות, הצעות, טפסים וכו'</li>
                            <li><strong>לפי תאריכים:</strong> מיון כרונולוגי אוטומטי</li>
                            <li><strong>תגיות מותאמות:</strong> תוכלו להוסיף תגיות משלכם</li>
                        </ul>
                        <p>בנוסף, חיפוש מתקדם המאפשר למצוא כל מסמך תוך שניות.</p>
                    </div>
                </div>

                <div class="faq-item" data-category="document-management">
                    <div class="faq-question">
                        <h3>האם המסמכים מוגבים באופן אוטומטי?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p><strong>כן!</strong> כל המסמכים מוגבים אוטומטי:</p>
                        <ul>
                            <li>גיבוי יומי אוטומטי בענן</li>
                            <li>שמירה במספר מרכזי נתונים</li>
                            <li>הצפנה ברמה צבאית (AES-256)</li>
                            <li>גישה בכל זמן, מכל מקום</li>
                        </ul>
                        <p>אתם לא תאבדו עוד מסמך חשוב!</p>
                    </div>
                </div>

                <!-- WhatsApp Integration -->
                <div class="faq-item" data-category="whatsapp">
                    <div class="faq-question">
                        <h3>איך עובדת האינטגרציה עם WhatsApp?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>האינטגרציה עם WhatsApp מהפכנית:</p>
                        <ol>
                            <li><strong>שליחה אוטומטית:</strong> המסמך נשלח ללקוח בWhatsApp</li>
                            <li><strong>חתימה בנייד:</strong> הלקוח חותם ישירות מהטלפון</li>
                            <li><strong>מעקב בזמן אמת:</strong> תקבלו התראה כשהלקוח חתם</li>
                            <li><strong>ארכיון אוטומטי:</strong> השיחה והמסמכים נשמרים במערכת</li>
                        </ol>
                        <p>הלקוחות אוהבים את הנוחות - לא צריך להוריד אפליקציות נוספות!</p>
                    </div>
                </div>

                <div class="faq-item" data-category="whatsapp">
                    <div class="faq-question">
                        <h3>האם WhatsApp Business הוא בחינם?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>האינטגרציה עם WhatsApp כלולה בכל התוכניות:</p>
                        <ul>
                            <li>אין עלות נוספת עבור ההודעות</li>
                            <li>חיבור קל למספר הWhatsApp Business שלכם</li>
                            <li>תמיכה בהודעות טמפלט מאושרות</li>
                            <li>דיווחים מפורטים על כל השיחות</li>
                        </ul>
                        <p>זה הכלי המשתלם ביותר לתקשורת עם לקוחות!</p>
                    </div>
                </div>

                <!-- Pricing -->
                <div class="faq-item" data-category="pricing">
                    <div class="faq-question">
                        <h3>מה כלול במחיר החודשי?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>התוכנית הבסיסית כללת:</p>
                        <ul>
                            <li>עד 500 מסמכים בחודש</li>
                            <li>חתימה דיגיטלית ללא הגבלה</li>
                            <li>אינטגרציה מלאה עם WhatsApp</li>
                            <li>איחסון בענן ללא הגבלה</li>
                            <li>תמיכה טכנית בעברית</li>
                            <li>עדכונים אוטומטיים</li>
                            <li>גיבוי יומי</li>
                        </ul>
                        <p><strong>אין עלויות נסתרות!</strong> המחיר כולל הכל.</p>
                    </div>
                </div>

                <div class="faq-item" data-category="pricing">
                    <div class="faq-question">
                        <h3>האם יש הנחה לשנה מראש?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p><strong>כן!</strong> תשלום שנתי חוסך כסף:</p>
                        <ul>
                            <li><strong>הנחה של 20%</strong> על התשלום השנתי</li>
                            <li><strong>חודשיים חינם</strong> בפועל</li>
                            <li><strong>נעילת מחיר</strong> - לא יעלה במהלך השנה</li>
                            <li><strong>עדיפות בתמיכה</strong> טכנית</li>
                        </ul>
                        <p>רוב הלקוחות שלנו בוחרים בתשלום שנתי בגלל החיסכון המשמעותי.</p>
                    </div>
                </div>

                <!-- Technical Support -->
                <div class="faq-item" data-category="technical">
                    <div class="faq-question">
                        <h3>איך מקבלים תמיכה טכנית?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>התמיכה שלנו זמינה בכמה ערוצים:</p>
                        <ul>
                            <li><strong>צ'אט בזמן אמת:</strong> באתר, זמן תגובה - דקות</li>
                            <li><strong>WhatsApp:</strong> 050-1234567, זמין 24/7</li>
                            <li><strong>טלפון:</strong> 03-1234567, ימים א'-ה' 8:00-18:00</li>
                            <li><strong>אימייל:</strong> support@docsflow.co.il</li>
                            <li><strong>הדרכה מרחוק:</strong> TeamViewer או Zoom</li>
                        </ul>
                        <p>הצוות שלנו דובר עברית ומכיר את השוק הישראלי!</p>
                    </div>
                </div>

                <div class="faq-item" data-category="technical">
                    <div class="faq-question">
                        <h3>האם המערכת עובדת על כל הדפדפנים?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>DocsFlow תואמת לכל הדפדפנים המודרניים:</p>
                        <ul>
                            <li><strong>Chrome</strong> - מומלץ, גרסה 90 ומעלה</li>
                            <li><strong>Firefox</strong> - גרסה 88 ומעלה</li>
                            <li><strong>Safari</strong> - גרסה 14 ומעלה</li>
                            <li><strong>Edge</strong> - גרסה 90 ומעלה</li>
                        </ul>
                        <p><strong>גם במובייל:</strong> עובדת מעולה על iOS ו-Android!</p>
                    </div>
                </div>

                <div class="faq-item" data-category="technical">
                    <div class="faq-question">
                        <h3>מה קורה אם יש תקלה במערכת?</h3>
                        <span class="faq-toggle">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>אנחנו מבטיחים זמינות של 99.9%:</p>
                        <ul>
                            <li><strong>מוניטורינג 24/7:</strong> המערכת מנוטרת בכל רגע</li>
                            <li><strong>גיבוי מיידי:</strong> מעבר אוטומטי לשרת גיבוי</li>
                            <li><strong>התראות מיידיות:</strong> תקבלו הודעה על כל תקלה</li>
                            <li><strong>פתרון מהיר:</strong> זמן תיקון ממוצע - פחות משעה</li>
                        </ul>
                        <p>בחמש השנים האחרונות היה לנו פחות מ-4 שעות של תקלות בסך הכל!</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FAQ Contact -->
    <section class="faq-contact-section">
        <div class="container">
            <div class="faq-contact-content">
                <h2>לא מצאתם את התשובה שחיפשתם?</h2>
                <p>הצוות שלנו כאן כדי לעזור! פנו אלינו בכל דרך שנוחה לכם</p>
                <div class="faq-contact-buttons">
                    <a href="https://app.docsflow.co.il" class="btn-primary" target="_blank">התחל ניסיון חינם</a>
                    <a href="/contact" class="btn-secondary">צור קשר</a>
                </div>
            </div>
        </div>
    </section>

</div>

<style>
/* FAQ Page Styles */
.faq-page-wrapper {
    overflow-x: hidden;
}

.faq-hero-section {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 120px 0 80px 0;
    text-align: center;
}

.faq-hero-title {
    font-size: 3rem;
    font-weight: 900;
    margin-bottom: 1rem;
}

.faq-hero-subtitle {
    font-size: 1.25rem;
    margin-bottom: 2rem;
    opacity: 0.9;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.faq-search {
    position: relative;
    max-width: 500px;
    margin: 0 auto;
}

.faq-search input {
    width: 100%;
    padding: 1rem 3rem 1rem 1rem;
    border: none;
    border-radius: 50px;
    font-size: 1rem;
    direction: rtl;
}

.faq-search button {
    position: absolute;
    left: 1rem;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    color: #666;
    cursor: pointer;
}

.faq-search button svg {
    width: 20px;
    height: 20px;
}

.faq-categories-section {
    padding: 2rem 0;
    background: #f8fafc;
}

.faq-categories {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 1rem;
}

.faq-category-btn {
    padding: 0.75rem 1.5rem;
    border: 2px solid #e5e7eb;
    background: white;
    border-radius: 25px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.faq-category-btn:hover,
.faq-category-btn.active {
    background: #667eea;
    color: white;
    border-color: #667eea;
}

.faq-content-section {
    padding: 4rem 0;
}

.faq-items {
    max-width: 800px;
    margin: 0 auto;
}

.faq-item {
    background: white;
    border-radius: 12px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 1rem;
    overflow: hidden;
    transition: all 0.3s ease;
}

.faq-item:hover {
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
}

.faq-question {
    padding: 1.5rem;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: white;
    border-bottom: 1px solid #f3f4f6;
}

.faq-question h3 {
    margin: 0;
    font-size: 1.125rem;
    font-weight: 600;
    color: #1f2937;
}

.faq-toggle {
    font-size: 1.5rem;
    font-weight: bold;
    color: #667eea;
    transition: transform 0.3s ease;
}

.faq-item.active .faq-toggle {
    transform: rotate(45deg);
}

.faq-answer {
    padding: 0 1.5rem;
    max-height: 0;
    overflow: hidden;
    transition: all 0.3s ease;
}

.faq-item.active .faq-answer {
    padding: 1.5rem;
    max-height: 1000px;
}

.faq-answer p {
    margin-bottom: 1rem;
    line-height: 1.7;
    color: #4b5563;
}

.faq-answer ul,
.faq-answer ol {
    margin-bottom: 1rem;
    padding-right: 1.5rem;
}

.faq-answer li {
    margin-bottom: 0.5rem;
    line-height: 1.6;
    color: #4b5563;
}

.faq-answer strong {
    color: #1f2937;
}

.faq-contact-section {
    background: linear-gradient(135deg, #f8fafc 0%, #e5e7eb 100%);
    padding: 4rem 0;
    text-align: center;
}

.faq-contact-content h2 {
    font-size: 2rem;
    margin-bottom: 1rem;
    color: #1f2937;
}

.faq-contact-content p {
    font-size: 1.125rem;
    margin-bottom: 2rem;
    color: #6b7280;
}

.faq-contact-buttons {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .faq-hero-title {
        font-size: 2rem;
    }
    
    .faq-hero-subtitle {
        font-size: 1rem;
    }
    
    .faq-categories {
        gap: 0.5rem;
    }
    
    .faq-category-btn {
        padding: 0.5rem 1rem;
        font-size: 0.875rem;
    }
    
    .faq-question {
        padding: 1rem;
    }
    
    .faq-question h3 {
        font-size: 1rem;
    }
    
    .faq-contact-buttons {
        flex-direction: column;
        align-items: center;
    }
}
</style>

<script>
jQuery(document).ready(function($) {
    // FAQ Toggle Functionality
    $('.faq-question').click(function() {
        const faqItem = $(this).closest('.faq-item');
        const isActive = faqItem.hasClass('active');
        
        // Close all other items
        $('.faq-item').removeClass('active');
        
        // Toggle current item
        if (!isActive) {
            faqItem.addClass('active');
        }
    });
    
    // Category Filter
    $('.faq-category-btn').click(function() {
        const category = $(this).data('category');
        
        // Update active button
        $('.faq-category-btn').removeClass('active');
        $(this).addClass('active');
        
        // Filter FAQ items
        if (category === 'all') {
            $('.faq-item').fadeIn();
        } else {
            $('.faq-item').hide();
            $(`.faq-item[data-category="${category}"]`).fadeIn();
        }
        
        // Close all open items
        $('.faq-item').removeClass('active');
    });
    
    // Search Functionality
    $('#faqSearch, #faqSearchBtn').on('input keyup', function() {
        const searchTerm = $('#faqSearch').val().toLowerCase();
        
        $('.faq-item').each(function() {
            const question = $(this).find('.faq-question h3').text().toLowerCase();
            const answer = $(this).find('.faq-answer').text().toLowerCase();
            
            if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                $(this).fadeIn();
            } else {
                $(this).fadeOut();
            }
        });
        
        // Reset category filter when searching
        if (searchTerm.length > 0) {
            $('.faq-category-btn').removeClass('active');
            $('.faq-category-btn[data-category="all"]').addClass('active');
        }
    });
    
    // Enter key search
    $('#faqSearch').keypress(function(e) {
        if (e.which === 13) {
            $('#faqSearchBtn').click();
        }
    });
});
</script>

<?php get_footer(); ?>