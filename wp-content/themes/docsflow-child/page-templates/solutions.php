<?php
/**
 * Template Name: Solutions Page
 * 
 * @package DocsFlow Child
 */

get_header(); 

// Get the current page slug to determine which solution to display
$current_slug = get_post_field('post_name', get_post());

// Define solution content based on slug
$solutions = array(
    'digital-signature' => array(
        'title' => 'חתימה דיגיטלית',
        'subtitle' => 'חתימה דיגיטלית מאושרת על כל סוגי המסמכים',
        'description' => 'פתרון החתימה הדיגיטלית המתקדם של DocsFlow מאפשר לכם ולל לקוחותיכם לחתום על מסמכים בצורה מאובטחת ומהירה, מכל מקום ובכל זמן.',
        'features' => array(
            'חתימה מאושרת משפטית בישראל',
            'חתימה מרובת משתתפים',
            'מעקב בזמן אמת אחר סטטוס חתימות',
            'שליחה אוטומטית ב-WhatsApp',
            'אישורי חתימה מיידיים',
            'ארכיון דיגיטלי מאובטח'
        ),
        'benefits' => array(
            'חיסכון של 90% בזמן טיפול במסמכים',
            'ביטול הצורך בהדפסות וסריקות',
            'שיפור חווית הלקוח',
            'הפחתת טעויות אנוש'
        )
    ),
    'document-management' => array(
        'title' => 'ניהול מסמכים',
        'subtitle' => 'ארגון אוטומטי וחכם של כל המסמכים שלכם',
        'description' => 'מערכת ניהול המסמכים של DocsFlow מארגנת באופן אוטומטי את כל המסמכים שלכם, מאפשרת חיפוש מהיר ושיתוף קל עם לקוחות ועמיתים.',
        'features' => array(
            'סידור אוטומטי לפי לקוחות וסוגי מסמכים',
            'חיפוש חכם בתוך מסמכים',
            'תיוג וקטלוג אוטומטי',
            'גרסאות והיסטוריית שינויים',
            'הרשאות גישה מתקדמות',
            'סנכרון עם ענן'
        ),
        'benefits' => array(
            'מציאת מסמכים תוך שניות',
            'סדר וארגון מושלם',
            'גישה מכל מקום ומכשיר',
            'אבטחת מידע מקסימלית'
        )
    ),
    'process-automation' => array(
        'title' => 'אוטומציה של תהליכים',
        'subtitle' => 'תהליכי עבודה אוטומטיים שחוסכים זמן יקר',
        'description' => 'הגדירו תהליכי עבודה אוטומטיים שיטפלו בשגרה במקומכם - תזכורות, משימות, התראות ועוד, כך שתוכלו להתמקד במה שחשוב באמת.',
        'features' => array(
            'יצירת תהליכים מותאמים אישית',
            'תזכורות אוטומטיות ללקוחות',
            'ניהול משימות חכם',
            'התראות בזמן אמת',
            'אינטגרציה עם לוח שנה',
            'דוחות ביצועים אוטומטיים'
        ),
        'benefits' => array(
            'חיסכון של 70% בעבודה ידנית',
            'אפס פספוסים ושכחות',
            'שיפור השירות ללקוחות',
            'התמקדות במכירות ושירות'
        )
    )
);

// Get the current solution or default to digital signature
$current_solution = isset($solutions[$current_slug]) ? $solutions[$current_slug] : $solutions['digital-signature'];
?>

<div class="solution-page-wrapper">
    
    <!-- Page Header -->
    <section class="page-header solution-header">
        <div class="container">
            <h1 class="page-title"><?php echo $current_solution['title']; ?></h1>
            <p class="page-subtitle"><?php echo $current_solution['subtitle']; ?></p>
        </div>
    </section>

    <!-- Solution Overview -->
    <section class="section solution-overview">
        <div class="container">
            <div class="overview-grid">
                <div class="overview-content">
                    <h2 class="section-title">סקירה כללית</h2>
                    <p class="overview-description"><?php echo $current_solution['description']; ?></p>
                    <div class="overview-cta">
                        <a href="/contact" class="btn-primary btn-large">בקש הדגמה חינם</a>
                        <a href="/pricing" class="btn-secondary btn-large">ראה מחירים</a>
                    </div>
                </div>
                <div class="overview-image">
                    <!-- Placeholder for solution image -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/solution-placeholder.svg" alt="<?php echo $current_solution['title']; ?>">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="section features-section">
        <div class="container">
            <h2 class="section-title text-center">תכונות עיקריות</h2>
            <div class="grid-3">
                <?php foreach ($current_solution['features'] as $feature) : ?>
                <div class="feature-item">
                    <div class="feature-icon">
                        <span class="dashicons dashicons-yes-alt"></span>
                    </div>
                    <h4 class="feature-title"><?php echo $feature; ?></h4>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="section benefits-section">
        <div class="container">
            <h2 class="section-title text-center">היתרונות שלכם</h2>
            <div class="grid-2">
                <?php foreach ($current_solution['benefits'] as $benefit) : ?>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <span class="dashicons dashicons-arrow-right-alt"></span>
                    </div>
                    <div class="benefit-content">
                        <p><?php echo $benefit; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="section how-it-works">
        <div class="container">
            <h2 class="section-title text-center">איך זה עובד?</h2>
            <div class="steps-grid">
                <div class="step-item">
                    <div class="step-number">1</div>
                    <h4 class="step-title">הרשמה מהירה</h4>
                    <p class="step-description">הירשמו למערכת תוך דקות ספורות</p>
                </div>
                <div class="step-arrow">←</div>
                <div class="step-item">
                    <div class="step-number">2</div>
                    <h4 class="step-title">הגדרת המערכת</h4>
                    <p class="step-description">התאימו את המערכת לצרכים שלכם</p>
                </div>
                <div class="step-arrow">←</div>
                <div class="step-item">
                    <div class="step-number">3</div>
                    <h4 class="step-title">התחילו לעבוד</h4>
                    <p class="step-description">התחילו לחסוך זמן מהיום הראשון</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Use Cases Section -->
    <section class="section use-cases">
        <div class="container">
            <h2 class="section-title text-center">מקרי שימוש נפוצים</h2>
            <div class="use-cases-grid">
                <div class="use-case-card">
                    <h4>חתימה על פוליסות</h4>
                    <p>שליחת פוליסות לחתימה דיגיטלית ישירות ללקוח</p>
                </div>
                <div class="use-case-card">
                    <h4>אישורי ביטוח</h4>
                    <p>הפקה ושליחה מהירה של אישורי ביטוח חתומים</p>
                </div>
                <div class="use-case-card">
                    <h4>טפסי הצטרפות</h4>
                    <p>מילוי וחתימה דיגיטלית על טפסי הצטרפות</p>
                </div>
                <div class="use-case-card">
                    <h4>דוחות תביעה</h4>
                    <p>ניהול וארכוב דיגיטלי של דוחות תביעה</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section cta-section">
        <div class="container text-center">
            <h2 class="section-title">מוכנים להתחיל?</h2>
            <p class="cta-subtitle">הצטרפו לסוכני הביטוח המובילים שכבר עובדים עם <?php echo $current_solution['title']; ?></p>
            <div class="cta-buttons">
                <a href="/contact" class="btn-primary btn-large">בקש הדגמה חינם</a>
                <a href="/features" class="btn-secondary btn-large">ראה את כל התכונות</a>
            </div>
        </div>
    </section>

    <!-- Other Solutions -->
    <section class="section other-solutions">
        <div class="container">
            <h2 class="section-title text-center">פתרונות נוספים</h2>
            <div class="grid-3">
                <?php 
                foreach ($solutions as $slug => $solution) {
                    if ($slug !== $current_slug) {
                        ?>
                        <a href="/solutions/<?php echo $slug; ?>" class="solution-card">
                            <h4><?php echo $solution['title']; ?></h4>
                            <p><?php echo $solution['subtitle']; ?></p>
                            <span class="learn-more">למידע נוסף ←</span>
                        </a>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>

</div>

<style>
/* Solution Page Specific Styles */
.solution-page-wrapper {
    padding-top: var(--space-8);
}

.solution-header {
    background: linear-gradient(135deg, var(--primary-blue-ultra-light) 0%, var(--white) 100%);
}

/* Overview Section */
.overview-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-12);
    align-items: center;
}

.overview-description {
    font-size: var(--text-lg);
    line-height: 1.6;
    color: var(--gray-700);
    margin-bottom: var(--space-8);
}

.overview-cta {
    display: flex;
    gap: var(--space-4);
}

.overview-image img {
    width: 100%;
    height: auto;
}

/* Features Section */
.features-section {
    background: var(--gray-50);
}

.feature-item {
    display: flex;
    align-items: flex-start;
    gap: var(--space-4);
    padding: var(--space-6);
    background: var(--white);
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-sm);
}

.feature-icon {
    width: 40px;
    height: 40px;
    background: var(--success-green-light);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.feature-icon .dashicons {
    color: var(--success-green);
    font-size: 24px;
}

.feature-title {
    font-size: var(--text-base);
    font-weight: 600;
    color: var(--gray-900);
    margin: 0;
}

/* Benefits Section */
.benefit-card {
    display: flex;
    align-items: center;
    gap: var(--space-4);
    padding: var(--space-6);
    background: var(--white);
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-sm);
}

.benefit-icon {
    color: var(--primary-blue);
    font-size: 24px;
}

.benefit-content p {
    margin: 0;
    font-size: var(--text-lg);
    color: var(--gray-700);
}

/* How It Works */
.how-it-works {
    background: var(--primary-blue-ultra-light);
}

.steps-grid {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: var(--space-4);
    margin-top: var(--space-12);
}

.step-item {
    text-align: center;
    flex: 1;
}

.step-number {
    width: 60px;
    height: 60px;
    background: var(--primary-blue);
    color: var(--white);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: var(--text-2xl);
    font-weight: 700;
    margin: 0 auto var(--space-4);
}

.step-title {
    font-size: var(--text-xl);
    font-weight: 600;
    margin-bottom: var(--space-2);
}

.step-description {
    color: var(--gray-600);
}

.step-arrow {
    font-size: var(--text-3xl);
    color: var(--primary-blue);
    flex: 0;
}

/* Use Cases */
.use-cases-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: var(--space-6);
    margin-top: var(--space-8);
}

.use-case-card {
    padding: var(--space-6);
    background: var(--white);
    border-radius: var(--radius-lg);
    border: 2px solid var(--gray-200);
    transition: all 0.3s ease;
}

.use-case-card:hover {
    border-color: var(--primary-blue);
    transform: translateY(-2px);
}

.use-case-card h4 {
    font-size: var(--text-lg);
    margin-bottom: var(--space-2);
    color: var(--gray-900);
}

.use-case-card p {
    color: var(--gray-600);
    margin: 0;
}

/* Other Solutions */
.other-solutions {
    background: var(--gray-50);
}

.solution-card {
    display: block;
    padding: var(--space-6);
    background: var(--white);
    border-radius: var(--radius-lg);
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: var(--shadow-sm);
}

.solution-card:hover {
    transform: translateY(-4px);
    box-shadow: var(--shadow-lg);
}

.solution-card h4 {
    font-size: var(--text-xl);
    color: var(--gray-900);
    margin-bottom: var(--space-2);
}

.solution-card p {
    color: var(--gray-600);
    margin-bottom: var(--space-4);
}

.learn-more {
    color: var(--primary-blue);
    font-weight: 600;
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .overview-grid {
        grid-template-columns: 1fr;
        gap: var(--space-8);
    }
    
    .overview-cta {
        flex-direction: column;
    }
    
    .steps-grid {
        flex-direction: column;
    }
    
    .step-arrow {
        transform: rotate(90deg);
    }
}
</style>

<?php get_footer(); ?>