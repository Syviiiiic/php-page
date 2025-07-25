document.addEventListener('DOMContentLoaded', function() {
    // Простая анимация для кнопки CTA
    const ctaButton = document.querySelector('.cta-button');
    if (ctaButton) {
        ctaButton.addEventListener('mouseover', function() {
            this.style.transform = 'scale(1.05)';
        });
        
        ctaButton.addEventListener('mouseout', function() {
            this.style.transform = 'scale(1)';
        });
    }
    
    // Валидация формы контактов
    const contactForm = document.querySelector('.contact-form form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            const email = document.getElementById('email').value;
            if (!email.includes('@')) {
                alert('Пожалуйста, введите корректный email');
                e.preventDefault();
            }
        });
    }
});
