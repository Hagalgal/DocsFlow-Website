/**
 * WhatsApp Widget & Social Proof System
 * 
 * @package DocsFlow Child
 */

jQuery(document).ready(function($) {
    'use strict';

    // Initialize WhatsApp Widget and Social Proof when page loads
    initWhatsAppWidget();
    initSocialProofNotifications();
});

// WhatsApp Widget System
function initWhatsAppWidget() {
    if (!jQuery('#whatsappWidget').length) return;
    
    const $ = jQuery;
    let isOpen = false;
    
    // Toggle chat box
    $('#whatsappButton').click(function() {
        const chatBox = $('#whatsappChatBox');
        
        if (isOpen) {
            chatBox.fadeOut(300);
            isOpen = false;
        } else {
            chatBox.fadeIn(300);
            isOpen = true;
            
            // Track widget opening
            if (typeof gtag !== 'undefined') {
                gtag('event', 'whatsapp_open', {
                    'event_category': 'Chat',
                    'event_label': 'Widget Opened'
                });
            }
        }
    });
    
    // Close chat box
    $('#chatClose').click(function() {
        $('#whatsappChatBox').fadeOut(300);
        isOpen = false;
    });
    
    // Quick reply buttons
    $('.quick-reply').click(function() {
        const message = $(this).data('message');
        sendQuickReply(message);
    });
    
    // Send message
    $('#chatSend').click(function() {
        const message = $('#chatInput').val().trim();
        if (message) {
            sendMessage(message);
        }
    });
    
    // Enter key to send
    $('#chatInput').keypress(function(e) {
        if (e.which === 13) {
            const message = $(this).val().trim();
            if (message) {
                sendMessage(message);
            }
        }
    });
    
    function sendQuickReply(message) {
        // Add user message to chat
        addMessageToChat(message, 'user');
        
        // Simulate bot response
        setTimeout(() => {
            let response = '';
            
            if (message.includes('חתימה דיגיטלית')) {
                response = '🖊️ החתימה הדיגיטלית שלנו מאושרת ומאובטחת בהתאם לתקן הישראלי. האם תרצה לקבל הדגמה חינם?';
            } else if (message.includes('מחירים')) {
                response = '💰 המחירים שלנו מתחילים מ-199₪ לחודש. האם תרצה פירוט מלא של החבילות?';
            } else if (message.includes('ניסיון חינם')) {
                response = '🎉 נהדר! אני יכול לקבוע לך הדגמה אישית של 15 דקות. איזה זמן נוח לך?';
            } else {
                response = 'תודה על הפנייה! מומחה שלנו יחזור אליך תוך דקות ספורות.';
            }
            
            addMessageToChat(response, 'bot');
        }, 1000);
        
        // Track quick reply usage
        if (typeof gtag !== 'undefined') {
            gtag('event', 'quick_reply_click', {
                'event_category': 'Chat',
                'event_label': message.substring(0, 50)
            });
        }
    }
    
    function sendMessage(message) {
        // Add user message to chat
        addMessageToChat(message, 'user');
        
        // Clear input
        $('#chatInput').val('');
        
        // Simulate bot response
        setTimeout(() => {
            let response = 'תודה על ההודעה! מומחה שלנו יחזור אליך בהקדם האפשרי.';
            
            if (message.includes('מחיר') || message.includes('עולה') || message.includes('כסף')) {
                response = '💰 המחירים שלנו מתחילים מ-199₪ לחודש ויש לנו גם תקופת ניסיון חינם של 14 יום!';
            } else if (message.includes('זמן') || message.includes('מהיר') || message.includes('כמה')) {
                response = '⚡ ההקמה לוקחת רק 10 דקות והתמיכה שלנו זמינה 24/7!';
            } else if (message.includes('תמיכה') || message.includes('עזרה') || message.includes('בעיה')) {
                response = '🛟 הצוות שלנו כאן כדי לעזור! נוכל לקבוע שיחה עכשיו או שתוכל לכתוב לנו ב-WhatsApp';
            }
            
            addMessageToChat(response, 'bot');
        }, 1500);
    }
    
    function addMessageToChat(message, sender) {
        const now = new Date();
        const time = now.getHours().toString().padStart(2, '0') + ':' + 
                    now.getMinutes().toString().padStart(2, '0');
        
        const messageHtml = `
            <div class="message ${sender}">
                <div class="message-bubble">
                    ${message}
                </div>
                <div class="message-time">${time}</div>
            </div>
        `;
        
        const chatMessages = $('#chatMessages');
        chatMessages.append(messageHtml);
        chatMessages.scrollTop(chatMessages[0].scrollHeight);
    }
    
    // Close on outside click
    $(document).click(function(e) {
        if (!$(e.target).closest('#whatsappWidget').length && isOpen) {
            $('#whatsappChatBox').fadeOut(300);
            isOpen = false;
        }
    });
}

// Social Proof Notifications System
function initSocialProofNotifications() {
    if (typeof socialProofData === 'undefined' || !socialProofData.length) return;
    
    const $ = jQuery;
    let currentIndex = 0;
    let notificationInterval;
    
    function showNotification() {
        const notification = socialProofData[currentIndex];
        const avatar = getAvatarForName(notification.name);
        
        const notificationHtml = `
            <div class="social-proof-notification" style="display: none;">
                <div class="social-proof-content">
                    <div class="social-proof-avatar">${avatar}</div>
                    <div class="social-proof-text">
                        <div class="social-proof-name">${notification.name}</div>
                        <div class="social-proof-action">${notification.action}</div>
                        <div class="social-proof-time">לפני ${notification.time}</div>
                    </div>
                </div>
            </div>
        `;
        
        const container = $('#socialProofContainer');
        const $notification = $(notificationHtml);
        container.append($notification);
        
        // Show notification
        $notification.fadeIn(500);
        
        // Remove after 4 seconds
        setTimeout(() => {
            $notification.fadeOut(500, function() {
                $(this).remove();
            });
        }, 4000);
        
        // Move to next notification
        currentIndex = (currentIndex + 1) % socialProofData.length;
        
        // Track social proof view
        if (typeof gtag !== 'undefined') {
            gtag('event', 'social_proof_view', {
                'event_category': 'Social Proof',
                'event_label': notification.action
            });
        }
    }
    
    function getAvatarForName(name) {
        // Extract first letter for avatar
        const firstLetter = name.charAt(0);
        const avatars = ['👨‍💼', '👩‍💼', '🧑‍💻', '👨‍💻', '👩‍💻'];
        
        // Return emoji based on name hash
        const hash = name.split('').reduce((a, b) => {
            a = ((a << 5) - a) + b.charCodeAt(0);
            return a & a;
        }, 0);
        
        return avatars[Math.abs(hash) % avatars.length];
    }
    
    // Show first notification after 3 seconds
    setTimeout(() => {
        showNotification();
        
        // Then show notifications every 15 seconds
        notificationInterval = setInterval(showNotification, 15000);
    }, 3000);
    
    // Pause notifications when page is hidden
    $(document).on('visibilitychange', function() {
        if (document.hidden) {
            clearInterval(notificationInterval);
        } else {
            notificationInterval = setInterval(showNotification, 15000);
        }
    });
}