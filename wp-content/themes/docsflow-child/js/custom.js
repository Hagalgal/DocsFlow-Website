/**
 * DocsFlow Custom JavaScript
 * 
 * @package DocsFlow Child
 */

jQuery(document).ready(function($) {
    'use strict';

    // Smooth scrolling for anchor links
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 80
                }, 1000);
                return false;
            }
        }
    });

    // Add animation on scroll
    function animateOnScroll() {
        $('.feature-card, .pricing-card, .testimonial-card').each(function() {
            var elementTop = $(this).offset().top;
            var elementBottom = elementTop + $(this).outerHeight();
            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();

            if (elementBottom > viewportTop && elementTop < viewportBottom) {
                $(this).addClass('animate-in');
            }
        });
    }

    // Animate on scroll
    $(window).on('scroll', animateOnScroll);
    animateOnScroll(); // Initial check

    // Mobile menu toggle
    $('.mobile-menu-toggle').click(function(e) {
        e.preventDefault();
        $(this).toggleClass('active');
        $('.mobile-menu').toggleClass('active');
        $('body').toggleClass('mobile-menu-open');
    });

    // Close mobile menu when clicking outside
    $(document).click(function(e) {
        if (!$(e.target).closest('.mobile-menu, .mobile-menu-toggle').length) {
            $('.mobile-menu-toggle').removeClass('active');
            $('.mobile-menu').removeClass('active');
            $('body').removeClass('mobile-menu-open');
        }
    });

    // Form validation and AJAX submission
    $('.docsflow-form').on('submit', function(e) {
        e.preventDefault();
        
        var form = $(this);
        var formData = new FormData(this);
        var submitBtn = form.find('[type="submit"]');
        var originalText = submitBtn.val();
        
        // Add loading state
        submitBtn.val('שולח...').prop('disabled', true).addClass('loading');
        
        // Clear previous errors
        form.find('.error').removeClass('error');
        form.find('.error-message').remove();
        
        // Basic validation
        var isValid = true;
        var requiredFields = form.find('[required]');
        
        requiredFields.each(function() {
            var field = $(this);
            var value = field.val().trim();
            
            if (!value) {
                field.addClass('error');
                field.after('<span class="error-message">שדה זה הוא חובה</span>');
                isValid = false;
            }
            
            // Email validation
            if (field.attr('type') === 'email' && value) {
                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(value)) {
                    field.addClass('error');
                    field.after('<span class="error-message">כתובת אימייל לא תקינה</span>');
                    isValid = false;
                }
            }
            
            // Phone validation (Israeli format)
            if (field.attr('type') === 'tel' && value) {
                var phoneRegex = /^0\d{1,2}-?\d{7}$|^(\+972|0)\d{1,2}-?\d{7}$/;
                if (!phoneRegex.test(value.replace(/\s/g, ''))) {
                    field.addClass('error');
                    field.after('<span class="error-message">מספר טלפון לא תקין</span>');
                    isValid = false;
                }
            }
        });
        
        if (!isValid) {
            submitBtn.val(originalText).prop('disabled', false).removeClass('loading');
            return;
        }
        
        // AJAX submission
        $.ajax({
            url: docsflow_ajax.ajaxurl,
            type: 'POST',
            data: {
                action: 'docsflow_form_submit',
                form_data: formData,
                nonce: docsflow_ajax.nonce
            },
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.success) {
                    form.html('<div class="success-message"><h3>תודה רבה!</h3><p>נחזור אליך בהקדם.</p></div>');
                    
                    // Track conversion if Google Analytics is available
                    if (typeof gtag !== 'undefined') {
                        gtag('event', 'conversion', {
                            'send_to': 'AW-CONVERSION_ID/CONVERSION_LABEL',
                            'event_category': 'Lead',
                            'event_label': 'Demo Request'
                        });
                    }
                } else {
                    form.prepend('<div class="error-message">אירעה שגיאה. אנא נסה שנית.</div>');
                    submitBtn.val(originalText).prop('disabled', false).removeClass('loading');
                }
            },
            error: function() {
                form.prepend('<div class="error-message">אירעה שגיאה. אנא נסה שנית.</div>');
                submitBtn.val(originalText).prop('disabled', false).removeClass('loading');
            }
        });
    });

    // Pricing card interactions
    $('.pricing-card').hover(
        function() {
            $(this).find('.pricing-badge').css('transform', 'translateX(-50%) scale(1.1)');
        },
        function() {
            $(this).find('.pricing-badge').css('transform', 'translateX(-50%) scale(1)');
        }
    );

    // Testimonial slider (if multiple testimonials)
    if ($('.testimonials-slider').length) {
        var currentSlide = 0;
        var slides = $('.testimonials-slider .testimonial-card');
        var totalSlides = slides.length;
        
        function showSlide(index) {
            slides.removeClass('active');
            slides.eq(index).addClass('active');
        }
        
        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            showSlide(currentSlide);
        }
        
        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            showSlide(currentSlide);
        }
        
        // Auto-advance testimonials
        setInterval(nextSlide, 5000);
        
        // Manual navigation
        $('.testimonial-next').click(nextSlide);
        $('.testimonial-prev').click(prevSlide);
        
        // Initialize
        showSlide(0);
    }

    // Contact form phone number formatting
    $('input[type="tel"]').on('input', function() {
        var value = $(this).val().replace(/\D/g, '');
        var formatted = '';
        
        if (value.length > 0) {
            if (value.startsWith('0')) {
                // Israeli format: 0XX-XXXXXXX
                if (value.length <= 3) {
                    formatted = value;
                } else {
                    formatted = value.substring(0, 3) + '-' + value.substring(3, 10);
                }
            } else if (value.startsWith('972')) {
                // International format: +972-XX-XXXXXXX
                formatted = '+' + value.substring(0, 3) + '-' + value.substring(3, 5) + '-' + value.substring(5, 12);
            }
        }
        
        if (formatted) {
            $(this).val(formatted);
        }
    });

    // Lazy loading for images
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });

        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }

    // Back to top button
    var backToTop = $('<div class="back-to-top"><span>↑</span></div>');
    $('body').append(backToTop);
    
    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            backToTop.addClass('visible');
        } else {
            backToTop.removeClass('visible');
        }
    });
    
    backToTop.click(function() {
        $('html, body').animate({scrollTop: 0}, 600);
    });

    // Cookie consent (if needed for GDPR)
    if (!localStorage.getItem('docsflow_cookie_consent')) {
        var cookieNotice = $('<div class="cookie-notice">').html(
            '<div class="cookie-content">' +
            '<p>אנו משתמשים בעוגיות כדי לשפר את חוויית הגלישה שלך.</p>' +
            '<button class="btn-primary btn-small accept-cookies">אני מסכים</button>' +
            '<button class="btn-secondary btn-small decline-cookies">דחה</button>' +
            '</div>'
        );
        
        $('body').append(cookieNotice);
        
        $('.accept-cookies').click(function() {
            localStorage.setItem('docsflow_cookie_consent', 'accepted');
            cookieNotice.fadeOut();
        });
        
        $('.decline-cookies').click(function() {
            localStorage.setItem('docsflow_cookie_consent', 'declined');
            cookieNotice.fadeOut();
        });
    }

    // Feature comparison table interactions
    $('.comparison-table th').click(function() {
        var column = $(this).index();
        $('.comparison-table tbody tr').each(function() {
            $(this).find('td').removeClass('highlight');
            $(this).find('td').eq(column).addClass('highlight');
        });
    });

    // Demo video modal
    $('.demo-video-trigger').click(function(e) {
        e.preventDefault();
        var videoId = $(this).data('video-id');
        var modal = $('<div class="video-modal">' +
                     '<div class="video-modal-content">' +
                     '<span class="video-modal-close">&times;</span>' +
                     '<iframe src="https://www.youtube.com/embed/' + videoId + '?autoplay=1" frameborder="0" allowfullscreen></iframe>' +
                     '</div>' +
                     '</div>');
        
        $('body').append(modal);
        modal.fadeIn();
        
        $('.video-modal-close, .video-modal').click(function(e) {
            if (e.target === this) {
                modal.fadeOut(function() {
                    modal.remove();
                });
            }
        });
    });

    // Search functionality enhancement
    $('.search-form input[type="search"]').on('input', function() {
        var searchTerm = $(this).val();
        if (searchTerm.length > 2) {
            // Add search suggestions or live search
            // This would require additional backend implementation
        }
    });

    // Print functionality for case studies
    $('.print-case-study').click(function(e) {
        e.preventDefault();
        window.print();
    });

    // Social sharing
    $('.social-share a').click(function(e) {
        e.preventDefault();
        var url = $(this).attr('href');
        var width = 600;
        var height = 400;
        var left = (screen.width - width) / 2;
        var top = (screen.height - height) / 2;
        
        window.open(url, 'share', 'width=' + width + ',height=' + height + ',left=' + left + ',top=' + top);
    });

    // Form field focus effects
    $('.form-input, input, textarea').focus(function() {
        $(this).parent().addClass('field-focused');
    }).blur(function() {
        $(this).parent().removeClass('field-focused');
    });

    // Pricing calculator (if applicable)
    $('.pricing-calculator input').on('input change', function() {
        calculatePricing();
    });

    function calculatePricing() {
        var users = parseInt($('#users').val()) || 1;
        var processes = parseInt($('#processes').val()) || 50;
        
        var basePrice = 199;
        var userPrice = (users - 1) * 49;
        var processPrice = Math.max(0, (processes - 50)) * 0.5;
        
        var totalPrice = basePrice + userPrice + processPrice;
        
        $('.calculated-price').text('₪' + totalPrice.toFixed(0) + '/חודש');
    }

    // Initialize pricing calculator if exists
    if ($('.pricing-calculator').length) {
        calculatePricing();
    }

    // Add loading states to buttons
    $('a[href^="mailto:"], a[href^="tel:"]').click(function() {
        $(this).addClass('loading').prop('disabled', true);
        setTimeout(() => {
            $(this).removeClass('loading').prop('disabled', false);
        }, 1000);
    });
});

// Additional animations CSS (to be added via JavaScript)
jQuery(document).ready(function($) {
    $('head').append('<style>' +
        '.animate-in { animation: slideInUp 0.6s ease-out; }' +
        '@keyframes slideInUp {' +
        '  from { opacity: 0; transform: translateY(30px); }' +
        '  to { opacity: 1; transform: translateY(0); }' +
        '}' +
        '.back-to-top {' +
        '  position: fixed;' +
        '  bottom: 30px;' +
        '  right: 30px;' +
        '  width: 50px;' +
        '  height: 50px;' +
        '  background: var(--primary-blue);' +
        '  color: white;' +
        '  border-radius: 50%;' +
        '  display: flex;' +
        '  align-items: center;' +
        '  justify-content: center;' +
        '  cursor: pointer;' +
        '  opacity: 0;' +
        '  visibility: hidden;' +
        '  transition: all 0.3s ease;' +
        '  z-index: 1000;' +
        '}' +
        '.back-to-top.visible {' +
        '  opacity: 1;' +
        '  visibility: visible;' +
        '}' +
        '.back-to-top:hover {' +
        '  background: var(--primary-blue-dark);' +
        '  transform: translateY(-2px);' +
        '}' +
        '.cookie-notice {' +
        '  position: fixed;' +
        '  bottom: 0;' +
        '  left: 0;' +
        '  right: 0;' +
        '  background: var(--gray-900);' +
        '  color: white;' +
        '  padding: 1rem;' +
        '  z-index: 10000;' +
        '}' +
        '.cookie-content {' +
        '  max-width: 1200px;' +
        '  margin: 0 auto;' +
        '  display: flex;' +
        '  align-items: center;' +
        '  justify-content: space-between;' +
        '  gap: 1rem;' +
        '}' +
        '@media (max-width: 768px) {' +
        '  .cookie-content { flex-direction: column; text-align: center; }' +
        '}' +
        '.video-modal {' +
        '  position: fixed;' +
        '  top: 0;' +
        '  left: 0;' +
        '  width: 100%;' +
        '  height: 100%;' +
        '  background: rgba(0, 0, 0, 0.8);' +
        '  display: none;' +
        '  z-index: 10000;' +
        '}' +
        '.video-modal-content {' +
        '  position: absolute;' +
        '  top: 50%;' +
        '  left: 50%;' +
        '  transform: translate(-50%, -50%);' +
        '  width: 90%;' +
        '  max-width: 800px;' +
        '  aspect-ratio: 16/9;' +
        '}' +
        '.video-modal-content iframe {' +
        '  width: 100%;' +
        '  height: 100%;' +
        '}' +
        '.video-modal-close {' +
        '  position: absolute;' +
        '  top: -40px;' +
        '  right: 0;' +
        '  color: white;' +
        '  font-size: 30px;' +
        '  cursor: pointer;' +
        '}' +
        '.error-message {' +
        '  color: var(--error-red);' +
        '  font-size: var(--text-sm);' +
        '  margin-top: var(--space-1);' +
        '}' +
        '.success-message {' +
        '  background: var(--success-green-light);' +
        '  color: var(--success-green);' +
        '  padding: var(--space-6);' +
        '  border-radius: var(--radius-md);' +
        '  text-align: center;' +
        '}' +
        '.field-focused {' +
        '  position: relative;' +
        '}' +
        '.field-focused::after {' +
        '  content: "";' +
        '  position: absolute;' +
        '  bottom: 0;' +
        '  left: 0;' +
        '  height: 2px;' +
        '  width: 100%;' +
        '  background: var(--primary-blue);' +
        '  animation: focusLine 0.2s ease;' +
        '}' +
        '@keyframes focusLine {' +
        '  from { width: 0; }' +
        '  to { width: 100%; }' +
        '}' +
    '</style>');
});