<?php
/**
 * Interactive Product Demo Section
 * 
 * @package DocsFlow Child
 */
?>

<section class="section interactive-demo-section">
    <div class="container">
        <h2 class="section-title text-center">ראו איך DocsFlow עובד בפועל</h2>
        <p class="section-subtitle text-center">הדגמה אינטראקטיבית של 90 שניות שתראה לכם בדיוק איך המערכת חוסכת לכם זמן</p>
        
        <div class="demo-container">
            <div class="demo-screen">
                <div class="demo-header">
                    <div class="demo-controls">
                        <span class="demo-dot red"></span>
                        <span class="demo-dot yellow"></span>
                        <span class="demo-dot green"></span>
                    </div>
                    <div class="demo-title">DocsFlow Dashboard</div>
                </div>
                
                <div class="demo-content">
                    <!-- Step 1: Document Upload -->
                    <div class="demo-step active" data-step="1">
                        <div class="demo-visual">
                            <div class="upload-zone">
                                <div class="upload-icon">
                                    <svg class="custom-icon">
                                        <use href="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/custom-icons.svg#icon-documents"></use>
                                    </svg>
                                </div>
                                <h3>גרור קובץ או לחץ להעלאה</h3>
                                <p>תומך בכל סוגי הקבצים: PDF, DOCX, JPG</p>
                                <div class="demo-file uploading">
                                    <span class="file-icon">📄</span>
                                    <span class="file-name">פוליסת ביטוח - כהן.pdf</span>
                                    <div class="upload-progress">
                                        <div class="progress-bar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 2: Digital Signature -->
                    <div class="demo-step" data-step="2">
                        <div class="demo-visual">
                            <div class="signature-area">
                                <div class="document-preview">
                                    <div class="doc-page">
                                        <div class="doc-content">
                                            <div class="doc-line"></div>
                                            <div class="doc-line"></div>
                                            <div class="doc-line short"></div>
                                            <div class="signature-field">
                                                <span class="signature-label">חתימת הלקוח:</span>
                                                <div class="signature-box">
                                                    <svg class="signature-animation" viewBox="0 0 200 60">
                                                        <path class="signature-path" d="M20,40 C30,20 50,10 80,30 C100,40 120,20 150,35 C170,45 180,40 180,40" 
                                                              stroke="#2563EB" stroke-width="3" fill="none"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 3: WhatsApp Integration -->
                    <div class="demo-step" data-step="3">
                        <div class="demo-visual">
                            <div class="whatsapp-demo">
                                <div class="phone-mockup">
                                    <div class="phone-header">
                                        <div class="contact-info">
                                            <div class="contact-avatar">🏢</div>
                                            <div class="contact-name">DocsFlow Bot</div>
                                        </div>
                                    </div>
                                    <div class="chat-messages">
                                        <div class="message bot">
                                            <div class="message-bubble">
                                                שלום! המסמך שלך מוכן לחתימה
                                            </div>
                                        </div>
                                        <div class="message bot">
                                            <div class="message-bubble">
                                                📄 פוליסת ביטוח - כהן.pdf
                                            </div>
                                        </div>
                                        <div class="message user">
                                            <div class="message-bubble">
                                                תודה! חתמתי
                                            </div>
                                        </div>
                                        <div class="message bot">
                                            <div class="message-bubble">
                                                מעולה! המסמך נשמר במערכת ✅
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Step 4: Automated Tracking -->
                    <div class="demo-step" data-step="4">
                        <div class="demo-visual">
                            <div class="tracking-dashboard">
                                <div class="tracking-header">
                                    <h3>מעקב אוטומטי אחר המסמך</h3>
                                </div>
                                <div class="tracking-timeline">
                                    <div class="timeline-item completed">
                                        <div class="timeline-dot"></div>
                                        <div class="timeline-content">
                                            <h4>מסמך הועלה</h4>
                                            <span class="timeline-time">09:15</span>
                                        </div>
                                    </div>
                                    <div class="timeline-item completed">
                                        <div class="timeline-dot"></div>
                                        <div class="timeline-content">
                                            <h4>נשלח ללקוח</h4>
                                            <span class="timeline-time">09:16</span>
                                        </div>
                                    </div>
                                    <div class="timeline-item completed">
                                        <div class="timeline-dot"></div>
                                        <div class="timeline-content">
                                            <h4>נחתם על ידי הלקוח</h4>
                                            <span class="timeline-time">09:22</span>
                                        </div>
                                    </div>
                                    <div class="timeline-item completed">
                                        <div class="timeline-dot"></div>
                                        <div class="timeline-content">
                                            <h4>נשמר במערכת</h4>
                                            <span class="timeline-time">09:22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="demo-controls-panel">
                <div class="demo-steps">
                    <div class="step-indicator active" data-step="1">
                        <div class="step-number">1</div>
                        <div class="step-label">העלה מסמך</div>
                    </div>
                    <div class="step-indicator" data-step="2">
                        <div class="step-number">2</div>
                        <div class="step-label">חתום דיגיטלית</div>
                    </div>
                    <div class="step-indicator" data-step="3">
                        <div class="step-number">3</div>
                        <div class="step-label">שלח בWhatsApp</div>
                    </div>
                    <div class="step-indicator" data-step="4">
                        <div class="step-number">4</div>
                        <div class="step-label">עקוב אוטומטית</div>
                    </div>
                </div>
                
                <div class="demo-play-controls">
                    <button class="demo-btn demo-play" id="demoPlay">
                        <span class="play-icon">▶</span>
                        הפעל הדגמה
                    </button>
                    <button class="demo-btn demo-pause hidden" id="demoPause">
                        <span class="pause-icon">⏸</span>
                        השהה
                    </button>
                    <button class="demo-btn demo-restart" id="demoRestart">
                        <span class="restart-icon">🔄</span>
                        התחל מחדש
                    </button>
                </div>
                
                <div class="demo-progress">
                    <div class="progress-track">
                        <div class="progress-fill" id="demoProgress"></div>
                    </div>
                    <div class="progress-time">
                        <span id="currentTime">0:00</span> / <span id="totalTime">1:30</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="demo-cta">
            <h3>רוצים לנסות בעצמכם?</h3>
            <a href="#contact" class="btn-primary btn-large">התחילו ניסיון חינם</a>
        </div>
    </div>
</section>